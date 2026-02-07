// @version agent-book-rewrite v1.0
// Route: /agent_book/kiwifruit/.../language/.../setnum/.../setnam/.../type/...
// Canonicalize to /agent_book.php query form.

import type { Metadata } from "next";
import { redirect } from "next/navigation";

export const metadata: Metadata = {
  title: "Agent Book Legacy Route (Type Last) | Merrow Support",
  description:
    "Legacy Agent Book URL format retained for compatibility. This route redirects to the canonical Agent Book manual viewer at /agent_book.php with the same params.",
};

interface PageProps {
  params: Promise<{
    kiwifruit: string;
    language: string;
    type: string;
    setnum: string;
    setnam: string;
  }>;
}

export default async function Page({ params }: PageProps) {
  const { kiwifruit, language, type, setnum, setnam } = await params;

  const url =
    `/agent_book.php?kiwifruit=${encodeURIComponent(kiwifruit)}` +
    `&language=${encodeURIComponent(language)}` +
    `&type=${encodeURIComponent(type)}` +
    `&setnum=${encodeURIComponent(setnum)}` +
    `&setnam=${encodeURIComponent(setnam)}`;

  redirect(url);
}

export const dynamic = "force-dynamic";
