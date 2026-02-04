// @version sitemap v1.0
//
// Dynamic sitemap generation for SEO

import { MetadataRoute } from "next";
import { getAllMachineStyleKeys } from "../../../packages/data-layer/queries/machines";
import { getAllApplicationKeys } from "../../../packages/data-layer/queries/applications";
import { getAllStoryKeys } from "../../../packages/data-layer/queries/customer-stories";

const BASE_URL = "https://www.merrow.com";

export default async function sitemap(): Promise<MetadataRoute.Sitemap> {
  // Static pages
  const staticPages: MetadataRoute.Sitemap = [
    {
      url: BASE_URL,
      lastModified: new Date(),
      changeFrequency: "weekly",
      priority: 1,
    },
    {
      url: `${BASE_URL}/fashion-sewing`,
      lastModified: new Date(),
      changeFrequency: "weekly",
      priority: 0.9,
    },
    {
      url: `${BASE_URL}/technical-sewing`,
      lastModified: new Date(),
      changeFrequency: "weekly",
      priority: 0.9,
    },
    {
      url: `${BASE_URL}/end-to-end-seaming`,
      lastModified: new Date(),
      changeFrequency: "weekly",
      priority: 0.9,
    },
    {
      url: `${BASE_URL}/sewing/applications`,
      lastModified: new Date(),
      changeFrequency: "weekly",
      priority: 0.8,
    },
    {
      url: `${BASE_URL}/customer-stories`,
      lastModified: new Date(),
      changeFrequency: "monthly",
      priority: 0.7,
    },
    {
      url: `${BASE_URL}/agentmap.html`,
      lastModified: new Date(),
      changeFrequency: "monthly",
      priority: 0.8,
    },
    {
      url: `${BASE_URL}/support`,
      lastModified: new Date(),
      changeFrequency: "monthly",
      priority: 0.7,
    },
    {
      url: `${BASE_URL}/about.html`,
      lastModified: new Date(),
      changeFrequency: "yearly",
      priority: 0.6,
    },
    {
      url: `${BASE_URL}/overlock-history`,
      lastModified: new Date(),
      changeFrequency: "yearly",
      priority: 0.6,
    },
  ];

  // Machine pages (62 machines)
  let machinePages: MetadataRoute.Sitemap = [];
  try {
    const machineKeys = await getAllMachineStyleKeys();
    machinePages = machineKeys.map((key) => ({
      url: `${BASE_URL}/Sergers_and_Overlock_Sewing_Machines/${key}`,
      lastModified: new Date(),
      changeFrequency: "monthly" as const,
      priority: 0.8,
    }));
  } catch (e) {
    console.error("Failed to fetch machine keys for sitemap:", e);
  }

  // Application pages (76 applications)
  let applicationPages: MetadataRoute.Sitemap = [];
  try {
    const appKeys = await getAllApplicationKeys();
    applicationPages = appKeys.map((key) => ({
      url: `${BASE_URL}/sewing/applications/${key}`,
      lastModified: new Date(),
      changeFrequency: "monthly" as const,
      priority: 0.7,
    }));
  } catch (e) {
    console.error("Failed to fetch application keys for sitemap:", e);
  }

  // Customer story pages (5 stories)
  let storyPages: MetadataRoute.Sitemap = [];
  try {
    const storyKeys = await getAllStoryKeys();
    storyPages = storyKeys.map((key) => ({
      url: `${BASE_URL}/customer-stories/featured/${key}`,
      lastModified: new Date(),
      changeFrequency: "monthly" as const,
      priority: 0.6,
    }));
  } catch (e) {
    console.error("Failed to fetch story keys for sitemap:", e);
  }

  return [...staticPages, ...machinePages, ...applicationPages, ...storyPages];
}
