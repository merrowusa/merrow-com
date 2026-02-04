# MERROW WEB STYLE CONTROL v0.1

## Goals

- Modern, clean, industrial feel.
- Respect legacy merrow.com content and IA; no wild redesigns.
- Built on Tailwind + Next.js App Router.
- Reusable components in @merrow/ui instead of per-page one-offs.

## Layout

- Max width: `max-w-6xl` with `px-4` padding on desktop.
- Page vertical spacing: `py-8` default.
- Shell: header + content + footer. Header always sticky-ish with subtle blur, footer simple.

## Typography

- Base font: system stack (Tailwind default).
- Headings:
  - H1: `text-3xl md:text-4xl font-semibold tracking-tight`
  - H2: `text-lg font-semibold tracking-tight`
  - H3: `text-sm font-semibold tracking-tight`
- Body:
  - Default: `text-sm text-slate-700` with `leading-relaxed`.
- Labels / meta:
  - Small caps: `text-[0.7rem] uppercase tracking-[0.12em] text-slate-500`.

## Color

- Background: `bg-slate-50`.
- Surfaces: `bg-white` or `bg-slate-50` with `border-slate-200`.
- Primary text: `text-slate-900`.
- Secondary text: `text-slate-600 / 700`.
- Links / accents: `text-sky-700 hover:text-sky-900`.

## Components (initial)

- `<ShellLayout>` (root layout frame).
- `<PageHeader>`:
  - Props: `eyebrow?`, `title`, `subtitle?`.
- `<SpecGrid>`:
  - Props: array of `{ label, value }`, rendered in responsive grid.
- `<RichText>`:
  - Renders trusted HTML from legacy DB with `prose prose-sm` styles.

## Usage rules

- New pages should use `<PageHeader>` for top-of-page identity.
- Specs should prefer `<SpecGrid>` instead of ad-hoc flex/divs.
- Legacy HTML blocks (description/overview/how/why/where) should go through `<RichText>` instead of raw `dangerouslySetInnerHTML`.

