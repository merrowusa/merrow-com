// @version applications-strip v1.0
// Application tiles for machine detail pages

import Link from "next/link";
import type { ApplicationPage } from "../../../../../packages/data-layer/queries/applications";

interface ApplicationsStripProps {
  applications: ApplicationPage[];
  fallbackPrimary?: string;
  fallbackSecondary?: string;
}

const APP_IMAGE_BASE = "https://merrow-media.s3.amazonaws.com/applications";

export function ApplicationsStrip({
  applications,
  fallbackPrimary,
  fallbackSecondary,
}: ApplicationsStripProps) {
  if (!applications.length) {
    if (!fallbackPrimary && !fallbackSecondary) return null;
    return (
      <section>
        <h2 className="text-lg font-semibold tracking-tight mb-4">Applications</h2>
        <div className="space-y-2 text-[13px] text-merrow-textSub">
          {fallbackPrimary && (
            <p>
              <span className="font-semibold">Primary:</span> {fallbackPrimary}
            </p>
          )}
          {fallbackSecondary && (
            <p>
              <span className="font-semibold">Secondary:</span> {fallbackSecondary}
            </p>
          )}
        </div>
      </section>
    );
  }

  return (
    <section>
      <div className="flex items-baseline justify-between">
        <h2 className="text-lg font-semibold tracking-tight">Applications</h2>
        <Link href="/sewing/applications" className="text-[12px] text-merrow-link hover:underline">
          View all applications
        </Link>
      </div>
      <div className="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
        {applications.map((app) => {
          const imageUrl = `${APP_IMAGE_BASE}/${app.dKey}_thumb_300x150.jpg`;
          return (
            <Link
              key={app.dKey}
              href={`/sewing/applications/${app.dKey}`}
              className="group rounded-xl border border-[#e1e1e1] bg-white shadow-[0_6px_16px_rgba(0,0,0,0.05)]"
            >
              <img
                src={imageUrl}
                alt={app.appMenuTitle}
                className="h-[150px] w-full rounded-t-xl object-cover"
              />
              <div className="px-4 py-3">
                <div className="text-[12px] uppercase tracking-[0.16em] text-merrow-textMuted">
                  Application
                </div>
                <div className="mt-1 text-[14px] font-semibold text-merrow-textMain group-hover:text-merrow-link">
                  {app.appMenuTitle || app.appTitle}
                </div>
              </div>
            </Link>
          );
        })}
      </div>
    </section>
  );
}
