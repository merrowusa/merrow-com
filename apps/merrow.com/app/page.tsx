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
  logoBar: "/images/ft_10.gif",
  worldMap: "/images/ft_11.gif",
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
            <div className="man" id="fat" />
            <div className="clear" />
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
                      <img src={IMG.heroTech} alt="Technical sewing machine" />
                    </a>
                    <h2>
                      Technical <br />
                      Sewing
                    </h2>
                    <p className="machines">machines</p>
                    <a href="/technical-sewing">
                      <div className="learn" id="left" />
                    </a>
                  </div>

                  <div className="main_image" id="center">
                    <a href="/fashion-sewing">
                      <img src={IMG.heroFashionBase} alt="Fashion sewing machine" id="center_front_1" />
                      <img src={IMG.heroFashionOverlay} alt="Fashion sewing machine overlay" id="center_front_2" />
                    </a>
                    <h2>
                      Fashion
                      <br />
                      &amp; Design
                    </h2>
                    <p className="machines">machines</p>
                    <a href="/fashion-sewing">
                      <div className="learn" id="center" />
                    </a>
                  </div>

                  <div className="main_image" id="right">
                    <a href="/end-to-end-seaming">
                      <img src={IMG.heroEnd} alt="End-to-end seaming machine" />
                    </a>
                    <h2>
                      End-to-End
                      <br />
                      Seaming
                    </h2>
                    <p className="machines">machines</p>
                    <a href="/end-to-end-seaming">
                      <div className="learn" id="right" />
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
                        <input id="dixie" type="email" name="email" defaultValue="" aria-label="Email address" />
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
              <div className="learn_submain" id="brand" />
            </a>
            <div className="close_brand" />
          </div>
          <div className="clear" />
        </div>
      </div>

      <div className="main_southern_container">
        <div className="white_boxes" id="logo">
          <div className="logo_bar">
            <a href="/customer-stories">
              <img src={IMG.logoBar} id="logo_bar" alt="Partner company logos strip" />
            </a>
          </div>
        </div>

        <div className="box_container">
          <div className="boxes" id="left_main">
            <div className="height_container_150">
              <div className="f_image" id="b">
                <a href="/agentmap.html" />
              </div>
              <div className="ncp_headline" id="footer">
                <a href="/agentmap.html">AGENT LOCATOR</a>
              </div>
              <div className="box_image" id="map">
                <a href="/agentmap.html">
                  <img src={IMG.worldMap} alt="World map" />
                </a>
              </div>
              <div className="special_map_holder">
                <div className="box_text">
                  Merrow machines are installed the world over and are sold and supported by a network of 156 sales
                  agents spanning 65 countries Click Here to locate the agent nearest you.
                </div>
              </div>
            </div>
          </div>

          <div className="boxes" id="center_main">
            <div className="height_container_150">
              <div className="f_image" id="c">
                <a href="https://blog.merrow.com" />
              </div>
              <div className="ncp_headline" id="footer">
                <a href="https://blog.merrow.com">BLOG</a>
              </div>
              <div className="box_image" id="blog">
                <div className="box_text">
                  Check out the Merrow Blog for updates, special deals, new products, and interesting goings-on. the
                  Merrow Blog is updated weekly and is a great company resource.
                </div>
              </div>
            </div>
          </div>

          <div className="boxes" id="right_main">
            <div className="height_container_150">
              <div className="f_image" id="d">
                <a href="https://www.facebook.com/MerrowSewingMachineCo" />
              </div>
              <a href="https://www.facebook.com/MerrowSewingMachineCo">
                <div className="ncp_headline" id="footer">
                  COMMUNITY
                </div>
              </a>
              <a href="https://www.facebook.com/MerrowSewingMachineCo">
                <div className="box_image" id="community" />
              </a>
            </div>
          </div>
        </div>
      </div>

      <div className="homepage-desktop-overlays" aria-hidden="true">
        <div className="homepage-desktop-share">
          <div className="share_label">Shares</div>
          <a href="https://www.facebook.com/MerrowSewingMachineCo" className="share_item share_fb">
            f
          </a>
          <a href="https://x.com" className="share_item share_x">
            x
          </a>
          <a href="https://www.pinterest.com" className="share_item share_pin">
            p
          </a>
          <a href="mailto:?subject=Merrow%20Sewing%20Machine" className="share_item share_mail">
            @
          </a>
        </div>

        <div className="homepage-desktop-help-bubble">Hi. Need any help?</div>
        <div className="homepage-desktop-help-launcher" />
      </div>
    </main>
  );
}
