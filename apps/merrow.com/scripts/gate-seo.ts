#!/usr/bin/env npx tsx
/**
 * gate-seo.ts
 * Validates SEO tags on all pages
 *
 * Checks:
 * - Every page has a title
 * - Every page has a meta description
 * - No duplicate titles
 * - Title length within limits (30-60 chars)
 * - Description length within limits (120-160 chars)
 *
 * Usage: npx tsx scripts/gate-seo.ts
 */

import { readdir, readFile, stat } from 'fs/promises';
import { join } from 'path';

interface PageSEO {
  path: string;
  hasMetadata: boolean;
  title?: string;
  description?: string;
  issues: string[];
}

async function checkPageSEO(pagePath: string, routePath: string): Promise<PageSEO> {
  const content = await readFile(pagePath, 'utf-8');
  const issues: string[] = [];

  // Detect if this is a dynamic route (contains [param])
  const isDynamicRoute = /\[.+\]/.test(routePath);

  // Check for metadata export types
  const hasStaticMetadata = /export\s+const\s+metadata\s*[=:]/i.test(content);
  const hasGenerateMetadata = /export\s+(async\s+)?function\s+generateMetadata/i.test(content);
  const hasMetadataExport = hasStaticMetadata || hasGenerateMetadata;

  let title: string | undefined;
  let description: string | undefined;

  if (!hasMetadataExport) {
    issues.push('No metadata export found');
    return { path: routePath, hasMetadata: false, title, description, issues };
  }

  // For dynamic routes with generateMetadata, just verify the function exists
  // We can't statically analyze dynamic values
  if (isDynamicRoute && hasGenerateMetadata) {
    return {
      path: routePath,
      hasMetadata: true,
      title: '(dynamic)',
      description: '(dynamic)',
      issues: [], // Pass - generateMetadata exists
    };
  }

  // For static metadata, extract and validate values
  // Try to extract title (match double-quoted strings to handle apostrophes)
  const titleMatch = content.match(/title:\s*"([^"]+)"/);
  if (titleMatch) {
    title = titleMatch[1];

    // Skip template literals with ${} - those are dynamic
    if (!title.includes('${')) {
      if (title.length < 30) {
        issues.push(`Title too short (${title.length} chars, min 30)`);
      }
      if (title.length > 60) {
        issues.push(`Title too long (${title.length} chars, max 60)`);
      }
    }
  } else if (!hasGenerateMetadata) {
    issues.push('No title found in metadata');
  }

  // Try to extract description (match double-quoted strings, handle newlines)
  const descMatch = content.match(/description:\s*[\n\s]*"([^"]+)"/);
  if (descMatch) {
    description = descMatch[1];

    // Skip template literals with ${} - those are dynamic
    if (!description.includes('${')) {
      if (description.length < 120) {
        issues.push(`Description too short (${description.length} chars, min 120)`);
      }
      if (description.length > 160) {
        issues.push(`Description too long (${description.length} chars, max 160)`);
      }
    }
  } else if (!hasGenerateMetadata) {
    issues.push('No description found in metadata');
  }

  return {
    path: routePath,
    hasMetadata: hasMetadataExport,
    title,
    description,
    issues,
  };
}

async function findPages(appDir: string): Promise<{ pagePath: string; routePath: string }[]> {
  const pages: { pagePath: string; routePath: string }[] = [];

  async function scan(dir: string, route: string) {
    const entries = await readdir(dir, { withFileTypes: true });

    for (const entry of entries) {
      const fullPath = join(dir, entry.name);

      if (entry.isDirectory()) {
        if (entry.name.startsWith('_') || entry.name === 'api') {
          continue;
        }
        await scan(fullPath, `${route}/${entry.name}`);
      } else if (entry.name === 'page.tsx') {
        pages.push({ pagePath: fullPath, routePath: route || '/' });
      }
    }
  }

  await scan(appDir, '');
  return pages;
}

function log(msg: string) {
  process.stdout.write(msg + '\n');
}

function logError(msg: string) {
  process.stderr.write(msg + '\n');
}

async function main() {
  log('Gate: SEO Check\n');

  const appDir = join(__dirname, '..', 'app');

  log('Finding pages...\n');
  const pages = await findPages(appDir);
  log(`Found ${pages.length} pages\n`);

  const results: PageSEO[] = [];
  for (const { pagePath, routePath } of pages) {
    const result = await checkPageSEO(pagePath, routePath);
    results.push(result);
  }

  // Check for duplicate titles (exclude dynamic routes which have "(dynamic)" placeholder)
  const titleCounts = new Map<string, string[]>();
  for (const result of results) {
    if (result.title && result.title !== '(dynamic)') {
      const paths = titleCounts.get(result.title) || [];
      paths.push(result.path);
      titleCounts.set(result.title, paths);
    }
  }

  for (const [title, paths] of titleCounts) {
    if (paths.length > 1) {
      for (const path of paths) {
        const result = results.find(r => r.path === path);
        if (result) {
          result.issues.push(`Duplicate title shared with ${paths.filter(p => p !== path).join(', ')}`);
        }
      }
    }
  }

  // Report results
  const pagesWithIssues = results.filter(r => r.issues.length > 0);
  const pagesOK = results.filter(r => r.issues.length === 0);

  log('Results by page:\n');

  for (const result of results) {
    const status = result.issues.length === 0 ? '[OK]' : '[ISSUES]';
    log(`${status} ${result.path}`);
    if (result.title) {
      log(`      Title: "${result.title.substring(0, 50)}${result.title.length > 50 ? '...' : ''}"`);
    }
    for (const issue of result.issues) {
      log(`      - ${issue}`);
    }
  }

  log('\n' + '='.repeat(50));
  log(`Pages OK: ${pagesOK.length}`);
  log(`Pages with issues: ${pagesWithIssues.length}`);

  const totalIssues = results.reduce((sum, r) => sum + r.issues.length, 0);

  if (totalIssues === 0) {
    log('\nGATE PASS: All pages have valid SEO');
    process.exit(0);
  } else {
    log(`\nGATE FAIL: ${totalIssues} SEO issues found`);
    process.exit(1);
  }
}

main().catch(err => {
  logError('Gate error: ' + err);
  process.exit(1);
});
