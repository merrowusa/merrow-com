// @version parts-queries v1.0
//
// Query functions for parts-related tables (asin, joinpd, pd_ref)
// Used by /parts routes

import { supabase } from "../supabase";
import type { AsinRecord } from "./support";
import { rewriteLegacyAssetHostsInHtml, toR2AssetUrl } from "../utils/assets";

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
    asinId: row.asin_id ?? "",
    otId: row.ot_id ?? "",
    mmcId: row.mmc_id ?? "",
    msmcId: row.msmc_id ?? "",
    numberOfThumbs: Number(row.number_of_thumbs ?? 0) || 0,
    productName: row.product_name ?? "",
    description: rewriteLegacyAssetHostsInHtml(row.description ?? ""),
    mediaKeyword: row.media_keyword ?? "",
    bookPage: row.book_page ?? "",
    partsbookUrl: toR2AssetUrl(row.partsbook_url ?? ""),
    partsbookImg: toR2AssetUrl(row.partsbook_img ?? ""),
    partsbookName: row.partsbook_name ?? "",
    imgurlLarge: toR2AssetUrl(row.imgurl_large ?? ""),
    imgurlMedium: toR2AssetUrl(row.imgurl_medium ?? ""),
    imgurlTiny: toR2AssetUrl(row.imgurl_tiny ?? ""),
    mrsp: row.mrsp ?? "",
    displayLength: row.display_length ?? "",
    displayWidth: row.display_width ?? "",
    displayHeight: row.display_height ?? "",
    displayWeight: row.display_weight ?? "",
    displayLengthUnit: row.display_length_unit_of_measure ?? "",
    displayWidthUnit: row.display_width_unit_of_measure ?? "",
    displayHeightUnit: row.display_height_unit_of_measure ?? "",
    displayWeightUnit: row.display_weight_unit_of_measure ?? "",
    amznUrl: row.amzn_url ?? "",
    brand: row.brand ?? "",
  };
}

// eslint-disable-next-line @typescript-eslint/no-explicit-any
function mapPartsDrawing(row: any): PartsDrawing {
  return {
    pd: row.pd ?? "",
    description: rewriteLegacyAssetHostsInHtml(row.description ?? ""),
    pdImg: toR2AssetUrl(row.pd_img ?? ""),
    pdUrlLarge: toR2AssetUrl(row.pdurl_large ?? ""),
    pdUrlMedium: toR2AssetUrl(row.pdurl_medium ?? ""),
    pdUrlTiny: toR2AssetUrl(row.pdurl_tiny ?? ""),
  };
}

const ASIN_DETAIL_FIELDS =
  "id, asin_id, ot_id, mmc_id, msmc_id, number_of_thumbs, product_name, description, media_keyword, book_page, partsbook_url, partsbook_img, partsbook_name, imgurl_large, imgurl_medium, imgurl_tiny, mrsp, display_length, display_width, display_height, display_weight, display_length_unit_of_measure, display_width_unit_of_measure, display_height_unit_of_measure, display_weight_unit_of_measure, amzn_url, brand";

const ASIN_SUMMARY_FIELDS =
  "id, asin_id, ot_id, mmc_id, msmc_id, number_of_thumbs, product_name, media_keyword, book_page, partsbook_url, partsbook_img, partsbook_name, imgurl_tiny, mrsp, amzn_url, brand";

/**
 * Get a single part/product by its ot_id (order code)
 */
export async function getAsinByOtId(otId: string): Promise<AsinRecord | null> {
  const { data, error } = await supabase
    .from("asin")
    .select(ASIN_DETAIL_FIELDS)
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
  const { data, error } = await supabase
    .from("asin")
    .select(ASIN_SUMMARY_FIELDS)
    .eq("mmc_id", mmcId);

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
    .select(ASIN_SUMMARY_FIELDS)
    .eq("media_keyword", keyword);

  if (error || !data) return [];
  return data.map(mapAsin);
}

/**
 * Get all parts that should be pre-generated for static params
 */
export async function getAllPartsForStaticGeneration(): Promise<
  Array<{ otId: string; msmcId: string }>
> {
  const { data, error } = await supabase
    .from("asin")
    .select("ot_id, msmc_id, mmc_id")
    .neq("ot_id", "")
    .neq("mmc_id", "");

  if (error || !data) return [];
  return data
    .map((row) => ({
      otId: row.ot_id ?? "",
      msmcId: row.msmc_id ?? "",
    }))
    .filter((row) => row.otId.length > 0 && row.msmcId.length > 0);
}

/**
 * Get all parts (asin records) linked to a drawing PD
 */
export async function getAsinsByPd(pd: string): Promise<AsinRecord[]> {
  const { data: joinData, error: joinError } = await supabase
    .from("joinpd")
    .select("asin_id")
    .eq("pd", pd);

  if (joinError || !joinData) return [];
  const asinIds = Array.from(
    new Set(
      joinData
        .map((row) => row.asin_id)
        .filter((asinId) => typeof asinId === "string" && asinId.length > 0),
    ),
  );
  if (asinIds.length === 0) return [];

  const { data, error } = await supabase
    .from("asin")
    .select(ASIN_SUMMARY_FIELDS)
    .in("asin_id", asinIds);

  if (error || !data) return [];
  return data.map(mapAsin);
}

/**
 * Get parts grouped by drawing PD identifiers
 */
export async function getAsinsByPdList(
  pds: string[],
): Promise<Record<string, AsinRecord[]>> {
  if (pds.length === 0) return {};
  const { data: joinData, error: joinError } = await supabase
    .from("joinpd")
    .select("pd, asin_id")
    .in("pd", pds);

  if (joinError || !joinData) return {};
  const asinIds = Array.from(
    new Set(
      joinData
        .map((row) => row.asin_id)
        .filter((asinId) => typeof asinId === "string" && asinId.length > 0),
    ),
  );
  if (asinIds.length === 0) return {};

  const { data, error } = await supabase
    .from("asin")
    .select(ASIN_SUMMARY_FIELDS)
    .in("asin_id", asinIds);

  if (error || !data) return {};

  const asinMap = new Map<string, AsinRecord>();
  data.forEach((row) => {
    const mapped = mapAsin(row);
    if (mapped.asinId) asinMap.set(mapped.asinId, mapped);
  });

  const grouped: Record<string, AsinRecord[]> = {};
  joinData.forEach((row) => {
    const pdKey = row.pd ?? "";
    const asinId = row.asin_id ?? "";
    if (!pdKey || !asinId) return;
    const asin = asinMap.get(asinId);
    if (!asin) return;
    if (!grouped[pdKey]) grouped[pdKey] = [];
    grouped[pdKey].push(asin);
  });

  return grouped;
}
