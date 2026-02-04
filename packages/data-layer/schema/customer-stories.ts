// @version customer-stories-schema v2.0 (PostgreSQL)
//
// Drizzle schema for customer_stories table (5 records)
// Migrated from MySQL to PostgreSQL for Supabase

import { pgTable, serial, varchar, text } from "drizzle-orm/pg-core";

export const customerStories = pgTable("customer_stories", {
  id: serial("id").primaryKey(),
  appKey: varchar("app_key", { length: 30 }).notNull(),
  quote: text("quote").notNull(),
  quoteAuthor: varchar("quote_author", { length: 40 }).notNull(),
  p1: text("p1").notNull(),
  p2: text("p2").notNull(),
  p3: text("p3").notNull(),
  p4: text("p4").notNull(),
  p1Title: varchar("p1_title", { length: 100 }).notNull(),
  p2Title: varchar("p2_title", { length: 100 }).notNull(),
  p3Title: varchar("p3_title", { length: 100 }).notNull(),
  p4Title: varchar("p4_title", { length: 100 }).notNull(),
  appTitle: varchar("app_title", { length: 50 }).notNull(),
  appCopy: varchar("app_copy", { length: 200 }).notNull(),
  machineTitle: varchar("machine_title", { length: 50 }).notNull(),
  machineCopy: varchar("machine_copy", { length: 200 }).notNull(),
  stitchTitle: varchar("stitch_title", { length: 50 }).notNull(),
  stitchCopy: varchar("stitch_copy", { length: 100 }).notNull(),
  appLink: varchar("app_link", { length: 200 }).notNull(),
  machineLink: varchar("machine_link", { length: 200 }).notNull(),
  stitchLink: varchar("stitch_link", { length: 200 }).notNull(),
  customerLink: varchar("customer_link", { length: 300 }).notNull(),
  publish: varchar("publish", { length: 3 }).notNull(),
});

export type CustomerStory = typeof customerStories.$inferSelect;
export type NewCustomerStory = typeof customerStories.$inferInsert;
