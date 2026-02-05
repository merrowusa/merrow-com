import {
  getAllMachines,
  getAllMachineStyleKeys,
  getAllPublishedMachines,
  getMachinePageByStyleKey,
  getMachinesByCategory,
  getMachinesByClassKey,
  getAllApplicationCategories,
  getApplicationByKey,
  getAllPublishedApplications,
  getApplicationsByCategory,
  getAllApplicationKeys,
  getApplicationCategoryByKey,
  getCategoriesWithItems,
  getAllAgents,
  getAgentsForMap,
  getAgentsByCountry,
  searchAgentsByName,
  getAgentById,
  getAllAgentCountries,
  getStoryByKey,
  getPublishedStories,
  getAllStories,
  getAllStoryKeys,
  getTechnicalByClass,
  getThreadingDiagrams,
  getThreadingDiagramByImage,
  getAsinByMediaKeyword,
  getNavData,
  getHeaderNavData,
} from "../../packages/data-layer/queries";
import { getSupabase } from "../../packages/data-layer/supabase";

const supabase = getSupabase();

type TableCheck = {
  table: string;
  exists: boolean;
  count: number | null;
  sample: unknown;
  error?: string;
};

type FunctionCheck = {
  name: string;
  input: unknown;
  ok: boolean;
  result?: unknown;
  error?: string;
};

function summarize(result: unknown): unknown {
  if (Array.isArray(result)) {
    return { type: "array", length: result.length, sample: result[0] ?? null };
  }
  if (result && typeof result === "object") {
    const keys = Object.keys(result as Record<string, unknown>);
    return { type: "object", keys, sample: result };
  }
  return result ?? null;
}

async function checkTable(table: string): Promise<TableCheck> {
  try {
    const { data, error, count } = await supabase
      .from(table)
      .select("*", { count: "exact" })
      .limit(1);

    if (error) {
      return {
        table,
        exists: false,
        count: null,
        sample: null,
        error: error.message,
      };
    }

    return {
      table,
      exists: true,
      count: typeof count === "number" ? count : null,
      sample: data?.[0] ?? null,
    };
  } catch (err) {
    return {
      table,
      exists: false,
      count: null,
      sample: null,
      error: err instanceof Error ? err.message : String(err),
    };
  }
}

async function safeCall(
  name: string,
  input: unknown,
  fn: () => Promise<unknown>
): Promise<FunctionCheck> {
  try {
    const result = await fn();
    return { name, input, ok: true, result: summarize(result) };
  } catch (err) {
    return {
      name,
      input,
      ok: false,
      error: err instanceof Error ? err.message : String(err),
    };
  }
}

async function main() {
  const tablesToCheck = [
    "machine_pages",
    "application_pages",
    "application_categories",
    "agents",
    "customer_stories",
    "technical",
    "threading_diagrams",
    "asin",
    "joinpd",
    "pd_ref",
    "machine_categories",
    "seo_site_headers",
    "samples",
    "avail_models",
    "markers",
    "jobs",
    "language",
    "customer_forms",
    "login_auth",
    "login_auth_agent",
    "login_auth_global",
    "agent_word",
    "agent_revenue",
    "textile_plants",
    "amazon_inventory_dupes",
  ];

  const tableChecks: Record<string, TableCheck> = {};
  for (const table of tablesToCheck) {
    tableChecks[table] = await checkTable(table);
  }

  const machineSample = tableChecks.machine_pages?.sample as
    | { style_key?: string; class_key?: string }
    | undefined;
  const appSample = tableChecks.application_pages?.sample as
    | { d_key?: string; app_key?: string | number }
    | undefined;
  const appCatSample = tableChecks.application_categories?.sample as
    | { app_key?: string | number }
    | undefined;
  const agentSample = tableChecks.agents?.sample as
    | { id?: number; country?: string; name?: string }
    | undefined;
  const storySample = tableChecks.customer_stories?.sample as
    | { app_key?: string }
    | undefined;
  const technicalSample = tableChecks.technical?.sample as
    | { class?: string }
    | undefined;
  const threadingSample = tableChecks.threading_diagrams?.sample as
    | { image?: string }
    | undefined;
  const asinSample = tableChecks.asin?.sample as
    | { media_keyword?: string }
    | undefined;

  const styleKey = machineSample?.style_key ?? "70d3b2";
  const classKey = machineSample?.class_key ?? "70";
  const dKey = appSample?.d_key ?? "wideemblemedge";
  const appKey = Number(appSample?.app_key ?? appCatSample?.app_key ?? 5512);
  const appKey2 = 5513;
  const agentCountry = agentSample?.country ?? "the United States";
  const agentName = agentSample?.name ?? "Merrow";
  const agentId = agentSample?.id ?? 1;
  const storyKey = storySample?.app_key ?? "csrw";
  const technicalClass = technicalSample?.class ?? "MG";
  const threadingImage = threadingSample?.image ?? "twothread.gif";
  const asinKeyword = asinSample?.media_keyword ?? "partsbook";

  const functionChecks: FunctionCheck[] = [];

  functionChecks.push(
    await safeCall("getMachinePageByStyleKey", { styleKey }, () =>
      getMachinePageByStyleKey(styleKey)
    )
  );
  functionChecks.push(
    await safeCall("getAllPublishedMachines", null, () =>
      getAllPublishedMachines()
    )
  );
  functionChecks.push(
    await safeCall("getAllMachines", null, () => getAllMachines())
  );
  functionChecks.push(
    await safeCall("getAllMachineStyleKeys", null, () =>
      getAllMachineStyleKeys()
    )
  );
  functionChecks.push(
    await safeCall("getMachinesByCategory", { category: "fashion" }, () =>
      getMachinesByCategory("fashion")
    )
  );
  functionChecks.push(
    await safeCall("getMachinesByClassKey", { classKey }, () =>
      getMachinesByClassKey(classKey)
    )
  );

  functionChecks.push(
    await safeCall("getApplicationByKey", { dKey }, () =>
      getApplicationByKey(dKey)
    )
  );
  functionChecks.push(
    await safeCall("getAllPublishedApplications", null, () =>
      getAllPublishedApplications()
    )
  );
  functionChecks.push(
    await safeCall("getApplicationsByCategory", { appKey }, () =>
      getApplicationsByCategory(appKey)
    )
  );
  functionChecks.push(
    await safeCall("getAllApplicationKeys", null, () =>
      getAllApplicationKeys()
    )
  );
  functionChecks.push(
    await safeCall("getAllApplicationCategories", null, () =>
      getAllApplicationCategories()
    )
  );
  functionChecks.push(
    await safeCall("getApplicationCategoryByKey", { appKey }, () =>
      getApplicationCategoryByKey(appKey)
    )
  );
  functionChecks.push(
    await safeCall(
      "getCategoriesWithItems",
      { appKeys: [appKey, appKey2] },
      () => getCategoriesWithItems([appKey, appKey2])
    )
  );

  functionChecks.push(
    await safeCall("getAllAgents", null, () => getAllAgents())
  );
  functionChecks.push(
    await safeCall("getAgentsForMap", null, () => getAgentsForMap())
  );
  functionChecks.push(
    await safeCall("getAgentsByCountry", { country: agentCountry }, () =>
      getAgentsByCountry(agentCountry)
    )
  );
  functionChecks.push(
    await safeCall("searchAgentsByName", { query: agentName }, () =>
      searchAgentsByName(agentName)
    )
  );
  functionChecks.push(
    await safeCall("getAgentById", { id: agentId }, () =>
      getAgentById(agentId)
    )
  );
  functionChecks.push(
    await safeCall("getAllAgentCountries", null, () =>
      getAllAgentCountries()
    )
  );

  functionChecks.push(
    await safeCall("getStoryByKey", { appKey: storyKey }, () =>
      getStoryByKey(storyKey)
    )
  );
  functionChecks.push(
    await safeCall("getPublishedStories", null, () =>
      getPublishedStories()
    )
  );
  functionChecks.push(
    await safeCall("getAllStories", null, () => getAllStories())
  );
  functionChecks.push(
    await safeCall("getAllStoryKeys", null, () => getAllStoryKeys())
  );

  functionChecks.push(
    await safeCall("getTechnicalByClass", { classKey: technicalClass }, () =>
      getTechnicalByClass(technicalClass)
    )
  );
  functionChecks.push(
    await safeCall("getThreadingDiagrams", null, () =>
      getThreadingDiagrams()
    )
  );
  functionChecks.push(
    await safeCall(
      "getThreadingDiagramByImage",
      { image: threadingImage },
      () => getThreadingDiagramByImage(threadingImage)
    )
  );
  functionChecks.push(
    await safeCall(
      "getAsinByMediaKeyword",
      { keyword: asinKeyword },
      () => getAsinByMediaKeyword(asinKeyword)
    )
  );

  functionChecks.push(
    await safeCall("getNavData", null, () => getNavData())
  );
  functionChecks.push(
    await safeCall("getHeaderNavData", null, () => getHeaderNavData())
  );

  const output = {
    generatedAt: new Date().toISOString(),
    tables: Object.values(tableChecks),
    functions: functionChecks,
  };

  console.log(JSON.stringify(output, null, 2));
}

main().catch((err) => {
  console.error(JSON.stringify({ error: err instanceof Error ? err.message : String(err) }));
  process.exit(1);
});
