#!/usr/bin/env npx tsx
/**
 * gate-dom-structure.ts
 * Validates DOM structure to catch duplicate headers/footers
 *
 * This gate catches structural issues like:
 * - Duplicate <header> elements (e.g., if Header renders twice)
 * - Duplicate footer sections
 * - Missing required structural elements
 *
 * Uses data-testid attributes for reliable detection:
 * - data-testid="site-header" on Header component
 * - data-testid="site-footer" on Footer component
 *
 * Usage:
 *   npx tsx scripts/gate-dom-structure.ts
 *   npm run gate:dom
 *
 * Requires: Dev server running on localhost:3000
 */

import { execSync } from "child_process";

interface PageCheck {
  name: string;
  path: string;
}

interface DOMResult {
  page: string;
  url: string;
  headerCount: number;
  footerCount: number;
  errors: string[];
}

// Pages to validate
const PAGES: PageCheck[] = [
  { name: "Homepage", path: "/" },
  { name: "About", path: "/about.html" },
  { name: "Machines", path: "/machines" },
  { name: "Fashion Sewing", path: "/fashion-sewing" },
];

const BASE_URL = process.env.TEST_URL || "http://localhost:3000";

function log(msg: string) {
  process.stdout.write(msg + "\n");
}

function logError(msg: string) {
  process.stderr.write(msg + "\n");
}

async function checkPage(page: PageCheck): Promise<DOMResult> {
  const url = `${BASE_URL}${page.path}`;
  const errors: string[] = [];

  try {
    // Fetch the page HTML using curl
    const html = execSync(`curl -sL "${url}"`, {
      encoding: "utf8",
      timeout: 30000,
    });

    // Count header elements using data-testid (most reliable)
    const headerTestIdMatches = html.match(/data-testid=["']site-header["']/gi) || [];
    // Fallback: count header[role="banner"]
    const headerBannerMatches = html.match(/<header[^>]*role=["']banner["'][^>]*>/gi) || [];

    // Use data-testid if available, else fall back to role
    const headerCount = headerTestIdMatches.length > 0
      ? headerTestIdMatches.length
      : headerBannerMatches.length;

    // Count footer elements using data-testid (most reliable)
    const footerTestIdMatches = html.match(/data-testid=["']site-footer["']/gi) || [];
    // Fallback: count <footer> tags
    const footerTagMatches = html.match(/<footer[^>]*>/gi) || [];

    // Use data-testid if available, else fall back to footer tag
    const footerCount = footerTestIdMatches.length > 0
      ? footerTestIdMatches.length
      : footerTagMatches.length;

    // Validate counts
    if (headerCount === 0) {
      errors.push("Missing header - no data-testid='site-header' or header[role='banner'] found");
    } else if (headerCount > 1) {
      errors.push(`Duplicate headers: found ${headerCount} (expected 1)`);
    }

    if (footerCount === 0) {
      errors.push("Missing footer - no data-testid='site-footer' or <footer> found");
    } else if (footerCount > 1) {
      errors.push(`Duplicate footers: found ${footerCount} (expected 1)`);
    }

    return {
      page: page.name,
      url,
      headerCount,
      footerCount,
      errors,
    };
  } catch (error) {
    return {
      page: page.name,
      url,
      headerCount: -1,
      footerCount: -1,
      errors: [`Failed to fetch page: ${error instanceof Error ? error.message : String(error)}`],
    };
  }
}

async function main() {
  log("=== DOM Structure Gate ===");
  log(`Base URL: ${BASE_URL}`);
  log("");

  // Check if dev server is running
  try {
    execSync(`curl -sL --fail "${BASE_URL}" > /dev/null`, { timeout: 5000 });
  } catch {
    logError(`ERROR: Cannot reach ${BASE_URL}`);
    logError("");
    logError("Make sure the dev server is running:");
    logError("  npm run dev");
    logError("");
    logError("Or set TEST_URL to your preview URL:");
    logError("  TEST_URL=https://preview.vercel.app npm run gate:dom");
    process.exit(1);
  }

  const results: DOMResult[] = [];
  let hasErrors = false;

  for (const page of PAGES) {
    const result = await checkPage(page);
    results.push(result);

    const icon = result.errors.length === 0 ? "[OK]" : "[!!]";

    log(`${icon} ${page.name} (${page.path})`);
    log(`    Headers: ${result.headerCount}, Footers: ${result.footerCount}`);

    if (result.errors.length > 0) {
      hasErrors = true;
      for (const error of result.errors) {
        logError(`    ERROR: ${error}`);
      }
    }
    log("");
  }

  // Summary
  log("=== Summary ===");
  const passed = results.filter((r) => r.errors.length === 0).length;
  const failed = results.filter((r) => r.errors.length > 0).length;

  log(`Pages checked: ${results.length}`);
  log(`Passed: ${passed}`);
  log(`Failed: ${failed}`);
  log("");

  if (hasErrors) {
    logError("DOM STRUCTURE GATE FAILED");
    logError("");
    logError("Fix duplicate header/footer issues before proceeding.");
    logError("Common causes:");
    logError("  - Header/Footer component rendering twice in layout");
    logError("  - Nested layouts both including Header/Footer");
    logError("  - Page-level components also including Header/Footer");
    process.exit(1);
  }

  log("DOM STRUCTURE GATE PASSED");
  log("All pages have exactly one header and one footer.");
  process.exit(0);
}

main().catch((error) => {
  logError(`Unexpected error: ${error}`);
  process.exit(1);
});
