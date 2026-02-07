// @version parts-index v3.0
// Route: /parts
// Legacy-style parts hub with machine-class lookup and documentation links

import { Metadata } from "next";
import { getAllPublishedMachines } from "../../../../packages/data-layer/queries/machines";

export const metadata: Metadata = {
  title: "Merrow Parts & Accessories | Genuine Replacement Parts",
  description:
    "Find genuine Merrow replacement parts and accessories for your industrial sewing machine. Browse by machine class or search by part number.",
};

type LinkItem = {
  label: string;
  href: string;
  external?: boolean;
};

const CLASS_ORDER = ["MG", "70", "CROCHET", "60", "A", "OTHER"];

const CLASS_LABELS: Record<string, string> = {
  MG: "MG Class Machines",
  "70": "70 Class Machines",
  CROCHET: "Crochet Machines",
  "60": "60 Class Machines",
  A: "A Class Machines",
  OTHER: "Other Machines",
};

const PARTS_BOOK_LINKS: LinkItem[] = [
  {
    label: "MG parts book (english)",
    href: "https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/MG/setnum/72157606827670334/setnam/mgpartsbook",
    external: true,
  },
  {
    label: "70 class parts book (english)",
    href: "https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/70/setnum/72157606828138530/setnam/70classbook",
    external: true,
  },
  {
    label: "Crochet parts book (english)",
    href: "https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/crochet/setnum/72157606826978368/setnam/crochet",
    external: true,
  },
  {
    label: "60 Class parts book (english)",
    href: "https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/60/setnum/72157606826047178/setnam/60class",
    external: true,
  },
  {
    label: "A Class parts book (english)",
    href: "https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/A/setnum/72157606832488303/setnam/Aclassparts",
    external: true,
  },
];

const INSTRUCTION_LINKS: LinkItem[] = [
  {
    label: "MG instructions (english)",
    href: "https://www.merrow.com/agent_book/kiwifruit/instructions/language/english/type/MG/setnum/72157606829542814/setnam/mginstructions",
    external: true,
  },
  {
    label: "MG instructions (spanish)",
    href: "https://www.merrow.com/agent_book/kiwifruit/instructions/language/spanish/type/MG/setnum/72157606830005278/setnam/mgpspanishinstruction",
    external: true,
  },
  {
    label: "70 class instructions (english)",
    href: "https://www.merrow.com/agent_book/kiwifruit/instructions/language/english/type/70/setnum/72157606831978449/setnam/70classinstructions",
    external: true,
  },
];

const BUTT_SEAM_LINKS: LinkItem[] = [
  {
    label: "Butt Seam (english)",
    href: "https://www.merrow.com/agent_book/kiwifruit/book/language/english/setnum/72157607489347906/setnam/english_book/type/BS",
    external: true,
  },
  {
    label: "Butt Seam (portuguese)",
    href: "https://www.merrow.com/agent_book/kiwifruit/book/language/portuguese/setnum/72157606583868719/setnam/rivitex_book/type/BS",
    external: true,
  },
  {
    label: "Butt Seam (turkish)",
    href: "https://www.merrow.com/agent_book/kiwifruit/book/language/turkish/setnum/72157606834081591/setnam/turkish_book/type/BS",
    external: true,
  },
  {
    label: "Butt Seam (spanish)",
    href: "https://www.merrow.com/agent_book/kiwifruit/book/language/spanish/setnum/72157606834229615/setnam/spanish_book/type/BS",
    external: true,
  },
  {
    label: "Butt Seam (chinese)",
    href: "https://www.merrow.com/agent_book/kiwifruit/book/language/mandarin/setnum/72157606831254410/setnam/mandarin_book/type/BS",
    external: true,
  },
];

function linkClass() {
  return "text-[12px] leading-[14px] text-[#808080] hover:text-[#af0b0c] hover:underline";
}

function LegacyBox({
  title,
  children,
  className,
}: {
  title: string;
  children: React.ReactNode;
  className?: string;
}) {
  return (
    <div className={`mb-3 rounded border border-[#b7b7b7] bg-[#efefef] p-2 ${className ?? ""}`}>
      <div className="mb-1 text-[13px] font-semibold text-[#b00707]">{title}</div>
      {children}
    </div>
  );
}

function renderLinks(items: LinkItem[]) {
  return (
    <ul className="space-y-1">
      {items.map((item) => (
        <li key={`${item.href}-${item.label}`}>
          <a
            href={item.href}
            className={linkClass()}
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

export default async function PartsPage() {
  const machines = await getAllPublishedMachines();
  const machinesWithParts = machines.filter((machine) => machine.otId && machine.styleKey);

  const grouped = machinesWithParts.reduce<Record<string, typeof machinesWithParts>>((acc, machine) => {
    const classKey = (machine.classKey || "OTHER").toUpperCase();
    const normalized = classKey === "18" ? "CROCHET" : classKey;
    acc[normalized] = acc[normalized] || [];
    acc[normalized].push(machine);
    return acc;
  }, {});

  return (
    <main className="min-w-[1040px] bg-[#ebebeb] text-[#222222]">
      <div className="mx-auto w-[980px] pl-[40px] pt-3 pb-4">
        <div className="mb-3 rounded border border-[#b7b7b7] bg-[#efefef] p-3">
          <h1 className="text-[18px] font-semibold text-[#b00707]">Genuine Merrow Spare Parts</h1>
          <p className="mt-2 text-[12px] leading-[16px] text-[#4c4c4c]">
            Machined to strict tolerances, Merrow maintains inventory for current and legacy models.
            Select your machine below to view compatible parts and reference details.
          </p>
        </div>

        <div className="grid grid-cols-[300px_300px_300px] gap-4">
          <div>
            <div className="mb-2 text-[13px] font-semibold text-[#b00707]">What Machine Would You Like?</div>

            {CLASS_ORDER.filter((classKey) => (grouped[classKey] || []).length > 0).map((classKey) => {
              const entries = [...(grouped[classKey] || [])]
                .sort((a, b) => (a.style || a.styleKey).localeCompare(b.style || b.styleKey))
                .slice(0, 18);

              return (
                <LegacyBox key={classKey} title={CLASS_LABELS[classKey] || classKey}>
                  <ul className="space-y-1">
                    {entries.map((machine) => (
                      <li key={`${classKey}-${machine.styleKey}`}>
                        <a
                          href={`/parts/${machine.otId}/${machine.styleKey}`}
                          className={linkClass()}
                        >
                          {machine.style || machine.styleKey}
                        </a>
                      </li>
                    ))}
                  </ul>
                </LegacyBox>
              );
            })}
          </div>

          <div>
            <LegacyBox title="Need More Help?">
              <div className="text-[12px] leading-[16px] text-[#4c4c4c]">
                If you need assistance identifying a part, contact Merrow directly:
                <br />
                <br />
                Domestic phone: 800.431.6677
                <br />
                International phone: 508.689.4095
                <br />
                Email: parts@merrow.com
                <br />
                Fax: 508.689.4098
              </div>
            </LegacyBox>

            <LegacyBox title="Quick Actions">
              {renderLinks([
                { label: "Contact Parts Department", href: "mailto:parts@merrow.com" },
                { label: "Request a Quote", href: "/support/request-quote" },
                { label: "Locate a Dealer", href: "/agentmap.html" },
                { label: "Support Home", href: "/support" },
              ])}
            </LegacyBox>

            <LegacyBox title="Popular Searches">
              {renderLinks([
                { label: "Needles", href: "/support/class/70/key/setup_needles" },
                { label: "Loopers", href: "/support/class/70/key/setup_loopers" },
                { label: "Feed Dogs", href: "/support/class/70/key/setup_feeddogs" },
                { label: "Presser Feet", href: "/support/class/70/key/setup_presser" },
                { label: "Threading", href: "/support/class/70/key/setup_threading" },
              ])}
            </LegacyBox>
          </div>

          <div>
            <div className="mb-2 text-[13px] font-semibold text-[#b00707]">Merrow Documentation</div>

            <LegacyBox title="Parts Books">
              {renderLinks(PARTS_BOOK_LINKS)}
            </LegacyBox>

            <LegacyBox title="Instruction Manuals">
              {renderLinks(INSTRUCTION_LINKS)}
            </LegacyBox>

            <LegacyBox title="Butt Seam Book">
              {renderLinks(BUTT_SEAM_LINKS)}
            </LegacyBox>
          </div>
        </div>
      </div>
    </main>
  );
}
