// @version support-diagram v1.1
//
// Route: /support/diagram/[diagram]/showthemapicture/[show]
// Threading diagram viewer (legacy support.php)

import { Metadata } from "next";
import { notFound } from "next/navigation";
import { FullBleed, PageHeader } from "../../../../../../../../packages/ui";
import { SupportSidebar } from "../../../../_components/SupportSidebar";
import { SupportDocsPanel } from "../../../../_components/SupportDocsPanel";
import {
  getThreadingDiagramByImage,
  getThreadingDiagrams,
} from "../../../../../../../../packages/data-layer/queries/support";

interface PageProps {
  params: Promise<{ diagram: string; show: string }>;
}

export async function generateMetadata({ params }: PageProps): Promise<Metadata> {
  const { diagram } = await params;
  return {
    title: `Threading Diagram: ${diagram} | Merrow Support`,
    description: "Merrow threading diagram viewer.",
  };
}

export default async function DiagramPage({ params }: PageProps) {
  const { diagram, show } = await params;

  if (show !== "ohyeah") {
    notFound();
  }

  const [record, threadingDiagrams] = await Promise.all([
    getThreadingDiagramByImage(diagram),
    getThreadingDiagrams(),
  ]);

  if (!record) {
    notFound();
  }

  const imageUrl = record.imgUrl || `/images/threadingdiagrams/large/${record.image}`;

  return (
    <main className="text-merrow-textMain bg-white">
      <FullBleed className="bg-[linear-gradient(120deg,#f7f7f7_0%,#ededed_60%,#f4f4f4_100%)] border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <PageHeader
            eyebrow="Threading Diagram"
            title={`Diagram #${record.name}`}
            subtitle={record.image}
          />
        </div>
      </FullBleed>

      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <div className="grid gap-10 lg:grid-cols-[260px_1fr_300px]">
            <SupportSidebar />
            <div>
              <div className="rounded-xl border border-[#e1e1e1] bg-white p-5 shadow-[0_8px_18px_rgba(0,0,0,0.04)]">
                <img
                  src={imageUrl}
                  alt={`Threading Diagram ${record.name}`}
                  className="border border-merrow-border rounded-lg max-w-full"
                />
              </div>
            </div>
            <SupportDocsPanel threadingDiagrams={threadingDiagrams} />
          </div>
        </div>
      </FullBleed>
    </main>
  );
}

export const dynamic = "force-dynamic";
