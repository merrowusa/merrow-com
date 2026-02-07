#!/usr/bin/env npx tsx
/**
 * gate-agent-book-smoke.ts
 * Verifies legacy agent_book routes resolve to the new internal viewer.
 *
 * Usage:
 *   npm run gate:agent-book
 *   TEST_URL=https://preview.example.com npm run gate:agent-book
 */

interface SmokeCase {
  name: string;
  url: string;
  mustContainHtml: string[];
  mustContainFinalUrl?: string[];
}

const BASE_URL = process.env.TEST_URL || "http://localhost:3000";

const CASES: SmokeCase[] = [
  {
    name: "SEO Route (Type Before Setnum)",
    url: "/agent_book/kiwifruit/instructions/language/english/type/MG/setnum/72157606829542814/setnam/mginstructions",
    mustContainHtml: ["stitch-samples"],
    mustContainFinalUrl: ["agent_book.php", "setnum=72157606829542814"],
  },
  {
    name: "SEO Route (Type After Setnam)",
    url: "/agent_book/kiwifruit/instructions/language/english/setnum/72157606829542814/setnam/mginstructions/type/MG",
    mustContainHtml: ["stitch-samples"],
    mustContainFinalUrl: ["agent_book.php", "setnum=72157606829542814"],
  },
  {
    name: "Query Route",
    url: "/agent_book.php?kiwifruit=instructions&language=english&type=MG&setnum=72157606829542814&setnam=mginstructions",
    mustContainHtml: ["72157606829542814", "stitch-samples"],
  },
];

function log(message: string) {
  process.stdout.write(message + "\n");
}

function logError(message: string) {
  process.stderr.write(message + "\n");
}

async function assertServerReachable() {
  try {
    const response = await fetch(BASE_URL, { redirect: "manual" });
    if (!response.ok && response.status !== 301 && response.status !== 302) {
      throw new Error(`unexpected status ${response.status}`);
    }
  } catch {
    logError(`ERROR: Cannot reach ${BASE_URL}`);
    logError("Start the dev server with `npm run dev`, or set TEST_URL.");
    process.exit(1);
  }
}

async function main() {
  log("=== Agent Book Smoke Gate ===");
  log(`Base URL: ${BASE_URL}`);
  log("");

  await assertServerReachable();

  let passed = 0;
  let failed = 0;

  for (const testCase of CASES) {
    try {
      const res = await fetch(`${BASE_URL}${testCase.url}`, { redirect: "follow" });
      const text = await res.text();

      const missingHtml = testCase.mustContainHtml.filter(
        (snippet) => !text.includes(snippet)
      );
      const missingFinalUrl = (testCase.mustContainFinalUrl ?? []).filter(
        (snippet) => !res.url.includes(snippet)
      );

      if (!res.ok || missingHtml.length > 0 || missingFinalUrl.length > 0) {
        failed++;
        log(`[FAIL] ${testCase.name}`);
        if (!res.ok) logError(`  HTTP ${res.status}`);
        for (const snippet of missingHtml) logError(`  Missing HTML: ${snippet}`);
        for (const snippet of missingFinalUrl) logError(`  Missing URL: ${snippet}`);
        if (missingFinalUrl.length > 0) logError(`  Final URL: ${res.url}`);
        continue;
      }

      passed++;
      log(`[OK] ${testCase.name}`);
    } catch (error) {
      failed++;
      log(`[FAIL] ${testCase.name}`);
      logError(`  ${error instanceof Error ? error.message : String(error)}`);
    }
  }

  log("");
  log("=== Summary ===");
  log(`Cases: ${CASES.length}`);
  log(`Passed: ${passed}`);
  log(`Failed: ${failed}`);
  log("");

  if (failed > 0) {
    logError("AGENT BOOK SMOKE GATE FAILED");
    process.exit(1);
  }

  log("AGENT BOOK SMOKE GATE PASSED");
}

main().catch((error) => {
  logError(`Unexpected error: ${error instanceof Error ? error.message : String(error)}`);
  process.exit(1);
});

export {};
