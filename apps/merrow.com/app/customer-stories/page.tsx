// @version customer-stories-index v2.0
//
// Route: /customer-stories
// Legacy-style story index using the same card treatment as the original menu surface

import { Metadata } from "next";
import { getPublishedStories } from "../../../../packages/data-layer/queries/customer-stories";

const LEGACY_STORY_ASSET_BASE =
  "https://merrow-media.s3.amazonaws.com/general-http/2011_live";

const LEGACY_STORY_ORDER = ["csrw", "csb", "csam"] as const;

const LEGACY_STORY_HEADINGS: Record<(typeof LEGACY_STORY_ORDER)[number], string> = {
  csrw: "Ramblers Way",
  csb: "Hoffman Embroidery",
  csam: "ACME Mills",
};

const LEGACY_STORY_BLURBS: Record<(typeof LEGACY_STORY_ORDER)[number], string> = {
  csrw:
    "Merrow knows sewing, from machine to stitch to garment. During our 172 years in the business we've accumulated a vast amount of knowledge on what it means to design, construct, and market a product.",
  csb:
    "We love this machine and the new world it has opened for us. Open communication leads to unparalleled service and customer loyalty that would rival any brand.",
  csam:
    "Merrow's partnerships with various OEM manufacturers helped us get the equipment we needed to fit our operation without disrupting our existing setup.",
};

export const metadata: Metadata = {
  title: "Customer Stories | Merrow Sewing Machines",
  description:
    "Merrow customer stories from fashion, technical seaming, and end-to-end joining manufacturers.",
};

function normalizeQuote(text?: string): string {
  return (text || "").replace(/\s+/g, " ").trim();
}

export default async function CustomerStoriesIndexPage() {
  const stories = await getPublishedStories();
  const storyMap = new Map(stories.map((story) => [story.appKey, story]));

  const featuredStories = LEGACY_STORY_ORDER.map((storyKey) => {
    const story = storyMap.get(storyKey);
    return {
      appKey: storyKey,
      href: `/customer-stories/featured/${storyKey}`,
      title: LEGACY_STORY_HEADINGS[storyKey],
      blurb: normalizeQuote(story?.quote) || LEGACY_STORY_BLURBS[storyKey],
      image: `${LEGACY_STORY_ASSET_BASE}/${storyKey}_09.jpg`,
    };
  });

  const additionalStories = stories.filter(
    (story) => !LEGACY_STORY_ORDER.includes(story.appKey as (typeof LEGACY_STORY_ORDER)[number])
  );

  return (
    <main className="customer-stories-index-page">
      <div className="customer-stories-index-shell">
        <header className="customer-stories-index-header">
          <h1>Merrow Customer Stories</h1>
          <p>
            For over 180 years, companies have depended on Merrow for customized
            sewing solutions. These stories show how those partnerships perform in
            production.
          </p>
        </header>

        <section className="customer-stories-index-list" aria-label="Featured customer stories">
          {featuredStories.map((story) => (
            <article key={story.appKey} className="customer-story-row">
              <a className="story-image-link" href={story.href}>
                <img
                  src={story.image}
                  width={643}
                  height={200}
                  alt={`${story.title} customer story`}
                />
              </a>
              <div className="story-copy">
                <h2>{story.title}</h2>
                <p>"{story.blurb}"</p>
                <a href={story.href}>Read Customer Story</a>
              </div>
            </article>
          ))}
        </section>

        {additionalStories.length > 0 && (
          <section className="customer-stories-additional" aria-label="More customer stories">
            <h2>Additional Stories</h2>
            <ul>
              {additionalStories.map((story) => (
                <li key={story.id}>
                  <a href={`/customer-stories/featured/${story.appKey}`}>
                    {story.appTitle || story.appKey}
                  </a>
                </li>
              ))}
            </ul>
          </section>
        )}
      </div>

      <style
        dangerouslySetInnerHTML={{
          __html: `
            .customer-stories-index-page {
              min-width: 1040px;
              background: #ebebeb;
              padding: 18px 0 30px;
              color: #333333;
            }
            .customer-stories-index-page .customer-stories-index-shell {
              width: 980px;
              margin: 0 auto;
              font-family: Verdana, Arial, sans-serif;
            }
            .customer-stories-index-page .customer-stories-index-header h1 {
              margin: 0 0 8px;
              font: 28px/34px "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
              color: #2f2f2f;
            }
            .customer-stories-index-page .customer-stories-index-header p {
              margin: 0 0 18px;
              width: 860px;
              color: #666666;
              font: 12px/18px Verdana, Arial, sans-serif;
            }
            .customer-stories-index-page .customer-stories-index-list {
              width: 100%;
            }
            .customer-stories-index-page .customer-story-row {
              width: 100%;
              min-height: 200px;
              margin: 0 0 14px;
              padding: 0 0 14px;
              border-bottom: 1px solid #d5d5d5;
              display: flex;
              align-items: flex-start;
              gap: 18px;
            }
            .customer-stories-index-page .story-image-link img {
              display: block;
              width: 643px;
              height: 200px;
              border: 0;
            }
            .customer-stories-index-page .story-copy {
              width: 300px;
            }
            .customer-stories-index-page .story-copy h2 {
              margin: 0 0 8px;
              font: 24px/28px "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
              color: #333333;
            }
            .customer-stories-index-page .story-copy p {
              margin: 0 0 10px;
              color: #666666;
              font: 12px/18px Verdana, Arial, sans-serif;
            }
            .customer-stories-index-page .story-copy a {
              color: #990000;
              font: bold 11px/16px Verdana, Arial, sans-serif;
              text-decoration: none;
            }
            .customer-stories-index-page .story-copy a:hover {
              text-decoration: underline;
            }
            .customer-stories-index-page .customer-stories-additional {
              margin-top: 12px;
            }
            .customer-stories-index-page .customer-stories-additional h2 {
              margin: 0 0 6px;
              font: bold 14px/18px Verdana, Arial, sans-serif;
              color: #333333;
            }
            .customer-stories-index-page .customer-stories-additional ul {
              margin: 0;
              padding: 0;
              list-style: none;
            }
            .customer-stories-index-page .customer-stories-additional li {
              margin: 0 0 4px;
            }
            .customer-stories-index-page .customer-stories-additional a {
              color: #990000;
              font: 12px/18px Verdana, Arial, sans-serif;
              text-decoration: none;
            }
            .customer-stories-index-page .customer-stories-additional a:hover {
              text-decoration: underline;
            }
          `,
        }}
      />
    </main>
  );
}

export const revalidate = 86400;
