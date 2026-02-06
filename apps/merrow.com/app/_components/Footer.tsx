// @version footer v4.0
// Legacy parity: widget_feet.php (footer only)

export function Footer() {
  return (
    <footer id="footer" data-testid="site-footer" role="contentinfo" className="footer">
      <div className="footer_container">
        <div className="container" id="left">
          <div className="line">
            Call: <span className="echo">508.689.4095</span>
          </div>
          <div className="line">
            Fax: <span className="echo">508.689.4098</span>
          </div>
          <div className="line">
            Email: <span className="echo"><a href="mailto:support@merrow.com">support@merrow.com</a></span>
            <br />
            <span className="echo" id="last"><a href="mailto:sales@merrow.com">sales@merrow.com</a></span>
          </div>
        </div>

        <div className="container" id="center_left">
          <div className="line">
            About Us
            <p className="echo"><a href="/about.html">Mission</a></p>
            <p className="echo"><a href="/overlock-history">History</a></p>
            <p className="echo"><a href="/contact_general.html">Jobs</a></p>
          </div>
        </div>

        <div className="container" id="center_right">
          <div className="line" id="follow">
            Follow Us
            <div className="share_links">
              <a className="echo" href="https://www.facebook.com/MerrowSewingMachineCo">Facebook</a>
              <br />
              <a className="echo" href="https://www.linkedin.com/company/merrow">LinkedIn</a>
            </div>
          </div>
        </div>

        <div className="container" id="right">
          <div className="boxes" id="mail">
            <div className="height_container_1150">
              <div className="box_subline" id="mail">Subscribe to Our Newsletter</div>
              <div className="mailchimp">
                <div id="mc_embed_signup">
                  <form
                    action="https://merrow.us1.list-manage.com/subscribe/post?u=37c9768198782ef495d6853dc&amp;id=aae6b66b9e"
                    method="post"
                    id="mc-embedded-subscribe-form"
                    name="mc-embedded-subscribe-form"
                    target="_blank"
                  >
                    <fieldset>
                      <div className="indicate-required" />
                      <div className="mc-field-group">
                        <label htmlFor="mce-EMAIL" />
                        <input type="email" defaultValue="" name="EMAIL" className="required email" id="mce-EMAIL" />
                      </div>
                      <div>
                        <input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" className="btn" />
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div className="clear" />
        <div className="party_line">
          Copyright&reg; 2024 Merrow Group Companies All Rights Reserved. Designated trademarks and brands are the property of
          their respective owners.Credit to <a href="https://www.merrowedge.com">Sewing Automation</a> and to{" "}
          <a href="https://merrowmfg.com">Merrow Manufacturing</a>
        </div>
      </div>
    </footer>
  );
}
