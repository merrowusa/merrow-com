// @version data-layer-supabase v2.0
//
// Supabase client for Merrow databases (REST API)
// Uses lazy initialization pattern from Superior Dashboard

import { createClient, SupabaseClient } from "@supabase/supabase-js";

let supabaseInstance: SupabaseClient | null = null;

/**
 * Get Supabase client (lazy initialization)
 * Throws if credentials are missing - fail fast, don't silently break
 */
export function getSupabase(): SupabaseClient {
  if (supabaseInstance) return supabaseInstance;

  const supabaseUrl = process.env.MERROW_SUPABASE_URL;
  const supabaseKey =
    process.env.MERROW_SUPABASE_SERVICE_ROLE_KEY ||
    process.env.MERROW_SUPABASE_ANON_KEY;

  if (!supabaseUrl || !supabaseKey) {
    throw new Error(
      "Missing MERROW_SUPABASE_URL or MERROW_SUPABASE_SERVICE_ROLE_KEY"
    );
  }

  supabaseInstance = createClient(supabaseUrl, supabaseKey, {
    auth: {
      autoRefreshToken: false,
      persistSession: false,
    },
  });

  return supabaseInstance;
}

// Legacy export for backwards compatibility - uses lazy getter
export const supabase = new Proxy({} as SupabaseClient, {
  get(_, prop) {
    return (getSupabase() as unknown as Record<string, unknown>)[prop as string];
  },
});
