// @version applications-index v2.1
//
// Route: /sewing/applications
// Legacy-parity top-level applications shell page (no category selected)

import { Metadata } from "next";
import { FullBleed } from "../../../../../packages/ui";

export const metadata: Metadata = {
  title: "Industrial Sewing Applications | Merrow",
  description:
    "Explore Merrow's sewing applications - from emblem edging to blanket binding, find the right machine for your application.",
};

const SHARE_URL =
  "https://www.addthis.com/share?url=https%3A%2F%2Fwww.merrow.com%2Fsewing%2Fapplications";

export default function ApplicationsIndexPage() {
  return (
    <main className="text-merrow-textMain" id="top">
      <FullBleed className="border-b border-merrow-border bg-merrow-heroBg">
        <div className="mx-auto max-w-merrow px-4 py-8">
          <div className="grid gap-8 md:grid-cols-[300px_minmax(0,1fr)]">
            <section>
              <div className="text-[28px] leading-[30px] text-[#333]">
                <div className="text-[22px] text-[#666]">Merrow Stitches for</div>
                <h1 className="mt-1 min-h-[30px] font-['Century_Gothic','CenturyGothic',sans-serif]">&nbsp;</h1>
                <div className="mt-1 text-[18px] tracking-[0.08em] text-[#888]">APPLICATIONS</div>
              </div>

              <div className="mt-6 text-[12px]">
                <a href={SHARE_URL} className="text-merrow-link hover:underline" target="_blank" rel="noopener noreferrer">
                  Share
                </a>{" "}
                |{" "}
                <a
                  href="mailto:?subject=Merrow%20Sewing%20Applications&body=https://www.merrow.com/sewing/applications"
                  className="text-merrow-link hover:underline"
                >
                  Send to a friend
                </a>
              </div>
            </section>

            <section className="border-l border-[#d0d0d0] pl-8">
              <h2 className="text-[22px] leading-[28px] text-[#333]">Choose your specific application</h2>

              <div className="mt-8">
                <a
                  href="/support/request-quote?source=applications-index-compare-all"
                  className="inline-block rounded-sm bg-[#a80c0d] px-3 py-1 text-[12px] font-semibold uppercase tracking-[0.03em] text-white hover:bg-[#8f090a]"
                >
                  Compare all
                </a>
              </div>
            </section>
          </div>
        </div>
      </FullBleed>
    </main>
  );
}

export const revalidate = 86400; // ISR: 24 hours
