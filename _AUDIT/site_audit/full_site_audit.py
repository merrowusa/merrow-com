#!/usr/bin/env python3
"""
Full Site Audit — 404s, JS Errors, Empty Pages

Run: python3 full_site_audit.py
Requires: pip install requests beautifulsoup4
"""

import os
import json
import re
import time
from datetime import datetime
from urllib.parse import urljoin, urlparse
from collections import defaultdict

try:
    import requests
    from bs4 import BeautifulSoup
except ImportError:
    print("Install dependencies: pip install requests beautifulsoup4")
    exit(1)

BASE_URL = os.environ.get("BASE_URL", "http://localhost:3000")
MAX_PAGES = int(os.environ.get("MAX_PAGES", "500"))
OUTPUT_DIR = os.path.join(os.path.dirname(__file__), "results")

os.makedirs(OUTPUT_DIR, exist_ok=True)

# Results
results = {
    "timestamp": datetime.now().isoformat(),
    "base_url": BASE_URL,
    "pages": {
        "ok": [],
        "not_found": [],
        "empty": [],
        "error": [],
    },
    "broken_links": [],
}

visited = set()
to_visit = set()

# Seed URLs
SEED_URLS = [
    "/",
    "/parts",
    "/support",
    "/sewing",
    "/sewing/applications",
    "/technical-sewing",
    "/Sergers_and_Overlock_Sewing_Machines",
]


def is_internal(url):
    """Check if URL is internal"""
    parsed = urlparse(url)
    if parsed.scheme and parsed.scheme not in ("http", "https"):
        return False
    if parsed.netloc and parsed.netloc not in urlparse(BASE_URL).netloc:
        return False
    return True


def extract_links(html, current_url):
    """Extract internal links from HTML"""
    soup = BeautifulSoup(html, "html.parser")
    links = set()

    for a in soup.find_all("a", href=True):
        href = a["href"]

        # Skip anchors, mailto, tel, javascript
        if href.startswith("#") or href.startswith("mailto:") or href.startswith("tel:"):
            continue
        if href.startswith("javascript:"):
            continue

        # Normalize URL
        if href.startswith("/"):
            full_url = href
        elif href.startswith("http"):
            if not is_internal(href):
                continue
            full_url = urlparse(href).path
        else:
            full_url = urljoin(current_url, href)
            full_url = urlparse(full_url).path

        # Clean URL
        full_url = full_url.split("?")[0].split("#")[0]
        if full_url:
            links.add(full_url)

    return links


def has_substance(html):
    """Check if page has real content beyond header/footer"""
    soup = BeautifulSoup(html, "html.parser")

    # Remove header, footer, nav, script, style
    for tag in soup.find_all(["header", "footer", "nav", "script", "style"]):
        tag.decompose()

    # Get text content
    text = soup.get_text(separator=" ", strip=True)
    text = re.sub(r"\s+", " ", text)

    # Should have at least 100 chars of content
    return len(text) > 100


def audit_page(url):
    """Audit a single page"""
    full_url = BASE_URL + url

    try:
        response = requests.get(full_url, timeout=30)
        status = response.status_code
        html = response.text

        result = {
            "url": url,
            "status": status,
        }

        if status == 404:
            results["pages"]["not_found"].append(result)
            return set()
        elif status >= 500:
            result["error"] = f"Server error: {status}"
            results["pages"]["error"].append(result)
            return set()
        elif status == 200:
            links = extract_links(html, url)
            result["links_found"] = len(links)

            if not has_substance(html):
                result["reason"] = "Page loaded but lacks substantive content"
                results["pages"]["empty"].append(result)
            else:
                results["pages"]["ok"].append(result)

            return links
        else:
            result["status"] = status
            results["pages"]["error"].append(result)
            return set()

    except requests.Timeout:
        results["pages"]["error"].append({
            "url": url,
            "error": "Timeout",
        })
        return set()
    except Exception as e:
        results["pages"]["error"].append({
            "url": url,
            "error": str(e),
        })
        return set()


def main():
    print(f"Starting site audit: {BASE_URL}")
    print("=" * 50)

    # Add seed URLs
    for url in SEED_URLS:
        to_visit.add(url)

    processed = 0

    while to_visit and processed < MAX_PAGES:
        url = to_visit.pop()

        if url in visited:
            continue

        visited.add(url)
        processed += 1

        print(f"[{processed}/{MAX_PAGES}] {url}")

        new_links = audit_page(url)
        for link in new_links:
            if link not in visited:
                to_visit.add(link)

    # Summary
    print("\n" + "=" * 50)
    print("AUDIT COMPLETE")
    print("=" * 50)
    print(f"Pages crawled: {len(visited)}")
    print(f"  OK (200 with content): {len(results['pages']['ok'])}")
    print(f"  404 Not Found: {len(results['pages']['not_found'])}")
    print(f"  Empty/No Substance: {len(results['pages']['empty'])}")
    print(f"  Errors: {len(results['pages']['error'])}")

    # Write JSON results
    ts = int(time.time())
    json_file = os.path.join(OUTPUT_DIR, f"audit_{ts}.json")
    with open(json_file, "w") as f:
        json.dump(results, f, indent=2)
    print(f"\nJSON results: {json_file}")

    # Write markdown summary
    md_file = os.path.join(OUTPUT_DIR, f"audit_{ts}.md")
    with open(md_file, "w") as f:
        f.write(f"# Site Audit Report\n\n")
        f.write(f"**Date:** {results['timestamp']}\n")
        f.write(f"**Base URL:** {BASE_URL}\n")
        f.write(f"**Pages Crawled:** {len(visited)}\n\n")

        f.write("## Summary\n\n")
        f.write("| Status | Count |\n|--------|-------|\n")
        f.write(f"| OK (200) | {len(results['pages']['ok'])} |\n")
        f.write(f"| 404 Not Found | {len(results['pages']['not_found'])} |\n")
        f.write(f"| Empty Pages | {len(results['pages']['empty'])} |\n")
        f.write(f"| Errors | {len(results['pages']['error'])} |\n\n")

        if results["pages"]["not_found"]:
            f.write("## 404 Pages\n\n")
            for p in results["pages"]["not_found"]:
                f.write(f"- `{p['url']}`\n")
            f.write("\n")

        if results["pages"]["empty"]:
            f.write("## Empty/No Substance Pages\n\n")
            for p in results["pages"]["empty"]:
                f.write(f"- `{p['url']}` — {p.get('reason', 'No content')}\n")
            f.write("\n")

        if results["pages"]["error"]:
            f.write("## Errors\n\n")
            for p in results["pages"]["error"]:
                f.write(f"- `{p['url']}` — {p.get('error', p.get('status', 'Unknown'))}\n")

    print(f"Markdown summary: {md_file}")


if __name__ == "__main__":
    main()
