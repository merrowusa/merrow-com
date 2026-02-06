// @version marketing-materials v1.0
// Route: /widget_marketing_material.php
// Legacy marketing materials page (static content)

import { Metadata } from "next";
import {
  FullBleed,
  PageHeader,
} from "../../../../packages/ui";

export const metadata: Metadata = {
  title: "Marketing Materials | Merrow Sewing Machine Company",
  description:
    "Download Merrow marketing materials, line cards, and product brochures.",
};

const DOWNLOADS: Array<{ label: string; href: string }> = [
  { label: "Merrow Logo", href: "http://marketing-downloads.s3.amazonaws.com/merrowlogo.zip" },
  { label: "Merrow History Document", href: "http://marketing-downloads.s3.amazonaws.com/merrowhistory.pdf" },
  { label: "Air Motor Line Card", href: "http://marketing-downloads.s3.amazonaws.com/linecard_AIRMOTOR.pdf" },
  { label: "Needles Brochure", href: "http://marketing-downloads.s3.amazonaws.com/brochure_NEEDLES.pdf" },
  { label: "Butted Seaming Machines Lineup Card", href: "http://marketing-downloads.s3.amazonaws.com/continuousprocessing_lineup.pdf" },
  { label: "70-D3B-2 Line Card", href: "http://marketing-downloads.s3.amazonaws.com/linecard_70-D3B-2.pdf" },
  { label: "70-Y3B-2 Line Card", href: "http://marketing-downloads.s3.amazonaws.com/linecard_70-Y3B-2.pdf" },
  { label: "70-D3B-2 CNP Line Card", href: "http://marketing-downloads.s3.amazonaws.com/linecard_70-D3B-2-CNP.pdf" },
  { label: "70-D3B-2 HP Line Card", href: "http://marketing-downloads.s3.amazonaws.com/linecard_70-D3B-2_HP.pdf" },
  { label: "70-D3B-2 G Line Card", href: "http://marketing-downloads.s3.amazonaws.com/linecard_70-D3B-2_G.pdf" },
  { label: "70-D3B-2 RAIL Line Card", href: "http://marketing-downloads.s3.amazonaws.com/linecard_70-D3B-2_RAIL.pdf" },
  { label: "70-D3B-2 LS Line Card", href: "http://marketing-downloads.s3.amazonaws.com/linecard_70-D3B-2_LS.pdf" },
  { label: "72-D3B-2 Line Card", href: "http://marketing-downloads.s3.amazonaws.com/linecard_72-D3B-2.pdf" },
  { label: "72-D3B-2 R Line Card", href: "http://marketing-downloads.s3.amazonaws.com/linecard_72-D3B-2_R.pdf" },
];

export default function MarketingMaterialsPage() {
  return (
    <main className="text-merrow-textMain">
      <FullBleed className="bg-merrow-heroBg border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-10">
          <PageHeader
            eyebrow="Marketing Materials"
            title="Merrow Marketing Resources"
            subtitle="Download print-quality brochures and line cards for Merrow products."
          />
        </div>
      </FullBleed>

      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-10 space-y-8">
          <div className="rounded-xl border border-[#e1e1e1] bg-white p-4 shadow-[0_6px_16px_rgba(0,0,0,0.05)]">
            <iframe
              title="Merrow Marketing Materials"
              src="http://merrow.uberflip.com/read/embed_mini/112219/386605?miniPop=false&alwaysCover=false&miniTitle=Merrow%20Marketing%20Material%20Brochure&miniColor=333333&miniLinkToTitle=false&miniUrl=&miniBg=FFFFFF&hideBg=false&width=430&height=300&sharing=true"
              className="h-[320px] w-full rounded border border-merrow-border"
            />
          </div>

          <div className="rounded-xl border border-[#e1e1e1] bg-[#fafafa] p-6">
            <div className="text-[12px] font-semibold text-merrow-textMain">
              Additional resources
            </div>
            <div className="mt-2 text-[13px] text-merrow-textSub">
              <a
                href="https://www.flickr.com/search/?q=merrow+machine"
                target="_blank"
                rel="noreferrer"
                className="text-merrow-link hover:underline"
              >
                Merrow Flickr Images
              </a>
            </div>
          </div>

          <div className="rounded-xl border border-[#e1e1e1] bg-white p-6 shadow-[0_6px_16px_rgba(0,0,0,0.05)]">
            <div className="text-[12px] uppercase tracking-[0.16em] text-merrow-textMuted">
              Downloads (PDF / ZIP)
            </div>
            <ul className="mt-3 space-y-2 text-[13px] text-merrow-textSub">
              {DOWNLOADS.map((item) => (
                <li key={item.href}>
                  <a
                    href={item.href}
                    target="_blank"
                    rel="noreferrer"
                    className="text-merrow-link hover:underline"
                  >
                    {item.label}
                  </a>
                </li>
              ))}
            </ul>
            <div className="mt-6 text-[13px] text-merrow-textSub">
              For more materials, contact Mandy Rollins at 508.689.4095.
            </div>
          </div>
        </div>
      </FullBleed>
    </main>
  );
}
