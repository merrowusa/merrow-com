// @version parts-detail v1.0
//
// Route: /parts/[cp]/[mmc_code]
// Parts lookup page for specific machine and part code

import { Metadata } from "next";
import {
  FullBleed,
  PageHeader,
  MerrowButton,
} from "../../../../../../packages/ui";

interface PageProps {
  params: Promise<{ cp: string; mmc_code: string }>;
}

export async function generateMetadata({ params }: PageProps): Promise<Metadata> {
  const { cp, mmc_code } = await params;
  return {
    title: `Parts: ${cp} - ${mmc_code} | Merrow`,
    description: `Find parts for Merrow machine ${cp}, part code ${mmc_code}.`,
  };
}

export default async function PartsDetailPage({ params }: PageProps) {
  const { cp, mmc_code } = await params;

  // TODO: Fetch parts data from database based on cp and mmc_code
  // For now, display a placeholder with contact information

  return (
    <main className="text-merrow-textMain">
      {/* Hero section */}
      <FullBleed className="bg-merrow-heroBg border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <PageHeader
            eyebrow={`Machine: ${cp.toUpperCase()}`}
            title={`Part: ${mmc_code}`}
            subtitle="Parts information and ordering"
          />
        </div>
      </FullBleed>

      {/* Parts content */}
      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-10">
          <div className="border border-merrow-border rounded-lg p-6 bg-merrow-heroBg">
            <h2 className="text-lg font-semibold tracking-tight mb-4">
              Part Information
            </h2>
            <div className="grid gap-4 md:grid-cols-2">
              <div>
                <p className="text-[11px] uppercase tracking-[0.12em] text-merrow-textMuted mb-1">
                  Machine Code
                </p>
                <p className="text-[14px] font-semibold text-merrow-textMain">
                  {cp.toUpperCase()}
                </p>
              </div>
              <div>
                <p className="text-[11px] uppercase tracking-[0.12em] text-merrow-textMuted mb-1">
                  Part Code (MMC)
                </p>
                <p className="text-[14px] font-semibold text-merrow-textMain">
                  {mmc_code}
                </p>
              </div>
            </div>
          </div>

          <div className="mt-8">
            <h2 className="text-lg font-semibold tracking-tight mb-4">
              Order This Part
            </h2>
            <p className="text-[13px] text-merrow-textSub mb-4">
              To order this part, please contact our parts department with the
              machine code and part number shown above.
            </p>
            <div className="flex gap-4">
              <MerrowButton href={`mailto:parts@merrow.com?subject=Part Order: ${cp} - ${mmc_code}`}>
                Email Parts Dept
              </MerrowButton>
              <MerrowButton href="tel:+15086894095">
                Call: 508.689.4095
              </MerrowButton>
            </div>
          </div>

          <div className="mt-8 border-t border-merrow-border pt-8">
            <h2 className="text-lg font-semibold tracking-tight mb-4">
              Find Your Machine
            </h2>
            <p className="text-[13px] text-merrow-textSub mb-4">
              Need to find the right machine for this part? Browse our machine
              catalog.
            </p>
            <MerrowButton href={`/Sergers_and_Overlock_Sewing_Machines/${cp}`}>
              View Machine
            </MerrowButton>
          </div>
        </div>
      </FullBleed>

      {/* CTA section */}
      <FullBleed className="bg-merrow-footerBg">
        <div className="mx-auto max-w-merrow px-4 py-10 text-center">
          <h2 className="text-[20px] font-light text-white">
            Need Help Finding Parts?
          </h2>
          <p className="mt-2 text-[13px] text-[#d7d7d7]">
            Our parts team can help you identify the correct parts for your
            machine.
          </p>
          <div className="mt-4 flex justify-center gap-4">
            <MerrowButton href="mailto:parts@merrow.com">
              Contact Parts Dept
            </MerrowButton>
            <MerrowButton href="/support">Support Home</MerrowButton>
          </div>
        </div>
      </FullBleed>
    </main>
  );
}

// Server rendered for real-time data
export const dynamic = "force-dynamic";
