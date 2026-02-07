import type { NextConfig } from "next";

const nextConfig: NextConfig = {
  // Enable React strict mode
  reactStrictMode: true,

  // Transpile packages from monorepo
  transpilePackages: ["@merrow/data-layer", "@merrow/ui"],

  // Image optimization for remote assets
  images: {
    remotePatterns: [
      {
        protocol: "https",
        hostname: "pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev",
        pathname: "/**",
      },
      {
        protocol: "https",
        hostname: "merrow-media.s3.amazonaws.com",
        pathname: "/**",
      },
    ],
  },

  // Redirects from legacy URLs
  async redirects() {
    return [
      // Legacy PHP redirects
      {
        source: "/mg_1.php",
        destination: "/Sergers_and_Overlock_Sewing_Machines/:cp",
        permanent: true,
        has: [{ type: "query", key: "cp", value: "(?<cp>.*)" }],
      },
      {
        source: "/ncp1.php",
        destination: "/fashion-sewing",
        has: [{ type: "query", key: "a", value: "f" }],
        permanent: true,
      },
      {
        source: "/ncp1.php",
        destination: "/technical-sewing",
        has: [{ type: "query", key: "a", value: "t" }],
        permanent: true,
      },
      {
        source: "/ncp1.php",
        destination: "/end-to-end-seaming",
        has: [{ type: "query", key: "a", value: "e" }],
        permanent: true,
      },
      {
        source: "/nhp1.php",
        destination: "/overlock-history",
        permanent: true,
      },
      {
        source: "/a.php",
        destination: "/sewing/applications/:app",
        permanent: true,
        has: [{ type: "query", key: "app", value: "(?<app>.*)" }],
      },
      {
        source: "/sewing/applications/5512",
        destination: "/sewing/applications/emblem-edging",
        permanent: true,
      },
      {
        source: "/sewing/applications/5513",
        destination: "/sewing/applications/end-to-end-seaming",
        permanent: true,
      },
      {
        source: "/sewing/applications/5514",
        destination: "/sewing/applications/blanket-stitching",
        permanent: true,
      },
      {
        source: "/sewing/applications/5515",
        destination: "/sewing/applications/lingerie",
        permanent: true,
      },
      {
        source: "/sewing/applications/5516",
        destination: "/sewing/applications/baby-garments",
        permanent: true,
      },
      {
        source: "/sewing/applications/5517",
        destination: "/sewing/applications/military-seaming",
        permanent: true,
      },
      {
        source: "/sewing/applications/5518",
        destination: "/sewing/applications/womens-garments",
        permanent: true,
      },
      {
        source: "/sewing/applications/5519",
        destination: "/sewing/applications/home-decor",
        permanent: true,
      },
      {
        source: "/ncs1.php",
        destination: "/customer-stories/featured/:s",
        permanent: true,
        has: [{ type: "query", key: "s", value: "(?<s>.*)" }],
      },
      {
        source: "/support.html",
        destination: "/support",
        permanent: true,
      },
      {
        source: "/contact_general.php",
        destination: "/contact_general/label/:label/key/:key",
        permanent: true,
        has: [
          { type: "query", key: "label", value: "(?<label>.*)" },
          { type: "query", key: "key", value: "(?<key>.*)" },
        ],
      },
      {
        source: "/contact_general.php",
        destination: "/contact_general/key/:key",
        permanent: true,
        has: [{ type: "query", key: "key", value: "(?<key>.*)" }],
      },
      {
        source: "/contact_general.php",
        destination: "/contact_general.html",
        permanent: true,
      },
      {
        source: "/contact_general",
        destination: "/contact_general.html",
        permanent: true,
      },
      // Training redirect
      {
        source: "/training",
        destination: "https://merrowedge.com/pages/training-support",
        permanent: false,
      },
      // Domain redirects handled at DNS/proxy level
    ];
  },

  // Headers for caching
  async headers() {
    return [
      {
        source: "/:path*",
        headers: [
          {
            key: "X-DNS-Prefetch-Control",
            value: "on",
          },
        ],
      },
      {
        source: "/api/:path*",
        headers: [
          {
            key: "Cache-Control",
            value: "no-store",
          },
        ],
      },
    ];
  },
};

export default nextConfig;
