// @version home-page v4.0
// Legacy parity: index.php layout + class structure

import { Metadata } from "next";

export const metadata: Metadata = {
  title: "Merrow Sewing Machine Company | Industrial Overlock Machines",
  description:
    "Merrow Sewing Machine Company has manufactured industrial overlock and seaming machines since 1838. Discover our sewing solutions for fashion and textiles.",
};

type HomePageProps = {
  searchParams: Promise<{ [key: string]: string | string[] | undefined }>;
};

const IMG = {
  heroTech: "/images/hero/h_02.gif.png",
  heroFashionBase: "/images/hero/h_01.gif.png",
  heroFashionOverlay: "/images/hero/h_04.gif.png",
  heroEnd: "/images/hero/h_03.gif.png",
  midHeritage: "/images/hero/h_05.gif.png",
  midBranded: "/images/hero/h_06.gif.png",
};

export default async function HomePage({ searchParams }: HomePageProps) {
  const params = await searchParams;
  const branded =
    (typeof params?.branded === "string" ? params?.branded : "") ===
    "complete";

  return (
    <main className="home-page w-full text-merrow-textMain">
      <div className="background_gradient">
        <div className="center_bloc">
          <div className="body_doc">
            <div className="bridge_container">
              {!branded ? (
                <div className="main_content">
                  <div className="headline">
                    <h1>
                      Modern Overlock.
                      <br />
                      The Iconic Merrow Sewing Machine
                    </h1>
                  </div>

                  <div className="main_image" id="left">
                    <a href="/technical-sewing">
                      <div className="image_holder">
                        <img src={IMG.heroTech} alt="Technical sewing machine" />
                      </div>
                    </a>
                    <h2>
                      Technical <br />
                      Sewing
                    </h2>
                    <p className="machines">machines</p>
                    <a href="/technical-sewing">
                      <div className="learn" id="left">
                        Learn More
                      </div>
                    </a>
                  </div>

                  <div className="main_image" id="center">
                    <a href="/fashion-sewing">
                      <div className="image_holder center_stack">
                        <img
                          src={IMG.heroFashionBase}
                          alt="Fashion sewing machine"
                          id="center_front_1"
                          className="merrow-hero-base"
                        />
                        <img
                          src={IMG.heroFashionOverlay}
                          alt="Fashion sewing machine overlay"
                          id="center_front_2"
                          className="merrow-hero-overlay"
                        />
                      </div>
                    </a>
                    <h2>
                      Fashion
                      <br />
                      &amp; Design
                    </h2>
                    <p className="machines">machines</p>
                    <a href="/fashion-sewing">
                      <div className="learn" id="center">
                        Learn More
                      </div>
                    </a>
                  </div>

                  <div className="main_image" id="right">
                    <a href="/end-to-end-seaming">
                      <div className="image_holder">
                        <img src={IMG.heroEnd} alt="End-to-end seaming machine" />
                      </div>
                    </a>
                    <h2>
                      End-to-End
                      <br />
                      Seaming
                    </h2>
                    <p className="machines">machines</p>
                    <a href="/end-to-end-seaming">
                      <div className="learn" id="right">
                        Learn More
                      </div>
                    </a>
                  </div>

                  <div className="clear" />
                  <div className="center_text">
                    The Merrow Sewing Machine Company makes over 360 models of production grade sewing machines, each one
                    hand built to the highest quality and precision tolerances in the sewing industry. Click one of the
                    sections above to find the machine for your sewing application.
                  </div>
                </div>
              ) : (
                <div className="branded_content">
                  <div className="headline">
                    <h1>THE BRANDED STITCH&reg;</h1>
                    <h2>A Revolutionary Industrial Idea</h2>
                  </div>
                  <div className="byline">
                    <h2>Stitching is a mark of Quality</h2>
                    <h2>Merrow is Premium Stitching</h2>
                    <h2>You can now communicate this to your customers</h2>
                    <div className="center_text">
                      The Merrow Branded Stitch Tag lets you make more money by advertising to your customer that the
                      product they are buying uses premium stitching. Contact us now to learn how The Merrow Branded
                      Stitch Tag can help promote your product&apos;s value
                    </div>
                    <div className="form_branded">
                      <h3>ENTER YOUR EMAIL ADDRESS TO LEARN MORE</h3>
                    </div>
                    <form action="#" method="post">
                      <input name="party_id" type="hidden" value="0007679" />
                      <input name="source" type="hidden" value="nbp" />
                      <input name="captcha" type="hidden" value="no" />
                      <div className="center_box">
                        <input id="dixie" type="email" name="email" value="" aria-label="Email address" />
                      </div>
                      <div className="center_box">
                        <button id="aphrodite" type="submit">
                          Send Message
                        </button>
                      </div>
                    </form>
                    <div className="return_1">
                      <a href="/">Return to Machines</a>
                    </div>
                  </div>
                </div>
              )}
            </div>
          </div>
        </div>
      </div>

      <div className="main_middle_container">
        <div className="box_container">
          <div className="grey_boxes" id="left_main">
            <img id="left" src={IMG.midHeritage} alt="Merrow heritage" />
            <div className="box_headline">MERROW HERITAGE</div>
            <div className="box_subline">177 years of World Class Sewing</div>
            <p className="main_boxes">
              Merrow was a founding member of the modern textile industry. Take a peek at the rich and storied history
              of Merrow from gunpowder factory, to knitting mill, to manufacturer of the finest hand-built sewing
              machines.
            </p>
            <a href="/overlock-history">
              <div className="learn_submain" id="history">
                Learn More
              </div>
            </a>
          </div>

          <div className="grey_boxes" id="right_main">
            <img id="right_neg" src={IMG.midBranded} alt="Merrow branded stitch" />
            <div className="box_headline">THE MERROW BRANDED STITCH&reg;</div>
            <div className="box_subline">Premium Stitching: a Revolutionary Act</div>
            <p className="main_boxes">
              It means a lot to call a stitch a Merrow. Merrow Sewing Machines incorporate a unique, cam driven
              technology which achieves more consistent, technically superior stitches. The result is that products
              stitched on Merrow Machines have better seams, last longer and wear better. Stitching Matters: add the
              Merrow Stitch Tag to your products today!
            </p>
            <a href={branded ? "/" : "/?branded=complete"}>
              <div className="learn_submain" id="brand">
                Learn More
              </div>
            </a>
          </div>
          <div className="clear" />
        </div>
      </div>
    </main>
  );
}
