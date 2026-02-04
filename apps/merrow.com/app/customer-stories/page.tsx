// @version customer-stories-index v1.0
//
// Route: /customer-stories
// Index page listing all customer stories

import { Metadata } from "next";
import {
  FullBleed,
  PageHeader,
  MerrowButton,
} from "../../../../packages/ui";
import { getPublishedStories } from "../../../../packages/data-layer/queries/customer-stories";

export const metadata: Metadata = {
  title: "Customer Success Stories | Merrow Sewing Machines",
  description:
    "Read success stories from Merrow customers around the world. See how manufacturers use Merrow machines for fashion and technical textiles.",
};

export default async function CustomerStoriesIndexPage() {
  const stories = await getPublishedStories();

  return (
    <main className="text-merrow-textMain">
      {/* Hero section */}
      <FullBleed className="bg-merrow-heroBg border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <div className="text-center">
            <PageHeader
              eyebrow="Success Stories"
              title="Customer Stories"
              subtitle="See how manufacturers around the world use Merrow machines."
            />
          </div>
        </div>
      </FullBleed>

      {/* Stories grid */}
      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-10">
          {stories.length > 0 ? (
            <div className="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
              {stories.map((story) => (
                <a
                  key={story.id}
                  href={`/customer-stories/featured/${story.appKey}`}
                  className="block border border-merrow-border rounded-lg overflow-hidden hover:shadow-md transition-shadow"
                >
                  <div className="p-6">
                    <h3 className="text-[14px] font-semibold text-merrow-textMain">
                      {story.appTitle}
                    </h3>

                    {story.quote && (
                      <blockquote className="mt-3 text-[12px] italic text-merrow-textSub leading-[18px]">
                        "{story.quote.slice(0, 150)}
                        {story.quote.length > 150 ? "..." : ""}"
                      </blockquote>
                    )}

                    {story.quoteAuthor && (
                      <p className="mt-2 text-[11px] text-merrow-textMuted">
                        - {story.quoteAuthor}
                      </p>
                    )}

                    <div className="mt-4">
                      <span className="text-[11px] font-semibold text-merrow-link">
                        Read Story
                      </span>
                    </div>
                  </div>
                </a>
              ))}
            </div>
          ) : (
            <p className="text-merrow-textMuted text-[13px]">
              No customer stories found. Please check database connection.
            </p>
          )}
        </div>
      </FullBleed>

      {/* CTA section */}
      <FullBleed className="bg-merrow-footerBg">
        <div className="mx-auto max-w-merrow px-4 py-10 text-center">
          <h2 className="text-[20px] font-light text-white">
            Have a story to share?
          </h2>
          <p className="mt-2 text-[13px] text-[#d7d7d7]">
            We'd love to hear how Merrow machines are helping your business.
          </p>
          <div className="mt-4 flex justify-center gap-4">
            <MerrowButton href="mailto:marketing@merrow.com">
              Share Your Story
            </MerrowButton>
          </div>
        </div>
      </FullBleed>
    </main>
  );
}

export const revalidate = 86400; // ISR: 24 hours
