"use client";

interface MachineImageProps {
  src: string;
  alt: string;
}

export function MachineImage({ src, alt }: MachineImageProps) {
  return (
    <img
      src={src}
      alt={alt}
      className="max-h-[400px] w-auto object-contain"
      onError={(e) => {
        // Fallback if image doesn't exist
        (e.target as HTMLImageElement).style.display = "none";
      }}
    />
  );
}
