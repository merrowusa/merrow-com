import type { ReactNode } from "react";
import type { SupportLinkItem } from "../_data/links";

export const LEGACY_SUPPORT_LINK_CLASS =
  "text-[12px] leading-[14px] text-[#808080] hover:text-[#af0b0c] hover:underline";

interface LegacySupportPageProps {
  children: ReactNode;
  containerClassName?: string;
}

export function LegacySupportPage({ children, containerClassName }: LegacySupportPageProps) {
  return (
    <main className="min-w-[1040px] bg-[#ebebeb] text-[#222222]">
      <div className={`mx-auto w-[980px] pl-[40px] pt-3 pb-4 ${containerClassName ?? ""}`}>
        {children}
      </div>
    </main>
  );
}

interface LegacyBoxProps {
  title: string;
  children: ReactNode;
  className?: string;
}

export function LegacyBox({ title, children, className }: LegacyBoxProps) {
  return (
    <div className={`mb-3 rounded border border-[#b7b7b7] bg-[#efefef] p-2 ${className ?? ""}`}>
      <div className="mb-1 text-[13px] font-semibold text-[#b00707]">{title}</div>
      {children}
    </div>
  );
}

interface LegacyLinkListProps {
  items: SupportLinkItem[];
  className?: string;
  linkClassName?: string;
}

export function LegacyLinkList({
  items,
  className,
  linkClassName = LEGACY_SUPPORT_LINK_CLASS,
}: LegacyLinkListProps) {
  return (
    <ul className={className ?? "space-y-1"}>
      {items.map((item) => (
        <li key={`${item.href}-${item.label}`}>
          <a
            href={item.href}
            className={linkClassName}
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
