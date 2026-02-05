// @version parts-detail v2.0
//
// Route: /parts/[cp]/[mmc_code]
// Parts lookup page for specific machine and part code

import { Metadata } from "next";
import { notFound } from "next/navigation";
import Link from "next/link";
import {
  FullBleed,
  PageHeader,
  MerrowButton,
} from "../../../../../../packages/ui";
import {
  getAsinByOtId,
  getPartsDrawings,
  getAsinsByPdList,
} from "../../../../../../packages/data-layer/queries/parts";
import { getMachinePageByOtId } from "../../../../../../packages/data-layer/queries/machines";
import { PartsSpecs } from "../../_components/PartsSpecs";
import { PartsDrawings } from "../../_components/PartsDrawings";

interface PageProps {
  params: Promise<{ cp: string; mmc_code: string }>;
}

function stripHtml(input: string) {
  return input.replace(/<[^>]+>/g, " ").replace(/\s+/g, " ").trim();
}

function formatMeasure(value: string, unit: string) {
  if (!value) return "";
  return unit ? `${value} ${unit}` : value;
}

export async function generateStaticParams() {
  // TODO: Enable full static generation (2800+ parts) once build time is acceptable.
  // const parts = await getAllPartsForStaticGeneration();
  // return parts.map((part) => ({ cp: part.otId, mmc_code: part.msmcId }));
  return [] as Array<{ cp: string; mmc_code: string }>;
}

export async function generateMetadata({ params }: PageProps): Promise<Metadata> {
  const { cp } = await params;
  const record = await getAsinByOtId(cp);

  if (!record) {
    return {
      title: `Parts: ${cp} | Merrow`,
      description: `Find replacement parts for Merrow part ${cp}.`,
    };
  }

  const title = record.productName || `Part ${cp}`;
  const description = stripHtml(record.description || "") || `Merrow part ${cp} details.`;

  return {
    title: `${title} | Merrow Parts`,
    description,
  };
}

export default async function PartsDetailPage({ params }: PageProps) {
  const { cp } = await params;
  const record = await getAsinByOtId(cp);

  if (!record || !record.mmcId) {
    notFound();
  }

  const asinKey = record.asinId || record.id;
  const drawings = asinKey ? await getPartsDrawings(asinKey) : [];
  const partsByPd = drawings.length > 0
    ? await getAsinsByPdList(drawings.map((drawing) => drawing.pd).filter(Boolean))
    : {};
  const machine = record.otId ? await getMachinePageByOtId(record.otId) : null;

  const mainImage =
    record.imgurlLarge ||
    (record.msmcId
      ? `https://images.imerrow.com/images/products/large/${record.msmcId}.jpg`
      : "");

  const thumbnails = record.msmcId
    ? Array.from({ length: 4 }).map((_, index) =>
        `https://images.imerrow.com/images/products/thumb/${record.msmcId}_t${index + 1}.jpg`
      )
    : [];

  const dimensions = [
    formatMeasure(record.displayLength, record.displayLengthUnit),
    formatMeasure(record.displayWidth, record.displayWidthUnit),
    formatMeasure(record.displayHeight, record.displayHeightUnit),
  ].filter(Boolean);
  const dimensionsLabel = dimensions.length > 0 ? dimensions.join(" × ") : undefined;
  const weightLabel = formatMeasure(record.displayWeight, record.displayWeightUnit) || undefined;

  return (
    <main className="text-merrow-textMain bg-white">
      {/* Hero section */}
      <FullBleed className="bg-merrow-heroBg border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-10">
          <PageHeader
            eyebrow={`Part Number: ${cp}`}
            title={record.productName || record.msmcId || cp}
            subtitle={record.msmcId ? `Machine: ${record.msmcId}` : "Merrow replacement part"}
          />
        </div>
      </FullBleed>

      {/* Main content */}
      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-10">
          <div className="grid gap-10 lg:grid-cols-[1.1fr_0.9fr]">
            <div className="space-y-6">
              <div className="rounded-xl border border-[#e1e1e1] bg-white p-5 shadow-[0_6px_16px_rgba(0,0,0,0.05)]">
                {mainImage ? (
                  <img
                    src={mainImage}
                    alt={record.productName}
                    className="w-full rounded border border-merrow-border"
                  />
                ) : null}

                {thumbnails.length > 0 ? (
                  <div className="mt-4 grid grid-cols-4 gap-3">
                    {thumbnails.map((thumb) => (
                      <img
                        key={thumb}
                        src={thumb}
                        alt="Part thumbnail"
                        className="h-20 w-full rounded border border-merrow-border object-cover"
                      />
                    ))}
                  </div>
                ) : null}
              </div>

              <div className="rounded-xl border border-[#e1e1e1] bg-[#fafafa] px-6 py-6 shadow-[0_8px_18px_rgba(0,0,0,0.04)]">
                {/* Legacy CMS HTML content - trusted source */}
                <div
                  className="prose prose-sm max-w-none text-slate-700"
                  dangerouslySetInnerHTML={{ __html: record.description || "" }}
                />
              </div>
            </div>

            <div className="space-y-6">
              <PartsSpecs
                dimensions={dimensionsLabel}
                weight={weightLabel}
                mrsp={record.mrsp}
              />

              <div className="rounded-xl border border-[#e1e1e1] bg-white p-5 shadow-[0_6px_16px_rgba(0,0,0,0.05)]">
                <div className="text-[11px] uppercase tracking-[0.16em] text-merrow-textMuted">
                  Need help ordering?
                </div>
                <p className="mt-2 text-[13px] text-merrow-textSub">
                  Contact your Merrow Agent for pricing and availability.
                </p>
                <div className="mt-4 flex flex-wrap gap-3">
                  <MerrowButton href="mailto:contact@merrow.com">Email: contact@merrow.com</MerrowButton>
                  <MerrowButton href="tel:+18004316677">Call: 800.431.6677</MerrowButton>
                </div>
                <div className="mt-3 text-[12px]">
                  <Link href="/agentmap.html" className="text-merrow-link hover:underline">
                    Find a local dealer
                  </Link>
                </div>
              </div>

              {machine ? (
                <div className="rounded-xl border border-[#e1e1e1] bg-[#f9f9f9] p-5">
                  <div className="text-[11px] uppercase tracking-[0.16em] text-merrow-textMuted">
                    Related machine
                  </div>
                  <div className="mt-2 text-[13px] text-merrow-textSub">
                    {machine.header || machine.style}
                  </div>
                  <div className="mt-3">
                    <MerrowButton href={`/machines/${machine.styleKey}`}>View Machine</MerrowButton>
                  </div>
                </div>
              ) : null}
            </div>
          </div>

          {drawings.length > 0 ? (
            <div className="mt-12 space-y-10">
              <PartsDrawings drawings={drawings} />

              <section className="space-y-6">
                <div className="text-[12px] uppercase tracking-[0.18em] text-merrow-textMuted">
                  Parts list by assembly
                </div>
                {drawings.map((drawing) => {
                  const relatedParts = partsByPd[drawing.pd] || [];
                  return (
                    <div
                      key={`parts-${drawing.pd}`}
                      className="rounded-xl border border-[#e1e1e1] bg-white p-5"
                    >
                      <div className="text-[13px] font-semibold text-merrow-textMain">
                        {drawing.description || drawing.pd}
                      </div>
                      {relatedParts.length > 0 ? (
                        <div className="mt-4 overflow-x-auto">
                          <table className="w-full text-[13px]">
                            <thead>
                              <tr className="text-left text-merrow-textMuted">
                                <th className="pb-2">Part</th>
                                <th className="pb-2">MMC</th>
                                <th className="pb-2">MSRP</th>
                                <th className="pb-2">Link</th>
                              </tr>
                            </thead>
                            <tbody className="text-merrow-textSub">
                              {relatedParts.map((part) => {
                                const thumb =
                                  part.imgurlTiny ||
                                  (part.msmcId
                                    ? `https://images.imerrow.com/images/products/thumb/${part.msmcId}_t1.jpg`
                                    : "");
                                return (
                                  <tr key={`${drawing.pd}-${part.asinId}`} className="border-t border-[#efefef]">
                                    <td className="py-2">
                                      <div className="flex items-center gap-3">
                                        {thumb ? (
                                          <img
                                            src={thumb}
                                            alt={part.productName}
                                            className="h-12 w-12 rounded border border-merrow-border object-cover"
                                          />
                                        ) : null}
                                        <div>
                                          <div className="text-merrow-textMain">{part.productName}</div>
                                          {part.otId ? (
                                            <div className="text-[12px] text-merrow-textMuted">{part.otId}</div>
                                          ) : null}
                                        </div>
                                      </div>
                                    </td>
                                    <td className="py-2">{part.mmcId || part.msmcId}</td>
                                    <td className="py-2">{part.mrsp || "Contact agent"}</td>
                                    <td className="py-2">
                                      {part.amznUrl ? (
                                        <a
                                          href={part.amznUrl}
                                          className="text-merrow-link hover:underline"
                                          target="_blank"
                                          rel="noopener noreferrer"
                                        >
                                          Amazon
                                        </a>
                                      ) : (
                                        <span className="text-merrow-textMuted">—</span>
                                      )}
                                    </td>
                                  </tr>
                                );
                              })}
                            </tbody>
                          </table>
                        </div>
                      ) : (
                        <p className="mt-2 text-[13px] text-merrow-textSub">
                          No parts are listed for this assembly yet.
                        </p>
                      )}
                    </div>
                  );
                })}
              </section>
            </div>
          ) : (
            <div className="mt-12 rounded-xl border border-[#e1e1e1] bg-white p-6 text-[13px] text-merrow-textSub">
              We do not have assembly drawings for this part yet.
            </div>
          )}
        </div>
      </FullBleed>
    </main>
  );
}

export const revalidate = 86400; // ISR: 24 hours
