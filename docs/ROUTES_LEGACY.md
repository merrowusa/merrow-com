# Legacy Route Map (from `public_html/.htaccess`)

This is a focused summary of the rewrite rules used by the legacy site. It is not the full `.htaccess` file.

## Core Category Routes
- `/fashion-sewing` -> `ncp1.php?a=f`
- `/technical-sewing` -> `ncp1.php?a=t`
- `/end-to-end-seaming` -> `ncp1.php?a=e`
- `/sewing/applications/[app]` -> `a.php?app=$1`
- `/customer-stories/featured/[s]` -> `ncs1.php?s=$1`
- `/overlock-history` -> `nhp1.php`

## Machine Detail Routes
- `/Overlock_Sewing_Machines/Continuous_Processing/[cp]` -> `mg_1.php?cp=$1`
- `/70class/cp/[cp]` -> `mg_1.php?cp=$1`
- `/Sergers_and_Overlock_Sewing_Machines/Emblem_Edging/[cp]` -> `mg_1.php?cp=$1`
- `/Sergers_and_Overlock_Sewing_Machines/[cp]` -> `mg_1.php?cp=$1`
- `/crochet-sewing-machines/[cp]` -> `mg_1.php?cp=$1`

## Parts + Support + Contact
- `/parts/[cp]/[mmc_code]` -> `parts.php?cp=$1&mmc_code=$2`
- `/support/class/[c]/key/[k]` -> `support.php?class=$1&key=$2`
- `/contact_general/key/[k]` -> `contact_general.php?key=$1`
- `/contact_general/label/[label]/key/[k]` -> `contact_general.php?label=$1&key=$2`

## Legacy HTML Mapping
Legacy URLs ending in `.html` were rewritten to their `.php` equivalents:
- `/about.html` -> `about.php`
- `/agentmap.html` -> `agentmap.php`
- `/contact_general.html` -> `contact_general.php`
- `/support.html` -> `support.php`

## Notes
- `.htaccess` includes many additional rewrites for stitch galleries, agent book, and marketing endpoints. These are not yet mapped into refactor routes and should be audited if still needed.
