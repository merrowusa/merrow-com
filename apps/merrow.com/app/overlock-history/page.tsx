// @version overlock-history v1.0
//
// Route: /overlock-history
// Company history page - 177 years of Merrow

import { Metadata } from "next";
import {
  FullBleed,
  PageHeader,
  MerrowButton,
} from "../../../../packages/ui";

export const metadata: Metadata = {
  title: "Overlock History | Merrow Sewing Machine Company",
  description:
    "Discover 177 years of Merrow history - from gunpowder factory to knitting mill to manufacturer of the world's finest hand-built sewing machines.",
};

const IMG = {
  heritage: "https://merrow-media.s3.amazonaws.com/general-http/2011_live/h_05.gif.png",
};

const timeline = [
  {
    year: "1838",
    title: "The Beginning",
    description:
      "The Merrow family establishes their first manufacturing operation in Hartford, Connecticut. What begins as a small textile operation will grow into a global leader in sewing technology.",
  },
  {
    year: "1877",
    title: "The Overlock Revolution",
    description:
      "Merrow patents the revolutionary crochet stitch overlock — a groundbreaking invention that transforms garment construction. This technology remains the foundation of modern clothing manufacturing worldwide.",
  },
  {
    year: "1887",
    title: "Incorporation",
    description:
      "The company incorporates as the Merrow Machine Company. Merrow machines begin spreading globally as demand for the overlock stitch grows across the textile industry.",
  },
  {
    year: "1920s",
    title: "Global Expansion",
    description:
      "Merrow machines gain international recognition, with installations across Europe, Asia, and the Americas. The company establishes a network of agents that spans the globe.",
  },
  {
    year: "1950s",
    title: "Technical Excellence",
    description:
      "Post-war manufacturing boom drives innovation. Merrow expands its product line to serve new industries including automotive, aerospace, and medical device manufacturing.",
  },
  {
    year: "1980s",
    title: "Precision Engineering",
    description:
      "Merrow invests in precision manufacturing, developing machines with tolerances measured in thousandths of an inch. Each machine is hand-built to the highest quality standards.",
  },
  {
    year: "2000s",
    title: "Modern Innovation",
    description:
      "The company embraces modern manufacturing while maintaining its commitment to hand-built quality. New product lines address emerging markets in technical textiles and high-fashion.",
  },
  {
    year: "Today",
    title: "177 Years of Excellence",
    description:
      "Merrow continues to manufacture over 360 models of production-grade sewing machines, each one hand-built in the USA. The company remains family-owned and committed to quality.",
  },
];

export default function OverlockHistoryPage() {
  return (
    <main className="text-merrow-textMain">
      {/* Hero section */}
      <FullBleed className="bg-merrow-heroBg border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <div className="grid gap-8 md:grid-cols-2 items-center">
            <div>
              <PageHeader
                eyebrow="Est. 1838"
                title="177 Years of World Class Sewing"
                subtitle="The rich and storied history of the Merrow Sewing Machine Company."
              />
              <p className="mt-6 text-[13px] leading-[18px] text-merrow-textSub">
                Merrow was a founding member of the modern textile industry.
                From our earliest days as a Hartford manufacturing operation,
                we've been dedicated to building the finest sewing machines in
                the world - one machine at a time, hand-built to perfection.
              </p>
            </div>
            <div className="flex justify-center">
              <img
                src={IMG.heritage}
                alt="Merrow Heritage"
                className="max-w-[280px] w-full h-auto"
              />
            </div>
          </div>
        </div>
      </FullBleed>

      {/* Timeline section */}
      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <h2 className="text-lg font-semibold tracking-tight mb-8 text-center">
            Our Journey Through Time
          </h2>

          <div className="space-y-8">
            {timeline.map((item, index) => (
              <div
                key={item.year}
                className={`grid gap-6 md:grid-cols-[120px_1fr] items-start ${
                  index < timeline.length - 1 ? "pb-8 border-b border-merrow-border" : ""
                }`}
              >
                <div className="text-center md:text-right">
                  <span className="text-[24px] font-light text-merrow-link">
                    {item.year}
                  </span>
                </div>
                <div>
                  <h3 className="text-[14px] font-semibold text-merrow-textMain mb-2">
                    {item.title}
                  </h3>
                  <p className="text-[13px] leading-[18px] text-merrow-textSub">
                    {item.description}
                  </p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </FullBleed>

      {/* Values section */}
      <FullBleed className="bg-merrow-heroBg border-t border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-10">
          <h2 className="text-lg font-semibold tracking-tight mb-6 text-center">
            Our Values
          </h2>
          <div className="grid gap-6 md:grid-cols-3">
            <div className="text-center p-6">
              <h3 className="text-[14px] font-semibold text-merrow-textMain mb-2">
                Quality First
              </h3>
              <p className="text-[12px] text-merrow-textSub">
                Every Merrow machine is hand-built to the highest standards,
                with precision tolerances that ensure decades of reliable
                service.
              </p>
            </div>
            <div className="text-center p-6">
              <h3 className="text-[14px] font-semibold text-merrow-textMain mb-2">
                American Made
              </h3>
              <p className="text-[12px] text-merrow-textSub">
                For 177 years, Merrow machines have been manufactured in the
                USA, supporting American workers and maintaining our quality
                standards.
              </p>
            </div>
            <div className="text-center p-6">
              <h3 className="text-[14px] font-semibold text-merrow-textMain mb-2">
                Customer Focus
              </h3>
              <p className="text-[12px] text-merrow-textSub">
                Our global network of agents ensures that every Merrow customer
                receives the support they need, wherever they are in the world.
              </p>
            </div>
          </div>
        </div>
      </FullBleed>

      {/* CTA section */}
      <FullBleed className="bg-merrow-footerBg">
        <div className="mx-auto max-w-merrow px-4 py-10 text-center">
          <h2 className="text-[20px] font-light text-white">
            Be Part of the Merrow Legacy
          </h2>
          <p className="mt-2 text-[13px] text-[#d7d7d7]">
            Join the thousands of manufacturers who trust Merrow machines.
          </p>
          <div className="mt-4 flex justify-center gap-4">
            <MerrowButton href="/fashion-sewing">Browse Machines</MerrowButton>
            <MerrowButton href="mailto:sales@merrow.com">
              Contact Sales
            </MerrowButton>
          </div>
        </div>
      </FullBleed>
    </main>
  );
}
