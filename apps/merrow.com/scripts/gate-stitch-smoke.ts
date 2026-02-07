#!/usr/bin/env npx tsx
/**
 * gate-stitch-smoke.ts
 * Verifies legacy stitch URLs redirect to the rebuilt stitch browser.
 *
 * Usage:
 *   npm run gate:stitch
 *   TEST_URL=https://preview.example.com npm run gate:stitch
 */

interface StitchRedirectCase {
  name: string;
  source: string;
  expectedPath: string;
  expectedParams: Record<string, string>;
}

const BASE_URL = process.env.TEST_URL || "http://localhost:3000";

const CASES: StitchRedirectCase[] = [
  {
    name: "Legacy Query Route",
    source:
      "/stitch.php?marketplace=general&stitch=front_overlock&label=143627189&setnum=72157606893157487&setnum1=72157607323739660&setnam=general%20overlock&resolution=low",
    expectedPath: "/stitch.html",
    expectedParams: {
      stitch: "front_overlock",
      setnum: "72157606893157487",
      setnum1: "72157607323739660",
    },
  },
  {
    name: "Legacy Path Route",
    source:
      "/stitch/marketplace/general/stitch/front_crochet/label/145327189/setnum/72157606906056879/setnum1/72157607323790836/setnam/crochet/resolution/low",
    expectedPath: "/stitch.html",
    expectedParams: {
      stitch: "front_crochet",
      setnum: "72157606906056879",
      setnum1: "72157607323790836",
      resolution: "low",
    },
  },
  {
    name: "Legacy HD Query Route",
    source:
      "/stitchHD.php?marketplace=general&label=143627189&setnum=72157606893157487&setnum1=72157607323739660&setnam=general%20overlock&resolution=high",
    expectedPath: "/stitch.html",
    expectedParams: {
      setnum: "72157606893157487",
      setnum1: "72157607323739660",
      resolution: "high",
    },
  },
];

function log(message: string) {
  process.stdout.write(message + "\n");
}

function logError(message: string) {
  process.stderr.write(message + "\n");
}

function isRedirectStatus(status: number) {
  return status === 301 || status === 302 || status === 307 || status === 308;
}

async function assertServerReachable() {
  try {
    const response = await fetch(BASE_URL, { redirect: "manual" });
    if (!response.ok && !isRedirectStatus(response.status)) {
      throw new Error(`unexpected status ${response.status}`);
    }
  } catch {
    logError(`ERROR: Cannot reach ${BASE_URL}`);
    logError("Start the dev server with `npm run dev`, or set TEST_URL.");
    process.exit(1);
  }
}

async function runCase(testCase: StitchRedirectCase) {
  const response = await fetch(`${BASE_URL}${testCase.source}`, {
    redirect: "manual",
  });

  if (!isRedirectStatus(response.status)) {
    return {
      pass: false,
      detail: `Expected redirect status, got ${response.status}`,
    };
  }

  const location = response.headers.get("location");
  if (!location) {
    return {
      pass: false,
      detail: "Missing Location header",
    };
  }

  const redirected = new URL(location, BASE_URL);

  if (redirected.pathname !== testCase.expectedPath) {
    return {
      pass: false,
      detail: `Expected path ${testCase.expectedPath}, got ${redirected.pathname}`,
    };
  }

  for (const [key, expectedValue] of Object.entries(testCase.expectedParams)) {
    const actualValue = redirected.searchParams.get(key) ?? "";
    if (actualValue !== expectedValue) {
      return {
        pass: false,
        detail: `Param ${key} mismatch (expected "${expectedValue}", got "${actualValue}")`,
      };
    }
  }

  return { pass: true, detail: redirected.toString() };
}

async function main() {
  log("=== Stitch Smoke Gate ===");
  log(`Base URL: ${BASE_URL}`);
  log("");

  await assertServerReachable();

  let passed = 0;
  let failed = 0;

  for (const testCase of CASES) {
    try {
      const result = await runCase(testCase);
      if (result.pass) {
        passed++;
        log(`[OK] ${testCase.name}`);
      } else {
        failed++;
        log(`[FAIL] ${testCase.name}`);
        logError(`  ${result.detail}`);
      }
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
    logError("STITCH SMOKE GATE FAILED");
    process.exit(1);
  }

  log("STITCH SMOKE GATE PASSED");
}

main().catch((error) => {
  logError(`Unexpected error: ${error instanceof Error ? error.message : String(error)}`);
  process.exit(1);
});

export {};
