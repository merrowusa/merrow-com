# merrow.com Legacy Architecture Map

> **Created:** 2026-01-20
> **Purpose:** Document the existing PHP site structure for rebuild planning
> **Source:** cPanel backup from Dec 11, 2025

---

## Overview

The legacy merrow.com is a PHP 5.x site built ~2008-2011 with:
- **374 PHP files** at root level
- **50 directories**
- **140+ widget files** (PHP includes)
- **MySQL databases** (15+ databases, primary is `merrowco_inventory`)
- **Assets on S3** (`merrow-media.s3.amazonaws.com`)
- **CSS on separate domain** (`css.imerrow.com`)

---

## Page Architecture

### Core Page Templates

| Page | File | Purpose | Database |
|------|------|---------|----------|
| **Homepage** | `index.php` | 3-up machine categories + branded stitch | `seo_site_headers` |
| **Machine Detail** | `mg_1.php` | Individual machine pages | `machine_pages` |
| **Stitch Samples** | `stitch.php` | Stitch sample gallery | `asin`, samples |
| **Parts** | `parts.php` | Parts lookup | parts tables |
| **Support** | `support.php` | Tech support/manuals | `threading_diagrams`, `technical` |
| **Applications** | `applications.php`, `merrow_stitching.php`, `a.php` | Use cases | `application_pages`, `application_categories` |
| **Agent Locator** | `agentmap.php` | Dealer map | `agents`, `markers` |
| **Store** | `dynamicstore.php` | Product store | `store`, `asin` |
| **Category Pages** | `ncp1.php` | Fashion/Technical/End-to-End | `machine_categories` |
| **Customer Stories** | `ncs1.php` | Case studies | `customer_stories` |
| **History** | `nhp1.php` | Company history | static |
| **Contact** | `contact_general.php` | Contact forms | `customer_forms` |
| **Announcements** | `announcements.php` | News/eBay | `marketing` |

---

## URL Structure (from .htaccess)

### SEO-Friendly Routes

```
/Overlock_Sewing_Machines/Continuous_Processing/{machine}  → mg_1.php?cp={machine}
/Sergers_and_Overlock_Sewing_Machines/Emblem_Edging/{machine}  → mg_1.php?cp={machine}
/Sergers_and_Overlock_Sewing_Machines/{machine}  → mg_1.php?cp={machine}
/crochet-sewing-machines/{machine}  → mg_1.php?cp={machine}

/fashion-sewing  → ncp1.php?a=f
/technical-sewing  → ncp1.php?a=t
/end-to-end-seaming  → ncp1.php?a=e

/stitch/marketplace/{m}/stitch/{s}/...  → stitch.php
/parts/{cp}/{mmc_code}  → parts.php
/support/class/{c}/key/{k}  → support.php
/sewing/applications/{app}  → a.php?app={app}
/customer-stories/featured/{s}  → ncs1.php?s={s}
/overlock-history  → nhp1.php
/agentmap.html  → agentmap.php
```

### Domain Redirects
- `merrow.com` → `www.merrow.com`
- `merrowsales.com` → `www.merrow.com`
- `merrowmachine.com` → `www.merrow.com`
- `/training` → `merrowedge.com/pages/training-support`

---

## Widget System (PHP Includes)

### Core Layout Widgets
| Widget | Purpose |
|--------|---------|
| `header_test.php` | Site header/navigation |
| `widget_feet.php` | Site footer |
| `widget_new_styles.php` | CSS includes |
| `widget_js.php` | JavaScript includes |
| `widget_footer_js.php` | Footer JavaScript |
| `widget_analytics.php` | Google Analytics |
| `widget_new_metadata.php` | Meta tags |
| `widget_sql.php` | Database connection |
| `widget_new_sql_genpageload.php` | General page DB setup |

### Feature Widgets
| Widget | Purpose |
|--------|---------|
| `widget_agent_map.php` | Agent locator map |
| `widget_stitchselector.php` | Stitch selection interface |
| `widget_videoplayer.php` / `widget_videoplayerHD.php` | Video embeds |
| `widget_store.php` | Store display |
| `widget_partspricing.php` | Parts pricing |
| `widget_techspecs.php` | Technical specifications |
| `widget_compare.php` | Machine comparison |
| `widget_agent_book.php` | Parts manuals |
| `widget_announcements.php` | News/announcements |
| `widget_cms_*.php` | Content management widgets |
| `widget_config_*.php` | Configuration widgets |
| `widget_sub_*.php` | Sub-components |

### Data Widgets
| Widget | Purpose |
|--------|---------|
| `widget_enterprise_db.php` | Enterprise database |
| `widget_enterprise_machinesdb.php` | Machines database |
| `widget_enterprise_applicationdb.php` | Applications database |
| `widget_enterprise_fabricdb.php` | Fabric database |
| `widget_enterprise_targetsdb.php` | Targets database |
| `widget_globalstores.php` | Global store data |

---

## Database Schema

### Primary Database: `merrowco_inventory`

#### Core Content Tables
| Table | Purpose | Used By |
|-------|---------|---------|
| `machine_pages` | Machine product pages (SEO, specs, images) | `mg_1.php` |
| `machine_categories` | Machine category groupings | `ncp1.php` |
| `machines` | Machine master list | various |
| `asin` | Product/Amazon integration | `stitch.php`, store |
| `application_pages` | Application detail pages | `applications.php` |
| `application_categories` | Application categories | `applications.php` |
| `samples` | Stitch samples | `stitch.php` |
| `customer_stories` | Case studies | `ncs1.php` |

#### Support Tables
| Table | Purpose |
|-------|---------|
| `threading_diagrams` | Threading diagrams for machines |
| `technical` | Technical documentation |
| `rails` | Rail options |
| `rail_options` | Rail configuration options |

#### Agent/Dealer Tables
| Table | Purpose |
|-------|---------|
| `agents` | Dealer/agent records |
| `markers` / `markers1` / `markers2` | Map markers for agent locator |
| `agent_asin` | Agent-specific products |
| `agent_revenue` | Agent revenue tracking |
| `login_auth_agent` | Agent authentication |

#### Product/Pricing Tables
| Table | Purpose |
|-------|---------|
| `PRODUCT` | Product master |
| `PRODUCT_PRICE` | Product pricing |
| `PRICE_UPDATE` | Price update log |
| `pricing_list` | Pricing lists |
| `store` | Store products |
| `yli_products` | YLI thread products |

#### Geographic Tables
| Table | Purpose |
|-------|---------|
| `textile_plants_*` | Factory locations by country (20+ tables) |
| `language` | Multi-language support |

#### System Tables
| Table | Purpose |
|-------|---------|
| `seo_site_headers` | SEO metadata per page |
| `customer_forms` | Form submissions |
| `login_auth` / `login_auth_global` | Authentication |
| `marketing` | Marketing content |
| `jobs` | Job listings |

### Other Databases
| Database | Purpose |
|----------|---------|
| `merrowco_BOM` | Bill of Materials |
| `merrowco_dynamicpages` | Dynamic page content |
| `merrowco_techmanual` | Technical manuals |
| `merrowco_hydedata` | Hyde Tools data |
| `merrowco_merrow` | Additional Merrow data |

---

## Asset Locations

| Type | Location |
|------|----------|
| Product images | `merrow-media.s3.amazonaws.com/product-pages/` |
| General images | `merrow-media.s3.amazonaws.com/general-http/` |
| CSS | `css.imerrow.com/css_major/` |
| Services CSS | `merrowservices.s3.amazonaws.com/css/` |
| Local images | `/images/`, `/pics/`, `/db_images/` |
| Threading diagrams | `/threading/` |

---

## Directory Structure

### Core Directories
```
public_html/
├── images/           # Local images
├── pics/             # Additional images
├── db_images/        # Database-referenced images
├── threading/        # Threading diagrams
├── english/          # English language content
├── service/          # Service-related pages
├── activeseam/       # ActiveSeam product line
├── store/            # Store pages
├── form_folder/      # Form processing
├── form_folder_agent/ # Agent form processing
```

### Supporting Directories
```
├── cgi-bin/          # CGI scripts
├── dist/             # Distribution files
├── doc/              # Documentation
├── extensions/       # Extensions
├── flags/            # Country flags
├── flowplayer/       # Video player
├── lang/             # Language files
├── marketing_site_assets/ # Marketing assets
├── repository/       # File repository
├── roto_images/      # Rotator images
├── roto_js/          # Rotator JavaScript
```

### Internal/Admin
```
├── msmc/             # MSMC internal
├── private/          # Private files
├── prices/           # Pricing data
├── STORAGE/          # File storage
├── opentaps/         # OpenTaps integration
```

---

## Site Map (Pages to Rebuild)

### Priority 1: Core Pages
- [ ] Homepage (`index.php`)
- [ ] Machine Detail (`mg_1.php`) — ~360+ machine models
- [ ] Category Pages (`ncp1.php`) — Fashion, Technical, End-to-End
- [ ] Agent Locator (`agentmap.php`)

### Priority 2: Product Support
- [ ] Parts Lookup (`parts.php`)
- [ ] Tech Support (`support.php`)
- [ ] Stitch Samples (`stitch.php`)
- [ ] Applications (`applications.php`, `a.php`)

### Priority 3: Content Pages
- [ ] Customer Stories (`ncs1.php`)
- [ ] Company History (`nhp1.php`)
- [ ] About Page (`about.php`)
- [ ] Contact (`contact_general.php`)

### Priority 4: Commerce/Tools
- [ ] Store (`dynamicstore.php`)
- [ ] Agent Portal (`agent_*.php`)
- [ ] Newsletter signup

### Out of Scope (for now)
- Internal tools (`/msmc/`, `/private/`)
- Legacy integrations (`/opentaps/`)
- Admin/CMS tools

---

## Technical Notes

### Database Connection Pattern
```php
mysql_connect("localhost", "merrowco_renter", "[password]");
mysql_select_db("merrowco_inventory");
```

### Typical Page Structure
```php
<?php include ('widget_new_sql_genpageload.php'); ?>
<!DOCTYPE html><html lang="en">
<head>
<?php include ('widget_new_metadata.php'); ?>
<?php include ('widget_new_styles.php'); ?>
<?php include ('widget_analytics.php'); ?>
</head>
<?php include ("widget_js.php"); ?>
<body>
<?php include ("header_test.php"); ?>
<!-- Page content -->
<?php include ('widget_feet.php'); ?>
<?php include ('widget_footer_js.php'); ?>
</body>
</html>
```

### Image URL Pattern
```
http://merrow-media.s3.amazonaws.com/product-pages/{style_key}_main.jpg
http://merrow-media.s3.amazonaws.com/product-pages/{style_key}_thumb{1-4}.jpg
http://merrow-media.s3.amazonaws.com/product-pages/{style_key}_thumb{1-4}x.jpg (large)
```

---

## Migration Considerations

1. **Database**: Legacy MySQL → needs migration strategy (keep MySQL? move to Supabase?)
2. **URLs**: Must preserve SEO-friendly URLs from .htaccess
3. **Images**: Already on S3, can reference directly
4. **Forms**: Need new backend for contact/newsletter
5. **Agent Auth**: Need new auth system if keeping agent portal
6. **Multi-language**: `ip_lang_database.php` handles language detection

---

*This document maps the legacy PHP site. Update as rebuild progresses.*
