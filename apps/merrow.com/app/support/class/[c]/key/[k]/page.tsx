// @version support-detail v3.0
//
// Route: /support/class/[c]/key/[k]
// Dynamic support page for specific machine class + support key

import { Metadata } from "next";
import { notFound } from "next/navigation";
import { SupportSidebar } from "../../../../_components/SupportSidebar";
import { SupportDocsPanel } from "../../../../_components/SupportDocsPanel";
import {
  getTechnicalField,
  getThreadingDiagrams,
} from "../../../../../../../../packages/data-layer/queries/support";

interface PageProps {
  params: Promise<{ c: string; k: string }>;
}

const TECHNICAL_KEYS = new Set([
  "setup",
  "setup_needles",
  "setup_loopers",
  "setup_threading",
  "setup_gencutting",
  "setup_knife",
  "setup_sharpening",
  "setup_feeddogs",
  "setup_presser",
  "setup_framecap",
  "maintenance",
  "trouble_needles",
  "trouble_feeding",
  "trouble_stitch",
  "trouble_oil",
  "trouble_skippedstitch",
  "trouble_thread",
  "trouble_latchhooks",
  "trouble_loosestitches",
  "trouble_skippedstitches",
  "trouble_breakingneedles",
  "trouble_needleholes",
  "maint_lubrication",
  "maint_needles",
  "maint_needleguard",
  "maint_needlebar",
  "maint_castoff",
  "maint_fixedcastoff",
  "maint_needlelever",
  "maint_hook",
  "maint_hookcarrier",
  "maint_fingerplate",
  "maint_spreader",
  "maint_tensions",
  "maint_feedALL",
  "maint_feedPLAIN",
  "maint_feedSHELL",
  "maint_threadcarrier",
  "maint_threading",
  "maint_fabricguard",
]);

const POPUP_LINKS: Record<string, string> = {
  popOne: "/bs-diag1.htm",
  popTwo: "/bs-diag2.htm",
  popThree: "/bs-diag4.htm",
  popFour: "/bs-diag3.htm",
  popFive: "/bs-diagA.htm",
  popSix: "/bs-diagG.htm",
  popSeven: "/bs-diagB.htm",
  popEight: "/bs-diagH.htm",
  popNine: "/bs-diagC.htm",
  popTen: "/bs-diagD.htm",
  popEleven: "/bs-diag5-6.htm",
  popTwelve: "/bs-diagF.htm",
  popThirteen: "/bs-diagE.htm",
};

const normalizeTechnicalHtml = (raw: string) => {
  let html = raw;

  // Remove legacy inline scripts (not executed via React anyway).
  html = html.replace(/<script[\s\S]*?<\/script>/gi, "");

  for (const [name, href] of Object.entries(POPUP_LINKS)) {
    const pattern = new RegExp(`href=["']/?javascript:${name}\\(\\)["']`, "gi");
    html = html.replace(pattern, `href="${href}"`);
  }

  // Normalize legacy relative paths to absolute root paths.
  html = html.replace(/(href|src)=["']\/\.\.\//gi, '$1="/');
  html = html.replace(/(href|src)=["']\.\.\//gi, '$1="/');

  // Fix accidental leading slash before absolute merrow.com links.
  html = html.replace(
    /(href|src)=["']\/https?:\/\/(?:www\.)?merrow\.com\/english\//gi,
    '$1="/english/'
  );

  // Normalize protocol-relative .htm links.
  html = html.replace(
    /(href|src)=["']\/\/([^/]+\.htm)["']/gi,
    '$1="/$2"'
  );

  // Promote relative .htm links to absolute paths.
  html = html.replace(
    /(href|src)=["'](?!https?:|\/|#|mailto:|tel:)([^"']+\.htm)["']/gi,
    '$1="/$2"'
  );

  // Final guard: replace any remaining javascript: links with support hub.
  html = html.replace(/href=["']\/?javascript:[^"']*["']/gi, 'href="/support"');

  return html;
};

export async function generateMetadata({ params }: PageProps): Promise<Metadata> {
  const { c, k } = await params;
  return {
    title: `Support: ${c.toUpperCase()} - ${k} | Merrow`,
    description: `Support information for Merrow ${c} class machine, key ${k}.`,
  };
}

export default async function SupportDetailPage({ params }: PageProps) {
  const { c, k } = await params;
  const classKey = c.toUpperCase();
  const key = decodeURIComponent(k);

  if (!TECHNICAL_KEYS.has(key)) {
    notFound();
  }

  const [technicalField, threadingDiagrams] = await Promise.all([
    getTechnicalField(classKey, key),
    getThreadingDiagrams(),
  ]);

  if (technicalField === null) {
    return (
      <main className="min-w-[1040px] bg-[#ebebeb] text-[#222222]">
        <div className="mx-auto w-[980px] pl-[40px] pt-3 pb-4">
          <div className="rounded border border-[#b7b7b7] bg-[#efefef] p-3">
            <div className="mb-2 text-[18px] font-semibold text-[#b00707]">
              Support content not found
            </div>
            <p className="text-[12px] leading-[16px] text-[#4c4c4c]">
              We couldn&apos;t locate technical information for class <b>{classKey}</b> and key{" "}
              <b>{key}</b>.
            </p>
          </div>
        </div>
      </main>
    );
  }

  const html = technicalField ? normalizeTechnicalHtml(technicalField) : "";

  return (
    <main className="min-w-[1040px] bg-[#ebebeb] text-[#222222]">
      <div className="mx-auto w-[980px] pl-[40px] pt-3 pb-4">
        <div className="mb-3 grid grid-cols-[300px_360px_300px] gap-4">
          <div>
            <SupportSidebar />
          </div>

          <div>
            <div className="mb-3 rounded border border-[#b7b7b7] bg-[#efefef] p-2">
              <div className="text-[13px] font-semibold text-[#b00707]">
                Technical Support: {classKey}
              </div>
              <div className="mt-1 text-[12px] text-[#666666]">
                Section: {key.replace(/_/g, " ")}
              </div>
            </div>

            <div className="rounded border border-[#b7b7b7] bg-[#efefef] p-3">
              {html ? (
                <div
                  className="support-technical-html text-[12px] leading-[16px] text-[#4c4c4c]"
                  dangerouslySetInnerHTML={{ __html: html }}
                />
              ) : (
                <p className="text-[12px] leading-[16px] text-[#4c4c4c]">
                  No content is available for this section yet.
                </p>
              )}

              <div className="mt-4 border-t border-[#d6d6d6] pt-3 text-[12px] leading-[16px] text-[#4c4c4c]">
                <div className="font-semibold text-[#b00707]">Need more help?</div>
                <div>
                  Contact support directly:{" "}
                  <a className="text-[#808080] hover:underline" href="mailto:support@merrow.com">
                    support@merrow.com
                  </a>
                </div>
                <div>
                  International phone:{" "}
                  <a className="text-[#808080] hover:underline" href="tel:+15086894095">
                    508.689.4095
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div>
            <SupportDocsPanel threadingDiagrams={threadingDiagrams} />
          </div>
        </div>

        <style
          dangerouslySetInnerHTML={{
            __html: `
              .support-technical-html a { color: #808080; text-decoration: none; }
              .support-technical-html a:hover { text-decoration: underline; color: #af0b0c; }
              .support-technical-html img { max-width: 100%; height: auto; border: 0; }
              .support-technical-html table { width: 100%; border-collapse: collapse; }
              .support-technical-html td, .support-technical-html th {
                border: 1px solid #d3d3d3;
                padding: 4px;
                font-size: 12px;
              }
            `,
          }}
        />
      </div>
    </main>
  );
}

// Server rendered for real-time data
export const dynamic = "force-dynamic";
