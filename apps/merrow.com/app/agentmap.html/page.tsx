// @version agent-map-page v1.1
//
// Route: /agentmap.html
// Interactive map with 159 dealer pins (Server Component with client map)

import { Metadata } from "next";
import {
  FullBleed,
  PageHeader,
  MerrowButton,
} from "../../../../packages/ui";
import {
  getAgentsForMap,
  getAllAgentCountries,
} from "../../../../packages/data-layer/queries/agents";
import type { Agent } from "../../../../packages/data-layer/schema/agents";
import AgentMapClient from "./AgentMapClient";

export const metadata: Metadata = {
  title: "Find a Merrow Agent or Dealer Near You",
  description:
    "Locate a Merrow sales agent or authorized dealer near you. Our global network in over 50 countries provides local sales and support.",
};

function AgentCard({ agent }: { agent: Agent }) {
  const hasLocation = agent.latitude && agent.longitude;

  return (
    <div className="rounded-xl border border-[#e1e1e1] bg-white p-4 shadow-[0_8px_18px_rgba(0,0,0,0.05)]">
      <div className="text-[12px] uppercase tracking-[0.16em] text-merrow-textMuted">
        {agent.country || "Agent"}
      </div>
      <h3 className="mt-1 text-[15px] font-semibold text-merrow-textMain">
        {agent.name || agent.accountName}
      </h3>

      {agent.address && (
        <p className="mt-2 text-[12px] text-merrow-textSub">
          {agent.address}
          {agent.city && `, ${agent.city}`}
          {agent.state && `, ${agent.state}`}
          {agent.zip && ` ${agent.zip}`}
        </p>
      )}

      <div className="mt-3 space-y-1 text-[12px] text-merrow-textSub">
        {agent.phone && (
          <div>
            <span className="font-semibold">Phone:</span>{" "}
            <a href={`tel:${agent.phone}`} className="text-merrow-link">
              {agent.phone}
            </a>
          </div>
        )}
        {agent.fax && (
          <div>
            <span className="font-semibold">Fax:</span> {agent.fax}
          </div>
        )}
        {agent.email && (
          <div>
            <span className="font-semibold">Email:</span>{" "}
            <a href={`mailto:${agent.email}`} className="text-merrow-link">
              {agent.email}
            </a>
          </div>
        )}
      </div>

      {hasLocation && (
        <div className="mt-3">
          <a
            href={`https://www.google.com/maps?q=${agent.latitude},${agent.longitude}`}
            target="_blank"
            rel="noopener noreferrer"
            className="text-[11px] font-semibold text-merrow-link"
          >
            View on Google Maps
          </a>
        </div>
      )}

      {agent.shortNotes && (
        <p className="mt-3 text-[11px] text-merrow-textMuted italic">
          {agent.shortNotes}
        </p>
      )}
    </div>
  );
}

export default async function AgentMapPage() {
  const agents = await getAgentsForMap();
  const countries = await getAllAgentCountries();

  const agentPins = agents
    .map((agent) => {
      const latitude = Number.parseFloat(agent.latitude || "");
      const longitude = Number.parseFloat(agent.longitude || "");

      if (!Number.isFinite(latitude) || !Number.isFinite(longitude)) {
        return null;
      }

      return {
        id: agent.id,
        name: agent.name,
        accountName: agent.accountName,
        address: agent.address,
        city: agent.city,
        state: agent.state,
        zip: agent.zip,
        country: agent.country,
        phone: agent.phone,
        email: agent.email,
        latitude,
        longitude,
      };
    })
    .filter(Boolean) as Array<{
    id: number;
    name: string;
    accountName?: string;
    address?: string;
    city?: string;
    state?: string;
    zip?: string;
    country?: string;
    phone?: string;
    email?: string;
    latitude: number;
    longitude: number;
  }>;

  const agentsByCountry = countries
    .sort()
    .map((country) => ({
      country,
      agents: agents.filter((a) => a.country === country),
    }))
    .filter((group) => group.agents.length > 0);

  return (
    <main className="text-merrow-textMain bg-white">
      {/* Hero */}
      <FullBleed className="bg-[linear-gradient(120deg,#f7f7f7_0%,#ededed_60%,#f4f4f4_100%)] border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <div className="grid gap-8 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
            <div>
              <PageHeader
                eyebrow="Global Network"
                title="Agent Locator"
                subtitle="Find a Merrow sales agent or authorized dealer near you."
              />
              <p className="mt-4 text-[13px] leading-[20px] text-merrow-textSub">
                Merrow machines are supported by a worldwide network of trained agents.
                Use the map and directory below to connect with your local partner.
              </p>
              <div className="mt-6 flex flex-wrap gap-3">
                <MerrowButton href="/contact_general.html">Contact Merrow</MerrowButton>
                <MerrowButton href="tel:+15086894095">Call 508.689.4095</MerrowButton>
              </div>
            </div>

            <div className="rounded-xl border border-[#e1e1e1] bg-white p-6 shadow-[0_10px_24px_rgba(0,0,0,0.08)]">
              <div className="text-[11px] uppercase tracking-[0.16em] text-merrow-textMuted">
                Network Snapshot
              </div>
              <div className="mt-4 grid grid-cols-3 gap-4 text-center">
                <div>
                  <p className="text-[26px] font-light text-merrow-textMain">{agents.length}</p>
                  <p className="text-[11px] uppercase tracking-[0.12em] text-merrow-textMuted">Agents</p>
                </div>
                <div>
                  <p className="text-[26px] font-light text-merrow-textMain">{countries.length}</p>
                  <p className="text-[11px] uppercase tracking-[0.12em] text-merrow-textMuted">Countries</p>
                </div>
                <div>
                  <p className="text-[26px] font-light text-merrow-textMain">177+</p>
                  <p className="text-[11px] uppercase tracking-[0.12em] text-merrow-textMuted">Years</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </FullBleed>

      {/* Map + quick links */}
      <FullBleed className="bg-white border-b border-merrow-border">
        <div className="mx-auto max-w-merrow px-4 py-12">
          <div className="grid gap-8 lg:grid-cols-[1.4fr_0.6fr]">
            <div>
              {agentPins.length > 0 ? (
                <AgentMapClient agents={agentPins} />
              ) : (
                <div className="rounded-lg border border-merrow-border bg-merrow-heroBg p-6 text-[13px] text-merrow-textMuted">
                  Map data is unavailable right now. Please check the agent database connection.
                </div>
              )}
            </div>
            <div className="rounded-xl border border-[#e1e1e1] bg-[#fafafa] p-6 shadow-[0_8px_18px_rgba(0,0,0,0.04)]">
              <div className="text-[11px] uppercase tracking-[0.16em] text-merrow-textMuted">Quick Jump</div>
              <p className="mt-2 text-[13px] text-merrow-textSub">
                Browse agents by country below. Click a country to jump directly to its listings.
              </p>
              <div className="mt-4 flex flex-wrap gap-2">
                {countries.sort().slice(0, 18).map((country) => (
                  <a
                    key={country}
                    href={`#${country.toLowerCase().replace(/\s+/g, "-")}`}
                    className="text-[11px] px-3 py-1 rounded-full border border-[#d4d4d4] bg-white hover:bg-[#f1f1f1]"
                  >
                    {country}
                  </a>
                ))}
              </div>
              {countries.length > 18 && (
                <div className="mt-3 text-[11px] text-merrow-textMuted">
                  {countries.length - 18} more countries listed below.
                </div>
              )}
            </div>
          </div>
        </div>
      </FullBleed>

      {/* Agents by country */}
      <FullBleed className="bg-white">
        <div className="mx-auto max-w-merrow px-4 py-10">
          <h2 className="text-lg font-semibold tracking-tight mb-6">Agents by Country</h2>

          {agentsByCountry.length > 0 ? (
            <div className="space-y-10">
              {agentsByCountry.map((group) => (
                <section key={group.country} id={group.country.toLowerCase().replace(/\s+/g, "-")}
                  className="scroll-mt-24">
                  <div className="flex items-center justify-between border-b border-merrow-border pb-2 mb-4">
                    <h3 className="text-[14px] font-semibold text-merrow-textMain">
                      {group.country}
                    </h3>
                    <span className="text-[11px] text-merrow-textMuted">{group.agents.length} agents</span>
                  </div>
                  <div className="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    {group.agents.map((agent) => (
                      <AgentCard key={agent.id} agent={agent} />
                    ))}
                  </div>
                </section>
              ))}
            </div>
          ) : (
            <p className="text-merrow-textMuted text-[13px]">
              No agents found. Please check database connection.
            </p>
          )}
        </div>
      </FullBleed>

      {/* CTA */}
      <FullBleed className="bg-merrow-footerBg">
        <div className="mx-auto max-w-merrow px-4 py-10 text-center">
          <h2 className="text-[20px] font-light text-white">
            Can't find an agent near you?
          </h2>
          <p className="mt-2 text-[13px] text-[#d7d7d7]">
            Contact Merrow directly and we'll help you find the best solution.
          </p>
          <div className="mt-4 flex flex-wrap justify-center gap-4">
            <MerrowButton href="/support/request-quote">Request a Quote</MerrowButton>
            <MerrowButton href="/contact_general.html">Contact Us</MerrowButton>
            <MerrowButton href="tel:+15086894095">Call: 508.689.4095</MerrowButton>
          </div>
        </div>
      </FullBleed>
    </main>
  );
}

// Server-rendered with dynamic search (no ISR needed)
export const dynamic = "force-dynamic";
