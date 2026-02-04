// @version header-with-data v1.0
// STEP 3: Server Component wrapper for Header data integration
//
// This component fetches cached navigation data and passes it to the
// client Header component. If fetch fails, Header falls back to
// hardcoded data - the header always renders.

import { getHeaderNavData } from "@data-layer/queries/nav";
import { Header } from "./Header";

/**
 * Server Component that fetches cached header nav data
 * and passes it to the client Header component
 */
export async function HeaderWithData() {
  // Fetch cached nav data (1 hour TTL, no per-request DB calls)
  const navData = await getHeaderNavData();

  return <Header navData={navData} />;
}
