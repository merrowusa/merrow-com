import { Metadata } from "next";
import { ContactGeneralPageContent } from "../../../../../contact_general/_components/ContactGeneralPageContent";

interface ContactLabelKeyPageProps {
  params: Promise<{ label: string; k: string }>;
  searchParams?: Promise<{ product?: string }>;
}

export async function generateMetadata({ params }: ContactLabelKeyPageProps): Promise<Metadata> {
  const { label, k } = await params;

  return {
    title: `Contact: ${decodeURIComponent(label)} (${decodeURIComponent(k)}) | Merrow`,
    description:
      "Contact Merrow Sewing Machine Company for sales, support, and product inquiries.",
  };
}

export default async function ContactLabelKeyPage({
  params,
  searchParams,
}: ContactLabelKeyPageProps) {
  const { label, k } = await params;
  const query = (await searchParams) ?? {};

  return (
    <ContactGeneralPageContent
      keyParam={k}
      labelParam={label}
      productParam={query.product}
    />
  );
}

export const dynamic = "force-dynamic";
