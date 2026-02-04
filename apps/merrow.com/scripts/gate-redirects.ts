#!/usr/bin/env npx tsx
/**
 * gate-redirects.ts
 * Validates redirects.csv and tests redirect behavior
 *
 * Checks:
 * - redirects.csv exists and has >=80 entries
 * - No duplicate sources
 * - All destinations are valid paths
 * - Optional: Test redirects against running server
 *
 * Usage: npx tsx scripts/gate-redirects.ts [--check-http]
 */

import { readFile, stat } from 'fs/promises';
import { join } from 'path';

interface Redirect {
  source: string;
  destination: string;
  permanent: boolean;
  lineNumber: number;
}

interface RedirectIssue {
  lineNumber: number;
  source: string;
  issue: string;
}

function log(msg: string) {
  process.stdout.write(msg + '\n');
}

function logError(msg: string) {
  process.stderr.write(msg + '\n');
}

async function parseRedirectsCSV(filePath: string): Promise<{ redirects: Redirect[]; issues: RedirectIssue[] }> {
  const content = await readFile(filePath, 'utf-8');
  const lines = content.split('\n').filter(l => l.trim());

  const redirects: Redirect[] = [];
  const issues: RedirectIssue[] = [];

  // Skip header row
  for (let i = 1; i < lines.length; i++) {
    const line = lines[i].trim();
    if (!line) continue;

    const lineNumber = i + 1;
    const parts = line.split(',').map(p => p.trim());

    if (parts.length < 2) {
      issues.push({ lineNumber, source: line, issue: 'Invalid format - need at least source,destination' });
      continue;
    }

    const [source, destination, permanentStr] = parts;
    const permanent = permanentStr?.toLowerCase() === 'true' || permanentStr === '301';

    // Validate source
    if (!source.startsWith('/')) {
      issues.push({ lineNumber, source, issue: 'Source must start with /' });
      continue;
    }

    // Validate destination
    if (!destination.startsWith('/') && !destination.startsWith('http')) {
      issues.push({ lineNumber, source, issue: `Invalid destination: ${destination}` });
      continue;
    }

    redirects.push({ source, destination, permanent, lineNumber });
  }

  return { redirects, issues };
}

async function checkRedirectsFile(): Promise<{ exists: boolean; path: string }> {
  const possiblePaths = [
    join(__dirname, '..', 'redirects.csv'),
    join(__dirname, '..', 'config', 'redirects.csv'),
    join(__dirname, '..', 'public', 'redirects.csv'),
  ];

  for (const path of possiblePaths) {
    try {
      await stat(path);
      return { exists: true, path };
    } catch {
      // Continue checking
    }
  }

  return { exists: false, path: possiblePaths[0] };
}

async function main() {
  const args = process.argv.slice(2);
  const checkHttp = args.includes('--check-http');
  const baseUrlArg = args.find(a => a.startsWith('--base-url='));
  const baseUrl = baseUrlArg?.split('=')[1] || 'http://localhost:3000';

  log('Gate: Redirects Check\n');

  // Check if redirects.csv exists
  const { exists, path } = await checkRedirectsFile();

  if (!exists) {
    log(`[FAIL] redirects.csv not found`);
    log(`  Expected at: ${path}\n`);
    log('='.repeat(50));
    log('GATE FAIL: redirects.csv is missing');
    log('\nCreate redirects.csv with format:');
    log('  source,destination,permanent');
    log('  /old-page.php,/new-page,true');
    process.exit(1);
  }

  log(`Found: ${path}\n`);

  // Parse and validate
  const { redirects, issues } = await parseRedirectsCSV(path);

  log(`Parsed ${redirects.length} redirects\n`);

  // Check minimum count
  const MIN_REDIRECTS = 80;
  if (redirects.length < MIN_REDIRECTS) {
    issues.push({
      lineNumber: 0,
      source: 'FILE',
      issue: `Need at least ${MIN_REDIRECTS} redirects, found ${redirects.length}`,
    });
  }

  // Check for duplicates
  const sourceMap = new Map<string, number[]>();
  for (const redirect of redirects) {
    const existing = sourceMap.get(redirect.source) || [];
    existing.push(redirect.lineNumber);
    sourceMap.set(redirect.source, existing);
  }

  for (const [source, lines] of sourceMap) {
    if (lines.length > 1) {
      issues.push({
        lineNumber: lines[1],
        source,
        issue: `Duplicate source (also on line ${lines[0]})`,
      });
    }
  }

  // Report issues
  if (issues.length > 0) {
    log('Issues found:\n');
    for (const issue of issues.slice(0, 20)) {
      log(`  Line ${issue.lineNumber}: ${issue.issue}`);
      if (issue.source !== 'FILE') {
        log(`    Source: ${issue.source}`);
      }
    }
    if (issues.length > 20) {
      log(`  ... and ${issues.length - 20} more issues`);
    }
  }

  // Sample redirects
  log('\nSample redirects:');
  for (const redirect of redirects.slice(0, 5)) {
    log(`  ${redirect.source} -> ${redirect.destination}${redirect.permanent ? ' (301)' : ' (302)'}`);
  }
  if (redirects.length > 5) {
    log(`  ... and ${redirects.length - 5} more`);
  }

  // HTTP checks if enabled
  if (checkHttp && issues.length === 0) {
    log(`\nTesting redirects against ${baseUrl}...\n`);

    let passed = 0;
    let failed = 0;

    for (const redirect of redirects.slice(0, 10)) {
      try {
        const response = await fetch(`${baseUrl}${redirect.source}`, { redirect: 'manual' });
        const location = response.headers.get('location');

        if (response.status === 301 || response.status === 302 || response.status === 308) {
          if (location?.includes(redirect.destination) || location === redirect.destination) {
            log(`  [OK] ${redirect.source}`);
            passed++;
          } else {
            log(`  [FAIL] ${redirect.source} -> ${location} (expected ${redirect.destination})`);
            failed++;
          }
        } else {
          log(`  [FAIL] ${redirect.source} -> HTTP ${response.status} (expected redirect)`);
          failed++;
        }
      } catch (err) {
        log(`  [FAIL] ${redirect.source} -> Error: ${err}`);
        failed++;
      }
    }

    log(`\nHTTP check: ${passed} pass, ${failed} fail (of ${Math.min(10, redirects.length)} tested)`);
  }

  // Summary
  log('\n' + '='.repeat(50));
  log(`Total redirects: ${redirects.length}`);
  log(`Issues: ${issues.length}`);

  if (issues.length === 0 && redirects.length >= MIN_REDIRECTS) {
    log('\nGATE PASS: Redirects configuration valid');
    process.exit(0);
  } else {
    log('\nGATE FAIL: Redirects issues found');
    process.exit(1);
  }
}

main().catch(err => {
  logError('Gate error: ' + err);
  process.exit(1);
});
