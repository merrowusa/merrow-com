// @version stitch-browser-stub v1.0
// Route: /stitch.html
// Legacy stitch browser stub (design pass later)

import { Metadata } from "next";
import {
  FullBleed,
  PageHeader,
  MerrowButton,
} from "../../../../packages/ui";

export const metadata: Metadata = {
  title: "Stitch Browser | Merrow Sewing Machine Company",
  description:
    "Browse Merrow stitch samples and learn which machines produce each stitch.",
};

export default function StitchBrowserPage() {
  return (
    <main className="text-merrow-textMain">
      <FullBleed className="bg-merrow-heroBg border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-10">
          <PageHeader
            eyebrow="Stitch Samples"
            title="Merrow Stitch Browser"
            subtitle="Explore stitch samples and find the right machine for your application."
          />
        </div>
      </FullBleed>

      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-10">
          <div className="rounded-xl border border-[#e1e1e1] bg-[#fafafa] p-6 shadow-[0_6px_16px_rgba(0,0,0,0.04)]">
            <p className="text-[13px] text-merrow-textSub">
              The legacy stitch browser is being rebuilt with a modern experience. In
              the meantime, contact Merrow for stitch recommendations or browse related
              machine pages.
            </p>
            <div className="mt-4 flex flex-wrap gap-3">
              <MerrowButton href="mailto:contact@merrow.com">
                Email: contact@merrow.com
              </MerrowButton>
              <MerrowButton href="tel:+18004316677">Call: 800.431.6677</MerrowButton>
              <MerrowButton href="/sewing/applications">
                Sewing Applications
              </MerrowButton>
            </div>
          </div>
        </div>
      </FullBleed>
    </main>
  );
}
