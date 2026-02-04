// @version application-pages-schema v2.0 (PostgreSQL)
//
// Drizzle schema for application_pages table (76 records)
// Migrated from MySQL to PostgreSQL for Supabase

import { pgTable, serial, integer, varchar, text } from "drizzle-orm/pg-core";

export const applicationPages = pgTable("application_pages", {
  id: serial("id").primaryKey(),
  appKey: integer("app_key").notNull(),
  dKey: varchar("d_key", { length: 50 }).notNull(),
  styleKey: varchar("style_key", { length: 30 }).notNull(),
  pageKey: varchar("page_key", { length: 20 }).notNull(),
  appTitle: varchar("app_title", { length: 100 }).notNull(),
  appMenuTitle: varchar("app_menu_title", { length: 100 }).notNull(),
  layoutOrder: integer("layout_order").notNull(),
  seoTitle: varchar("seo_title", { length: 200 }).notNull(),
  seoDescription: text("seo_description").notNull(),
  seoKeywords: text("seo_keywords").notNull(),
  popupTitle: varchar("popup_title", { length: 50 }).notNull(),
  popupSubtitle: varchar("popup_subtitle", { length: 200 }).notNull(),
  popup1stColumn: text("popup_1stcolumn").notNull(),
  popup2ndColumn: text("popup_2ndcolumn").notNull(),
  machineUrl: varchar("machine_url", { length: 200 }).notNull(),
  appNavTitle: varchar("app_nav_title", { length: 150 }).notNull(),
  appRightTitle: varchar("app_right_title", { length: 300 }).notNull(),
  appRightP: varchar("app_right_p", { length: 300 }).notNull(),
  stitchWidth: varchar("stitch_width", { length: 25 }).notNull(),
  machineSpeed: varchar("machine_speed", { length: 10 }).notNull(),
  fabricMaterial: varchar("fabric_material", { length: 100 }).notNull(),
  threadNumber: integer("thread_number").notNull(),
  threadMaterial: varchar("thread_material", { length: 100 }).notNull(),
  machineModel: varchar("machine_model", { length: 20 }).notNull(),
  machinePrice: varchar("machine_price", { length: 20 }).notNull(),
  publish: varchar("publish", { length: 3 }).notNull().default("no"),
});

export type ApplicationPage = typeof applicationPages.$inferSelect;
export type NewApplicationPage = typeof applicationPages.$inferInsert;
