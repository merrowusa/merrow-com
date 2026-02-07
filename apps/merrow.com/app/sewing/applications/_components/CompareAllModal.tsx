"use client";

import { useState } from "react";

export interface CompareApplicationRow {
  dKey: string;
  title: string;
  machineSpeed: string;
  stitchWidth: string;
  fabricMaterial: string;
  machineModel: string;
  machinePrice: string;
}

interface CompareAllModalProps {
  categoryName: string;
  items: CompareApplicationRow[];
}

export function CompareAllModal({ categoryName, items }: CompareAllModalProps) {
  const [open, setOpen] = useState(false);

  if (!items.length) return null;

  return (
    <>
      <button
        type="button"
        onClick={() => setOpen(true)}
        className="inline-flex items-center rounded border border-[#808080] bg-white px-4 py-2 text-[12px] font-semibold uppercase tracking-[0.08em] text-[#4a4a4a] hover:bg-[#f2f2f2]"
      >
        Compare all
      </button>

      {open ? (
        <div
          className="fixed inset-0 z-[90] flex items-start justify-center bg-black/70 p-4 pt-12"
          onClick={() => setOpen(false)}
        >
          <div
            className="max-h-[88vh] w-full max-w-6xl overflow-auto rounded border border-[#9c9c9c] bg-white"
            onClick={(event) => event.stopPropagation()}
          >
            <div className="sticky top-0 z-10 flex items-center justify-between border-b border-[#d2d2d2] bg-white px-5 py-3">
              <h3 className="text-[18px] text-[#333]">
                Compare {categoryName} Applications
              </h3>
              <button
                type="button"
                onClick={() => setOpen(false)}
                className="rounded border border-[#aaa] px-3 py-1 text-[12px] text-[#555] hover:bg-[#f2f2f2]"
              >
                Close
              </button>
            </div>

            <div className="p-4">
              <table className="w-full border-collapse text-left text-[12px]">
                <thead>
                  <tr className="bg-[#f4f4f4] text-[#333]">
                    <th className="border border-[#d2d2d2] px-3 py-2">Application</th>
                    <th className="border border-[#d2d2d2] px-3 py-2">Speed</th>
                    <th className="border border-[#d2d2d2] px-3 py-2">Stitch Width</th>
                    <th className="border border-[#d2d2d2] px-3 py-2">Material</th>
                    <th className="border border-[#d2d2d2] px-3 py-2">Machine</th>
                    <th className="border border-[#d2d2d2] px-3 py-2">Price</th>
                  </tr>
                </thead>
                <tbody>
                  {items.map((item, index) => (
                    <tr
                      key={item.dKey}
                      className={index % 2 === 0 ? "bg-white" : "bg-[#fafafa]"}
                    >
                      <td className="border border-[#dcdcdc] px-3 py-2 font-semibold text-[#1f1f1f]">
                        {item.title}
                      </td>
                      <td className="border border-[#dcdcdc] px-3 py-2">{item.machineSpeed || "-"}</td>
                      <td className="border border-[#dcdcdc] px-3 py-2">{item.stitchWidth || "-"}</td>
                      <td className="border border-[#dcdcdc] px-3 py-2">{item.fabricMaterial || "-"}</td>
                      <td className="border border-[#dcdcdc] px-3 py-2">{item.machineModel || "-"}</td>
                      <td className="border border-[#dcdcdc] px-3 py-2">{item.machinePrice || "-"}</td>
                    </tr>
                  ))}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      ) : null}
    </>
  );
}
