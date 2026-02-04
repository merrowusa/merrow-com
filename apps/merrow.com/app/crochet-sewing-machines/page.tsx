// @version crochet-index v2.0
// Route: /crochet-sewing-machines

import { Metadata } from "next";
import Link from "next/link";

export const metadata: Metadata = {
  title: "Crochet Sewing Machines | Merrow Industrial",
  description:
    "Merrow crochet sewing machines for industrial textile production. High-speed crochet stitching for blankets, emblems, patches, and decorative edge finishing.",
};

export default function CrochetMachinesPage() {
  return (
    <main className="text-merrow-textMain">
      <div className="mx-auto max-w-merrow px-4 py-12">
        <h1 className="text-2xl font-semibold mb-4">Crochet Sewing Machines</h1>

        {/* Intro paragraph */}
        <p className="text-merrow-textSub mb-4 max-w-[700px]">
          Merrow invented the crochet sewing machine in 1838 and continues to manufacture
          these distinctive machines for emblem edging, blanket finishing, and decorative
          applications. Our crochet machines create the iconic raised edge that defines
          military patches, scout badges, and premium textile goods.
        </p>

        {/* Key features */}
        <div className="mb-8">
          <h2 className="text-sm font-semibold uppercase tracking-wide text-merrow-textMuted mb-2">
            Key Features
          </h2>
          <ul className="text-sm text-merrow-textSub space-y-1">
            <li>• High-speed operation for production environments</li>
            <li>• Distinctive raised crochet edge finish</li>
            <li>• Adjustable stitch density and width</li>
            <li>• Built for 24/7 industrial use</li>
          </ul>
        </div>

        {/* Applications */}
        <div className="mb-8">
          <h2 className="text-sm font-semibold uppercase tracking-wide text-merrow-textMuted mb-2">
            Common Applications
          </h2>
          <ul className="text-sm text-merrow-textSub space-y-1">
            <li>• Military and law enforcement patches</li>
            <li>• Scout and organizational emblems</li>
            <li>• Blanket and towel edging</li>
            <li>• Premium brand labels and tags</li>
            <li>• Decorative trim on apparel</li>
          </ul>
        </div>

        {/* CTA */}
        <div className="flex gap-4 mb-10">
          <Link
            href="/Sergers_and_Overlock_Sewing_Machines"
            className="inline-block px-4 py-2 bg-[#3f3f3f] text-white text-sm font-semibold hover:bg-[#2a2a2a]"
          >
            View Crochet Models
          </Link>
          <Link
            href="/support/request-quote"
            className="inline-block px-4 py-2 border border-merrow-border text-sm font-semibold hover:bg-merrow-heroBg"
          >
            Request a Quote
          </Link>
        </div>

        {/* Related pages */}
        <div className="border-t border-merrow-border pt-6">
          <h2 className="text-sm font-semibold uppercase tracking-wide text-merrow-textMuted mb-3">
            Related
          </h2>
          <div className="flex flex-wrap gap-4 text-sm">
            <Link href="/machines" className="text-merrow-link hover:underline">
              All Machines
            </Link>
            <Link href="/70class" className="text-merrow-link hover:underline">
              70 Class Machines
            </Link>
            <Link href="/sewing/applications" className="text-merrow-link hover:underline">
              Browse by Application
            </Link>
            <Link href="/parts" className="text-merrow-link hover:underline">
              Parts & Accessories
            </Link>
          </div>
        </div>
      </div>
    </main>
  );
}
