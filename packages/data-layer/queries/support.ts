// @version support-queries v1.0
//
// Support/technical data queries (legacy support.php)
// Uses Supabase REST API

import { supabase } from "../supabase";

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
  msmcId: string;
  productName: string;
  mediaKeyword: string;
  bookPage: string;
  partsbookUrl: string;
  partsbookImg: string;
  partsbookName: string;
}

// eslint-disable-next-line @typescript-eslint/no-explicit-any
function mapThreadingDiagram(row: any): ThreadingDiagram {
  return {
    id: String(row.id ?? ""),
    name: row.name ?? "",
    image: row.image ?? "",
    imgUrl: row.img_url ?? "",
  };
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
