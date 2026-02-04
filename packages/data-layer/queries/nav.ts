// @version nav-queries v3.0
//
// Cached navigation data queries
// Policy 2: Nav data MUST be cached. No per-request DB calls in Header.
// Uses Supabase JS client via underlying query functions
//
// STEP 3: Added getHeaderNavData() for complete header mega-menu integration

import { unstable_cache } from "next/cache";
import { getMachinesByCategory, getMachinesByClassKey, getAllMachines } from "./machines";
import { getAllApplicationCategories } from "./applications";
import { getPublishedStories } from "./customer-stories";
import type {
  HeaderNavData,
  MachineClass,
  MachineLink,
  ApplicationLink,
  FeaturedStory,
  DEFAULT_NAV_ITEMS,
  STATIC_RESOURCES,
  STATIC_PART_CATEGORIES,
} from "../types/header-nav";
export {
  DEFAULT_NAV_ITEMS,
  STATIC_RESOURCES,
  STATIC_PART_CATEGORIES,
} from "../types/header-nav";
export type { HeaderNavData } from "../types/header-nav";

// Nav data types (camelCase to match app conventions)
export interface NavMachine {
  id: number;
  style: string;
  styleKey: string;
  classKey: string | null;
}

export interface NavCategory {
  appKey: number;
  name: string;
}

export interface NavData {
  fashionMachines: NavMachine[];
  technicalMachines: NavMachine[];
  e2eMachines: NavMachine[];
  applicationCategories: NavCategory[];
}

/**
 * Get cached navigation data
 *
 * Policy 2 (NON-NEGOTIABLE): Global nav data MUST be cached.
 * - Revalidate every 1 hour minimum
 * - No per-request DB calls allowed in Header
 */
export const getNavData = unstable_cache(
  async (): Promise<NavData> => {
    const [fashion, technical, e2e, categories] = await Promise.all([
      getMachinesByCategory("fashion"),
      getMachinesByCategory("technical"),
      getMachinesByCategory("e2e"),
      getAllApplicationCategories(),
    ]);

    return {
      fashionMachines: fashion.map((m) => ({
        id: m.id,
        style: m.style,
        styleKey: m.styleKey,
        classKey: m.classKey,
      })),
      technicalMachines: technical.map((m) => ({
        id: m.id,
        style: m.style,
        styleKey: m.styleKey,
        classKey: m.classKey,
      })),
      e2eMachines: e2e.map((m) => ({
        id: m.id,
        style: m.style,
        styleKey: m.styleKey,
        classKey: m.classKey,
      })),
      applicationCategories: categories.map((c) => ({
        appKey: c.appKey,
        name: c.appCategoryName,
      })),
    };
  },
  ["nav-data"],
  { revalidate: 3600 } // 1 hour cache
);

// Machine class display names mapping
const MACHINE_CLASS_NAMES: Record<string, string> = {
  MG: "MG Class (Sergers)",
  "70": "70 Class",
  MB: "MB Class",
  M: "M Class",
  A: "A Class",
  Crochet: "Crochet Class",
  Pearl: "Pearl Stitch",
  E2E: "End-to-End",
};

/**
 * Get complete header navigation data with caching
 *
 * Policy 2 (NON-NEGOTIABLE): Global nav data MUST be cached.
 * - Revalidate every 1 hour
 * - No per-request DB calls in Header
 * - Safe fallback: returns partial data on failures
 *
 * Instrumentation: Check server logs for cache hit/miss
 */
export const getHeaderNavData = unstable_cache(
  async (): Promise<HeaderNavData> => {
    // Import static data
    const {
      DEFAULT_NAV_ITEMS,
      STATIC_RESOURCES,
      STATIC_PART_CATEGORIES,
    } = await import("../types/header-nav");

    try {
      // Fetch all data in parallel
      const [allMachines, categories, stories] = await Promise.all([
        getAllMachines(),
        getAllApplicationCategories(),
        getPublishedStories(),
      ]);

      // Group machines by class_key
      const machinesByClass = new Map<string, MachineLink[]>();
      for (const m of allMachines) {
        if (!m.classKey || m.publish !== "yes") continue;

        const links = machinesByClass.get(m.classKey) || [];
        links.push({
          styleKey: m.styleKey,
          style: m.style,
          href: `/machines/${m.styleKey}`,
        });
        machinesByClass.set(m.classKey, links);
      }

      // Convert to MachineClass array with display names
      const machineClasses: MachineClass[] = [];
      for (const [classKey, machines] of machinesByClass) {
        machineClasses.push({
          classKey,
          className: MACHINE_CLASS_NAMES[classKey] || `${classKey} Class`,
          machines: machines.slice(0, 8), // Limit to 8 per class for dropdown
        });
      }

      // Sort machine classes by common order
      const classOrder = ["MG", "70", "MB", "M", "A", "Crochet", "Pearl", "E2E"];
      machineClasses.sort((a, b) => {
        const aIdx = classOrder.indexOf(a.classKey);
        const bIdx = classOrder.indexOf(b.classKey);
        return (aIdx === -1 ? 999 : aIdx) - (bIdx === -1 ? 999 : bIdx);
      });

      // Map application categories
      const applications: ApplicationLink[] = categories.map((c) => ({
        appKey: c.appKey,
        name: c.appCategoryName,
        href: `/sewing/applications/${c.appKey}`,
      }));

      // Map featured stories (limit to 3 for dropdown)
      const featuredStories: FeaturedStory[] = stories.slice(0, 3).map((s) => ({
        appKey: s.appKey,
        title: s.quoteAuthor || "Customer Story",
        quote: s.quote?.substring(0, 80) + (s.quote?.length > 80 ? "..." : "") || "",
        href: `/customer-stories/featured/${s.appKey}`,
      }));

      return {
        navItems: DEFAULT_NAV_ITEMS,
        resources: STATIC_RESOURCES,
        machineClasses,
        applications,
        featuredStories,
        partCategories: STATIC_PART_CATEGORIES,
      };
    } catch {
      // Fallback: return static data only on error
      // This ensures header always renders
      return {
        navItems: DEFAULT_NAV_ITEMS,
        resources: STATIC_RESOURCES,
        machineClasses: [],
        applications: [],
        featuredStories: [],
        partCategories: STATIC_PART_CATEGORIES,
      };
    }
  },
  ["header-nav-data"],
  { revalidate: 3600 } // 1 hour cache TTL
);
