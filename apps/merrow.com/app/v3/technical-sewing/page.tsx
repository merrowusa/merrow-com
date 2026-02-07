// @version technical-sewing-v3-bold v1.0
// Bold Design: Glassmorphism, liquid glass, animated SVG
//
// Route: /v3/technical-sewing
// Experimental bold design variant of the technical sewing page

import { Metadata } from "next";
import { getMachinesByCategory } from "../../../../../packages/data-layer/queries/machines";
import { getCategoriesWithItems } from "../../../../../packages/data-layer/queries/applications";

// Technical sewing application category keys
const TECHNICAL_APP_KEYS = [5514, 5517, 5519, 5512];

// Legacy S3 assets
const IMG = {
  hero: "https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/general-http/t_03.gif",
  customerStory: "https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/general-http/t_09.jpg",
};

// Customer logos
const CUSTOMER_LOGOS = [
  { name: "Milliken", src: "https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/customer-logos/milliken.png" },
  { name: "Guilford", src: "https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/customer-logos/guilford.png" },
  { name: "3M", src: "https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/customer-logos/3m.png" },
  { name: "Brightec", src: "https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/customer-logos/brightec.png" },
  { name: "BRFL", src: "https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/customer-logos/brfl.png" },
  { name: "Gildan", src: "https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/customer-logos/gildan.png" },
  { name: "Penn Emblem", src: "https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/customer-logos/penn-emblem.png" },
  { name: "Griffin", src: "https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/customer-logos/griffin.png" },
];

// Gradient colors for application categories
const CATEGORY_GRADIENTS = [
  "from-emerald-500 to-teal-600",
  "from-blue-500 to-indigo-600",
  "from-purple-500 to-pink-600",
  "from-amber-500 to-orange-600",
];

export const metadata: Metadata = {
  title: "Technical Sewing Machines (V3 Preview) | Merrow",
  description:
    "Preview the new design for Merrow technical sewing machines - industrial overlock machines for filtration, medical, aerospace applications.",
};

// Animated SVG Thread Component
function AnimatedThread({ className = "" }: { className?: string }) {
  return (
    <svg
      viewBox="0 0 200 100"
      className={`w-full h-auto ${className}`}
      xmlns="http://www.w3.org/2000/svg"
    >
      <defs>
        <linearGradient id="threadGradient" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stopColor="#8b1a1a" stopOpacity="0.8" />
          <stop offset="50%" stopColor="#dc2626" stopOpacity="1" />
          <stop offset="100%" stopColor="#8b1a1a" stopOpacity="0.8" />
        </linearGradient>
      </defs>
      <path
        d="M0,50 Q50,20 100,50 T200,50"
        fill="none"
        stroke="url(#threadGradient)"
        strokeWidth="3"
        strokeLinecap="round"
        className="animate-pulse"
      >
        <animate
          attributeName="d"
          values="M0,50 Q50,20 100,50 T200,50;M0,50 Q50,80 100,50 T200,50;M0,50 Q50,20 100,50 T200,50"
          dur="3s"
          repeatCount="indefinite"
        />
      </path>
    </svg>
  );
}

// Glass Card Component
function GlassCard({
  children,
  className = "",
  hover = true,
}: {
  children: React.ReactNode;
  className?: string;
  hover?: boolean;
}) {
  return (
    <div
      className={`
        relative backdrop-blur-xl bg-white/10
        border border-white/20 rounded-2xl
        shadow-[0_8px_32px_rgba(0,0,0,0.12)]
        ${hover ? "hover:bg-white/15 hover:shadow-[0_12px_48px_rgba(0,0,0,0.2)] hover:-translate-y-1" : ""}
        transition-all duration-300
        ${className}
      `}
    >
      {/* Inner glow effect */}
      <div className="absolute inset-0 rounded-2xl bg-gradient-to-br from-white/10 via-transparent to-transparent pointer-events-none" />
      <div className="relative z-10">{children}</div>
    </div>
  );
}

// Animated Background Orbs
function BackgroundOrbs() {
  return (
    <div className="fixed inset-0 overflow-hidden pointer-events-none z-0">
      {/* Large blur orbs */}
      <div className="absolute top-[-20%] left-[-10%] w-[600px] h-[600px] rounded-full bg-gradient-to-br from-red-500/20 to-orange-500/10 blur-[120px] animate-pulse" />
      <div className="absolute top-[30%] right-[-15%] w-[500px] h-[500px] rounded-full bg-gradient-to-bl from-blue-500/15 to-purple-500/10 blur-[100px] animate-pulse" style={{ animationDelay: "1s" }} />
      <div className="absolute bottom-[-10%] left-[20%] w-[400px] h-[400px] rounded-full bg-gradient-to-tr from-emerald-500/15 to-teal-500/10 blur-[80px] animate-pulse" style={{ animationDelay: "2s" }} />
    </div>
  );
}

export default async function TechnicalSewingBoldPage() {
  // Fetch machines and applications in parallel, with fallback for missing DB
  let machines: Awaited<ReturnType<typeof getMachinesByCategory>> = [];
  let applicationCategories: Awaited<ReturnType<typeof getCategoriesWithItems>> = [];

  try {
    [machines, applicationCategories] = await Promise.all([
      getMachinesByCategory("technical"),
      getCategoriesWithItems(TECHNICAL_APP_KEYS),
    ]);
  } catch {
    // DB not available - render with empty data (stable fallback for visual tests)
  }

  // Split machines into 3 columns
  const machinesPerColumn = Math.ceil(machines.length / 3);
  const machineColumns = [
    machines.slice(0, machinesPerColumn),
    machines.slice(machinesPerColumn, machinesPerColumn * 2),
    machines.slice(machinesPerColumn * 2),
  ];

  return (
    <main className="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white relative">
      <BackgroundOrbs />

      {/* Hero section with glass effect */}
      <section className="relative z-10 pt-8 pb-12">
        <div className="mx-auto max-w-[1100px] px-6">
          <GlassCard className="p-8" hover={false}>
            <div className="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
              {/* Left: Hero Image with glow */}
              <div className="relative flex justify-center">
                <div className="absolute inset-0 bg-gradient-to-r from-red-500/30 to-orange-500/20 blur-3xl rounded-full scale-75" />
                <img
                  src={IMG.hero}
                  alt="Merrow Technical Sewing Machine"
                  className="relative z-10 max-w-full h-auto drop-shadow-2xl"
                />
              </div>

              {/* Right: Title + Copy + CTA */}
              <div>
                <h1 className="text-5xl font-bold bg-gradient-to-r from-white via-gray-100 to-gray-300 bg-clip-text text-transparent mb-2">
                  Technical Sewing
                </h1>
                <p className="text-xl text-gray-300 italic mb-4">
                  Manufacturing Precision Sewing Machines
                </p>
                <AnimatedThread className="my-6 opacity-60" />
                <p className="text-gray-400 leading-relaxed mb-6">
                  What do the world&apos;s most recognizable emblems, seams and
                  blankets have in common? They&apos;ve all been Merrowed.
                  Merrowing has become synonymous with overlocking for over a
                  century for good reason: we invented the overlock stitch and
                  have been manufacturing quality and precision into our machines
                  since the inception of commercial sewing.
                </p>
                {/* Liquid glass CTA button */}
                <a
                  href="/stitch-lab"
                  className="
                    inline-flex items-center gap-3
                    bg-gradient-to-r from-red-700 to-red-600
                    hover:from-red-600 hover:to-red-500
                    text-white font-semibold px-6 py-3 rounded-xl
                    shadow-[0_4px_20px_rgba(220,38,38,0.4)]
                    hover:shadow-[0_8px_30px_rgba(220,38,38,0.6)]
                    transition-all duration-300
                    backdrop-blur-sm
                  "
                >
                  <span className="text-2xl leading-none">+</span>
                  CONTACT OUR STITCH LAB
                </a>
              </div>
            </div>
          </GlassCard>
        </div>
      </section>

      {/* 3-box row with glass cards */}
      <section className="relative z-10 pb-12">
        <div className="mx-auto max-w-[1100px] px-6">
          <div className="grid grid-cols-1 md:grid-cols-[1fr_1.5fr_1fr] gap-6">
            {/* Box 1: Featured Customer Story */}
            <GlassCard className="p-5">
              <p className="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">
                Featured Customer Story
              </p>
              <a href="/customer-stories/featured/csb" className="block group">
                <div className="relative overflow-hidden rounded-lg">
                  <img
                    src={IMG.customerStory}
                    alt="Brightec - Featured Customer"
                    className="w-full h-auto transition-transform duration-500 group-hover:scale-105"
                  />
                  <div className="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300" />
                </div>
              </a>
            </GlassCard>

            {/* Box 2: Machines (text list) */}
            <GlassCard className="p-5">
              <h2 className="text-2xl font-bold bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent mb-4">
                Machines
              </h2>
              <div className="grid grid-cols-3 gap-x-4 gap-y-1">
                {machineColumns.map((column, colIdx) => (
                  <ul key={colIdx} className="space-y-1">
                    {column.map((machine) => (
                      <li key={machine.id}>
                        <a
                          href={`/Sergers_and_Overlock_Sewing_Machines/${machine.styleKey}`}
                          className="text-[11px] text-gray-400 hover:text-white hover:pl-1 transition-all duration-200"
                        >
                          {machine.style}
                        </a>
                      </li>
                    ))}
                  </ul>
                ))}
              </div>
            </GlassCard>

            {/* Box 3: Customers (logo grid) */}
            <GlassCard className="p-5">
              <h2 className="text-2xl font-bold bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent mb-4">
                Customers
              </h2>
              <div className="grid grid-cols-2 gap-3">
                {CUSTOMER_LOGOS.map((logo) => (
                  <div
                    key={logo.name}
                    className="flex items-center justify-center h-[45px] bg-white/5 rounded-lg p-2 hover:bg-white/10 transition-colors"
                  >
                    <img
                      src={logo.src}
                      alt={logo.name}
                      className="max-h-[36px] max-w-full object-contain brightness-0 invert opacity-70 hover:opacity-100 transition-opacity"
                    />
                  </div>
                ))}
              </div>
            </GlassCard>
          </div>
        </div>
      </section>

      {/* Applications with gradient headers */}
      <section className="relative z-10 pb-12">
        <div className="mx-auto max-w-[1100px] px-6">
          <GlassCard className="p-8" hover={false}>
            <h2 className="text-3xl font-bold bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent mb-8">
              Applications
            </h2>

            {applicationCategories.length > 0 ? (
              <div className="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                {applicationCategories.map((category, idx) => (
                  <div key={category.appKey}>
                    {/* Gradient category header */}
                    <div
                      className={`bg-gradient-to-r ${CATEGORY_GRADIENTS[idx % CATEGORY_GRADIENTS.length]} px-4 py-2 rounded-lg mb-3 shadow-lg`}
                    >
                      <a
                        href={`/sewing/applications/${category.appKey}`}
                        className="text-sm font-bold uppercase tracking-wider text-white hover:text-white/80 transition-colors"
                      >
                        {category.name}
                      </a>
                    </div>

                    {/* Sub-items */}
                    {category.items.length > 0 && (
                      <ul className="space-y-2 ml-2">
                        {category.items.map((item) => (
                          <li key={item.dKey} className="flex items-center gap-3">
                            <div className="w-4 h-4 rounded-full bg-gradient-to-br from-white/20 to-white/5 flex items-center justify-center">
                              <div className="w-1.5 h-1.5 rounded-full bg-white/60" />
                            </div>
                            <a
                              href={`/sewing/applications/${category.appKey}#${item.dKey}`}
                              className="text-sm text-gray-400 hover:text-white transition-colors"
                            >
                              {item.menuTitle}
                            </a>
                          </li>
                        ))}
                      </ul>
                    )}
                  </div>
                ))}
              </div>
            ) : (
              <p className="text-gray-500">
                No applications found. Please check database connection.
              </p>
            )}
          </GlassCard>
        </div>
      </section>

      {/* CTA section with glass effect */}
      <section className="relative z-10 pb-16">
        <div className="mx-auto max-w-[1100px] px-6">
          <GlassCard className="p-10 text-center" hover={false}>
            <h2 className="text-3xl font-bold bg-gradient-to-r from-white via-gray-100 to-gray-300 bg-clip-text text-transparent mb-3">
              Need help choosing the right machine?
            </h2>
            <p className="text-gray-400 mb-6">
              Our technical team can help you find the perfect machine for your
              application requirements.
            </p>
            <div className="flex justify-center gap-4">
              <a
                href="mailto:sales@merrow.com"
                className="
                  px-6 py-3 rounded-xl font-semibold
                  bg-white/10 hover:bg-white/20
                  border border-white/20 hover:border-white/40
                  text-white transition-all duration-300
                  shadow-lg hover:shadow-xl
                "
              >
                Contact Sales
              </a>
              <a
                href="/agentmap.html"
                className="
                  px-6 py-3 rounded-xl font-semibold
                  bg-gradient-to-r from-red-700 to-red-600
                  hover:from-red-600 hover:to-red-500
                  text-white transition-all duration-300
                  shadow-[0_4px_20px_rgba(220,38,38,0.3)]
                  hover:shadow-[0_8px_30px_rgba(220,38,38,0.5)]
                "
              >
                Find an Agent
              </a>
            </div>
          </GlassCard>
        </div>
      </section>

      {/* Version toggle */}
      <a
        href="/technical-sewing"
        className="fixed bottom-4 right-4 bg-white/10 backdrop-blur-xl text-white text-xs font-bold px-4 py-2 rounded-xl shadow-lg hover:bg-white/20 transition-all z-50 border border-white/20"
      >
        ← Classic Design
      </a>
    </main>
  );
}

export const revalidate = 86400; // ISR: 24 hours
