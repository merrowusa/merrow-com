"use client";

import { useRouter } from "next/navigation";
import { useState } from "react";

function enc(value: string) {
  return encodeURIComponent(value);
}

export function PartsLookupForm() {
  const router = useRouter();
  const [orderCode, setOrderCode] = useState("");
  const [machineCode, setMachineCode] = useState("");

  return (
    <form
      className="mb-3 rounded border border-[#b7b7b7] bg-[#efefef] p-3"
      data-testid="parts-lookup-form"
      onSubmit={(e) => {
        e.preventDefault();
        const cp = orderCode.trim();
        if (!cp) return;
        const code = (machineCode.trim() || cp).trim();
        router.push(`/parts/${enc(cp)}/${enc(code)}`);
      }}
    >
      <div className="text-[13px] font-semibold text-[#b00707]">Find a Part</div>
      <div className="mt-2 grid grid-cols-[1fr_1fr_auto] gap-2">
        <label className="text-[12px] text-[#4c4c4c]">
          <div className="mb-1">Order Code (cp)</div>
          <input
            value={orderCode}
            onChange={(e) => setOrderCode(e.target.value)}
            placeholder="e.g. 70d3b2"
            className="h-[28px] w-full rounded border border-[#b7b7b7] bg-white px-2 text-[12px]"
            autoComplete="off"
            inputMode="text"
          />
        </label>

        <label className="text-[12px] text-[#4c4c4c]">
          <div className="mb-1">Machine Code (mmc_code)</div>
          <input
            value={machineCode}
            onChange={(e) => setMachineCode(e.target.value)}
            placeholder="optional (leave blank if unknown)"
            className="h-[28px] w-full rounded border border-[#b7b7b7] bg-white px-2 text-[12px]"
            autoComplete="off"
            inputMode="text"
          />
        </label>

        <div className="flex items-end">
          <button
            type="submit"
            className="h-[28px] rounded border border-[#b7b7b7] bg-white px-3 text-[12px] text-[#4c4c4c] hover:border-[#9a9a9a]"
          >
            Go
          </button>
        </div>
      </div>

      <div className="mt-2 text-[11px] leading-[14px] text-[#666666]">
        If you only have one code, enter it once. This page will redirect to the canonical URL when needed.
      </div>
    </form>
  );
}

