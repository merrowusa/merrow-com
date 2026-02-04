// @version machines-queries v2.0
//
// Typed query functions for machine_pages table
// Uses Supabase JS client (REST API) instead of Drizzle
// Maps snake_case DB columns to camelCase for app compatibility

import { supabase } from "../supabase";

// Use the same interface shape as the Drizzle schema for compatibility
export interface MachinePage {
  id: number;
  pkey: number;
  classKey: string;
  fashionKey: string;
  technicalKey: string;
  e2eKey: string;
  code: string;
  otId: number;
  publish: string;
  style: string;
  header: string;
  description: string;
  styleKey: string;
  pageKey: string;
  mrsp: string;
  speed: string;
  stitchRange: string;
  stitchWidth: string;
  seamType: string;
  feeds: string;
  cutter: string;
  threads: string;
  needles: string;
  numberOfThumbs: string;
  numberOfVideos: string;
  videoTagline1: string;
  videoTagline2: string;
  youtube1: string;
  youtube2: string;
  overview: string;
  how: string;
  why: string;
  whereUsed: string;
  primaryApp: string;
  secondaryApp: string;
  completeAppList: string;
  flickrSet: string;
  contactStitch: string;
  needleStandard: string;
  needleRange: string;
  needlePlate: string;
  eccentrics: string;
  upperLooper: string;
  lowerLooper: string;
  stitchType: string;
  height: string;
  width: string;
  length: string;
  weight: string;
  env: string;
  noise: string;
  heat: string;
  installation: string;
  motorSpec: string;
  fabrics: string;
  shippingSize: string;
  shippingWeight: string;
  seoTitle: string;
  seoKeywords: string;
  seoSearchDescription: string;
  seoSearchKeywords: string;
  seoSearchTitle: string;
  seoBrand: string;
  marketingUrl1: string;
  marketingUrl2: string;
  marketingUrl3: string;
  marketingUrl4: string;
  marketingUrl5: string;
  marketingIcon1: string;
  marketingIcon2: string;
  marketingIcon3: string;
  marketingIcon4: string;
  marketingIcon5: string;
  marketingTagline1: string;
  marketingTagline2: string;
  marketingTagline3: string;
  marketingTagline4: string;
  marketingTagline5: string;
  price: number;
}

// eslint-disable-next-line @typescript-eslint/no-explicit-any
function mapMachinePage(row: any): MachinePage {
  return {
    id: row.id,
    pkey: row.pkey,
    classKey: row.class_key,
    fashionKey: row.fashion_key,
    technicalKey: row.technical_key,
    e2eKey: row.e2e_key,
    code: row.code,
    otId: row.ot_id,
    publish: row.publish,
    style: row.style,
    header: row.header,
    description: row.description,
    styleKey: row.style_key,
    pageKey: row.page_key,
    mrsp: row.mrsp,
    speed: row.speed,
    stitchRange: row.stitch_range,
    stitchWidth: row.stitch_width,
    seamType: row.seam_type,
    feeds: row.feeds,
    cutter: row.cutter,
    threads: row.threads,
    needles: row.needles,
    numberOfThumbs: row.number_of_thumbs,
    numberOfVideos: row.number_of_videos,
    videoTagline1: row.video_tagline1,
    videoTagline2: row.video_tagline2,
    youtube1: row.youtube1,
    youtube2: row.youtube2,
    overview: row.overview,
    how: row.how,
    why: row.why,
    whereUsed: row.where,
    primaryApp: row.primary_app,
    secondaryApp: row.secondary_app,
    completeAppList: row.complete_app_list,
    flickrSet: row.flickr_set,
    contactStitch: row.contact_stitch,
    needleStandard: row.needle_standard,
    needleRange: row.needle_range,
    needlePlate: row.needle_plate,
    eccentrics: row.eccentrics,
    upperLooper: row.upper_looper,
    lowerLooper: row.lower_looper,
    stitchType: row.stitch_type,
    height: row.height,
    width: row.width,
    length: row.length,
    weight: row.weight,
    env: row.env,
    noise: row.noise,
    heat: row.heat,
    installation: row.installation,
    motorSpec: row.motor_spec,
    fabrics: row.fabrics,
    shippingSize: row.shipping_size,
    shippingWeight: row.shipping_weight,
    seoTitle: row.seo_title,
    seoKeywords: row.seo_keywords,
    seoSearchDescription: row.seo_search_description,
    seoSearchKeywords: row.seo_search_keywords,
    seoSearchTitle: row.seo_search_title,
    seoBrand: row.seo_brand,
    marketingUrl1: row.marketing_url1,
    marketingUrl2: row.marketing_url2,
    marketingUrl3: row.marketing_url3,
    marketingUrl4: row.marketing_url4,
    marketingUrl5: row.marketing_url5,
    marketingIcon1: row.marketing_icon1,
    marketingIcon2: row.marketing_icon2,
    marketingIcon3: row.marketing_icon3,
    marketingIcon4: row.marketing_icon4,
    marketingIcon5: row.marketing_icon5,
    marketingTagline1: row.marketing_tagline1,
    marketingTagline2: row.marketing_tagline2,
    marketingTagline3: row.marketing_tagline3,
    marketingTagline4: row.marketing_tagline4,
    marketingTagline5: row.marketing_tagline5,
    price: row.price,
  };
}

/**
 * Get a machine page by its style_key (e.g., "mb4dfo", "70d3b2")
 */
export async function getMachinePageByStyleKey(
  styleKey: string
): Promise<MachinePage | null> {
  const { data, error } = await supabase
    .from("machine_pages")
    .select("*")
    .eq("style_key", styleKey)
    .limit(1)
    .single();

  if (error || !data) return null;
  return mapMachinePage(data);
}

/**
 * Get all published machine pages
 */
export async function getAllPublishedMachines(): Promise<MachinePage[]> {
  const { data, error } = await supabase
    .from("machine_pages")
    .select("*")
    .eq("publish", "yes");

  if (error || !data) return [];
  return data.map(mapMachinePage);
}

/**
 * Get all machine pages (including unpublished)
 */
export async function getAllMachines(): Promise<MachinePage[]> {
  const { data, error } = await supabase.from("machine_pages").select("*");

  if (error || !data) return [];
  return data.map(mapMachinePage);
}

/**
 * Get all style_keys for static generation
 */
export async function getAllMachineStyleKeys(): Promise<string[]> {
  const { data, error } = await supabase
    .from("machine_pages")
    .select("style_key")
    .eq("publish", "yes");

  if (error || !data) return [];
  return data.map((r) => r.style_key);
}

/**
 * Get machines by category (fashion, technical, or e2e)
 */
export async function getMachinesByCategory(
  category: "fashion" | "technical" | "e2e"
): Promise<MachinePage[]> {
  const keyColumn =
    category === "fashion"
      ? "fashion_key"
      : category === "technical"
        ? "technical_key"
        : "e2e_key";

  const { data, error } = await supabase
    .from("machine_pages")
    .select("*")
    .neq(keyColumn, "")
    .eq("publish", "yes");

  if (error || !data) return [];
  return data.map(mapMachinePage);
}

/**
 * Get machines by class_key (e.g., "MG" for Sergers_and_Overlock_Sewing_Machines)
 */
export async function getMachinesByClassKey(
  classKey: string
): Promise<MachinePage[]> {
  const { data, error } = await supabase
    .from("machine_pages")
    .select("*")
    .eq("class_key", classKey)
    .eq("publish", "yes");

  if (error || !data) return [];
  return data.map(mapMachinePage);
}
