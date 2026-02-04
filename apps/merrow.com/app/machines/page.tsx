// @version machines-catalog v1.0
// Route: /machines - Machine catalog index page

import { Metadata } from "next";
import Link from "next/link";

export const metadata: Metadata = {
  title: "Merrow Industrial Sewing Machines | Complete Machine Catalog",
  description:
    "Browse the complete catalog of Merrow industrial sewing machines. Find overlock, serger, and specialty machines for fashion and technical textiles.",
};

export default function MachinesPage() {
  return (
    <main className="text-merrow-textMain">
      <div className="mx-auto max-w-merrow px-4 py-12">
        <h1 className="text-2xl font-semibold mb-4">Machine Catalog</h1>

        {/* Intro paragraph */}
        <p className="text-merrow-textSub mb-4 max-w-[700px]">
          Merrow manufactures over 360 industrial sewing machine models for applications
          ranging from fashion apparel to aerospace filtration. Browse by category below
          or search for a specific model.
        </p>

        {/* What you'll find */}
        <div className="mb-8">
          <h2 className="text-sm font-semibold uppercase tracking-wide text-merrow-textMuted mb-2">
            What You&apos;ll Find
          </h2>
          <ul className="text-sm text-merrow-textSub space-y-1">
            <li>• Overlock and serger machines (70 Class, MG Series)</li>
            <li>• Shell stitch and decorative edge machines</li>
            <li>• Crochet and blanket stitch machines</li>
            <li>• End-to-end seaming systems for continuous processing</li>
            <li>• Specialty machines for technical textiles</li>
          </ul>
        </div>

        {/* Category cards */}
        <div className="grid gap-6 md:grid-cols-2 lg:grid-cols-3 mb-10">
          <Link
            href="/Sergers_and_Overlock_Sewing_Machines"
            className="block p-6 border border-merrow-border rounded-lg hover:bg-merrow-heroBg"
          >
            <h2 className="font-semibold">Sergers & Overlock</h2>
            <p className="text-sm text-merrow-textSub">
              High-speed overlock machines for seaming and edge finishing
            </p>
          </Link>
          <Link
            href="/70class"
            className="block p-6 border border-merrow-border rounded-lg hover:bg-merrow-heroBg"
          >
            <h2 className="font-semibold">70 Class</h2>
            <p className="text-sm text-merrow-textSub">
              Industry-standard blanket stitch and shell stitch machines
            </p>
          </Link>
          <Link
            href="/crochet-sewing-machines"
            className="block p-6 border border-merrow-border rounded-lg hover:bg-merrow-heroBg"
          >
            <h2 className="font-semibold">Crochet Machines</h2>
            <p className="text-sm text-merrow-textSub">
              Decorative crochet edge finishing for emblems and patches
            </p>
          </Link>
          <Link
            href="/fashion-sewing"
            className="block p-6 border border-merrow-border rounded-lg hover:bg-merrow-heroBg"
          >
            <h2 className="font-semibold">Fashion Sewing</h2>
            <p className="text-sm text-merrow-textSub">
              Machines optimized for apparel and garment manufacturing
            </p>
          </Link>
          <Link
            href="/technical-sewing"
            className="block p-6 border border-merrow-border rounded-lg hover:bg-merrow-heroBg"
          >
            <h2 className="font-semibold">Technical Sewing</h2>
            <p className="text-sm text-merrow-textSub">
              Industrial machines for filtration, medical, and aerospace
            </p>
          </Link>
          <Link
            href="/end-to-end-seaming"
            className="block p-6 border border-merrow-border rounded-lg hover:bg-merrow-heroBg"
          >
            <h2 className="font-semibold">End-to-End Seaming</h2>
            <p className="text-sm text-merrow-textSub">
              Continuous processing systems for high-volume operations
            </p>
          </Link>
        </div>

        {/* CTA */}
        <div className="bg-merrow-heroBg border border-merrow-border rounded-lg p-6 mb-10">
          <h2 className="font-semibold mb-2">Need Help Choosing?</h2>
          <p className="text-sm text-merrow-textSub mb-3">
            Our application engineers can help match the right machine to your specific requirements.
          </p>
          <Link
            href="/support/request-quote"
            className="inline-block px-4 py-2 bg-[#3f3f3f] text-white text-sm font-semibold hover:bg-[#2a2a2a]"
          >
            Request a Consultation
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
            <Link href="/parts" className="text-merrow-link hover:underline">
              Parts & Accessories
            </Link>
            <Link href="/support" className="text-merrow-link hover:underline">
              Support Center
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
