=== Wake ===
Contributors: thisismyurl
Requires at least: 7.0
Tested up to: 7.1
Requires PHP: 8.1
Stable tag: 1.6162.1430
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: full-site-editing, block-patterns, editor-style, custom-colors, custom-logo, custom-menu, featured-images, translation-ready, rtl-language-support, wide-blocks, one-column, two-columns, threaded-comments, e-commerce

Wake WordPress Theme, Copyright 2026 Christopher Ross
Wake is distributed under the terms of the GNU GPL v2 or later.

A full-site-editing theme for marinas, boat and yacht charter operators, sailing schools, and marina management companies — built on the Colophon starter core.

== Description ==

Wake is built for the people who run a working waterfront, not for a stock photo of one.

Every marina site in the directory reaches for the same three components — a hero photo, a feature grid, a contact form — and stops there. Wake goes one step further: it ships a **slip-status board**, a berth-availability pattern styled on the whiteboard behind the dock office window. Slip number, vessel class, length overall, and a colour-coded status pill — Available, Reserved, Waitlist — laid out the way a harbormaster already tracks it on paper. No other WordPress theme in the directory ships this, because it isn't a hospitality concept; it's a working-waterfront one.

The type pairing carries the rest of the personality: DM Sans, a geometric grotesque, sets the headlines and the UI in bold, tracked caps; IBM Plex Sans — a technical, instrument-panel humanist sans — carries the reading and the rate sheet. Both are self-hosted OFL fonts; neither phones home. The palette runs deep harbor teal into near-black, with one working blue accent used sparingly and two functional status colours reserved for the slip board alone.

Wake also carries a dock-signage notice style — the amber hazard-stripe paragraph a marina already posts for a fuel-dock closure or a storm advisory — so an editor can flag something the way the dock already does, without reaching for a generic "alert box."

It inherits everything the Colophon core provides: zero front-end JavaScript, self-hosted OFL fonts, WCAG 2.2 AA accessibility scaffolding, a six-layer CSS cascade, and WooCommerce compatibility for a marina that sells chandlery goods or gift cards online.

* Full-site editing — every template and template part editable in the Site Editor.
* Slip Status Board — Wake's signature pattern, a colour-coded berth-availability board (see wake/slip-status-board).
* DM Sans (headings/UI) and IBM Plex Sans (body/data) — self-hosted OFL fonts, zero third-party requests.
* Dock-signage notice style (is-style-wk-notice) — a hazard-stripe paragraph for closures and advisories.
* Seven block patterns: a harbor hero, the service intro grid, the slip board, a priced services list, an about split, a testimonial & trust section, and a reserve CTA band.
* Zero front-end JavaScript, zero plugin dependencies.
* WCAG 2.2 AA accessibility — skip link, visible focus, sensible heading order, prefers-reduced-motion honoured globally.
* Core Web Vitals discipline — self-hosted fonts, font-display: swap, LCP font preloaded, no render-blocking requests.
* Six-layer CSS cascade (reset, base, layout, components, blocks, utilities).
* WP-CLI — wp wake version, info, flush.
* Filterable hooks at every extension point — content_width, skip_link_target, skip_link_label, register_nav_menus, copyright_date_format, register_image_sizes, register_block_styles, register_pattern_categories, onboarding_capability, get_started_content, and more.
* WooCommerce-compatible — for a marina shop selling chandlery goods, apparel, or gift cards.
* Translation-ready — every user-facing string is internationalised.
* RTL-ready through CSS logical properties.

== Setting up your site ==

Three touchpoints get you from an installed theme to a working marina site:

1. Settings > Reading. Choose a static front page — Wake's front-page.html template is built around the harbor hero and the slip board. Without a static front page assigned, your home page is a raw post stream.

2. Appearance > Editor. Open the Footer template part and update the dock office hours, VHF channels, phone number, and address. Open Styles to see the harbor palette and type choices.

3. Insert the Slip Status Board pattern on any page and edit the rows to match your own berths. It ships with five realistic demo rows; replace the slip numbers, vessel classes, and statuses with your own.

== Frequently Asked Questions ==

= Does this theme contact any third-party servers? =

No. DM Sans and IBM Plex Sans are bundled as self-hosted WOFF2 files inside the theme folder. No fonts load from Google Fonts, Adobe Fonts, or any other external service. No analytics or tracking scripts are included.

= Is the slip-status board connected to a real booking system? =

Out of the box, no — it ships as editable demo content you update by hand, the same as any other pattern. A developer who wants to drive it from post meta can bind the status paragraph to the `wake/slip-status` block-bindings source registered in inc/skin.php, which reads the `_wake_slip_status` meta key on the post being rendered. Themes should not create data, so registering that meta key (with `register_post_meta()`) is the site's or plugin's job; until it holds a value the board keeps whatever status text you typed into the pattern.

= Is this related to other themes in a line? =

Yes. Masthead, Margin, Quillwork, Ligature, and Gutter are each built on the same Colophon core: copied and re-skinned with their own type families, palettes, and template personalities. Each theme is standalone; installing Colophon is not required to use them.

= Can I add a different typeface? =

Yes. Add your font files to assets/fonts/, declare them in theme.json under settings.typography.fontFamilies, and assign them in Styles inside the Site Editor. The theme ships with DM Sans and IBM Plex Sans; nothing prevents you from adding others alongside them or replacing them entirely.

= How do I remove the footer credit? =

In the Site Editor, open the Footer template part and delete the "Built with Wake" paragraph — takes about 30 seconds. It carries no binding and no filter; it is one static line, on purpose.

== Installation ==

1. In your WordPress admin, go to Appearance > Themes > Add New.
2. Click Upload Theme, choose the Wake .zip, and click Install Now.
3. Click Activate.
4. Visit Appearance > Wake: Get started for setup guidance.

== Changelog ==

= 1.6162.1430 =
* Initial public release.
* Marina/marine-services skin on the Colophon core: DM Sans + IBM Plex Sans, harbor-teal palette, twelve WCAG-verified colour tokens including two functional status colours.
* Slip Status Board pattern (wake/slip-status-board) — the theme's signature feature, with a companion wake/slip-status block-bindings source for sites that want to drive it from post meta.
* Dock-signage notice block style (is-style-wk-notice) and icon-badge group style (is-style-wk-badge-icon).
* Seven patterns: harbor-hero, service-intro-grid, slip-status-board, services-list, about-split, testimonial-trust, reserve-cta-band.
* Footer template part rebuilt with dock-office hours, VHF channel details, and address — footer binding corrected to the theme's own wake/copyright source.
* Get-started admin page copy overridden for Wake's own audience and zero-JavaScript claim.

== Copyright ==

Wake WordPress Theme, (C) 2026 Christopher Ross.
Wake is distributed under the terms of the GNU General Public License v2 or later.

DM Sans, (C) 2014 The DM Sans Project Authors (https://github.com/googlefonts/dm-fonts).
DM Sans is distributed under the SIL Open Font License 1.1.

IBM Plex Sans, (C) 2017 IBM Corp., with Reserved Font Name "Plex".
IBM Plex Sans is distributed under the SIL Open Font License 1.1.
https://github.com/IBM/plex

The theme ships with no photographs, so no image credit is required. The
harbor-hero and about-split patterns include an empty image block — add
your own marina photo and describe it in the alt text.
