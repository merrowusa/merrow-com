"use client";

// @version agent-map-client v1.1
// Leaflet map rendering for agent locator (no react-leaflet dependency)

import { useEffect, useMemo, useRef } from "react";
import * as L from "leaflet";

interface AgentPin {
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
}

const defaultIcon = L.icon({
  iconUrl: "https://unpkg.com/leaflet@1.9.4/dist/images/marker-icon.png",
  iconRetinaUrl: "https://unpkg.com/leaflet@1.9.4/dist/images/marker-icon-2x.png",
  shadowUrl: "https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png",
  iconSize: [25, 41],
  iconAnchor: [12, 41],
});

export default function AgentMapClient({ agents }: { agents: AgentPin[] }) {
  const mapRef = useRef<L.Map | null>(null);
  const containerRef = useRef<HTMLDivElement | null>(null);
  const center = useMemo(() => {
    if (agents.length === 0) return [20, 0] as [number, number];
    const lat = agents.reduce((sum, a) => sum + a.latitude, 0) / agents.length;
    const lng = agents.reduce((sum, a) => sum + a.longitude, 0) / agents.length;
    return [lat, lng] as [number, number];
  }, [agents]);

  useEffect(() => {
    const container = containerRef.current;
    if (!container) return;

    if (mapRef.current) {
      mapRef.current.remove();
      mapRef.current = null;
    }

    container.innerHTML = "";

    const map = L.map(container, {
      scrollWheelZoom: false,
      zoomControl: true,
    }).setView(center, 2);

    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution:
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    }).addTo(map);

    agents.forEach((agent) => {
      const marker = L.marker([agent.latitude, agent.longitude], {
        icon: defaultIcon,
      });

      const popup = `
        <div style="font-size:12px;">
          <div style="font-weight:600;">${agent.name || agent.accountName || ""}</div>
          ${agent.address || agent.city ? `<div>${[agent.address, agent.city, agent.state, agent.zip].filter(Boolean).join(", ")}</div>` : ""}
          ${agent.country ? `<div>${agent.country}</div>` : ""}
          ${agent.phone ? `<div><a href="tel:${agent.phone}">${agent.phone}</a></div>` : ""}
          ${agent.email ? `<div><a href="mailto:${agent.email}">${agent.email}</a></div>` : ""}
        </div>
      `;

      marker.bindPopup(popup);
      marker.addTo(map);
    });

    mapRef.current = map;

    return () => {
      map.remove();
      mapRef.current = null;
    };
  }, [agents, center]);

  return (
    <div
      ref={containerRef}
      className="h-[460px] w-full rounded-lg overflow-hidden border border-merrow-border"
    />
  );
}
