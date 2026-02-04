// @version overlock-index v1.0
// Route: /Overlock_Sewing_Machines

import { Metadata } from "next";
import Link from "next/link";

export const metadata: Metadata = {
  title: "Overlock Sewing Machines | Merrow Industrial",
  description:
    "Merrow overlock sewing machines for industrial applications. High-speed edge finishing, seaming, and decorative stitching for garments and textiles.",
};

export default function OverlockMachinesPage() {
  return (
    <main className="text-merrow-textMain">
      <div className="mx-auto max-w-merrow px-4 py-12">
        <h1 className="text-2xl font-semibold mb-4">Overlock Sewing Machines</h1>
        <p className="text-merrow-textSub mb-8">
          Industrial overlock machines for edge finishing and seaming.
        </p>
        <div className="prose prose-sm">
          <p>
            Merrow invented the overlock stitch in 1838 and continues to lead
            the industry with innovative overlock sewing solutions for garment
            manufacturing and technical textile applications.
          </p>
        </div>
        <div className="mt-8 space-y-4">
          <Link href="/overlock-history" className="block text-merrow-link">
            Learn about overlock history →
          </Link>
          <Link href="/machines" className="block text-merrow-link">
            View all machines →
          </Link>
        </div>
      </div>
    </main>
  );
}
