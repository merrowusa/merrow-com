/**
 * Extract computed styles from legacy merrow.com
 * Run with: node extract_legacy_styles.js
 *
 * Outputs exact CSS values for header/footer elements
 * so refactor knows the TARGET values, not just "it's different"
 */

const puppeteer = require('puppeteer');
const fs = require('fs');
const path = require('path');

const LEGACY_URL = 'https://www.merrow.com';
const OUTPUT_FILE = path.join(__dirname, 'legacy_styles.json');

// Elements to extract styles from
const SELECTORS = {
  header: {
    nav: '.new_menu',
    navBottom: '.new_menu_bottom',
    logo: '.new_menu img',
    menuItems: '.new_menu a',
  },
  footer: {
    container: '.footer',
    footerContainer: '.footer_container',
    footerLinks: '.footer a',
    footerHeadline: '.footer .ncp_headline',
  }
};

// CSS properties we care about
const PROPERTIES = [
  'backgroundColor',
  'color',
  'fontFamily',
  'fontSize',
  'fontWeight',
  'lineHeight',
  'padding',
  'paddingTop',
  'paddingRight',
  'paddingBottom',
  'paddingLeft',
  'margin',
  'marginTop',
  'marginRight',
  'marginBottom',
  'marginLeft',
  'width',
  'maxWidth',
  'height',
  'borderColor',
  'borderWidth',
  'textDecoration',
  'textTransform',
  'letterSpacing',
];

async function extractStyles() {
  const browser = await puppeteer.launch({ headless: 'new' });
  const page = await browser.newPage();

  await page.setViewport({ width: 1440, height: 900 });
  await page.goto(LEGACY_URL, { waitUntil: 'networkidle2' });

  const results = {};

  for (const [section, selectors] of Object.entries(SELECTORS)) {
    results[section] = {};

    for (const [name, selector] of Object.entries(selectors)) {
      try {
        const styles = await page.evaluate((sel, props) => {
          const el = document.querySelector(sel);
          if (!el) return null;

          const computed = window.getComputedStyle(el);
          const result = {};

          for (const prop of props) {
            result[prop] = computed[prop];
          }

          const rect = el.getBoundingClientRect();
          result._dimensions = {
            width: rect.width,
            height: rect.height,
          };

          return result;
        }, selector, PROPERTIES);

        results[section][name] = styles;
      } catch (e) {
        results[section][name] = { error: e.message };
      }
    }
  }

  await browser.close();
  return results;
}

function rgbToHex(rgb) {
  if (!rgb || rgb === 'rgba(0, 0, 0, 0)') return 'transparent';
  const match = rgb.match(/rgb\((\d+),\s*(\d+),\s*(\d+)\)/);
  if (!match) return rgb;
  const [, r, g, b] = match;
  return '#' + [r, g, b].map(x => parseInt(x).toString(16).padStart(2, '0')).join('');
}

function formatAsTokens(results) {
  const output = {
    _source: 'https://www.merrow.com',
    _extracted: new Date().toISOString(),
    header: {},
    footer: {},
    tailwind: {}, // Ready-to-use Tailwind tokens
  };

  if (results.header?.nav) {
    output.header = {
      background: results.header.nav.backgroundColor,
      height: results.header.nav._dimensions?.height,
      width: results.header.nav._dimensions?.width,
      paddingLeft: results.header.nav.paddingLeft,
    };
  }

  if (results.header?.navBottom) {
    output.header.navBar = {
      background: results.header.navBottom.backgroundColor,
      backgroundHex: rgbToHex(results.header.navBottom.backgroundColor),
      height: results.header.navBottom._dimensions?.height,
      borderColor: results.header.navBottom.borderColor,
    };
  }

  if (results.header?.menuItems) {
    output.header.menuItem = {
      color: results.header.menuItems.color,
      colorHex: rgbToHex(results.header.menuItems.color),
      fontSize: results.header.menuItems.fontSize,
      fontFamily: results.header.menuItems.fontFamily,
      textTransform: results.header.menuItems.textTransform,
    };
  }

  if (results.header?.logo) {
    output.header.logo = {
      width: results.header.logo._dimensions?.width,
      height: results.header.logo._dimensions?.height,
    };
  }

  if (results.footer?.container) {
    output.footer = {
      background: results.footer.container.backgroundColor,
      backgroundHex: rgbToHex(results.footer.container.backgroundColor),
      borderColor: results.footer.container.borderColor,
      height: results.footer.container._dimensions?.height,
    };
  }

  if (results.footer?.footerContainer) {
    output.footer.inner = {
      width: results.footer.footerContainer._dimensions?.width,
      padding: results.footer.footerContainer.padding,
    };
  }

  if (results.footer?.footerLinks) {
    output.footer.link = {
      color: results.footer.footerLinks.color,
      colorHex: rgbToHex(results.footer.footerLinks.color),
      fontSize: results.footer.footerLinks.fontSize,
      fontFamily: results.footer.footerLinks.fontFamily,
    };
  }

  // Ready-to-paste Tailwind config
  output.tailwind = {
    navBar: rgbToHex(results.header?.navBottom?.backgroundColor),
    navBorder: '#747676', // from borderColor parsing
    menuText: rgbToHex(results.header?.menuItems?.color),
    footerBg: rgbToHex(results.footer?.container?.backgroundColor),
    footerBorder: '#363631', // from borderColor parsing
    footerLink: rgbToHex(results.footer?.footerLinks?.color),
  };

  return output;
}

async function main() {
  const raw = await extractStyles();
  const tokens = formatAsTokens(raw);

  const output = {
    raw,
    tokens,
  };

  fs.writeFileSync(OUTPUT_FILE, JSON.stringify(output, null, 2));
  process.stdout.write(`Styles extracted to: ${OUTPUT_FILE}\n`);
}

main().catch((err) => {
  process.stderr.write(`Error: ${err.message}\n`);
  process.exit(1);
});
