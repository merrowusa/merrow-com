// @version merrow-ui v1.0

import React from "react";

// -----------------------------------------------------------------------------
// PageHeader
// -----------------------------------------------------------------------------

export interface PageHeaderProps {
  eyebrow?: string;
  title: string;
  subtitle?: string;
}

export function PageHeader({ eyebrow, title, subtitle }: PageHeaderProps) {
  return (
    <header className="space-y-2">
      {eyebrow && (
        <p className="text-xs font-semibold tracking-[0.18em] text-slate-500 uppercase">
          {eyebrow}
        </p>
      )}
      <h1 className="text-3xl md:text-4xl font-semibold tracking-tight">
        {title}
      </h1>
      {subtitle && (
        <p className="text-sm text-slate-600 leading-relaxed">{subtitle}</p>
      )}
    </header>
  );
}

// -----------------------------------------------------------------------------
// SpecGrid
// -----------------------------------------------------------------------------

export interface SpecItem {
  label: string;
  value: string;
}

export function SpecGrid({ specs }: { specs: SpecItem[] }) {
  const filtered = specs.filter((s) => s.value && s.value.trim().length > 0);
  if (!filtered.length) return null;

  return (
    <section className="space-y-3">
      <h2 className="text-lg font-semibold tracking-tight">Key specs</h2>
      <div className="grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
        {filtered.map((s) => (
          <div
            key={s.label}
            className="rounded-lg border border-slate-200 bg-slate-50 px-3 py-2"
          >
            <div className="text-[0.7rem] uppercase tracking-[0.12em] text-slate-500 mb-0.5">
              {s.label}
            </div>
            <div className="text-sm text-slate-900">{s.value}</div>
          </div>
        ))}
      </div>
    </section>
  );
}

// -----------------------------------------------------------------------------
// RichText
// -----------------------------------------------------------------------------

export function RichText({ html }: { html: string }) {
  if (!html) return null;
  return (
    <div
      className="prose prose-sm max-w-none text-slate-700"
      dangerouslySetInnerHTML={{ __html: html }}
    />
  );
}

// -----------------------------------------------------------------------------
// FullBleed - Break out of centered layout for full-width bands
// -----------------------------------------------------------------------------

export interface FullBleedProps {
  className?: string;
  children: React.ReactNode;
}

export function FullBleed({ className = "", children }: FullBleedProps) {
  return (
    <section
      className={[
        "relative left-1/2 right-1/2 w-screen -ml-[50vw] -mr-[50vw]",
        className,
      ].join(" ")}
    >
      {children}
    </section>
  );
}

// -----------------------------------------------------------------------------
// MerrowButton - Dark CTA button used throughout the site
// -----------------------------------------------------------------------------

export interface MerrowButtonProps {
  href?: string;
  type?: "button" | "submit";
  children: React.ReactNode;
  className?: string;
}

export function MerrowButton({
  href,
  type = "button",
  children,
  className = "",
}: MerrowButtonProps) {
  const baseStyles =
    "inline-flex bg-[#3f3f3f] px-3 py-[2px] text-[11px] font-semibold text-white hover:bg-[#2a2a2a] transition-colors";

  if (href) {
    return (
      <a href={href} className={`${baseStyles} ${className}`}>
        {children}
      </a>
    );
  }

  return (
    <button type={type} className={`${baseStyles} ${className}`}>
      {children}
    </button>
  );
}

// -----------------------------------------------------------------------------
// MachineCard - Card for machine listings on category pages
// -----------------------------------------------------------------------------

export interface MachineCardProps {
  href: string;
  imageSrc?: string;
  title: string;
  subtitle?: string;
  description?: string;
}

export function MachineCard({
  href,
  imageSrc,
  title,
  subtitle,
  description,
}: MachineCardProps) {
  return (
    <a href={href} className="block group">
      <div className="border border-merrow-border bg-white rounded-lg overflow-hidden hover:shadow-md transition-shadow">
        {imageSrc && (
          <div className="aspect-[4/3] bg-merrow-heroBg flex items-center justify-center p-4">
            <img
              src={imageSrc}
              alt={title}
              className="max-h-full w-auto object-contain group-hover:scale-105 transition-transform"
            />
          </div>
        )}
        <div className="p-4">
          <h3 className="text-[14px] font-semibold text-merrow-textMain group-hover:text-merrow-link transition-colors">
            {title}
          </h3>
          {subtitle && (
            <p className="mt-1 text-[11px] uppercase tracking-[0.12em] text-merrow-textMuted">
              {subtitle}
            </p>
          )}
          {description && (
            <p className="mt-2 text-[12px] leading-[16px] text-merrow-textSub line-clamp-3">
              {description}
            </p>
          )}
        </div>
      </div>
    </a>
  );
}

// -----------------------------------------------------------------------------
// FeatureCard - Callout card with image and text (used in grey band)
// -----------------------------------------------------------------------------

export interface FeatureCardProps {
  imageSrc: string;
  title: string;
  subtitle?: string;
  description: string;
  href: string;
  buttonText?: string;
}

export function FeatureCard({
  imageSrc,
  title,
  subtitle,
  description,
  href,
  buttonText = "Learn More",
}: FeatureCardProps) {
  return (
    <div className="rounded-[12px] border border-[#7e7e7e] bg-[linear-gradient(#d6d6d6,#bcbcbc)] shadow-[inset_0_1px_0_rgba(255,255,255,0.35),_0_2px_10px_rgba(0,0,0,0.22)] px-5 py-4">
      <div className="grid grid-cols-[170px_1fr] gap-4 items-start">
        <div className="flex justify-center">
          <img src={imageSrc} alt="" className="w-[155px] h-auto object-contain" />
        </div>
        <div>
          <div className="text-[14px] font-semibold tracking-[0.06em] text-[#2a2a2a]">
            {title}
          </div>
          {subtitle && (
            <div className="mt-1 text-[12px] font-semibold text-[#3a3a3a]">
              {subtitle}
            </div>
          )}
          <p className="mt-2 text-[12px] leading-[16px] text-[#2a2a2a]">
            {description}
          </p>
          <div className="mt-3 flex justify-end">
            <MerrowButton href={href}>{buttonText}</MerrowButton>
          </div>
        </div>
      </div>
    </div>
  );
}

// -----------------------------------------------------------------------------
// ArticleBlock - Content block with title and rich text (used on machine pages)
// -----------------------------------------------------------------------------

export interface ArticleBlockProps {
  title: string;
  html: string;
}

export function ArticleBlock({ title, html }: ArticleBlockProps) {
  if (!html) return null;
  return (
    <article className="space-y-2">
      <h3 className="text-sm font-semibold tracking-tight text-slate-800">
        {title}
      </h3>
      <RichText html={html} />
    </article>
  );
}

// -----------------------------------------------------------------------------
// YouTubeEmbed - Embed YouTube videos
// -----------------------------------------------------------------------------

export interface YouTubeEmbedProps {
  videoId: string;
  title?: string;
  tagline?: string;
}

export function YouTubeEmbed({ videoId, title, tagline }: YouTubeEmbedProps) {
  if (!videoId) return null;

  return (
    <div className="space-y-2">
      {title && (
        <h3 className="text-sm font-semibold tracking-tight text-slate-800">
          {title}
        </h3>
      )}
      <div className="aspect-video bg-slate-100 rounded-lg overflow-hidden">
        <iframe
          src={`https://www.youtube.com/embed/${videoId}`}
          title={tagline || "Video"}
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowFullScreen
          className="w-full h-full"
        />
      </div>
      {tagline && (
        <p className="text-[12px] text-slate-600">{tagline}</p>
      )}
    </div>
  );
}

