// @version customer-stories-queries v2.0
//
// Typed query functions for customer_stories table
// Uses Supabase JS client (REST API) instead of Drizzle
// Maps snake_case DB columns to camelCase for app compatibility

import { supabase } from "../supabase";

export interface CustomerStory {
  id: number;
  appKey: string;
  quote: string;
  quoteAuthor: string;
  p1: string;
  p2: string;
  p3: string;
  p4: string;
  p1Title: string;
  p2Title: string;
  p3Title: string;
  p4Title: string;
  appTitle: string;
  appCopy: string;
  machineTitle: string;
  machineCopy: string;
  stitchTitle: string;
  stitchCopy: string;
  appLink: string;
  machineLink: string;
  stitchLink: string;
  customerLink: string;
  publish: string;
}

// eslint-disable-next-line @typescript-eslint/no-explicit-any
function mapCustomerStory(row: any): CustomerStory {
  return {
    id: row.id,
    appKey: row.app_key,
    quote: row.quote,
    quoteAuthor: row.quote_author,
    p1: row.p1,
    p2: row.p2,
    p3: row.p3,
    p4: row.p4,
    p1Title: row.p1_title,
    p2Title: row.p2_title,
    p3Title: row.p3_title,
    p4Title: row.p4_title,
    appTitle: row.app_title,
    appCopy: row.app_copy,
    machineTitle: row.machine_title,
    machineCopy: row.machine_copy,
    stitchTitle: row.stitch_title,
    stitchCopy: row.stitch_copy,
    appLink: row.app_link,
    machineLink: row.machine_link,
    stitchLink: row.stitch_link,
    customerLink: row.customer_link,
    publish: row.publish,
  };
}

/**
 * Get a customer story by its app_key (e.g., "csrw")
 */
export async function getStoryByKey(
  appKey: string
): Promise<CustomerStory | null> {
  const { data, error } = await supabase
    .from("customer_stories")
    .select("*")
    .eq("app_key", appKey)
    .limit(1)
    .single();

  if (error || !data) return null;
  return mapCustomerStory(data);
}

/**
 * Get all published customer stories
 */
export async function getPublishedStories(): Promise<CustomerStory[]> {
  const { data, error } = await supabase
    .from("customer_stories")
    .select("*")
    .eq("publish", "yes");

  if (error || !data) return [];
  return data.map(mapCustomerStory);
}

/**
 * Get all customer stories (including unpublished)
 */
export async function getAllStories(): Promise<CustomerStory[]> {
  const { data, error } = await supabase.from("customer_stories").select("*");

  if (error || !data) return [];
  return data.map(mapCustomerStory);
}

/**
 * Get all app_keys for static generation
 */
export async function getAllStoryKeys(): Promise<string[]> {
  const { data, error } = await supabase
    .from("customer_stories")
    .select("app_key")
    .eq("publish", "yes");

  if (error || !data) return [];
  return data.map((r) => r.app_key);
}
