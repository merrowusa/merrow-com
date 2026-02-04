// @version machine-detail-page v3.0
//
// Route: /machines/[code]
// Alternate URL for machine pages (uses shared component)
// RINSE Rebuild 2026-01-20: Now uses shared MachinePageContent

import { Metadata } from "next";
import {
  MachinePageContent,
  generateMachineMetadata,
} from "../../_components/MachinePage";
import { getAllMachineStyleKeys } from "../../../../../packages/data-layer/queries/machines";

interface PageProps {
  params: Promise<{ code: string }>;
}

export async function generateStaticParams() {
  const styleKeys = await getAllMachineStyleKeys();
  return styleKeys.map((code) => ({ code }));
}

export async function generateMetadata({ params }: PageProps): Promise<Metadata> {
  const { code } = await params;
  return generateMachineMetadata(code);
}

export default async function Page({ params }: PageProps) {
  const { code } = await params;
  return <MachinePageContent styleKey={code} />;
}

export const revalidate = 86400; // ISR: 24 hours
