// @version applications-index v1.0
//
// Route: /sewing/applications
// Index page listing all sewing applications

import { Metadata } from "next";
import {
  FullBleed,
  PageHeader,
  MerrowButton,
} from "../../../../../packages/ui";
import {
  getAllPublishedApplications,
  getAllApplicationCategories,
} from "../../../../../packages/data-layer/queries/applications";

export const metadata: Metadata = {
  title: "Industrial Sewing Applications | Merrow",
  description:
    "Explore Merrow's sewing applications - from emblem edging to blanket binding, find the right machine for your application.",
};

export default async function ApplicationsIndexPage() {
  const applications = await getAllPublishedApplications();
  const categories = await getAllApplicationCategories();

  // Group applications by category
  const appsByCategory = categories.map((cat) => ({
    category: cat,
    apps: applications.filter((app) => app.appKey === cat.appKey),
  }));

  return (
    <main className="text-merrow-textMain">
      {/* Hero section */}
      <FullBleed className="bg-merrow-heroBg border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <div className="text-center">
            <PageHeader
              eyebrow="Merrow Applications"
              title="Sewing Applications"
              subtitle="Find the right Merrow machine for your specific application."
            />
          </div>
          <div className="mt-6 flex justify-center">
            <p className="max-w-[700px] text-center text-[13px] leading-[18px] text-merrow-textSub">
              Merrow machines are used in over 70 different sewing applications
              across industries. Browse by category to find the machine that
              best fits your needs.
            </p>
          </div>
        </div>
      </FullBleed>

      {/* Applications by category */}
      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-10">
          <h2 className="text-lg font-semibold tracking-tight mb-6">
            All Applications ({applications.length})
          </h2>

          {appsByCategory.length > 0 ? (
            <div className="space-y-10">
              {appsByCategory
                .filter((group) => group.apps.length > 0)
                .map((group) => (
                  <section key={group.category.id}>
                    <h3 className="text-[14px] font-semibold text-merrow-textMain mb-4 border-b border-merrow-border pb-2">
                      {group.category.appCategoryName}
                    </h3>
                    <div className="grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                      {group.apps.map((app) => (
                        <a
                          key={app.id}
                          href={`/sewing/applications/${app.dKey}`}
                          className="block border border-merrow-border rounded px-4 py-3 hover:bg-merrow-heroBg transition-colors"
                        >
                          <p className="text-[13px] font-semibold text-merrow-textMain">
                            {app.appTitle}
                          </p>
                          {app.appMenuTitle && app.appMenuTitle !== app.appTitle && (
                            <p className="mt-1 text-[11px] text-merrow-textMuted">
                              {app.appMenuTitle}
                            </p>
                          )}
                        </a>
                      ))}
                    </div>
                  </section>
                ))}
            </div>
          ) : (
            <p className="text-merrow-textMuted text-[13px]">
              No applications found. Please check database connection.
            </p>
          )}
        </div>
      </FullBleed>

      {/* CTA section */}
      <FullBleed className="bg-merrow-footerBg">
        <div className="mx-auto max-w-merrow px-4 py-10 text-center">
          <h2 className="text-[20px] font-light text-white">
            Don't see your application?
          </h2>
          <p className="mt-2 text-[13px] text-[#d7d7d7]">
            Contact our team to discuss your specific sewing requirements.
          </p>
          <div className="mt-4 flex justify-center gap-4">
            <MerrowButton href="/support/request-quote">
              Request a Quote
            </MerrowButton>
            <MerrowButton href="/contact_general.html">
              Contact Us
            </MerrowButton>
          </div>
        </div>
      </FullBleed>
    </main>
  );
}

export const revalidate = 86400; // ISR: 24 hours
