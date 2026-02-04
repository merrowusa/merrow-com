// @version 404-page v1.0
//
// Custom 404 page

import { Metadata } from "next";
import { FullBleed, PageHeader, MerrowButton } from "../../../packages/ui";

export const metadata: Metadata = {
  title: "Page Not Found | Merrow",
  description: "The page you're looking for could not be found.",
};

export default function NotFound() {
  return (
    <main className="text-merrow-textMain">
      <FullBleed className="bg-merrow-heroBg min-h-[60vh] flex items-center">
        <div className="mx-auto max-w-merrow px-4 py-16 text-center">
          <PageHeader
            eyebrow="Error 404"
            title="Page Not Found"
            subtitle="The page you're looking for doesn't exist or has been moved."
          />

          <div className="mt-8 space-y-4">
            <p className="text-[13px] text-merrow-textSub">
              Here are some helpful links to get you back on track:
            </p>

            <div className="flex flex-wrap justify-center gap-4">
              <MerrowButton href="/">Go Home</MerrowButton>
              <MerrowButton href="/fashion-sewing">Browse Machines</MerrowButton>
              <MerrowButton href="/sewing/applications">Applications</MerrowButton>
              <MerrowButton href="/agentmap.html">Find an Agent</MerrowButton>
              <MerrowButton href="/support">Get Support</MerrowButton>
            </div>
          </div>

          <div className="mt-12 text-[12px] text-merrow-textMuted">
            <p>
              If you believe this is an error, please{" "}
              <a href="mailto:support@merrow.com" className="text-merrow-link underline">
                contact us
              </a>
              .
            </p>
          </div>
        </div>
      </FullBleed>
    </main>
  );
}
