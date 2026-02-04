// @version footer v3.3
// Parity: footer contact + about + follow + newsletter (widget_feet.php)

import { FullBleed } from "../../../../packages/ui";

const IMG = {
  worldMap: "/images/ft_11.gif",
  iconAgent: "/images/icon-agent.png",
  iconBlog: "/images/icon-blog.png",
  iconCommunity: "/images/icon-community.png",
  communityCollage: "/images/home-community-collage.png",
  logoBar: "/images/ft_10.gif",
};

export function Footer() {
  return (
    // id="footer" for legacy parity selector compatibility
    <footer id="footer" data-testid="site-footer" role="contentinfo">
      {/* Brand bar (logo strip) */}
      <FullBleed className="bg-white border-t border-[#bdbdbd]">
        <div className="mx-auto max-w-merrow px-4 py-3">
          <div className="flex justify-center">
            <a href="/customer-stories" aria-label="Visit our partner companies page">
              <img
                src={IMG.logoBar}
                alt="Partner company logos strip"
                className="max-h-10 w-auto object-contain"
              />
            </a>
          </div>
        </div>
      </FullBleed>

      <FullBleed className="bg-[#313131] border-t border-[#363631]">
        <div className="mx-auto max-w-merrow px-6 pt-6 pb-8">
        {/* Feature boxes */}
        <div className="grid grid-cols-1 gap-4 md:grid-cols-3">
          {/* Agent Locator */}
          <div className="border border-[#3f3f3f] bg-[#1f1f1f] px-4 py-4 rounded-[6px] shadow-[0_1px_2px_rgba(0,0,0,0.4)]">
            <div className="flex items-center gap-2 mb-2">
              <img src={IMG.iconAgent} alt="" className="h-[22px] w-[22px]" aria-hidden="true" />
              <a
                href="/agentmap.html"
                className="text-[18px] font-semibold tracking-[0.08em] text-white hover:text-[#9fc7ff] transition-colors"
              >
                AGENT LOCATOR
              </a>
            </div>
            <div className="mt-3 border border-[#3f3f3f] bg-[#111] p-2">
              <a href="/agentmap.html" className="block hover:opacity-90 transition-opacity">
                <img
                  src={IMG.worldMap}
                  alt="World Map"
                  className="w-full h-auto object-contain"
                />
              </a>
            </div>
            <p className="mt-3 text-[12px] leading-[16px] text-[#d7d7d7]">
              Merrow machines are installed the world over and are sold and supported by a network of 156 sales agents
              spanning 65 countries. Click Here to locate the agent nearest you.
            </p>
          </div>

          {/* Blog */}
          <div className="border border-[#3f3f3f] bg-[#1f1f1f] px-4 py-4 rounded-[6px] shadow-[0_1px_2px_rgba(0,0,0,0.4)]">
            <div className="flex items-center gap-2 mb-2">
              <img src={IMG.iconBlog} alt="" className="h-[22px] w-[22px]" aria-hidden="true" />
              <a
                href="https://blog.merrow.com"
                className="text-[18px] font-semibold tracking-[0.08em] text-white hover:text-[#9fc7ff] transition-colors"
              >
                BLOG
              </a>
            </div>
            <div className="mt-3 border border-[#3f3f3f] bg-[#111] p-3 min-h-[156px]">
              <p className="text-[12px] leading-[16px] text-[#d7d7d7]">
                Check out the Merrow Blog for updates, special deals, new products, and interesting goings-on. the Merrow
                Blog is updated weekly and is a great company resource.
              </p>
            </div>
          </div>

          {/* Community */}
          <div className="border border-[#3f3f3f] bg-[#1f1f1f] px-4 py-4 rounded-[6px] shadow-[0_1px_2px_rgba(0,0,0,0.4)]">
            <div className="flex items-center gap-2 mb-2">
              <img src={IMG.iconCommunity} alt="" className="h-[22px] w-[22px]" aria-hidden="true" />
              <a
                href="https://www.facebook.com/MerrowSewingMachineCo"
                className="text-[18px] font-semibold tracking-[0.08em] text-white hover:text-[#9fc7ff] transition-colors"
              >
                COMMUNITY
              </a>
            </div>
            <div className="mt-3 border border-[#3f3f3f] bg-[#111] p-2">
              <a href="https://www.facebook.com/MerrowSewingMachineCo" className="block hover:opacity-90 transition-opacity">
                <img
                  src={IMG.communityCollage}
                  alt="Merrow community collage"
                  className="w-full h-auto object-cover"
                />
              </a>
            </div>
          </div>
        </div>

        {/* Contact / About / Follow / Newsletter */}
        <div className="mt-6 grid grid-cols-1 gap-6 md:grid-cols-4">
          {/* Contact */}
          <div className="text-[12px] leading-[18px] text-[#d7d7d7]">
            <div>
              Call:{" "}
              <a href="tel:+15086894095" className="text-white">
                508.689.4095
              </a>
            </div>
            <div>
              Fax: <span className="text-white">508.689.4098</span>
            </div>
            <div className="mt-2">
              Email:{" "}
              <a
                className="text-[#9fc7ff] underline"
                href="mailto:support@merrow.com"
              >
                support@merrow.com
              </a>
              <br />
              <a
                className="text-[#9fc7ff] underline"
                href="mailto:sales@merrow.com"
              >
                sales@merrow.com
              </a>
            </div>
          </div>

          {/* About */}
          <div className="text-[12px] leading-[18px] text-[#d7d7d7]">
            <div className="text-white font-semibold">About Us</div>
            <div className="mt-2 space-y-1">
              <div>
                <a className="text-[#9fc7ff] underline" href="/about.html">
                  Mission
                </a>
              </div>
              <div>
                <a className="text-[#9fc7ff] underline" href="/nhp1.php">
                  History
                </a>
              </div>
              <div>
                <a className="text-[#9fc7ff] underline" href="/njp.php?j=jobs">
                  Jobs
                </a>
              </div>
            </div>
          </div>

          {/* Follow */}
          <div className="text-[12px] leading-[18px] text-[#d7d7d7]">
            <div className="text-white font-semibold">Follow Us</div>
            <div className="mt-2 space-y-1">
              <div>
                <a
                  className="text-[#9fc7ff] underline"
                  href="https://www.facebook.com/MerrowSewingMachineCo"
                >
                  Facebook
                </a>
              </div>
              <div>
                <a className="text-[#9fc7ff] underline" href="https://www.linkedin.com/company/merrow">
                  LinkedIn
                </a>
              </div>
            </div>
          </div>

          {/* Newsletter - MailChimp Integration */}
          <div className="text-[12px] leading-[18px] text-[#d7d7d7]">
            <div className="text-white font-semibold">
              Subscribe to Our Newsletter
            </div>
            <form
              action="https://merrow.us1.list-manage.com/subscribe/post?u=37c9768198782ef495d6853dc&amp;id=aae6b66b9e"
              method="post"
              id="mc-embedded-subscribe-form"
              name="mc-embedded-subscribe-form"
              target="_blank"
              className="mt-2"
            >
              <input
                type="email"
                name="EMAIL"
                id="mce-EMAIL"
                placeholder="your@email.com"
                required
                className="w-full border border-[#4a4a4a] bg-[#111] px-2 py-1.5 text-[13px] text-white outline-none"
              />
              {/* MailChimp bot protection */}
              <div style={{ position: "absolute", left: "-5000px" }} aria-hidden="true">
                <input type="text" name="b_37c9768198782ef495d6853dc_aae6b66b9e" tabIndex={-1} defaultValue="" />
              </div>
              <button
                type="submit"
                name="subscribe"
                id="mc-embedded-subscribe"
                className="mt-3 inline-flex items-center gap-2 bg-[#3f3f3f] px-3 py-[2px] text-[11px] font-semibold text-white hover:bg-[#2a2a2a] transition-colors"
              >
                <span className="inline-flex h-[16px] w-[16px] items-center justify-center bg-[#b10000] text-[11px] leading-[1]">
                  +
                </span>
                Subscribe
              </button>
            </form>
          </div>
        </div>

        {/* Copyright */}
        <div className="mt-6 text-[11px] leading-[16px] text-[#bdbdbd]">
          Copyright &copy; {new Date().getFullYear()} Merrow Group Companies All
          Rights Reserved. Designated trademarks and brands are the property of
          their respective owners. Credit to{" "}
          <a href="https://www.merrowedge.com" className="text-[#9fc7ff] hover:underline">
            Sewing Automation
          </a>{" "}
          and to{" "}
          <a href="https://merrowmfg.com" className="text-[#9fc7ff] hover:underline">
            Merrow Manufacturing
          </a>
        </div>
      </div>
      </FullBleed>
    </footer>
  );
}
