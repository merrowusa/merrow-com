// @version healthcheck-route v3.0 (Supabase REST)
// Simple health check endpoint using Supabase REST API

import { createClient } from "@supabase/supabase-js";

export const dynamic = "force-dynamic";

export async function GET() {
  try {
    const supabaseUrl = process.env.MERROW_SUPABASE_URL || "";
    const supabaseKey = process.env.MERROW_SUPABASE_SERVICE_ROLE_KEY ||
                        process.env.MERROW_SUPABASE_ANON_KEY || "";

    if (!supabaseUrl || !supabaseKey) {
      return Response.json({ status: "ok", db: "no credentials" });
    }

    const supabase = createClient(supabaseUrl, supabaseKey);
    const { data, error } = await supabase.from("machine_pages").select("id").limit(1);

    if (error) throw error;
    return Response.json({ status: "ok", db: "connected" });
  } catch (error) {
    return Response.json(
      { status: "error", message: String(error) },
      { status: 500 }
    );
  }
}
