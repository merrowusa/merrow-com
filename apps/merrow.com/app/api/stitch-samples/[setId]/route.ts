// @version stitch-samples-api v2.0
// API route to serve stitch sample metadata from Flickr migration manifest

import { NextResponse } from "next/server";
import { getPhotosForAlbum, getStitchCatalog } from "../../../../lib/stitch-samples";

export async function GET(
  _request: Request,
  { params }: { params: Promise<{ setId: string }> }
) {
  const { setId } = await params;

  if (!setId || !/^\d+$/.test(setId)) {
    return NextResponse.json({ error: "Invalid set ID" }, { status: 400 });
  }

  const catalog = getStitchCatalog();
  const album = catalog.albums.find((item) => item.id === setId);
  const images = getPhotosForAlbum(setId);

  return NextResponse.json({
    setId,
    title: album?.title ?? "",
    description: album?.description ?? "",
    images,
  });
}
