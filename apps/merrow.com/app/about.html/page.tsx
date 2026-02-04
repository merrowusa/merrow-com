// @version about-page v2.0
//
// Route: /about.html
// About page - redesign pass for Merrow story

import { Metadata } from "next";
import {
  FullBleed,
  PageHeader,
  MerrowButton,
} from "../../../../packages/ui";

export const metadata: Metadata = {
  title: "About Merrow | Merrow Sewing Machine Company",
  description:
    "Learn about Merrow, the world's leading manufacturer of hand-built precision overlock sewing machines since 1838. Discover our mission and history.",
};

const TIMELINE = [
  {
    year: "1838",
    title: "Founded in New England",
    body: "Merrow begins as a family-run manufacturer, focused on quality and mechanical precision.",
  },
  {
    year: "1881",
    title: "The Overlock is Born",
    body: "Merrow pioneers the overlock stitch, changing how the textile industry finishes and strengthens seams.",
  },
  {
    year: "1950s",
    title: "Industrial Standard",
    body: "Merrow machines become a global benchmark for consistency, durability, and stitch integrity.",
  },
  {
    year: "Today",
    title: "Modern Stitch Systems",
    body: "Hand-built in the USA, Merrow continues to innovate with ActiveSeam and specialty stitch systems.",
  },
];

const VALUES = [
  {
    title: "Hand-Built Precision",
    body: "Every machine is built and tested by craftspeople who understand tolerances and long-term performance.",
  },
  {
    title: "Stitch Integrity",
    body: "We design for stitch quality, not shortcuts — because seams define product longevity and value.",
  },
  {
    title: "Service for the Long Haul",
    body: "Our global network of agents helps customers maintain and optimize Merrow machines for decades.",
  },
];

export default function AboutPage() {
  return (
    <main className="text-merrow-textMain bg-white">
      {/* Hero */}
      <FullBleed className="bg-[linear-gradient(120deg,#f7f7f7_0%,#ececec_55%,#f5f5f5_100%)] border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <div className="grid gap-10 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
            <div>
              <PageHeader
                eyebrow="About Us"
                title="The Merrow Sewing Machine Company"
                subtitle="Hand-built precision. American quality. Global reach."
              />
              <p className="mt-5 text-[14px] leading-[22px] text-merrow-textSub">
                Since 1838, Merrow has built precision overlock sewing machines that power
                critical seams in apparel, technical textiles, and specialty applications. Every
                machine is engineered to run for decades, not seasons.
              </p>
              <div className="mt-6 flex flex-wrap gap-3">
                <MerrowButton href="/fashion-sewing">Browse Machines</MerrowButton>
                <MerrowButton href="/overlock-history">Read the History</MerrowButton>
              </div>
            </div>

            <div className="rounded-xl border border-[#d7d7d7] bg-white shadow-[0_12px_30px_rgba(0,0,0,0.08)]">
              <div className="border-b border-[#e2e2e2] px-6 py-5">
                <div className="text-[12px] uppercase tracking-[0.18em] text-merrow-textMuted">
                  Manufacturing Sewing Machines Since
                </div>
                <div className="mt-2 text-[44px] font-light text-[#8b0000]">1838</div>
                <p className="mt-2 text-[13px] text-merrow-textSub">
                  Built in Fall River, Massachusetts with the same commitment to precision that
                  defined our first machines.
                </p>
              </div>
              <div className="grid grid-cols-2 gap-4 px-6 py-5 text-center">
                <div>
                  <div className="text-[26px] font-light text-merrow-textMain">360+</div>
                  <div className="text-[11px] uppercase tracking-[0.12em] text-merrow-textMuted">
                    Machine Models
                  </div>
                </div>
                <div>
                  <div className="text-[26px] font-light text-merrow-textMain">60+</div>
                  <div className="text-[11px] uppercase tracking-[0.12em] text-merrow-textMuted">
                    Countries Served
                  </div>
                </div>
                <div>
                  <div className="text-[26px] font-light text-merrow-textMain">177+</div>
                  <div className="text-[11px] uppercase tracking-[0.12em] text-merrow-textMuted">
                    Years of Craft
                  </div>
                </div>
                <div>
                  <div className="text-[26px] font-light text-merrow-textMain">100%</div>
                  <div className="text-[11px] uppercase tracking-[0.12em] text-merrow-textMuted">
                    Hand Built
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </FullBleed>

      {/* Values */}
      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <div className="grid gap-6 md:grid-cols-3">
            {VALUES.map((value) => (
              <div
                key={value.title}
                className="rounded-xl border border-[#e2e2e2] bg-[#fafafa] px-5 py-6 shadow-[0_8px_18px_rgba(0,0,0,0.05)]"
              >
                <div className="text-[13px] uppercase tracking-[0.16em] text-[#8b0000]">
                  {value.title}
                </div>
                <p className="mt-3 text-[13px] leading-[19px] text-merrow-textSub">
                  {value.body}
                </p>
              </div>
            ))}
          </div>
        </div>
      </FullBleed>

      {/* Timeline */}
      <FullBleed className="bg-[#f3f3f3] border-y border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <div className="flex flex-col gap-8">
            <div>
              <div className="text-[12px] uppercase tracking-[0.2em] text-merrow-textMuted">
                Merrow Timeline
              </div>
              <h2 className="mt-2 text-[24px] font-light text-merrow-textMain">
                A century-spanning legacy of stitch innovation
              </h2>
            </div>
            <div className="grid gap-6 lg:grid-cols-4">
              {TIMELINE.map((entry) => (
                <div key={entry.year} className="rounded-xl bg-white border border-[#e1e1e1] p-5 shadow-[0_8px_18px_rgba(0,0,0,0.05)]">
                  <div className="text-[12px] uppercase tracking-[0.2em] text-[#8b0000]">
                    {entry.year}
                  </div>
                  <div className="mt-2 text-[15px] font-semibold text-merrow-textMain">
                    {entry.title}
                  </div>
                  <p className="mt-2 text-[12px] leading-[18px] text-merrow-textSub">
                    {entry.body}
                  </p>
                </div>
              ))}
            </div>
          </div>
        </div>
      </FullBleed>

      {/* What we build */}
      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <div className="grid gap-10 lg:grid-cols-[0.8fr_1.2fr]">
            <div>
              <div className="text-[12px] uppercase tracking-[0.18em] text-merrow-textMuted">
                What We Build
              </div>
              <h2 className="mt-2 text-[24px] font-light text-merrow-textMain">
                Machines designed for demanding seams
              </h2>
              <p className="mt-4 text-[13px] leading-[20px] text-merrow-textSub">
                From fashion and technical applications to specialty industrial work, Merrow
                machines are engineered to deliver consistency, speed, and stitch excellence.
              </p>
              <div className="mt-6 flex flex-wrap gap-3">
                <MerrowButton href="/technical-sewing">Technical Sewing</MerrowButton>
                <MerrowButton href="/end-to-end-seaming">End-to-End Seaming</MerrowButton>
              </div>
            </div>
            <div className="grid gap-4 md:grid-cols-2">
              <div className="rounded-xl border border-[#e1e1e1] bg-[#fafafa] p-5">
                <div className="text-[12px] uppercase tracking-[0.16em] text-merrow-textMuted">
                  Precision Systems
                </div>
                <p className="mt-2 text-[13px] text-merrow-textSub">
                  Hand-built drives, cams, and stitch systems that hold tolerances over decades.
                </p>
              </div>
              <div className="rounded-xl border border-[#e1e1e1] bg-[#fafafa] p-5">
                <div className="text-[12px] uppercase tracking-[0.16em] text-merrow-textMuted">
                  Specialized Stitches
                </div>
                <p className="mt-2 text-[13px] text-merrow-textSub">
                  From crochet and activewear to technical textiles, Merrow stitches define the finish.
                </p>
              </div>
              <div className="rounded-xl border border-[#e1e1e1] bg-[#fafafa] p-5">
                <div className="text-[12px] uppercase tracking-[0.16em] text-merrow-textMuted">
                  Global Network
                </div>
                <p className="mt-2 text-[13px] text-merrow-textSub">
                  150+ agents across 60+ countries deliver sales, service, and training.
                </p>
              </div>
              <div className="rounded-xl border border-[#e1e1e1] bg-[#fafafa] p-5">
                <div className="text-[12px] uppercase tracking-[0.16em] text-merrow-textMuted">
                  Service & Training
                </div>
                <p className="mt-2 text-[13px] text-merrow-textSub">
                  Support teams keep production running with parts access, manuals, and expert guidance.
                </p>
              </div>
            </div>
          </div>
        </div>
      </FullBleed>

      {/* Contact */}
      <FullBleed className="bg-[#f7f7f7] border-t border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <div className="grid gap-8 lg:grid-cols-[1fr_1fr]">
            <div>
              <h2 className="text-[20px] font-light text-merrow-textMain">
                Talk with the Merrow team
              </h2>
              <p className="mt-3 text-[13px] leading-[20px] text-merrow-textSub">
                Whether you need a new machine, service support, or technical guidance, we will connect
                you with the right expert.
              </p>
            </div>
            <div className="grid gap-4 sm:grid-cols-2">
              <div className="rounded-xl border border-[#e1e1e1] bg-white p-5">
                <div className="text-[12px] uppercase tracking-[0.16em] text-merrow-textMuted">Headquarters</div>
                <p className="mt-2 text-[13px] text-merrow-textSub leading-[20px]">
                  Merrow Sewing Machine Company<br />Fall River, Massachusetts<br />United States
                </p>
              </div>
              <div className="rounded-xl border border-[#e1e1e1] bg-white p-5">
                <div className="text-[12px] uppercase tracking-[0.16em] text-merrow-textMuted">Get in Touch</div>
                <div className="mt-2 space-y-2 text-[13px] text-merrow-textSub">
                  <div>
                    <span className="font-semibold">Phone:</span>{" "}
                    <a href="tel:+15086894095" className="text-merrow-link">508.689.4095</a>
                  </div>
                  <div>
                    <span className="font-semibold">Fax:</span> 508.689.4098
                  </div>
                  <div>
                    <span className="font-semibold">Sales:</span>{" "}
                    <a href="mailto:sales@merrow.com" className="text-merrow-link">sales@merrow.com</a>
                  </div>
                  <div>
                    <span className="font-semibold">Support:</span>{" "}
                    <a href="mailto:support@merrow.com" className="text-merrow-link">support@merrow.com</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </FullBleed>

      {/* CTA */}
      <FullBleed className="bg-merrow-footerBg">
        <div className="mx-auto max-w-merrow px-4 py-10 text-center">
          <h2 className="text-[20px] font-light text-white">
            Ready to Experience Merrow Quality?
          </h2>
          <p className="mt-2 text-[13px] text-[#d7d7d7]">
            Explore our machines or connect with a local agent to find the right solution.
          </p>
          <div className="mt-4 flex justify-center gap-4">
            <MerrowButton href="/fashion-sewing">Browse Machines</MerrowButton>
            <MerrowButton href="/agentmap.html">Find an Agent</MerrowButton>
          </div>
        </div>
      </FullBleed>
    </main>
  );
}
