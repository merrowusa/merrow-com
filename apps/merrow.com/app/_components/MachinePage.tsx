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
import type { MachinePage as MachinePageType } from "../../../../packages/data-layer/schema/machine-pages";

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

  const styleName = machine.style || styleKey;
  const header = machine.header || "";
  const descriptionHtml = machine.description || "";
  const overviewHtml = machine.overview || "";
  const howHtml = machine.how || "";
  const whyHtml = machine.why || "";
  const whereHtml = machine.whereUsed || "";

  const specs = buildSpecs(machine);

  // Check for YouTube videos
  const hasVideo1 = machine.youtube1 && machine.youtube1.length > 0;
  const hasVideo2 = machine.youtube2 && machine.youtube2.length > 0;
  const hasVideos = hasVideo1 || hasVideo2;

  // Build machine image URL (from S3)
  const machineImageUrl = `${S3_BASE}/machines/${machine.styleKey}/main.png`;

  return (
    <main className="text-merrow-textMain">
      {/* Hero section with machine image */}
      <FullBleed className="bg-merrow-heroBg border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-8">
          <div className="grid gap-8 md:grid-cols-2 items-center">
            {/* Machine image */}
            <div className="flex justify-center">
              <MachineImage src={machineImageUrl} alt={styleName} />
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

              <div className="mt-6">
                <MerrowButton href="mailto:sales@merrow.com">
                  Contact Sales
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

      {/* Related applications */}
      {(machine.primaryApp || machine.secondaryApp) && (
        <FullBleed className="bg-white border-t border-merrow-border">
          <div className="mx-auto max-w-merrow px-4 py-8">
            <h2 className="text-lg font-semibold tracking-tight mb-4">
              Applications
            </h2>
            <div className="space-y-2 text-[13px] text-merrow-textSub">
              {machine.primaryApp && (
                <p>
                  <span className="font-semibold">Primary:</span> {machine.primaryApp}
                </p>
              )}
              {machine.secondaryApp && (
                <p>
                  <span className="font-semibold">Secondary:</span>{" "}
                  {machine.secondaryApp}
                </p>
              )}
            </div>
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
