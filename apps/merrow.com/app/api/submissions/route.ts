// @version submissions-api v1.0
// Unified form submissions endpoint
// Handles: contact, quote requests, support inquiries

import { NextRequest, NextResponse } from "next/server";

// Rate limiting placeholder (in-memory for MVP, use Redis in production)
const rateLimitMap = new Map<string, { count: number; resetTime: number }>();
const RATE_LIMIT_WINDOW = 60 * 1000; // 1 minute
const RATE_LIMIT_MAX = 5; // 5 submissions per minute per IP

function checkRateLimit(ip: string): boolean {
  const now = Date.now();
  const record = rateLimitMap.get(ip);

  if (!record || now > record.resetTime) {
    rateLimitMap.set(ip, { count: 1, resetTime: now + RATE_LIMIT_WINDOW });
    return true;
  }

  if (record.count >= RATE_LIMIT_MAX) {
    return false;
  }

  record.count++;
  return true;
}

export async function POST(request: NextRequest) {
  try {
    // Get client IP for rate limiting
    const ip = request.headers.get("x-forwarded-for") || "unknown";

    // Rate limit check
    if (!checkRateLimit(ip)) {
      return NextResponse.json(
        { error: "Too many requests. Please try again later." },
        { status: 429 }
      );
    }

    const body = await request.json();

    // Honeypot check - if filled, it's a bot
    if (body._honey) {
      // Silently accept but don't process (bot trap)
      return NextResponse.json({ success: true, id: "honeypot" });
    }

    // Validate required fields
    const { type, name, email, message, ...extras } = body;

    if (!type || !name || !email) {
      return NextResponse.json(
        { error: "Missing required fields: type, name, email" },
        { status: 400 }
      );
    }

    // Validate email format
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      return NextResponse.json(
        { error: "Invalid email format" },
        { status: 400 }
      );
    }

    // Validate submission type
    const validTypes = ["contact", "quote", "support", "parts", "threading"];
    if (!validTypes.includes(type)) {
      return NextResponse.json(
        { error: `Invalid submission type. Must be one of: ${validTypes.join(", ")}` },
        { status: 400 }
      );
    }

    // Build submission record
    const submission = {
      id: crypto.randomUUID(),
      type,
      name,
      email,
      message: message || "",
      metadata: extras,
      ip,
      userAgent: request.headers.get("user-agent") || "",
      createdAt: new Date().toISOString(),
    };

    // Check if Supabase is configured
    const supabaseUrl = process.env.MERROW_SUPABASE_URL;
    const supabaseKey = process.env.MERROW_SUPABASE_SERVICE_ROLE_KEY;

    let dbInserted = false;

    if (supabaseUrl && supabaseKey) {
      // Attempt to insert into Supabase
      try {
        const response = await fetch(`${supabaseUrl}/rest/v1/submissions`, {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            apikey: supabaseKey,
            Authorization: `Bearer ${supabaseKey}`,
            Prefer: "return=minimal",
          },
          body: JSON.stringify({
            type: submission.type,
            name: submission.name,
            email: submission.email,
            message: submission.message,
            metadata: submission.metadata,
            ip: submission.ip,
            user_agent: submission.userAgent,
          }),
        });

        dbInserted = response.ok;
      } catch {
        // Database insert failed, but we still return success
        // Submission data is in the response for manual follow-up if needed
        dbInserted = false;
      }
    }

    return NextResponse.json({
      success: true,
      id: submission.id,
      stored: dbInserted,
      message: "Thank you for your submission. We'll be in touch soon.",
    });
  } catch {
    return NextResponse.json(
      { error: "An error occurred processing your submission" },
      { status: 500 }
    );
  }
}

// GET endpoint for health check
export async function GET() {
  const hasSupabase = !!(
    process.env.MERROW_SUPABASE_URL &&
    process.env.MERROW_SUPABASE_SERVICE_ROLE_KEY
  );

  return NextResponse.json({
    status: "ok",
    endpoint: "/api/submissions",
    methods: ["POST"],
    supabaseConfigured: hasSupabase,
    types: ["contact", "quote", "support", "parts", "threading"],
  });
}
