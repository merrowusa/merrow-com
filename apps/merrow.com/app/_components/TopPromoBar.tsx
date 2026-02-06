// @version top-promo-bar v3.2
// Desktop parity: Sumo smart bar + legacy ActiveSeam splash

export function TopPromoBar() {
  return (
    <div data-testid="top-promo-bar">
      <div className="intro_robots_bar">
        <div className="intro_robots_inner">
          <span className="intro_robots_copy">INTRODUCING: MERROW ROBOTS</span>
          <a className="intro_robots_cta" href="https://merrowedge.com">
            Learn More
          </a>
          <span className="intro_robots_close" aria-hidden="true">
            x
          </span>
        </div>
      </div>

      <div className="red_top">
        <span className="new_prod_callout">NEW MERROW ACTIVESEAM</span> VISIT{" "}
        <a href="https://activeseam.com">MERROW ACTIVESEAM</a> FOR DETAILS
        <div className="new_prod_img">
          <a className="new_prod" href="https://www.activeseam.com">
            <img
              src="https://activeseam.com/ActiveSeam_Images/merrow_activeseam_logo.png"
              width={100}
              alt="new merrow products"
            />
          </a>
        </div>
      </div>
    </div>
  );
}
