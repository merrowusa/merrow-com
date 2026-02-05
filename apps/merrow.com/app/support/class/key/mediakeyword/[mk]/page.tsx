// @version support-partsbook v1.1
//
// Route: /support/class/key/mediakeyword/[mk]
// Parts book lookup via legacy media_keyword

import { Metadata } from "next";
import {
  FullBleed,
  PageHeader,
  MerrowButton,
} from "../../../../../../../../packages/ui";
import { SupportSidebar } from "../../../../_components/SupportSidebar";
import { SupportDocsPanel } from "../../../../_components/SupportDocsPanel";
import {
  getAsinByMediaKeyword,
  getThreadingDiagrams,
} from "../../../../../../../../packages/data-layer/queries/support";

interface PageProps {
  params: Promise<{ mk: string }>;
}

export async function generateMetadata({ params }: PageProps): Promise<Metadata> {
  const { mk } = await params;
  return {
    title: `Parts Book: ${mk} | Merrow Support`,
    description: `Parts book for media keyword ${mk}.`,
  };
}

function resolveLegacyUrl(value: string | undefined) {
  if (!value) return "";
  if (value.startsWith("http://") || value.startsWith("https://")) return value;
  const trimmed = value.replace(/^\//, "");
  return `https://www.merrow.com/${trimmed}`;
}

export default async function PartsBookPage({ params }: PageProps) {
  const { mk } = await params;
  const [record, threadingDiagrams] = await Promise.all([
    getAsinByMediaKeyword(mk),
    getThreadingDiagrams(),
  ]);

  const bookUrl = resolveLegacyUrl(record?.bookPage) || resolveLegacyUrl(record?.partsbookUrl);
  const imageUrl = resolveLegacyUrl(record?.partsbookImg);

  return (
    <main className="text-merrow-textMain bg-white">
      <FullBleed className="bg-[linear-gradient(120deg,#f7f7f7_0%,#ededed_60%,#f4f4f4_100%)] border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <PageHeader
            eyebrow="Merrow Parts Book"
            title={record?.msmcId || record?.productName || mk}
            subtitle="Legacy parts book reference"
          />
        </div>
      </FullBleed>

      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <div className="grid gap-10 lg:grid-cols-[260px_1fr_300px]">
            <SupportSidebar />
            <div>
              {record ? (
                <div className="space-y-5">
                  <div className="rounded-xl border border-[#e1e1e1] bg-[#fafafa] px-6 py-5 shadow-[0_8px_18px_rgba(0,0,0,0.04)]">
                    <p className="text-[13px] text-merrow-textSub">
                      Parts book for <strong>{record.productName || record.msmcId}</strong>.
                    </p>
                  </div>

                  {imageUrl && (
                    <img
                      src={imageUrl}
                      alt={record.partsbookName || record.productName}
                      className="border border-merrow-border rounded-lg"
                    />
                  )}

                  {bookUrl ? (
                    <div className="space-y-3">
                      <MerrowButton href={bookUrl}>
                        Open Parts Book
                      </MerrowButton>
                      <div className="border border-merrow-border rounded-lg overflow-hidden bg-white">
                        <iframe
                          title="Parts Book"
                          src={bookUrl}
                          className="w-full h-[600px]"
                        />
                      </div>
                    </div>
                  ) : (
                    <p className="text-[13px] text-merrow-textSub">
                      Parts book link not available for this keyword.
                    </p>
                  )}
                </div>
              ) : (
                <p className="text-[13px] text-merrow-textSub">
                  No parts book found for keyword <strong>{mk}</strong>.
                </p>
              )}
            </div>
            <SupportDocsPanel threadingDiagrams={threadingDiagrams} />
          </div>
        </div>
      </FullBleed>

      <FullBleed className="bg-merrow-footerBg">
        <div className="mx-auto max-w-merrow px-4 py-10 text-center">
          <h2 className="text-[20px] font-light text-white">Need help ordering parts?</h2>
          <p className="mt-2 text-[13px] text-[#d7d7d7]">
            Contact our parts department for assistance.
          </p>
          <div className="mt-4 flex justify-center gap-4">
            <MerrowButton href="mailto:parts@merrow.com">Email Parts</MerrowButton>
            <MerrowButton href="/support">Back to Support</MerrowButton>
          </div>
        </div>
      </FullBleed>
    </main>
  );
}

export const dynamic = "force-dynamic";
