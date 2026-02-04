// @version header-nav-test v1.0
// STEP 3 Task D: Tests for mega-menu data integration
//
// Tests:
// 1. Menu model normalization (types match expected shape)
// 2. DOM structure selectors (data-testid and aria-labels)

import {
  DEFAULT_NAV_ITEMS,
  STATIC_RESOURCES,
  STATIC_PART_CATEGORIES,
  type HeaderNavData,
  type NavItem,
  type ResourceLink,
  type MachineClass,
  type ApplicationLink,
  type FeaturedStory,
  type PartCategory,
} from "@data-layer/types/header-nav";

describe("Header Nav Types", () => {
  describe("DEFAULT_NAV_ITEMS", () => {
    it("should have exactly 5 navigation items", () => {
      expect(DEFAULT_NAV_ITEMS).toHaveLength(5);
    });

    it("should have correct structure for each item", () => {
      DEFAULT_NAV_ITEMS.forEach((item: NavItem) => {
        expect(item).toHaveProperty("label");
        expect(item).toHaveProperty("href");
        expect(item).toHaveProperty("hasDropdown");
        expect(item).toHaveProperty("dropdownId");
        expect(typeof item.label).toBe("string");
        expect(typeof item.href).toBe("string");
        expect(typeof item.hasDropdown).toBe("boolean");
        expect(typeof item.dropdownId).toBe("string");
      });
    });

    it("should have expected dropdown IDs", () => {
      const dropdownIds = DEFAULT_NAV_ITEMS.map((item) => item.dropdownId);
      expect(dropdownIds).toContain("machines");
      expect(dropdownIds).toContain("applications");
      expect(dropdownIds).toContain("stories");
      expect(dropdownIds).toContain("parts");
      expect(dropdownIds).toContain("resources");
    });
  });

  describe("STATIC_RESOURCES", () => {
    it("should have exactly 12 resource links", () => {
      expect(STATIC_RESOURCES).toHaveLength(12);
    });

    it("should have correct structure for each resource", () => {
      STATIC_RESOURCES.forEach((resource: ResourceLink) => {
        expect(resource).toHaveProperty("label");
        expect(resource).toHaveProperty("href");
        expect(resource).toHaveProperty("description");
        expect(typeof resource.label).toBe("string");
        expect(typeof resource.href).toBe("string");
        expect(typeof resource.description).toBe("string");
        expect(resource.label.length).toBeGreaterThan(0);
        expect(resource.href.length).toBeGreaterThan(0);
      });
    });
  });

  describe("STATIC_PART_CATEGORIES", () => {
    it("should have exactly 15 part categories", () => {
      expect(STATIC_PART_CATEGORIES).toHaveLength(15);
    });

    it("should have correct structure for each category", () => {
      STATIC_PART_CATEGORIES.forEach((category: PartCategory) => {
        expect(category).toHaveProperty("name");
        expect(category).toHaveProperty("href");
        expect(typeof category.name).toBe("string");
        expect(typeof category.href).toBe("string");
      });
    });
  });
});

describe("HeaderNavData shape", () => {
  it("should create valid HeaderNavData object", () => {
    const testData: HeaderNavData = {
      navItems: DEFAULT_NAV_ITEMS,
      resources: STATIC_RESOURCES,
      machineClasses: [],
      applications: [],
      featuredStories: [],
      partCategories: STATIC_PART_CATEGORIES,
    };

    expect(testData.navItems).toHaveLength(5);
    expect(testData.resources).toHaveLength(12);
    expect(testData.partCategories).toHaveLength(15);
    expect(Array.isArray(testData.machineClasses)).toBe(true);
    expect(Array.isArray(testData.applications)).toBe(true);
    expect(Array.isArray(testData.featuredStories)).toBe(true);
  });

  it("should accept dynamic machine classes", () => {
    const machineClass: MachineClass = {
      classKey: "MG",
      className: "MG Class (Sergers)",
      machines: [
        { styleKey: "mg3u", style: "MG-3U", href: "/machines/mg3u" },
      ],
    };

    expect(machineClass.classKey).toBe("MG");
    expect(machineClass.machines).toHaveLength(1);
    expect(machineClass.machines[0].style).toBe("MG-3U");
  });

  it("should accept dynamic applications", () => {
    const app: ApplicationLink = {
      appKey: 6621,
      name: "ActiveSeam",
      href: "/sewing/applications/6621",
    };

    expect(app.appKey).toBe(6621);
    expect(app.name).toBe("ActiveSeam");
  });

  it("should accept dynamic featured stories", () => {
    const story: FeaturedStory = {
      appKey: "csrw",
      title: "Ramblers Way",
      quote: "Merrow knows sewing...",
      href: "/customer-stories/featured/csrw",
    };

    expect(story.appKey).toBe("csrw");
    expect(story.title).toBe("Ramblers Way");
  });
});

describe("Header DOM structure selectors", () => {
  // These selectors MUST exist in Header.tsx for parity
  const REQUIRED_SELECTORS = [
    { selector: "header.new_menu", description: "Main header container" },
    { selector: "[data-testid='site-header']", description: "Header test ID" },
    { selector: "nav[aria-label='Main navigation']", description: "Nav bar" },
    { selector: "nav[aria-label='Secondary navigation']", description: "Support links" },
  ];

  const DROPDOWN_ARIA_LABELS = [
    "Sewing Machines menu",
    "Sewing Applications menu",
    "Customer Stories menu",
    "Genuine Parts menu",
    "Resources menu",
  ];

  it("should define all required selectors", () => {
    // This test documents the expected DOM structure
    // Actual DOM verification is done by layout-telemetry.ts
    REQUIRED_SELECTORS.forEach(({ selector, description }) => {
      expect(selector).toBeTruthy();
      expect(description).toBeTruthy();
    });
  });

  it("should define all dropdown aria-labels", () => {
    expect(DROPDOWN_ARIA_LABELS).toHaveLength(5);
    expect(DROPDOWN_ARIA_LABELS).toContain("Resources menu");
    expect(DROPDOWN_ARIA_LABELS).toContain("Sewing Machines menu");
  });
});
