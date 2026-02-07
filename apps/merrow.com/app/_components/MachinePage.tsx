// @version machine-page v2.0
// Shared machine page component used by all legacy URL routes.
// Layout now mirrors legacy mg_1.php structure for parity.

import { notFound } from "next/navigation";
import { Metadata } from "next";
import { getMachinePageByStyleKey } from "../../../../packages/data-layer/queries/machines";
import { getApplicationsForMachine } from "../../../../packages/data-layer/queries/applications";
import type { MachinePage as MachinePageType } from "../../../../packages/data-layer/schema/machine-pages";
import { LegacyMachineAdvantages } from "../machines/_components/LegacyMachineAdvantages";

const PRODUCT_PAGE_BASE = "https://merrow-media.s3.amazonaws.com/product-pages";
const APP_IMAGE_BASE = "https://merrow-media.s3.amazonaws.com/applications";

export interface MachinePageProps {
  styleKey: string;
}

function normalizeStyleKey(input: string): string {
  return input.toLowerCase().replace(/[^a-z0-9]/g, "");
}

async function resolveMachineByStyleKey(styleKey: string) {
  const direct = await getMachinePageByStyleKey(styleKey);
  if (direct) return direct;

  const normalized = normalizeStyleKey(styleKey);
  if (!normalized || normalized === styleKey) return null;

  return getMachinePageByStyleKey(normalized);
}

function normalizeHtml(raw: string): string {
  return raw.replace(/\r\n/g, "<br />");
}

function toVideoHref(value: string): string {
  if (!value) return "";
  if (value.startsWith("http://") || value.startsWith("https://")) return value;
  return `https://www.youtube.com/watch?v=${encodeURIComponent(value)}`;
}

function sectionTitle(text: string) {
  return <div className="text-[28px] leading-[30px] text-[#4a4a4a]">{text}</div>;
}

function sectionRule() {
  return <div className="mt-1 border-b border-[#bdbdbd]" />;
}

function subHeadline(text: string) {
  return <div className="text-[13px] font-bold uppercase tracking-[0.03em] text-[#b10000]">{text}</div>;
}

export async function generateMachineMetadata(
  styleKey: string
): Promise<Metadata> {
  const machine = await resolveMachineByStyleKey(styleKey);

  if (!machine) {
    return {
      title: "Machine Not Found | Merrow",
    };
  }

  return {
    title: machine.seoTitle || `${machine.style} | Merrow Sewing Machines`,
    description:
      machine.seoSearchDescription ||
      `${machine.header} - Industrial sewing machine by Merrow`,
    keywords: machine.seoKeywords || undefined,
  };
}

function renderSpecRows(machine: MachinePageType) {
  const rows = [
    { label: "OPERATING SPEED", value: machine.speed ? `${machine.speed} RPM` : "" },
    { label: "STITCH WIDTH", value: machine.stitchWidth || "" },
    { label: "STITCH RANGE", value: machine.stitchRange || "" },
    { label: "STANDARD NEEDLE", value: machine.needleStandard || "" },
    { label: "MERROW NEEDLE RANGE", value: machine.needleRange || "" },
    { label: "FEDERAL STITCH TYPE", value: machine.stitchType || "" },
    { label: "MOTOR REQUIRED*", value: machine.motorSpec || "" },
    { label: "NUMBER OF THREADS", value: machine.threads || "" },
  ].filter((row) => row.value);

  return rows.map((row, index) => (
    <tr key={row.label} className={index % 2 === 0 ? "bg-[#f5f5f5]" : "bg-white"}>
      <td className="w-[235px] border border-[#cfcfcf] px-2 py-1 text-[11px] font-bold text-[#5f5f5f]">
        {row.label}
      </td>
      <td className="border border-[#cfcfcf] px-2 py-1 text-[11px] text-[#4f4f4f]">{row.value}</td>
    </tr>
  ));
}

export async function MachinePageContent({ styleKey }: MachinePageProps) {
  const machine = await resolveMachineByStyleKey(styleKey);

  if (!machine) {
    notFound();
  }

  const applications = await getApplicationsForMachine(machine.styleKey);

  const styleName = machine.style || styleKey;
  const header = machine.header || "";
  const descriptionHtml = machine.description || "";
  const overviewHtml = machine.overview || "";
  const howHtml = machine.how || "";
  const whyHtml = machine.why || "";
  const whereHtml = machine.whereUsed || "";
  const numberOfThumbs = Number.parseInt(machine.numberOfThumbs || "0", 10) || 0;

  const hasVideo1 = Boolean(machine.youtube1);
  const hasVideo2 = Boolean(machine.youtube2);
  const hasVideos = hasVideo1 || hasVideo2;

  const mainImageUrl = `${PRODUCT_PAGE_BASE}/${machine.styleKey}_main.jpg`;
  const video1Image = `${PRODUCT_PAGE_BASE}/${machine.styleKey}_video1.jpg`;
  const video2Image = `${PRODUCT_PAGE_BASE}/${machine.styleKey}_video2.jpg`;
  const stitch1Image = `${PRODUCT_PAGE_BASE}/${machine.styleKey}_stitch1.jpg`;
  const stitch2Image = `${PRODUCT_PAGE_BASE}/${machine.styleKey}_stitch2.jpg`;

  const contactLabel = machine.contactStitch || machine.styleKey;
  const contactHref = `/contact_general.html?label=${encodeURIComponent(contactLabel)}&key=samples`;
  const showOverlockAdvantages = machine.pageKey !== "70" && machine.pageKey !== "20";
  const isMg3uParityTarget = machine.styleKey === "mg3u";

  const marketingItems = [
    { url: machine.marketingUrl1, icon: machine.marketingIcon1, tagline: machine.marketingTagline1 },
    { url: machine.marketingUrl2, icon: machine.marketingIcon2, tagline: machine.marketingTagline2 },
    { url: machine.marketingUrl3, icon: machine.marketingIcon3, tagline: machine.marketingTagline3 },
    { url: machine.marketingUrl4, icon: machine.marketingIcon4, tagline: machine.marketingTagline4 },
    { url: machine.marketingUrl5, icon: machine.marketingIcon5, tagline: machine.marketingTagline5 },
  ].filter((item) => item.url);

  return (
    <main className="min-w-[1040px] text-[12px] leading-[16px] text-[#4a4a4a]">
      <div className="mx-auto w-[980px] pl-[40px]">
        <div className="pt-3">
          <div className="pb-3 text-[16px] leading-[20px]">
            <span className="text-[#8f0d0d]">{styleName}</span>
            <span className="px-2 text-[#7a7a7a]">|</span>
            <span className="uppercase text-[#7a7a7a]">{header}</span>
          </div>

          <div className="flex items-start gap-5">
            <div className="w-[620px]">
              <img
                src={mainImageUrl}
                width={500}
                height={417}
                alt={`${styleName} image`}
                className="border-0"
              />

              <div className="mt-3 flex items-start gap-3">
                <div className="w-[106px] space-y-2">
                  {Array.from({ length: numberOfThumbs }).map((_, index) => {
                    const n = index + 1;
                    const thumb = `${PRODUCT_PAGE_BASE}/${machine.styleKey}_thumb${n}.jpg`;
                    const full = `${PRODUCT_PAGE_BASE}/${machine.styleKey}_thumb${n}x.jpg`;
                    return (
                      <a key={thumb} href={full}>
                        <img
                          src={thumb}
                          width={100}
                          height={83}
                          alt={`${styleName} thumbnail ${n}`}
                          className="block border-0"
                        />
                      </a>
                    );
                  })}
                </div>

                <div className="w-[511px]">
                  <table className="w-[511px] border-collapse">
                    <tbody>{renderSpecRows(machine)}</tbody>
                  </table>
                </div>
              </div>
            </div>

            <aside className="w-[330px]">
              <section>
                <div className="text-[20px] leading-[22px] text-[#4a4a4a]">Video</div>
                <div className="mb-2 mt-1 border-b border-[#bdbdbd]" />

                {!hasVideos && (
                  <a href="https://www.youtube.com/watch?v=clZFXc2exsI" className="block text-[#808080]">
                    <img
                      src={`${PRODUCT_PAGE_BASE}/comingsoon_video1.jpg`}
                      width={138}
                      height={100}
                      alt="Merrow Video"
                      className="border-0"
                    />
                    <span className="mt-1 block text-[11px] leading-[14px]">
                      We&apos;re still filming... check back soon for a new video
                    </span>
                  </a>
                )}

                {hasVideo1 && (
                  <a href={toVideoHref(machine.youtube1)} className="mb-3 block text-[#808080]">
                    <img src={video1Image} width={138} height={100} alt={`${styleName} Video 1`} className="border-0" />
                    <span className="mt-1 block text-[11px] leading-[14px]">{machine.videoTagline1}</span>
                  </a>
                )}

                {hasVideo2 && (
                  <a href={toVideoHref(machine.youtube2)} className="block text-[#808080]">
                    <img src={video2Image} width={138} height={100} alt={`${styleName} Video 2`} className="border-0" />
                    <span className="mt-1 block text-[11px] leading-[14px]">{machine.videoTagline2}</span>
                  </a>
                )}
              </section>

              <section className="mt-4">
                <div className="text-[20px] leading-[22px] text-[#4a4a4a]">Description</div>
                <div className="mb-2 mt-1 border-b border-[#bdbdbd]" />
                <div
                    className="text-[12px] leading-[16px]"
                    dangerouslySetInnerHTML={{ __html: normalizeHtml(descriptionHtml) }}
                />
                <div className="mt-2 flex items-center gap-3 text-[11px]">
                  <a href="#wingnuts" className="text-[#808080] hover:underline">Read More</a>
                  <a href={contactHref} className="text-[#808080] hover:underline">Contact Us</a>
                </div>
              </section>

              <section className="mt-4">
                <div className="text-[20px] leading-[22px] text-[#4a4a4a]">Stitch Samples</div>
                <div className="mb-2 mt-1 border-b border-[#bdbdbd]" />
                <a href="#ss" className="block">
                  <img src={stitch1Image} width={330} height={108} alt={`${styleName} Stitch 1`} className="block border-0" />
                </a>
                <a href="#ss" className="mt-2 block">
                  <img src={stitch2Image} width={330} height={108} alt={`${styleName} Stitch 2`} className="block border-0" />
                </a>
              </section>
            </aside>
          </div>

          <a id="wingnuts" className="block pt-4" />

          {applications.length > 0 && (
            <section className="pt-1">
              {sectionTitle(`${styleName} Applications`)}
              {sectionRule()}
              <div className="mt-3 flex flex-wrap gap-3">
                {applications.map((app) => (
                  <a key={app.dKey} href={`/sewing/applications/${app.appKey}/#${app.dKey}`}>
                    <img
                      src={`${APP_IMAGE_BASE}/${app.dKey}_main_400x360.jpg`}
                      width={200}
                      height={180}
                      alt={app.appMenuTitle || app.appTitle}
                      className="border-0"
                    />
                  </a>
                ))}
              </div>
            </section>
          )}

          <section className="pt-5" id="advantage">
            {sectionTitle(`The Advantage of the ${styleName}`)}
            {sectionRule()}

            {overviewHtml && (
              <div
                className="pt-3 text-[12px] leading-[16px]"
                dangerouslySetInnerHTML={{ __html: normalizeHtml(overviewHtml) }}
              />
            )}

            {whyHtml && (
              <div className="pt-4">
                {subHeadline("WHY it's better")}
                <div
                  className="pt-1 text-[12px] leading-[16px]"
                  dangerouslySetInnerHTML={{ __html: normalizeHtml(whyHtml) }}
                />
              </div>
            )}

            {howHtml && (
              <div className="pt-4">
                {subHeadline("HOW it's better")}
                <div
                  className="pt-1 text-[12px] leading-[16px]"
                  dangerouslySetInnerHTML={{ __html: normalizeHtml(howHtml) }}
                />
              </div>
            )}

            {whereHtml && (
              <div className="pt-4">
                {subHeadline("WHERE it's used")}
                <div
                  className="pt-1 text-[12px] leading-[16px]"
                  dangerouslySetInnerHTML={{ __html: normalizeHtml(whereHtml) }}
                />
              </div>
            )}
          </section>

          {machine.flickrSet && machine.styleKey !== "70d3b2rail" && (
            <section className="pt-5" id="ss">
              <div className="h-px w-full overflow-hidden border-t border-dashed border-[#999999]" />
              <div className="pt-3 text-[20px] leading-[22px] text-[#4a4a4a]">{styleName} Stitches</div>
              <p className="mt-2 text-[12px] leading-[16px] text-[#666666]">
                Get the flash player here:{" "}
                <a
                  className="text-[#808080] hover:underline"
                  href={`https://www.flickr.com/photos/merrowmachine/sets/${machine.flickrSet}`}
                >
                  Stitch Gallery on Flickr
                </a>
              </p>
            </section>
          )}

          {marketingItems.length > 0 && (
            <section className="pt-5">
              <div className="text-[20px] leading-[22px] text-[#4a4a4a]">Marketing Downloads for the {styleName}</div>
              <div className="mb-2 mt-1 border-b border-[#bdbdbd]" />
              <div className="flex flex-wrap gap-4">
                {marketingItems.map((item) => (
                  <a key={item.url} href={item.url} className="block w-[138px] text-[#808080]">
                    <img src={item.icon} width={138} height={100} alt="Marketing download" className="border-0" />
                    <span className="mt-1 block text-[11px] leading-[14px]">{item.tagline}</span>
                  </a>
                ))}
              </div>
            </section>
          )}

          {showOverlockAdvantages && (
            <section className="pt-5">
              <LegacyMachineAdvantages machineName={styleName} />
            </section>
          )}

          {isMg3uParityTarget && <div className="machine-parity-spacer" aria-hidden="true" />}
        </div>
      </div>
    </main>
  );
}
