// @version application-detail v2.0
//
// Route: /sewing/applications/[app]
// Legacy-parity category detail with anchor navigation and compare modal

import { Metadata } from "next";
import { notFound, redirect } from "next/navigation";
import { FullBleed, RichText } from "../../../../../../packages/ui";
import {
  getApplicationByKey,
  getAllApplicationKeys,
  getApplicationCategoryByKey,
  getApplicationsByCategory,
  CATEGORY_SLUGS,
  CATEGORY_SLUG_TO_KEY,
  type ApplicationPage,
} from "../../../../../../packages/data-layer/queries/applications";
import {
  CompareAllModal,
  type CompareApplicationRow,
} from "../_components/CompareAllModal";

const APP_IMAGE_BASE = "https://merrow-media.s3.amazonaws.com/applications";

interface PageProps {
  params: Promise<{ app: string }>;
}

function getCategoryPath(appKey: number): string {
  const slug = CATEGORY_SLUGS[appKey];
  if (slug) return `/sewing/applications/${slug}`;
  return `/sewing/applications/${appKey}`;
}

function getMachineRoute(item: ApplicationPage): string {
  if (item.machineUrl?.trim()) {
    return item.machineUrl.trim();
  }

  const styleKey = item.styleKey?.trim();
  if (!styleKey) return "/machines";

  const pageKey = item.pageKey?.toUpperCase();
  if (pageKey === "70") {
    return `/Overlock_Sewing_Machines/Continuous_Processing/${styleKey}`;
  }
  if (pageKey === "EMBLEM") {
    return `/Sergers_and_Overlock_Sewing_Machines/Emblem_Edging/${styleKey}`;
  }
  if (pageKey === "18") {
    return `/crochet-sewing-machines/${styleKey}`;
  }

  return `/Sergers_and_Overlock_Sewing_Machines/${styleKey}`;
}

function splitIntoColumns<T>(items: T[], columnCount: number): T[][] {
  if (!items.length) return [];
  const perColumn = Math.ceil(items.length / columnCount);
  return Array.from({ length: columnCount }, (_, index) => {
    const start = index * perColumn;
    const end = start + perColumn;
    return items.slice(start, end);
  }).filter((column) => column.length > 0);
}

export async function generateStaticParams() {
  const keys = await getAllApplicationKeys();
  const categorySlugs = Object.values(CATEGORY_SLUGS);
  const categoryNumericKeys = Object.keys(CATEGORY_SLUGS);
  const allParams = [...keys, ...categorySlugs, ...categoryNumericKeys];
  return Array.from(new Set(allParams)).map((app) => ({ app }));
}

export async function generateMetadata({ params }: PageProps): Promise<Metadata> {
  const { app } = await params;

  const numericKey = Number(app);
  const isNumeric = !Number.isNaN(numericKey) && String(numericKey) === app;

  let appKey: number | undefined;
  if (isNumeric) {
    appKey = numericKey;
  } else {
    appKey = CATEGORY_SLUG_TO_KEY[app];
  }

  if (!appKey) {
    const application = await getApplicationByKey(app);
    if (!application) {
      return { title: "Application Not Found | Merrow" };
    }
    appKey = application.appKey;
  }

  const category = await getApplicationCategoryByKey(appKey);
  if (!category) {
    return { title: "Applications | Merrow" };
  }

  return {
    title:
      category.appCategorySeoTitle ||
      `${category.appCategoryName} Applications | Merrow`,
    description:
      category.appCategorySeoDescription ||
      `${category.appCategoryName} applications by Merrow`,
    keywords: category.appCategorySeoKeywords || undefined,
  };
}

export default async function ApplicationDetailPage({ params }: PageProps) {
  const { app } = await params;

  const numericKey = Number(app);
  const isNumeric = !Number.isNaN(numericKey) && String(numericKey) === app;

  if (isNumeric && CATEGORY_SLUGS[numericKey]) {
    redirect(`/sewing/applications/${CATEGORY_SLUGS[numericKey]}`);
  }

  let appKey: number | undefined;

  if (isNumeric) {
    appKey = numericKey;
  } else {
    appKey = CATEGORY_SLUG_TO_KEY[app];
  }

  if (!appKey) {
    const focusedApplication = await getApplicationByKey(app);
    if (!focusedApplication) {
      notFound();
    }

    const focusedPath = getCategoryPath(focusedApplication.appKey);
    redirect(`${focusedPath}#${encodeURIComponent(focusedApplication.dKey)}`);
  }

  const category = await getApplicationCategoryByKey(appKey);
  if (!category) {
    notFound();
  }

  const applications = (await getApplicationsByCategory(appKey)).filter(
    (item) => item.publish === "yes" && item.dKey !== "MASTER"
  );

  const navColumns = splitIntoColumns(applications, 3);

  const compareRows: CompareApplicationRow[] = applications.map((item) => ({
    dKey: item.dKey,
    title: item.appMenuTitle || item.appTitle,
    machineSpeed: item.machineSpeed,
    stitchWidth: item.stitchWidth,
    fabricMaterial: item.fabricMaterial,
    machineModel: item.machineModel,
    machinePrice: item.machinePrice,
  }));

  return (
    <main className="text-merrow-textMain" id="top">
      <FullBleed className="border-b border-merrow-border bg-merrow-heroBg">
        <div className="mx-auto max-w-merrow px-4 py-10">
          <div className="grid gap-8 md:grid-cols-[300px_minmax(0,1fr)]">
            <section>
              <div className="text-[28px] leading-[30px] text-[#333]">
                <div className="text-[22px] text-[#666]">Merrow Stitches for</div>
                <h1 className="mt-1 font-['Century_Gothic','CenturyGothic',sans-serif]">
                  {category.appCategoryName}
                </h1>
                <div className="mt-1 text-[18px] tracking-[0.08em] text-[#888]">
                  APPLICATIONS
                </div>
              </div>
            </section>

            <section>
              <h2 className="text-[22px] leading-[28px] text-[#333]">
                Choose your specific {category.appCategoryShortName || category.appCategoryName} application
              </h2>

              {applications.length > 0 ? (
                <div className="mt-4 grid gap-6 md:grid-cols-3">
                  {navColumns.map((column, columnIndex) => (
                    <ul key={columnIndex} className="space-y-2 text-[13px] leading-[17px]">
                      {column.map((item) => (
                        <li key={item.dKey}>
                          <a
                            href={`#${item.dKey}`}
                            className="text-merrow-link hover:underline"
                          >
                            {item.appNavTitle || item.appMenuTitle || item.appTitle}
                          </a>
                        </li>
                      ))}
                    </ul>
                  ))}
                </div>
              ) : (
                <p className="mt-4 text-[13px] text-merrow-textSub">
                  No published applications found for this category.
                </p>
              )}

              <div className="mt-6">
                <CompareAllModal
                  categoryName={category.appCategoryName}
                  items={compareRows}
                />
              </div>
            </section>
          </div>
        </div>
      </FullBleed>

      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-8">
          {applications.map((item, index) => {
            const machineHref = getMachineRoute(item);
            const sectionClass =
              index % 2 === 0 ? "bg-[#f9f9f9]" : "bg-[#ededed]";

            return (
              <section key={item.dKey} id={item.dKey} className="scroll-mt-28">
                <div className={`rounded border border-[#d4d4d4] p-4 md:p-6 ${sectionClass}`}>
                  <div className="grid gap-4 lg:grid-cols-[400px_1fr_270px] lg:gap-6">
                    <div>
                      <img
                        src={`${APP_IMAGE_BASE}/${item.dKey}_main_400x360.jpg`}
                        alt={item.appMenuTitle || item.appTitle}
                        className="h-auto w-full rounded border border-[#bcbcbc] bg-white"
                      />
                    </div>

                    <div>
                      <h3 className="font-['Century_Gothic','CenturyGothic',sans-serif] text-[22px] leading-[24px] text-[#3a3a3a]">
                        {item.appMenuTitle || item.appTitle}
                      </h3>

                      <div className="mt-3 rounded border border-[#cfcfcf] bg-white p-3">
                        <div className="text-[12px] font-semibold uppercase tracking-[0.08em] text-[#666]">
                          More information
                        </div>

                        <div className="mt-3 grid gap-3 md:grid-cols-[115px_1fr]">
                          <img
                            src={`${APP_IMAGE_BASE}/${item.dKey}_callout_115x115.jpg`}
                            alt={`${item.appMenuTitle || item.appTitle} callout`}
                            className="h-[115px] w-[115px] rounded border border-[#c8c8c8] bg-[#f2f2f2] object-cover"
                          />

                          <div>
                            <div className="text-[16px] font-semibold text-[#4a4a4a]">
                              {item.popupTitle || item.appRightTitle || item.appTitle}
                            </div>
                            {item.popupSubtitle && (
                              <div className="text-[12px] uppercase tracking-[0.08em] text-[#777]">
                                {item.popupSubtitle}
                              </div>
                            )}
                          </div>
                        </div>

                        <div className="mt-4 grid gap-4 md:grid-cols-2">
                          <div className="text-[13px] leading-[18px] text-[#4e4e4e]">
                            <RichText html={item.popup1stColumn || ""} />
                          </div>
                          <div className="text-[13px] leading-[18px] text-[#4e4e4e]">
                            <RichText html={item.popup2ndColumn || ""} />
                          </div>
                        </div>

                        <div className="mt-4 flex flex-wrap gap-2">
                          <a
                            href={machineHref}
                            className="rounded border border-[#808080] bg-white px-3 py-1 text-[12px] font-semibold text-[#4b4b4b] hover:bg-[#f2f2f2]"
                          >
                            View Machine
                          </a>
                          <a
                            href={`/support/request-quote?application=${encodeURIComponent(item.dKey)}`}
                            className="rounded border border-[#808080] bg-white px-3 py-1 text-[12px] font-semibold text-[#4b4b4b] hover:bg-[#f2f2f2]"
                          >
                            Request Quote
                          </a>
                        </div>
                      </div>

                      <div className="mt-4 grid gap-3 md:grid-cols-2">
                        <a
                          href={`${APP_IMAGE_BASE}/${item.dKey}_stitch_highres1.jpg`}
                          target="_blank"
                          rel="noopener noreferrer"
                          className="block"
                        >
                          <img
                            src={`${APP_IMAGE_BASE}/${item.dKey}_stitch_260x170.png`}
                            alt={`${item.appMenuTitle || item.appTitle} stitch`}
                            className="h-auto w-full rounded border border-[#c8c8c8] bg-white"
                          />
                        </a>

                        <a href={machineHref} className="block">
                          <img
                            src={`${APP_IMAGE_BASE}/${item.dKey}_machine_260x170.png`}
                            alt={`${item.appMenuTitle || item.appTitle} machine`}
                            className="h-auto w-full rounded border border-[#c8c8c8] bg-white"
                          />
                        </a>
                      </div>
                    </div>

                    <aside className="rounded border border-[#bfbfbf] bg-[#f5f5f5] p-4 text-[13px] leading-[18px] text-[#4a4a4a]">
                      <div className="text-[15px] font-semibold text-[#444]">
                        {item.appRightTitle || "Application Summary"}
                      </div>

                      <div className="mt-2">
                        <RichText html={item.appRightP || ""} />
                      </div>

                      <ul className="mt-4 space-y-1 border-t border-[#cfcfcf] pt-3 text-[12px] uppercase tracking-[0.04em]">
                        <li>SPEED: {item.machineSpeed || "N/A"}</li>
                        <li>STITCH WIDTH: {item.stitchWidth || "N/A"}</li>
                        <li>MATERIAL: {item.fabricMaterial || "N/A"}</li>
                      </ul>
                    </aside>
                  </div>
                </div>

                {index > 0 && (
                  <p className="py-3 text-right text-[12px]">
                    <a href="#top" className="text-merrow-link hover:underline">
                      Back to the top
                    </a>
                  </p>
                )}
              </section>
            );
          })}
        </div>
      </FullBleed>
    </main>
  );
}

export const revalidate = 86400; // ISR: 24 hours
