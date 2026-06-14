=== Wake ===

Contributors: thisismyurl
Tags: blog, full-site-editing, block-patterns, custom-colors, custom-logo, custom-menu, editor-style, featured-images, accessibility-ready, rtl-language-support, translation-ready, wide-blocks
Tested up to: 7.0
Requires at least: 6.7
Requires PHP: 7.4
Stable tag: 1.6165.1329
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A photography-forward coastal lifestyle theme for sailing clubs, maritime journals, and sea-going storytellers.

== Description ==

Wake is a photography-forward full-site-editing theme built for one kind of site: the sailing club, maritime journal, or sea-going storyteller who treats a photograph as evidence, not wallpaper. It takes its editorial split-hero from the print precedent of *Latitude 38* — headline against deep navy, the image filling the column at full bleed.

Features a tidal rhythm in its spacing scale and Literata paired with Jost for an editorial voice that feels at home beside the sea. The colour discipline is deliberate: brass is reserved for accents — the tide-rule separator, section borders, and the single subscribe call to action — so it reads as a maker's mark. Text and metadata stay in the navy-to-steel ink range that clears WCAG AA contrast on every bundled style variation. Built with accessibility in mind: a keyboard skip link, visible focus outlines, semantic header/main/footer landmarks, and a single h1 per template. Self-hosted SIL OFL fonts that never call home, RTL-ready through CSS logical properties, zero plugin dependencies.

== Demo content ==

The bundled patterns tell one curated story — a sailing club's editorial site —
so the theme reads as a finished publication rather than a box of parts. The
voyage-log archive, crew-and-committee cards, membership tiers, and race schedule
are written as a coherent set you can adapt section by section: swap the names,
prices, and race dates for your own, replace the placeholder photography with
real images, and the editorial voice stays intact. Every visitor-facing string in
the patterns is translatable, so the demo reads correctly in any locale.

== Installation ==

1. In your WordPress admin, go to Appearance → Themes → Add New.
2. Search for "Wake" or upload the theme zip.
3. Activate the theme.
4. Go to Appearance → Wake: Get started for setup steps.

== Frequently Asked Questions ==

= Is this theme free? =

Yes. Licensed GPLv2 or later, with no upsells or required paid extensions.

= Does it require WooCommerce? =

No. WooCommerce is supported but not required. Wake detects WooCommerce automatically and declares gallery support; no other integration is needed.

= How do I change the hero image? =

Open the Site Editor (Appearance → Editor), select the front-page template, click the hero image block, and replace it from the media library.

= Can I use a different font? =

Yes. Open the Site Editor, go to Styles → Typography, and change the font assignments. All font files must be self-hosted and OFL-compatible if you intend to redistribute the theme.

= Are the fonts included, or do I need to download them? =

The fonts are bundled in the theme — no downloads required. Literata and Jost are included as WOFF2 files in the assets/fonts/ directory and loaded via theme.json. They never phone home to Google or any external service.

== Accessibility ==

Wake is built to support an accessible site. What the theme ships:

* A keyboard "Skip to content" link, output on wp_body_open and translatable.
* Visible focus outlines on every focusable element (never removed without a
  replacement).
* Semantic landmarks: <header role="banner">, <main id="main-content">, and
  <footer role="contentinfo"> in every template.
* Exactly one h1 per template (post or query title, or an editor-fillable h1 on
  the blank-canvas template).
* Respect for the reduce-motion preference.

Accessibility also depends on the content you add — heading order, image alt
text, and colour contrast in your own palette choices. Keep your copy and media
to the same bar and the whole site stays welcoming.

== Compatibility ==

* Requires WordPress 6.7+ and PHP 7.4+.
* The footer copyright and credit lines use block bindings, which require
  WordPress 6.5+. WordPress 6.7+ is recommended for full FSE stability.

== Right-to-left (RTL) ==

Wake's stylesheets use CSS logical properties (margin-inline, padding-inline,
inset-inline) for flow-relative spacing, so WordPress 6.7+ handles block-level
direction conversion automatically. Caveat: a small number of decorative rules
remain physical by necessity — the drop-cap float and the off-screen skip-link
offset — and a handful of symmetric absolute insets (left:0; right:0) on the
hero overlay are direction-neutral. If RTL rendering issues appear, verify you
are on WordPress 6.7+ with current logical-property browser support.

== Developers ==

Wake is built on the Colophon CORE/SKIN architecture. CORE files carry the
portable infrastructure shared across the theme family — theme supports, asset
enqueue, block bindings, the skip link, the WP-CLI commands — and are tagged
[CORE] in their docblocks. The SKIN file (inc/skin.php) carries only this
theme's personality: its image sizes, font preloads, and block styles. A re-skin
overwrites the CORE files without ever clobbering the SKIN, so a fix in the core
reaches every theme in the line and a theme's identity is never collateral
damage. Templates and patterns stay in the standard block-theme locations.

The theme exposes filters for common overrides. All examples are
PHP 7.4-compatible.

Filter: wake/developer_guide_url
The URL behind the "developer guide" link on the Appearance → Wake: Get started
screen. Fires from get_started_content() in inc/admin.php.
Default: 'https://thisismyurl.com/colophon'

    add_filter( 'wake/developer_guide_url', function ( $url ) {
        return 'https://example.com/my-developer-guide';
    } );

Filter: wake/copyright_date_format
The PHP date() format for the footer copyright year. Fires from inc/bindings.php.
Default: 'Y' (four-digit year)

    add_filter( 'wake/copyright_date_format', function ( $format ) {
        return 'Y';
    } );

Filter: wake/footer_credit
The footer credit line bound into the footer template part. Fires from
inc/bindings.php. Return an empty string to remove it in code.
Default: the theme credit text.

    add_filter( 'wake/footer_credit', function ( $credit ) {
        return '';
    } );

Filter: wake/onboarding_capability
The capability required to view the Get started admin screen. Fires from
inc/admin.php.
Default: 'edit_theme_options'

    add_filter( 'wake/onboarding_capability', function ( $cap ) {
        return 'manage_options';
    } );

Filter: wake/preload_fonts
An array of font-file URLs to emit as <link rel="preload"> hints. Fires from
inc/assets.php.
Default: array() (no preloads)

    add_filter( 'wake/preload_fonts', function ( $fonts ) {
        $fonts[] = get_template_directory_uri() . '/assets/fonts/literata.woff2';
        return $fonts;
    } );

== Changelog ==

= 1.6165.1329 =
Accessibility — colour contrast (WCAG 2.2 AA, 1.4.3), Nordic edition:
* Footer link hover/focus moved off the wake-brass palette token onto a fixed
  warm-gold chrome token. The footer ground is edition-stable (a fixed deep
  navy), so a palette-bound hover was unsafe: brass fell to 2.92:1 here in
  Nordic, and the brass-tint token inverts to a dark brown (1.13:1) in Dusk. The
  fixed hover keeps the warm feel and clears AA in every edition (9.72:1).
* Subscribe call-to-action ink is now an edition-aware token. The button keeps
  its brass fill, and dark ink still clears AA on the warm-gold brass in five
  editions (Coastal 5.11:1 to Dusk 9.65:1); Nordic mutes brass to a cool taupe
  where dark ink fell to 3.03:1, so the Nordic variation alone flips the ink to
  white (6.22:1). The button reads as the primary CTA in all six editions.

Maintenance:
* Removed a redundant primary/footer nav-menu registration from the skin setup;
  those two locations are registered once in the core setup, and the skin now
  registers only its own social and section-nav locations.
* Corrected a stale docblock that named the copyright binding source
  "colophon/copyright"; the registered source is "wake/copyright".

Requirements:
* "Tested up to" raised to 7.0 (the current stable WordPress release).
* Bumped the languages/wake.pot Project-Id-Version to match this release.

= 1.6165.1328 =
Accessibility — colour contrast (WCAG 2.2 AA, 1.4.3):
* Audited every text/background pair in the default palette and all five style
  variations (Coastal, Dusk, Fog, Midnight Sail, Nordic) by relative-luminance
  computation. Fixed every normal-size pair below 4.5:1 and every large-text/UI
  pair below 3:1; the full matrix now clears AA in all six editions.
* Date and metadata text moved from brass to the steel ink. Brass as small text
  sat near 3:1 on the light reading grounds and inverted unpredictably across
  variations; it is now reserved for non-text accents (the tide-rule separator,
  borders, accent surfaces, and the one subscribe button), where contrast rules
  do not apply.
* Header and footer chrome now paint from edition-stable tokens (a fixed
  deep-navy ground with cream text) instead of the inverting palette tokens.
  The masthead previously collapsed to dark-on-dark in the Dusk edition, where
  the cream token flips to near-black on the dark chrome ground.
* Tertiary headings (h6), post meta, the race-schedule table header, the
  coordinates block style, and the section-navigation band moved off the fog and
  brass tokens onto steel or white so they track their grounds in every edition.
* Removed a hardcoded cream colour literal from the membership "featured" card,
  which painted cream-on-cream once its void ground inverted to a light edition.
* Reworked the race-status chips (Open / Pending) onto AA-clearing steel
  pairings; the brass and rule grounds they used failed in inverted editions.
* Corrected the Midnight Sail and Fog variation palettes so the fog and
  brass-tint tokens keep their luminance role (muted-light and light-accent),
  matching how every other edition already uses them, and added the explicit
  rule / deep / cream entries those two palettes were inheriting silently.

Documentation:
* Reworded the readme colour-discipline note to match the shipped behaviour
  (brass is an accent, not date text) so the description is true on disk.
* Repointed the Theme URI from a 404 path to the resolving project page.

= 1.6163.2234 =
Internationalisation:
* Made the remaining static visitor prose translatable. The 404 "page not found"
  line, the single-post "More to Read" heading, and the footer "Navigate" and
  "Follow" column labels now bind their text to the wake/ui-label block-bindings
  source, which resolves through __() in inc/bindings.php, so a non-English site
  renders this chrome in its own locale.
* Removed hardcoded English explanatory prose from the index, archive, and
  front-page no-results states; those states now rely on a heading plus a search
  form to retry rather than an untranslated explanation.
* Removed a duplicate, untranslatable wp:html skip link from the header part; the
  canonical skip link is output in PHP on wp_body_open via esc_html__().
* Wrapped every visitor-facing string in the bundled patterns in esc_html_e() /
  __() so the demo content is fully translatable.

Documentation:
* Reframed the accessibility wording from an unqualified "WCAG 2.2 AA accessible"
  claim to specific, verifiable features (skip link, focus outlines, landmarks,
  one h1 per template).
* Led the Developers section with the CORE/SKIN inheritance story, and added a
  Demo content note describing the curated sailing-club narrative.
* Documented the public theme filters, including wake/developer_guide_url, with
  PHP 7.4-compatible examples (see the Developers section).
* Documented the RTL logical-properties approach and its physical-property
  caveats, and the WordPress 6.5+ requirement for the block-bindings footer.

Maintenance:
* Synced the theme version across style.css, readme.txt, and inc/bootstrap.php.
* Tidied stale parent-line theme-name references in CORE docblocks to "Wake".
* Removed the optional GitHub self-updater and its opt-in filter for the
  WordPress.org build; the directory supplies the update path, so a theme that
  ships its own updater is not eligible. Guarded the WP-CLI loader with a
  file_exists() check so the command file degrading out of the distribution zip
  can never fatal a wp-cli call.

Requirements:
* Corrected "Tested up to" to 6.8 (the current stable WordPress release) and the
  PHP requirement to 7.4, matching the syntax the distributed code actually uses.
* Regenerated languages/wake.pot from the shipped source so the catalog matches
  the registered pattern categories and the current version.

= 1.6148.1701 =
* Accessibility (WCAG 2.1 1.3.1): explicit h1 headings on the archive and search
  titles; an h1 page heading on the index template; an empty, editor-fillable h1
  on the blank-canvas page template. (Front page and 404 already had one.)
* Hardened comment-form attribute injection: a guarded preg_replace (single
  replacement, null-check, no-match fallback) replaces a naive str_replace that
  could double-inject or mangle markup.
* CA-tier design elevation: editorial split hero (42/58 column), asymmetric
  story-grid (lead + shorts), drop-cap CSS, wake-coordinates and wake-log-entry
  block styles.
* Brass colour discipline: restricted to dates/metadata + tide-rule separator only.

= 1.6148 =
* Initial release.
* Patterns: editorial-hero (editorial split), story-grid (asymmetric 58/40 lead + shorts), navigation-band, tidal-log, footer-cta, voyage-log-archive, crew-cards, membership-tiers, race-schedule.
* Templates: front-page, index, single, archive, page, page-wide, page-blank, search, 404.
* Block styles: wake-hero-overlay, wake-tide-break, wake-log-entry, wake-log-entry (paragraph), wake-coordinates (paragraph), wake-brass-rule (heading), wake-bleed (image).

== Credits ==

= Literata =
* Copyright 2017 The Literata Project Authors (https://github.com/googlefonts/literata)
* License: SIL OFL 1.1 (https://openfontlicense.org/open-font-license-official-text/)
* Source: https://github.com/googlefonts/literata

= Jost =
* Copyright 2019 The Jost Project Authors (https://github.com/indestructibletype/Jost)
* License: SIL OFL 1.1 (https://openfontlicense.org/open-font-license-official-text/)
* Source: https://github.com/indestructibletype/Jost

== License ==

Wake WordPress Theme is licensed under the GNU General Public License v2 or later.

This program is free software: you can redistribute it and/or modify it under the
terms of the GNU General Public License as published by the Free Software Foundation,
either version 2 of the License, or (at your option) any later version.

== Copyright ==

Wake WordPress Theme, Copyright 2026 Christopher Ross
Wake is distributed under the terms of the GNU GPL.
