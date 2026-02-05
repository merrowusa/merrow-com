// @version stitch-gallery v1.0
// Flickr stitch sample CTA

import { MerrowButton } from "../../../../../packages/ui";

interface StitchGalleryProps {
  flickrSet: string;
  machineName: string;
}

export function StitchGallery({ flickrSet, machineName }: StitchGalleryProps) {
  if (!flickrSet) return null;

  const flickrUrl = `https://www.flickr.com/photos/merrowmachine/sets/${flickrSet}`;

  return (
    <section className="rounded-xl border border-[#e1e1e1] bg-white p-6 shadow-[0_6px_16px_rgba(0,0,0,0.05)]">
      <div className="text-[12px] uppercase tracking-[0.16em] text-merrow-textMuted">
        Stitch Samples
      </div>
      <h3 className="mt-2 text-[16px] font-semibold text-merrow-textMain">
        View stitch samples for {machineName}
      </h3>
      <p className="mt-2 text-[13px] text-merrow-textSub">
        Explore sample seams and stitch variations from this machine in the Merrow Flickr gallery.
      </p>
      <div className="mt-4">
        <MerrowButton href={flickrUrl}>View Stitch Samples</MerrowButton>
      </div>
    </section>
  );
}
