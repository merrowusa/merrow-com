// @version request-quote v2.0
// Route: /support/request-quote
// Updated with functional form submission

import { Metadata } from "next";
import { ContactForm } from "../../_components/ContactForm";

export const metadata: Metadata = {
  title: "Request a Quote | Merrow Industrial Sewing Machines",
  description:
    "Request a custom quote for Merrow industrial sewing machines. Our team will provide pricing, lead times, and configuration options for your needs.",
};

export default function RequestQuotePage() {
  return (
    <main className="text-merrow-textMain">
      <div className="mx-auto max-w-merrow px-4 py-12">
        <div className="max-w-2xl">
          <h1 className="text-2xl font-semibold mb-2">Request a Quote</h1>
          <p className="text-merrow-textSub mb-8">
            Get a custom quote for Merrow sewing machines and equipment. Tell us about your
            application and we&apos;ll provide pricing, lead times, and configuration options.
          </p>

          <div className="grid md:grid-cols-2 gap-8">
            <div>
              <ContactForm
                type="quote"
                title="Quote Request Form"
                description="Fill out the form below and our sales team will respond within 1 business day."
                showCompany
                showPhone
                showMachine
                submitLabel="Request Quote"
              />
            </div>

            <div className="space-y-6">
              <div className="bg-merrow-greyBoxBg rounded p-4">
                <h3 className="font-semibold text-merrow-textMain mb-2">What to Include</h3>
                <ul className="text-sm text-merrow-textSub space-y-1 list-disc list-inside">
                  <li>Machine model(s) you&apos;re interested in</li>
                  <li>Application details (fabric type, stitch requirements)</li>
                  <li>Quantity needed</li>
                  <li>Desired delivery timeline</li>
                  <li>Any special configurations</li>
                </ul>
              </div>

              <div className="bg-merrow-greyBoxBg rounded p-4">
                <h3 className="font-semibold text-merrow-textMain mb-2">Quick Contact</h3>
                <ul className="text-sm space-y-2">
                  <li>
                    <strong>Email:</strong>{" "}
                    <a href="mailto:sales@merrow.com" className="text-merrow-linkBlue underline">
                      sales@merrow.com
                    </a>
                  </li>
                  <li>
                    <strong>Phone:</strong>{" "}
                    <a href="tel:+15086894095" className="text-merrow-linkBlue underline">
                      508.689.4095
                    </a>
                  </li>
                  <li>
                    <strong>Fax:</strong> 508.689.4098
                  </li>
                </ul>
              </div>

              <div className="text-sm text-merrow-textMuted">
                <p>
                  <strong>Hours:</strong> Monday–Friday, 8:00 AM – 5:00 PM EST
                </p>
                <p className="mt-1">
                  Located in Fall River, Massachusetts — proudly manufacturing in the USA since 1838.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  );
}
