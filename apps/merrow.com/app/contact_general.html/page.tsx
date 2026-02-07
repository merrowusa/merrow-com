// @version contact v2.0
// Route: /contact_general.html
// General contact page with legacy key/label parameter handling

import { Metadata } from "next";
import { ContactGeneralPageContent } from "../contact_general/_components/ContactGeneralPageContent";

export const metadata: Metadata = {
  title: "Contact Us | Merrow Sewing Machine Company",
  description:
    "Contact Merrow Sewing Machine Company for sales, support, and general inquiries. Located in Fall River, Massachusetts since 1838.",
};

interface ContactPageProps {
  searchParams?: Promise<{
    key?: string;
    label?: string;
    product?: string;
  }>;
}

export default async function ContactPage({ searchParams }: ContactPageProps) {
  const params = (await searchParams) ?? {};

  return (
    <ContactGeneralPageContent
      keyParam={params.key}
      labelParam={params.label}
      productParam={params.product}
    />
  );
}
