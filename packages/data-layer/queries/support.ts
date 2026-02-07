// @version support-queries v1.0
//
// Support/technical data queries (legacy support.php)
// Uses Supabase REST API

import { supabase } from "../supabase";
import { rewriteLegacyAssetHostsInHtml, toR2AssetUrl } from "../utils/assets";

export interface TechnicalRow {
  class: string;
  [key: string]: string;
}

export interface ThreadingDiagram {
  id: string;
  name: string;
  image: string;
  imgUrl: string;
}

export interface AsinRecord {
  id: string;
  asinId: string;
  otId: string;
  mmcId: string;
  msmcId: string;
  productName: string;
  description: string;
  mediaKeyword: string;
  bookPage: string;
  partsbookUrl: string;
  partsbookImg: string;
  partsbookName: string;
  imgurlLarge: string;
  imgurlMedium: string;
  imgurlTiny: string;
  mrsp: string;
  displayLength: string;
  displayWidth: string;
  displayHeight: string;
  displayWeight: string;
  displayLengthUnit: string;
  displayWidthUnit: string;
  displayHeightUnit: string;
  displayWeightUnit: string;
  amznUrl: string;
  brand: string;
}

const TECHNICAL_FIELD_LIST = [
  "setup",
  "setup_needles",
  "setup_loopers",
  "setup_threading",
  "setup_gencutting",
  "setup_knife",
  "setup_sharpening",
  "setup_feeddogs",
  "setup_presser",
  "setup_framecap",
  "maintenance",
  "trouble_needles",
  "trouble_feeding",
  "trouble_stitch",
  "trouble_oil",
  "trouble_skippedstitch",
  "trouble_thread",
  "trouble_latchhooks",
  "trouble_loosestitches",
  "trouble_skippedstitches",
  "trouble_breakingneedles",
  "trouble_needleholes",
  "maint_lubrication",
  "maint_needles",
  "maint_needleguard",
  "maint_needlebar",
  "maint_castoff",
  "maint_fixedcastoff",
  "maint_needlelever",
  "maint_hook",
  "maint_hookcarrier",
  "maint_fingerplate",
  "maint_spreader",
  "maint_tensions",
  "maint_feedALL",
  "maint_feedPLAIN",
  "maint_feedSHELL",
  "maint_threadcarrier",
  "maint_threading",
  "maint_fabricguard",
] as const;

const TECHNICAL_FIELDS = new Set<string>(TECHNICAL_FIELD_LIST);

// eslint-disable-next-line @typescript-eslint/no-explicit-any
function mapThreadingDiagram(row: any): ThreadingDiagram {
  return {
    id: String(row.id ?? ""),
    name: row.name ?? "",
    image: row.image ?? "",
    imgUrl: toR2AssetUrl(row.img_url ?? ""),
  };
}

// eslint-disable-next-line @typescript-eslint/no-explicit-any
function mapAsin(row: any): AsinRecord {
  return {
    id: row.id ?? "",
    asinId: row.asin_id ?? "",
    otId: row.ot_id ?? "",
    mmcId: row.mmc_id ?? "",
    msmcId: row.msmc_id ?? "",
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

/**
 * Fetch technical support content by class (MG, 70, CROCHET, etc.)
 */
export async function getTechnicalByClass(classKey: string): Promise<TechnicalRow | null> {
  const { data, error } = await supabase
    .from("technical")
    .select("*")
    .eq("class", classKey)
    .limit(1)
    .single();

  if (error || !data) return null;
  return data as TechnicalRow;
}

/**
 * Fetch a specific technical support field by class + field key
 */
export async function getTechnicalField(
  classKey: string,
  fieldKey: string,
): Promise<string | null> {
  if (!TECHNICAL_FIELDS.has(fieldKey)) return null;
  const row = await getTechnicalByClass(classKey);
  if (!row) return null;
  if (!Object.prototype.hasOwnProperty.call(row, fieldKey)) return null;
  const value = row[fieldKey];
  return value ? rewriteLegacyAssetHostsInHtml(value) : null;
}

/**
 * Fetch all threading diagrams
 */
export async function getThreadingDiagrams(): Promise<ThreadingDiagram[]> {
  const { data, error } = await supabase.from("threading_diagrams").select("*");

  if (error || !data) return [];
  return data.map(mapThreadingDiagram);
}

/**
 * Fetch threading diagram by image filename
 */
export async function getThreadingDiagramByImage(image: string): Promise<ThreadingDiagram | null> {
  const { data, error } = await supabase
    .from("threading_diagrams")
    .select("*")
    .eq("image", image)
    .limit(1)
    .single();

  if (error || !data) return null;
  return mapThreadingDiagram(data);
}

/**
 * Fetch part-book record by media keyword (legacy support parts books)
 */
export async function getAsinByMediaKeyword(keyword: string): Promise<AsinRecord | null> {
  const { data, error } = await supabase
    .from("asin")
    .select("id, msmc_id, product_name, media_keyword, book_page, partsbook_url, partsbook_img, partsbook_name")
    .eq("media_keyword", keyword)
    .limit(1)
    .single();

  if (error || !data) return null;
  return mapAsin(data);
}
