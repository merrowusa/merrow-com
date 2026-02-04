// @version what-is-a-serger v1.0
// Route: /Sergers_and_Overlock_Sewing_Machines/what-is-a-serger

import { Metadata } from "next";
import Link from "next/link";

export const metadata: Metadata = {
  title: "What is a Serger? | Industrial Serger Guide by Merrow",
  description:
    "Learn what a serger is and how it differs from a sewing machine. Understand serger stitches, applications, and why industrial sergers are essential.",
};

export default function WhatIsSergerPage() {
  return (
    <main className="text-merrow-textMain">
      <div className="mx-auto max-w-merrow px-4 py-12">
        <h1 className="text-2xl font-semibold mb-4">What is a Serger?</h1>
        <div className="prose prose-sm max-w-none">
          <p className="text-merrow-textSub mb-8">
            A serger (also known as an overlock machine) is a specialized sewing
            machine that trims, encloses, and finishes fabric edges in a single
            operation.
          </p>
          <h2 className="text-lg font-semibold mt-8 mb-4">
            Serger vs. Sewing Machine
          </h2>
          <p>
            While a standard sewing machine creates a lockstitch using two
            threads, a serger uses 3-5 threads to create an overlock stitch that
            simultaneously sews, trims, and finishes the fabric edge.
          </p>
          <h2 className="text-lg font-semibold mt-8 mb-4">
            Industrial Applications
          </h2>
          <p>
            Industrial sergers are essential for high-volume garment
            manufacturing, providing durable, stretchable seams for activewear,
            underwear, and knit garments.
          </p>
        </div>
        <div className="mt-8">
          <Link href="/machines" className="text-merrow-link">
            View serger machines →
          </Link>
        </div>
      </div>
    </main>
  );
}
