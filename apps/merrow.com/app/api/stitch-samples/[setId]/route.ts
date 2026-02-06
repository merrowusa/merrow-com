// @version stitch-samples-api v1.0
// API route to serve stitch sample metadata from manifest

import { NextRequest, NextResponse } from "next/server";
import { readFileSync, existsSync, readdirSync } from "fs";
import { join } from "path";

// Path to the stitch sample manifest (generated from Flickr export)
const MANIFEST_PATH = join(
  process.cwd(),
  "public/data/stitch-samples.json"
);

// Path to stitch sample images
const IMAGES_PATH = join(process.cwd(), "public/images/stitch-samples");

interface ManifestImage {
  filename: string;
  id: string;
  title: string;
  tags: string[];
}

interface ManifestSet {
  title: string;
  description?: string;
  images: ManifestImage[];
}

interface Manifest {
  sets: Record<string, ManifestSet>;
}

let manifestCache: Manifest | null = null;
let manifestCacheTime = 0;
const CACHE_TTL = 60000; // 1 minute

function getManifest(): Manifest | null {
  const now = Date.now();
  if (manifestCache && now - manifestCacheTime < CACHE_TTL) {
    return manifestCache;
  }

  try {
    if (existsSync(MANIFEST_PATH)) {
      const data = readFileSync(MANIFEST_PATH, "utf-8");
      manifestCache = JSON.parse(data);
      manifestCacheTime = now;
      return manifestCache;
    }
  } catch {
    // Manifest not available
  }
  return null;
}

function getImagesFromDirectory(setId: string): ManifestImage[] {
  const setPath = join(IMAGES_PATH, setId);
  if (!existsSync(setPath)) {
    return [];
  }

  try {
    const files = readdirSync(setPath);
    return files
      .filter((f) => /\.(jpg|jpeg|png|gif)$/i.test(f))
      .map((filename) => ({
        filename,
        id: filename.replace(/\.[^.]+$/, ""),
        title: "",
        tags: [],
      }));
  } catch {
    return [];
  }
}

export async function GET(
  request: NextRequest,
  { params }: { params: Promise<{ setId: string }> }
) {
  const { setId } = await params;

  if (!setId || !/^\d+$/.test(setId)) {
    return NextResponse.json({ error: "Invalid set ID" }, { status: 400 });
  }

  // Try to get data from manifest first
  const manifest = getManifest();
  if (manifest && manifest.sets[setId]) {
    const setData = manifest.sets[setId];
    return NextResponse.json({
      setId,
      title: setData.title,
      description: setData.description || "",
      images: setData.images,
    });
  }

  // Fall back to reading directory
  const images = getImagesFromDirectory(setId);
  if (images.length > 0) {
    return NextResponse.json({
      setId,
      title: "",
      description: "",
      images,
    });
  }

  // No images found
  return NextResponse.json({
    setId,
    title: "",
    description: "",
    images: [],
  });
}
