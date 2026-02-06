// DevHeader — Visual version indicator for deploy verification
// Color and version updated by /ship skill on each deploy

// ============================================
// VERSION CONTROL — Updated by /ship
// ============================================
const SITE_VERSION = "0.1.0";
const BUILD_NUMBER = 1;
const HEADER_COLOR = "#6366f1"; // indigo-500 (initial)
// ============================================

// Color palette for rotation (8 colors)
// /ship cycles through these on each deploy
export const COLOR_PALETTE = [
  "#6366f1", // indigo-500
  "#8b5cf6", // violet-500
  "#ec4899", // pink-500
  "#f43f5e", // rose-500
  "#f97316", // orange-500
  "#eab308", // yellow-500
  "#22c55e", // green-500
  "#06b6d4", // cyan-500
];

export function DevHeader() {
  // Keep hidden by default so parity snapshots match legacy output.
  const showHeader = process.env.NEXT_PUBLIC_SHOW_DEV_HEADER === "1";

  if (!showHeader) return null;

  return (
    <div
      className="w-full py-1 px-4 text-white text-xs font-mono flex justify-between items-center"
      style={{ backgroundColor: HEADER_COLOR }}
    >
      <span>merrow.com refactor</span>
      <span>
        v{SITE_VERSION} (build {BUILD_NUMBER})
      </span>
    </div>
  );
}
