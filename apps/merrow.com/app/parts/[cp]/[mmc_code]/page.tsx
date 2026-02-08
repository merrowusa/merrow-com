// @version parts-detail v3.0
//
// Route: /parts/[cp]/[mmc_code]
// Legacy-style parts detail layout with Supabase-backed data

import { Metadata } from "next";
import { notFound, permanentRedirect } from "next/navigation";
import Link from "next/link";
import {
  getAsinByOtId,
  getPartsDrawings,
  getAsinsByPdList,
} from "../../../../../../packages/data-layer/queries/parts";
import {
  getMachineByOtId,
} from "../../../../../../packages/data-layer/queries/machines";
import { PartsDrawings } from "../../_components/PartsDrawings";
import { FallbackImg } from "../../../_components/FallbackImg";
import {
  LegacyBox,
  LegacySupportPage,
} from "../../../support/_components/LegacySupportPrimitives";

interface PageProps {
  params: Promise<{ cp: string; mmc_code: string }>;
}

const FALLBACK_ASSET_BASE =
  "https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev";

function getAssetBase(): string {
  const raw = process.env.NEXT_PUBLIC_MERROW_ASSET_BASE?.trim();
  if (!raw) return FALLBACK_ASSET_BASE;
  return raw.replace(/\/+$/, "");
}

function partsCanonicalPath(cp: string, code: string): string {
  return `/parts/${encodeURIComponent(cp)}/${encodeURIComponent(code)}`;
}

function stripHtml(input: string) {
  return input.replace(/<[^>]+>/g, " ").replace(/\s+/g, " ").trim();
}

function formatMeasure(value: string, unit: string) {
  if (!value) return "";
  return unit ? `${value} ${unit}` : value;
}

function normalize(input: string) {
  return input.trim().toLowerCase();
}

function clampInt(value: number, min: number, max: number) {
  return Math.max(min, Math.min(max, value));
}

function isDigits(value: string) {
  return /^[0-9]+$/.test(value.trim());
}

export async function generateStaticParams() {
  return [] as Array<{ cp: string; mmc_code: string }>;
}

export async function generateMetadata({ params }: PageProps): Promise<Metadata> {
  const { cp, mmc_code } = await params;
  const record = await getAsinByOtId(cp);

  if (!record) {
    const machine = await getMachineByOtId(cp);
    if (machine) {
      return {
        title: `${machine.style || machine.styleKey} | Merrow Parts`,
        description:
          stripHtml(machine.description || "") ||
          `Parts and service information for ${machine.style || machine.styleKey}.`,
      };
    }
    return {
      title: `Parts: ${cp} | Merrow`,
      description: `Find replacement parts for Merrow part ${cp}.`,
    };
  }

  const title = record.productName || `Part ${cp}`;
  const description = stripHtml(record.description || "") || `Merrow part ${cp} details.`;
  const canonicalCode = record.msmcId || record.mmcId || mmc_code || "";

  return {
    title: `${title} | Merrow Parts`,
    description,
    alternates: canonicalCode
      ? { canonical: partsCanonicalPath(cp, canonicalCode) }
      : undefined,
  };
}

export default async function PartsDetailPage({ params }: PageProps) {
  const { cp, mmc_code } = await params;
  const record = await getAsinByOtId(cp);

  if (!record || !record.mmcId) {
    // Some internal links historically used numeric machine ot_id. Canonicalize those to
    // the legacy parts surface (`/parts/{styleKey}/{styleKey}`) when possible.
    if (isDigits(cp)) {
      const machine = await getMachineByOtId(cp);
      if (machine?.styleKey) {
        permanentRedirect(partsCanonicalPath(machine.styleKey, machine.styleKey));
      }
    }
    notFound();
  }

  // Canonicalize URL slug for ecom/backbone stability:
  // prefer `msmcId` (legacy) and fall back to `mmcId`.
  const canonicalCode = (record.msmcId || record.mmcId || "").trim();
  if (canonicalCode && normalize(mmc_code) !== normalize(canonicalCode)) {
    permanentRedirect(partsCanonicalPath(cp, canonicalCode));
  }

  const asinKey = record.asinId || record.id;
  const drawings = asinKey ? await getPartsDrawings(asinKey) : [];
  const partsByPd =
    drawings.length > 0
      ? await getAsinsByPdList(drawings.map((drawing) => drawing.pd).filter(Boolean))
      : {};
  const machine = record.otId ? await getMachineByOtId(record.otId) : null;

  const assetBase = getAssetBase();

  const styleKey = (record.msmcId || record.mmcId || "").trim();

  const mainImageCandidates = [
    record.imgurlLarge,
    styleKey ? `${assetBase}/productpages/${styleKey}_main.jpg` : "",
    styleKey ? `${assetBase}/product-pages/${styleKey}_main.jpg` : "",
    styleKey ? `${assetBase}/images/products/large/${styleKey}.jpg` : "",
  ];

  const thumbCount = clampInt(record.numberOfThumbs || 0, 0, 4);
  const thumbVideos = styleKey
    ? Array.from({ length: thumbCount }).map((_, index) => {
        const n = index + 1;
        return {
          imageCandidates: [
            `${assetBase}/productpages/${styleKey}_thumb${n}.jpg`,
            `${assetBase}/product-pages/${styleKey}_thumb${n}.jpg`,
          ],
          video: `${assetBase}/productpages/${styleKey}_thumb${n}.m4v`,
        };
      })
    : [];

  const dimensions = [
    { label: "LENGTH", value: formatMeasure(record.displayLength, record.displayLengthUnit) },
    { label: "WIDTH", value: formatMeasure(record.displayWidth, record.displayWidthUnit) },
    { label: "HEIGHT", value: formatMeasure(record.displayHeight, record.displayHeightUnit) },
  ].filter((row) => row.value);

  return (
    <LegacySupportPage>
      <div className="mb-3 rounded border border-[#b7b7b7] bg-[#efefef] p-3">
        <div className="text-[18px] font-semibold text-[#b00707]">
          {record.productName || record.msmcId || cp}
        </div>
        <div className="text-[12px] text-[#666666]">{record.msmcId || record.mmcId || cp}</div>
      </div>

      <div
        className="grid grid-cols-[620px_300px] gap-4"
        data-ot-id={record.otId || cp}
        data-asin-id={record.asinId || record.id || ""}
        data-mmc-id={record.mmcId || ""}
        data-msmc-id={record.msmcId || ""}
        data-product-name={record.productName || ""}
      >
        <div>
          <div className="rounded border border-[#b7b7b7] bg-[#efefef] p-3">
            {mainImageCandidates.some(Boolean) ? (
              <FallbackImg
                candidates={mainImageCandidates}
                alt={record.productName || record.msmcId || cp}
                className="w-full max-w-[500px]"
                loading="eager"
              />
            ) : (
              <div className="h-[260px] w-full max-w-[500px] border border-[#c8c8c8] bg-[#f8f8f8]" />
            )}

            {thumbVideos.length > 0 ? (
              <div className="mt-3 flex flex-wrap gap-2">
                {thumbVideos.map((thumb) => (
                  <a
                    key={thumb.video}
                    href={thumb.video}
                    target="_blank"
                    rel="noopener noreferrer"
                  >
                    <FallbackImg
                      candidates={thumb.imageCandidates}
                      alt="Part preview"
                      className="h-[74px] w-[74px] border border-[#c8c8c8] bg-white object-cover"
                      loading="lazy"
                    />
                  </a>
                ))}
              </div>
            ) : null}
          </div>

          {dimensions.length > 0 ? (
            <div className="mt-3 rounded border border-[#b7b7b7] bg-[#efefef] p-3">
              <table className="w-full text-[12px]">
                <tbody>
                  {dimensions.map((row, index) => (
                    <tr
                      key={row.label}
                      className={index % 2 === 0 ? "bg-[#f5f5f5]" : "bg-[#ebebeb]"}
                    >
                      <td className="w-[120px] px-2 py-1 font-semibold text-[#666666]">
                        {row.label}
                      </td>
                      <td className="px-2 py-1 text-[#4c4c4c]">{row.value}</td>
                    </tr>
                  ))}
                </tbody>
              </table>
            </div>
          ) : null}
        </div>

        <div>
            <LegacyBox title="Price">
              <div className="text-[12px] leading-[16px] text-[#4c4c4c]">
                {record.mrsp ? record.mrsp : "Please Contact your Merrow Agent for Pricing"}
              </div>
            </LegacyBox>

            <LegacyBox title="Description">
              <div className="parts-detail-html text-[12px] leading-[16px] text-[#4c4c4c]">
                {record.description ? (
                  <div dangerouslySetInnerHTML={{ __html: record.description }} />
                ) : (
                  <div>Part description is not available.</div>
                )}
              </div>
              <div className="mt-2 text-[12px]">
                <a href="#wingnuts" className="text-[#808080] hover:text-[#af0b0c] hover:underline">
                  Read More
                </a>
                <span className="px-1 text-[#9a9a9a]">|</span>
                <a href="/contact_general.html" className="text-[#808080] hover:text-[#af0b0c] hover:underline">
                  Contact Us
                </a>
              </div>
            </LegacyBox>

            {machine ? (
              <LegacyBox title="Related Machine">
                <div className="text-[12px] leading-[16px] text-[#4c4c4c]">
                  {machine.header || machine.style || machine.styleKey}
                </div>
                <div className="mt-2 text-[12px]">
                  <Link href={`/machines/${machine.styleKey}`} className="text-[#808080] hover:text-[#af0b0c] hover:underline">
                    View machine details
                  </Link>
                </div>
              </LegacyBox>
            ) : null}
          </div>
        </div>

        <div id="wingnuts" className="mt-3 rounded border border-[#b7b7b7] bg-[#efefef] p-3">
          <div className="mb-2 text-[13px] font-semibold text-[#b00707]">Detailed Description</div>
          <div
            className="parts-detail-html text-[12px] leading-[16px] text-[#4c4c4c]"
            dangerouslySetInnerHTML={{ __html: record.description || "No additional details available." }}
          />
        </div>

        {drawings.length > 0 ? (
          <div className="mt-4 rounded border border-[#b7b7b7] bg-[#efefef] p-3">
            <PartsDrawings drawings={drawings} />
          </div>
        ) : null}

        {drawings.length > 0 ? (
          <div className="mt-4 space-y-3">
            {drawings.map((drawing) => {
              const relatedParts = partsByPd[drawing.pd] || [];
              if (relatedParts.length === 0) return null;

              return (
                <div key={`parts-${drawing.pd}`} className="rounded border border-[#b7b7b7] bg-[#efefef] p-3">
                  <div className="mb-2 text-[13px] font-semibold text-[#b00707]">
                    {drawing.description || drawing.pd}
                  </div>
                  <div className="overflow-x-auto">
                    <table className="w-full text-[12px]">
                      <thead>
                        <tr className="border-b border-[#d5d5d5] text-left text-[#666666]">
                          <th className="px-2 py-1">Part</th>
                          <th className="px-2 py-1">MMC</th>
                          <th className="px-2 py-1">MSRP</th>
                          <th className="px-2 py-1">Link</th>
                        </tr>
                      </thead>
                      <tbody>
                        {relatedParts.map((part, idx) => (
                          <tr key={`${drawing.pd}-${part.asinId}-${idx}`} className="border-b border-[#e2e2e2]">
                            <td className="px-2 py-1 text-[#4c4c4c]">{part.productName}</td>
                            <td className="px-2 py-1 text-[#4c4c4c]">{part.msmcId || part.mmcId}</td>
                            <td className="px-2 py-1 text-[#4c4c4c]">{part.mrsp || "-"}</td>
                            <td className="px-2 py-1">
                              {part.otId ? (
                                <Link
                                  href={`/parts/${part.otId}/${part.msmcId || part.mmcId}`}
                                  className="text-[#808080] hover:text-[#af0b0c] hover:underline"
                                >
                                  View
                                </Link>
                              ) : (
                                <span className="text-[#9a9a9a]">-</span>
                              )}
                            </td>
                          </tr>
                        ))}
                      </tbody>
                    </table>
                  </div>
                </div>
              );
            })}
          </div>
        ) : null}

      <style
        dangerouslySetInnerHTML={{
          __html: `
            .parts-detail-html a { color: #808080; text-decoration: none; }
            .parts-detail-html a:hover { color: #af0b0c; text-decoration: underline; }
            .parts-detail-html img { max-width: 100%; height: auto; }
            .parts-detail-html table { width: 100%; border-collapse: collapse; }
            .parts-detail-html td, .parts-detail-html th {
              border: 1px solid #d3d3d3;
              padding: 4px;
              font-size: 12px;
            }
          `,
        }}
      />
    </LegacySupportPage>
  );
}

export const revalidate = 86400; // ISR: 24 hours
