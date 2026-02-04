// @version sergers-index v1.0
// Route: /Sergers_and_Overlock_Sewing_Machines

import { Metadata } from "next";
import Link from "next/link";

export const metadata: Metadata = {
  title: "Sergers & Overlock Machines | Merrow Industrial",
  description:
    "Explore Merrow sergers and overlock sewing machines. Industrial-grade equipment for edge finishing, seaming, and decorative stitching in manufacturing.",
};

export default function SergersOverlockPage() {
  return (
    <main className="text-merrow-textMain">
      <div className="mx-auto max-w-merrow px-4 py-12">
        <h1 className="text-2xl font-semibold mb-4">
          Sergers & Overlock Machines
        </h1>
        <p className="text-merrow-textSub mb-8">
          Industrial serger and overlock solutions for every application.
        </p>
        <div className="grid gap-6 md:grid-cols-2">
          <Link
            href="/Sergers_and_Overlock_Sewing_Machines/what-is-a-serger"
            className="block p-6 border border-merrow-border rounded-lg hover:bg-merrow-heroBg"
          >
            <h2 className="font-semibold">What is a Serger?</h2>
            <p className="text-sm text-merrow-textSub">
              Learn about serger technology and applications
            </p>
          </Link>
          <Link
            href="/machines"
            className="block p-6 border border-merrow-border rounded-lg hover:bg-merrow-heroBg"
          >
            <h2 className="font-semibold">Browse Machines</h2>
            <p className="text-sm text-merrow-textSub">
              View our complete machine catalog
            </p>
          </Link>
        </div>
      </div>
    </main>
  );
}
