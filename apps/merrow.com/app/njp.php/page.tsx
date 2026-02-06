// @version jobs-page v1.0
// Route: /njp.php
// Legacy jobs page stub (no DB required)

import { Metadata } from "next";
import Link from "next/link";
import {
  FullBleed,
  PageHeader,
  MerrowButton,
} from "../../../../packages/ui";

export const metadata: Metadata = {
  title: "Working at Merrow | Merrow Sewing Machine Company",
  description:
    "Learn about careers at Merrow and contact us to inquire about open positions.",
};

const POSITION_SUBJECTS: Record<string, { title: string; subject: string }> = {
  "1": { title: "Purchasing Agent", subject: "purchasing agent" },
  "2": { title: "Engineering", subject: "engineering" },
  "3": { title: "Inside Sales", subject: "inside sales" },
};

interface PageProps {
  searchParams?: { p?: string; j?: string };
}

export default function JobsPage({ searchParams }: PageProps) {
  const selected = searchParams?.p ? POSITION_SUBJECTS[searchParams.p] : null;

  return (
    <main className="text-merrow-textMain">
      <FullBleed className="bg-merrow-heroBg border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-10">
          <PageHeader
            eyebrow="Careers"
            title="Working at Merrow"
            subtitle="Interested in working at Merrow? Email or call us to learn more."
          />
        </div>
      </FullBleed>

      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-10 space-y-8">
          <div className="rounded-xl border border-[#e1e1e1] bg-[#fafafa] p-6 shadow-[0_6px_16px_rgba(0,0,0,0.04)]">
            <div className="text-[11px] uppercase tracking-[0.16em] text-merrow-textMuted">
              Contact
            </div>
            <p className="mt-2 text-[13px] text-merrow-textSub">
              Email <a className="text-merrow-link hover:underline" href="mailto:working@merrow.com">working@merrow.com</a>
              {" "}or call <a className="text-merrow-link hover:underline" href="tel:+18004316677">800.431.6677</a>.
            </p>
          </div>

          {selected ? (
            <div className="rounded-xl border border-[#e1e1e1] bg-white p-6 shadow-[0_6px_16px_rgba(0,0,0,0.05)]">
              <h2 className="text-[18px] font-semibold text-merrow-textMain">
                {selected.title}
              </h2>
              <p className="mt-2 text-[13px] text-merrow-textSub">
                Interested in this role? Email us with your resume and a brief note.
              </p>
              <div className="mt-4">
                <MerrowButton
                  href={`mailto:working@merrow.com?subject=${encodeURIComponent(selected.subject)}`}
                >
                  Apply via Email
                </MerrowButton>
              </div>
              <div className="mt-4 text-[12px]">
                <Link href="/njp.php?j=jobs" className="text-merrow-link hover:underline">
                  View all positions
                </Link>
              </div>
            </div>
          ) : (
            <div className="rounded-xl border border-[#e1e1e1] bg-white p-6 shadow-[0_6px_16px_rgba(0,0,0,0.05)]">
              <h2 className="text-[18px] font-semibold text-merrow-textMain">
                Open Positions
              </h2>
              <p className="mt-2 text-[13px] text-merrow-textSub">
                We are always interested in meeting talented people. If you don&apos;t see
                a role that fits, email us and tell us about your experience.
              </p>
              <div className="mt-6 grid gap-4 md:grid-cols-3">
                {Object.entries(POSITION_SUBJECTS).map(([key, position]) => (
                  <div
                    key={key}
                    className="rounded-lg border border-merrow-border bg-[#fafafa] p-4"
                  >
                    <div className="text-[14px] font-semibold text-merrow-textMain">
                      {position.title}
                    </div>
                    <div className="mt-3">
                      <MerrowButton href={`/njp.php?j=jobs&p=${key}`}>
                        View details
                      </MerrowButton>
                    </div>
                  </div>
                ))}
              </div>
            </div>
          )}
        </div>
      </FullBleed>
    </main>
  );
}
