// @version support-sidebar v1.1
// Legacy SD menu rebuilt + redesigned for support pages

import React from "react";

interface LinkItem {
  label: string;
  href: string;
  external?: boolean;
}

function LinkList({ items }: { items: LinkItem[] }) {
  return (
    <ul className="space-y-1">
      {items.map((item) => (
        <li key={item.href + item.label}>
          <a
            href={item.href}
            className="text-[12px] text-merrow-textSub hover:text-merrow-link"
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

function Section({ title, children }: { title: string; children: React.ReactNode }) {
  return (
    <div className="rounded-lg border border-[#e1e1e1] bg-white p-4 shadow-[0_6px_16px_rgba(0,0,0,0.05)]">
      <div className="text-[11px] uppercase tracking-[0.16em] text-merrow-textMuted mb-3">
        {title}
      </div>
      {children}
    </div>
  );
}

function SubSection({ title, items }: { title: string; items: LinkItem[] }) {
  return (
    <div className="mb-3">
      <div className="text-[12px] font-semibold text-merrow-textMain mb-1">
        {title}
      </div>
      <LinkList items={items} />
    </div>
  );
}

export function SupportSidebar() {
  return (
    <aside className="w-full">
      <div className="rounded-xl border border-[#dcdcdc] bg-[#f5f5f5] p-4">
        <div className="text-[12px] uppercase tracking-[0.2em] text-[#8b0000] mb-4">
          Support Menu
        </div>

        <div className="space-y-4">
          <Section title="General Reference">
            <LinkList
              items={[
                { label: "How to use this menu", href: "/support?key=howto" },
                { label: "Video help", href: "https://www.merrow.com/videoHD.php", external: true },
                { label: "Locate a dealer", href: "/agentmap.html" },
                { label: "Contact Merrow", href: "/contact_general.html" },
              ]}
            />
          </Section>

          <Section title="MG Class Machines">
            <SubSection
              title="Setup & Maintenance"
              items={[
                { label: "General Setup Guide", href: "/support/class/MG/key/setup" },
                { label: "Needles", href: "/support/class/MG/key/setup_needles" },
                { label: "Loopers", href: "/support/class/MG/key/setup_loopers" },
                { label: "Threading", href: "/support/class/MG/key/setup_threading" },
                { label: "Cutters", href: "/support/class/MG/key/setup_gencutting" },
                { label: "Knife Tips", href: "/support/class/MG/key/setup_knife" },
                { label: "Feed Dogs", href: "/support/class/MG/key/setup_feeddogs" },
                { label: "Presser Foot", href: "/support/class/MG/key/setup_presser" },
              ]}
            />
            <SubSection
              title="Troubleshooting"
              items={[
                { label: "Needle Issues", href: "/support/class/MG/key/trouble_needles" },
                { label: "Feeding Issues", href: "/support/class/MG/key/trouble_feeding" },
                { label: "Stitching Issues", href: "/support/class/MG/key/trouble_stitch" },
                { label: "Oil Issues", href: "/support/class/MG/key/trouble_oil" },
                { label: "Skipped Stitches", href: "/support/class/MG/key/trouble_skippedstitch" },
                { label: "Threading", href: "/support/class/MG/key/trouble_thread" },
              ]}
            />
            <SubSection
              title="Parts Book"
              items={[
                { label: "M-1D-2", href: "/support/class/key/mediakeyword/m1d2" },
                { label: "M-1D-7", href: "/support/class/key/mediakeyword/m1d7" },
                { label: "M-2-7-G", href: "/support/class/key/mediakeyword/m27gribitz" },
                { label: "MG-2DNR-1", href: "/support/class/key/mediakeyword/mg2dnr1" },
                { label: "MG-3DW-7", href: "/support/class/key/mediakeyword/mg3dw7" },
                { label: "MG-3Q-3", href: "/support/class/key/mediakeyword/mg3q3" },
                { label: "MG-3U", href: "/support/class/key/mediakeyword/mg3u" },
              ]}
            />
            <LinkList
              items={[
                {
                  label: "Download manuals",
                  href: "https://www.merrow.com/agent_book/kiwifruit/instructions/language/english/type/MG/setnum/72157606829542814/setnam/mginstructions",
                  external: true,
                },
                {
                  label: "View stitch samples",
                  href: "https://www.merrow.com/stitch/marketplace/general/stitch/front_overlock/label/143627189/setnum/72157606893157487/setnum1/72157607323739660/setnam/general%20overlock/resolution/low",
                  external: true,
                },
              ]}
            />
          </Section>

          <Section title="70 Class Machines">
            <SubSection
              title="Setup & Maintenance"
              items={[
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
              ]}
            />
            <SubSection
              title="Troubleshooting"
              items={[
                { label: "Needle Issues", href: "/support/class/70/key/trouble_needles" },
                { label: "Feeding Issues", href: "/support/class/70/key/trouble_feeding" },
                { label: "Stitching Issues", href: "/support/class/70/key/trouble_stitch" },
                { label: "Oil Issues", href: "/support/class/70/key/trouble_oil" },
                { label: "Skipped Stitches", href: "/support/class/70/key/trouble_skippedstitch" },
                { label: "Threading", href: "/support/class/70/key/trouble_thread" },
              ]}
            />
            <SubSection
              title="Parts Book"
              items={[
                { label: "70-D3B-2", href: "/support/class/key/mediakeyword/70d3b2" },
                { label: "70-D3B-2 NICKEL PLATED", href: "/support/class/key/mediakeyword/70d3b2cnp" },
                { label: "70-D3B-2 RAIL", href: "/support/class/key/mediakeyword/70d3b2rail" },
                { label: "70-Y3B-2", href: "/support/class/key/mediakeyword/70y3b2" },
                { label: "72-D3B", href: "/support/class/key/mediakeyword/72d3b" },
                { label: "70-1D-2", href: "/support/class/key/mediakeyword/701d2" },
                { label: "70-1D-7", href: "/support/class/key/mediakeyword/701d7" },
              ]}
            />
            <LinkList
              items={[
                {
                  label: "Download manuals",
                  href: "https://www.merrow.com/agent_book/kiwifruit/instructions/language/english/type/70/setnum/72157606831978449/setnam/70classinstructions",
                  external: true,
                },
                {
                  label: "View stitch samples",
                  href: "https://www.merrow.com/stitch/marketplace/general/stitch/front_textile/label/145362189/setnum/72157606892968601/setnum1/72157607324383640/setnam/Textile%20Finishing/resolution/low",
                  external: true,
                },
              ]}
            />
          </Section>

          <Section title="Crochet (18-35) Machines">
            <SubSection
              title="Setup & Maintenance"
              items={[
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
              ]}
            />
            <SubSection
              title="Troubleshooting"
              items={[
                { label: "Latch Hook Issues", href: "/support/class/CROCHET/key/trouble_latchhooks" },
                { label: "Loose Stitch Issues", href: "/support/class/CROCHET/key/trouble_loosestitches" },
                { label: "Skipped Stitches", href: "/support/class/CROCHET/key/trouble_skippedstitches" },
                { label: "Breaking Needles", href: "/support/class/CROCHET/key/trouble_breakingneedles" },
                { label: "Needle Holes", href: "/support/class/CROCHET/key/trouble_needleholes" },
                { label: "Lubrication Issues", href: "/support/class/CROCHET/key/maint_lubrication" },
              ]}
            />
            <SubSection
              title="Parts Book"
              items={[
                { label: "18-E", href: "/support/class/key/mediakeyword/18e" },
                { label: "18-A", href: "/support/class/key/mediakeyword/18a" },
                { label: "18-G", href: "/support/class/key/mediakeyword/18g" },
                { label: "22-FJ", href: "/support/class/key/mediakeyword/22fj" },
              ]}
            />
            <LinkList
              items={[
                {
                  label: "Download manuals",
                  href: "https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/crochet/setnum/72157606826978368/setnam/crochet",
                  external: true,
                },
                {
                  label: "View stitch samples",
                  href: "https://www.merrow.com/stitch/marketplace/general/stitch/front_crochet/label/145327189/setnum/72157606906056879/setnum1/72157607323790836/setnam/crochet/resolution/low",
                  external: true,
                },
              ]}
            />
          </Section>

          <Section title="Contact">
            <LinkList
              items={[
                { label: "Support Email", href: "mailto:support@merrow.com" },
                { label: "Parts Email", href: "mailto:parts@merrow.com" },
                { label: "Sales Email", href: "mailto:sales@merrow.com" },
                { label: "Call: 508.689.4095", href: "tel:+15086894095" },
              ]}
            />
          </Section>
        </div>
      </div>
    </aside>
  );
}
