// @version parts-index v2.0
// Route: /parts - Parts index page

import { Metadata } from "next";
import Link from "next/link";
import { getAllPublishedMachines } from "../../../../packages/data-layer/queries/machines";

export const metadata: Metadata = {
  title: "Merrow Parts & Accessories | Genuine Replacement Parts",
  description:
    "Find genuine Merrow replacement parts and accessories for your industrial sewing machine. Browse by machine class or search by part number.",
};

const PARTS_BOOK_LINKS = [
  {
    label: "MG class parts book",
    href: "https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/MG/setnum/72157606827670334/setnam/mgpartsbook",
  },
  {
    label: "70 class parts book",
    href: "https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/70/setnum/72157606828138530/setnam/70classbook",
  },
  {
    label: "Crochet (18-35) parts book",
    href: "https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/crochet/setnum/72157606826978368/setnam/crochet",
  },
  {
    label: "60 class parts book",
    href: "https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/60/setnum/72157606826047178/setnam/60class",
  },
  {
    label: "A class parts book",
    href: "https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/A/setnum/72157606832488303/setnam/Aclassparts",
  },
];

const CLASS_LABELS: Record<string, string> = {
  MG: "MG Class Machines",
  70: "70 Class Machines",
  CROCHET: "Crochet (18-35) Machines",
  60: "60 Class Machines",
  A: "A Class Machines",
};

export default async function PartsPage() {
  const machines = await getAllPublishedMachines();
  const machinesWithParts = machines.filter((machine) => machine.otId && machine.styleKey);

  const machinesByClass = machinesWithParts.reduce<Record<string, typeof machinesWithParts>>(
    (acc, machine) => {
      const key = machine.classKey || "OTHER";
      acc[key] = acc[key] || [];
      acc[key].push(machine);
      return acc;
    },
    {},
  );

  return (
    <main className="text-merrow-textMain">
      <div className="mx-auto max-w-merrow px-4 py-12">
        <h1 className="text-2xl font-semibold mb-4">Parts & Accessories</h1>

        {/* Intro paragraph */}
        <p className="text-merrow-textSub mb-4 max-w-[700px]">
          Genuine Merrow replacement parts keep your machines running at peak performance.
          Our parts department stocks components for all current and many legacy machine models.
        </p>

        {/* What you'll find */}
        <div className="mb-8">
          <h2 className="text-sm font-semibold uppercase tracking-wide text-merrow-textMuted mb-2">
            Available Parts
          </h2>
          <ul className="text-sm text-merrow-textSub space-y-1">
            <li>• Needles, loopers, and thread guides</li>
            <li>• Feed dogs, presser feet, and stitch plates</li>
            <li>• Motors, pulleys, and drive components</li>
            <li>• Oils, lubricants, and maintenance supplies</li>
          </ul>
        </div>

        {/* Action cards */}
        <div className="grid gap-6 md:grid-cols-2 mb-10">
          <Link
            href="/support/request-quote"
            className="block p-6 border border-merrow-border rounded-lg hover:bg-merrow-heroBg"
          >
            <h2 className="font-semibold">Request a Quote</h2>
            <p className="text-sm text-merrow-textSub">
              Get pricing for parts and accessories
            </p>
          </Link>
          <Link
            href="/support"
            className="block p-6 border border-merrow-border rounded-lg hover:bg-merrow-heroBg"
          >
            <h2 className="font-semibold">Contact Parts Department</h2>
            <p className="text-sm text-merrow-textSub">
              Speak with our parts specialists
            </p>
          </Link>
        </div>

        {/* Parts books */}
        <div className="mb-10">
          <h2 className="text-sm font-semibold uppercase tracking-wide text-merrow-textMuted mb-2">
            Parts Books by Machine Class
          </h2>
          <div className="grid gap-3 md:grid-cols-2">
            {PARTS_BOOK_LINKS.map((item) => (
              <a
                key={item.href}
                href={item.href}
                target="_blank"
                rel="noopener noreferrer"
                className="rounded-lg border border-merrow-border p-4 text-sm text-merrow-textSub hover:bg-merrow-heroBg"
              >
                {item.label}
              </a>
            ))}
          </div>
        </div>

        {/* Popular parts by class */}
        <div className="mb-10">
          <h2 className="text-sm font-semibold uppercase tracking-wide text-merrow-textMuted mb-2">
            Popular Parts by Class
          </h2>
          <div className="grid gap-6 md:grid-cols-2">
            {Object.entries(machinesByClass).map(([classKey, list]) => {
              const label = CLASS_LABELS[classKey] || `${classKey} Machines`;
              const topMachines = [...list]
                .sort((a, b) => (a.header || a.style).localeCompare(b.header || b.style))
                .slice(0, 6);

              return (
                <div key={classKey} className="rounded-lg border border-merrow-border p-4">
                  <div className="text-[12px] uppercase tracking-[0.16em] text-merrow-textMuted mb-3">
                    {label}
                  </div>
                  <ul className="space-y-1 text-sm text-merrow-textSub">
                    {topMachines.map((machine) => (
                      <li key={`${classKey}-${machine.styleKey}`}>
                        <Link
                          href={`/parts/${machine.otId}/${machine.styleKey}`}
                          className="text-merrow-link hover:underline"
                        >
                          Parts for {machine.header || machine.style}
                        </Link>
                      </li>
                    ))}
                  </ul>
                </div>
              );
            })}
          </div>
        </div>

        {/* How to order */}
        <div className="bg-merrow-heroBg border border-merrow-border rounded-lg p-6 mb-10">
          <h2 className="font-semibold mb-2">How to Order Parts</h2>
          <p className="text-sm text-merrow-textSub mb-3">
            To order replacement parts, have your machine model number ready and contact us:
          </p>
          <div className="text-sm space-y-1">
            <p>Email: <a href="mailto:parts@merrow.com" className="text-merrow-link">parts@merrow.com</a></p>
            <p>Phone: 508.689.4095</p>
          </div>
        </div>

        {/* Related pages */}
        <div className="border-t border-merrow-border pt-6">
          <h2 className="text-sm font-semibold uppercase tracking-wide text-merrow-textMuted mb-3">
            Related
          </h2>
          <div className="flex flex-wrap gap-4 text-sm">
            <Link href="/support" className="text-merrow-link hover:underline">
              Support Center
            </Link>
            <Link href="/machines" className="text-merrow-link hover:underline">
              Machine Catalog
            </Link>
            <Link href="/agentmap.html" className="text-merrow-link hover:underline">
              Find a Dealer
            </Link>
          </div>
        </div>
      </div>
    </main>
  );
}
