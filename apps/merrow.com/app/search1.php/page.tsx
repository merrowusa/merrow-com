// @version serial-lookup-page v1.1
// Route: /search1.php
// Server wrapper for metadata + query handoff

import { Metadata } from "next";
import { SerialLookupClient } from "./SerialLookupClient";

export const metadata: Metadata = {
  title: "How Old Is My Merrow? | Merrow Serial Number Lookup",
  description:
    "Use the Merrow serial number lookup to estimate your machine's manufacturing period, then contact Merrow support for service details and parts guidance.",
};

interface PageProps {
  searchParams: Promise<{ q?: string | string[] }>;
}

export default async function SerialLookupPage({ searchParams }: PageProps) {
  const params = await searchParams;
  const initialQuery = typeof params.q === "string" ? params.q : "";

  return <SerialLookupClient initialQuery={initialQuery} />;
}
