// @version support-detail v2.1
//
// Route: /support/class/[c]/key/[k]
// Dynamic support page for specific machine class + support key

import { Metadata } from "next";
import { notFound } from "next/navigation";
import {
  FullBleed,
  PageHeader,
  MerrowButton,
} from "../../../../../../../../packages/ui";
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
      <main className="text-merrow-textMain">
        <FullBleed className="bg-merrow-heroBg border-b border-merrow-border">
          <div className="mx-auto max-w-merrow px-4 py-12">
            <PageHeader
              eyebrow={`Class: ${classKey}`}
              title="Support content not found"
              subtitle="We couldn't locate technical information for this class."
            />
          </div>
        </FullBleed>
      </main>
    );
  }

  const html = technicalField ? normalizeTechnicalHtml(technicalField) : "";

  return (
    <main className="text-merrow-textMain bg-white">
      {/* Hero */}
      <FullBleed className="bg-[linear-gradient(120deg,#f7f7f7_0%,#ededed_60%,#f4f4f4_100%)] border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <PageHeader
            eyebrow={`Class: ${classKey}`}
            title="Technical Support"
            subtitle={`Section: ${key.replace(/_/g, " ")}`}
          />
        </div>
      </FullBleed>

      {/* Support layout */}
      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <div className="grid gap-10 lg:grid-cols-[260px_1fr_300px]">
            <SupportSidebar />
            <div>
              <div className="rounded-xl border border-[#e1e1e1] bg-[#fafafa] px-6 py-6 shadow-[0_8px_18px_rgba(0,0,0,0.04)]">
                {html ? (
                  <>
                    {/* Legacy CMS HTML content - trusted source */}
                    <div
                      className="prose prose-sm max-w-none text-slate-700"
                      dangerouslySetInnerHTML={{ __html: html }}
                    />
                  </>
                ) : (
                  <p className="text-[13px] text-merrow-textSub">
                    No content is available for this section yet.
                  </p>
                )}
              </div>

              <div className="mt-6 rounded-xl border border-[#e1e1e1] bg-white px-5 py-4">
                <div className="text-[12px] uppercase tracking-[0.16em] text-merrow-textMuted">
                  Need more help?
                </div>
                <p className="mt-2 text-[13px] text-merrow-textSub">
                  Contact our support team for manuals, parts, or service guidance.
                </p>
                <div className="mt-3 flex flex-wrap gap-3">
                  <MerrowButton href="mailto:support@merrow.com">Email Support</MerrowButton>
                  <MerrowButton href="tel:+15086894095">Call: 508.689.4095</MerrowButton>
                </div>
              </div>
            </div>
            <SupportDocsPanel threadingDiagrams={threadingDiagrams} />
          </div>
        </div>
      </FullBleed>

      {/* CTA */}
      <FullBleed className="bg-merrow-footerBg">
        <div className="mx-auto max-w-merrow px-4 py-10 text-center">
          <h2 className="text-[20px] font-light text-white">Need Parts?</h2>
          <p className="mt-2 text-[13px] text-[#d7d7d7]">
            Contact our parts department for replacement parts.
          </p>
          <div className="mt-4 flex justify-center gap-4">
            <MerrowButton href="mailto:parts@merrow.com">Order Parts</MerrowButton>
            <MerrowButton href="/support">All Support</MerrowButton>
          </div>
        </div>
      </FullBleed>
    </main>
  );
}

// Server rendered for real-time data
export const dynamic = "force-dynamic";
