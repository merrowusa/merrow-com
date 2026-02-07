import { NextRequest, NextResponse } from "next/server";
import { getStitchCatalog } from "../../../lib/stitch-samples";

type SortMode = "newest" | "oldest" | "title";

function includesNormalized(haystack: string, needle: string) {
  return haystack.toLowerCase().includes(needle.toLowerCase());
}

export async function GET(request: NextRequest) {
  const searchParams = request.nextUrl.searchParams;
  const q = (searchParams.get("q") ?? "").trim();
  const album = (searchParams.get("album") ?? "").trim();
  const machine = (searchParams.get("machine") ?? "").trim().toUpperCase();
  const classification = (searchParams.get("classification") ?? "")
    .trim()
    .toLowerCase();
  const legacyCollection = (searchParams.get("legacyCollection") ?? "").trim();
  const sort = ((searchParams.get("sort") ?? "newest").trim().toLowerCase() ||
    "newest") as SortMode;

  const catalog = getStitchCatalog();
  let photos = catalog.photos.filter((photo) => {
    if (album && !photo.albums.some((albumRef) => albumRef.id === album)) {
      return false;
    }

    if (legacyCollection && photo.legacyCollectionId !== legacyCollection) {
      return false;
    }

    if (machine && !photo.machineModels.some((model) => model === machine)) {
      return false;
    }

    if (
      classification &&
      !photo.stitchClassifications.some((item) =>
        includesNormalized(item, classification)
      )
    ) {
      return false;
    }

    if (q && !includesNormalized(photo.searchIndex, q)) {
      return false;
    }

    return true;
  });

  photos = [...photos].sort((a, b) => {
    if (sort === "title") {
      return (a.title || a.id).localeCompare(b.title || b.id);
    }
    if (sort === "oldest") {
      if (a.takenAt && b.takenAt) {
        return a.takenAt.localeCompare(b.takenAt);
      }
      if (a.takenAt) {
        return -1;
      }
      if (b.takenAt) {
        return 1;
      }
      return a.id.localeCompare(b.id);
    }
    if (a.takenAt && b.takenAt) {
      return b.takenAt.localeCompare(a.takenAt);
    }
    if (a.takenAt) {
      return -1;
    }
    if (b.takenAt) {
      return 1;
    }
    return a.id.localeCompare(b.id);
  });

  const payload = {
    total: photos.length,
    photos,
    facets: {
      albums: catalog.albums,
      machines: catalog.machines,
      classifications: catalog.classifications,
      legacyCollections: catalog.legacyCollections,
    },
  };

  return NextResponse.json(payload);
}
