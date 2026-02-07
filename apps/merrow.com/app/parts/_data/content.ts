import {
  SUPPORT_CONTACT,
  type SupportLinkItem,
} from "../../support/_data/links";

export const PARTS_CLASS_ORDER = ["MG", "70", "CROCHET", "60", "A", "OTHER"] as const;

export const PARTS_CLASS_LABELS: Record<string, string> = {
  MG: "MG Class Machines",
  "70": "70 Class Machines",
  CROCHET: "Crochet Machines",
  "60": "60 Class Machines",
  A: "A Class Machines",
  OTHER: "Other Machines",
};

export const PARTS_POPULAR_SEARCH_LINKS: SupportLinkItem[] = [
  { label: "Needles", href: "/support/class/70/key/setup_needles" },
  { label: "Loopers", href: "/support/class/70/key/setup_loopers" },
  { label: "Feed Dogs", href: "/support/class/70/key/setup_feeddogs" },
  { label: "Presser Feet", href: "/support/class/70/key/setup_presser" },
  { label: "Threading", href: "/support/class/70/key/setup_threading" },
];

export function getPartsQuickActionLinks(): SupportLinkItem[] {
  return [
    { label: "Contact Parts Department", href: `mailto:${SUPPORT_CONTACT.partsEmail}` },
    { label: "Request a Quote", href: "/support/request-quote" },
    { label: "Locate a Dealer", href: "/agentmap.html" },
    { label: "Support Home", href: "/support" },
  ];
}
