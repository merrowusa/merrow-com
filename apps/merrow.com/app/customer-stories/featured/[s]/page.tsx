// @version customer-story-detail v2.0
//
// Route: /customer-stories/featured/[s]
// Legacy ncs1.php-style customer story page

import { Metadata } from "next";
import { notFound } from "next/navigation";
import {
  getStoryByKey,
  getAllStoryKeys,
} from "../../../../../../packages/data-layer/queries/customer-stories";

interface PageProps {
  params: Promise<{ s: string }>;
}

const STORY_NAV = [
  { key: "csrw", label: "FASHION & DESIGN CUSTOMER STORY" },
  { key: "csb", label: "TECHNICAL SEAMING CUSTOMER STORY" },
  { key: "csam", label: "END-TO-END JOINING CUSTOMER STORY" },
];

const LEGACY_STORY_ASSET_BASE =
  "https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/general-http/2011_live";

function storyAsset(storyKey: string, suffix: "03" | "07" | "11" | "15" | "19") {
  return `${LEGACY_STORY_ASSET_BASE}/${storyKey}_${suffix}.gif`;
}

function normalizeCopy(html: string): string {
  return (html || "").replace(/\r\n/g, "<br />");
}

function hrefOrHash(href: string): string {
  return href && href.trim() ? href : "#";
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
    description:
      story.quote?.slice(0, 160) ||
      `Customer story about ${story.appTitle} - Merrow Sewing Machines`,
  };
}

export default async function CustomerStoryPage({ params }: PageProps) {
  const { s } = await params;
  const story = await getStoryByKey(s);

  if (!story) {
    notFound();
  }

  const storyKey = story.appKey || s;
  const sectionsLeft = [
    { title: story.p1Title, content: story.p1 },
    { title: story.p2Title, content: story.p2 },
  ];

  const sectionsRight = [
    { title: story.p3Title, content: story.p3 },
    { title: story.p4Title, content: story.p4 },
  ];

  return (
    <main id="top" className="customer-story-page">
      <div className="customer-story-shell">
        <div className="c_content">
          <div className="top_container_c">
            <img
              src={storyAsset(storyKey, "03")}
              width={698}
              height={87}
              id="logo"
              alt={`${story.appTitle} story`}
            />
            <ul id="customer_links">
              {STORY_NAV.map((item) => (
                <li key={item.key} id={item.key === storyKey ? "active" : undefined}>
                  <a href={`/customer-stories/featured/${item.key}`}>{item.label}</a>
                </li>
              ))}
            </ul>
          </div>

          <div className="splash_container_c">
            <img
              src={storyAsset(storyKey, "07")}
              width={698}
              height={314}
              id="customer"
              alt={`${story.appTitle} customer`}
            />
            {story.quote && (
              <div className="customer_boxes" id="customer">
                <p>"{story.quote}"</p>
                {story.quoteAuthor && <p className="signed">-{story.quoteAuthor}</p>}
              </div>
            )}
          </div>
          <div className="clear" />

          <div className="copy_container_c">
            <div className="left_col">
              {sectionsLeft.map((section) => (
                <section key={`${section.title}-${section.content}`}>
                  {section.title && <div className="c_titles">{section.title}</div>}
                  {section.content && (
                    <p
                      className="c_copy"
                      dangerouslySetInnerHTML={{ __html: normalizeCopy(section.content) }}
                    />
                  )}
                </section>
              ))}
            </div>

            <div className="right_col">
              {sectionsRight.map((section) => (
                <section key={`${section.title}-${section.content}`}>
                  {section.title && <div className="c_titles">{section.title}</div>}
                  {section.content && (
                    <p
                      className="c_copy"
                      dangerouslySetInnerHTML={{ __html: normalizeCopy(section.content) }}
                    />
                  )}
                </section>
              ))}
            </div>
          </div>

          <div className="adbox_container_c">
            <div className="customer_ads" id="boxshadow">
              <div className="ad_title">The Application</div>
              <div className="app_subhead">{story.appTitle}</div>
              <a href={hrefOrHash(story.appLink)}>
                <img src={storyAsset(storyKey, "11")} alt={story.appTitle || "Application"} />
              </a>
              {story.appCopy && (
                <div
                  className="ad_copy"
                  dangerouslySetInnerHTML={{ __html: normalizeCopy(story.appCopy) }}
                />
              )}
            </div>

            <div className="customer_ads" id="boxshadow">
              <div className="ad_title">The Machine</div>
              <div className="app_subhead">{story.machineTitle}</div>
              <a href={hrefOrHash(story.machineLink)}>
                <img src={storyAsset(storyKey, "15")} alt={story.machineTitle || "Machine"} />
              </a>
              {story.machineCopy && (
                <div
                  className="ad_copy"
                  dangerouslySetInnerHTML={{ __html: normalizeCopy(story.machineCopy) }}
                />
              )}
            </div>

            <div className="customer_ads" id="boxshadow">
              <div className="ad_title">The Stitch</div>
              <div className="app_subhead">{story.stitchTitle}</div>
              <a href={hrefOrHash(story.stitchLink)}>
                <img src={storyAsset(storyKey, "19")} alt={story.stitchTitle || "Stitch"} />
              </a>
              {story.stitchCopy && (
                <div
                  className="ad_copy"
                  dangerouslySetInnerHTML={{ __html: normalizeCopy(story.stitchCopy) }}
                />
              )}
            </div>
          </div>

          <div className="clear" />
          <div className="back_to_top">
            <a href="#top">Back to the Top</a>
          </div>
        </div>
      </div>
      <style
        dangerouslySetInnerHTML={{
          __html: `
            .customer-story-page {
              min-width: 1040px;
              background: #ebebeb;
            }
            .customer-story-page .customer-story-shell {
              width: 980px;
              margin: 0 auto;
              padding: 18px 0 8px 40px;
              box-sizing: content-box;
            }
            .customer-story-page .c_content {
              width: 980px;
            }
            .customer-story-page .top_container_c {
              width: 100%;
              height: 90px;
            }
            .customer-story-page img#logo {
              float: left;
              display: block;
            }
            .customer-story-page ul#customer_links {
              float: right;
              margin-top: 20px;
              margin-right: 0;
              padding-left: 0;
            }
            .customer-story-page ul#customer_links li {
              float: none;
              list-style: none;
              margin: 0;
              padding: 0;
            }
            .customer-story-page ul#customer_links li a {
              font-size: 11px;
              line-height: 18px;
              color: #666666;
            }
            .customer-story-page ul#customer_links li#active a {
              color: #990000;
            }
            .customer-story-page ul#customer_links li a:hover {
              color: #000000;
            }
            .customer-story-page .splash_container_c {
              width: 100%;
              height: 314px;
              margin-bottom: 20px;
            }
            .customer-story-page .splash_container_c img#customer {
              float: left;
              display: block;
            }
            .customer-story-page div#customer.customer_boxes {
              width: 275px;
              height: 314px;
              float: right;
              background-color: #666666;
              border-radius: 5px;
            }
            .customer-story-page div#customer.customer_boxes p {
              color: #ffffff;
              font-size: 14px;
              padding: 20px;
              line-height: 20px;
              margin: 0;
            }
            .customer-story-page p.signed {
              text-align: right;
            }
            .customer-story-page .copy_container_c {
              width: 698px;
              height: 500px;
              float: left;
            }
            .customer-story-page .left_col {
              width: 48%;
              float: left;
            }
            .customer-story-page .right_col {
              width: 48%;
              float: right;
            }
            .customer-story-page .c_titles {
              font-size: 20px;
              margin-bottom: 10px;
              color: #333333;
            }
            .customer-story-page p.c_copy {
              color: #808080;
              font: 12px/18px Verdana, Arial, sans-serif;
              margin: 0 0 20px;
            }
            .customer-story-page .adbox_container_c {
              float: right;
              width: 255px;
            }
            .customer-story-page #boxshadow.customer_ads {
              height: 175px;
              margin-top: 10px;
              background-color: #ffffff;
              border-radius: 6px;
              box-shadow: 0 0 10px 2px #888888;
              overflow: hidden;
            }
            .customer-story-page .customer_ads img {
              display: block;
            }
            .customer-story-page .ad_title {
              text-shadow: #000000 0 0 0;
              color: #ffffff;
              font-family: Verdana, Arial, sans-serif;
              padding: 2px 0 3px 10px;
              background-color: #333333;
            }
            .customer-story-page .app_subhead {
              margin: 10px 10px 0;
              color: #333333;
              font-size: 12px;
              font-weight: bold;
            }
            .customer-story-page .ad_copy {
              font-size: 11px;
              margin: 10px;
              line-height: 18px;
              color: #4c4c4c;
            }
            .customer-story-page .back_to_top {
              text-align: right;
              padding: 10px 0 0;
              font-size: 11px;
            }
          `,
        }}
      />
    </main>
  );
}

export const revalidate = 86400; // ISR: 24 hours
