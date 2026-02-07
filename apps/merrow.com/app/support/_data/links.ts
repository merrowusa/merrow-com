export interface SupportLinkItem {
  label: string;
  href: string;
  external?: boolean;
}

export const SUPPORT_CONTACT = {
  supportEmail: "support@merrow.com",
  partsEmail: "parts@merrow.com",
  salesEmail: "sales@merrow.com",
  supportPhoneDisplay: "508.689.4095",
  supportPhoneHref: "tel:+15086894095",
} as const;

export const SUPPORT_CONTACT_LINKS: SupportLinkItem[] = [
  { label: "Support Email", href: `mailto:${SUPPORT_CONTACT.supportEmail}` },
  { label: "Parts Email", href: `mailto:${SUPPORT_CONTACT.partsEmail}` },
  { label: "Sales Email", href: `mailto:${SUPPORT_CONTACT.salesEmail}` },
  { label: `Call: ${SUPPORT_CONTACT.supportPhoneDisplay}`, href: SUPPORT_CONTACT.supportPhoneHref },
];

export const SUPPORT_PARTS_BOOK_LINKS: SupportLinkItem[] = [
  {
    label: "MG parts book (english)",
    href: "https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/MG/setnum/72157606827670334/setnam/mgpartsbook",
    external: true,
  },
  {
    label: "70 class parts book (english)",
    href: "https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/70/setnum/72157606828138530/setnam/70classbook",
    external: true,
  },
  {
    label: "Crochet parts book (english)",
    href: "https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/crochet/setnum/72157606826978368/setnam/crochet",
    external: true,
  },
  {
    label: "60 class parts book (english)",
    href: "https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/60/setnum/72157606826047178/setnam/60class",
    external: true,
  },
  {
    label: "A class parts book (english)",
    href: "https://www.merrow.com/agent_book/kiwifruit/partsbook/language/english/type/A/setnum/72157606832488303/setnam/Aclassparts",
    external: true,
  },
];

export const SUPPORT_INSTRUCTION_MANUAL_LINKS: SupportLinkItem[] = [
  {
    label: "MG instructions (english)",
    href: "https://www.merrow.com/agent_book/kiwifruit/instructions/language/english/type/MG/setnum/72157606829542814/setnam/mginstructions",
    external: true,
  },
  {
    label: "MG instructions (spanish)",
    href: "https://www.merrow.com/agent_book/kiwifruit/instructions/language/spanish/type/MG/setnum/72157606830005278/setnam/mgpspanishinstruction",
    external: true,
  },
  {
    label: "70 class instructions (english)",
    href: "https://www.merrow.com/agent_book/kiwifruit/instructions/language/english/type/70/setnum/72157606831978449/setnam/70classinstructions",
    external: true,
  },
];

export const SUPPORT_BUTT_SEAM_BOOK_LINKS: SupportLinkItem[] = [
  {
    label: "Butt Seam (english)",
    href: "https://www.merrow.com/agent_book/kiwifruit/book/language/english/setnum/72157607489347906/setnam/english_book/type/BS",
    external: true,
  },
  {
    label: "Butt Seam (portuguese)",
    href: "https://www.merrow.com/agent_book/kiwifruit/book/language/portuguese/setnum/72157606583868719/setnam/rivitex_book/type/BS",
    external: true,
  },
  {
    label: "Butt Seam (turkish)",
    href: "https://www.merrow.com/agent_book/kiwifruit/book/language/turkish/setnum/72157606834081591/setnam/turkish_book/type/BS",
    external: true,
  },
  {
    label: "Butt Seam (spanish)",
    href: "https://www.merrow.com/agent_book/kiwifruit/book/language/spanish/setnum/72157606834229615/setnam/spanish_book/type/BS",
    external: true,
  },
  {
    label: "Butt Seam (chinese)",
    href: "https://www.merrow.com/agent_book/kiwifruit/book/language/mandarin/setnum/72157606831254410/setnam/mandarin_book/type/BS",
    external: true,
  },
];
