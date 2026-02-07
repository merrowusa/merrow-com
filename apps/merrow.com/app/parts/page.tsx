// @version parts-index v3.0
// Route: /parts
// Legacy-style parts hub with machine-class lookup and documentation links

import { Metadata } from "next";
import Link from "next/link";
import { getAllPublishedMachines } from "../../../../packages/data-layer/queries/machines";
import {
  getPartsQuickActionLinks,
  PARTS_CLASS_LABELS,
  PARTS_CLASS_ORDER,
  PARTS_POPULAR_SEARCH_LINKS,
} from "./_data/content";
import { PartsLookupForm } from "./_components/PartsLookupForm";
import {
  LegacyBox,
  LegacyLinkList,
  LEGACY_SUPPORT_LINK_CLASS,
  LegacySupportPage,
} from "../support/_components/LegacySupportPrimitives";
import {
  SUPPORT_BUTT_SEAM_BOOK_LINKS,
  SUPPORT_CONTACT,
  SUPPORT_INSTRUCTION_MANUAL_LINKS,
  SUPPORT_PARTS_BOOK_LINKS,
} from "../support/_data/links";

export const metadata: Metadata = {
  title: "Merrow Parts & Accessories | Genuine Replacement Parts",
  description:
    "Find genuine Merrow replacement parts and accessories for your industrial sewing machine. Browse by machine class or search by part number.",
};

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
    <LegacySupportPage>
      <div className="mb-3 rounded border border-[#b7b7b7] bg-[#efefef] p-3">
        <h1 className="text-[18px] font-semibold text-[#b00707]">Genuine Merrow Spare Parts</h1>
        <p className="mt-2 text-[12px] leading-[16px] text-[#4c4c4c]">
          Machined to strict tolerances, Merrow maintains inventory for current and legacy models.
          Select your machine below to view compatible parts and reference details.
        </p>
      </div>

      <PartsLookupForm />

      <div className="grid grid-cols-[300px_300px_300px] gap-4">
        <div>
          <div className="mb-2 text-[13px] font-semibold text-[#b00707]">What Machine Would You Like?</div>

          {PARTS_CLASS_ORDER
            .filter((classKey) => (grouped[classKey] || []).length > 0)
            .map((classKey) => {
              const entries = [...(grouped[classKey] || [])]
                .sort((a, b) => (a.style || a.styleKey).localeCompare(b.style || b.styleKey))
                .slice(0, 18);

              return (
                <LegacyBox key={classKey} title={PARTS_CLASS_LABELS[classKey] || classKey}>
                  <ul className="space-y-1">
                    {entries.map((machine) => (
                      <li key={`${classKey}-${machine.styleKey}`}>
                        <Link
                          href={`/parts/${encodeURIComponent(machine.styleKey)}/${encodeURIComponent(machine.styleKey)}`}
                          className={LEGACY_SUPPORT_LINK_CLASS}
                        >
                          {machine.style || machine.styleKey}
                        </Link>
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
              International phone: {SUPPORT_CONTACT.supportPhoneDisplay}
              <br />
              Email: {SUPPORT_CONTACT.partsEmail}
              <br />
              Fax: 508.689.4098
            </div>
          </LegacyBox>

          <LegacyBox title="Quick Actions">
            <LegacyLinkList items={getPartsQuickActionLinks()} />
          </LegacyBox>

          <LegacyBox title="Popular Searches">
            <LegacyLinkList items={PARTS_POPULAR_SEARCH_LINKS} />
          </LegacyBox>
        </div>

        <div>
          <div className="mb-2 text-[13px] font-semibold text-[#b00707]">Merrow Documentation</div>

          <LegacyBox title="Parts Books">
            <LegacyLinkList items={SUPPORT_PARTS_BOOK_LINKS} />
          </LegacyBox>

          <LegacyBox title="Instruction Manuals">
            <LegacyLinkList items={SUPPORT_INSTRUCTION_MANUAL_LINKS} />
          </LegacyBox>

          <LegacyBox title="Butt Seam Book">
            <LegacyLinkList items={SUPPORT_BUTT_SEAM_BOOK_LINKS} />
          </LegacyBox>
        </div>
      </div>
    </LegacySupportPage>
  );
}
