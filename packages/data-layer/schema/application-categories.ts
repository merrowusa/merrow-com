// @version application-categories-schema v2.0 (PostgreSQL)
//
// Drizzle schema for application_categories table (15 records)
// Migrated from MySQL to PostgreSQL for Supabase

import { pgTable, serial, integer, varchar } from "drizzle-orm/pg-core";

export const applicationCategories = pgTable("application_categories", {
  id: serial("id").primaryKey(),
  appKey: integer("app_key").notNull(),
  appCategoryName: varchar("app_category_name", { length: 200 }).notNull(),
  appCategoryShortName: varchar("app_category_short_name", { length: 50 }).notNull(),
  appCategoryUrlName: varchar("app_category_url_name", { length: 200 }).notNull(),
  appCategorySeoTitle: varchar("app_category_seo_title", { length: 300 }).notNull(),
  appCategorySeoDescription: varchar("app_category_seo_description", { length: 300 }).notNull(),
  appCategorySeoKeywords: varchar("app_category_seo_keywords", { length: 300 }).notNull(),
});

export type ApplicationCategory = typeof applicationCategories.$inferSelect;
export type NewApplicationCategory = typeof applicationCategories.$inferInsert;
