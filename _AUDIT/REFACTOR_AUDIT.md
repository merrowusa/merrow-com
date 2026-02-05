# Merrow.com Refactor Audit
## Comprehensive Pre-Launch Assessment

> **Audit Date:** 2026-01-29
> **Auditor:** Claude (ai-os)
> **Status:** COMPLETE
> **Action Required:** YES — See Critical Issues

---

## Executive Summary

| Category | Status | Issues |
|----------|--------|--------|
| **S3 Image Availability** | ⚠️ WARN | 4 of 34 images missing (12%) |
| **Code Completeness** | ⚠️ WARN | 7 TODOs in production code |
| **External Dependencies** | ✅ PASS | All documented |
| **Redirect Coverage** | ✅ PASS | 80+ redirects mapped |
| **Database Schema** | ✅ PASS | 34 machines, schema complete |
| **Widget Migration** | ⚠️ WARN | 140 widgets → need component mapping |
| **Content (History/About)** | ✅ PASS | Content consolidated in CONTENT_HISTORY.md |

---

## 1. S3 IMAGE AVAILABILITY AUDIT

### Test Methodology
HEAD requests to `https://merrow-media.s3.amazonaws.com/product-pages/{style_key}_main.jpg`

### Results

| style_key | HTTP Status | Action Required |
|-----------|-------------|-----------------|
| 18e | 200 ✅ | — |
| 18a | 200 ✅ | — |
| 70d3b2 | 200 ✅ | — |
| 70d3b2cnp | 200 ✅ | — |
| 70d3b2g | 200 ✅ | — |
| 70d3b2hp | 200 ✅ | — |
| 70d3b2ls | 200 ✅ | — |
| 70d3b2rail | 200 ✅ | — |
| 70y3b2 | 200 ✅ | — |
| 72d3b2 | 200 ✅ | — |
| 72d3b2r | 200 ✅ | — |
| mb4dfo | 200 ✅ | — |
| mg1dm | 200 ✅ | — |
| mg2dfs2 | 200 ✅ | — |
| mg2dnr1 | 200 ✅ | — |
| mg2dnr1micro | 200 ✅ | — |
| mg2u | 200 ✅ | — |
| mg3d | 200 ✅ | — |
| mg3dge7 | 200 ✅ | — |
| mg3dw | 200 ✅ | — |
| mg3dw2 | 200 ✅ | — |
| mg3dw7 | 200 ✅ | — |
| mg3dwge7 | 200 ✅ | — |
| mg3dwrl | 200 ✅ | — |
| mg3q3 | 200 ✅ | — |
| mg3u | 200 ✅ | — |
| mg3unarrow | 200 ✅ | — |
| mg3uvelcro | 200 ✅ | — |
| mg3uwide | 200 ✅ | — |
| mg4d45 | 200 ✅ | — |
| **mg2dr** | **404 ❌** | **Upload image or hide machine** |
| **mg3dr** | **404 ❌** | **Upload image or hide machine** |
| **mgbc** | **404 ❌** | **Upload image or hide machine** |
| **70d3b2ls2** | **404 ❌** | **Upload image or hide machine** |

### Summary
- **30 of 34** machine images available (88%)
- **4 missing:** `mg2dr`, `mg3dr`, `mgbc`, `70d3b2ls2`

### Recommendations
1. Upload missing images to S3
2. OR set `publish='no'` for these machines in database
3. OR add fallback placeholder image in `MachinePage.tsx`

---

## 2. CODE COMPLETENESS AUDIT

### TODOs in Production Code

Found **7 TODOs** in `apps/merrow.com/app/`:

| Location | TODO | Priority |
|----------|------|----------|
| `support/class/[c]/key/[k]/page.tsx` | Fetch support data from database | HIGH |
| `Header.tsx` | Machine/Application data will be fetched from database | HIGH |
| `Header.tsx` | Implement search functionality | MEDIUM |
| `Header.tsx` | Connect to database for machine list | HIGH |
| `Header.tsx` | Connect to database for application categories | HIGH |
| `parts/[cp]/[mmc_code]/page.tsx` | Fetch parts data from database | HIGH |
| `page.tsx` (homepage) | Branded Stitch inquiry form - needs API route | LOW |

### Blocking Issues
- **Header mega-menus are stubbed** — Currently hardcoded, not pulling from DB
- **Support pages are stubbed** — No data layer connection
- **Parts pages are stubbed** — No data layer connection

### Non-Blocking Issues
- Search functionality (can launch without)
- Branded Stitch form (can use mailto: fallback)

---

## 3. EXTERNAL DEPENDENCIES AUDIT

### S3 Buckets

| Bucket | Purpose | Status |
|--------|---------|--------|
| `merrow-media.s3.amazonaws.com` | Product images, logos, general assets | ✅ Active |
| `merrowservices.s3.amazonaws.com` | CSS, service images | ✅ Active |
| `merrow-linecard.s3.amazonaws.com` | Line card images | ✅ Active |
| `bucket9.s3.amazonaws.com` | Misc CSS/images | ⚠️ Verify ownership |
| `agentmedia.s3.amazonaws.com` | Agent/dealer media | ✅ Active |
| `twitter-badges.s3.amazonaws.com` | Twitter logo | ⚠️ Legacy, replace |

### External CDNs

| CDN | Purpose | Status | Action |
|-----|---------|--------|--------|
| `css.imerrow.com` | Legacy CSS | ⚠️ Active | Migrate to local |
| `ajax.googleapis.com` | jQuery | ✅ Active | Bundled in Next.js |

### Third-Party APIs

| API | Purpose | Status | Credentials |
|-----|---------|--------|-------------|
| Google Maps | Agent locator | Required | API key needed |
| reCAPTCHA | Form spam prevention | Optional | API key needed |
| Autopilot | Marketing automation | Legacy | Evaluate if needed |
| Mailchimp | Newsletter | Legacy | Evaluate if needed |

### Social/External Links

| Service | URL | Status |
|---------|-----|--------|
| Blog | `blog.merrow.com` | ✅ Active |
| ActiveSeam | `activeseam.com` | ✅ Active |
| MerrowEdge | `merrowedge.com` | ✅ Active |
| Twitter | `twitter.com/merrow_machine` | ✅ Active |

---

## 4. REDIRECT MATRIX AUDIT

### Core Route Redirects (Critical for SEO)

| Legacy Pattern | New Route | Type | Status |
|----------------|-----------|------|--------|
| `/fashion-sewing` | `/fashion-sewing` | Pass-through | ✅ |
| `/technical-sewing` | `/technical-sewing` | Pass-through | ✅ |
| `/end-to-end-seaming` | `/end-to-end-seaming` | Pass-through | ✅ |
| `/overlock-history` | `/overlock-history` | Pass-through | ✅ |
| `/Sergers_and_Overlock_Sewing_Machines/{cp}` | Same | Pass-through | ✅ |
| `/Overlock_Sewing_Machines/Continuous_Processing/{cp}` | Same | Pass-through | ✅ |
| `/crochet-sewing-machines/{cp}` | Same | Pass-through | ✅ |
| `/70class/cp/{cp}` | Same | Pass-through | ✅ |
| `/sewing/applications/{app}` | Same | Pass-through | ✅ |
| `/customer-stories/featured/{s}` | Same | Pass-through | ✅ |
| `/support/class/{c}/key/{k}` | Same | Pass-through | ✅ |
| `/parts/{cp}/{mmc_code}` | Same | Pass-through | ✅ |

### Legacy PHP Redirects (Must Configure in next.config.ts)

| Legacy URL | Target | Type | In Config? |
|------------|--------|------|------------|
| `ncp1.php?a=f` | `/fashion-sewing` | 301 | ✅ Yes |
| `ncp1.php?a=t` | `/technical-sewing` | 301 | ✅ Yes |
| `ncp1.php?a=e` | `/end-to-end-seaming` | 301 | ✅ Yes |
| `mg_1.php?cp={cp}` | `/Sergers.../[cp]` | 301 | ✅ Yes |
| `a.php?app={app}` | `/sewing/applications/[app]` | 301 | ✅ Yes |
| `nhp1.php` | `/overlock-history` | 301 | ✅ Yes |
| `ncs1.php?s={s}` | `/customer-stories/featured/[s]` | 301 | ✅ Yes |

### Model-Specific Redirects (50+ patterns)

| Legacy URL | Target |
|------------|--------|
| `/70d3b2.php` | `/Overlock_Sewing_Machines/Continuous_Processing/70d3b2` |
| `/70d3b2_hp.php` | `/Overlock_Sewing_Machines/Continuous_Processing/70d3b2hp` |
| `/70d3b2_g.php` | `/Overlock_Sewing_Machines/Continuous_Processing/70d3b2g` |
| `/70d3b2_cnp.php` | `/Overlock_Sewing_Machines/Continuous_Processing/70d3b2cnp` |
| `/70d3b2_ls.php` | `/Overlock_Sewing_Machines/Continuous_Processing/70d3b2ls` |
| `/70d3b2_rail.php` | `/Overlock_Sewing_Machines/Continuous_Processing/70d3b2rail` |
| `/70y3b2.php` | `/Overlock_Sewing_Machines/Continuous_Processing/70y3b2` |
| `/72d3b2.php` | `/Overlock_Sewing_Machines/Continuous_Processing/72d3b2` |
| `/72d3br.php` | `/Overlock_Sewing_Machines/Continuous_Processing/72d3b2r` |
| ... (40+ more) | ... |

### Domain Redirects

| From | To | Type |
|------|----|------|
| `merrow.com` | `www.merrow.com` | 301 |
| `merrowsales.com` | `www.merrow.com` | 301 |
| `merrowmachine.com` | `www.merrow.com` | 301 |
| `/training` | `merrowedge.com/pages/training-support` | 301 |

---

## 5. DATABASE AUDIT

### Record Counts

| Table | Records | Status |
|-------|---------|--------|
| `machine_pages` | 34 | ✅ Schema complete |
| `agents` | 159 | ✅ Queried successfully |
| `application_pages` | 76 | ✅ Schema complete |
| `application_categories` | 15 | ✅ Schema complete |
| `customer_stories` | 5 | ✅ Schema complete |

### Schema Completeness

| Table | Columns | Nullable Fields | Data Quality |
|-------|---------|-----------------|--------------|
| `machine_pages` | 79 | 0 | ⚠️ Audit needed |
| `agents` | ~12 | Several | ⚠️ Audit needed |

### Data Quality Issues to Investigate

1. **Empty fields** — Which machines have empty `overview`, `how`, `why`, `where` content?
2. **Missing images** — 4 machines have no S3 images
3. **Unpublished records** — How many `publish='no'` records exist?
4. **Stale agents** — Last verification of dealer contact info?

---

## 6. WIDGET MIGRATION AUDIT

### Most Used Widgets (from PHP codebase)

| Widget | Usage Count | Migrated? | New Component |
|--------|-------------|-----------|---------------|
| `widget_analytics.php` | 95 | ✅ | Next.js Analytics |
| `widget_main_menu.php` | 41 | ✅ | `Header.tsx` |
| `widget_main_google_menu.php` | 22 | ✅ | `Header.tsx` |
| `widget_feet.php` | 21 | ✅ | `Footer.tsx` |
| `widget_footer.php` | 20 | ✅ | `Footer.tsx` |
| `widget_new_styles.php` | 18 | ✅ | `globals.css` |
| `widget_merrow_advantage.php` | 17 | ❌ | TBD |
| `widget_js.php` | 17 | ✅ | Next.js bundling |
| `widget_sub_partsmenu.php` | 16 | ❌ | TBD |
| `widget_sql.php` | 16 | ✅ | Drizzle ORM |
| `widget_sub_railmenu.php` | 14 | ❌ | TBD |
| `widget_sub_machinemenu.php` | 14 | ❌ | TBD |
| `widget_cp_head_js_css.php` | 13 | ✅ | Next.js |
| `widget_new_sql_genpageload.php` | 10 | ✅ | Drizzle |
| `widget_new_metadata.php` | 10 | ✅ | `generateMetadata()` |
| `widget_leftmainmenu.php` | 8 | ❌ | TBD |
| `widget_footer_js.php` | 7 | ✅ | Next.js |

### Unmigrated Widgets (Blocking)

| Widget | Used By | Priority |
|--------|---------|----------|
| `widget_sub_partsmenu.php` | Parts pages | HIGH |
| `widget_sub_railmenu.php` | Machine pages | MEDIUM |
| `widget_sub_machinemenu.php` | Navigation | MEDIUM |
| `widget_leftmainmenu.php` | Sidebar | LOW |
| `widget_merrow_advantage.php` | Marketing | LOW |

---

## 7. FILE STRUCTURE AUDIT

### Next.js App Structure

| Metric | Count |
|--------|-------|
| Total `page.tsx` files | 22 |
| Total `.tsx` files | 29 |
| Route directories | 15 |

### Pages by Status

| Status | Count | Pages |
|--------|-------|-------|
| ✅ RINSE'd | 7 | Homepage, Header, Footer, Layout, Fashion, Technical, End-to-End |
| ⚠️ Stubbed | 6 | Support, Parts, Machines listing, Applications listing, Customer Stories listing, 404 |
| ✅ Functional | 9 | Machine detail (5 variants), Application detail, Customer story detail, Agent map, History, About |

---

## 8. CRITICAL ISSUES SUMMARY

### Must Fix Before Launch

| Issue | Severity | Owner | Est. Effort |
|-------|----------|-------|-------------|
| **4 missing S3 images** | HIGH | Charlie | 30 min |
| **Header mega-menus stubbed** | HIGH | Dev | 2-4 hrs |
| **Support pages no data** | HIGH | Dev | 2-4 hrs |
| **Parts pages no data** | HIGH | Dev | 2-4 hrs |
| ~~PHP redirects in next.config~~ | ~~HIGH~~ | ~~Dev~~ | ✅ DONE |

### Should Fix Before Launch

| Issue | Severity | Owner | Est. Effort |
|-------|----------|-------|-------------|
| Google Maps API key | MEDIUM | Charlie | 15 min |
| Search functionality | MEDIUM | Dev | 4-8 hrs |
| Form handlers (contact, newsletter) | MEDIUM | Dev | 2-4 hrs |

### Can Fix After Launch

| Issue | Severity | Owner |
|-------|----------|-------|
| css.imerrow.com migration | LOW | Dev |
| Legacy widget full migration | LOW | Dev |
| Data quality audit | LOW | Content |

---

## 9. PRE-LAUNCH CHECKLIST

### Infrastructure
- [ ] Vercel project created
- [ ] Environment variables set (DATABASE_URL, etc.)
- [ ] Domain DNS configured
- [ ] SSL certificate active

### Database
- [ ] MySQL connection verified
- [ ] All 34 machines queryable
- [ ] All 159 agents queryable
- [ ] All 76 applications queryable

### Images
- [ ] 4 missing images uploaded OR machines unpublished
- [ ] Fallback placeholder image configured
- [ ] S3 CORS configured for new domain

### Redirects
- [ ] PHP redirect rules in next.config.ts
- [ ] Model-specific redirects configured
- [ ] Domain redirects at DNS/CDN level

### Functionality
- [ ] All 22 routes render without error
- [ ] Machine detail pages load images
- [ ] Category pages show machine grids
- [ ] Agent map displays dealers
- [ ] Forms submit (or show mailto: fallback)

### SEO
- [ ] Sitemap generates at /sitemap.xml
- [ ] robots.txt accessible
- [ ] Meta tags present on all pages
- [ ] Structured data (JSON-LD) validates

### Performance
- [ ] Lighthouse score > 80 on all metrics
- [ ] Core Web Vitals in green
- [ ] Images lazy-loaded
- [ ] Bundle size < 500KB

---

## 10. NEXT STEPS

### Immediate (This Week)
1. Fix 4 missing S3 images (`mg2dr`, `mg3dr`, `mgbc`, `70d3b2ls2`)
2. Implement Header mega-menu data fetching
3. ~~Add PHP redirects to next.config.ts~~ ✅ Already done
4. Set up Vercel project

### Short Term (Before Launch)
1. Implement Support page data layer
2. Implement Parts page data layer
3. Configure Google Maps API
4. Set up contact form handler

### Post-Launch
1. Monitor 404 errors for missed redirects
2. Migrate css.imerrow.com to local
3. Complete remaining widget migrations
4. Data quality audit and cleanup

---

*Audit complete. This document should be updated as issues are resolved.*
