// @version fashion-sewing-page v4.1
// Parity pass: align layout and copy to legacy ncp1.php
//
// Route: /fashion-sewing
// Category landing page for fashion sewing machines

import { Metadata } from "next";
import { FullBleed } from "../../../../packages/ui";
import { getMachinesByCategory } from "../../../../packages/data-layer/queries/machines";
import { getCategoriesWithItems } from "../../../../packages/data-layer/queries/applications";

// Fashion application category keys (from legacy ncp1.php)
const FASHION_APP_KEYS = [5515, 5516, 5518, 5522, 5521, 5525];

// Legacy S3 assets
const IMG = {
  hero: "https://merrow-media.s3.amazonaws.com/general-http/f_03.gif",
  customerStory: "https://merrow-media.s3.amazonaws.com/general-http/f_09.jpg",
  customersLogo: "https://merrow-media.s3.amazonaws.com/general-http/f_06.gif",
};

export const metadata: Metadata = {
  title: "Fashion Sewing Machines | Merrow",
  description:
    "Explore Merrow's fashion sewing machines - precision overlock machines for apparel, activewear, and fashion design applications.",
};

export default async function FashionSewingPage() {
  // Fetch machines and applications in parallel, with fallback for missing DB
  let machines: Awaited<ReturnType<typeof getMachinesByCategory>> = [];
  let applicationCategories: Awaited<ReturnType<typeof getCategoriesWithItems>> = [];

  try {
    [machines, applicationCategories] = await Promise.all([
      getMachinesByCategory("fashion"),
      getCategoriesWithItems(FASHION_APP_KEYS),
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

  const categoryByKey = new Map(applicationCategories.map((cat) => [cat.appKey, cat]));
  const orderedCategories = FASHION_APP_KEYS.map((key) => categoryByKey.get(key)).filter(Boolean);

  return (
    <main className="font-body text-merrow-textMain">
      {/* Hero section - text LEFT, image RIGHT (legacy ncp1.php) */}
      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-6 py-8">
          <div className="grid grid-cols-1 md:grid-cols-[1fr_420px] gap-6 items-start">
            {/* Left: Title + Copy + CTA */}
            <div className="order-2 md:order-1">
              <h1 className="ncp-headline !mt-0 !text-left leading-tight">
                Merrow Creates Fashion
              </h1>
              <p className="ncp-byeline !text-left !text-[18px] mt-1">
                the world's most precise sewing machines for the fashion industry
              </p>
              <p className="text-[13px] leading-[20px] text-[#666] mt-4 max-w-[460px]">
                Throughout its 172 year history, Merrow has been making purpose built
                sewing machines for the fashion industry. After all, the first fashion
                sewing machine was a Merrow Crochet. From the new{" "}
                <a
                  href="/Sergers_and_Overlock_Sewing_Machines/mb4dfo"
                  className="text-merrow-link hover:underline"
                >
                  ActiveSeam&reg; Stitch
                </a>{" "}
                to our one-of-a-kind MicroPurl&reg;, Shell and decorative Crochet machines,
                Merrow will craft a distinct stitch for your application. Contact our
                Stitch Lab to create the solution for your fashion application.
              </p>
              <a
                href="/stitch-lab"
                className="mt-4 inline-flex items-center rounded-[3px] bg-[#3f3f3f] px-3 py-[4px] text-[11px] font-semibold uppercase tracking-[0.06em] text-white shadow-[0_1px_0_rgba(0,0,0,0.3)]"
              >
                <span className="mr-2 inline-flex h-[16px] w-[16px] items-center justify-center bg-[#b10000] text-[12px] leading-[1]">
                  +
                </span>
                Contact Our Stitch Lab™
              </a>
            </div>

            {/* Right: Hero Image */}
            <div className="order-1 md:order-2 flex justify-end">
              <img
                src={IMG.hero}
                alt="Merrow Fashion Sewing Machine"
                className="max-w-full h-auto"
              />
            </div>
          </div>
        </div>
      </FullBleed>

      {/* Content grid: left column (story/machines + applications), right column (customers) */}
      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-6 pb-6">
          <div className="grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_240px] gap-6">
            {/* Left column */}
            <div className="space-y-6">
              {/* Featured Story + Machines */}
              <div className="grid grid-cols-1 md:grid-cols-[310px_1fr] gap-6">
                {/* Featured Customer Story */}
                <div className="border border-merrow-border bg-white p-4 shadow-[0_1px_2px_rgba(0,0,0,0.12)] rounded-[6px]">
                  <p className="text-[10px] font-bold uppercase tracking-wider text-[#666] mb-3">
                    Featured Customer Story
                  </p>
                  <a href="/customer-stories/featured/csrw" className="block">
                    <img
                      src={IMG.customerStory}
                      alt="Ramblers Way - Featured Customer"
                      className="w-full h-auto"
                    />
                  </a>
                </div>

                {/* Machines */}
                <div className="border border-merrow-border bg-white p-4 shadow-[0_1px_2px_rgba(0,0,0,0.12)] rounded-[6px]">
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

              {/* Applications */}
              <div className="border border-merrow-border bg-white p-4 shadow-[0_1px_2px_rgba(0,0,0,0.12)] rounded-[6px]">
                <div className="text-[18px] font-semibold text-[#222]">Applications our Machines are designed for</div>

                {orderedCategories.length > 0 ? (
                  <div className="mt-4 grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-6">
                    {orderedCategories.map((category) => (
                      <div key={category?.appKey ?? "missing"}>
                        <a
                          href={`/sewing/applications/${category!.appKey}`}
                          className="inline-block rounded-[6px] bg-[#7b7b7b] px-3 py-[2px] text-[11px] font-semibold uppercase text-white hover:bg-[#6a6a6a]"
                        >
                          {category!.name}
                        </a>

                        {(() => {
                          const items = category!.items ?? [];
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
                                      href={`/sewing/applications/${category!.appKey}#${encodeURIComponent(dKey)}`}
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
            </div>

            {/* Right column: Customers */}
            <div className="border border-merrow-border bg-white p-4 h-fit shadow-[0_1px_2px_rgba(0,0,0,0.12)] rounded-[6px]">
              <div className="sub-head">Customers</div>
              <div className="mt-2 flex justify-center">
                <a href="/customer-stories/featured/csrw" className="block">
                  <img
                    src={IMG.customersLogo}
                    alt="Featured fashion customers"
                    className="max-w-full h-auto"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
      </FullBleed>

      {/* Bottom color strip */}
      <FullBleed className="bg-white">
        <div
          className="h-[20px] w-full bg-[url('/images/fashion-bottom-strip.png')] bg-repeat-x bg-top"
          aria-hidden="true"
        />
      </FullBleed>
    </main>
  );
}

export const revalidate = 86400; // ISR: 24 hours
