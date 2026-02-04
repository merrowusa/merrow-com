// @version layout-shell v2.2
// UPDATED: STEP 3 — Header data integration via HeaderWithData server component

import type { Metadata } from "next";
import "./globals.css";
import { HeaderWithData } from "./_components/HeaderWithData";
import { Footer } from "./_components/Footer";
import { SocialShareSidebar } from "./_components/SocialShareSidebar";

export const metadata: Metadata = {
  title: "Merrow",
  description: "Merrow Sewing Machines and Technology",
};

export default function RootLayout({ children }: { children: React.ReactNode }) {
  return (
    <html lang="en">
      <body className="min-h-screen bg-white text-merrow-textMain">
        <SocialShareSidebar />
        <HeaderWithData />
        {children}
        <Footer />
      </body>
    </html>
  );
}
