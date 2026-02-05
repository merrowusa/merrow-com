// @version parts-queries v1.0
//
// Query functions for parts-related tables (asin, joinpd, pd_ref)
// Used by /parts routes

import { supabase } from "../supabase";
import type { AsinRecord } from "./support";

export type { AsinRecord } from "./support";

export interface PartsDrawing {
  pd: string;
  description: string;
  pdImg: string;
  pdUrlLarge: string;
  pdUrlMedium: string;
  pdUrlTiny: string;
}

// eslint-disable-next-line @typescript-eslint/no-explicit-any
function mapAsin(row: any): AsinRecord {
  return {
    id: row.id ?? "",
    msmcId: row.msmc_id ?? "",
    productName: row.product_name ?? "",
    mediaKeyword: row.media_keyword ?? "",
    bookPage: row.book_page ?? "",
    partsbookUrl: row.partsbook_url ?? "",
    partsbookImg: row.partsbook_img ?? "",
    partsbookName: row.partsbook_name ?? "",
  };
}

// eslint-disable-next-line @typescript-eslint/no-explicit-any
function mapPartsDrawing(row: any): PartsDrawing {
  return {
    pd: row.pd ?? "",
    description: row.description ?? "",
    pdImg: row.pd_img ?? "",
    pdUrlLarge: row.pdurl_large ?? "",
    pdUrlMedium: row.pdurl_medium ?? "",
    pdUrlTiny: row.pdurl_tiny ?? "",
  };
}

const ASIN_FIELDS =
  "id, msmc_id, product_name, media_keyword, book_page, partsbook_url, partsbook_img, partsbook_name";

/**
 * Get a single part/product by its ot_id (order code)
 */
export async function getAsinByOtId(otId: string): Promise<AsinRecord | null> {
  const { data, error } = await supabase
    .from("asin")
    .select(ASIN_FIELDS)
    .eq("ot_id", otId)
    .limit(1)
    .single();

  if (error || !data) return null;
  return mapAsin(data);
}

/**
 * Get all parts for a machine by mmc_id
 */
export async function getAsinsByMmcId(mmcId: string): Promise<AsinRecord[]> {
  const { data, error } = await supabase.from("asin").select(ASIN_FIELDS).eq("mmc_id", mmcId);

  if (error || !data) return [];
  return data.map(mapAsin);
}

/**
 * Get parts drawings (pd_ref records) for a part via joinpd
 */
export async function getPartsDrawings(asinId: string): Promise<PartsDrawing[]> {
  const { data: joinData, error: joinError } = await supabase
    .from("joinpd")
    .select("pd")
    .eq("asin_id", asinId);

  if (joinError || !joinData) return [];
  const pds = Array.from(
    new Set(joinData.map((row) => row.pd).filter((pd) => typeof pd === "string" && pd.length > 0)),
  );
  if (pds.length === 0) return [];

  const { data, error } = await supabase
    .from("pd_ref")
    .select("pd, description, pd_img, pdurl_large, pdurl_medium, pdurl_tiny")
    .in("pd", pds);

  if (error || !data) return [];
  return data.map(mapPartsDrawing);
}

/**
 * Get a single parts drawing by pd identifier
 */
export async function getPartsDrawingByPd(pd: string): Promise<PartsDrawing | null> {
  const { data, error } = await supabase
    .from("pd_ref")
    .select("pd, description, pd_img, pdurl_large, pdurl_medium, pdurl_tiny")
    .eq("pd", pd)
    .limit(1)
    .single();

  if (error || !data) return null;
  return mapPartsDrawing(data);
}

/**
 * Get all parts for a machine's stitch display
 */
export async function getAsinsByMediaKeyword(keyword: string): Promise<AsinRecord[]> {
  const { data, error } = await supabase
    .from("asin")
    .select(ASIN_FIELDS)
    .eq("media_keyword", keyword);

  if (error || !data) return [];
  return data.map(mapAsin);
}
