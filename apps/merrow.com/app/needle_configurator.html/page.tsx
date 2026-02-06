// @version needle-configurator-stub v1.0
// Route: /needle_configurator.html
// Legacy needle selector stub (design pass later)

import { Metadata } from "next";
import {
  FullBleed,
  PageHeader,
  MerrowButton,
} from "../../../../packages/ui";

export const metadata: Metadata = {
  title: "Needle Selector Tool | Merrow Sewing Machine Company",
  description:
    "Use the Merrow needle selector tool to choose the right needle for your fabric and application, then contact support for final setup guidance.",
};

export default function NeedleConfiguratorPage() {
  return (
    <main className="text-merrow-textMain">
      <FullBleed className="bg-merrow-heroBg border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-10">
          <PageHeader
            eyebrow="Needle Selector"
            title="Merrow Needle Selection Tool"
            subtitle="Choose the right needle for your application."
          />
        </div>
      </FullBleed>

      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-10">
          <div className="rounded-xl border border-[#e1e1e1] bg-[#fafafa] p-6 shadow-[0_6px_16px_rgba(0,0,0,0.04)]">
            <p className="text-[13px] text-merrow-textSub">
              The legacy needle configurator relied on a dynamic dataset. We&apos;re
              rebuilding this tool with a modern interface. In the meantime, contact
              Merrow support for needle recommendations.
            </p>
            <div className="mt-4 flex flex-wrap gap-3">
              <MerrowButton href="mailto:contact@merrow.com">
                Email: contact@merrow.com
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
