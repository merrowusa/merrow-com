// @version support-index v2.1
//
// Route: /support
// Support landing page (legacy SD menu + technical content)

import { Metadata } from "next";
import {
  FullBleed,
  PageHeader,
  RichText,
  MerrowButton,
} from "../../../../packages/ui";
import { SupportSidebar } from "./_components/SupportSidebar";
import { SupportDocsPanel } from "./_components/SupportDocsPanel";
import { getThreadingDiagrams } from "../../../../packages/data-layer/queries/support";

export const metadata: Metadata = {
  title: "Support & Service | Merrow Sewing Machine Company",
  description:
    "Get support for your Merrow sewing machine. Access technical manuals, request replacement parts, and contact our expert service team for assistance.",
};

interface PageProps {
  searchParams?: { key?: string };
}

export default async function SupportPage({ searchParams }: PageProps) {
  const threadingDiagrams = await getThreadingDiagrams();

  const key = searchParams?.key;
  const contentMap: Record<string, { title: string; html: string }> = {
    howto: {
      title: "How to use this menu",
      html:
        "The menu on the left is divided into general classes of Merrow machines.<br/><br/>" +
        "MG Class — or all green sergers<br/>" +
        "70 Class — most often used for textile finishing<br/>" +
        "Crochet Machines — high-arm sewing machines using straight needles and latch hooks<br/><br/>" +
        "The menu includes setup guides, operation guides, and parts diagrams.<br/><br/>" +
        "For video support please go <a href=\"https://www.merrow.com/video.html\">here</a>.<br/><br/>" +
        "We're here to help; <a href=\"/contact_general.html\">let us know</a> if there is anything else we can do.",
    },
    thankyou: {
      title: "Thanks for your input",
      html:
        "We will do the best we can to make changes based on your suggestions and questions.<br/><br/>" +
        "To offer a more detailed suggestion please go <a href=\"/contact_general.html\">here</a>.",
    },
    error: {
      title: "Please add your email address",
      html:
        "Without your email address we cannot read and process your comment.<br/><br/>" +
        "To offer a more detailed suggestion please go <a href=\"/contact_general.html\">here</a>.",
    },
  };

  const defaultContent = {
    title: "Welcome to Merrow's technical help guide",
    html:
      "If you have trouble finding what you're looking for please contact us directly:<br/><br/>" +
      "Domestic phone: 800.431.6677<br/>" +
      "Email: support@merrow.com<br/>" +
      "Skype: merrowusa<br/>" +
      "Jabber: merrow@gmail.com<br/>" +
      "International phone: 508.689.4095<br/>" +
      "US &amp; INT fax: 508.689.4098<br/><br/>" +
      "We're here to help!",
  };

  const content = key && contentMap[key] ? contentMap[key] : defaultContent;

  return (
    <main className="text-merrow-textMain bg-white">
      {/* Hero */}
      <FullBleed className="bg-[linear-gradient(120deg,#f7f7f7_0%,#ededed_60%,#f4f4f4_100%)] border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <div className="text-center">
            <PageHeader
              eyebrow="Customer Service"
              title="Support & Technical Resources"
              subtitle="Get help with your Merrow sewing machine."
            />
          </div>
          <div className="mt-6 grid gap-4 md:grid-cols-3">
            <div className="rounded-xl border border-[#e1e1e1] bg-white px-4 py-5 shadow-[0_8px_18px_rgba(0,0,0,0.05)]">
              <div className="text-[11px] uppercase tracking-[0.16em] text-merrow-textMuted">Manuals</div>
              <p className="mt-2 text-[13px] text-merrow-textSub">
                Access operation manuals, maintenance guides, and technical documentation.
              </p>
              <div className="mt-3">
                <MerrowButton href="/contact_general.html">Request Manual</MerrowButton>
              </div>
            </div>
            <div className="rounded-xl border border-[#e1e1e1] bg-white px-4 py-5 shadow-[0_8px_18px_rgba(0,0,0,0.05)]">
              <div className="text-[11px] uppercase tracking-[0.16em] text-merrow-textMuted">Parts Lookup</div>
              <p className="mt-2 text-[13px] text-merrow-textSub">
                Find replacement parts and browse parts books by machine model.
              </p>
              <div className="mt-3">
                <MerrowButton href="/parts">Find Parts</MerrowButton>
              </div>
            </div>
            <div className="rounded-xl border border-[#e1e1e1] bg-white px-4 py-5 shadow-[0_8px_18px_rgba(0,0,0,0.05)]">
              <div className="text-[11px] uppercase tracking-[0.16em] text-merrow-textMuted">Service</div>
              <p className="mt-2 text-[13px] text-merrow-textSub">
                Contact support or find a local agent for on-site service.
              </p>
              <div className="mt-3">
                <MerrowButton href="/agentmap.html">Find Agent</MerrowButton>
              </div>
            </div>
          </div>
        </div>
      </FullBleed>

      {/* Support layout */}
      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <div className="grid gap-10 lg:grid-cols-[260px_1fr_300px]">
            <SupportSidebar />
            <section>
              <div className="rounded-xl border border-[#e1e1e1] bg-[#fafafa] px-6 py-6 shadow-[0_8px_18px_rgba(0,0,0,0.04)]">
                <h2 className="text-[18px] font-semibold text-merrow-textMain mb-3">
                  {content.title}
                </h2>
                <RichText html={content.html} />
              </div>

              <div className="mt-8 grid gap-4 md:grid-cols-3">
                <div className="rounded-xl border border-[#e1e1e1] bg-white p-4">
                  <div className="text-[12px] uppercase tracking-[0.16em] text-merrow-textMuted">Support Email</div>
                  <p className="mt-2 text-[13px] text-merrow-textSub">
                    <a href="mailto:support@merrow.com" className="text-merrow-link">support@merrow.com</a>
                  </p>
                </div>
                <div className="rounded-xl border border-[#e1e1e1] bg-white p-4">
                  <div className="text-[12px] uppercase tracking-[0.16em] text-merrow-textMuted">Phone</div>
                  <p className="mt-2 text-[13px] text-merrow-textSub">
                    <a href="tel:+15086894095" className="text-merrow-link">508.689.4095</a>
                  </p>
                </div>
                <div className="rounded-xl border border-[#e1e1e1] bg-white p-4">
                  <div className="text-[12px] uppercase tracking-[0.16em] text-merrow-textMuted">Training</div>
                  <p className="mt-2 text-[13px] text-merrow-textSub">
                    <a
                      href="https://merrowedge.com/pages/training-support"
                      className="text-merrow-link"
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      Merrow Edge Training
                    </a>
                  </p>
                </div>
              </div>
            </section>
            <SupportDocsPanel threadingDiagrams={threadingDiagrams} />
          </div>
        </div>
      </FullBleed>

      {/* Contact band */}
      <FullBleed className="bg-[#f3f3f3] border-t border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-10">
          <div className="grid gap-6 md:grid-cols-3">
            <div className="rounded-xl border border-[#e1e1e1] bg-white p-5">
              <div className="text-[11px] uppercase tracking-[0.16em] text-merrow-textMuted">Domestic Support</div>
              <p className="mt-2 text-[13px] text-merrow-textSub">800.431.6677</p>
            </div>
            <div className="rounded-xl border border-[#e1e1e1] bg-white p-5">
              <div className="text-[11px] uppercase tracking-[0.16em] text-merrow-textMuted">International</div>
              <p className="mt-2 text-[13px] text-merrow-textSub">508.689.4095</p>
            </div>
            <div className="rounded-xl border border-[#e1e1e1] bg-white p-5">
              <div className="text-[11px] uppercase tracking-[0.16em] text-merrow-textMuted">Fax</div>
              <p className="mt-2 text-[13px] text-merrow-textSub">508.689.4098</p>
            </div>
          </div>
        </div>
      </FullBleed>

      {/* CTA */}
      <FullBleed className="bg-merrow-footerBg">
        <div className="mx-auto max-w-merrow px-4 py-10 text-center">
          <h2 className="text-[20px] font-light text-white">
            Still need help?
          </h2>
          <p className="mt-2 text-[13px] text-[#d7d7d7]">
            Our support team is ready to assist with manuals, parts, or service.
          </p>
          <div className="mt-4 flex flex-wrap justify-center gap-4">
            <MerrowButton href="/contact_general.html">Contact Us</MerrowButton>
            <MerrowButton href="/support/request-quote">Request a Quote</MerrowButton>
          </div>
        </div>
      </FullBleed>
    </main>
  );
}
