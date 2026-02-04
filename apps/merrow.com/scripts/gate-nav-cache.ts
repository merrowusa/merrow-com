#!/usr/bin/env npx tsx
/**
 * gate-nav-cache.ts
 * Policy 2 Enforcement: Header must not query DB directly
 *
 * Checks:
 * - Header.tsx does NOT import from data-layer/db
 * - Header.tsx does NOT import drizzle-orm
 * - Header.tsx does NOT contain db.query or db.select
 * - If Header needs nav data, it must use getNavData (cached)
 *
 * Usage: npx tsx scripts/gate-nav-cache.ts
 */

import * as fs from "fs";
import * as path from "path";

const HEADER_PATH = path.join(__dirname, "../app/_components/Header.tsx");

// Forbidden patterns in Header
const FORBIDDEN_PATTERNS = [
  { pattern: /from\s+["'].*data-layer\/db["']/, desc: "Direct db import" },
  { pattern: /from\s+["']drizzle-orm["']/, desc: "Drizzle ORM import" },
  { pattern: /db\.query/, desc: "db.query call" },
  { pattern: /db\.select/, desc: "db.select call" },
  { pattern: /dynamicDb\./, desc: "dynamicDb call" },
  { pattern: /await\s+supabase\.from/, desc: "Direct Supabase query" },
];

function log(msg: string) {
  process.stdout.write(msg + "\n");
}

function main() {
  log("Gate: Nav Cache Check (Policy 2 Enforcement)\n");

  if (!fs.existsSync(HEADER_PATH)) {
    log(`[SKIP] Header.tsx not found at ${HEADER_PATH}`);
    log("\nGATE SKIP: Header.tsx not found");
    process.exit(0);
  }

  const content = fs.readFileSync(HEADER_PATH, "utf8");
  const violations: string[] = [];

  for (const { pattern, desc } of FORBIDDEN_PATTERNS) {
    if (pattern.test(content)) {
      violations.push(desc);
    }
  }

  if (violations.length > 0) {
    log("[FAIL] Header.tsx contains forbidden DB patterns:\n");
    violations.forEach((v) => log(`  - ${v}`));
    log("\n" + "=".repeat(50));
    log("\nPolicy 2 Violation: Header must not query DB directly.");
    log("Use getNavData() from packages/data-layer/queries/nav.ts instead.");
    log("\nGATE FAIL: Nav cache policy violated");
    process.exit(1);
  }

  log("[OK] Header.tsx does not contain direct DB queries");
  log("\n" + "=".repeat(50));
  log("\nGATE PASS: Nav cache policy enforced");
  process.exit(0);
}

main();
