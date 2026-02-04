// @version 70class-page v3.0
//
// Route: /70class/cp/[cp]
// Maps legacy URLs for 70class machines
// RINSE Rebuild 2026-01-20: Uses shared MachinePageContent v3.0

import { Metadata } from "next";
import {
  MachinePageContent,
  generateMachineMetadata,
} from "../../../_components/MachinePage";
import { getAllMachineStyleKeys } from "../../../../../../packages/data-layer/queries/machines";

interface PageProps {
  params: Promise<{ cp: string }>;
}

export async function generateStaticParams() {
  const styleKeys = await getAllMachineStyleKeys();
  return styleKeys.map((cp) => ({ cp }));
}

export async function generateMetadata({ params }: PageProps): Promise<Metadata> {
  const { cp } = await params;
  return generateMachineMetadata(cp);
}

export default async function Page({ params }: PageProps) {
  const { cp } = await params;
  return <MachinePageContent styleKey={cp} />;
}

export const revalidate = 86400; // ISR: 24 hours
