import { existsSync, readFileSync } from "fs";
import { join } from "path";

const R2_STITCH_SAMPLE_BASE =
  "https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/stitch-samples";

const AGGREGATE_ALBUM_IDS = new Set([
  "72177720311965611", // All the images
  "72177720311958345", // All the Stitches
  "72157605663969436", // Tagged Stitches
  "72157604893407174", // stitch pictures
]);

interface LegacyCollectionDef {
  id: string;
  label: string;
  albumIds: string[];
}

const LEGACY_STITCH_COLLECTIONS: LegacyCollectionDef[] = [
  {
    id: "front_emblem",
    label: "Emblems",
    albumIds: ["72157606892621481", "72157607326462165"],
  },
  {
    id: "front_shell",
    label: "Shell Stitch",
    albumIds: ["72157606892789255", "72157607324522028"],
  },
  {
    id: "front_blanket",
    label: "Blanket Stitch",
    albumIds: ["72157606893036019", "72157607327923563"],
  },
  {
    id: "front_textile",
    label: "Textile Finishing",
    albumIds: ["72157606892968601", "72157607324383640"],
  },
  {
    id: "front_purl",
    label: "Purl Stitch",
    albumIds: ["72157606889366838", "72157607323313794"],
  },
  {
    id: "front_crochet",
    label: "Crochet Stitch",
    albumIds: ["72157606906056879", "72157607323790836"],
  },
  {
    id: "front_netting",
    label: "Netting",
    albumIds: ["72157606889592730", "72157607324567838"],
  },
  {
    id: "front_overlock",
    label: "General Overlock",
    albumIds: ["72157606893157487", "72157607323739660"],
  },
  {
    id: "front_hosiery",
    label: "Hosiery",
    albumIds: ["72157606893059633", "72157607327251051"],
  },
] as LegacyCollectionDef[];

const LEGACY_STITCH_ALBUM_IDS = new Set<string>(
  LEGACY_STITCH_COLLECTIONS.flatMap((collection) => collection.albumIds)
);

const STITCH_METADATA_PREFIXES = [
  "stitch classification:",
  "application:",
  "merrow model:",
  "stitch width:",
  "shell width:",
  "stitches in shell:",
  "spi (stitch per inch):",
  "fabric class:",
  "fabric type:",
  "fabric color:",
  "fabric weight:",
  "thread type:",
  "thread color:",
  "sample width:",
  "sample length:",
  "keywords:",
];

const STITCH_KEYWORD_REGEX =
  /\b(stitch|seam|overlock|crochet|purl|blanket|netting|hosiery|shell|emblem|activeseam|buttseam)\b/i;

const MACHINE_TAG_REGEX =
  /^(?:merrow model:\s*)?((?:mg|mb|md|m|a)[-\s]?\d[\w-]*|(?:\d{2,3})[\w-]*)$/i;

const IMAGE_EXTENSION_REGEX = /\.(?:jpg|jpeg|png|gif|webp)$/i;
const CACHE_TTL_MS = 5 * 60 * 1000;

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
  albums?: Record<
    string,
    {
      id: string;
      title?: string;
      description?: string;
    }
  >;
  photos?: Record<string, FlickrPhoto>;
}

interface LegacySetManifest {
  sets?: Record<
    string,
    {
      title?: string;
      description?: string;
      images?: Array<{
        filename: string;
        id?: string;
        title?: string;
        tags?: string[];
      }>;
    }
  >;
}

export interface StitchAlbumRef {
  id: string;
  title: string;
}

export interface StitchPhoto {
  id: string;
  filename: string;
  imageUrl: string;
  title: string;
  description: string;
  tags: string[];
  albums: StitchAlbumRef[];
  machineModels: string[];
  stitchClassifications: string[];
  applications: string[];
  legacyCollectionId: string | null;
  takenAt: string | null;
  searchIndex: string;
}

export interface StitchAlbumFacet {
  id: string;
  title: string;
  description: string;
  count: number;
  isAggregate: boolean;
}

export interface StitchLegacyCollectionFacet {
  id: string;
  label: string;
  count: number;
  albumIds: string[];
}

export interface StitchCatalog {
  photos: StitchPhoto[];
  albums: StitchAlbumFacet[];
  machines: Array<{ value: string; count: number }>;
  classifications: Array<{ value: string; count: number }>;
  legacyCollections: StitchLegacyCollectionFacet[];
}

let catalogCache: StitchCatalog | null = null;
let catalogCacheTime = 0;

const PRIMARY_MANIFEST_PATH = join(
  process.cwd(),
  "../../_AUDIT/flickr_migration/flickr_manifest_final.json"
);
const FALLBACK_MANIFEST_PATH = join(
  process.cwd(),
  "public/data/stitch-samples.json"
);

function slugify(input: string) {
  return input
    .toLowerCase()
    .replace(/&/g, " and ")
    .replace(/[^a-z0-9]+/g, "-")
    .replace(/^-+|-+$/g, "");
}

function normalizeTag(tag: string) {
  return tag.trim().replace(/\s+/g, " ");
}

function parseTagValues(tags: string[], prefix: string) {
  return tags
    .map((tag) => tag.toLowerCase())
    .filter((tag) => tag.startsWith(prefix))
    .map((tag) => tag.slice(prefix.length).trim())
    .filter(Boolean);
}

function extractMachineModels(tags: string[]) {
  const models = new Set<string>();

  for (const rawTag of tags) {
    const tag = rawTag.trim();
    if (!tag) {
      continue;
    }

    const lowered = tag.toLowerCase();
    if (lowered.startsWith("merrow model:")) {
      const model = tag.slice(tag.indexOf(":") + 1).trim().toUpperCase();
      if (model) {
        models.add(model);
      }
      continue;
    }

    const match = tag.match(MACHINE_TAG_REGEX);
    if (!match || !match[1]) {
      continue;
    }

    const value = match[1].trim().toUpperCase();
    if (value.length >= 2 && /[0-9]/.test(value)) {
      models.add(value);
    }
  }

  return Array.from(models).sort();
}

function parseTakenAt(photo: FlickrPhoto): string | null {
  const taken = photo.dates?.taken;
  if (taken) {
    const parsed = new Date(taken.replace(" ", "T") + "Z");
    if (!Number.isNaN(parsed.getTime())) {
      return parsed.toISOString();
    }
  }

  const posted = photo.dates?.posted;
  if (posted && /^\d+$/.test(posted)) {
    const parsed = new Date(Number(posted) * 1000);
    if (!Number.isNaN(parsed.getTime())) {
      return parsed.toISOString();
    }
  }

  return null;
}

function hasStitchMetadata(
  tags: string[],
  title: string,
  description: string,
  albumIds: string[]
) {
  if (albumIds.some((albumId) => LEGACY_STITCH_ALBUM_IDS.has(albumId))) {
    return true;
  }

  const loweredTags = tags.map((tag) => tag.toLowerCase());

  if (
    loweredTags.some((tag) =>
      STITCH_METADATA_PREFIXES.some((prefix) => tag.startsWith(prefix))
    )
  ) {
    return true;
  }

  if (loweredTags.some((tag) => tag.startsWith("front_"))) {
    return true;
  }

  if (
    loweredTags.some((tag) => STITCH_KEYWORD_REGEX.test(tag)) ||
    STITCH_KEYWORD_REGEX.test(title) ||
    STITCH_KEYWORD_REGEX.test(description)
  ) {
    return true;
  }

  return false;
}

function buildSearchIndex(parts: string[]) {
  return parts
    .map((part) => part.trim().toLowerCase())
    .filter(Boolean)
    .join(" ");
}

function resolveLegacyCollectionId(albumIds: string[], tags: string[]) {
  const frontTag = tags
    .map((tag) => tag.toLowerCase())
    .find((tag) => tag.startsWith("front_"));
  if (frontTag) {
    return frontTag;
  }

  for (const collection of LEGACY_STITCH_COLLECTIONS) {
    if (collection.albumIds.some((albumId) => albumIds.includes(albumId))) {
      return collection.id;
    }
  }

  return null;
}

function buildCatalogFromFlickrManifest(manifest: FlickrManifest): StitchCatalog {
  const photos: StitchPhoto[] = [];
  const albumCounts = new Map<string, number>();
  const albumMeta = new Map<string, { title: string; description: string }>();

  for (const [albumId, album] of Object.entries(manifest.albums ?? {})) {
    albumMeta.set(albumId, {
      title: (album.title ?? "").trim() || `Set ${albumId}`,
      description: (album.description ?? "").trim(),
    });
  }

  for (const [photoId, photo] of Object.entries(manifest.photos ?? {})) {
    if (photo.media && photo.media !== "photo") {
      continue;
    }

    const filename = (photo.filename ?? "").trim();
    if (!filename || !IMAGE_EXTENSION_REGEX.test(filename)) {
      continue;
    }

    const tags = Array.from(
      new Set((photo.tags ?? []).map(normalizeTag).filter(Boolean))
    );
    const title = (photo.title ?? "").trim();
    const description = (photo.description ?? "").trim();
    const albums = (photo.albums ?? []).map((albumRef) => {
      const fallback = albumMeta.get(albumRef.id);
      return {
        id: String(albumRef.id),
        title:
          (albumRef.title ?? "").trim() ||
          fallback?.title ||
          `Set ${String(albumRef.id)}`,
      };
    });
    const albumIds = albums.map((album) => album.id);

    if (!hasStitchMetadata(tags, title, description, albumIds)) {
      continue;
    }

    for (const album of albums) {
      if (!albumMeta.has(album.id)) {
        albumMeta.set(album.id, { title: album.title, description: "" });
      }
      albumCounts.set(album.id, (albumCounts.get(album.id) ?? 0) + 1);
    }

    const machineModels = extractMachineModels(tags);
    const stitchClassifications = parseTagValues(tags, "stitch classification:");
    const applications = parseTagValues(tags, "application:");
    const legacyCollectionId = resolveLegacyCollectionId(albumIds, tags);
    const takenAt = parseTakenAt(photo);

    const searchIndex = buildSearchIndex([
      photoId,
      title,
      description,
      ...tags,
      ...albums.map((album) => album.title),
      ...machineModels,
      ...stitchClassifications,
      ...applications,
      legacyCollectionId ?? "",
    ]);

    photos.push({
      id: photoId,
      filename,
      imageUrl: `${R2_STITCH_SAMPLE_BASE}/${encodeURIComponent(filename)}`,
      title,
      description,
      tags,
      albums,
      machineModels,
      stitchClassifications,
      applications,
      legacyCollectionId,
      takenAt,
      searchIndex,
    });
  }

  photos.sort((a, b) => {
    if (a.takenAt && b.takenAt) {
      return a.takenAt < b.takenAt ? 1 : -1;
    }
    if (a.takenAt) {
      return -1;
    }
    if (b.takenAt) {
      return 1;
    }
    return a.id.localeCompare(b.id);
  });

  const albums = Array.from(albumCounts.entries())
    .map(([id, count]) => {
      const meta = albumMeta.get(id);
      const title = meta?.title ?? `Set ${id}`;
      return {
        id,
        title,
        description: meta?.description ?? "",
        count,
        isAggregate: AGGREGATE_ALBUM_IDS.has(id),
      };
    })
    .sort((a, b) => {
      if (a.isAggregate !== b.isAggregate) {
        return a.isAggregate ? 1 : -1;
      }
      return a.title.localeCompare(b.title);
    });

  const machineCounts = new Map<string, number>();
  const classificationCounts = new Map<string, number>();
  for (const photo of photos) {
    for (const machineModel of photo.machineModels) {
      machineCounts.set(machineModel, (machineCounts.get(machineModel) ?? 0) + 1);
    }
    for (const classification of photo.stitchClassifications) {
      classificationCounts.set(
        classification,
        (classificationCounts.get(classification) ?? 0) + 1
      );
    }
  }

  const machines = Array.from(machineCounts.entries())
    .map(([value, count]) => ({ value, count }))
    .sort((a, b) => a.value.localeCompare(b.value));

  const classifications = Array.from(classificationCounts.entries())
    .map(([value, count]) => ({ value, count }))
    .sort((a, b) => a.value.localeCompare(b.value));

  const legacyCollections = LEGACY_STITCH_COLLECTIONS.map((collection) => {
    const count = photos.filter((photo) =>
      photo.albums.some((album) => collection.albumIds.includes(album.id))
    ).length;
    return {
      id: collection.id,
      label: collection.label,
      count,
      albumIds: [...collection.albumIds],
    };
  }).filter((collection) => collection.count > 0);

  return { photos, albums, machines, classifications, legacyCollections };
}

function buildCatalogFromLegacyManifest(manifest: LegacySetManifest): StitchCatalog {
  const mergedById = new Map<string, StitchPhoto>();

  for (const [setId, set] of Object.entries(manifest.sets ?? {})) {
    const setTitle = (set.title ?? "").trim() || `Set ${setId}`;
    for (const image of set.images ?? []) {
      const filename = (image.filename ?? "").trim();
      if (!filename || !IMAGE_EXTENSION_REGEX.test(filename)) {
        continue;
      }

      const photoId = (image.id ?? filename.replace(/\.[^.]+$/, "")).trim();
      const tags = Array.from(
        new Set((image.tags ?? []).map(normalizeTag).filter(Boolean))
      );
      const title = (image.title ?? "").trim();
      const legacyCollectionId = resolveLegacyCollectionId([setId], tags);
      const searchIndex = buildSearchIndex([
        photoId,
        title,
        ...tags,
        setTitle,
        legacyCollectionId ?? "",
      ]);

      const existing = mergedById.get(photoId);
      const albumRef = { id: setId, title: setTitle };
      if (existing) {
        if (!existing.albums.some((album) => album.id === setId)) {
          existing.albums.push(albumRef);
        }
        continue;
      }

      mergedById.set(photoId, {
        id: photoId,
        filename,
        imageUrl: `${R2_STITCH_SAMPLE_BASE}/${encodeURIComponent(filename)}`,
        title,
        description: "",
        tags,
        albums: [albumRef],
        machineModels: extractMachineModels(tags),
        stitchClassifications: parseTagValues(tags, "stitch classification:"),
        applications: parseTagValues(tags, "application:"),
        legacyCollectionId,
        takenAt: null,
        searchIndex,
      });
    }
  }

  const photos = Array.from(mergedById.values());
  const albumCounts = new Map<string, number>();
  for (const photo of photos) {
    for (const album of photo.albums) {
      albumCounts.set(album.id, (albumCounts.get(album.id) ?? 0) + 1);
    }
  }

  const albums = Array.from(albumCounts.entries())
    .map(([id, count]) => ({
      id,
      title: photos.find((photo) => photo.albums.some((album) => album.id === id))
        ?.albums.find((album) => album.id === id)?.title ?? `Set ${id}`,
      description: "",
      count,
      isAggregate: AGGREGATE_ALBUM_IDS.has(id),
    }))
    .sort((a, b) => a.title.localeCompare(b.title));

  const machineCounts = new Map<string, number>();
  const classificationCounts = new Map<string, number>();
  for (const photo of photos) {
    for (const machineModel of photo.machineModels) {
      machineCounts.set(machineModel, (machineCounts.get(machineModel) ?? 0) + 1);
    }
    for (const classification of photo.stitchClassifications) {
      classificationCounts.set(
        classification,
        (classificationCounts.get(classification) ?? 0) + 1
      );
    }
  }

  const machines = Array.from(machineCounts.entries())
    .map(([value, count]) => ({ value, count }))
    .sort((a, b) => a.value.localeCompare(b.value));

  const classifications = Array.from(classificationCounts.entries())
    .map(([value, count]) => ({ value, count }))
    .sort((a, b) => a.value.localeCompare(b.value));

  const legacyCollections = LEGACY_STITCH_COLLECTIONS.map((collection) => {
    const count = photos.filter((photo) =>
      photo.albums.some((album) => collection.albumIds.includes(album.id))
    ).length;
    return {
      id: collection.id,
      label: collection.label,
      count,
      albumIds: [...collection.albumIds],
    };
  }).filter((collection) => collection.count > 0);

  return { photos, albums, machines, classifications, legacyCollections };
}

export function getStitchCatalog(): StitchCatalog {
  const now = Date.now();
  if (catalogCache && now - catalogCacheTime < CACHE_TTL_MS) {
    return catalogCache;
  }

  if (existsSync(PRIMARY_MANIFEST_PATH)) {
    const raw = readFileSync(PRIMARY_MANIFEST_PATH, "utf-8");
    const parsed = JSON.parse(raw) as FlickrManifest;
    if ("photos" in parsed) {
      catalogCache = buildCatalogFromFlickrManifest(parsed);
      catalogCacheTime = now;
      return catalogCache;
    }
  }

  if (existsSync(FALLBACK_MANIFEST_PATH)) {
    const raw = readFileSync(FALLBACK_MANIFEST_PATH, "utf-8");
    const parsed = JSON.parse(raw) as LegacySetManifest;
    if ("sets" in parsed) {
      catalogCache = buildCatalogFromLegacyManifest(parsed);
      catalogCacheTime = now;
      return catalogCache;
    }
  }

  catalogCache = {
    photos: [],
    albums: [],
    machines: [],
    classifications: [],
    legacyCollections: [],
  };
  catalogCacheTime = now;
  return catalogCache;
}

export function getPhotosForAlbum(setId: string) {
  const catalog = getStitchCatalog();
  return catalog.photos.filter((photo) =>
    photo.albums.some((album) => album.id === setId)
  );
}

export function resolveLegacyCollectionAlbumId(
  collectionId: string,
  resolution?: string,
  setnum?: string,
  setnum1?: string
) {
  if (resolution?.toLowerCase() === "low" && setnum1) {
    return setnum1;
  }
  if (resolution?.toLowerCase() === "high" && setnum) {
    return setnum;
  }
  if (setnum) {
    return setnum;
  }
  if (setnum1) {
    return setnum1;
  }

  const collection = LEGACY_STITCH_COLLECTIONS.find((item) => {
    return (
      item.id === collectionId ||
      slugify(item.label) === slugify(collectionId.replace(/^front_/, ""))
    );
  });

  if (!collection) {
    return "";
  }

  return resolution?.toLowerCase() === "low"
    ? collection.albumIds[1] ?? collection.albumIds[0]
    : collection.albumIds[0];
}

export { LEGACY_STITCH_COLLECTIONS };
