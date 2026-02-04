// @version sewing-index v1.0
// Route: /sewing

import { Metadata } from "next";
import Link from "next/link";

export const metadata: Metadata = {
  title: "Industrial Sewing Machines | Merrow Sewing Machine Company",
  description:
    "Explore Merrow industrial sewing machines for fashion, technical textiles, and specialty applications. Over 180 years of innovation in overlock technology.",
};

export default function SewingPage() {
  return (
    <main className="text-merrow-textMain">
      <div className="mx-auto max-w-merrow px-4 py-12">
        <h1 className="text-2xl font-semibold mb-4">Industrial Sewing Machines</h1>

        {/* Intro paragraph */}
        <p className="text-merrow-textSub mb-4 max-w-[700px]">
          Merrow builds production-grade sewing machines for manufacturers who need
          precision, durability, and speed. Our machines are used in fashion apparel,
          technical textiles, and high-volume continuous processing operations worldwide.
        </p>

        {/* What you'll find */}
        <div className="mb-8">
          <h2 className="text-sm font-semibold uppercase tracking-wide text-merrow-textMuted mb-2">
            What You&apos;ll Find
          </h2>
          <ul className="text-sm text-merrow-textSub space-y-1">
            <li>• Over 360 machine models for specialized applications</li>
            <li>• Overlock, shell stitch, and edge finishing capabilities</li>
            <li>• Solutions for lightweight fabrics to heavy industrial materials</li>
            <li>• Machines built in the USA since 1838</li>
          </ul>
        </div>

        {/* Category cards */}
        <div className="grid gap-6 md:grid-cols-3 mb-10">
          <Link
            href="/fashion-sewing"
            className="block p-6 border border-merrow-border rounded-lg hover:bg-merrow-heroBg"
          >
            <h2 className="font-semibold">Fashion Sewing</h2>
            <p className="text-sm text-merrow-textSub">
              Apparel and garment manufacturing
            </p>
          </Link>
          <Link
            href="/technical-sewing"
            className="block p-6 border border-merrow-border rounded-lg hover:bg-merrow-heroBg"
          >
            <h2 className="font-semibold">Technical Sewing</h2>
            <p className="text-sm text-merrow-textSub">
              Industrial and technical textiles
            </p>
          </Link>
          <Link
            href="/end-to-end-seaming"
            className="block p-6 border border-merrow-border rounded-lg hover:bg-merrow-heroBg"
          >
            <h2 className="font-semibold">End-to-End Seaming</h2>
            <p className="text-sm text-merrow-textSub">
              Continuous processing solutions
            </p>
          </Link>
        </div>

        {/* Related pages */}
        <div className="border-t border-merrow-border pt-6">
          <h2 className="text-sm font-semibold uppercase tracking-wide text-merrow-textMuted mb-3">
            Related
          </h2>
          <div className="flex flex-wrap gap-4 text-sm">
            <Link href="/sewing/applications" className="text-merrow-link hover:underline">
              Browse by Application
            </Link>
            <Link href="/machines" className="text-merrow-link hover:underline">
              All Machines
            </Link>
            <Link href="/70class" className="text-merrow-link hover:underline">
              70 Class Machines
            </Link>
            <Link href="/support" className="text-merrow-link hover:underline">
              Support
            </Link>
          </div>
        </div>
      </div>
    </main>
  );
}
