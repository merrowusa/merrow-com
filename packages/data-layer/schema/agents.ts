// @version agents-schema v2.0 (PostgreSQL)
//
// Drizzle schema for agents table (159 records)
// Migrated from MySQL to PostgreSQL for Supabase

import { pgTable, serial, integer, char, varchar, text } from "drizzle-orm/pg-core";

export const agents = pgTable("agents", {
  id: serial("id").primaryKey(),
  store: char("store", { length: 3 }).notNull().default(""),
  storeDbName: varchar("store_db_name", { length: 30 }).notNull(),
  showMap: varchar("show_map", { length: 5 }).notNull().default(""),
  partyId: varchar("party_id", { length: 200 }).notNull().default(""),
  accountName: varchar("account_name", { length: 200 }).notNull().default(""),
  name: varchar("name", { length: 200 }).notNull().default(""),
  address: varchar("address", { length: 200 }).notNull().default(""),
  city: varchar("city", { length: 200 }).notNull().default(""),
  state: varchar("state", { length: 200 }).notNull().default(""),
  zip: varchar("zip", { length: 200 }).notNull().default(""),
  country: varchar("country", { length: 200 }).notNull().default(""),
  email: varchar("email", { length: 200 }).notNull().default(""),
  phone: varchar("phone", { length: 40 }).notNull().default(""),
  fax: varchar("fax", { length: 40 }).notNull().default(""),
  latitude: varchar("latitude", { length: 30 }).notNull().default(""),
  longitude: varchar("longitude", { length: 30 }).notNull().default(""),
  fullAddress: varchar("full_address", { length: 200 }).notNull().default(""),
  contentKey1: varchar("content_key1", { length: 200 }).notNull().default(""),
  contentKey2: varchar("content_key2", { length: 200 }).notNull().default(""),
  color: varchar("color", { length: 200 }).notNull().default(""),
  icon: varchar("icon", { length: 200 }).notNull().default(""),
  shortNotes: text("short_notes").notNull(),
  years: char("years", { length: 3 }).notNull().default(""),
});

export type Agent = typeof agents.$inferSelect;
export type NewAgent = typeof agents.$inferInsert;
