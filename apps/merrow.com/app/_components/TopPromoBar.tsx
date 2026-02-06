// @version top-promo-bar v3.1
// Parity: legacy ActiveSeam top splash (single black bar)

export function TopPromoBar() {
  return (
    <div data-testid="top-promo-bar">
      <div className="red_top bg-black text-white font-bold">
        <div className="mx-auto max-w-merrow-1020 px-6 h-[50px] flex items-center justify-center relative text-[11px]">
          <span className="new_prod_callout mr-2">NEW MERROW ACTIVESEAM</span>
          <span>
            VISIT{" "}
            <a
              href="https://activeseam.com"
              className="text-[#66CCFF] underline hover:text-white"
            >
              MERROW ACTIVESEAM
            </a>{" "}
            FOR DETAILS
          </span>
          <div className="new_prod_img absolute right-6 top-1/2 -translate-y-1/2">
            <a className="new_prod" href="https://www.activeseam.com">
              <img
                src="https://activeseam.com/ActiveSeam_Images/merrow_activeseam_logo.png"
                width={100}
                alt="new merrow products"
                className="h-[22px] w-auto"
              />
            </a>
          </div>
        </div>
      </div>
    </div>
  );
}
