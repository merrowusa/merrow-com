// @version agent-book v1.0
// Route: /agent_book.php
// Legacy manual/parts-book viewer (was Flickr/PictoBrowser). Now uses manifest + R2 images.

import { Metadata } from "next";
import { notFound, redirect } from "next/navigation";
import { FullBleed, PageHeader } from "../../../../packages/ui";
import { SupportSidebar } from "../support/_components/SupportSidebar";
import { SupportDocsPanel } from "../support/_components/SupportDocsPanel";
import { getThreadingDiagrams } from "../../../../packages/data-layer/queries/support";
import { getAlbumWithPhotos } from "../../lib/flickr-albums";

interface PageProps {
  searchParams?: Promise<{
    kiwifruit?: string | string[];
    language?: string | string[];
    type?: string | string[];
    setnum?: string | string[];
    setnam?: string | string[];
    diagram?: string | string[];
    showthemapicture?: string | string[];
  }>;
}

function firstParam(value?: string | string[]) {
  if (!value) return "";
  return Array.isArray(value) ? value[0] ?? "" : value;
}

export const metadata: Metadata = {
  title: "Agent Book | Merrow Support",
  description: "Merrow manual and parts-book viewer.",
};

function buildEyebrow(kiwifruit: string, type: string, language: string) {
  const parts = [kiwifruit, type, language].map((p) => p.trim()).filter(Boolean);
  return parts.length > 0 ? parts.join(" | ") : "Manual Viewer";
}

export default async function AgentBookPage({ searchParams }: PageProps) {
  const resolved = (await searchParams) ?? {};

  const kiwifruit = firstParam(resolved.kiwifruit);
  const language = firstParam(resolved.language);
  const type = firstParam(resolved.type);
  const setnum = firstParam(resolved.setnum);
  const setnam = firstParam(resolved.setnam);
  const diagram = firstParam(resolved.diagram);
  const showthemapicture = firstParam(resolved.showthemapicture);

  // Legacy behavior: diagram viewer when showthemapicture=ohyeah
  if (showthemapicture === "ohyeah" && diagram) {
    redirect(`/support/diagram/${encodeURIComponent(diagram)}/showthemapicture/ohyeah`);
  }

  // Legacy behavior: if no kiwifruit, show a generic landing (legacy showed manual_front image).
  if (!kiwifruit || !setnum) {
    const threadingDiagrams = await getThreadingDiagrams();
    return (
      <main className="text-merrow-textMain bg-white">
        <FullBleed className="bg-[linear-gradient(120deg,#f7f7f7_0%,#ededed_60%,#f4f4f4_100%)] border-b border-merrow-border">
          <div className="mx-auto max-w-merrow px-4 py-12">
            <PageHeader
              eyebrow="Agent Book"
              title="Manual and Parts Book Viewer"
              subtitle="Select a manual link from Support to view pages."
            />
          </div>
        </FullBleed>

        <FullBleed className="bg-white">
          <div className="mx-auto max-w-merrow px-4 py-12">
            <div className="grid gap-10 lg:grid-cols-[260px_1fr_300px]">
              <SupportSidebar />
              <div className="rounded-xl border border-[#e1e1e1] bg-white p-5 shadow-[0_8px_18px_rgba(0,0,0,0.04)]">
                <p className="text-[13px] text-merrow-textSub">
                  This viewer replaces the legacy Flickr-based manual browser. Choose a manual
                  or parts book from the Support menu.
                </p>
              </div>
              <SupportDocsPanel threadingDiagrams={threadingDiagrams} />
            </div>
          </div>
        </FullBleed>
      </main>
    );
  }

  const album = getAlbumWithPhotos(setnum);
  if (!album) {
    notFound();
  }

  const threadingDiagrams = await getThreadingDiagrams();
  const eyebrow = buildEyebrow(kiwifruit, type, language);
  const subtitle = setnam ? `${album.title} (${setnam})` : album.title;

  return (
    <main className="text-merrow-textMain bg-white">
      <FullBleed className="bg-[linear-gradient(120deg,#f7f7f7_0%,#ededed_60%,#f4f4f4_100%)] border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <PageHeader eyebrow={eyebrow} title={album.title} subtitle={subtitle} />
        </div>
      </FullBleed>

      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <div className="grid gap-10 lg:grid-cols-[260px_1fr_300px]">
            <SupportSidebar />
            <div>
              <div className="rounded-xl border border-[#e1e1e1] bg-white p-5 shadow-[0_8px_18px_rgba(0,0,0,0.04)]">
                <div className="text-[12px] text-[#666666]">
                  Set <span className="font-mono">{setnum}</span>
                  {setnam ? (
                    <>
                      {" "}
                      | Name <span className="font-mono">{setnam}</span>
                    </>
                  ) : null}
                  {" "}
                  | Pages {album.photos.length}
                </div>

                {album.description ? (
                  <p className="mt-2 text-[13px] text-merrow-textSub">{album.description}</p>
                ) : null}

                <div className="mt-5 grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-4">
                  {album.photos.map((photo) => (
                    <a
                      key={photo.id}
                      href={photo.imageUrl}
                      target="_blank"
                      rel="noreferrer"
                      className="group block"
                      title={photo.title || photo.id}
                    >
                      <div className="overflow-hidden rounded border border-[#d8d8d8] bg-[#f7f7f7]">
                        <img
                          src={photo.imageUrl}
                          alt={photo.title || `Manual page ${photo.id}`}
                          className="block h-auto w-full"
                          loading="lazy"
                        />
                      </div>
                      <div className="mt-1 line-clamp-2 text-[11px] leading-[14px] text-[#4d4d4d]">
                        {photo.title || photo.id}
                      </div>
                    </a>
                  ))}
                </div>
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

