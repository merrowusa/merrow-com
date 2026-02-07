import { Metadata } from "next";
import { ContactGeneralPageContent } from "../../../contact_general/_components/ContactGeneralPageContent";

interface ContactKeyPageProps {
  params: Promise<{ k: string }>;
  searchParams?: Promise<{ label?: string; product?: string }>;
}

export async function generateMetadata({ params }: ContactKeyPageProps): Promise<Metadata> {
  const { k } = await params;

  return {
    title: `Contact Us: ${decodeURIComponent(k)} | Merrow Sewing Machine Company`,
    description:
      "Contact Merrow Sewing Machine Company for sales, support, and general inquiries.",
  };
}

export default async function ContactKeyPage({ params, searchParams }: ContactKeyPageProps) {
  const { k } = await params;
  const query = (await searchParams) ?? {};

  return (
    <ContactGeneralPageContent
      keyParam={k}
      labelParam={query.label}
      productParam={query.product}
    />
  );
}

export const dynamic = "force-dynamic";
