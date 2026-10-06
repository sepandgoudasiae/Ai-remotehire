# AI-RemoteHire Website Rebuild — Project Status

**Last updated:** 2026-10-05  
**Current phase:** Phase 2 — Homepage prototype implementation  
**Status:** Uploadable prototype theme created; owner staging review required  
**Version:** 0.2.0

## Approved decisions

- Phase 1 plan accepted by owner.
- Standalone custom classic/hybrid WordPress theme.
- Employer-first conversion architecture.
- No required page builder.
- No invented claims, testimonials, clients, statistics, certifications, or service details.
- Staging-only installation and testing.

## Working assumptions pending explicit confirmation

- Visual direction: Operations Confidence (recommended Phase 1 direction).
- Primary CTA: Request Talent.
- Initial deliverable: homepage prototype plus required baseline WordPress templates, not final production release.
- Temporary text wordmark until an approved logo is uploaded.
- Form integration deferred; theme accepts an approved plugin shortcode and otherwise displays email/phone fallback.

## Files added

- Complete `ai-remotehire/` theme source folder.
- `ai-remotehire-0.2.0.zip` installable archive.
- Theme README and changelog.
- Editor guide, dependency list, and QA report.
- Updated project status file.

## Implemented

- PHP template hierarchy: index, header, footer, front page, page, single, archive, search, 404, comments, and search form.
- Theme supports, menus, custom logo, editor styles, featured images, responsive embeds, title tags, HTML5, and wide alignment.
- `theme.json` editor and frontend tokens.
- Native block patterns and starter homepage content.
- Responsive mobile navigation, dark mode, focus states, reduced motion, and accessible landmarks.
- Editable contact details and optional form shortcode through Customizer.
- No Creote/page-builder dependencies.

## Pending inputs

- Approved vector/raster logo and brand guidance.
- Explicit selection of visual direction and CTA if different from assumptions.
- Exact engagement model and service scope.
- Process, screening, onboarding, management, support, and replacement terms.
- Pricing and commercial terms.
- Approved proof, team information, clients, metrics, certifications, and photography.
- Form, CRM, scheduler, SMTP, SMS, analytics, consent, ATS, spam, security, cache, and backup systems.
- WordPress/PHP/hosting versions and staging credentials/workflow.
- Talent/Careers decision and public-job-board policy conflict resolution.

## Known issues

- This is a prototype release, not the Definition-of-Done final theme.
- Several homepage statements deliberately show `[INPUT REQUIRED]`.
- Sitemap pages and interior copy are not yet implemented.
- PHP lint, WordPress runtime QA, Theme Check, browser/device tests, accessibility technology testing, and integration tests require staging.
- Google Fonts are externally loaded in this prototype; self-hosting should be considered before production.
- A screenshot placeholder is generated from the approved design system, not a browser capture of the final site.

## Next action

1. Upload version 0.2.0 to staging and review the homepage.
2. Supply the approved logo and requested business/service inputs.
3. Approve or revise visual direction, CTA, and homepage content hierarchy.
4. After approval, implement interior pages and production integrations.
