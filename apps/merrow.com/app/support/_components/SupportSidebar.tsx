// @version support-sidebar v1.1
// Legacy SD menu rebuilt + redesigned for support pages

import React from "react";
import { type SupportLinkItem } from "../_data/links";
import { SUPPORT_SIDEBAR_SECTIONS } from "../_data/sidebar";

function LinkList({ items }: { items: SupportLinkItem[] }) {
  return (
    <ul className="space-y-1">
      {items.map((item) => (
        <li key={item.href + item.label}>
          <a
            href={item.href}
            className="text-[12px] text-merrow-textSub hover:text-merrow-link"
            target={item.external ? "_blank" : undefined}
            rel={item.external ? "noopener noreferrer" : undefined}
          >
            {item.label}
          </a>
        </li>
      ))}
    </ul>
  );
}

function Section({ title, children }: { title: string; children: React.ReactNode }) {
  return (
    <div className="rounded-lg border border-[#e1e1e1] bg-white p-4 shadow-[0_6px_16px_rgba(0,0,0,0.05)]">
      <div className="text-[11px] uppercase tracking-[0.16em] text-merrow-textMuted mb-3">
        {title}
      </div>
      {children}
    </div>
  );
}

function Group({
  heading,
  items,
}: {
  heading?: string;
  items: SupportLinkItem[];
}) {
  return (
    <div>
      {heading ? (
        <div className="mb-1 text-[12px] font-semibold text-merrow-textMain">
          {heading}
        </div>
      ) : null}
      <LinkList items={items} />
    </div>
  );
}

export function SupportSidebar() {
  return (
    <aside className="w-full">
      <div className="rounded-xl border border-[#dcdcdc] bg-[#f5f5f5] p-4">
        <div className="text-[12px] uppercase tracking-[0.2em] text-[#8b0000] mb-4">
          Support Menu
        </div>

        <div className="space-y-4">
          {SUPPORT_SIDEBAR_SECTIONS.map((section) => (
            <Section key={section.title} title={section.title}>
              <div className="space-y-3">
                {section.groups.map((group, index) => (
                  <Group
                    key={`${section.title}-${group.heading || "group"}-${index}`}
                    heading={group.heading}
                    items={group.items}
                  />
                ))}
              </div>
            </Section>
          ))}
        </div>
      </div>
    </aside>
  );
}
