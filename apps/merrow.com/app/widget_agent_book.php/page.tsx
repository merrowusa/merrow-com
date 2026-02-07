// @version widget-agent-book v1.0
// Route: /widget_agent_book.php
// Legacy widget endpoint; canonicalize to /agent_book.php.

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

