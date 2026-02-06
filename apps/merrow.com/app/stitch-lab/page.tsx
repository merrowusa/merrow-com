// @version stitch-lab v1.0
// Route: /stitch-lab
// Simple legacy stub (no DB required)

import { Metadata } from "next";
import {
  FullBleed,
  PageHeader,
  MerrowButton,
} from "../../../../packages/ui";

export const metadata: Metadata = {
  title: "Merrow Stitch Lab | Merrow Sewing Machine Company",
  description:
    "Contact Merrow Stitch Lab to develop custom stitches and sewing solutions for your product.",
};

export default function StitchLabPage() {
  return (
    <main className="text-merrow-textMain">
      <FullBleed className="bg-merrow-heroBg border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-10">
          <PageHeader
            eyebrow="Custom Stitch Development"
            title="Merrow Stitch Lab"
            subtitle="Contact us to discuss your stitch requirements."
          />
        </div>
      </FullBleed>

      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-10">
          <div className="rounded-xl border border-[#e1e1e1] bg-[#fafafa] p-6 shadow-[0_6px_16px_rgba(0,0,0,0.04)]">
            <p className="text-[13px] text-merrow-textSub">
              Merrow Stitch Lab works with customers to develop stitching solutions for
              unique fabrics and products. Send us your material and we will recommend the
              right machine, thread, and stitch configuration.
            </p>
            <div className="mt-4 flex flex-wrap gap-3">
              <MerrowButton href="mailto:stitchlab@merrow.com">
                Email: stitchlab@merrow.com
              </MerrowButton>
              <MerrowButton href="tel:+18004316677">Call: 800.431.6677</MerrowButton>
              <MerrowButton href="/contact_general.html">Contact Us</MerrowButton>
            </div>
          </div>
        </div>
      </FullBleed>
    </main>
  );
}
