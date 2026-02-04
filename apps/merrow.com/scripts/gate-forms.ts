#!/usr/bin/env npx tsx
/**
 * gate-forms.ts
 * Validates that the submissions API endpoint exists and is functional
 */

const BASE_URL = process.env.BASE_URL || "http://localhost:3000";

interface GateResult {
  check: string;
  status: "pass" | "fail" | "warn";
  message: string;
}

const results: GateResult[] = [];

function log(msg: string) {
  process.stdout.write(msg + "\n");
}

async function checkEndpointHealth(): Promise<boolean> {
  try {
    const response = await fetch(`${BASE_URL}/api/submissions`, {
      method: "GET",
    });

    if (!response.ok) {
      results.push({
        check: "API Health",
        status: "fail",
        message: `Endpoint returned ${response.status}`,
      });
      return false;
    }

    const data = await response.json();

    if (data.status !== "ok") {
      results.push({
        check: "API Health",
        status: "fail",
        message: "Endpoint did not return status: ok",
      });
      return false;
    }

    // Check if Supabase is configured
    if (!data.supabaseConfigured) {
      results.push({
        check: "Database Config",
        status: "warn",
        message: "Supabase not configured - submissions will not be persisted",
      });
    } else {
      results.push({
        check: "Database Config",
        status: "pass",
        message: "Supabase configured",
      });
    }

    results.push({
      check: "API Health",
      status: "pass",
      message: `Endpoint OK, types: ${data.types.join(", ")}`,
    });

    return true;
  } catch (error) {
    const msg = error instanceof Error ? error.message : "Unknown error";
    results.push({
      check: "API Health",
      status: "fail",
      message: `Could not reach endpoint: ${msg}`,
    });
    return false;
  }
}

async function checkValidation(): Promise<boolean> {
  try {
    // Test missing fields
    const response = await fetch(`${BASE_URL}/api/submissions`, {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ type: "contact" }),
    });

    if (response.status !== 400) {
      results.push({
        check: "Validation",
        status: "fail",
        message: "Expected 400 for missing fields, got " + response.status,
      });
      return false;
    }

    results.push({
      check: "Validation",
      status: "pass",
      message: "Returns 400 for invalid submissions",
    });

    return true;
  } catch (error) {
    const msg = error instanceof Error ? error.message : "Unknown error";
    results.push({
      check: "Validation",
      status: "fail",
      message: `Validation check failed: ${msg}`,
    });
    return false;
  }
}

async function checkHoneypot(): Promise<boolean> {
  try {
    // Test honeypot triggers silent success
    const response = await fetch(`${BASE_URL}/api/submissions`, {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({
        type: "contact",
        name: "Bot",
        email: "bot@spam.com",
        _honey: "I am a bot",
      }),
    });

    const data = await response.json();

    if (!response.ok || !data.success) {
      results.push({
        check: "Honeypot",
        status: "fail",
        message: "Honeypot should return success (silent trap)",
      });
      return false;
    }

    if (data.id !== "honeypot") {
      results.push({
        check: "Honeypot",
        status: "warn",
        message: "Honeypot did not return expected ID marker",
      });
    }

    results.push({
      check: "Honeypot",
      status: "pass",
      message: "Honeypot protection active",
    });

    return true;
  } catch (error) {
    const msg = error instanceof Error ? error.message : "Unknown error";
    results.push({
      check: "Honeypot",
      status: "fail",
      message: `Honeypot check failed: ${msg}`,
    });
    return false;
  }
}

async function main() {
  log("Gate: Forms Endpoint Check");
  log(`Base URL: ${BASE_URL}`);
  log("");

  // Run checks
  const healthOk = await checkEndpointHealth();

  if (healthOk) {
    await checkValidation();
    await checkHoneypot();
  }

  // Print results
  log("=== Results ===");
  let hasFailure = false;
  let hasWarning = false;

  for (const result of results) {
    const icon = result.status === "pass" ? "[OK]" : result.status === "warn" ? "[WARN]" : "[FAIL]";
    log(`${icon} ${result.check}: ${result.message}`);

    if (result.status === "fail") hasFailure = true;
    if (result.status === "warn") hasWarning = true;
  }

  log("");

  if (hasFailure) {
    log("GATE FAIL: Forms endpoint not functional");
    log("");
    log("Make sure the dev server is running: npm run dev");
    process.exit(1);
  } else if (hasWarning) {
    log("GATE PASS (with warnings): Forms endpoint functional");
    log("");
    log("Note: Set MERROW_SUPABASE_* env vars for database persistence");
    process.exit(0);
  } else {
    log("GATE PASS: Forms endpoint fully functional");
    process.exit(0);
  }
}

main().catch((err) => {
  log(`Unexpected error: ${err}`);
  process.exit(1);
});
