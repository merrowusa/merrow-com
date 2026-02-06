// tailwind.config.ts
// @version tailwind-config v2.0
// Updated to match legacy merrow.com CSS (css.imerrow.com)
import type { Config } from "tailwindcss";

const config: Config = {
  content: [
    "./app/**/*.{js,ts,jsx,tsx,mdx}",
    "./components/**/*.{js,ts,jsx,tsx,mdx}",
    "./pages/**/*.{js,ts,jsx,tsx,mdx}",
  ],
  theme: {
    extend: {
      // Legacy font families
      fontFamily: {
        // Headlines: Century Gothic (legacy .ncp_headline, .sub_head)
        headline: ['"Century Gothic"', '"Helvetica Neue"', 'Arial', 'sans-serif'],
        // Body: Verdana (legacy body)
        body: ['Verdana', 'Arial', 'sans-serif'],
      },
      colors: {
        merrow: {
          // Background colors
          heroBg: "#f4f4f4",       // hero band background
          midBg: "#d7d7d7",        // mid-grey band background
          greyBoxBg: "#e4e4e4",    // grey callout boxes
          border: "#cfcfcf",       // light border color
          brandedBg: "#f1f1f1",    // Branded Stitch band
          footerBg: "#1f1f1f",     // footer band background (legacy: #313131)
          footerBoxBg: "#2a2a2a",  // footer inner boxes
          navBar: "#52524f",       // nav bar background (legacy .new_menu_bottom)
          navBorder: "#747676",    // nav bar top border
          menuText: "#7f0505",     // menu link color (legacy maroon)
          // Text colors
          textMain: "#222222",     // main body text (legacy: black)
          textSub: "#444444",      // secondary text
          textMuted: "#666666",    // small labels
          link: "#808080",         // link color (legacy .machine_list a)
          linkBlue: "#1a4f8a",     // blue link color (for CTAs)
          footerBorder: "#363631", // footer top border
          footerLink: "#808080",   // footer link color
        },
      },
      maxWidth: {
        merrow: "980px",            // global content column (legacy default - DO NOT CHANGE)
        "merrow-1020": "1020px",    // homepage-specific container per Figma (HEADER/HERO/FOOTER)
      },
      fontSize: {
        // Legacy typography scale from css.imerrow.com
        "merrow-headline": ["40px", { lineHeight: "44px", fontWeight: "400" }],  // .ncp_headline
        "merrow-subhead": ["28px", { lineHeight: "32px", fontWeight: "400" }],   // .sub_head
        "merrow-byeline": ["24px", { lineHeight: "28px", fontWeight: "400" }],   // .ncp_byeline
        "merrow-h1": ["30px", "34px"],     // main home H1
        "merrow-sub": ["20px", "24px"],    // subheading under H1
        "merrow-body": ["14px", "20px"],   // general body text (legacy: 14px)
        "merrow-small": ["12px", "16px"],  // small text
        "merrow-tiny": ["11px", "16px"],   // tiny labels (legacy .machine_list a)
      },
    },
  },
  plugins: [],
};

export default config;
