const FALLBACK_R2_ASSET_BASE =
  "https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev";

const LEGACY_ASSET_HOSTS = new Set([
  "merrow-media.s3.amazonaws.com",
  "decorativeedging.s3.amazonaws.com",
  "merrowservices.s3.amazonaws.com",
  "marketing-downloads.s3.amazonaws.com",
]);

function trimTrailingSlash(value: string): string {
  return value.replace(/\/+$/, "");
}

function withLeadingSlash(value: string): string {
  return value.startsWith("/") ? value : `/${value}`;
}

function getAssetBase(): string {
  const fromEnv = process.env.NEXT_PUBLIC_MERROW_ASSET_BASE?.trim();
  return trimTrailingSlash(fromEnv || FALLBACK_R2_ASSET_BASE);
}

export const MERROW_ASSET_BASE_URL = getAssetBase();

export function toR2AssetUrl(value: string): string {
  if (!value) return "";

  const input = value.trim();
  if (!input) return "";
  if (input.startsWith("/") && !input.startsWith("//")) return input;

  const normalized = input.startsWith("//") ? `https:${input}` : input;

  try {
    const url = new URL(normalized);
    if (!LEGACY_ASSET_HOSTS.has(url.hostname.toLowerCase())) {
      return input;
    }

    const path = withLeadingSlash(url.pathname.replace(/^\/+/, ""));
    return `${MERROW_ASSET_BASE_URL}${path}${url.search}${url.hash}`;
  } catch {
    return input;
  }
}

function escapeRegex(value: string): string {
  return value.replace(/[.*+?^${}()|[\]\\]/g, "\\$&");
}

const LEGACY_HOST_PATTERN = Array.from(LEGACY_ASSET_HOSTS)
  .map(escapeRegex)
  .join("|");

const LEGACY_ASSET_URL_REGEX = new RegExp(
  `(?:https?:)?//(?:${LEGACY_HOST_PATTERN})(/[^"'\\s<>)]*)`,
  "gi",
);

export function rewriteLegacyAssetHostsInHtml(html: string): string {
  if (!html) return "";

  return html.replace(LEGACY_ASSET_URL_REGEX, (_, path: string) => {
    const normalizedPath = withLeadingSlash(String(path || "").replace(/^\/+/, ""));
    return `${MERROW_ASSET_BASE_URL}${normalizedPath}`;
  });
}
