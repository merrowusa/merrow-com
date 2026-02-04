#!/usr/bin/env npx tsx
/**
 * backstop-parity.ts
 * Wrapper script for legacy vs refactor parity testing
 *
 * STRICT mode: Legacy homepage header/footer vs refactor (BLOCKING)
 *   - Reference: Legacy production (https://www.merrow.com)
 *   - Test: Refactor preview (REFACTOR_PREVIEW_URL)
 *   - Selectors: ["header", ".new_menu"] and ["footer", "#footer"]
 *   - Catches: Chrome drift from legacy design
 *
 * INFO mode: Legacy vs refactor full-page comparison (informational)
 *   - Reference: Legacy production (https://www.merrow.com)
 *   - Test: Refactor preview
 *   - Catches: All visual differences (non-blocking, expected to differ)
 *
 * Usage:
 *   MODE=strict npm run backstop:parity:strict:reference   # Capture legacy chrome
 *   MODE=strict REFACTOR_PREVIEW_URL=http://localhost:3000 npm run backstop:parity:strict:test
 *   MODE=info REFACTOR_PREVIEW_URL=http://localhost:3000 npm run backstop:parity:info:test
 */

import * as fs from "fs";
import * as path from "path";
import { execSync } from "child_process";

const APP_ROOT = path.join(__dirname, "..");

function log(msg: string) {
  process.stdout.write(msg + "\n");
}

function logError(msg: string) {
  process.stderr.write(msg + "\n");
}

function main() {
  const command = process.argv[2] || "test";
  const mode = (process.env.MODE || "info").toLowerCase();

  if (!["test", "reference", "approve"].includes(command)) {
    logError("Usage: MODE=strict|info npx tsx scripts/backstop-parity.ts [test|reference|approve]");
    process.exit(1);
  }

  if (!["strict", "info"].includes(mode)) {
    logError("ERROR: MODE must be 'strict' or 'info'");
    logError("");
    logError("  MODE=strict — Legacy vs refactor homepage chrome (blocking)");
    logError("  MODE=info   — Legacy vs refactor full comparison (informational)");
    process.exit(1);
  }

  // Select config based on mode
  const configName = mode === "strict" ? "backstop.parity.strict.json" : "backstop.parity.info.json";
  const configPath = path.join(APP_ROOT, configName);
  const tempConfigPath = path.join(APP_ROOT, "backstop.parity.resolved.json");

  if (!fs.existsSync(configPath)) {
    logError(`ERROR: Config file not found: ${configName}`);
    process.exit(1);
  }

  // Get preview URL from environment
  const previewUrl = process.env.REFACTOR_PREVIEW_URL;

  // For test command, REFACTOR_PREVIEW_URL is required
  if (command === "test" && !previewUrl) {
    logError("ERROR: REFACTOR_PREVIEW_URL environment variable is required for parity test");
    logError("");
    logError("Set it to your Vercel preview URL or localhost:");
    logError(`  REFACTOR_PREVIEW_URL=http://localhost:3000 MODE=${mode} npx tsx scripts/backstop-parity.ts test`);
    process.exit(1);
  }

  // Read config
  const configRaw = fs.readFileSync(configPath, "utf8");

  // Substitute environment variable
  const resolvedConfig = configRaw.replace(
    /\$\{REFACTOR_PREVIEW_URL\}/g,
    previewUrl || "http://localhost:3000"
  );

  // Write resolved config
  fs.writeFileSync(tempConfigPath, resolvedConfig);
  log(`Mode: ${mode.toUpperCase()}`);
  log(`Config: ${configName}`);
  log(`Resolved config written to ${tempConfigPath}`);

  if (command === "reference") {
    log("");
    log("Capturing LEGACY PRODUCTION screenshots as reference...");
    log("Reference URL: https://www.merrow.com");
    if (mode === "strict") {
      log("Scope: Homepage header + footer chrome only");
    }
    log("");
  } else if (command === "test") {
    log("");
    log(`Running PARITY comparison (${mode.toUpperCase()} mode)...`);
    log(`Reference: https://www.merrow.com (legacy prod)`);
    log(`Test: ${previewUrl} (refactor preview)`);
    if (mode === "strict") {
      log("Scope: Homepage header + footer chrome only");
      log("This test is BLOCKING — refactor chrome must match legacy.");
    } else {
      log("This test is INFORMATIONAL — differences are expected.");
    }
    log("");
  }

  try {
    // Run backstop with resolved config
    const backstopCmd = `npx backstop ${command} --config=backstop.parity.resolved.json`;
    log(`Running: ${backstopCmd}`);
    log("");

    execSync(backstopCmd, {
      stdio: "inherit",
      cwd: APP_ROOT,
    });

    log("");
    log(`Parity ${command} (${mode}) completed successfully!`);

    const reportPath = mode === "strict"
      ? "backstop_data/parity_strict_report/index.html"
      : "backstop_data/parity_report/index.html";
    log(`Report: ${reportPath}`);

    process.exit(0);
  } catch (error) {
    if (command === "test") {
      log("");
      if (mode === "strict") {
        logError("STRICT PARITY TEST FAILED — Chrome differs from legacy.");
        logError("This is a BLOCKING failure. The refactor header/footer");
        logError("does not match the legacy production site.");
        logError("");
        logError("Review the report: backstop_data/parity_strict_report/index.html");
        logError("");
        logError("If the difference is intentional, update the reference:");
        logError("  npm run backstop:parity:strict:approve");
        process.exit(1);
      } else {
        log("INFO PARITY TEST completed with differences detected.");
        log("This is EXPECTED — the refactor will have visual differences from legacy.");
        log("Review the report: backstop_data/parity_report/index.html");
        process.exit(0);
      }
    } else {
      process.exit(1);
    }
  } finally {
    // Clean up temp config
    if (fs.existsSync(tempConfigPath)) {
      fs.unlinkSync(tempConfigPath);
    }
  }
}

main();
