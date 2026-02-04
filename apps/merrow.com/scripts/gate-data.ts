#!/usr/bin/env npx tsx
/**
 * gate-data.ts
 * Validates database connectivity and data integrity for merrow.com
 *
 * Checks:
 * - Supabase connection works
 * - Key matches the configured URL (prevents cross-project mixups)
 * - Required tables exist with expected row counts
 *
 * Environment variables:
 * - MERROW_SUPABASE_URL (required)
 * - MERROW_SUPABASE_ANON_KEY or MERROW_SUPABASE_SERVICE_ROLE_KEY (one required)
 *
 * Usage: npx tsx scripts/gate-data.ts
 */

import { createClient } from '@supabase/supabase-js';

interface TableCheck {
  table: string;
  expectedMin: number;
  expectedMax?: number;
  actualCount?: number;
  status: 'pass' | 'fail' | 'skip';
  message?: string;
}

// Expected data from baseline
const EXPECTED_TABLES: Omit<TableCheck, 'actualCount' | 'status'>[] = [
  { table: 'machine_pages', expectedMin: 34 },
  { table: 'agents', expectedMin: 150, expectedMax: 170 },
  { table: 'application_pages', expectedMin: 70, expectedMax: 85 },
];

// Optional tables to document existence
const OPTIONAL_TABLES = [
  'threading_diagrams',
  'PRODUCT',
];

function log(msg: string) {
  process.stdout.write(msg + '\n');
}

function logError(msg: string) {
  process.stderr.write(msg + '\n');
}

/**
 * Decode JWT payload (base64url) without verification
 * Returns the payload object or null if invalid
 */
function decodeJwtPayload(jwt: string): { iss?: string; ref?: string } | null {
  try {
    const parts = jwt.split('.');
    if (parts.length !== 3) return null;

    // Base64url decode the payload (middle part)
    const payload = parts[1];
    const base64 = payload.replace(/-/g, '+').replace(/_/g, '/');
    const padded = base64 + '='.repeat((4 - base64.length % 4) % 4);
    const decoded = Buffer.from(padded, 'base64').toString('utf8');

    return JSON.parse(decoded);
  } catch {
    return null;
  }
}

/**
 * Extract project ref from Supabase URL
 * e.g., "https://qyvpzhimzxmlvapzbtyo.supabase.co" -> "qyvpzhimzxmlvapzbtyo"
 */
function extractProjectRef(url: string): string | null {
  const match = url.match(/https:\/\/([a-z0-9]+)\.supabase\.co/i);
  return match ? match[1] : null;
}

/**
 * Check if key is new Supabase format (sb_secret_* or sb_publishable_*)
 */
function isNewKeyFormat(key: string): boolean {
  return key.startsWith('sb_secret_') || key.startsWith('sb_publishable_');
}

/**
 * Validate that the key matches the expected Supabase project
 * - New format (sb_*): Validate format, connection test will catch mismatches
 * - Old format (eyJ...): Decode JWT and verify ref matches URL
 */
function validateKeyMatchesUrl(url: string, key: string): { valid: boolean; error?: string } {
  const urlRef = extractProjectRef(url);
  if (!urlRef) {
    return { valid: false, error: 'Invalid MERROW_SUPABASE_URL format' };
  }

  // New Supabase key format (sb_secret_* or sb_publishable_*)
  // Can't extract project ref from key - connection test will validate
  if (isNewKeyFormat(key)) {
    log(`Using new Supabase key format (project ref validation via connection test)`);
    return { valid: true };
  }

  // Old JWT format - decode and validate ref
  const payload = decodeJwtPayload(key);
  if (!payload) {
    return { valid: false, error: 'Invalid Supabase key format (not a valid JWT or sb_* key)' };
  }

  // Supabase JWTs have "ref" in the payload matching the project ref
  const keyRef = payload.ref;
  if (!keyRef) {
    return { valid: false, error: 'Supabase key missing project ref in payload' };
  }

  if (keyRef.toLowerCase() !== urlRef.toLowerCase()) {
    return {
      valid: false,
      error: `Supabase key does not match MERROW_SUPABASE_URL (wrong project). URL ref: ${urlRef}, Key ref: ${keyRef}`
    };
  }

  return { valid: true };
}

async function main() {
  log('Gate: Data Integrity Check (merrow.com)\n');

  // Get Supabase connection from env - use MERROW-specific vars
  const supabaseUrl = process.env.MERROW_SUPABASE_URL;
  const supabaseKey = process.env.MERROW_SUPABASE_ANON_KEY || process.env.MERROW_SUPABASE_SERVICE_ROLE_KEY;

  // Check for missing vars
  const missingVars: string[] = [];
  if (!supabaseUrl) missingVars.push('MERROW_SUPABASE_URL');
  if (!supabaseKey) missingVars.push('MERROW_SUPABASE_ANON_KEY or MERROW_SUPABASE_SERVICE_ROLE_KEY');

  if (missingVars.length > 0) {
    logError(`GATE FAIL: Missing required env vars: ${missingVars.join(', ')}`);
    process.exit(1);
  }

  // Validate key matches URL (prevent cross-project mixups)
  const validation = validateKeyMatchesUrl(supabaseUrl!, supabaseKey!);
  if (!validation.valid) {
    logError(`GATE FAIL: ${validation.error}`);
    process.exit(1);
  }

  log(`Connecting to Supabase: ${supabaseUrl}\n`);

  const supabase = createClient(supabaseUrl!, supabaseKey!);

  // Test connection
  log('Testing connection...');
  try {
    const { data, error } = await supabase.from('machine_pages').select('id', { count: 'exact', head: true });
    if (error) {
      const errDetails = error.message || error.code || JSON.stringify(error);
      log(`[FAIL] Connection failed: ${errDetails}\n`);
      log('='.repeat(50));
      log('GATE FAIL: Cannot connect to database');
      process.exit(1);
    }
    log('[OK] Connection successful\n');
  } catch (err) {
    const errMsg = err instanceof Error ? err.message : JSON.stringify(err);
    log(`[FAIL] Connection exception: ${errMsg}\n`);
    log('='.repeat(50));
    log('GATE FAIL: Cannot connect to database');
    process.exit(1);
  }

  // Check required tables
  log('Checking required tables:\n');

  const results: TableCheck[] = [];

  for (const tableSpec of EXPECTED_TABLES) {
    try {
      const { count, error } = await supabase
        .from(tableSpec.table)
        .select('*', { count: 'exact', head: true });

      if (error) {
        results.push({
          ...tableSpec,
          status: 'fail',
          message: `Error: ${error.message}`,
        });
        continue;
      }

      const actualCount = count || 0;
      const meetsMin = actualCount >= tableSpec.expectedMin;
      const meetsMax = !tableSpec.expectedMax || actualCount <= tableSpec.expectedMax;

      results.push({
        ...tableSpec,
        actualCount,
        status: meetsMin && meetsMax ? 'pass' : 'fail',
        message: !meetsMin
          ? `Count ${actualCount} below minimum ${tableSpec.expectedMin}`
          : !meetsMax
          ? `Count ${actualCount} above maximum ${tableSpec.expectedMax}`
          : undefined,
      });
    } catch (err) {
      results.push({
        ...tableSpec,
        status: 'fail',
        message: `Exception: ${err}`,
      });
    }
  }

  // Report required table results
  for (const result of results) {
    const status = result.status === 'pass' ? '[OK]' : '[FAIL]';
    const countInfo = result.actualCount !== undefined ? ` (${result.actualCount} rows)` : '';
    log(`${status} ${result.table}${countInfo}`);
    if (result.message) {
      log(`      ${result.message}`);
    }
  }

  // Check optional tables
  log('\nChecking optional tables:\n');

  for (const table of OPTIONAL_TABLES) {
    try {
      const { count, error } = await supabase
        .from(table)
        .select('*', { count: 'exact', head: true });

      if (error) {
        log(`[?] ${table}: Does not exist or not accessible`);
      } else {
        log(`[OK] ${table}: Exists (${count || 0} rows)`);
      }
    } catch {
      log(`[?] ${table}: Does not exist or not accessible`);
    }
  }

  // Summary
  log('\n' + '='.repeat(50));

  const passed = results.filter(r => r.status === 'pass').length;
  const failed = results.filter(r => r.status === 'fail').length;

  log(`Required tables: ${passed} pass, ${failed} fail`);

  if (failed === 0) {
    log('\nGATE PASS: All data integrity checks passed');
    process.exit(0);
  } else {
    log('\nGATE FAIL: Data integrity issues found');
    process.exit(1);
  }
}

main().catch(err => {
  logError('Gate error: ' + err);
  process.exit(1);
});
