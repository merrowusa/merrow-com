#!/usr/bin/env npx tsx
/**
 * layout-telemetry.ts
 * Captures bounding boxes and computed styles for key homepage elements
 *
 * Usage:
 *   NEW_URL=http://localhost:3000 LEGACY_URL=https://www.merrow.com npx tsx scripts/layout-telemetry.ts
 *
 * Output:
 *   artifacts/layout/layout-new-1920.json
 *   artifacts/layout/layout-legacy-1920.json
 *   artifacts/layout/layout-new-1440.json
 *   artifacts/layout/layout-legacy-1440.json
 *   reports/parity/layout-diff-1920.md
 *   reports/parity/layout-diff-1440.md
 */

import * as fs from "fs";
import * as path from "path";
import puppeteer from "puppeteer";

const APP_ROOT = path.join(__dirname, "..");

function log(msg: string) {
  process.stdout.write(msg + "\n");
}

function logError(msg: string) {
  process.stderr.write(msg + "\n");
}

interface ElementMetrics {
  selector: string;
  name: string;
  bbox: { x: number; y: number; width: number; height: number } | null;
  styles: Record<string, string>;
  exists: boolean;
}

interface LayoutCapture {
  url: string;
  viewport: { width: number; height: number };
  capturedAt: string;
  elements: ElementMetrics[];
}

// Key elements to capture per STEP 2 spec
const ELEMENTS_TO_CAPTURE = [
  // Header
  { selector: "[data-testid='top-promo-bar']", name: "Header: Top Splash" },
  { selector: "header.new_menu", name: "Header: Main Container" },
  { selector: "header img[alt*='logo']", name: "Header: Logo" },
  { selector: "nav[aria-label='Main navigation']", name: "Header: Nav Bar" },

  // Hero
  { selector: "main", name: "Hero: Main Container" },
  { selector: ".bg-gradient-to-b", name: "Hero: Gradient Band" },
  { selector: "a[href='/technical-sewing']", name: "Hero: Tech Card" },
  { selector: "a[href='/fashion-sewing']", name: "Hero: Fashion Card" },
  { selector: "a[href='/end-to-end-seaming']", name: "Hero: End Card" },
  { selector: ".rounded-\\[9px\\]", name: "Hero: Grey Box" },

  // Footer
  { selector: "footer#footer", name: "Footer: Container" },
  { selector: "footer img[alt='World Map']", name: "Footer: World Map" },
  { selector: "form[action*='mailchimp']", name: "Footer: Newsletter Form" },
];

// Styles to capture
const STYLES_TO_CAPTURE = [
  "width", "height", "maxWidth", "padding", "margin",
  "backgroundColor", "borderTopWidth", "borderTopColor",
  "borderRadius", "boxShadow", "fontSize", "fontFamily"
];

async function captureLayout(url: string, viewport: { width: number; height: number }): Promise<LayoutCapture> {
  const browser = await puppeteer.launch({ headless: true, args: ["--no-sandbox"] });
  const page = await browser.newPage();

  await page.setViewport(viewport);
  await page.goto(url, { waitUntil: "networkidle2", timeout: 30000 });

  // Wait for content to settle
  await new Promise(resolve => setTimeout(resolve, 2000));

  const elements: ElementMetrics[] = [];

  for (const { selector, name } of ELEMENTS_TO_CAPTURE) {
    try {
      const el = await page.$(selector);
      if (el) {
        const bbox = await el.boundingBox();
        const styles = await page.evaluate((sel, stylesToGet) => {
          const element = document.querySelector(sel);
          if (!element) return {};
          const computed = window.getComputedStyle(element);
          const result: Record<string, string> = {};
          for (const prop of stylesToGet) {
            result[prop] = computed.getPropertyValue(prop.replace(/[A-Z]/g, m => `-${m.toLowerCase()}`));
          }
          return result;
        }, selector, STYLES_TO_CAPTURE);

        elements.push({ selector, name, bbox, styles, exists: true });
      } else {
        elements.push({ selector, name, bbox: null, styles: {}, exists: false });
      }
    } catch {
      elements.push({ selector, name, bbox: null, styles: {}, exists: false });
    }
  }

  await browser.close();

  return {
    url,
    viewport,
    capturedAt: new Date().toISOString(),
    elements,
  };
}

interface DiffItem {
  name: string;
  selector: string;
  property: string;
  newValue: string;
  legacyValue: string;
  delta: string;
}

function compareLayouts(newLayout: LayoutCapture, legacyLayout: LayoutCapture): DiffItem[] {
  const diffs: DiffItem[] = [];

  for (let i = 0; i < newLayout.elements.length; i++) {
    const newEl = newLayout.elements[i];
    const legacyEl = legacyLayout.elements[i];

    if (!newEl.exists && !legacyEl.exists) continue;

    // Check existence
    if (newEl.exists !== legacyEl.exists) {
      diffs.push({
        name: newEl.name,
        selector: newEl.selector,
        property: "exists",
        newValue: String(newEl.exists),
        legacyValue: String(legacyEl.exists),
        delta: newEl.exists ? "ADDED" : "MISSING",
      });
      continue;
    }

    // Check bbox dimensions
    if (newEl.bbox && legacyEl.bbox) {
      for (const prop of ["width", "height"] as const) {
        const diff = Math.abs(newEl.bbox[prop] - legacyEl.bbox[prop]);
        if (diff > 5) { // 5px tolerance
          diffs.push({
            name: newEl.name,
            selector: newEl.selector,
            property: `bbox.${prop}`,
            newValue: `${newEl.bbox[prop]}px`,
            legacyValue: `${legacyEl.bbox[prop]}px`,
            delta: `${diff > 0 ? "+" : ""}${(newEl.bbox[prop] - legacyEl.bbox[prop]).toFixed(0)}px`,
          });
        }
      }
    }

    // Check key styles
    for (const style of STYLES_TO_CAPTURE) {
      const newVal = newEl.styles[style] || "";
      const legacyVal = legacyEl.styles[style] || "";
      if (newVal !== legacyVal && newVal && legacyVal) {
        diffs.push({
          name: newEl.name,
          selector: newEl.selector,
          property: style,
          newValue: newVal,
          legacyValue: legacyVal,
          delta: "CHANGED",
        });
      }
    }
  }

  // Sort by severity (missing/added first, then by delta magnitude)
  return diffs.sort((a, b) => {
    if (a.delta === "MISSING" || a.delta === "ADDED") return -1;
    if (b.delta === "MISSING" || b.delta === "ADDED") return 1;
    return 0;
  });
}

function generateDiffReport(diffs: DiffItem[], viewport: { width: number; height: number }): string {
  const lines: string[] = [
    `# Layout Diff Report — ${viewport.width}x${viewport.height}`,
    "",
    `> Generated: ${new Date().toISOString()}`,
    `> Top 20 offenders (sorted by severity)`,
    "",
    "| # | Element | Property | New Value | Legacy Value | Delta |",
    "|---|---------|----------|-----------|--------------|-------|",
  ];

  const top20 = diffs.slice(0, 20);
  for (let i = 0; i < top20.length; i++) {
    const d = top20[i];
    lines.push(`| ${i + 1} | ${d.name} | ${d.property} | ${d.newValue} | ${d.legacyValue} | ${d.delta} |`);
  }

  lines.push("");
  lines.push(`**Total differences found:** ${diffs.length}`);
  lines.push("");

  if (diffs.length === 0) {
    lines.push("✅ No significant differences detected.");
  } else if (diffs.length <= 10) {
    lines.push("🟡 Minor differences — acceptable for homepage parity.");
  } else {
    lines.push("🔴 Significant differences — review required.");
  }

  return lines.join("\n");
}

async function main() {
  const newUrl = process.env.NEW_URL || "http://localhost:3000";
  const legacyUrl = process.env.LEGACY_URL || "https://www.merrow.com";

  log("Layout Telemetry Capture");
  log("========================");
  log(`New URL: ${newUrl}`);
  log(`Legacy URL: ${legacyUrl}`);
  log("");

  const viewports = [
    { width: 1920, height: 1080 },
    { width: 1440, height: 900 },
  ];

  for (const viewport of viewports) {
    log(`Capturing ${viewport.width}x${viewport.height}...`);

    // Capture new site
    log(`  → Capturing new: ${newUrl}`);
    const newLayout = await captureLayout(newUrl, viewport);
    fs.writeFileSync(
      path.join(APP_ROOT, `artifacts/layout/layout-new-${viewport.width}.json`),
      JSON.stringify(newLayout, null, 2)
    );

    // Capture legacy site
    log(`  → Capturing legacy: ${legacyUrl}`);
    const legacyLayout = await captureLayout(legacyUrl, viewport);
    fs.writeFileSync(
      path.join(APP_ROOT, `artifacts/layout/layout-legacy-${viewport.width}.json`),
      JSON.stringify(legacyLayout, null, 2)
    );

    // Compare and generate diff report
    log(`  → Generating diff report`);
    const diffs = compareLayouts(newLayout, legacyLayout);
    const report = generateDiffReport(diffs, viewport);
    fs.writeFileSync(
      path.join(APP_ROOT, `reports/parity/layout-diff-${viewport.width}.md`),
      report
    );

    log(`  → ${diffs.length} differences found`);
  }

  log("");
  log("Done! Reports written to:");
  log("  reports/parity/layout-diff-1920.md");
  log("  reports/parity/layout-diff-1440.md");
}

main().catch((err) => {
  logError(String(err));
  process.exit(1);
});
