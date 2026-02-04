#!/usr/bin/env npx tsx
/**
 * gate-routes.ts
 * Verifies all expected routes exist and return 200
 *
 * Usage: npx tsx scripts/gate-routes.ts [--base-url=http://localhost:3000]
 */

import { readdir, stat } from 'fs/promises';
import { join } from 'path';

interface RouteResult {
  route: string;
  status: 'pass' | 'fail' | 'skip';
  reason?: string;
}

// Expected routes from baseline (discovered in planning phase)
const EXPECTED_ROUTES = [
  '/',
  '/about.html',
  '/agentmap.html',
  '/customer-stories',
  '/machines',
  '/machines/[slug]',
  '/overlock-history',
  '/parts',
  '/support',
  '/support/request-quote',
  '/sewing',
  '/70class',
  '/crochet-sewing-machines',
  '/Overlock_Sewing_Machines',
  '/Sergers_and_Overlock_Sewing_Machines',
  '/Sergers_and_Overlock_Sewing_Machines/what-is-a-serger',
  '/end-to-end-seaming',
  '/fashion-sewing',
  '/technical-sewing',
  '/v3',
];

async function findAppRoutes(appDir: string): Promise<string[]> {
  const routes: string[] = [];

  async function scanDir(dir: string, basePath: string = '') {
    const entries = await readdir(dir, { withFileTypes: true });

    for (const entry of entries) {
      const fullPath = join(dir, entry.name);

      if (entry.isDirectory()) {
        if (entry.name.startsWith('_') || entry.name === 'api') {
          continue;
        }

        const routePath = `${basePath}/${entry.name}`;

        try {
          await stat(join(fullPath, 'page.tsx'));
          routes.push(routePath);
        } catch {
          // No page.tsx
        }

        await scanDir(fullPath, routePath);
      } else if (entry.name === 'page.tsx' && basePath === '') {
        routes.push('/');
      }
    }
  }

  await scanDir(appDir);
  return routes;
}

async function checkRouteExists(baseUrl: string, route: string): Promise<RouteResult> {
  if (route.includes('[')) {
    return { route, status: 'skip', reason: 'Dynamic route - requires params' };
  }

  try {
    const url = `${baseUrl}${route}`;
    const response = await fetch(url, { method: 'HEAD' });

    if (response.ok) {
      return { route, status: 'pass' };
    } else {
      return { route, status: 'fail', reason: `HTTP ${response.status}` };
    }
  } catch (error) {
    return { route, status: 'fail', reason: `Network error: ${error}` };
  }
}

function log(msg: string) {
  process.stdout.write(msg + '\n');
}

function logError(msg: string) {
  process.stderr.write(msg + '\n');
}

async function main() {
  const args = process.argv.slice(2);
  const baseUrlArg = args.find(a => a.startsWith('--base-url='));
  const baseUrl = baseUrlArg?.split('=')[1] || 'http://localhost:3000';
  const checkHttp = args.includes('--check-http');

  log('Gate: Routes Check\n');
  log(`Base URL: ${baseUrl}`);
  log(`HTTP Check: ${checkHttp ? 'enabled' : 'disabled (use --check-http to enable)'}\n`);

  const appDir = join(__dirname, '..', 'app');

  log('Scanning app directory for routes...\n');
  const discoveredRoutes = await findAppRoutes(appDir);

  log('Discovered routes:');
  discoveredRoutes.forEach(r => log(`  * ${r}`));
  log(`\nTotal: ${discoveredRoutes.length} routes\n`);

  log('Comparing with expected routes...\n');

  const missing: string[] = [];
  const extra: string[] = [];

  for (const expected of EXPECTED_ROUTES) {
    const normalizedExpected = expected.replace(/\[.*?\]/g, '[slug]');
    const found = discoveredRoutes.some(d =>
      d === normalizedExpected ||
      d.replace(/\[.*?\]/g, '[slug]') === normalizedExpected
    );

    if (!found) {
      missing.push(expected);
    }
  }

  for (const discovered of discoveredRoutes) {
    const normalizedDiscovered = discovered.replace(/\[.*?\]/g, '[slug]');
    const expected = EXPECTED_ROUTES.some(e =>
      e === normalizedDiscovered ||
      e.replace(/\[.*?\]/g, '[slug]') === normalizedDiscovered
    );

    if (!expected) {
      extra.push(discovered);
    }
  }

  if (missing.length > 0) {
    log('Missing routes:');
    missing.forEach(r => log(`   ${r}`));
  }

  if (extra.length > 0) {
    log('\nExtra routes (not in baseline):');
    extra.forEach(r => log(`   ${r}`));
  }

  if (checkHttp) {
    log('\nRunning HTTP checks...\n');

    const results: RouteResult[] = [];
    for (const route of discoveredRoutes) {
      const result = await checkRouteExists(baseUrl, route);
      results.push(result);

      const icon = result.status === 'pass' ? '[PASS]' : result.status === 'skip' ? '[SKIP]' : '[FAIL]';
      log(`  ${icon} ${route}${result.reason ? ` (${result.reason})` : ''}`);
    }

    const passed = results.filter(r => r.status === 'pass').length;
    const failed = results.filter(r => r.status === 'fail').length;
    const skipped = results.filter(r => r.status === 'skip').length;

    log(`\nHTTP Results: ${passed} pass, ${failed} fail, ${skipped} skip`);
  }

  log('\n' + '='.repeat(50));
  if (missing.length === 0) {
    log('GATE PASS: All expected routes exist');
    process.exit(0);
  } else {
    log(`GATE FAIL: ${missing.length} missing routes`);
    process.exit(1);
  }
}

main().catch(err => {
  logError('Gate error: ' + err);
  process.exit(1);
});
