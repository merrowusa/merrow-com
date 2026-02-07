"use client";

import { useEffect } from "react";
import { usePathname } from "next/navigation";

declare global {
  interface Window {
    Cufon?: {
      replace: (selector: string) => void;
    };
  }
}

const CUFON_ENGINE_ID = "legacy-cufon-engine";
const CUFON_ENGINE_SRC = "/legacy/cufon-yui.js";
const CUFON_FONT_ID = "legacy-cufon-font";
const CUFON_FONT_SRC = "/legacy/century.font.js";

const SELECTORS = [
  "h1",
  "h2",
  "h4",
  "div.ncp_headline",
  "div.ncp_byeline",
  "div.main_image p",
  "div.center_text",
  "div.box_headline",
  "div.box_subline",
  "div.sub_head",
  "#tail div.menu_text div.c_grid_5 ul li a",
];

function applyCufon() {
  if (!window.Cufon) return;
  for (const selector of SELECTORS) {
    window.Cufon.replace(selector);
  }
}

function loadScript(id: string, src: string) {
  return new Promise<void>((resolve, reject) => {
    const existing = document.getElementById(id) as HTMLScriptElement | null;
    if (existing) {
      if (existing.dataset.loaded === "true") {
        resolve();
        return;
      }
      existing.addEventListener("load", () => resolve(), { once: true });
      existing.addEventListener("error", () => reject(new Error(`Failed to load ${src}`)), { once: true });
      return;
    }

    const script = document.createElement("script");
    script.id = id;
    script.src = src;
    script.async = true;
    script.onload = () => {
      script.dataset.loaded = "true";
      resolve();
    };
    script.onerror = () => reject(new Error(`Failed to load ${src}`));
    document.head.appendChild(script);
  });
}

export function LegacyCufon() {
  const pathname = usePathname();

  useEffect(() => {
    if (pathname !== "/") return;
    let cancelled = false;

    (async () => {
      try {
        await loadScript(CUFON_ENGINE_ID, CUFON_ENGINE_SRC);
        await loadScript(CUFON_FONT_ID, CUFON_FONT_SRC);
        if (!cancelled) {
          applyCufon();
        }
      } catch {
        // Fail quietly and fall back to CSS font stack.
      }
    })();

    return () => {
      cancelled = true;
    };
  }, [pathname]);

  return null;
}
