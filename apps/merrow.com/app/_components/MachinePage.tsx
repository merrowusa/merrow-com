// @version machine-page v1.0
//
// Shared machine page component used by all legacy URL routes.
// Displays machine details from machine_pages table.

import { notFound } from "next/navigation";
import { Metadata } from "next";
import {
  PageHeader,
  SpecGrid,
  ArticleBlock,
  YouTubeEmbed,
  FullBleed,
  MerrowButton,
} from "../../../../packages/ui";
import { MachineImage } from "./MachineImage";
import { getMachinePageByStyleKey } from "../../../../packages/data-layer/queries/machines";
import { getApplicationsForMachine } from "../../../../packages/data-layer/queries/applications";
import type { MachinePage as MachinePageType } from "../../../../packages/data-layer/schema/machine-pages";
import { ThumbnailGallery } from "../machines/_components/ThumbnailGallery";
import { ApplicationsStrip } from "../machines/_components/ApplicationsStrip";
import { StitchGallery } from "../machines/_components/StitchGallery";
import { MarketingDownloads } from "../machines/_components/MarketingDownloads";

// S3 base URL for machine images
const S3_BASE = "https://merrow-media.s3.amazonaws.com";

/**
 * Props for the MachinePage component
 */
export interface MachinePageProps {
  styleKey: string;
}

/**
 * Normalize legacy HTML content (line breaks, basic cleanup)
 */
function normalizeHtml(raw: string): string {
  return raw.replace(/\r\n/g, "<br />");
}

/**
 * Build specs array from machine data
 */
function buildSpecs(machine: MachinePageType) {
  return [
    { label: "Speed", value: machine.speed ? `${machine.speed} spm` : "" },
    { label: "Stitch range", value: machine.stitchRange },
    { label: "Stitch width", value: machine.stitchWidth },
    { label: "Threads", value: machine.threads },
    { label: "Needles", value: machine.needles },
    { label: "Needle standard", value: machine.needleStandard },
    { label: "Needle range", value: machine.needleRange },
    { label: "Stitch type", value: machine.stitchType },
    { label: "Motor spec", value: machine.motorSpec },
    { label: "Seam type", value: machine.seamType },
    { label: "Feeds", value: machine.feeds },
    { label: "Cutter", value: machine.cutter },
    {
      label: "Indicative price",
      value: machine.price ? `$${machine.price.toLocaleString("en-US")}` : "",
    },
  ];
}

/**
 * Generate metadata for machine page
 */
export async function generateMachineMetadata(
  styleKey: string
): Promise<Metadata> {
  const machine = await getMachinePageByStyleKey(styleKey);

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

/**
 * Main machine page component
 */
export async function MachinePageContent({ styleKey }: MachinePageProps) {
  const machine = await getMachinePageByStyleKey(styleKey);

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

  const specs = buildSpecs(machine);

  // Check for YouTube videos
  const hasVideo1 = machine.youtube1 && machine.youtube1.length > 0;
  const hasVideo2 = machine.youtube2 && machine.youtube2.length > 0;
  const hasVideos = hasVideo1 || hasVideo2;

  // Build machine image URL (from S3)
  const machineImageUrl = `${S3_BASE}/machines/${machine.styleKey}/main.png`;
  const contactStitchParam = machine.contactStitch
    ? `?stitch=${encodeURIComponent(machine.contactStitch)}`
    : "";
  const requestQuoteHref = `/support/request-quote${contactStitchParam}`;
  const showStitchGallery = Boolean(machine.flickrSet) && machine.styleKey !== "70d3b2rail";
  const hasApplications = applications.length > 0 || Boolean(machine.primaryApp) || Boolean(machine.secondaryApp);
  const marketingItems = [
    { url: machine.marketingUrl1, icon: machine.marketingIcon1, tagline: machine.marketingTagline1 },
    { url: machine.marketingUrl2, icon: machine.marketingIcon2, tagline: machine.marketingTagline2 },
    { url: machine.marketingUrl3, icon: machine.marketingIcon3, tagline: machine.marketingTagline3 },
    { url: machine.marketingUrl4, icon: machine.marketingIcon4, tagline: machine.marketingTagline4 },
    { url: machine.marketingUrl5, icon: machine.marketingIcon5, tagline: machine.marketingTagline5 },
  ];

  return (
    <main className="text-merrow-textMain">
      {/* Hero section with machine image */}
      <FullBleed className="bg-merrow-heroBg border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-8">
          <div className="grid gap-8 md:grid-cols-2 items-center">
            {/* Machine image */}
            <div className="flex flex-col items-center">
              <MachineImage src={machineImageUrl} alt={styleName} />
              <ThumbnailGallery styleKey={machine.styleKey} numberOfThumbs={numberOfThumbs} />
            </div>

            {/* Machine header info */}
            <div>
              <PageHeader eyebrow={header || "Merrow ActiveSeam"} title={styleName} />

              {descriptionHtml && (
                <div className="mt-4">
                  <div
                    className="prose prose-sm max-w-none text-merrow-textSub"
                    dangerouslySetInnerHTML={{ __html: normalizeHtml(descriptionHtml) }}
                  />
                </div>
              )}

              <div className="mt-6 flex flex-wrap gap-3">
                <MerrowButton href={requestQuoteHref}>
                  Request Quote
                </MerrowButton>
                <MerrowButton href="mailto:sales@merrow.com">
                  Email Sales
                </MerrowButton>
              </div>
            </div>
          </div>
        </div>
      </FullBleed>

      {/* Specs section */}
      <FullBleed className="bg-white border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-8">
          <SpecGrid specs={specs} />
        </div>
      </FullBleed>

      {/* Applications strip */}
      {hasApplications && (
        <FullBleed className="bg-white border-b border-merrow-border">
          <div className="mx-auto max-w-merrow px-4 py-8">
            <ApplicationsStrip
              applications={applications}
              fallbackPrimary={machine.primaryApp}
              fallbackSecondary={machine.secondaryApp}
            />
          </div>
        </FullBleed>
      )}

      {/* Content sections */}
      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-8">
          <div className="grid gap-8 md:grid-cols-2">
            {overviewHtml && (
              <ArticleBlock title="Overview" html={normalizeHtml(overviewHtml)} />
            )}
            {howHtml && (
              <ArticleBlock title="How it works" html={normalizeHtml(howHtml)} />
            )}
            {whyHtml && (
              <ArticleBlock title="Why it matters" html={normalizeHtml(whyHtml)} />
            )}
            {whereHtml && (
              <ArticleBlock title="Where it's used" html={normalizeHtml(whereHtml)} />
            )}
          </div>
        </div>
      </FullBleed>

      {/* Videos section */}
      {hasVideos && (
        <FullBleed className="bg-merrow-heroBg border-t border-merrow-border">
          <div className="mx-auto max-w-merrow px-4 py-8">
            <h2 className="text-lg font-semibold tracking-tight mb-6">Videos</h2>
            <div className="grid gap-6 md:grid-cols-2">
              {hasVideo1 && (
                <YouTubeEmbed
                  videoId={machine.youtube1}
                  tagline={machine.videoTagline1}
                />
              )}
              {hasVideo2 && (
                <YouTubeEmbed
                  videoId={machine.youtube2}
                  tagline={machine.videoTagline2}
                />
              )}
            </div>
          </div>
        </FullBleed>
      )}

      {/* Stitch gallery CTA */}
      {showStitchGallery && (
        <FullBleed className="bg-white border-t border-merrow-border">
          <div className="mx-auto max-w-merrow px-4 py-8">
            <StitchGallery flickrSet={machine.flickrSet} machineName={styleName} />
          </div>
        </FullBleed>
      )}

      {/* Marketing downloads */}
      {marketingItems.some((item) => item.url) && (
        <FullBleed className="bg-white border-t border-merrow-border">
          <div className="mx-auto max-w-merrow px-4 py-8">
            <MarketingDownloads items={marketingItems} />
          </div>
        </FullBleed>
      )}

      {/* Contact CTA */}
      <FullBleed className="bg-merrow-footerBg">
        <div className="mx-auto max-w-merrow px-4 py-8 text-center">
          <h2 className="text-[20px] font-light text-white">
            Ready to learn more about the {styleName}?
          </h2>
          <p className="mt-2 text-[13px] text-[#d7d7d7]">
            Contact our team for pricing, specifications, and availability.
          </p>
          <div className="mt-4 flex justify-center gap-4">
            <MerrowButton href={requestQuoteHref}>
              Request Quote
            </MerrowButton>
            <MerrowButton href="mailto:sales@merrow.com">
              Email Sales
            </MerrowButton>
            <MerrowButton href="/agentmap.html">Find an Agent</MerrowButton>
          </div>
        </div>
      </FullBleed>
    </main>
  );
}
