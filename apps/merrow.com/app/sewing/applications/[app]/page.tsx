// @version application-detail v1.0
//
// Route: /sewing/applications/[app]
// Individual application detail page

import { Metadata } from "next";
import { notFound } from "next/navigation";
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
} from "../../../../../../packages/data-layer/queries/applications";

interface PageProps {
  params: Promise<{ app: string }>;
}

export async function generateStaticParams() {
  const keys = await getAllApplicationKeys();
  return keys.map((app) => ({ app }));
}

export async function generateMetadata({ params }: PageProps): Promise<Metadata> {
  const { app } = await params;
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
