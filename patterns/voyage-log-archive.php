<?php
/**
 * Title: Voyage Log Archive
 * Slug: wake/voyage-log-archive
 * Categories: wake-editorial
 * Viewport Width: 1280
 * Inserter: true
 *
 * Archive header band and log-entry query loop for a Voyage Log section.
 * Drop this pattern into a custom archive template or Page template to
 * display a category or tag archive in Wake's ship's-log format.
 *
 * Customise the eyebrow text ("Archive"), the heading, and the standfirst
 * to name your specific section (e.g., "North Channel", "Lake Erie Series").
 *
 * Heading level: the section title is h2, not h1 — this pattern is inserted
 * into pages that already render the page or archive title as the single h1,
 * so an h1 here would create a duplicate (WCAG 2.1 1.3.1). Promote to h1 only
 * on a page-blank/landing layout that has no other title.
 *
 * @package wake
 */
?>
<!-- wp:group {"className":"wake-pattern-voyage-archive","metadata":{"categories":["wake-editorial"],"name":"Voyage Log Archive"},"style":{"color":{"background":"var:preset|color|wake-salt"},"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group wake-pattern-voyage-archive" style="background-color:var(--wp--preset--color--wake-salt)">

	<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-steel"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
	<p style="font-family:var(--wp--preset--font-family--jost);font-size:0.6875rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:var(--wp--preset--color--wake-steel)"><?php esc_html_e( 'Archive', 'wake' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"600","fontSize":"var:preset|font-size|4xl","letterSpacing":"-0.02em","lineHeight":"1.1"},"color":{"text":"var:preset|color|wake-void"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
	<h2 style="font-family:var(--wp--preset--font-family--literata);font-weight:600;letter-spacing:-0.02em;line-height:1.1;color:var(--wp--preset--color--wake-void)"><?php esc_html_e( 'The Voyage Log', 'wake' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontStyle":"italic","fontSize":"var:preset|font-size|lg","lineHeight":"1.55"},"color":{"text":"var:preset|color|wake-steel"}}} -->
	<p style="font-family:var(--wp--preset--font-family--literata);font-style:italic;color:var(--wp--preset--color--wake-steel);line-height:1.55"><?php esc_html_e( 'A record of passages, seasons, and crew. Every voyage earns an entry; every entry is the evidence it happened.', 'wake' ); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"wake-pattern-voyage-list","metadata":{"categories":["wake-editorial"],"name":"Voyage Log Archive"},"style":{"color":{"background":"var:preset|color|wake-white"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|16"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group wake-pattern-voyage-list" style="background-color:var(--wp--preset--color--wake-white)">

	<!-- wp:query {"queryId":10,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"layout":{"type":"default"}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"layout":{"type":"default"}} -->

			<!-- wp:group {"className":"wake-log-list-entry","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
			<div class="wp-block-group wake-log-list-entry">

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">

					<!-- wp:post-terms {"term":"category","style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-steel"},"spacing":{"margin":{"bottom":"var:preset|spacing|1"}}}} /-->

					<!-- wp:post-title {"isLink":true,"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"500","fontSize":"var:preset|font-size|xl","lineHeight":"1.25"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3"}}}} /-->

					<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontSize":"var:preset|font-size|base","lineHeight":"1.7"},"color":{"text":"var:preset|color|wake-steel"}}} /-->

				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"wake-log-list-entry__meta","style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group wake-log-list-entry__meta">

					<!-- wp:post-date {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"var:preset|font-size|sm","fontWeight":"500","letterSpacing":"0.05em"},"color":{"text":"var:preset|color|wake-steel"}}} /-->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|wake-steel"}}} -->
			<p style="color:var(--wp--preset--color--wake-steel)"><?php esc_html_e( 'No entries logged yet. Publish your first post to start the record.', 'wake' ); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->

		<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"},"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontWeight":"600","fontSize":"var:preset|font-size|sm","letterSpacing":"0.04em"},"spacing":{"margin":{"top":"var:preset|spacing|12"}}}} -->
			<!-- wp:query-pagination-previous {"label":"← Previous"} /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next {"label":"Next →"} /-->
		<!-- /wp:query-pagination -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
