// @version parts-index v1.0
// Route: /parts - Parts index page

import { Metadata } from "next";
import Link from "next/link";

export const metadata: Metadata = {
  title: "Merrow Parts & Accessories | Genuine Replacement Parts",
  description:
    "Find genuine Merrow replacement parts and accessories for your industrial sewing machine. Browse by machine class or search by part number.",
};

export default function PartsPage() {
  return (
    <main className="text-merrow-textMain">
      <div className="mx-auto max-w-merrow px-4 py-12">
        <h1 className="text-2xl font-semibold mb-4">Parts & Accessories</h1>

        {/* Intro paragraph */}
        <p className="text-merrow-textSub mb-4 max-w-[700px]">
          Genuine Merrow replacement parts keep your machines running at peak performance.
          Our parts department stocks components for all current and many legacy machine models.
        </p>

        {/* What you'll find */}
        <div className="mb-8">
          <h2 className="text-sm font-semibold uppercase tracking-wide text-merrow-textMuted mb-2">
            Available Parts
          </h2>
          <ul className="text-sm text-merrow-textSub space-y-1">
            <li>• Needles, loopers, and thread guides</li>
            <li>• Feed dogs, presser feet, and stitch plates</li>
            <li>• Motors, pulleys, and drive components</li>
            <li>• Oils, lubricants, and maintenance supplies</li>
          </ul>
        </div>

        {/* Action cards */}
        <div className="grid gap-6 md:grid-cols-2 mb-10">
          <Link
            href="/support/request-quote"
            className="block p-6 border border-merrow-border rounded-lg hover:bg-merrow-heroBg"
          >
            <h2 className="font-semibold">Request a Quote</h2>
            <p className="text-sm text-merrow-textSub">
              Get pricing for parts and accessories
            </p>
          </Link>
          <Link
            href="/support"
            className="block p-6 border border-merrow-border rounded-lg hover:bg-merrow-heroBg"
          >
            <h2 className="font-semibold">Contact Parts Department</h2>
            <p className="text-sm text-merrow-textSub">
              Speak with our parts specialists
            </p>
          </Link>
        </div>

        {/* How to order */}
        <div className="bg-merrow-heroBg border border-merrow-border rounded-lg p-6 mb-10">
          <h2 className="font-semibold mb-2">How to Order Parts</h2>
          <p className="text-sm text-merrow-textSub mb-3">
            To order replacement parts, have your machine model number ready and contact us:
          </p>
          <div className="text-sm space-y-1">
            <p>Email: <a href="mailto:parts@merrow.com" className="text-merrow-link">parts@merrow.com</a></p>
            <p>Phone: 508.689.4095</p>
          </div>
        </div>

        {/* Related pages */}
        <div className="border-t border-merrow-border pt-6">
          <h2 className="text-sm font-semibold uppercase tracking-wide text-merrow-textMuted mb-3">
            Related
          </h2>
          <div className="flex flex-wrap gap-4 text-sm">
            <Link href="/support" className="text-merrow-link hover:underline">
              Support Center
            </Link>
            <Link href="/machines" className="text-merrow-link hover:underline">
              Machine Catalog
            </Link>
            <Link href="/agentmap.html" className="text-merrow-link hover:underline">
              Find a Dealer
            </Link>
          </div>
        </div>
      </div>
    </main>
  );
}
