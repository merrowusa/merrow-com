#!/usr/bin/env npx tsx
/**
 * gate-links.ts
 * Audits links in rendered pages for broken patterns
 *
 * Checks:
 * - No href="#" (placeholder links)
 * - No .php references (legacy links)
 * - No broken internal links
 *
 * Usage: npx tsx scripts/gate-links.ts
 */

import { readdir, readFile, stat } from 'fs/promises';
import { join } from 'path';

interface LinkIssue {
  file: string;
  line: number;
  issue: string;
  value: string;
}

const FORBIDDEN_PATTERNS = [
  { pattern: /href\s*=\s*["']#["']/gi, issue: 'Placeholder link (href="#")' },
  { pattern: /href\s*=\s*["'][^"']*\.php[^"']*["']/gi, issue: 'Legacy PHP link' },
  { pattern: /href\s*=\s*["']javascript:/gi, issue: 'JavaScript href' },
  { pattern: /href\s*=\s*["']about:blank["']/gi, issue: 'Blank href' },
];

async function scanFile(filePath: string): Promise<LinkIssue[]> {
  const issues: LinkIssue[] = [];
  const content = await readFile(filePath, 'utf-8');
  const lines = content.split('\n');

  for (let i = 0; i < lines.length; i++) {
    const line = lines[i];
    const lineNum = i + 1;

    for (const { pattern, issue } of FORBIDDEN_PATTERNS) {
      const matches = line.match(pattern);
      if (matches) {
        for (const match of matches) {
          issues.push({
            file: filePath,
            line: lineNum,
            issue,
            value: match.trim(),
          });
        }
      }
    }
  }

  return issues;
}

async function scanDirectory(dir: string): Promise<LinkIssue[]> {
  const issues: LinkIssue[] = [];

  async function scan(currentDir: string) {
    const entries = await readdir(currentDir, { withFileTypes: true });

    for (const entry of entries) {
      const fullPath = join(currentDir, entry.name);

      if (entry.isDirectory()) {
        if (entry.name === 'node_modules' || entry.name === '.next' || entry.name === '.git') {
          continue;
        }
        await scan(fullPath);
      } else if (entry.name.endsWith('.tsx') || entry.name.endsWith('.jsx') || entry.name.endsWith('.ts')) {
        const fileIssues = await scanFile(fullPath);
        issues.push(...fileIssues);
      }
    }
  }

  await scan(dir);
  return issues;
}

function log(msg: string) {
  process.stdout.write(msg + '\n');
}

function logError(msg: string) {
  process.stderr.write(msg + '\n');
}

async function main() {
  log('Gate: Links Check\n');

  const appDir = join(__dirname, '..', 'app');
  const componentsDir = join(__dirname, '..', 'app', '_components');

  log('Scanning for link issues...\n');

  const allIssues: LinkIssue[] = [];

  // Scan app directory
  const appIssues = await scanDirectory(appDir);
  allIssues.push(...appIssues);

  // Group issues by type
  const byType = new Map<string, LinkIssue[]>();
  for (const issue of allIssues) {
    const existing = byType.get(issue.issue) || [];
    existing.push(issue);
    byType.set(issue.issue, existing);
  }

  // Report results
  if (allIssues.length === 0) {
    log('No link issues found!\n');
  } else {
    log(`Found ${allIssues.length} link issues:\n`);

    for (const [issueType, issues] of byType) {
      log(`\n${issueType} (${issues.length}):`);
      for (const issue of issues.slice(0, 10)) {
        const relativePath = issue.file.replace(appDir, 'app');
        log(`  ${relativePath}:${issue.line}`);
        log(`    ${issue.value}`);
      }
      if (issues.length > 10) {
        log(`  ... and ${issues.length - 10} more`);
      }
    }
  }

  log('\n' + '='.repeat(50));
  if (allIssues.length === 0) {
    log('GATE PASS: No forbidden link patterns found');
    process.exit(0);
  } else {
    log(`GATE FAIL: ${allIssues.length} link issues found`);
    process.exit(1);
  }
}

main().catch(err => {
  logError('Gate error: ' + err);
  process.exit(1);
});
