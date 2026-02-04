// @version support-docs-panel v1.1
// Legacy documentation widget rebuilt + redesigned for support pages

import React from "react";
import type { ThreadingDiagram } from "../../../../../packages/data-layer/queries/support";

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
            <ul className="space-y-1">
              <li><a className="text-[12px] text-merrow-textSub hover:text-merrow-link" href="https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/MG/setnum/72157606827670334/setnam/mgpartsbook" target="_blank" rel="noopener noreferrer">MG parts book (english)</a></li>
              <li><a className="text-[12px] text-merrow-textSub hover:text-merrow-link" href="https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/70/setnum/72157606828138530/setnam/70classbook" target="_blank" rel="noopener noreferrer">70 class parts book (english)</a></li>
              <li><a className="text-[12px] text-merrow-textSub hover:text-merrow-link" href="https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/crochet/setnum/72157606826978368/setnam/crochet" target="_blank" rel="noopener noreferrer">Crochet parts book (english)</a></li>
              <li><a className="text-[12px] text-merrow-textSub hover:text-merrow-link" href="https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/60/setnum/72157606826047178/setnam/60class" target="_blank" rel="noopener noreferrer">60 class parts book (english)</a></li>
              <li><a className="text-[12px] text-merrow-textSub hover:text-merrow-link" href="https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/A/setnum/72157606832488303/setnam/Aclassparts" target="_blank" rel="noopener noreferrer">A class parts book (english)</a></li>
            </ul>
          </ListSection>

          <ListSection title="Instruction Manuals">
            <ul className="space-y-1">
              <li><a className="text-[12px] text-merrow-textSub hover:text-merrow-link" href="https://www.merrow.com/agent_book/kiwifruit/instructions/language/english/type/MG/setnum/72157606829542814/setnam/mginstructions" target="_blank" rel="noopener noreferrer">MG instructions (english)</a></li>
              <li><a className="text-[12px] text-merrow-textSub hover:text-merrow-link" href="https://www.merrow.com/agent_book/kiwifruit/instructions/language/spanish/type/MG/setnum/72157606830005278/setnam/mgpspanishinstruction" target="_blank" rel="noopener noreferrer">MG instructions (spanish)</a></li>
              <li><a className="text-[12px] text-merrow-textSub hover:text-merrow-link" href="https://www.merrow.com/agent_book/kiwifruit/instructions/language/english/type/70/setnum/72157606831978449/setnam/70classinstructions" target="_blank" rel="noopener noreferrer">70 class instructions (english)</a></li>
            </ul>
          </ListSection>

          <ListSection title="Butt Seam Book">
            <ul className="space-y-1">
              <li><a className="text-[12px] text-merrow-textSub hover:text-merrow-link" href="https://www.merrow.com/agent_book/kiwifruit/book/language/english/setnum/72157607489347906/setnam/english_book/type/BS" target="_blank" rel="noopener noreferrer">Butt Seam (english)</a></li>
              <li><a className="text-[12px] text-merrow-textSub hover:text-merrow-link" href="https://www.merrow.com/agent_book/kiwifruit/book/language/portuguese/setnum/72157606583868719/setnam/rivitex_book/type/BS" target="_blank" rel="noopener noreferrer">Butt Seam (portuguese)</a></li>
              <li><a className="text-[12px] text-merrow-textSub hover:text-merrow-link" href="https://www.merrow.com/agent_book/kiwifruit/book/language/turkish/setnum/72157606834081591/setnam/turkish_book/type/BS" target="_blank" rel="noopener noreferrer">Butt Seam (turkish)</a></li>
              <li><a className="text-[12px] text-merrow-textSub hover:text-merrow-link" href="https://www.merrow.com/agent_book/kiwifruit/book/language/spanish/setnum/72157606834229615/setnam/spanish_book/type/BS" target="_blank" rel="noopener noreferrer">Butt Seam (spanish)</a></li>
              <li><a className="text-[12px] text-merrow-textSub hover:text-merrow-link" href="https://www.merrow.com/agent_book/kiwifruit/book/language/mandarin/setnum/72157606831254410/setnam/mandarin_book/type/BS" target="_blank" rel="noopener noreferrer">Butt Seam (chinese)</a></li>
            </ul>
          </ListSection>
        </div>
      </div>
    </aside>
  );
}
