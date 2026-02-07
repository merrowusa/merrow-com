// @version stitch-gallery v2.0
// Local stitch sample gallery with Flickr fallback
// Images stored in /public/images/stitch-samples/{flickrSetId}/

"use client";

import { useState, useEffect } from "react";
import Image from "next/image";
import { MerrowButton } from "../../../../../packages/ui";

interface StitchImage {
  filename: string;
  id: string;
  title: string;
  tags: string[];
  imageUrl: string;
}

interface StitchGalleryProps {
  flickrSet: string;
  machineName: string;
}

export function StitchGallery({ flickrSet, machineName }: StitchGalleryProps) {
  const [images, setImages] = useState<StitchImage[]>([]);
  const [loading, setLoading] = useState(true);
  const [selectedImage, setSelectedImage] = useState<StitchImage | null>(null);

  useEffect(() => {
    if (!flickrSet) {
      setLoading(false);
      return;
    }

    // Fetch manifest to get image list for this set
    fetch("/api/stitch-samples/" + flickrSet)
      .then((res) => (res.ok ? res.json() : { images: [] }))
      .then((data) => {
        setImages(data.images || []);
        setLoading(false);
      })
      .catch(() => {
        setLoading(false);
      });
  }, [flickrSet]);

  if (!flickrSet) return null;

  const stitchBrowserUrl = `/stitch.html?setnum=${encodeURIComponent(flickrSet)}`;

  // If no local images, show CTA to Flickr
  if (!loading && images.length === 0) {
    return (
      <section className="rounded-xl border border-[#e1e1e1] bg-white p-6 shadow-[0_6px_16px_rgba(0,0,0,0.05)]">
        <div className="text-[12px] uppercase tracking-[0.16em] text-merrow-textMuted">
          Stitch Samples
        </div>
        <h3 className="mt-2 text-[16px] font-semibold text-merrow-textMain">
          View stitch samples for {machineName}
        </h3>
        <p className="mt-2 text-[13px] text-merrow-textSub">
          Explore sample seams and stitch variations from this machine in the
          Merrow stitch browser.
        </p>
        <div className="mt-4">
          <MerrowButton href={stitchBrowserUrl}>Open Stitch Browser</MerrowButton>
        </div>
      </section>
    );
  }

  return (
    <section className="rounded-xl border border-[#e1e1e1] bg-white p-6 shadow-[0_6px_16px_rgba(0,0,0,0.05)]">
      <div className="text-[12px] uppercase tracking-[0.16em] text-merrow-textMuted">
        Stitch Samples
      </div>
      <h3 className="mt-2 text-[16px] font-semibold text-merrow-textMain">
        {machineName} Stitch Gallery
      </h3>

      {loading ? (
        <div className="mt-4 flex h-32 items-center justify-center">
          <div className="text-sm text-merrow-textMuted">Loading samples...</div>
        </div>
      ) : (
        <>
          {/* Thumbnail Grid */}
          <div className="mt-4 grid grid-cols-4 gap-2 sm:grid-cols-6 md:grid-cols-8">
            {images.slice(0, 16).map((img) => (
              <button
                key={img.id}
                onClick={() => setSelectedImage(img)}
                className="group relative aspect-square overflow-hidden rounded-lg border border-gray-200 bg-gray-100 transition-all hover:border-merrow-red hover:shadow-md"
              >
                <Image
                  src={img.imageUrl}
                  alt={img.title || "Stitch sample"}
                  fill
                  sizes="100px"
                  className="object-cover transition-transform group-hover:scale-105"
                />
              </button>
            ))}
          </div>

          {images.length > 16 && (
            <p className="mt-3 text-center text-[12px] text-merrow-textMuted">
              Showing 16 of {images.length} samples
            </p>
          )}

          <div className="mt-4 flex gap-3">
            <MerrowButton href={stitchBrowserUrl} variant="outline">
              View All in Stitch Browser
            </MerrowButton>
          </div>
        </>
      )}

      {/* Lightbox Modal */}
      {selectedImage && (
        <div
          className="fixed inset-0 z-50 flex items-center justify-center bg-black/80 p-4"
          onClick={() => setSelectedImage(null)}
        >
          <div
            className="relative max-h-[90vh] max-w-[90vw] overflow-hidden rounded-lg bg-white shadow-2xl"
            onClick={(e) => e.stopPropagation()}
          >
            {/* Close button */}
            <button
              onClick={() => setSelectedImage(null)}
              className="absolute right-3 top-3 z-10 flex h-8 w-8 items-center justify-center rounded-full bg-black/50 text-white transition-colors hover:bg-black/70"
            >
              ✕
            </button>

            {/* Image */}
            <div className="relative h-[70vh] w-[80vw] max-w-4xl">
              <Image
                src={selectedImage.imageUrl}
                alt={selectedImage.title || "Stitch sample"}
                fill
                className="object-contain"
                sizes="80vw"
              />
            </div>

            {/* Caption */}
            <div className="border-t bg-white p-4">
              {selectedImage.title && (
                <h4 className="font-medium text-merrow-textMain">
                  {selectedImage.title}
                </h4>
              )}
              {selectedImage.tags.length > 0 && (
                <div className="mt-2 flex flex-wrap gap-1">
                  {selectedImage.tags.map((tag, i) => (
                    <span
                      key={i}
                      className="rounded-full bg-gray-100 px-2 py-0.5 text-xs text-merrow-textMuted"
                    >
                      {tag}
                    </span>
                  ))}
                </div>
              )}
            </div>
          </div>
        </div>
      )}
    </section>
  );
}
