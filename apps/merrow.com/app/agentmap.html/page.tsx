// @version agentmap-page v1.0
// Route: /agentmap.html
// Legacy agent map embed (no DB required)

import { Metadata } from "next";
import {
  FullBleed,
  PageHeader,
  MerrowButton,
} from "../../../../packages/ui";

export const metadata: Metadata = {
  title: "Find a Merrow Agent | Merrow Sewing Machine Company",
  description:
    "Find a Merrow sales and service agent worldwide. Locate a local dealer for support, service, and parts.",
};

export default function AgentMapPage() {
  return (
    <main className="text-merrow-textMain">
      <FullBleed className="bg-merrow-heroBg border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-10">
          <PageHeader
            eyebrow="Worldwide Support"
            title="Find a Merrow Agent"
            subtitle="Merrow sells and services products through a global network of agents."
          />
        </div>
      </FullBleed>

      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-10 space-y-8">
          <div className="rounded-xl border border-[#e1e1e1] bg-white p-4 shadow-[0_6px_16px_rgba(0,0,0,0.05)]">
            <iframe
              title="Merrow Agent Map"
              src="https://mapsengine.google.com/map/u/0/embed?mid=zsVw84sSuJyo.kI-ry6XL3e2w"
              className="h-[500px] w-full rounded border border-merrow-border md:h-[800px]"
            />
          </div>

          <div className="rounded-xl border border-[#e1e1e1] bg-[#fafafa] p-6 shadow-[0_6px_16px_rgba(0,0,0,0.04)]">
            <div className="text-[11px] uppercase tracking-[0.16em] text-merrow-textMuted">
              Need help?
            </div>
            <p className="mt-2 text-[13px] text-merrow-textSub">
              Contact Merrow for service, pricing, or to connect with a local dealer.
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
