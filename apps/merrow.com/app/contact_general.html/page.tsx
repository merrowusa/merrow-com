// @version contact v1.0
// Route: /contact_general.html
// General contact page with form submission

import { Metadata } from "next";
import { ContactForm } from "../_components/ContactForm";

export const metadata: Metadata = {
  title: "Contact Us | Merrow Sewing Machine Company",
  description:
    "Contact Merrow Sewing Machine Company for sales, support, and general inquiries. Located in Fall River, Massachusetts since 1838.",
};

export default function ContactPage() {
  return (
    <main className="text-merrow-textMain">
      <div className="mx-auto max-w-merrow px-4 py-12">
        <h1 className="text-2xl font-semibold mb-2">Contact Us</h1>
        <p className="text-merrow-textSub mb-8">
          We&apos;re here to help with your sewing machine needs. Reach out to us using the form
          below or contact us directly.
        </p>

        <div className="grid md:grid-cols-2 gap-12">
          <div>
            <ContactForm
              type="contact"
              title="Send Us a Message"
              showCompany
              showPhone
              submitLabel="Send Message"
            />
          </div>

          <div className="space-y-8">
            <div>
              <h2 className="text-lg font-semibold text-merrow-textMain mb-4">Contact Information</h2>
              <div className="space-y-4 text-sm">
                <div>
                  <h3 className="font-semibold">Main Office</h3>
                  <address className="not-italic text-merrow-textSub">
                    Merrow Sewing Machine Company<br />
                    531 Durfee Street<br />
                    Fall River, MA 02720
                  </address>
                </div>

                <div>
                  <h3 className="font-semibold">Phone & Fax</h3>
                  <p className="text-merrow-textSub">
                    Phone:{" "}
                    <a href="tel:+15086894095" className="text-merrow-linkBlue underline">
                      508.689.4095
                    </a>
                    <br />
                    Fax: 508.689.4098
                  </p>
                </div>

                <div>
                  <h3 className="font-semibold">Email</h3>
                  <ul className="text-merrow-textSub space-y-1">
                    <li>
                      Sales:{" "}
                      <a href="mailto:sales@merrow.com" className="text-merrow-linkBlue underline">
                        sales@merrow.com
                      </a>
                    </li>
                    <li>
                      Support:{" "}
                      <a href="mailto:support@merrow.com" className="text-merrow-linkBlue underline">
                        support@merrow.com
                      </a>
                    </li>
                  </ul>
                </div>

                <div>
                  <h3 className="font-semibold">Business Hours</h3>
                  <p className="text-merrow-textSub">
                    Monday – Friday: 8:00 AM – 5:00 PM EST<br />
                    Saturday – Sunday: Closed
                  </p>
                </div>
              </div>
            </div>

            <div className="bg-merrow-greyBoxBg rounded p-4">
              <h3 className="font-semibold text-merrow-textMain mb-2">Quick Links</h3>
              <ul className="text-sm space-y-2">
                <li>
                  <a href="/support/request-quote" className="text-merrow-linkBlue underline">
                    Request a Quote
                  </a>{" "}
                  — Get pricing for machines and parts
                </li>
                <li>
                  <a href="/agentmap.html" className="text-merrow-linkBlue underline">
                    Find a Dealer
                  </a>{" "}
                  — Locate a sales agent near you
                </li>
                <li>
                  <a href="/support" className="text-merrow-linkBlue underline">
                    Technical Support
                  </a>{" "}
                  — Get help with your machine
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </main>
  );
}
