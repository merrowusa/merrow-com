// @version v3-index v1.0
// Route: /v3

import { Metadata } from "next";
import Link from "next/link";

export const metadata: Metadata = {
  title: "V3 Next Generation | Merrow Sewing Machine Innovation",
  description:
    "Explore Merrow V3 next-generation sewing technology. Advanced features, improved ergonomics, and enhanced performance for modern industrial sewing applications.",
};

export default function V3Page() {
  return (
    <main className="text-merrow-textMain">
      <div className="mx-auto max-w-merrow px-4 py-12">
        <h1 className="text-2xl font-semibold mb-4">V3 - Next Generation</h1>
        <p className="text-merrow-textSub mb-8">
          The future of industrial sewing technology.
        </p>
        <div className="prose prose-sm">
          <p>
            Merrow V3 represents the next generation of industrial sewing
            innovation, combining advanced engineering with improved
            ergonomics and enhanced performance.
          </p>
        </div>
        <div className="mt-8 space-y-4">
          <Link href="/v3/technical-sewing" className="block text-merrow-link">
            V3 Technical Sewing →
          </Link>
          <Link href="/machines" className="block text-merrow-link">
            View all machines →
          </Link>
        </div>
      </div>
    </main>
  );
}
