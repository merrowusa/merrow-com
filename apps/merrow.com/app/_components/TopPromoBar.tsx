// @version top-promo-bar v3.0
// Parity: stacked promo bars (red alert + black ActiveSeam strip)

export function TopPromoBar() {
  return (
    <div data-testid="top-promo-bar">
      {/* Red alert bar (topmost) */}
      <div className="bg-[#b10000] text-white text-[11px] h-[26px] flex items-center justify-center relative">
        <span className="font-semibold tracking-[0.02em]">
          INTRODUCING: MERROW ROBOTS
        </span>
        <a
          href="https://merrowedge.com"
          className="ml-3 inline-flex items-center bg-[#8e0000] px-3 py-[2px] text-[10px] font-semibold uppercase"
        >
          Learn More
        </a>
        <button
          type="button"
          aria-label="Dismiss"
          className="absolute right-3 text-[12px] opacity-80 hover:opacity-100"
        >
          ×
        </button>
      </div>

      {/* Black ActiveSeam strip */}
      <div className="bg-black h-[16px] flex items-center justify-center gap-2">
        <span className="text-[9px] tracking-[0.02em] text-white font-bold">
          NEW MERROW ACTIVESEAM
        </span>
        <span className="text-[9px] tracking-[0.02em] text-white font-normal">
          VISIT{" "}
          <a
            href="https://activeseam.com"
            className="text-[#66CCFF] underline hover:text-white"
          >
            MERROW ACTIVESEAM
          </a>{" "}
          FOR DETAILS
        </span>
        <a href="https://www.activeseam.com" className="ml-2 hidden sm:inline-flex">
          <img
            src="https://activeseam.com/ActiveSeam_Images/merrow_activeseam_logo.png"
            alt="ActiveSeam"
            className="h-[12px] w-auto"
          />
        </a>
      </div>
    </div>
  );
}
