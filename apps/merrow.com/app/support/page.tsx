// @version support-index v3.0
//
// Route: /support
// Legacy support landing page parity layout (a2.php / support.php style)

import { Metadata } from "next";
import { getThreadingDiagrams } from "../../../../packages/data-layer/queries/support";
import {
  LegacyBox,
  LegacyLinkList,
  LegacySupportPage,
} from "./_components/LegacySupportPrimitives";
import { SupportSidebar } from "./_components/SupportSidebar";
import { SupportDocsPanel } from "./_components/SupportDocsPanel";
import { SUPPORT_CONTACT_LINKS } from "./_data/links";
import { SUPPORT_DEFAULT_CONTENT, SUPPORT_KEY_CONTENT } from "./_data/content";

export const metadata: Metadata = {
  title: "Support & Service | Merrow Sewing Machine Company",
  description:
    "Get support for your Merrow sewing machine. Access technical manuals, request replacement parts, and contact Merrow support.",
};

interface PageProps {
  searchParams?: Promise<{ key?: string }>;
}

export default async function SupportPage({ searchParams }: PageProps) {
  const threadingDiagrams = await getThreadingDiagrams();
  const resolved = (await searchParams) ?? {};
  const key = resolved.key;
  const content = key && SUPPORT_KEY_CONTENT[key] ? SUPPORT_KEY_CONTENT[key] : SUPPORT_DEFAULT_CONTENT;

  return (
    <LegacySupportPage>
      <div className="grid grid-cols-[300px_300px_300px] gap-4">
        <div>
          <SupportSidebar />
        </div>

        <div>
          <div className="mb-2 rounded border border-[#b7b7b7] bg-[#efefef] p-2">
            <h1 className="text-[14px] font-semibold text-[#222]">{content.title}</h1>
            <div
              className="mt-2 text-[12px] leading-[14px] text-[#333]"
              dangerouslySetInnerHTML={{ __html: content.html }}
            />
          </div>

          <LegacyBox title="Contact">
            <LegacyLinkList items={SUPPORT_CONTACT_LINKS} />
          </LegacyBox>
        </div>

        <div>
          <SupportDocsPanel threadingDiagrams={threadingDiagrams} />
        </div>
      </div>

      <div className="mt-2 border-t-4 border-[#4a4a4a] pt-2 text-[13px] font-semibold text-[#b00707]">
        What Machine Would You Like?
      </div>
      <div className="text-[24px] font-semibold leading-[26px] text-[#b00707]">Need More Help?</div>
    </LegacySupportPage>
  );
}
