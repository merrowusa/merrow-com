// @version support-docs-panel v1.1
// Legacy documentation widget rebuilt + redesigned for support pages

import React from "react";
import type { ThreadingDiagram } from "../../../../../packages/data-layer/queries/support";
import {
  SUPPORT_BUTT_SEAM_BOOK_LINKS,
  SUPPORT_INSTRUCTION_MANUAL_LINKS,
  SUPPORT_PARTS_BOOK_LINKS,
  type SupportLinkItem,
} from "../_data/links";

interface DocsPanelProps {
  threadingDiagrams: ThreadingDiagram[];
}

function ListSection({ title, children }: { title: string; children: React.ReactNode }) {
  return (
    <div className="rounded-lg border border-[#e1e1e1] bg-white p-4 shadow-[0_6px_16px_rgba(0,0,0,0.05)]">
      <div className="text-[11px] uppercase tracking-[0.16em] text-merrow-textMuted mb-3">
        {title}
      </div>
      {children}
    </div>
  );
}

function LinkList({ items }: { items: SupportLinkItem[] }) {
  return (
    <ul className="space-y-1">
      {items.map((item) => (
        <li key={`${item.href}-${item.label}`}>
          <a
            className="text-[12px] text-merrow-textSub hover:text-merrow-link"
            href={item.href}
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

export function SupportDocsPanel({ threadingDiagrams }: DocsPanelProps) {
  const diagramLinks = threadingDiagrams.map((diagram) => ({
    label: `Diagram #${diagram.name}`,
    href: `/support/diagram/${encodeURIComponent(diagram.image)}/showthemapicture/ohyeah`,
  }));

  return (
    <aside className="w-full">
      <div className="rounded-xl border border-[#dcdcdc] bg-[#f5f5f5] p-4">
        <div className="text-[12px] uppercase tracking-[0.2em] text-[#8b0000] mb-4">
          Documentation
        </div>

        <div className="space-y-4">
          <ListSection title="Threading Diagrams">
            <ul className="space-y-1 max-h-[220px] overflow-auto pr-1">
              {diagramLinks.length > 0 ? (
                diagramLinks.map((item) => (
                  <li key={item.href}>
                    <a href={item.href} className="text-[12px] text-merrow-textSub hover:text-merrow-link">
                      {item.label}
                    </a>
                  </li>
                ))
              ) : (
                <li className="text-[12px] text-merrow-textMuted">No diagrams found.</li>
              )}
            </ul>
          </ListSection>

          <ListSection title="Parts Books">
            <LinkList items={SUPPORT_PARTS_BOOK_LINKS} />
          </ListSection>

          <ListSection title="Instruction Manuals">
            <LinkList items={SUPPORT_INSTRUCTION_MANUAL_LINKS} />
          </ListSection>

          <ListSection title="Butt Seam Book">
            <LinkList items={SUPPORT_BUTT_SEAM_BOOK_LINKS} />
          </ListSection>
        </div>
      </div>
    </aside>
  );
}
