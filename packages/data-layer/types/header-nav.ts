// @version header-nav-types v1.0
//
// Type definitions for header mega-menu data
// These types match the exact DOM structure in Header.tsx
// STEP 3: Data integration without DOM changes

/**
 * Top-level navigation item
 */
export interface NavItem {
  label: string;
  href: string;
  hasDropdown: boolean;
  dropdownId: string;
}

/**
 * Resource link in Resources dropdown
 */
export interface ResourceLink {
  label: string;
  href: string;
  description: string;
}

/**
 * Machine class grouping for Machines dropdown
 */
export interface MachineClass {
  classKey: string;
  className: string;
  machines: MachineLink[];
}

/**
 * Individual machine link
 */
export interface MachineLink {
  styleKey: string;
  style: string;
  href: string;
}

/**
 * Application link for Applications dropdown
 */
export interface ApplicationLink {
  appKey: number;
  name: string;
  href: string;
}

/**
 * Featured customer story for Stories dropdown
 */
export interface FeaturedStory {
  appKey: string;
  title: string;
  quote: string;
  href: string;
}

/**
 * Part category for Parts dropdown
 */
export interface PartCategory {
  name: string;
  href: string;
}

/**
 * Complete header navigation data structure
 * This is the shape returned by getHeaderNavData()
 */
export interface HeaderNavData {
  /** Top-level navigation items */
  navItems: NavItem[];

  /** Resources dropdown links */
  resources: ResourceLink[];

  /** Machine classes with their machines */
  machineClasses: MachineClass[];

  /** Application categories */
  applications: ApplicationLink[];

  /** Featured customer stories */
  featuredStories: FeaturedStory[];

  /** Part categories */
  partCategories: PartCategory[];
}

/**
 * Default/fallback nav items - used when data fetch fails
 */
export const DEFAULT_NAV_ITEMS: NavItem[] = [
  { label: "Sewing Machines", href: "#", hasDropdown: true, dropdownId: "machines" },
  { label: "Sewing Applications", href: "#", hasDropdown: true, dropdownId: "applications" },
  { label: "Customer Stories", href: "/customer-stories", hasDropdown: true, dropdownId: "stories" },
  { label: "Genuine Parts", href: "/parts", hasDropdown: true, dropdownId: "parts" },
  { label: "Resources", href: "#", hasDropdown: true, dropdownId: "resources" },
];

/**
 * Static resources - rarely change, kept hardcoded
 * These are external links and tools, not DB content
 */
export const STATIC_RESOURCES: ResourceLink[] = [
  { label: "Agent Locator", href: "/agentmap.html", description: "Find a dealer in your area to help with sales, service, or repairs." },
  { label: "Stitch Browser", href: "/stitch.html", description: "Search our visual database to find the stitch of the merrow machine you're after" },
  { label: "Needle Selector Tool", href: "/needle_configurator.html", description: "The online needle selector tells you which Merrow needle is best for your applications and/or fabric" },
  { label: "Video", href: "https://www.youtube.com/user/merrowmachine", description: "Visit the Merrow Video Section for technical demonstrations, product information, and useful tips." },
  { label: "How Old is My Merrow", href: "/search1.php", description: "Enter the serial number of your Merrow Machine to determine if your Merrow is \"old as dirt\"." },
  { label: "ActiveSeam.com", href: "https://www.activeseam.com", description: "Learn what's new with ActiveSeam, stitch costing and marketing programs" },
  { label: "The Merrow Story", href: "https://merrowedge.com/pages/about-merrow", description: "Learn the story behind Merrow's invention of the overlock stitch and other company milestones" },
  { label: "Marketing Downloads", href: "/widget_marketing_material.php", description: "Our download section for a list of available marketing tools" },
  { label: "JOBS!", href: "/njp.php?j=jobs", description: "Working at Merrow is awesome - join us in Fall River!" },
  { label: "Merrow Robots", href: "https://merrowedge.com", description: "AUTOMATION!" },
  { label: "Merrow on Facebook", href: "https://www.facebook.com/MerrowSewingMachineCo", description: "Exchange ideas. See what's going on. Talk to others that value their Merrow Machines and Stitches" },
  { label: "The Merrow Group", href: "https://www.linkedin.com/company/merrow-group/", description: "Learn more about the Merrow Group Companies" },
];

/**
 * Static part categories - machine part types, not individual parts
 */
export const STATIC_PART_CATEGORIES: PartCategory[] = [
  { name: "Cast Off Horn", href: "/parts" },
  { name: "Cutters", href: "/parts" },
  { name: "Dust Shield", href: "/parts" },
  { name: "Eccentric Block", href: "/parts" },
  { name: "Fabric Guard", href: "/parts" },
  { name: "Feed Dog", href: "/parts" },
  { name: "Finger", href: "/parts" },
  { name: "Looper", href: "/parts" },
  { name: "Needle Carrier", href: "/parts" },
  { name: "Needle Plate", href: "/parts" },
  { name: "Presser Foot", href: "/parts" },
  { name: "Spring", href: "/parts" },
  { name: "Thread Guide", href: "/parts" },
  { name: "Upper Cutter", href: "/parts" },
  { name: "Washer", href: "/parts" },
];
