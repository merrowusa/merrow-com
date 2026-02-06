// @version application-detail v1.0
//
// Route: /sewing/applications/[app]
// Individual application detail page

import { Metadata } from "next";
import { notFound, redirect } from "next/navigation";
import {
  FullBleed,
  PageHeader,
  RichText,
  SpecGrid,
  MerrowButton,
} from "../../../../../../packages/ui";
import {
  getApplicationByKey,
  getAllApplicationKeys,
  getApplicationCategoryByKey,
  getApplicationsByCategory,
  CATEGORY_SLUGS,
  CATEGORY_SLUG_TO_KEY,
} from "../../../../../../packages/data-layer/queries/applications";

interface PageProps {
  params: Promise<{ app: string }>;
}

export async function generateStaticParams() {
  const keys = await getAllApplicationKeys();
  const categorySlugs = Object.values(CATEGORY_SLUGS);
  const allParams = [...keys, ...categorySlugs];
  return Array.from(new Set(allParams)).map((app) => ({ app }));
}

export async function generateMetadata({ params }: PageProps): Promise<Metadata> {
  const { app } = await params;
  const numericKey = Number(app);
  if (!Number.isNaN(numericKey) && String(numericKey) === app) {
    const slug = CATEGORY_SLUGS[numericKey];
    if (slug) {
      const category = await getApplicationCategoryByKey(numericKey);
      if (!category) {
        return { title: "Applications | Merrow" };
      }
      return {
        title:
          category.appCategorySeoTitle ||
          `${category.appCategoryName} | Merrow`,
        description:
          category.appCategorySeoDescription ||
          `${category.appCategoryName} applications by Merrow`,
      };
    }
  }

  const categoryKey = CATEGORY_SLUG_TO_KEY[app];
  if (categoryKey) {
    const category = await getApplicationCategoryByKey(categoryKey);
    if (!category) {
      return { title: "Applications | Merrow" };
    }
    return {
      title:
        category.appCategorySeoTitle ||
        `${category.appCategoryName} | Merrow`,
      description:
        category.appCategorySeoDescription ||
        `${category.appCategoryName} applications by Merrow`,
    };
  }

  const application = await getApplicationByKey(app);

  if (!application) {
    return { title: "Application Not Found | Merrow" };
  }

  return {
    title: application.seoTitle || `${application.appTitle} | Merrow`,
    description:
      typeof application.seoDescription === "string"
        ? application.seoDescription
        : `${application.appTitle} - Sewing application by Merrow`,
  };
}

export default async function ApplicationDetailPage({ params }: PageProps) {
  const { app } = await params;
  const numericKey = Number(app);
  if (!Number.isNaN(numericKey) && String(numericKey) === app) {
    const slug = CATEGORY_SLUGS[numericKey];
    if (slug) {
      redirect(`/sewing/applications/${slug}`);
    }
  }

  const categoryKey = CATEGORY_SLUG_TO_KEY[app];
  if (categoryKey) {
    const category = await getApplicationCategoryByKey(categoryKey);
    if (!category) {
      notFound();
    }
    const applications = (await getApplicationsByCategory(categoryKey)).filter(
      (item) => item.publish === "yes"
    );

    return (
      <main className="text-merrow-textMain">
        <FullBleed className="bg-merrow-heroBg border-b border-merrow-border">
          <div className="mx-auto max-w-merrow px-4 py-12">
            <PageHeader
              eyebrow="Sewing Applications"
              title={category.appCategoryName}
              subtitle={
                category.appCategoryShortName
                  ? `${category.appCategoryShortName} Applications`
                  : "Applications"
              }
            />
            {category.appCategorySeoDescription && (
              <p className="mt-4 max-w-3xl text-[13px] leading-[18px] text-merrow-textSub">
                {category.appCategorySeoDescription}
              </p>
            )}
          </div>
        </FullBleed>

        <FullBleed className="bg-white">
          <div className="mx-auto max-w-merrow px-4 py-10">
            {applications.length === 0 ? (
              <p className="text-[13px] text-merrow-textSub">
                No applications are available for this category yet.
              </p>
            ) : (
              <div className="grid gap-6 md:grid-cols-2">
                {applications.map((item) => (
                  <div
                    key={item.dKey}
                    className="rounded-xl border border-merrow-border bg-white p-6 shadow-[0_6px_16px_rgba(0,0,0,0.05)]"
                  >
                    <h3 className="text-[16px] font-semibold text-merrow-textMain">
                      {item.appMenuTitle || item.appTitle}
                    </h3>
                    {item.appRightP && (
                      <p className="mt-2 text-[13px] leading-[18px] text-merrow-textSub">
                        {item.appRightP}
                      </p>
                    )}
                    <div className="mt-4">
                      <MerrowButton href={`/sewing/applications/${item.dKey}`}>
                        View Application
                      </MerrowButton>
                    </div>
                  </div>
                ))}
              </div>
            )}
          </div>
        </FullBleed>
      </main>
    );
  }

  const application = await getApplicationByKey(app);

  if (!application) {
    notFound();
  }

  const specs = [
    { label: "Stitch Width", value: application.stitchWidth },
    { label: "Machine Speed", value: application.machineSpeed },
    { label: "Fabric Material", value: application.fabricMaterial },
    {
      label: "Thread Count",
      value: application.threadNumber ? String(application.threadNumber) : "",
    },
    { label: "Thread Material", value: application.threadMaterial },
    { label: "Machine Model", value: application.machineModel },
    { label: "Price Range", value: application.machinePrice },
  ];

  return (
    <main className="text-merrow-textMain">
      {/* Hero section */}
      <FullBleed className="bg-merrow-heroBg border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <PageHeader
            eyebrow="Sewing Application"
            title={application.appTitle}
            subtitle={application.popupSubtitle || undefined}
          />

          {application.machineUrl && (
            <div className="mt-6">
              <MerrowButton href={application.machineUrl}>
                View Machine
              </MerrowButton>
            </div>
          )}
        </div>
      </FullBleed>

      {/* Specs section */}
      <FullBleed className="bg-white border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-8">
          <SpecGrid specs={specs} />
        </div>
      </FullBleed>

      {/* Content sections */}
      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-8">
          <div className="grid gap-8 md:grid-cols-2">
            {application.popup1stColumn && (
              <div>
                <h3 className="text-sm font-semibold tracking-tight text-slate-800 mb-2">
                  {application.popupTitle || "Overview"}
                </h3>
                <RichText html={application.popup1stColumn} />
              </div>
            )}
            {application.popup2ndColumn && (
              <div>
                <h3 className="text-sm font-semibold tracking-tight text-slate-800 mb-2">
                  Details
                </h3>
                <RichText html={application.popup2ndColumn} />
              </div>
            )}
          </div>

          {application.appRightP && (
            <div className="mt-8">
              <h3 className="text-sm font-semibold tracking-tight text-slate-800 mb-2">
                {application.appRightTitle || "Additional Information"}
              </h3>
              <p className="text-[13px] leading-[18px] text-merrow-textSub">
                {application.appRightP}
              </p>
            </div>
          )}
        </div>
      </FullBleed>

      {/* CTA section */}
      <FullBleed className="bg-merrow-footerBg">
        <div className="mx-auto max-w-merrow px-4 py-10 text-center">
          <h2 className="text-[20px] font-light text-white">
            Ready to get started with {application.appTitle}?
          </h2>
          <p className="mt-2 text-[13px] text-[#d7d7d7]">
            Contact our team for more information and pricing.
          </p>
          <div className="mt-4 flex flex-wrap justify-center gap-4">
            <MerrowButton href="/support/request-quote">
              Request a Quote
            </MerrowButton>
            <MerrowButton href="/contact_general.html">
              Contact Us
            </MerrowButton>
            <MerrowButton href="/sewing/applications">
              All Applications
            </MerrowButton>
          </div>
        </div>
      </FullBleed>
    </main>
  );
}

export const revalidate = 86400; // ISR: 24 hours
