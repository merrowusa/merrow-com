// @version agents-queries v2.0
//
// Typed query functions for agents table (dealers)
// Uses Supabase JS client (REST API) instead of Drizzle
// Maps snake_case DB columns to camelCase for app compatibility

import { supabase } from "../supabase";

export interface Agent {
  id: number;
  store: string;
  storeDbName: string;
  showMap: string;
  partyId: string;
  accountName: string;
  name: string;
  address: string;
  city: string;
  state: string;
  zip: string;
  country: string;
  email: string;
  phone: string;
  fax: string;
  latitude: string;
  longitude: string;
  fullAddress: string;
  contentKey1: string;
  contentKey2: string;
  color: string;
  icon: string;
  shortNotes: string;
  years: string;
}

// eslint-disable-next-line @typescript-eslint/no-explicit-any
function mapAgent(row: any): Agent {
  return {
    id: row.id,
    store: row.store,
    storeDbName: row.store_db_name,
    showMap: row.show_map,
    partyId: row.party_id,
    accountName: row.account_name,
    name: row.name,
    address: row.address,
    city: row.city,
    state: row.state,
    zip: row.zip,
    country: row.country,
    email: row.email,
    phone: row.phone,
    fax: row.fax,
    latitude: row.latitude,
    longitude: row.longitude,
    fullAddress: row.full_address,
    contentKey1: row.content_key1,
    contentKey2: row.content_key2,
    color: row.color,
    icon: row.icon,
    shortNotes: row.short_notes,
    years: row.years,
  };
}

/**
 * Get all agents/dealers
 */
export async function getAllAgents(): Promise<Agent[]> {
  const { data, error } = await supabase.from("agents").select("*");

  if (error || !data) return [];
  return data.map(mapAgent);
}

/**
 * Get agents that should be shown on map (show_map = 'yes')
 */
export async function getAgentsForMap(): Promise<Agent[]> {
  const { data, error } = await supabase
    .from("agents")
    .select("*")
    .eq("show_map", "yes");

  if (error || !data) return [];
  return data.map(mapAgent);
}

/**
 * Get agents by country
 */
export async function getAgentsByCountry(country: string): Promise<Agent[]> {
  const { data, error } = await supabase
    .from("agents")
    .select("*")
    .eq("country", country);

  if (error || !data) return [];
  return data.map(mapAgent);
}

/**
 * Search agents by name (partial match)
 */
export async function searchAgentsByName(query: string): Promise<Agent[]> {
  const { data, error } = await supabase
    .from("agents")
    .select("*")
    .ilike("name", `%${query}%`);

  if (error || !data) return [];
  return data.map(mapAgent);
}

/**
 * Get agent by ID
 */
export async function getAgentById(id: number): Promise<Agent | null> {
  const { data, error } = await supabase
    .from("agents")
    .select("*")
    .eq("id", id)
    .limit(1)
    .single();

  if (error || !data) return null;
  return mapAgent(data);
}

/**
 * Get all unique countries with agents
 */
export async function getAllAgentCountries(): Promise<string[]> {
  const { data, error } = await supabase
    .from("agents")
    .select("country")
    .eq("show_map", "yes");

  if (error || !data) return [];

  // Get unique countries
  const countries = [...new Set(data.map((r) => r.country))];
  return countries.filter((c) => c.length > 0);
}
