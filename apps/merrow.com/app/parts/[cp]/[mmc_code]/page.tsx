// @version parts-detail v3.0
//
// Route: /parts/[cp]/[mmc_code]
// Legacy-style parts detail layout with Supabase-backed data

import { Metadata } from "next";
import { notFound } from "next/navigation";
import Link from "next/link";
import {
  getAsinByOtId,
  getPartsDrawings,
  getAsinsByPdList,
} from "../../../../../../packages/data-layer/queries/parts";
import {
  getMachineByOtId,
  type MachinePage,
} from "../../../../../../packages/data-layer/queries/machines";
import { PartsDrawings } from "../../_components/PartsDrawings";
import {
  LegacyBox,
  LegacySupportPage,
} from "../../../support/_components/LegacySupportPrimitives";
import { SUPPORT_CONTACT } from "../../../support/_data/links";

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

function normalize(input: string) {
  return input.trim().toLowerCase();
}

export async function generateStaticParams() {
  return [] as Array<{ cp: string; mmc_code: string }>;
}

export async function generateMetadata({ params }: PageProps): Promise<Metadata> {
  const { cp } = await params;
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

  return {
    title: `${title} | Merrow Parts`,
    description,
  };
}

function MachinePartsPage({ machine }: { machine: MachinePage }) {
  return (
    <LegacySupportPage>
      <div className="mb-3 rounded border border-[#b7b7b7] bg-[#efefef] p-3">
        <div className="text-[18px] font-semibold text-[#b00707]">
          {machine.style || machine.styleKey}
        </div>
        <div className="text-[12px] text-[#666666]">{machine.header || "Merrow sewing machine"}</div>
      </div>

      <div className="grid grid-cols-[620px_300px] gap-4">
        <div className="rounded border border-[#b7b7b7] bg-[#efefef] p-3">
          {machine.description ? (
            <div
              className="parts-machine-html text-[12px] leading-[16px] text-[#4c4c4c]"
              dangerouslySetInnerHTML={{ __html: machine.description }}
            />
          ) : (
            <p className="text-[12px] leading-[16px] text-[#4c4c4c]">
              Machine description is not available.
            </p>
          )}
        </div>

        <div>
          <LegacyBox title="Need More Help?">
            <div className="text-[12px] leading-[16px] text-[#4c4c4c]">
              Contact your Merrow Agent for pricing and availability.
              <br />
              <br />
              Email: {SUPPORT_CONTACT.partsEmail}
              <br />
              Phone: 800.431.6677
              <br />
              International: {SUPPORT_CONTACT.supportPhoneDisplay}
            </div>
          </LegacyBox>

          <LegacyBox title="Machine Details">
            <div className="text-[12px] leading-[16px]">
              <Link href={`/machines/${machine.styleKey}`} className="text-[#808080] hover:text-[#af0b0c] hover:underline">
                View full machine page
              </Link>
            </div>
          </LegacyBox>
        </div>
      </div>

      <style
        dangerouslySetInnerHTML={{
          __html: `
            .parts-machine-html a { color: #808080; text-decoration: none; }
            .parts-machine-html a:hover { color: #af0b0c; text-decoration: underline; }
            .parts-machine-html img { max-width: 100%; height: auto; }
          `,
        }}
      />
    </LegacySupportPage>
  );
}

export default async function PartsDetailPage({ params }: PageProps) {
  const { cp, mmc_code } = await params;
  const record = await getAsinByOtId(cp);

  if (!record || !record.mmcId) {
    const machine = await getMachineByOtId(cp);
    if (machine) {
      return <MachinePartsPage machine={machine} />;
    }
    notFound();
  }

  if (record.msmcId && normalize(mmc_code) !== normalize(record.msmcId)) {
    notFound();
  }

  const asinKey = record.asinId || record.id;
  const drawings = asinKey ? await getPartsDrawings(asinKey) : [];
  const partsByPd =
    drawings.length > 0
      ? await getAsinsByPdList(drawings.map((drawing) => drawing.pd).filter(Boolean))
      : {};
  const machine = record.otId ? await getMachineByOtId(record.otId) : null;

  const mainImage =
    record.imgurlLarge || (record.msmcId ? `/images/products/large/${record.msmcId}.jpg` : "");

  const thumbVideos =
    record.msmcId
      ? Array.from({ length: 4 }).map((_, index) => ({
          image: `https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/productpages/${record.msmcId}_thumb${index + 1}.jpg`,
          video: `https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/productpages/${record.msmcId}_thumb${index + 1}.m4v`,
        }))
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

        <div className="grid grid-cols-[620px_300px] gap-4">
          <div>
            <div className="rounded border border-[#b7b7b7] bg-[#efefef] p-3">
              {mainImage ? (
                <img
                  src={mainImage}
                  alt={record.productName || record.msmcId || cp}
                  className="w-full max-w-[500px]"
                />
              ) : (
                <div className="h-[260px] w-full max-w-[500px] border border-[#c8c8c8] bg-[#f8f8f8]" />
              )}

              {thumbVideos.length > 0 ? (
                <div className="mt-3 flex flex-wrap gap-2">
                  {thumbVideos.map((thumb) => (
                    <a key={thumb.image} href={thumb.video} target="_blank" rel="noopener noreferrer">
                      <img
                        src={thumb.image}
                        alt="Part preview"
                        className="h-[74px] w-[74px] border border-[#c8c8c8] bg-white object-cover"
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
                      <tr key={row.label} className={index % 2 === 0 ? "bg-[#f5f5f5]" : "bg-[#ebebeb]"}>
                        <td className="w-[120px] px-2 py-1 font-semibold text-[#666666]">{row.label}</td>
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
