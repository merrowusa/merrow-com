// @version stitch-browser v2.0
// Route: /stitch.html
// Stitch finder rebuilt using Flickr migration metadata + R2 assets

import { Metadata } from "next";
import { FullBleed, PageHeader } from "../../../../packages/ui";
import {
  resolveLegacyCollectionAlbumId,
  LEGACY_STITCH_COLLECTIONS,
} from "../../lib/stitch-samples";
import { StitchBrowserClient } from "./_components/StitchBrowserClient";

interface StitchBrowserPageProps {
  searchParams?: Promise<{
    q?: string | string[];
    stitch?: string | string[];
    setnum?: string | string[];
    setnum1?: string | string[];
    setnam?: string | string[];
    resolution?: string | string[];
    sort?: string | string[];
  }>;
}

export const metadata: Metadata = {
  title: "Stitch Browser | Merrow Sewing Machine Company",
  description:
    "Search Merrow stitch samples by machine model, stitch classification, and photoset collections.",
};

function firstParam(value?: string | string[]) {
  if (!value) {
    return "";
  }
  return Array.isArray(value) ? value[0] ?? "" : value;
}

function inferLegacyCollectionId(stitchParam: string) {
  if (!stitchParam) {
    return "";
  }

  const normalized = stitchParam.toLowerCase().trim();
  const direct = LEGACY_STITCH_COLLECTIONS.find(
    (collection) => collection.id === normalized
  );
  if (direct) {
    return direct.id;
  }

  if (normalized.startsWith("front_")) {
    return normalized;
  }

  return "";
}

function inferInitialQuery(stitchParam: string, q: string, setnam: string) {
  if (q) {
    return q;
  }

  if (stitchParam && !stitchParam.toLowerCase().startsWith("front_")) {
    return stitchParam.replace(/_/g, " ");
  }

  if (setnam) {
    return setnam.replace(/_/g, " ");
  }

  return "";
}

function normalizeSort(sort: string) {
  const normalized = sort.trim().toLowerCase();
  if (normalized === "oldest" || normalized === "title") {
    return normalized;
  }
  return "newest";
}

export default async function StitchBrowserPage({
  searchParams,
}: StitchBrowserPageProps) {
  const resolved = (await searchParams) ?? {};

  const q = firstParam(resolved.q).trim();
  const stitch = firstParam(resolved.stitch).trim();
  const setnum = firstParam(resolved.setnum).trim();
  const setnum1 = firstParam(resolved.setnum1).trim();
  const setnam = firstParam(resolved.setnam).trim();
  const resolution = firstParam(resolved.resolution).trim();
  const sort = normalizeSort(firstParam(resolved.sort));

  const legacyCollectionId = inferLegacyCollectionId(stitch);
  const initialAlbumId = resolveLegacyCollectionAlbumId(
    legacyCollectionId,
    resolution,
    setnum,
    setnum1
  );
  const initialQuery = inferInitialQuery(stitch, q, setnam);

  return (
    <main className="text-merrow-textMain">
      <FullBleed className="border-b border-merrow-border bg-merrow-heroBg">
        <div className="mx-auto max-w-merrow px-4 py-8">
          <PageHeader
            eyebrow="Stitch Samples"
            title="Merrow Stitch Browser"
            subtitle="Search, sort, and browse stitch images grouped by photosets and legacy stitch collections."
          />
        </div>
      </FullBleed>

      <FullBleed className="bg-white">
        <StitchBrowserClient
          initialQuery={initialQuery}
          initialAlbumId={initialAlbumId}
          initialLegacyCollectionId={legacyCollectionId}
          initialSort={sort}
        />
      </FullBleed>
    </main>
  );
}
