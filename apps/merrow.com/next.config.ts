import type { NextConfig } from "next";

const nextConfig: NextConfig = {
  // Enable React strict mode
  reactStrictMode: true,

  // Transpile packages from monorepo
  transpilePackages: ["@merrow/data-layer", "@merrow/ui"],

  // Image optimization for S3-hosted images
  images: {
    remotePatterns: [
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
        source: "/ncs1.php",
        destination: "/customer-stories/featured/:s",
        permanent: true,
        has: [{ type: "query", key: "s", value: "(?<s>.*)" }],
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
