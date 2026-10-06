# AI-RemoteHire WordPress Theme

Version 0.2.0 is an **uploadable Phase 2 homepage prototype theme**, not the final production release. It implements the approved discovery architecture and recommended Operations Confidence direction while preserving unverified business details as visible inputs.

## Install on staging

1. Back up the staging database and `wp-content` directory.
2. In WordPress, go to **Appearance → Themes → Add New → Upload Theme**.
3. Upload `ai-remotehire-0.2.0.zip` and activate it **on staging only**.
4. Open **Appearance → Customize** and confirm the public email, phones, address, hours, and optional approved form shortcode.
5. Open **Settings → Reading**. If WordPress did not import starter content, create a page named Home, set it as the static homepage, and insert the AI-RemoteHire patterns from the block inserter.
6. Open **Appearance → Menus** and assign menus to Primary and Footer locations.
7. Upload the approved logo at **Appearance → Customize → Site Identity**. Until then, the theme shows a temporary text wordmark; it does not create or replace the company logo.
8. Create the proposed pages and update internal links before public launch.

## Editing

- Homepage content is native block-editor content, not hard-coded in `front-page.php`.
- Insert reusable sections from **Patterns → AI-RemoteHire**.
- Global colors, typography, spacing, and editor settings are in `theme.json` and `assets/css/site.css`.
- Business contact details are Customizer settings.
- Add an approved form plugin shortcode in **Customizer → Business details → Approved form shortcode**, then place `[airh_contact]` on the Request Talent page.

## Dependencies

- Required: WordPress 6.4+ and PHP 7.4+.
- External runtime dependency: Google Fonts for Sora and Work Sans. Self-host before production if preferred or required by the privacy/performance review.
- Optional: an approved accessible form plugin. No form plugin is bundled.
- Not required: Creote, Elementor, WPBakery, Slider Revolution, Redux, WooCommerce, or Creote Addons.

## Known limitations

- No approved logo or image library was provided, so this build uses a text wordmark and a primarily typographic design.
- Service models, proof, testimonials, statistics, client names, certifications, screening methods, pricing, guarantees, and timelines are not invented.
- Some homepage copy contains `[INPUT REQUIRED]` markers intentionally.
- Starter content is designed for new/preview installations. Existing sites may need the supplied block patterns inserted manually.
- The theme does not create every sitemap page automatically.
- CRM, scheduling, analytics, SMS, email-delivery, ATS, and consent integrations are not included.

## Rollback

1. Keep the previous active theme installed and retain a database/files backup.
2. If activation causes a problem, return to **Appearance → Themes** and reactivate the previous theme.
3. If wp-admin is unavailable, rename `wp-content/themes/ai-remotehire` through the hosting file manager or SFTP; WordPress will fall back to another installed theme.
4. Restore the database/files backup if starter-content or navigation changes must also be reversed.

## Security

The theme contains no credentials, API keys, tracking identifiers, CRM identifiers, or custom submission handling. Dynamic output is escaped. Form handling belongs in an approved plugin or separately reviewed custom plugin.
