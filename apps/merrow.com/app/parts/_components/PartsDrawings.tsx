// @version parts-drawings v1.0
// Assembly drawings grid for parts detail page

import React from "react";
import type { PartsDrawing } from "../../../../../packages/data-layer/queries/parts";

interface PartsDrawingsProps {
  drawings: PartsDrawing[];
}

export function PartsDrawings({ drawings }: PartsDrawingsProps) {
  if (drawings.length === 0) return null;

  const thumbnails = drawings.filter((drawing) => drawing.pdUrlTiny);

  return (
    <section className="space-y-4">
      <div className="text-[12px] uppercase tracking-[0.18em] text-merrow-textMuted">
        Assembly Drawings
      </div>
      <div className="grid gap-6 md:grid-cols-2">
        {drawings.map((drawing) => {
          const imageUrl = drawing.pdImg || drawing.pdUrlLarge;
          const largeUrl = drawing.pdUrlLarge || drawing.pdImg;
          return (
            <div
              key={drawing.pd}
              className="rounded-xl border border-[#e1e1e1] bg-white p-4 shadow-[0_6px_16px_rgba(0,0,0,0.05)]"
            >
              {imageUrl ? (
                <a href={largeUrl} target="_blank" rel="noopener noreferrer">
                  <img
                    src={imageUrl}
                    alt={drawing.description || drawing.pd}
                    className="w-full rounded border border-merrow-border"
                  />
                </a>
              ) : null}
              <div className="mt-3 text-[13px] text-merrow-textSub">
                {drawing.description || drawing.pd}
              </div>
            </div>
          );
        })}
      </div>

      {thumbnails.length > 1 ? (
        <div>
          <div className="text-[11px] uppercase tracking-[0.16em] text-merrow-textMuted">
            Other assemblies
          </div>
          <div className="mt-2 flex flex-wrap gap-2">
            {thumbnails.map((drawing) => (
              <a
                key={`${drawing.pd}-thumb`}
                href={drawing.pdUrlLarge || drawing.pdImg}
                target="_blank"
                rel="noopener noreferrer"
              >
                <img
                  src={drawing.pdUrlTiny}
                  alt={drawing.description || drawing.pd}
                  className="h-16 w-16 rounded border border-merrow-border object-cover"
                />
              </a>
            ))}
          </div>
        </div>
      ) : null}
    </section>
  );
}
