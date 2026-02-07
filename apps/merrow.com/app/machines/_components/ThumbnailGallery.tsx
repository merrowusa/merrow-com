// @version thumbnail-gallery v1.0
// Thumbnail gallery with modal lightbox for machine detail pages

"use client";

import React, { useMemo, useState } from "react";

interface ThumbnailGalleryProps {
  styleKey: string;
  numberOfThumbs: number;
}

const S3_BASE = "https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/product-pages";

export function ThumbnailGallery({ styleKey, numberOfThumbs }: ThumbnailGalleryProps) {
  const [activeImage, setActiveImage] = useState<string | null>(null);

  const thumbnails = useMemo(() => {
    if (!styleKey || numberOfThumbs <= 0) return [] as Array<{ thumb: string; full: string }>;
    return Array.from({ length: numberOfThumbs }).map((_, index) => {
      const number = index + 1;
      return {
        thumb: `${S3_BASE}/${styleKey}_thumb${number}.jpg`,
        full: `${S3_BASE}/${styleKey}_thumb${number}x.jpg`,
      };
    });
  }, [styleKey, numberOfThumbs]);

  if (thumbnails.length === 0) return null;

  return (
    <div className="mt-4">
      <div className="flex flex-wrap gap-3">
        {thumbnails.map((item, index) => (
          <button
            key={item.thumb}
            type="button"
            className="h-20 w-24 rounded border border-[#d7d7d7] bg-white p-1 shadow-[0_4px_10px_rgba(0,0,0,0.08)]"
            onClick={() => setActiveImage(item.full)}
            aria-label={`Open image ${index + 1}`}
          >
            <img
              src={item.thumb}
              alt={`Machine thumbnail ${index + 1}`}
              className="h-full w-full rounded object-cover"
            />
          </button>
        ))}
      </div>

      {activeImage ? (
        <div
          className="fixed inset-0 z-50 flex items-center justify-center bg-black/70 p-4"
          onClick={() => setActiveImage(null)}
        >
          <div
            className="relative max-h-full w-full max-w-5xl"
            onClick={(event) => event.stopPropagation()}
          >
            <button
              type="button"
              onClick={() => setActiveImage(null)}
              className="absolute right-3 top-3 rounded-full bg-black/70 px-3 py-1 text-[12px] text-white"
            >
              Close
            </button>
            <img
              src={activeImage}
              alt="Machine detail"
              className="max-h-[80vh] w-full rounded-lg border border-[#2a2a2a] bg-white object-contain"
            />
          </div>
        </div>
      ) : null}
    </div>
  );
}
