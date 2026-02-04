// @version customer-story-detail v1.0
//
// Route: /customer-stories/featured/[s]
// Individual customer story page

import { Metadata } from "next";
import { notFound } from "next/navigation";
import {
  FullBleed,
  PageHeader,
  RichText,
  MerrowButton,
} from "../../../../../../packages/ui";
import {
  getStoryByKey,
  getAllStoryKeys,
} from "../../../../../../packages/data-layer/queries/customer-stories";

interface PageProps {
  params: Promise<{ s: string }>;
}

export async function generateStaticParams() {
  const keys = await getAllStoryKeys();
  return keys.map((s) => ({ s }));
}

export async function generateMetadata({ params }: PageProps): Promise<Metadata> {
  const { s } = await params;
  const story = await getStoryByKey(s);

  if (!story) {
    return { title: "Story Not Found | Merrow" };
  }

  return {
    title: `${story.appTitle} | Customer Stories | Merrow`,
    description: story.quote
      ? story.quote.slice(0, 160)
      : `Customer story about ${story.appTitle} - Merrow Sewing Machines`,
  };
}

export default async function CustomerStoryPage({ params }: PageProps) {
  const { s } = await params;
  const story = await getStoryByKey(s);

  if (!story) {
    notFound();
  }

  const sections = [
    { title: story.p1Title, content: story.p1 },
    { title: story.p2Title, content: story.p2 },
    { title: story.p3Title, content: story.p3 },
    { title: story.p4Title, content: story.p4 },
  ].filter((s) => s.content && s.content.trim().length > 0);

  return (
    <main className="text-merrow-textMain">
      {/* Hero section with quote */}
      <FullBleed className="bg-merrow-heroBg border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <PageHeader eyebrow="Customer Story" title={story.appTitle} />

          {story.quote && (
            <div className="mt-8 bg-white border border-merrow-border rounded-lg p-6">
              <blockquote className="text-[16px] italic text-merrow-textMain leading-[24px]">
                "{story.quote}"
              </blockquote>
              {story.quoteAuthor && (
                <p className="mt-4 text-[13px] font-semibold text-merrow-textSub">
                  - {story.quoteAuthor}
                </p>
              )}
            </div>
          )}
        </div>
      </FullBleed>

      {/* Story content */}
      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-10">
          {sections.length > 0 ? (
            <div className="space-y-8">
              {sections.map((section, index) => (
                <article key={index}>
                  {section.title && (
                    <h2 className="text-lg font-semibold tracking-tight mb-3">
                      {section.title}
                    </h2>
                  )}
                  <RichText html={section.content} />
                </article>
              ))}
            </div>
          ) : (
            <p className="text-merrow-textMuted">
              Story content coming soon.
            </p>
          )}
        </div>
      </FullBleed>

      {/* Related links */}
      {(story.appLink || story.machineLink || story.stitchLink) && (
        <FullBleed className="bg-merrow-heroBg border-t border-merrow-border">
          <div className="mx-auto max-w-merrow px-4 py-8">
            <h2 className="text-lg font-semibold tracking-tight mb-4">
              Related
            </h2>
            <div className="grid gap-4 sm:grid-cols-3">
              {story.appLink && story.appTitle && (
                <a
                  href={story.appLink}
                  className="block border border-merrow-border bg-white rounded px-4 py-3 hover:shadow-md transition-shadow"
                >
                  <p className="text-[11px] uppercase tracking-[0.12em] text-merrow-textMuted mb-1">
                    Application
                  </p>
                  <p className="text-[13px] font-semibold text-merrow-link">
                    {story.appTitle}
                  </p>
                  {story.appCopy && (
                    <p className="mt-1 text-[11px] text-merrow-textSub">
                      {story.appCopy}
                    </p>
                  )}
                </a>
              )}

              {story.machineLink && story.machineTitle && (
                <a
                  href={story.machineLink}
                  className="block border border-merrow-border bg-white rounded px-4 py-3 hover:shadow-md transition-shadow"
                >
                  <p className="text-[11px] uppercase tracking-[0.12em] text-merrow-textMuted mb-1">
                    Machine
                  </p>
                  <p className="text-[13px] font-semibold text-merrow-link">
                    {story.machineTitle}
                  </p>
                  {story.machineCopy && (
                    <p className="mt-1 text-[11px] text-merrow-textSub">
                      {story.machineCopy}
                    </p>
                  )}
                </a>
              )}

              {story.stitchLink && story.stitchTitle && (
                <a
                  href={story.stitchLink}
                  className="block border border-merrow-border bg-white rounded px-4 py-3 hover:shadow-md transition-shadow"
                >
                  <p className="text-[11px] uppercase tracking-[0.12em] text-merrow-textMuted mb-1">
                    Stitch
                  </p>
                  <p className="text-[13px] font-semibold text-merrow-link">
                    {story.stitchTitle}
                  </p>
                  {story.stitchCopy && (
                    <p className="mt-1 text-[11px] text-merrow-textSub">
                      {story.stitchCopy}
                    </p>
                  )}
                </a>
              )}
            </div>
          </div>
        </FullBleed>
      )}

      {/* CTA section */}
      <FullBleed className="bg-merrow-footerBg">
        <div className="mx-auto max-w-merrow px-4 py-10 text-center">
          <h2 className="text-[20px] font-light text-white">
            Want results like these?
          </h2>
          <p className="mt-2 text-[13px] text-[#d7d7d7]">
            Contact our team to learn how Merrow can help your business.
          </p>
          <div className="mt-4 flex justify-center gap-4">
            <MerrowButton href="mailto:sales@merrow.com">
              Contact Sales
            </MerrowButton>
            <MerrowButton href="/customer-stories">
              More Stories
            </MerrowButton>
          </div>
        </div>
      </FullBleed>
    </main>
  );
}

export const revalidate = 86400; // ISR: 24 hours
