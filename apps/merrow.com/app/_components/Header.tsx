"use client";

// @version header v3.3
// Parity pass: align header chrome to live merrow.com (home + fashion)

import { useState, useCallback, useRef, useEffect } from "react";
import { TopPromoBar } from "./TopPromoBar";
import type { HeaderNavData } from "@data-layer/types/header-nav";

// Static assets (downloaded from S3 to repo per assets-manifest.json)
const ASSETS = {
  logo: "/images/merrowlogo_03.png",
  since1838: "/images/1838.png",
};

// Main navigation structure (matches legacy header_test.php)
// TODO: Machine/Application data will be fetched from database
const NAV_ITEMS = [
  {
    label: "Sewing Machines",
    href: "#",
    hasDropdown: true,
    dropdownId: "machines",
  },
  {
    label: "Sewing Applications",
    href: "#",
    hasDropdown: true,
    dropdownId: "applications",
  },
  {
    label: "Customer Stories",
    href: "/customer-stories",
    hasDropdown: true,
    dropdownId: "stories",
  },
  {
    label: "Genuine Parts",
    href: "/parts",
    hasDropdown: true,
    dropdownId: "parts",
  },
  {
    label: "Resources",
    href: "#",
    hasDropdown: true,
    dropdownId: "resources",
  },
];

// Resources dropdown items (matches legacy exactly - 12 items)
const RESOURCES = [
  { label: "Agent Locator", href: "/agentmap.html", description: "Find a dealer in your area to help with sales, service, or repairs." },
  { label: "Stitch Browser", href: "/stitch.html", description: "Search our visual database to find the stitch of the merrow machine you're after" },
  { label: "Needle Selector Tool", href: "/needle_configurator.html", description: "The online needle selector tells you which Merrow needle is best for your applications and/or fabric" },
  { label: "Video", href: "https://www.youtube.com/user/merrowmachine", description: "Visit the Merrow Video Section for technical demonstrations, product information, and useful tips." },
  { label: "How Old is My Merrow", href: "/search1.php", description: "Enter the serial number of your Merrow Machine to determine if your Merrow is \"old as dirt\"." },
  { label: "ActiveSeam.com", href: "https://www.activeseam.com", description: "Learn what's new with ActiveSeam, stitch costing and marketing programs" },
  { label: "The Merrow Story", href: "https://merrowedge.com/pages/about-merrow", description: "Learn the story behind Merrow's invention of the overlock stitch and other company milestones" },
  { label: "Marketing Downloads", href: "/widget_marketing_material.php", description: "Our download section for a list of available marketing tools" },
  { label: "JOBS!", href: "/contact_general.html", description: "Working at Merrow is awesome - join us in Fall River!" },
  { label: "Merrow Robots", href: "https://merrowedge.com", description: "AUTOMATION!" },
  { label: "Merrow on Facebook", href: "https://www.facebook.com/MerrowSewingMachineCo", description: "Exchange ideas. See what's going on. Talk to others that value their Merrow Machines and Stitches" },
  { label: "The Merrow Group", href: "https://www.linkedin.com/company/merrow-group/", description: "Learn more about the Merrow Group Companies" },
];

// Static part categories fallback
const STATIC_PART_CATEGORIES = [
  "Cast Off Horn", "Cutters", "Dust Shield", "Eccentric Block", "Fabric Guard",
  "Feed Dog", "Finger", "Looper", "Needle Carrier", "Needle Plate",
  "Presser Foot", "Spring", "Thread Guide", "Upper Cutter", "Washer",
];

interface HeaderProps {
  /** Navigation data from server (optional - falls back to static data) */
  navData?: HeaderNavData;
}

export function Header({ navData }: HeaderProps = {}) {
  // Use navData if provided, otherwise fall back to static constants
  const navItems = navData?.navItems ?? NAV_ITEMS;
  const resources = navData?.resources ?? RESOURCES;
  const machineClasses = navData?.machineClasses ?? [];
  const applications = navData?.applications ?? [];
  const featuredStories = navData?.featuredStories ?? [];
  const partCategories = navData?.partCategories ?? STATIC_PART_CATEGORIES;
  const resolvedPartCategories = partCategories.map((part) => {
    if (typeof part === "string") {
      return { name: part, href: "/parts" };
    }
    return part;
  });
  const [searchQuery, setSearchQuery] = useState("");
  const [activeDropdown, setActiveDropdown] = useState<string | null>(null);
  const dropdownRefs = useRef<Record<string, HTMLLIElement | null>>({});

  const handleSearchChange = useCallback((event: React.ChangeEvent<HTMLInputElement>) => {
    setSearchQuery(event.target.value);
  }, []);

  const handleSearchSubmit = useCallback((event: React.FormEvent) => {
    event.preventDefault();
    if (searchQuery.trim()) {
      // TODO: Implement search functionality - redirect to search results page
      window.location.href = `/search?q=${encodeURIComponent(searchQuery)}`;
    }
  }, [searchQuery]);

  const handleMouseEnter = useCallback((dropdownId: string) => {
    setActiveDropdown(dropdownId);
  }, []);

  const handleMouseLeave = useCallback(() => {
    setActiveDropdown(null);
  }, []);

  const handleKeyDown = useCallback((event: React.KeyboardEvent, href: string) => {
    if (event.key === "Enter" || event.key === " ") {
      event.preventDefault();
      window.location.href = href;
    }
  }, []);

  useEffect(() => {
    const handleEscape = (event: KeyboardEvent) => {
      if (event.key === "Escape") {
        setActiveDropdown(null);
      }
    };

    document.addEventListener("keydown", handleEscape);
    return () => document.removeEventListener("keydown", handleEscape);
  }, []);

  return (
    <>
      {/* Top Promo Bars */}
      <TopPromoBar />

      {/* Main Header - .new_menu class for legacy parity selector compatibility */}
      <header className="new_menu bg-white border-b border-[#cfcfcf]" role="banner" data-testid="site-header">
        <div id="new_menu_a" className="mx-auto max-w-merrow-1020 px-6">
          {/* Top Row: Logo + Support/Contact */}
          <div className="new_menu_top flex items-center justify-between py-[6px]">
            <a href="/" aria-label="Merrow Sewing Machine Company - Home">
              <img
                src={ASSETS.logo}
                width={341}
                height={68}
                alt="Merrow Sewing Machine Co. logo"
                className="h-auto"
              />
            </a>

            <nav aria-label="Secondary navigation">
              <ul className="flex items-center gap-3 text-[13px] text-[#808080]">
                <li>
                  <a
                    href="/support"
                    className="hover:text-[#1a4f8a] hover:underline focus:outline-none focus:ring-2 focus:ring-[#1a4f8a] focus:ring-opacity-50"
                  >
                    Support
                  </a>
                </li>
                <li className="text-[#808080]">|</li>
                <li>
                  <a
                    href="/contact_general.html"
                    className="hover:text-[#1a4f8a] hover:underline focus:outline-none focus:ring-2 focus:ring-[#1a4f8a] focus:ring-opacity-50"
                  >
                    Contact Us
                  </a>
                </li>
              </ul>
            </nav>
          </div>

          {/* Middle Row: Search + Heritage */}
          <div className="new_menu_middle flex items-center justify-between gap-4 pb-[6px]">
            <div className="cse-search-form_container flex-1">
              <div id="cse-search-form" className="w-full">
                <form onSubmit={handleSearchSubmit} role="search" aria-label="Site search">
                  <label htmlFor="search-input" className="sr-only">
                    Search merrow.com
                  </label>
                  <input
                    id="search-input"
                    type="text"
                    value={searchQuery}
                    onChange={handleSearchChange}
                    placeholder=""
                    className="w-full max-w-[620px] bg-white border border-[#cfcfcf] px-3 py-2 text-[13px] text-[#333] outline-none shadow-[0_1px_3px_rgba(0,0,0,0.12)]"
                  />
                </form>
              </div>
            </div>
            <div
              className="css-arrow-right h-0 w-0 border-y-[8px] border-y-transparent border-l-[12px] border-l-[#cfcfcf]"
              aria-hidden="true"
            />
            <div className="logo_box flex items-center gap-2">
              <ul id="logo_text" className="text-[12px] text-[#666] italic">
                <li>Manufacturing Sewing Machines since</li>
              </ul>
              <div className="laroush">
                <img
                  src={ASSETS.since1838}
                  alt="Since 1838"
                  className="h-[28px] w-auto"
                />
              </div>
            </div>
          </div>

          {/* Navigation Row */}
          <div className="new_menu_bottom relative">
            <nav
              className="h-[29px] rounded-[5px] border-t border-[#747676] bg-[#52524f] shadow-[inset_0_1px_0_rgba(255,255,255,0.15)]"
              role="navigation"
              aria-label="Main navigation"
            >
              <ul className="flex items-center">
                {navItems.map((item, idx) => (
                  <li
                    key={item.label}
                    className={`relative ${idx === 0 ? "" : "border-l border-[#2f2f2f]"}`}
                    ref={(el) => { dropdownRefs.current[item.dropdownId] = el; }}
                    onMouseEnter={() => item.hasDropdown && handleMouseEnter(item.dropdownId)}
                    onMouseLeave={handleMouseLeave}
                  >
                    <a
                      href={item.href}
                      className="block px-4 py-[6px] text-[13px] font-semibold text-white hover:bg-[#3f3f3f] focus:outline-none focus:bg-[#3f3f3f] focus:ring-2 focus:ring-white focus:ring-inset transition-colors"
                      onKeyDown={(e) => handleKeyDown(e, item.href)}
                      aria-expanded={item.hasDropdown ? activeDropdown === item.dropdownId : undefined}
                      aria-haspopup={item.hasDropdown ? "true" : undefined}
                    >
                      {item.label}
                    </a>

                    {/* Mega Dropdown - Resources */}
                    {item.dropdownId === "resources" && (
                      <div
                        className={`absolute left-0 top-full bg-white border border-[#cfcfcf] shadow-lg z-50 w-[600px] ${
                          activeDropdown === "resources" ? "block" : "hidden"
                        }`}
                        role="menu"
                        aria-label="Resources menu"
                      >
                        <div className="p-4">
                          <h2 className="text-[18px] font-bold text-[#222] mb-4">
                            Resources
                          </h2>
                          <div className="grid grid-cols-2 gap-3" role="none">
                            {resources.map((resource) => (
                              <a
                                key={resource.label}
                                href={resource.href}
                                className="block p-2 hover:bg-[#f4f4f4] focus:bg-[#f4f4f4] focus:outline-none focus:ring-2 focus:ring-[#1a4f8a] focus:ring-opacity-50 rounded"
                                role="menuitem"
                              >
                                <div className="text-[13px] font-semibold text-[#1a4f8a]">
                                  {resource.label}
                                </div>
                                <div className="text-[11px] text-[#666] mt-1">
                                  {resource.description}
                                </div>
                              </a>
                            ))}
                          </div>
                        </div>
                      </div>
                    )}

                    {/* Mega Dropdown - Sewing Machines (placeholder) */}
                    {item.dropdownId === "machines" && (
                      <div
                        className={`absolute left-0 top-full bg-white border border-[#cfcfcf] shadow-lg z-50 w-[800px] ${
                          activeDropdown === "machines" ? "block" : "hidden"
                        }`}
                        role="menu"
                        aria-label="Sewing Machines menu"
                      >
                        <div className="p-4">
                          <div className="flex gap-4 mb-4">
                            <h2 className="text-[18px] font-bold text-[#222]">
                              Merrow Sewing Machines
                            </h2>
                            <p className="text-[12px] text-[#666] flex-1">
                              Merrow Stitches bring visual impact, performance and
                              distinction to consumer products. In a word, they
                              bring value.
                            </p>
                          </div>
                          {/* Machine classes from database (with static fallback) */}
                          <div className="grid grid-cols-4 gap-4" role="none">
                            {machineClasses.length > 0 ? (
                              machineClasses.slice(0, 4).map((mc) => (
                                <div key={mc.classKey}>
                                  <h3 className="text-[13px] font-bold text-[#444] mb-2">
                                    {mc.className}
                                  </h3>
                                  <ul className="space-y-1" role="none">
                                    {mc.machines.slice(0, 5).map((m) => (
                                      <li key={m.styleKey}>
                                        <a
                                          href={m.href}
                                          className="text-[12px] text-[#808080] hover:text-[#1a4f8a] hover:underline focus:outline-none focus:ring-2 focus:ring-[#1a4f8a] focus:ring-opacity-50"
                                          role="menuitem"
                                        >
                                          {m.style}
                                        </a>
                                      </li>
                                    ))}
                                  </ul>
                                </div>
                              ))
                            ) : (
                              /* Fallback: static placeholder when DB unavailable */
                              <>
                                <div>
                                  <h3 className="text-[13px] font-bold text-[#444] mb-2">
                                    MG Class (Sergers)
                                  </h3>
                                  <ul className="space-y-1" role="none">
                                    <li>
                                      <a
                                        href="/Sergers_and_Overlock_Sewing_Machines/MG-3U"
                                        className="text-[12px] text-[#808080] hover:text-[#1a4f8a] hover:underline focus:outline-none focus:ring-2 focus:ring-[#1a4f8a] focus:ring-opacity-50"
                                        role="menuitem"
                                      >
                                        MG-3U
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                                <div>
                                  <h3 className="text-[13px] font-bold text-[#444] mb-2">
                                    70 Class
                                  </h3>
                                  <ul className="space-y-1" role="none">
                                    <li className="text-[11px] text-[#999] italic">
                                      Browse machines
                                    </li>
                                  </ul>
                                </div>
                                <div>
                                  <h3 className="text-[13px] font-bold text-[#444] mb-2">
                                    Crochet Class
                                  </h3>
                                  <ul className="space-y-1" role="none">
                                    <li className="text-[11px] text-[#999] italic">
                                      Browse machines
                                    </li>
                                  </ul>
                                </div>
                              </>
                            )}
                          </div>
                        </div>
                      </div>
                    )}

                    {/* Mega Dropdown - Sewing Applications (placeholder) */}
                    {item.dropdownId === "applications" && (
                      <div
                        className={`absolute left-0 top-full bg-white border border-[#cfcfcf] shadow-lg z-50 w-[800px] ${
                          activeDropdown === "applications" ? "block" : "hidden"
                        }`}
                        role="menu"
                        aria-label="Sewing Applications menu"
                      >
                        <div className="p-4">
                          <div className="flex gap-4 mb-4">
                            <h2 className="text-[18px] font-bold text-[#222]">
                              Merrow Sewing Applications
                            </h2>
                            <p className="text-[12px] text-[#666] flex-1">
                              Merrow Stitches bring visual impact, performance and
                              distinction to consumer products.
                            </p>
                          </div>
                          {/* Application categories from database (with static fallback) */}
                          <div className="grid grid-cols-4 gap-4" role="none">
                            {applications.length > 0 ? (
                              applications.slice(0, 8).map((app) => (
                                <div key={app.appKey}>
                                  <a
                                    href={app.href}
                                    className="text-[13px] font-bold text-[#1a4f8a] hover:underline focus:outline-none focus:ring-2 focus:ring-[#1a4f8a] focus:ring-opacity-50"
                                    role="menuitem"
                                  >
                                    {app.name}
                                  </a>
                                </div>
                              ))
                            ) : (
                              /* Fallback: static apps when DB unavailable */
                              <>
                                <div>
                                  <a href="/sewing/applications/6621" className="text-[13px] font-bold text-[#1a4f8a] hover:underline" role="menuitem">ActiveSeam</a>
                                </div>
                                <div>
                                  <a href="/sewing/applications/5514" className="text-[13px] font-bold text-[#1a4f8a] hover:underline" role="menuitem">Blanket Stitching</a>
                                </div>
                                <div>
                                  <a href="/sewing/applications/5516" className="text-[13px] font-bold text-[#1a4f8a] hover:underline" role="menuitem">Baby Garments</a>
                                </div>
                                <div>
                                  <a href="/sewing/applications/5512" className="text-[13px] font-bold text-[#1a4f8a] hover:underline" role="menuitem">Emblems and Labels</a>
                                </div>
                              </>
                            )}
                          </div>
                        </div>
                      </div>
                    )}

                    {/* Mega Dropdown - Customer Stories (placeholder) */}
                    {item.dropdownId === "stories" && (
                      <div
                        className={`absolute left-0 top-full bg-white border border-[#cfcfcf] shadow-lg z-50 w-[600px] ${
                          activeDropdown === "stories" ? "block" : "hidden"
                        }`}
                        role="menu"
                        aria-label="Customer Stories menu"
                      >
                        <div className="p-4">
                          <h2 className="text-[18px] font-bold text-[#222] mb-3">
                            Customer Stories
                          </h2>
                          <div className="grid grid-cols-2 gap-3" role="none">
                            {featuredStories.length > 0 ? (
                              featuredStories.map((story) => (
                                <a
                                  key={story.appKey ?? story.href ?? story.title}
                                  href={story.href}
                                  className="text-[13px] text-[#1a4f8a] hover:underline"
                                  role="menuitem"
                                >
                                  {story.title}
                                </a>
                              ))
                            ) : (
                              <>
                                <a href="/customer-stories" className="text-[13px] text-[#1a4f8a] hover:underline" role="menuitem">All Customer Stories</a>
                                <a href="/customer-stories/featured" className="text-[13px] text-[#1a4f8a] hover:underline" role="menuitem">Featured Story</a>
                              </>
                            )}
                          </div>
                        </div>
                      </div>
                    )}

                    {/* Mega Dropdown - Parts (placeholder) */}
                    {item.dropdownId === "parts" && (
                      <div
                        className={`absolute left-0 top-full bg-white border border-[#cfcfcf] shadow-lg z-50 w-[500px] ${
                          activeDropdown === "parts" ? "block" : "hidden"
                        }`}
                        role="menu"
                        aria-label="Parts menu"
                      >
                        <div className="p-4">
                          <h2 className="text-[18px] font-bold text-[#222] mb-3">
                            Genuine Parts
                          </h2>
                          <div className="grid grid-cols-2 gap-2" role="none">
                            {resolvedPartCategories.map((part) => (
                              <a
                                key={part.name}
                                href={part.href}
                                className="text-[12px] text-[#666] hover:text-[#1a4f8a] hover:underline"
                                role="menuitem"
                              >
                                {part.name}
                              </a>
                            ))}
                          </div>
                        </div>
                      </div>
                    )}
                  </li>
                ))}
              </ul>
            </nav>
          </div>
        </div>
      </header>
    </>
  );
}
