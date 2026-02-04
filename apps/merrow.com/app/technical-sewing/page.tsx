// @version technical-sewing-page v3.2
// Parity pass: align layout and copy to legacy ncp1.php
//
// Route: /technical-sewing
// Category landing page for technical sewing machines

import { Metadata } from "next";
import { FullBleed } from "../../../../packages/ui";
import { getMachinesByCategory } from "../../../../packages/data-layer/queries/machines";
import { getCategoriesWithItems } from "../../../../packages/data-layer/queries/applications";

// Technical sewing application category keys (from legacy ncp1.php)
const TECHNICAL_APP_KEYS = [5514, 5517, 5519, 5512];

// Legacy S3 assets
const IMG = {
  hero: "https://merrow-media.s3.amazonaws.com/general-http/t_03.gif",
  customerStory: "https://merrow-media.s3.amazonaws.com/general-http/t_09.jpg",
  customersLogo: "https://merrow-media.s3.amazonaws.com/general-http/t_06.gif",
};

export const metadata: Metadata = {
  title: "Technical Sewing Machines | Merrow",
  description:
    "Explore Merrow's technical sewing machines - industrial overlock machines for filtration, medical devices, aerospace, and heavy-duty applications.",
};

export default async function TechnicalSewingPage() {
  // Fetch machines and applications in parallel
  let machines: Awaited<ReturnType<typeof getMachinesByCategory>> = [];
  let applicationCategories: Awaited<ReturnType<typeof getCategoriesWithItems>> = [];

  try {
    [machines, applicationCategories] = await Promise.all([
      getMachinesByCategory("technical"),
      getCategoriesWithItems(TECHNICAL_APP_KEYS),
    ]);
  } catch {
    machines = [];
    applicationCategories = [];
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
      {/* Hero section - image LEFT, text RIGHT (legacy ncp1.php) */}
      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-6 py-8">
          <div className="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
            {/* Left: Hero Image */}
            <div className="flex justify-center">
              <img
                src={IMG.hero}
                alt="Merrow technical sewing machine"
                className="max-w-full h-auto"
              />
            </div>

            {/* Right: Title + Copy + CTA */}
            <div>
              <h1 className="ncp-headline !mt-0 !text-left leading-tight">
                Technical Sewing
              </h1>
              <p className="ncp-byeline !text-left mt-1">
                Manufacturing Precision Sewing Machines
              </p>
              <p className="text-[13px] leading-[20px] text-[#666] mt-4">
                What do the world's most recognizable emblems, seams and blankets have in common?
                They've all been Merrowed. Merrowing has become synonymous with overlocking for over
                a century for good reason: we invented the overlock stitch and have been manufacturing
                quality and precision into our machines since the inception of commercial sewing. From
                seaming mesh laundry bags to edging diplomatic badges, nothing adds as good of a technical
                seam as Merrow.
              </p>
              <a href="/stitch-lab" className="mt-4 inline-flex items-center">
                <span className="sr-only">Contact our Stitch Lab</span>
                <span className="h-[14px] w-[140px] bg-[#3f3f3f]" aria-hidden="true" />
              </a>
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
              <a href="/customer-stories/featured/csb" className="block">
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
                              href={`/Sergers_and_Overlock_Sewing_Machines/${encodeURIComponent(key)}`}
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

      {/* Applications section */}
      <FullBleed className="bg-white border-t border-merrow-border">
        <div className="mx-auto max-w-merrow px-6 py-8">
          <div className="sub-head">Applications our Machines are designed for</div>

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
                                src={`https://merrow-media.s3.amazonaws.com/applications/${dKey}_main_icon_15x15.jpg`}
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

      {/* Customers */}
      <FullBleed className="bg-white border-t border-merrow-border">
        <div className="mx-auto max-w-merrow px-6 py-6">
          <div className="border border-merrow-border p-4">
            <div className="sub-head">Customers</div>
            <div className="mt-2 flex justify-center">
              <a href="/customer-stories/featured/csb" className="block">
                <img
                  src={IMG.customersLogo}
                  alt="Featured technical customers"
                  className="max-w-full h-auto"
                />
              </a>
            </div>
          </div>
        </div>
      </FullBleed>
    </main>
  );
}

export const revalidate = 86400; // ISR: 24 hours
