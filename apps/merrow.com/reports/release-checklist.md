# Merrow.com Release Checklist

> **Created:** 2026-02-01
> **For:** P4 Release Candidate

---

## Pre-Deploy Verification

### Gates
- [x] `npm run gate:routes` — PASS
- [x] `npm run gate:links` — PASS
- [x] `npm run gate:seo` — PASS
- [x] `npm run gate:redirects` — PASS
- [x] `npm run gate:data` — PASS (requires env vars)
- [x] `npm run gate:forms` — PASS (requires dev server)
- [x] `npx tsx scripts/gate-nav-cache.ts` — PASS

### Visual Regression
- [x] `npm run backstop:test` — 48/48 PASS
- [x] No unexpected visual differences

### Content Integrity
- [x] 1838 founding year present
- [x] 1877 overlock patent present
- [x] Made in USA messaging present
- [x] Family-owned messaging present

### Policy Compliance
- [x] Policy 2: Nav caching enforced (getNavData uses unstable_cache)
- [x] Policy 3: Dual-track CI check in place
- [x] Policy 4: Supabase-only (no MySQL)

---

## Deploy Steps

### 1. Environment Setup (Charlie)
- [x] Vercel project created and linked — https://vercel.com/merrow-monsters-projects
- [ ] `MERROW_SUPABASE_URL` secret set
- [ ] `MERROW_SUPABASE_SERVICE_ROLE_KEY` secret set

### 2. Preview Deploy
- [ ] Push to preview branch
- [ ] Verify Vercel build succeeds
- [ ] Record PREVIEW_URL in reports/summary.md

### 3. Smoke Test (Preview)
- [ ] Homepage loads
- [ ] `/machines` catalog displays categories
- [ ] `/fashion-sewing` shows machine list (from DB)
- [ ] `/technical-sewing` shows machine list (from DB)
- [ ] `/Sergers_and_Overlock_Sewing_Machines/MG-3U` machine detail loads
- [ ] `/about.html` renders correctly
- [ ] `/overlock-history` shows timeline with 1877
- [ ] `/support` contact options work
- [ ] `/parts` contact options work
- [ ] `/agentmap.html` loads agent locator

### 3a. Forms Smoke Test
- [ ] `/api/submissions` GET returns `{ status: "ok", types: [...] }`
- [ ] `/contact_general.html` loads with contact form
- [ ] `/support/request-quote` loads with quote request form
- [ ] Contact form: Submit with valid data shows success message
- [ ] Contact form: Submit with missing name/email shows validation error
- [ ] Contact form: Honeypot field is hidden (not visible in browser)
- [ ] Quote form: Machine field is visible
- [ ] Rate limiting: 10 rapid submissions triggers 429 response

### 4. Redirect Verification
- [ ] `/index.php` redirects to `/`
- [ ] `/machines.php` redirects to `/machines`
- [ ] `/about.php` redirects to `/about.html`
- [ ] Legacy redirects return 301

---

## Post-Deploy

### Monitoring
- [ ] Vercel analytics enabled
- [ ] Error tracking configured (if applicable)
- [ ] Performance baseline captured

### Documentation
- [ ] LAUNCH_NOTES.md updated
- [ ] events.jsonl updated with p4_complete

---

## Rollback Procedure

If critical issues discovered:

1. **Immediate:** Revert deployment in Vercel dashboard
2. **DNS:** No changes needed (preview only, production unaffected)
3. **Communication:** Notify team of rollback
4. **Investigation:** Document issue in events.jsonl

---

## Sign-Off

| Role | Name | Date | Approved |
|------|------|------|----------|
| Developer | Claude | 2026-02-01 | ✅ |
| Owner | Charlie | | [ ] |

---

*Complete all checkboxes before production deploy.*
