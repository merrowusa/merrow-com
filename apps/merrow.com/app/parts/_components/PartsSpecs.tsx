// @version parts-specs v1.0
// Specs + pricing box for parts detail page

import React from "react";

interface PartsSpecsProps {
  dimensions?: string;
  weight?: string;
  mrsp?: string;
}

export function PartsSpecs({ dimensions, weight, mrsp }: PartsSpecsProps) {
  return (
    <div className="rounded-xl border border-[#e1e1e1] bg-[#f5f5f5] p-5 shadow-[0_8px_18px_rgba(0,0,0,0.04)]">
      <div className="text-[11px] uppercase tracking-[0.16em] text-merrow-textMuted">
        Specifications
      </div>
      <div className="mt-3 space-y-2 text-[13px] text-merrow-textSub">
        {dimensions ? (
          <div className="flex items-center justify-between gap-4">
            <span className="text-merrow-textMain">Dimensions</span>
            <span>{dimensions}</span>
          </div>
        ) : null}
        {weight ? (
          <div className="flex items-center justify-between gap-4">
            <span className="text-merrow-textMain">Weight</span>
            <span>{weight}</span>
          </div>
        ) : null}
        {!dimensions && !weight ? (
          <div>Specifications are not available for this part.</div>
        ) : null}
      </div>

      <div className="mt-4 border-t border-[#d7d7d7] pt-4">
        <div className="text-[11px] uppercase tracking-[0.16em] text-merrow-textMuted">
          Pricing
        </div>
        <div className="mt-2 text-[13px] text-merrow-textSub">
          {mrsp ? (
            <div className="text-merrow-textMain">MSRP: {mrsp}</div>
          ) : (
            <div className="text-merrow-textMain">Pricing available on request.</div>
          )}
          <div className="mt-1">Contact your Merrow Agent for pricing.</div>
        </div>
      </div>
    </div>
  );
}
