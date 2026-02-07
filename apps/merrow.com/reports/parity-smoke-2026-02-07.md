# Parity Smoke Report

Date: 2026-02-07  
Environment: `http://localhost:3000` (local Next dev server)

## Scope Executed

1. Header
2. Home
3. Applications (index + detail)
4. Support
5. Parts

## DOM Gate

- Command: `npm run gate:dom`
- Result: PASS (4/4 pages, exactly one header and one footer)

## Backstop Smoke Runs

### Header
- Config: `backstop.header.parity.json`
- Commands:
  - `npx backstop reference --config=backstop.header.parity.json`
  - `npx backstop test --config=backstop.header.parity.json`
- Result: PASS (2/2)
- Artifacts:
  - `backstop_data/header_smoke_report/index.html`
  - `backstop_data/header_smoke_test/20260207-163116/report.json`

### Home
- Config: `backstop.homepage-parity.json`
- Commands:
  - `npx backstop reference --config=backstop.homepage-parity.json`
  - `npx backstop test --config=backstop.homepage-parity.json`
- Result: PASS (1/1)
- Artifacts:
  - `backstop_data/homepage_parity_report/index.html`
  - `backstop_data/homepage_parity_test/20260207-163124/report.json`

### Applications Index
- Config: `backstop.application-index.parity.json`
- Commands:
  - `npx backstop reference --config=backstop.application-index.parity.json`
  - `npx backstop test --config=backstop.application-index.parity.json`
- Result: PASS (2/2)
- Artifacts:
  - `backstop_data/parity_report/index.html`
  - `backstop_data/parity_test/20260207-163133/report.json`

### Application Detail
- Config: `backstop.application.parity.json`
- Commands:
  - `npx backstop reference --config=backstop.application.parity.json`
  - `npx backstop test --config=backstop.application.parity.json`
- Result: PASS (2/2)
- Artifacts:
  - `backstop_data/parity_report/index.html`
  - `backstop_data/parity_test/20260207-163142/report.json`

### Support
- Config: `backstop.support.parity.json`
- Commands:
  - `npx backstop reference --config=backstop.support.parity.json`
  - `npx backstop test --config=backstop.support.parity.json`
- Result: PASS (2/2)
- Artifacts:
  - `backstop_data/parity_report/index.html`
  - `backstop_data/parity_test/20260207-163153/report.json`

### Parts
- Config: `backstop.parts.parity.json`
- Commands:
  - `npx backstop reference --config=backstop.parts.parity.json`
  - `npx backstop test --config=backstop.parts.parity.json`
- Result: FAIL (0/2)
- Mismatch:
  - desktop-1440: `30.29%` (threshold `10%`)
  - desktop-1920: `26.71%` (threshold `10%`)
- Artifacts:
  - `backstop_data/parts_smoke_report/index.html`
  - `backstop_data/parts_smoke_test/20260207-163201/report.json`
  - `backstop_data/parts_smoke_test/20260207-163201/failed_diff_merrow-com-parts-smoke_Parts_Hub_0_document_0_desktop-1440.png`
  - `backstop_data/parts_smoke_test/20260207-163201/failed_diff_merrow-com-parts-smoke_Parts_Hub_0_document_1_desktop-1920.png`

## Summary

- Passed surfaces: Header, Home, Applications (index/detail), Support
- Failing surface: Parts hub parity (significant visual delta)
- Baseline artifacts are generated and available in `apps/merrow.com/backstop_data/`
