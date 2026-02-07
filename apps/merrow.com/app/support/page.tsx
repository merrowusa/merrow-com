// @version support-index v3.0
//
// Route: /support
// Legacy support landing page parity layout (a2.php / support.php style)

import { Metadata } from "next";
import { getThreadingDiagrams } from "../../../../packages/data-layer/queries/support";

export const metadata: Metadata = {
  title: "Support & Service | Merrow Sewing Machine Company",
  description:
    "Get support for your Merrow sewing machine. Access technical manuals, request replacement parts, and contact Merrow support.",
};

interface PageProps {
  searchParams?: Promise<{ key?: string }>;
}

interface LinkItem {
  label: string;
  href: string;
  external?: boolean;
}

function linkClass() {
  return "text-[12px] leading-[14px] text-[#808080] hover:text-[#af0b0c] hover:underline";
}

function renderLinks(items: LinkItem[]) {
  return (
    <ul className="space-y-1">
      {items.map((item) => (
        <li key={`${item.href}-${item.label}`}>
          <a
            href={item.href}
            className={linkClass()}
            target={item.external ? "_blank" : undefined}
            rel={item.external ? "noopener noreferrer" : undefined}
          >
            {item.label}
          </a>
        </li>
      ))}
    </ul>
  );
}

function LegacyBox({
  title,
  children,
  className,
}: {
  title: string;
  children: React.ReactNode;
  className?: string;
}) {
  return (
    <div className={`mb-3 rounded border border-[#b7b7b7] bg-[#efefef] p-2 ${className ?? ""}`}>
      <div className="mb-1 text-[13px] font-semibold text-[#b00707]">{title}</div>
      {children}
    </div>
  );
}

export default async function SupportPage({ searchParams }: PageProps) {
  const threadingDiagrams = await getThreadingDiagrams();
  const resolved = (await searchParams) ?? {};

  const key = resolved.key;
  const contentMap: Record<string, { title: string; html: string }> = {
    howto: {
      title: "How to use this menu",
      html:
        "The menu on the left is divided into general classes of Merrow machines.<br/><br/>" +
        "MG Class — all green sergers<br/>" +
        "70 Class — used for textile finishing<br/>" +
        "Crochet Machines — high-arm sewing machines using straight needles and latch hooks<br/><br/>" +
        "For video support please go <a href=\"https://www.merrow.com/video.html\">here</a>.<br/><br/>" +
        "We're here to help; <a href=\"/contact_general.html\">let us know</a> if there is anything else we can do.",
    },
    thankyou: {
      title: "Thanks for your input",
      html:
        "We will do the best we can to make changes based on your suggestions and questions.<br/><br/>" +
        "To offer a more detailed suggestion please go <a href=\"/contact_general.html\">here</a>.",
    },
    error: {
      title: "Please add your email address",
      html:
        "Without your email address we cannot read and process your comment.<br/><br/>" +
        "To offer a more detailed suggestion please go <a href=\"/contact_general.html\">here</a>.",
    },
  };

  const defaultContent = {
    title: "Welcome to Merrow's technical help guide",
    html:
      "If you have trouble finding what you're looking for please contact us directly:<br/><br/>" +
      "Domestic phone: 800.431.6677<br/>" +
      "Email: support@merrow.com<br/>" +
      "Skype: merrowusa<br/>" +
      "Jabber: merrow@gmail.com<br/>" +
      "International phone: 508.689.4095<br/>" +
      "US &amp; INT fax: 508.689.4098<br/><br/>" +
      "We're here to help!",
  };

  const content = key && contentMap[key] ? contentMap[key] : defaultContent;

  const diagrams = threadingDiagrams.map((diagram) => ({
    label: `Diagram #${diagram.name}`,
    href: `/support/diagram/${encodeURIComponent(diagram.image)}/showthemapicture/ohyeah`,
  }));

  const generalReference: LinkItem[] = [
    { label: "How to use this menu", href: "/support?key=howto" },
    { label: "Video help", href: "https://www.merrow.com/videoHD.php", external: true },
    { label: "Locate a dealer", href: "/agentmap.html" },
    { label: "Contact Merrow", href: "/contact_general.html" },
  ];

  const mgSetup: LinkItem[] = [
    { label: "General Setup Guide", href: "/support/class/MG/key/setup" },
    { label: "Needles", href: "/support/class/MG/key/setup_needles" },
    { label: "Loopers", href: "/support/class/MG/key/setup_loopers" },
    { label: "Threading", href: "/support/class/MG/key/setup_threading" },
    { label: "Cutters", href: "/support/class/MG/key/setup_gencutting" },
    { label: "Knife Tips", href: "/support/class/MG/key/setup_knife" },
    { label: "Feed Dogs", href: "/support/class/MG/key/setup_feeddogs" },
    { label: "Presser Foot", href: "/support/class/MG/key/setup_presser" },
  ];

  const mgTrouble: LinkItem[] = [
    { label: "Needle Issues", href: "/support/class/MG/key/trouble_needles" },
    { label: "Feeding Issues", href: "/support/class/MG/key/trouble_feeding" },
    { label: "Stitching Issues", href: "/support/class/MG/key/trouble_stitch" },
    { label: "Oil Issues", href: "/support/class/MG/key/trouble_oil" },
    { label: "Skipped Stitches", href: "/support/class/MG/key/trouble_skippedstitch" },
    { label: "Threading", href: "/support/class/MG/key/trouble_thread" },
  ];

  const mgParts: LinkItem[] = [
    { label: "M-1D-2", href: "/support/class/key/mediakeyword/m1d2" },
    { label: "M-1D-7", href: "/support/class/key/mediakeyword/m1d7" },
    { label: "M-2-7-G", href: "/support/class/key/mediakeyword/m27gribitz" },
    { label: "MG-2DNR-1", href: "/support/class/key/mediakeyword/mg2dnr1" },
    { label: "MG-3DW-7", href: "/support/class/key/mediakeyword/mg3dw7" },
    { label: "MG-3Q-3", href: "/support/class/key/mediakeyword/mg3q3" },
    { label: "MG-3U", href: "/support/class/key/mediakeyword/mg3u" },
  ];

  const class70Setup: LinkItem[] = [
    { label: "General Setup Guide", href: "/support/class/70/key/setup" },
    { label: "Needles", href: "/support/class/70/key/setup_needles" },
    { label: "Loopers", href: "/support/class/70/key/setup_loopers" },
    { label: "Threading", href: "/support/class/70/key/setup_threading" },
    { label: "Cutters", href: "/support/class/70/key/setup_gencutting" },
    { label: "Sharpening Cutters", href: "/support/class/70/key/setup_sharpening" },
    { label: "Knife Tips", href: "/support/class/70/key/setup_knife" },
    { label: "Feed Dogs", href: "/support/class/70/key/setup_feeddogs" },
    { label: "Presser Foot", href: "/support/class/70/key/setup_presser" },
    { label: "Framecap", href: "/support/class/70/key/setup_framecap" },
  ];

  const class70Trouble: LinkItem[] = [
    { label: "Needle Issues", href: "/support/class/70/key/trouble_needles" },
    { label: "Feeding Issues", href: "/support/class/70/key/trouble_feeding" },
    { label: "Stitching Issues", href: "/support/class/70/key/trouble_stitch" },
    { label: "Oil Issues", href: "/support/class/70/key/trouble_oil" },
    { label: "Skipped Stitches", href: "/support/class/70/key/trouble_skippedstitch" },
    { label: "Threading", href: "/support/class/70/key/trouble_thread" },
  ];

  const class70Parts: LinkItem[] = [
    { label: "70-D3B-2", href: "/support/class/key/mediakeyword/70d3b2" },
    { label: "70-D3B-2 NICKEL PLATED", href: "/support/class/key/mediakeyword/70d3b2cnp" },
    { label: "70-D3B-2 RAIL", href: "/support/class/key/mediakeyword/70d3b2rail" },
    { label: "70-Y3B-2", href: "/support/class/key/mediakeyword/70y3b2" },
    { label: "72-D3B", href: "/support/class/key/mediakeyword/72d3b" },
    { label: "70-1D-2", href: "/support/class/key/mediakeyword/701d2" },
    { label: "70-1D-7", href: "/support/class/key/mediakeyword/701d7" },
  ];

  const crochetSetup: LinkItem[] = [
    { label: "General Setup Guide", href: "/support/class/CROCHET/key/setup" },
    { label: "Needles", href: "/support/class/CROCHET/key/maint_needles" },
    { label: "Latch Hooks", href: "/support/class/CROCHET/key/maint_hook" },
    { label: "Threading", href: "/support/class/CROCHET/key/maint_threading" },
    { label: "Hook Carrier", href: "/support/class/CROCHET/key/maint_hookcarrier" },
    { label: "Needle Guard", href: "/support/class/CROCHET/key/maint_needleguard" },
    { label: "Needle Bar", href: "/support/class/CROCHET/key/maint_needlebar" },
    { label: "Cast Off Horn", href: "/support/class/CROCHET/key/maint_castoff" },
    { label: "Fixed (COH)", href: "/support/class/CROCHET/key/maint_fixedcastoff" },
    { label: "Needle Lever Tips", href: "/support/class/CROCHET/key/maint_needlelever" },
    { label: "Stitch Plate", href: "/support/class/CROCHET/key/maint_fingerplate" },
    { label: "Spreader", href: "/support/class/CROCHET/key/maint_spreader" },
    { label: "Thread Tensions", href: "/support/class/CROCHET/key/maint_tensions" },
    { label: "Feed Dogs Settings", href: "/support/class/CROCHET/key/maint_feedALL" },
    { label: "Blanket Stitch FD", href: "/support/class/CROCHET/key/maint_feedPLAIN" },
    { label: "Shell Stitch FD", href: "/support/class/CROCHET/key/maint_feedSHELL" },
    { label: "Thread Carrier", href: "/support/class/CROCHET/key/maint_threadcarrier" },
    { label: "Fabric Guard", href: "/support/class/CROCHET/key/maint_fabricguard" },
  ];

  const crochetTrouble: LinkItem[] = [
    { label: "Latch Hook Issues", href: "/support/class/CROCHET/key/trouble_latchhooks" },
    { label: "Loose Stitch Issues", href: "/support/class/CROCHET/key/trouble_loosestitches" },
    { label: "Skipped Stitches", href: "/support/class/CROCHET/key/trouble_skippedstitches" },
    { label: "Breaking Needles", href: "/support/class/CROCHET/key/trouble_breakingneedles" },
    { label: "Needle Holes", href: "/support/class/CROCHET/key/trouble_needleholes" },
    { label: "Lubrication Issues", href: "/support/class/CROCHET/key/maint_lubrication" },
  ];

  const crochetParts: LinkItem[] = [
    { label: "18-E", href: "/support/class/key/mediakeyword/18e" },
    { label: "18-A", href: "/support/class/key/mediakeyword/18a" },
    { label: "18-G", href: "/support/class/key/mediakeyword/18g" },
    { label: "22-FJ", href: "/support/class/key/mediakeyword/22fj" },
  ];

  return (
    <main className="min-w-[1040px] bg-[#ebebeb] text-[#222222]">
      <div className="mx-auto w-[980px] pl-[40px] pt-3 pb-4">
        <div className="grid grid-cols-[300px_300px_300px] gap-4">
          <div>
            <div className="mb-2 text-[13px] font-semibold text-[#b00707]">Support Menu</div>

            <LegacyBox title="General Reference">
              {renderLinks(generalReference)}
            </LegacyBox>

            <LegacyBox title="MG Class Machines">
              <div className="mb-2 text-[12px] font-semibold text-[#666]">Setup &amp; Maintenance</div>
              {renderLinks(mgSetup)}
              <div className="mb-2 mt-3 text-[12px] font-semibold text-[#666]">Troubleshooting</div>
              {renderLinks(mgTrouble)}
              <div className="mb-2 mt-3 text-[12px] font-semibold text-[#666]">Parts Book</div>
              {renderLinks(mgParts)}
            </LegacyBox>

            <LegacyBox title="70 Class Machines">
              <div className="mb-2 text-[12px] font-semibold text-[#666]">Setup &amp; Maintenance</div>
              {renderLinks(class70Setup)}
              <div className="mb-2 mt-3 text-[12px] font-semibold text-[#666]">Troubleshooting</div>
              {renderLinks(class70Trouble)}
              <div className="mb-2 mt-3 text-[12px] font-semibold text-[#666]">Parts Book</div>
              {renderLinks(class70Parts)}
            </LegacyBox>

            <LegacyBox title="Crochet Machines">
              <div className="mb-2 text-[12px] font-semibold text-[#666]">Setup &amp; Maintenance</div>
              {renderLinks(crochetSetup)}
              <div className="mb-2 mt-3 text-[12px] font-semibold text-[#666]">Troubleshooting</div>
              {renderLinks(crochetTrouble)}
              <div className="mb-2 mt-3 text-[12px] font-semibold text-[#666]">Parts Book</div>
              {renderLinks(crochetParts)}
            </LegacyBox>
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
              {renderLinks([
                { label: "Support Email", href: "mailto:support@merrow.com" },
                { label: "Parts Email", href: "mailto:parts@merrow.com" },
                { label: "Sales Email", href: "mailto:sales@merrow.com" },
                { label: "Call: 508.689.4095", href: "tel:+15086894095" },
              ])}
            </LegacyBox>
          </div>

          <div>
            <div className="mb-2 text-[13px] font-semibold text-[#b00707]">Merrow Documentation</div>

            <LegacyBox title="Threading Diagrams">
              {diagrams.length > 0 ? (
                <ul className="max-h-[180px] space-y-1 overflow-auto pr-1">
                  {diagrams.map((item) => (
                    <li key={item.href}>
                      <a href={item.href} className={linkClass()}>{item.label}</a>
                    </li>
                  ))}
                </ul>
              ) : (
                <p className="text-[12px] text-[#666]">No diagrams found.</p>
              )}
            </LegacyBox>

            <LegacyBox title="Parts Books">
              {renderLinks([
                { label: "MG parts book (english)", href: "https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/MG/setnum/72157606827670334/setnam/mgpartsbook", external: true },
                { label: "70 class parts book (english)", href: "https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/70/setnum/72157606828138530/setnam/70classbook", external: true },
                { label: "Crochet parts book (english)", href: "https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/crochet/setnum/72157606826978368/setnam/crochet", external: true },
                { label: "60 class parts book (english)", href: "https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/60/setnum/72157606826047178/setnam/60class", external: true },
                { label: "A class parts book (english)", href: "https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/A/setnum/72157606832488303/setnam/Aclassparts", external: true },
              ])}
            </LegacyBox>

            <LegacyBox title="Instruction Manuals">
              {renderLinks([
                { label: "MG instructions (english)", href: "https://www.merrow.com/agent_book/kiwifruit/instructions/language/english/type/MG/setnum/72157606829542814/setnam/mginstructions", external: true },
                { label: "MG instructions (spanish)", href: "https://www.merrow.com/agent_book/kiwifruit/instructions/language/spanish/type/MG/setnum/72157606830005278/setnam/mgpspanishinstruction", external: true },
                { label: "70 class instructions (english)", href: "https://www.merrow.com/agent_book/kiwifruit/instructions/language/english/type/70/setnum/72157606831978449/setnam/70classinstructions", external: true },
              ])}
            </LegacyBox>

            <LegacyBox title="Butt Seam Book">
              {renderLinks([
                { label: "Butt Seam (english)", href: "https://www.merrow.com/agent_book/kiwifruit/book/language/english/setnum/72157607489347906/setnam/english_book/type/BS", external: true },
                { label: "Butt Seam (portuguese)", href: "https://www.merrow.com/agent_book/kiwifruit/book/language/portuguese/setnum/72157606583868719/setnam/rivitex_book/type/BS", external: true },
                { label: "Butt Seam (turkish)", href: "https://www.merrow.com/agent_book/kiwifruit/book/language/turkish/setnum/72157606834081591/setnam/turkish_book/type/BS", external: true },
                { label: "Butt Seam (spanish)", href: "https://www.merrow.com/agent_book/kiwifruit/book/language/spanish/setnum/72157606834229615/setnam/spanish_book/type/BS", external: true },
                { label: "Butt Seam (chinese)", href: "https://www.merrow.com/agent_book/kiwifruit/book/language/mandarin/setnum/72157606831254410/setnam/mandarin_book/type/BS", external: true },
              ])}
            </LegacyBox>
          </div>
        </div>

        <div className="mt-2 border-t-4 border-[#4a4a4a] pt-2 text-[13px] font-semibold text-[#b00707]">
          What Machine Would You Like?
        </div>
        <div className="text-[24px] font-semibold leading-[26px] text-[#b00707]">Need More Help?</div>
      </div>
    </main>
  );
}
