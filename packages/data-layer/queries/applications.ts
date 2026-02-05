// @version applications-queries v2.0
//
// Typed query functions for application_pages and application_categories tables
// Uses Supabase JS client (REST API) instead of Drizzle
// Maps snake_case DB columns to camelCase for app compatibility

import { supabase } from "../supabase";

export interface ApplicationPage {
  id: number;
  appKey: number;
  dKey: string;
  styleKey: string;
  pageKey: string;
  appTitle: string;
  appMenuTitle: string;
  layoutOrder: number;
  seoTitle: string;
  seoDescription: string;
  seoKeywords: string;
  popupTitle: string;
  popupSubtitle: string;
  popup1stColumn: string;
  popup2ndColumn: string;
  machineUrl: string;
  appNavTitle: string;
  appRightTitle: string;
  appRightP: string;
  stitchWidth: string;
  machineSpeed: string;
  fabricMaterial: string;
  threadNumber: number;
  threadMaterial: string;
  machineModel: string;
  machinePrice: string;
  publish: string;
}

export interface ApplicationCategory {
  id: number;
  appKey: number;
  appCategoryName: string;
  appCategoryShortName: string;
  appCategoryUrlName: string;
  appCategorySeoTitle: string;
  appCategorySeoDescription: string;
  appCategorySeoKeywords: string;
}

// eslint-disable-next-line @typescript-eslint/no-explicit-any
function mapApplicationPage(row: any): ApplicationPage {
  return {
    id: row.id,
    appKey: row.app_key,
    dKey: row.d_key,
    styleKey: row.style_key,
    pageKey: row.page_key,
    appTitle: row.app_title,
    appMenuTitle: row.app_menu_title,
    layoutOrder: row.layout_order,
    seoTitle: row.seo_title,
    seoDescription: row.seo_description,
    seoKeywords: row.seo_keywords,
    popupTitle: row.popup_title,
    popupSubtitle: row.popup_subtitle,
    popup1stColumn: row.popup_1stcolumn,
    popup2ndColumn: row.popup_2ndcolumn,
    machineUrl: row.machine_url,
    appNavTitle: row.app_nav_title,
    appRightTitle: row.app_right_title,
    appRightP: row.app_right_p,
    stitchWidth: row.stitch_width,
    machineSpeed: row.machine_speed,
    fabricMaterial: row.fabric_material,
    threadNumber: row.thread_number,
    threadMaterial: row.thread_material,
    machineModel: row.machine_model,
    machinePrice: row.machine_price,
    publish: row.publish,
  };
}

// eslint-disable-next-line @typescript-eslint/no-explicit-any
function mapApplicationCategory(row: any): ApplicationCategory {
  return {
    id: row.id,
    appKey: row.app_key,
    appCategoryName: row.app_category_name,
    appCategoryShortName: row.app_category_short_name,
    appCategoryUrlName: row.app_category_url_name,
    appCategorySeoTitle: row.app_category_seo_title,
    appCategorySeoDescription: row.app_category_seo_description,
    appCategorySeoKeywords: row.app_category_seo_keywords,
  };
}

/**
 * Get an application page by its d_key (discrete key, e.g., "narrowemblemedge")
 */
export async function getApplicationByKey(
  dKey: string
): Promise<ApplicationPage | null> {
  const { data, error } = await supabase
    .from("application_pages")
    .select("*")
    .eq("d_key", dKey)
    .limit(1)
    .single();

  if (error || !data) return null;
  return mapApplicationPage(data);
}

/**
 * Get all published application pages
 */
export async function getAllPublishedApplications(): Promise<ApplicationPage[]> {
  const { data, error } = await supabase
    .from("application_pages")
    .select("*")
    .eq("publish", "yes")
    .order("layout_order", { ascending: true });

  if (error || !data) return [];
  return data.map(mapApplicationPage);
}

/**
 * Get applications by category (app_key)
 */
export async function getApplicationsByCategory(
  appKey: number
): Promise<ApplicationPage[]> {
  const { data, error } = await supabase
    .from("application_pages")
    .select("*")
    .eq("app_key", appKey)
    .order("layout_order", { ascending: true });

  if (error || !data) return [];
  return data.map(mapApplicationPage);
}

/**
 * Get published applications linked to a machine style_key
 */
export async function getApplicationsForMachine(
  styleKey: string
): Promise<ApplicationPage[]> {
  const { data, error } = await supabase
    .from("application_pages")
    .select("*")
    .eq("style_key", styleKey)
    .eq("publish", "yes")
    .order("layout_order", { ascending: true });

  if (error || !data) return [];
  return data.map(mapApplicationPage);
}

/**
 * Get all d_keys for static generation
 */
export async function getAllApplicationKeys(): Promise<string[]> {
  const { data, error } = await supabase
    .from("application_pages")
    .select("d_key")
    .eq("publish", "yes");

  if (error || !data) return [];
  return data.map((r) => r.d_key);
}

/**
 * Get all application categories
 */
export async function getAllApplicationCategories(): Promise<ApplicationCategory[]> {
  const { data, error } = await supabase
    .from("application_categories")
    .select("*");

  if (error || !data) return [];
  return data.map(mapApplicationCategory);
}

/**
 * Get application category by app_key
 */
export async function getApplicationCategoryByKey(
  appKey: number
): Promise<ApplicationCategory | null> {
  const { data, error } = await supabase
    .from("application_categories")
    .select("*")
    .eq("app_key", appKey)
    .limit(1)
    .single();

  if (error || !data) return null;
  return mapApplicationCategory(data);
}

/**
 * Category with sub-items for display
 */
export interface ApplicationCategoryWithItems {
  appKey: number;
  name: string;
  shortName: string;
  items: Array<{
    dKey: string;
    menuTitle: string;
    layoutOrder: number;
  }>;
}

/**
 * Get multiple categories with their published sub-items
 * Used for category landing pages (fashion, technical, e2e)
 */
export async function getCategoriesWithItems(
  appKeys: number[]
): Promise<ApplicationCategoryWithItems[]> {
  // Get categories
  const { data: categories, error: catError } = await supabase
    .from("application_categories")
    .select("*")
    .in("app_key", appKeys);

  if (catError || !categories) return [];

  // Get published sub-items for all categories
  const { data: items, error: itemsError } = await supabase
    .from("application_pages")
    .select("app_key, d_key, app_menu_title, layout_order")
    .in("app_key", appKeys)
    .eq("publish", "yes")
    .order("layout_order", { ascending: true });

  if (itemsError || !items) {
    // Return categories without items
    return categories.map((cat) => ({
      appKey: cat.app_key,
      name: cat.app_category_name,
      shortName: cat.app_category_short_name,
      items: [],
    }));
  }

  // Group items by category
  const result: ApplicationCategoryWithItems[] = categories.map((cat) => ({
    appKey: cat.app_key,
    name: cat.app_category_name,
    shortName: cat.app_category_short_name,
    items: items
      .filter((item) => item.app_key === cat.app_key)
      .map((item) => ({
        dKey: item.d_key,
        menuTitle: item.app_menu_title,
        layoutOrder: item.layout_order,
      })),
  }));

  // Sort by original appKeys order
  return result.sort(
    (a, b) => appKeys.indexOf(a.appKey) - appKeys.indexOf(b.appKey)
  );
}
