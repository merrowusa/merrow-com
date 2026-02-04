# Vercel Setup Guide — merrow.com Refactor

> **Purpose:** Deploy the Next.js refactor to Vercel preview for testing before production cutover.
> **Status:** Project exists at https://vercel.com/merrow-monsters-projects

---

## Prerequisites

- Vercel account (sign up at vercel.com)
- GitHub repo access for `new_merrow_web`
- Supabase credentials (MERROW_SUPABASE_URL, MERROW_SUPABASE_SERVICE_ROLE_KEY)

---

## Step-by-Step Setup

### 1. Project Status

**Project already exists:** https://vercel.com/merrow-monsters-projects

Skip to Step 3 (Environment Variables) if project is already configured.

### 2. Configure Build Settings

In the project configuration screen:

| Setting | Value |
|---------|-------|
| **Framework Preset** | Next.js |
| **Root Directory** | `apps/merrow.com` |
| **Build Command** | `npm run build` |
| **Output Directory** | `.next` |
| **Install Command** | `npm install` |

### 3. Add Environment Variables

Click **"Environment Variables"** and add:

| Name | Value | Environment |
|------|-------|-------------|
| `MERROW_SUPABASE_URL` | `https://[your-ref].supabase.co` | All |
| `MERROW_SUPABASE_ANON_KEY` | `eyJ...` (anon key) | All |
| `MERROW_SUPABASE_SERVICE_ROLE_KEY` | `eyJ...` (service key) | All |

**Important:** Use anon key for client-side, service role key for server-side data fetching.

### 4. Deploy

1. Click **"Deploy"**
2. Wait for build to complete (~2-3 minutes)
3. Note the preview URL: `https://[project-name].vercel.app`

### 5. Verify Deployment

Test these URLs on the preview:
- [ ] Homepage: `/`
- [ ] Machines: `/machines`
- [ ] Agent Map: `/agentmap.html`
- [ ] Contact: `/contact_general.html`

### 6. Record Preview URL

Update `reports/summary.md` with:
```
**PREVIEW_URL:** https://[your-project].vercel.app
```

---

## Troubleshooting

### Build Fails

1. Check build logs in Vercel dashboard
2. Common issues:
   - Missing env vars → Add them in Settings > Environment Variables
   - TypeScript errors → Run `npm run typecheck` locally first

### Database Connection Issues

1. Verify Supabase credentials are correct
2. Check if Supabase project allows connections from Vercel's IP ranges
3. Test with anon key first (more permissive)

### 404 on Routes

1. Verify Root Directory is set to `apps/merrow.com`
2. Check that dynamic routes have proper `generateStaticParams`

---

## After Setup

Once Charlie provides the PREVIEW_URL:
1. Update `reports/summary.md`
2. Run `npm run backstop:parity:info:test` against preview
3. Perform smoke tests per `reports/release-checklist.md`

---

*Created for P5 deployment readiness.*
