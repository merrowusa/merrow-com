import { existsSync, readFileSync } from "fs";
import { join } from "path";

const R2_IMAGE_BASE =
  "https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/stitch-samples";

const MANIFEST_PATH = join(
  process.cwd(),
  "../../_AUDIT/flickr_migration/flickr_manifest_final.json"
);

const CACHE_TTL_MS = 5 * 60 * 1000;

interface FlickrAlbum {
  id: string;
  title?: string;
  description?: string;
  photos?: number;
  videos?: number;
}

interface FlickrAlbumRef {
  id: string;
  title?: string;
}

interface FlickrPhoto {
  id: string;
  filename?: string;
  title?: string;
  description?: string;
  tags?: string[];
  media?: string;
  dates?: {
    taken?: string;
    posted?: string;
  };
  albums?: FlickrAlbumRef[];
}

interface FlickrManifest {
  albums?: Record<string, FlickrAlbum>;
  photos?: Record<string, FlickrPhoto>;
}

export interface AlbumPhoto {
  id: string;
  filename: string;
  imageUrl: string;
  title: string;
  description: string;
  tags: string[];
  takenAt: string | null;
}

export interface AlbumWithPhotos {
  id: string;
  title: string;
  description: string;
  photos: AlbumPhoto[];
}

let manifestCache: FlickrManifest | null = null;
let manifestCacheTime = 0;

function safeIsoFromTaken(taken?: string) {
  if (!taken) return null;
  const parsed = new Date(taken.replace(" ", "T") + "Z");
  if (Number.isNaN(parsed.getTime())) return null;
  return parsed.toISOString();
}

function safeIsoFromPosted(posted?: string) {
  if (!posted || !/^\d+$/.test(posted)) return null;
  const parsed = new Date(Number(posted) * 1000);
  if (Number.isNaN(parsed.getTime())) return null;
  return parsed.toISOString();
}

function parseOrderHint(title: string) {
  const normalized = title.toLowerCase();
  const pageMatch = normalized.match(/\bpage\s*([0-9]{1,4})\b/);
  if (pageMatch?.[1]) return Number(pageMatch[1]);

  const bareMatch = normalized.match(/\b([0-9]{1,4})\b/);
  if (bareMatch?.[1]) return Number(bareMatch[1]);

  return Number.POSITIVE_INFINITY;
}

function loadManifest(): FlickrManifest | null {
  const now = Date.now();
  if (manifestCache && now - manifestCacheTime < CACHE_TTL_MS) {
    return manifestCache;
  }

  if (!existsSync(MANIFEST_PATH)) {
    manifestCache = null;
    manifestCacheTime = now;
    return null;
  }

  const raw = readFileSync(MANIFEST_PATH, "utf-8");
  manifestCache = JSON.parse(raw) as FlickrManifest;
  manifestCacheTime = now;
  return manifestCache;
}

export function getAlbumWithPhotos(albumId: string): AlbumWithPhotos | null {
  const manifest = loadManifest();
  if (!manifest) return null;

  const albums = manifest.albums ?? {};
  const photos = manifest.photos ?? {};

  const album = albums[albumId];
  const albumTitle = (album?.title ?? "").trim() || `Set ${albumId}`;
  const albumDescription = (album?.description ?? "").trim();

  const matches: AlbumPhoto[] = [];
  for (const [photoId, photo] of Object.entries(photos)) {
    if (photo.media && photo.media !== "photo") continue;

    const refs = photo.albums ?? [];
    if (!refs.some((ref) => String(ref.id) === albumId)) continue;

    const filename = (photo.filename ?? "").trim();
    if (!filename) continue;

    const takenAt =
      safeIsoFromTaken(photo.dates?.taken) ?? safeIsoFromPosted(photo.dates?.posted);

    matches.push({
      id: photoId,
      filename,
      imageUrl: `${R2_IMAGE_BASE}/${encodeURIComponent(filename)}`,
      title: (photo.title ?? "").trim(),
      description: (photo.description ?? "").trim(),
      tags: (photo.tags ?? []).map(String).filter(Boolean),
      takenAt,
    });
  }

  matches.sort((a, b) => {
    const aHint = parseOrderHint(a.title);
    const bHint = parseOrderHint(b.title);
    if (aHint !== bHint) return aHint - bHint;

    if (a.takenAt && b.takenAt) return a.takenAt.localeCompare(b.takenAt);
    if (a.takenAt) return -1;
    if (b.takenAt) return 1;
    return a.id.localeCompare(b.id);
  });

  return {
    id: albumId,
    title: albumTitle,
    description: albumDescription,
    photos: matches,
  };
}

