# QA Report — 0.2.0

## Completed locally

- Confirmed required theme files and a single correctly named root folder.
- Parsed `theme.json` as valid JSON.
- Checked JavaScript syntax with Node.js.
- Scanned source for secrets, private keys, credential terms, TODO markers, and accidental Creote/Elementor/WPBakery dependencies.
- Checked PHP source structurally for balanced delimiters and required WordPress hooks/template calls.
- Reviewed responsive CSS for 375px-first layout, 768px and 1024px adaptations, focus indicators, 44px controls, reduced motion, and overflow-sensitive layout.
- Confirmed dynamic contact output uses WordPress escaping/sanitization functions.

## Not executable in this environment

- PHP syntax lint: PHP CLI was unavailable. Must run `find . -name '*.php' -exec php -l {} \;` on staging or a local PHP environment.
- WordPress runtime with `WP_DEBUG`: requires the owner's staging installation.
- Theme Check: requires WordPress and the Theme Check plugin/CLI.
- Browser rendering in Chrome, Firefox, Safari, and Edge: no browser runtime was available here.
- Keyboard and screen-reader testing: requires a rendered staging site.
- Form submission, CRM routing, email delivery, spam protection, consent capture, SMS, scheduler, analytics, and ATS: integrations are not selected.
- Link checking: sitemap pages do not exist yet.
- Core Web Vitals: requires deployed staging content and final assets.

## Open launch blockers

- Approved logo and brand assets.
- Final service scope, process, engagement model, screening, timeline, responsibility, and pricing inputs.
- Approved proof and imagery.
- Final form/integration stack and privacy implementation.
- WordPress, PHP, hosting, and staging details.
- Creation and QA of interior page content.
