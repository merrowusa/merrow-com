"use client";

import { FallbackImg } from "./FallbackImg";

interface MachineImageProps {
  src: string;
  alt: string;
}

export function MachineImage({ src, alt }: MachineImageProps) {
  return (
    <FallbackImg
      candidates={[src, "/images/placeholders/unicorn.svg"]}
      alt={alt}
      className="max-h-[400px] w-auto object-contain"
      loading="lazy"
    />
  );
}
