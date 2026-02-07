// @version fp-agent-book v1.0
// Route: /cephei/sable/fp_agent_book.php
// Legacy entry point; canonicalize to /agent_book.php with the same query params.

import { redirect } from "next/navigation";

interface PageProps {
  searchParams?: Promise<Record<string, string | string[] | undefined>>;
}

function encodeSearchParams(params: Record<string, string | string[] | undefined>) {
  const out: string[] = [];
  for (const [key, value] of Object.entries(params)) {
    if (value === undefined) continue;
    if (Array.isArray(value)) {
      for (const v of value) out.push(`${encodeURIComponent(key)}=${encodeURIComponent(v)}`);
      continue;
    }
    out.push(`${encodeURIComponent(key)}=${encodeURIComponent(value)}`);
  }
  return out.length > 0 ? `?${out.join("&")}` : "";
}

export default async function Page({ searchParams }: PageProps) {
  const query = (await searchParams) ?? {};
  redirect(`/agent_book.php${encodeSearchParams(query)}`);
}

export const dynamic = "force-dynamic";

