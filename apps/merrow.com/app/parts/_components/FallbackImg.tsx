"use client";

import { useMemo, useState } from "react";

type Props = Omit<React.ImgHTMLAttributes<HTMLImageElement>, "src"> & {
  candidates: string[];
};

function dedupeNonEmpty(candidates: string[]): string[] {
  const seen = new Set<string>();
  const out: string[] = [];
  for (const raw of candidates) {
    const value = (raw || "").trim();
    if (!value) continue;
    if (seen.has(value)) continue;
    seen.add(value);
    out.push(value);
  }
  return out;
}

export function FallbackImg({ candidates, onError, ...imgProps }: Props) {
  const all = useMemo(() => dedupeNonEmpty(candidates), [candidates]);
  const [idx, setIdx] = useState(0);

  const src = all[idx];
  if (!src) return null;

  return (
    <img
      {...imgProps}
      src={src}
      onError={(e) => {
        if (idx < all.length - 1) {
          setIdx(idx + 1);
          return;
        }
        onError?.(e);
      }}
    />
  );
}

