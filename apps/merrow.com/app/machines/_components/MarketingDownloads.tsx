// @version marketing-downloads v1.0
// Download links for marketing materials

import React from "react";

interface MarketingDownloadsProps {
  items: Array<{ url: string; icon: string; tagline: string }>;
}

export function MarketingDownloads({ items }: MarketingDownloadsProps) {
  const validItems = items.filter((item) => item.url);
  if (!validItems.length) return null;

  return (
    <section>
      <div className="text-[12px] uppercase tracking-[0.16em] text-merrow-textMuted">
        Downloads & Resources
      </div>
      <div className="mt-4 grid gap-4 sm:grid-cols-2">
        {validItems.map((item) => (
          <a
            key={item.url}
            href={item.url}
            target="_blank"
            rel="noopener noreferrer"
            className="flex items-center gap-3 rounded-xl border border-[#e1e1e1] bg-white p-4 shadow-[0_6px_16px_rgba(0,0,0,0.05)]"
          >
            <div className="flex h-10 w-10 items-center justify-center rounded-full border border-[#d7d7d7] bg-[#f5f5f5] text-[11px] font-semibold text-merrow-textMuted">
              PDF
            </div>
            <div>
              <div className="text-[13px] font-semibold text-merrow-textMain">
                {item.tagline || "Download"}
              </div>
              <div className="text-[12px] text-merrow-textSub">Open document</div>
            </div>
          </a>
        ))}
      </div>
    </section>
  );
}
