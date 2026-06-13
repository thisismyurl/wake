=== Wake ===

Contributors: thisismyurl
Tags: blog, full-site-editing, block-patterns, custom-colors, custom-logo, custom-menu, editor-style, featured-images, accessibility-ready, rtl-language-support, translation-ready, wide-blocks
Tested up to: 7.0
Requires at least: 6.7
Requires PHP: 8.1
Stable tag: 1.6163.2234
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A photography-forward coastal lifestyle theme for sailing clubs, maritime journals, and sea-going storytellers.

== Description ==

Wake is a photography-forward full-site-editing theme for sailing clubs, maritime journals, and sea-going storytellers. Named for the trail a vessel leaves on water — the evidence of passage.

Features full-bleed hero photography, a tidal rhythm in its spacing scale, and Literata paired with Jost for an editorial voice that feels at home beside the sea. WCAG 2.2 AA accessible, Core Web Vitals optimised, self-hosted SIL OFL fonts, RTL-ready via CSS logical properties, zero plugin dependencies.

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

== Changelog ==

= 1.6163.2234 =
* Accessibility (WCAG 2.1 1.3.1): the archive and search titles are now explicit
  h1 headings; the index template gains an h1 page heading; the blank-canvas page
  template gains an empty, editor-fillable h1. (Front page and 404 already had one.)
* Hardened comment-form attribute injection: a guarded preg_replace (single
  replacement, null-check, no-match fallback) replaces a naive str_replace that
  could double-inject or mangle markup.
* The Get started developer-guide URL is filterable via wake/developer_guide_url.

= 1.6148.1701 =
* CA-tier design elevation: editorial split hero (42/58 column), asymmetric story-grid (lead + shorts), drop-cap CSS, wake-coordinates and wake-log-entry block styles.
* Brass colour discipline: restricted to dates/metadata + tide-rule separator only.
* Tested up to: 7.0 (current stable).

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
