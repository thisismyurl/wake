<?php
/**
 * Title: Footer CTA — Subscribe to the Journal
 * Slug: wake/footer-cta
 * Categories: wake-cta
 * Viewport Width: 1280
 * Inserter: true
 *
 * Pattern: Footer CTA — Subscribe to the Journal
 *
 * Two-column CTA on a void (near-black navy) background. Brass button.
 * This is the one moment in the theme where brass appears at scale.
 *
 * @package wake
 */
?>
<!-- wp:group {"className":"wake-pattern-footer-cta","metadata":{"categories":["wake-cta"],"name":"Footer CTA — Subscribe"},"style":{"color":{"background":"var:preset|color|wake-void"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group wake-pattern-footer-cta" style="background-color:var(--wp--preset--color--wake-void)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|16"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"300","fontStyle":"italic","fontSize":"var:preset|font-size|4xl","lineHeight":"1.1","letterSpacing":"-0.018em"},"color":{"text":"var:preset|color|wake-white"}}} -->
			<h2 style="color:var(--wp--preset--color--wake-white)"><?php esc_html_e( 'Every sea has its own story.', 'wake' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%">
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"var:preset|font-size|base"},"color":{"text":"var:preset|color|wake-fog"},"spacing":{"margin":{"bottom":"var:preset|spacing|6"}}}} -->
			<p style="color:var(--wp--preset--color--wake-fog)"><?php esc_html_e( 'Independent maritime journalism. No algorithm. No noise. Offshore, cruising, racing, and the people who live at sea.', 'wake' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-buttons">
				<!-- Brass button ink is the edition-aware --wake-cta-ink token, not a
				     literal: dark ink (#14110b) clears AA on the warm-gold brass in five
				     editions (Coastal 5.11 → Dusk 9.65), but Nordic mutes brass to a cool
				     taupe (#686050) where dark ink falls to 3.03:1. Nordic redefines the
				     token to white via styles/nordic.json (white on #686050 = 6.22:1). -->
				<!-- wp:button {"style":{"color":{"background":"var:preset|color|wake-brass","text":"var(--wake-cta-ink)"},"typography":{"fontFamily":"var:preset|font-family|jost","fontWeight":"600","letterSpacing":"0.05em"},"border":{"radius":"0"}}} -->
				<div class="wp-block-button">
					<a class="wp-block-button__link wp-element-button" href="/subscribe" style="background-color:var(--wp--preset--color--wake-brass);color:var(--wake-cta-ink)"><?php esc_html_e( 'Subscribe to the journal', 'wake' ); ?></a>
				</div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"var:preset|color|wake-white","background":"transparent"},"border":{"color":"var:preset|color|wake-white","style":"solid","width":"1px","radius":"0"},"typography":{"fontFamily":"var:preset|font-family|jost","fontWeight":"500"}}} -->
				<div class="wp-block-button is-style-outline">
					<a class="wp-block-button__link wp-element-button" href="/archive" style="color:var(--wp--preset--color--wake-white);border:1px solid var(--wp--preset--color--wake-white)"><?php esc_html_e( 'View back issues', 'wake' ); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
