// @version agent-book-rewrite v1.0
// Route: /agent_book/kiwifruit/.../language/.../type/.../setnum/.../setnam/...
// Canonicalize to /agent_book.php query form.

import { redirect } from "next/navigation";

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

