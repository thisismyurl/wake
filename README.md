# Wake

A free, photography-first full-site-editing WordPress theme for coastal and maritime journals, travel editorial, and outdoor-focused publications.

[Download from WordPress.org](https://wordpress.org/themes/wake/) · [Releases](https://github.com/thisismyurl/wake/releases) · [Built on Colophon](https://github.com/thisismyurl/colophon)

---

## Why I built it this way

Wake carries two meanings deliberately. The wake of a vessel is the trail it leaves through water — the visible record of where it's been. A wake is also a vigil, a watchfulness, the act of sitting with something that has passed. Both meanings live in editorial that takes place outdoors or near the water: the passage itself, and the reflection afterward.

The design problem for photography editorial is that most themes do too much to the photograph. Rounded corners, drop shadows, gallery carousels, caption overlays, floating social share buttons — the theme competes with the image for attention. A person who shoots coastlines or documents maritime work has spent real time and craft getting that photograph. The theme's job is to get out of the way.

Wake gets out of the way. The hero pattern is full-bleed — edge to edge, no border, no padding, viewport height. The article template uses a single reading column with generous margins and no sidebar. There are no related-post widgets, no infinite scroll, no social sharing bars that float over the image as you scroll. The photograph gets the frame; the text gets the quiet reading space.

The Tidal Log pattern is the one thing I built specifically for maritime and outdoor editorial that didn't exist anywhere else in the WordPress ecosystem. It's a journal entry format with a structured header: date, location, conditions (wind, tide, weather), and a long-form body. Sailors keep logs. Coastal rangers keep logs. Field researchers keep logs. WordPress has no pattern for a log entry. Now it does.

Literata is a contemporary serif designed specifically for screen reading at body sizes — it was commissioned for Google Play Books, which means it's been tested against the reading conditions that matter: backlit screens, varying DPI, long sessions. Jost provides the clean geometric counterpoint for headers and navigation. The combination is editorial without being newspaper-formal.

---

## Design decisions

- **Full-bleed photography hero with no chrome** — no caption overlay, no gradient scrim, no border. The image gets the full first viewport.
- **No sidebars in any template** — photography editorial isn't scanned; it's read. A sidebar competes with the image and breaks the reading rhythm. Wake has none.
- **Tidal Log pattern** — structured journal entry with date, location, and conditions header. Built for maritime and field editorial where the context of an entry matters as much as the content.
- **Story Grid pattern** — asymmetric 2+1 card layout for front pages with a lead story and two secondary stories. Avoids the uniform-grid blog-index look.
- **Literata / Jost type system** — Literata for all reading text (designed for long-form screen reading), Jost for navigation and labels (geometric, legible at small sizes, never fights Literata).

---

## Getting started

1. Install Wake from Appearance → Themes, or upload the zip from [Releases](https://github.com/thisismyurl/wake/releases).
2. Set a strong landscape photograph as your front-page hero. Wake is built around photography — the template structure assumes you have one.
3. Open the Block Inserter, choose Patterns, and find the Wake group. Use Story Grid for the front page and Tidal Log for journal or dispatch entries.

---

## Technical notes

- WordPress 6.4 or newer, PHP 8.1 or newer
- Full-site editing (FSE/Gutenberg) — no Classic Editor support
- WCAG 2.2 AA compliant
- Zero JavaScript
- OFL-licensed fonts: Literata, Jost
- Self-hosted fonts — no Google Fonts requests

## About Christopher Ross

This theme is built and maintained by [Christopher Ross](https://thisismyurl.com/), the WordPress development and technical SEO practice of Christopher Ross. I help teams build WordPress sites that stay secure, fast, and maintainable, and I build a small, free theme line for people who want a real accessibility and performance floor without starting from scratch.

### My background

- On the web since 1996, and in WordPress since 2007
- WordPress.org plugin developer with 19 plugins published since 2009
- Technical SEO practitioner focused on performance, security, and search visibility
- Lead instructor and curriculum architect at the M.L. Campbell Training Center, the Sherwin-Williams® international training facility for its industrial wood division

### Ways to connect

- **Website:** [thisismyurl.com](https://thisismyurl.com/)
- **WordPress.org:** [profiles.wordpress.org/thisismyurl](https://profiles.wordpress.org/thisismyurl/)
- **GitHub:** [github.com/thisismyurl](https://github.com/thisismyurl)
- **LinkedIn:** [linkedin.com/in/thisismyurl](https://linkedin.com/in/thisismyurl)


## License

GPLv2 or later. See [LICENSE](LICENSE).

The fonts bundled in `assets/fonts/` are licensed under the SIL Open Font License (OFL) 1.1.
---
*This project follows the [10 Core Pillars](PILLARS.md). Support quality work [here](https://github.com/sponsors/thisismyurl).*
