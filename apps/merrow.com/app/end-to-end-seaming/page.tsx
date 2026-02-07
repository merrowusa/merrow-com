// @version end-to-end-seaming-page v3.1
// Parity pass: align layout and copy to legacy ncp1.php
//
// Route: /end-to-end-seaming
// Category landing page for end-to-end seaming machines

import { Metadata } from "next";
import { FullBleed } from "../../../../packages/ui";
import { getMachinesByCategory } from "../../../../packages/data-layer/queries/machines";
import { getCategoriesWithItems } from "../../../../packages/data-layer/queries/applications";

// End-to-end application category keys (from legacy ncp1.php)
const E2E_APP_KEYS = [5523, 5513, 5524];

// Legacy S3 assets
const IMG = {
  hero: "https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/general-http/e_03.gif",
  customerStory: "https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/general-http/e_09.jpg",
  ravenTable: "https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/general-http/e_09.png",
  railway: "https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/general-http/e_13.png",
  airMotor: "https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/general-http/e_15.png",
};

export const metadata: Metadata = {
  title: "End-to-End Seaming Machines | Merrow",
  description:
    "Explore Merrow's end-to-end seaming machines for continuous processing and high-volume textile manufacturing. Solutions for towels, sheets, and fabrics.",
};

export default async function EndToEndSeamingPage() {
  // Fetch machines and applications in parallel, with fallback for missing DB
  let machines: Awaited<ReturnType<typeof getMachinesByCategory>> = [];
  let applicationCategories: Awaited<ReturnType<typeof getCategoriesWithItems>> = [];

  try {
    [machines, applicationCategories] = await Promise.all([
      getMachinesByCategory("e2e"),
      getCategoriesWithItems(E2E_APP_KEYS),
    ]);
  } catch {
    // DB not available - render with empty data (stable fallback for visual tests)
  }

  const safeStyleKey = (key: string) => {
    if (!/^[a-zA-Z0-9_-]+$/.test(key)) return "";
    return key;
  };

  const safeDKey = (dKey: unknown) => {
    const n = typeof dKey === "number" ? dKey : Number(dKey);
    return Number.isFinite(n) ? String(n) : null;
  };

  // Split machines into 3 columns for the text list
  const hasMachines = machines.length > 0;
  const machinesPerColumn = Math.ceil(machines.length / 3);
  const machineColumns = [
    machines.slice(0, machinesPerColumn),
    machines.slice(machinesPerColumn, machinesPerColumn * 2),
    machines.slice(machinesPerColumn * 2),
  ];

  return (
    <main className="font-body text-merrow-textMain">
      {/* Hero section - text LEFT, image RIGHT (legacy ncp1.php) */}
      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-6 py-8">
          <div className="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
            {/* Left: Title + Copy + CTA */}
            <div className="order-2 md:order-1">
              <h1 className="ncp-headline !mt-0 !text-left leading-tight">
                Merrow<br />
                for End-to-End<br />
                Seaming
              </h1>
              <p className="text-[13px] leading-[20px] text-[#666] mt-4">
                When joining material in a continuous process, sewing is the most durable and reliable method.
                Merrow builds the most reliable sewing machines for end-to-end joining in the world. Our 5/8&quot;
                (16mm) butted-seam is flat enough and strong enough to withstand even the most rigorous processes,
                and we have nine models of machines that can be configured in any number of ways to accommodate
                your material, environment, and application.
              </p>
              <a href="/stitch-lab" className="mt-4 inline-flex items-center">
                <span className="sr-only">Contact our Stitch Lab</span>
                <span className="h-[14px] w-[140px] bg-[#3f3f3f]" aria-hidden="true" />
              </a>
            </div>

            {/* Right: Hero Image */}
            <div className="order-1 md:order-2 flex justify-center">
              <img
                src={IMG.hero}
                alt="Merrow End-to-End Seaming Machine"
                className="max-w-full h-auto"
              />
            </div>
          </div>
        </div>
      </FullBleed>

      {/* Featured Story + Machines row */}
      <FullBleed className="bg-white border-t border-merrow-border">
        <div className="mx-auto max-w-merrow px-6 py-6">
          <div className="grid grid-cols-1 md:grid-cols-[1fr_1.6fr] gap-6">
            {/* Box 1: Featured Customer Story */}
            <div className="border border-merrow-border p-4">
              <p className="text-[10px] font-bold uppercase tracking-wider text-[#666] mb-3">
                Featured Customer Story
              </p>
              <a href="/customer-stories/featured/csam" className="block">
                <img
                  src={IMG.customerStory}
                  alt="Featured customer story"
                  className="w-full h-auto"
                />
              </a>
            </div>

            {/* Box 2: Machines (text list in 3 columns) */}
            <div className="border border-merrow-border p-4">
              <div className="sub-head">Machines</div>
              {!hasMachines ? (
                <p className="text-[12px] text-[#808080]">No machines found for this category.</p>
              ) : (
                <div className="grid grid-cols-3 gap-x-4 gap-y-1">
                  {machineColumns.map((column, colIdx) => (
                    <ul
                      key={colIdx}
                      className={`machine-list space-y-1 ${colIdx > 0 ? "border-l border-merrow-border pl-3" : ""}`}
                    >
                      {column.map((machine) => {
                        const key = safeStyleKey(machine.styleKey);
                        if (!key) return null;

                        return (
                          <li key={machine.id}>
                            <a
                              href={`/Overlock_Sewing_Machines/Continuous_Processing/${encodeURIComponent(key)}`}
                              className="text-[11px] text-[#808080] hover:text-[#1a4f8a] hover:underline"
                            >
                              {machine.style}
                            </a>
                          </li>
                        );
                      })}
                    </ul>
                  ))}
                </div>
              )}
            </div>
          </div>
        </div>
      </FullBleed>

      {/* Accessories section - unique to End-to-End */}
      <FullBleed className="bg-white border-t border-merrow-border">
        <div className="mx-auto max-w-merrow px-6 py-8">
          <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <div className="sub-head">Accessories</div>
              <p className="text-[13px] text-[#666] mt-2">
                Merrow End-to-End Seaming Machines are supported with equipment options that include the New Merrow Raven
                seaming table, railways and the Merrow Air Motor. Along with your machine options, please specify which
                mounting solution you will need for your application.
              </p>
            </div>
            <div>
              <div className="sub-head">New! the Raven Table</div>
              <a href="/machines" className="block">
                <img
                  src={IMG.ravenTable}
                  alt="Merrow Raven Seaming Table"
                  className="w-full h-auto"
                />
              </a>
            </div>
            <div>
              <div className="sub-head">Railway Sewing</div>
              <img
                src={IMG.railway}
                alt="Railway Sewing System"
                className="w-full h-auto"
              />
            </div>
            <div>
              <div className="sub-head">Merrow Air Motor</div>
              <img
                src={IMG.airMotor}
                alt="Merrow Air Motor"
                className="w-full h-auto"
              />
            </div>
          </div>
        </div>
      </FullBleed>

      {/* Applications section */}
      <FullBleed className="bg-white border-t border-merrow-border">
        <div className="mx-auto max-w-merrow px-6 py-8">
          <div className="sub-head">Applications</div>

          {applicationCategories.length > 0 ? (
            <div className="mt-4 grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-6">
              {applicationCategories.map((category) => (
                <div key={category.appKey}>
                  <a
                    href={`/sewing/applications/${category.appKey}`}
                    className="text-[12px] font-semibold text-[#333] hover:underline"
                  >
                    {category.name}
                  </a>

                  {(() => {
                    const items = category.items ?? [];
                    return items.length > 0 && (
                      <ul className="mt-2 space-y-1">
                        {items.map((item) => {
                          const dKey = safeDKey(item.dKey);
                          if (!dKey) return null;

                          return (
                            <li key={item.dKey} className="page-app-list flex items-center gap-2">
                              <img
                                src={`https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/applications/${dKey}_main_icon_15x15.jpg`}
                                alt=""
                                width={15}
                                height={15}
                                className="flex-shrink-0"
                              />
                              <a
                                href={`/sewing/applications/${category.appKey}#${encodeURIComponent(dKey)}`}
                                className="text-[12px] text-[#808080] hover:text-[#1a4f8a] hover:underline"
                              >
                                {item.menuTitle}
                              </a>
                            </li>
                          );
                        })}
                      </ul>
                    );
                  })()}
                </div>
              ))}
            </div>
          ) : (
            <p className="text-merrow-textMuted text-[14px]">
              No applications found. Please check database connection.
            </p>
          )}
        </div>
      </FullBleed>
    </main>
  );
}

export const revalidate = 86400; // ISR: 24 hours
