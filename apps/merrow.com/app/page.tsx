// @version home-page v3.0
// STEP 1 PARITY: HERO_1920 from Figma node 2:1257
// Hero: 1920x684, bg gradient white→#EDEDED, container 1020px
// Cards: 321x370px, 3-up grid
// Grey boxes: radius 9px, shadow 0 1px 0 #373731 and 0 -1px 0 #0E0D0B

import { Metadata } from "next";

export const metadata: Metadata = {
  title: "Merrow Sewing Machine Company | Industrial Overlock Machines",
  description:
    "Merrow Sewing Machine Company has manufactured industrial overlock and seaming machines since 1838. Discover our sewing solutions for fashion and textiles.",
};

type HomePageProps = {
  searchParams: Promise<{ [key: string]: string | string[] | undefined }>;
};

// Static assets (downloaded from S3 to repo per assets-manifest.json)
const IMG = {
  heroTech: "/images/hero/h_02.gif.png",
  heroFashionBase: "/images/hero/h_01.gif.png",
  heroFashionOverlay: "/images/hero/h_04.gif.png",
  heroEnd: "/images/hero/h_03.gif.png",
  midHeritage: "/images/hero/h_05.gif.png",
  midBranded: "/images/hero/h_06.gif.png",
  logoBar: "/images/ft_10.gif",
  worldMap: "/images/ft_11.gif",
};

function FullBleed({
  className = "",
  children,
}: {
  className?: string;
  children: React.ReactNode;
}) {
  // Break out of any centered/max-w wrapper in layout.tsx if present.
  return (
    <section
      className={[
        "relative left-1/2 right-1/2 w-screen -ml-[50vw] -mr-[50vw]",
        className,
      ].join(" ")}
    >
      {children}
    </section>
  );
}

export default async function HomePage({ searchParams }: HomePageProps) {
  const params = await searchParams;
  const branded =
    (typeof params?.branded === "string" ? params?.branded : "") ===
    "complete";

  return (
    <main className="w-full text-merrow-textMain">
      <style
        dangerouslySetInnerHTML={{
          __html: `
            @keyframes merrowFadeOut { from { opacity: 1; } to { opacity: 0; } }
            @keyframes merrowFadeIn  { from { opacity: 0; } to { opacity: 1; } }

            @media (prefers-reduced-motion: reduce) {
              .merrow-hero-base, .merrow-hero-overlay { animation: none !important; }
              .merrow-hero-overlay { opacity: 0 !important; }
              .merrow-hero-base { opacity: 1 !important; }
            }
          `,
        }}
      />

      {/* HERO (white to light gray gradient - legacy .background_gradient) */}
      <FullBleed className="bg-gradient-to-b from-white to-[#ededed]">
        <div className="mx-auto max-w-merrow px-4 pt-8 pb-6">
          {!branded ? (
            <>
              <div className="text-center">
                <h1 className="mx-auto max-w-[860px] font-headline text-[32px] leading-[35px] text-black">
                  Modern Overlock.
                  <br />
                  The Iconic Merrow Sewing Machine
                </h1>
              </div>

              {/* 3-up hero grid: tuned to ~321px tile width */}
              <div className="mt-8 grid grid-cols-1 gap-y-10 md:grid-cols-3 md:gap-x-10 md:gap-y-0">
                {/* Left - Technical Sewing */}
                <a href="/technical-sewing" className="block text-center" aria-label="Learn more about technical sewing machines">
                  <div className="mx-auto w-[320px]">
                    <div className="flex h-[370px] items-end justify-center">
                      <img
                        src={IMG.heroTech}
                        alt="Technical sewing machine for industrial applications"
                        className="max-h-[370px] w-auto object-contain"
                      />
                    </div>

                    <h2 className="mt-2 font-headline text-[18px] leading-[20px] uppercase text-black">
                      Technical
                      <br />
                      Sewing
                    </h2>
                    <p className="mt-1 text-[11px] font-bold uppercase tracking-wider text-[#555]">
                      machines
                    </p>

                    <div className="mt-3 inline-flex items-center justify-center bg-[#3f3f3f] px-3 py-[2px] text-[10px] font-semibold text-white">
                      Learn More
                    </div>
                  </div>
                </a>

                {/* Center - Fashion & Design (one-shot flip animation) */}
                <a href="/fashion-sewing" className="block text-center" aria-label="Learn more about fashion and design sewing machines">
                  <div className="mx-auto w-[320px]">
                    <div className="relative flex h-[370px] items-end justify-center">
                      {/* base (blue) */}
                      <img
                        src={IMG.heroFashionBase}
                        alt="Fashion sewing machine in blue"
                        className="merrow-hero-base max-h-[370px] w-auto object-contain"
                        style={{
                          opacity: 1,
                          animation: "merrowFadeOut 4s ease forwards",
                          animationDelay: "2s",
                        }}
                      />
                      {/* overlay (flip) */}
                      <img
                        src={IMG.heroFashionOverlay}
                        alt="Fashion sewing machine overlay animation"
                        className="merrow-hero-overlay pointer-events-none absolute bottom-0 left-1/2 max-h-[370px] w-auto -translate-x-1/2 object-contain"
                        style={{
                          opacity: 0,
                          animation: "merrowFadeIn 4.5s ease forwards",
                          animationDelay: "6.3s",
                        }}
                      />
                    </div>

                    <h2 className="mt-2 font-headline text-[18px] leading-[20px] uppercase text-black">
                      Fashion
                      <br />
                      &amp; Design
                    </h2>
                    <p className="mt-1 text-[11px] font-bold uppercase tracking-wider text-[#555]">
                      machines
                    </p>

                    <div className="mt-3 inline-flex items-center justify-center bg-[#3f3f3f] px-3 py-[2px] text-[10px] font-semibold text-white">
                      Learn More
                    </div>
                  </div>
                </a>

                {/* Right - End-to-End Seaming */}
                <a href="/end-to-end-seaming" className="block text-center" aria-label="Learn more about end-to-end seaming machines">
                  <div className="mx-auto w-[320px]">
                    <div className="flex h-[370px] items-end justify-center">
                      <img
                        src={IMG.heroEnd}
                        alt="End-to-end seaming machine for professional use"
                        className="max-h-[370px] w-auto object-contain"
                      />
                    </div>

                    <h2 className="mt-2 font-headline text-[18px] leading-[20px] uppercase text-black">
                      End-to-End
                      <br />
                      Seaming
                    </h2>
                    <p className="mt-1 text-[11px] font-bold uppercase tracking-wider text-[#555]">
                      machines
                    </p>

                    <div className="mt-3 inline-flex items-center justify-center bg-[#3f3f3f] px-3 py-[2px] text-[10px] font-semibold text-white">
                      Learn More
                    </div>
                  </div>
                </a>
              </div>

              {/* Live copy (small + tight) */}
              <div className="mt-6 flex justify-center">
                <p className="max-w-[820px] text-center text-[11px] leading-[16px] text-[#444]">
                  The Merrow Sewing Machine Company makes over 360 models of production grade sewing machines, each one
                  hand built to the highest quality and precision tolerances in the sewing industry. Click one of the
                  sections above to find the machine for your sewing application.
                </p>
              </div>
            </>
          ) : (
            <>
              {/* branded=complete */}
              <div className="text-center">
                <h1 className="font-light tracking-[0.02em] text-[34px] leading-[38px] text-[#222]">
                  THE BRANDED STITCH&reg;
                </h1>
                <h2 className="mt-1 font-light text-[22px] leading-[26px] text-[#333]">
                  A Revolutionary Industrial Idea
                </h2>
              </div>

              <div className="mt-6 text-center space-y-2">
                <div className="text-[18px] font-light text-[#111]">Stitching is a mark of Quality</div>
                <div className="text-[18px] font-light text-[#111]">Merrow is Premium Stitching</div>
                <div className="text-[18px] font-light text-[#111]">You can now communicate this to your customers</div>
              </div>

              <div className="mt-6 flex justify-center">
                <p className="max-w-[820px] text-center text-[13px] leading-[18px] text-[#222]">
                  The Merrow Branded Stitch Tag lets you make more money by advertising to your customer that the
                  product they are buying uses premium stitching. Contact us now to learn how The Merrow Branded Stitch
                  Tag can help promote your product&apos;s value.
                </p>
              </div>

              {/* TODO: Branded Stitch inquiry form - needs API route or external handler */}
              {/* Legacy used widget_sub_datamover.php - this is a business inquiry, not newsletter */}
              <div className="mt-8 mx-auto max-w-[420px] border border-merrow-border bg-white px-4 py-4">
                <div className="text-[11px] font-semibold uppercase tracking-[0.18em] text-[#333]">
                  ENTER YOUR EMAIL ADDRESS TO LEARN MORE
                </div>
                <form action="#" method="post" className="mt-3">
                  <input
                    type="email"
                    name="email"
                    placeholder="your@email.com"
                    required
                    aria-label="Enter your email address to learn more about branded stitch"
                    className="w-full border border-merrow-border bg-white px-2 py-1.5 text-[13px] text-[#111] outline-none"
                  />
                  <button
                    type="submit"
                    aria-label="Submit email to learn more about branded stitch"
                    className="mt-3 inline-flex bg-[#3f3f3f] px-3 py-[2px] text-[11px] font-semibold text-white hover:bg-[#2a2a2a] transition-colors"
                  >
                    Submit
                  </button>
                </form>
              </div>

              <div className="mt-6 text-center">
                <a href="/" className="text-[13px] font-semibold text-merrow-link underline" aria-label="Return to main machines page">
                  Return to Machines
                </a>
              </div>
            </>
          )}
        </div>
      </FullBleed>

      {/* MID GREY BAND - legacy .main_middle_container */}
      <FullBleed className="bg-[linear-gradient(to_bottom,#c0c0c0,#7d7d7d)]">
        <div className="mx-auto max-w-merrow px-4 py-6">
          <div className="grid grid-cols-1 gap-4 md:grid-cols-2">
            {/* HERITAGE - legacy .grey_boxes */}
            <div className="rounded-[9px] bg-[#a9a9a9] shadow-[0px_1px_0_#373731,0px_-1px_0_#0e0d0b] px-4 py-3">
              <div className="grid grid-cols-[155px_1fr] gap-3 items-start">
                <div className="flex justify-center">
                  <img src={IMG.midHeritage} alt="Merrow heritage logo" className="w-[140px] h-auto object-contain" />
                </div>
                <div>
                  <div className="font-headline text-[23px] text-[#1d1818] [text-shadow:#ededed_0_1px_0]">
                    MERROW HERITAGE
                  </div>
                  <div className="mt-1 font-headline text-[14px] text-[#1d1818]">
                    177 years of World Class Sewing
                  </div>
                  <p className="mt-2 font-body text-[11px] leading-[16px] text-white">
                    Merrow was a founding member of the modern textile industry. Take a peek at the rich and storied
                    history of Merrow from gunpowder factory, to knitting mill, to manufacturer of the finest hand-built
                    sewing machines.
                  </p>

                  <div className="mt-3 flex justify-end">
                    <a
                      href="/overlock-history"
                      aria-label="Learn more about Merrow heritage and history"
                      className="inline-flex items-center bg-[#3f3f3f] px-3 py-[2px] text-[10px] font-semibold text-white"
                    >
                      Learn More
                    </a>
                  </div>
                </div>
              </div>
            </div>

            {/* BRANDED STITCH - legacy .grey_boxes */}
            <div className="rounded-[9px] bg-[#a9a9a9] shadow-[0px_1px_0_#373731,0px_-1px_0_#0e0d0b] px-4 py-3">
              <div className="grid grid-cols-[155px_1fr] gap-3 items-start">
                <div className="flex justify-center">
                  <img src={IMG.midBranded} alt="Merrow branded stitch tag logo" className="w-[140px] h-auto object-contain" />
                </div>
                <div>
                  <div className="font-headline text-[23px] text-[#1d1818] [text-shadow:#ededed_0_1px_0]">
                    THE MERROW BRANDED STITCH&reg;
                  </div>
                  <div className="mt-1 font-headline text-[14px] text-[#1d1818]">
                    Premium Stitching: a Revolutionary Act
                  </div>
                  <p className="mt-2 font-body text-[11px] leading-[16px] text-white">
                    It means a lot to call a stitch a Merrow. Merrow Sewing Machines incorporate a unique, cam driven
                    technology which achieves more consistent, technically superior stitches. The result is that products
                    stitched on Merrow Machines have better seams, last longer and wear better. Stitching Matters: add
                    the Merrow Stitch Tag to your products today!
                  </p>

                  <div className="mt-3 flex justify-end">
                    <a
                      href={branded ? "/" : "/?branded=complete"}
                      aria-label={branded ? "Return to main page" : "Learn more about Merrow branded stitch"}
                      className="inline-flex items-center bg-[#3f3f3f] px-3 py-[2px] text-[10px] font-semibold text-white"
                    >
                      Learn More
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </FullBleed>

      {/* Footer is rendered by layout.tsx via Footer component */}
    </main>
  );
}
