<?php
/**
 * Title: Crew & Committee Cards
 * Slug: wake/crew-cards
 * Categories: wake-crew
 * Viewport Width: 1280
 * Inserter: true
 *
 * Three-column crew and committee cards on a salt-white background.
 * Each card: portrait image (1:1 crop), name, role, and bio paragraph.
 *
 * Replace the placeholder portrait images with photos of your actual
 * committee members. The wake-portrait image size (600×750, 4:5) is
 * registered by the theme; the 1:1 aspect-ratio cropping in the card
 * is set in CSS and does not require a separate image size.
 *
 * @package wake
 */
?>
<!-- wp:group {"className":"wake-pattern-crew-cards","metadata":{"categories":["wake-crew"],"name":"Crew &amp; Committee Cards"},"style":{"color":{"background":"var:preset|color|wake-salt"},"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group wake-pattern-crew-cards" style="background-color:var(--wp--preset--color--wake-salt)">

	<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-steel"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
	<p style="font-family:var(--wp--preset--font-family--jost);font-size:0.6875rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:var(--wp--preset--color--wake-steel)">The Committee</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"wake-crew-card","style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group wake-crew-card">

				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"wake-portrait","style":{"border":{"radius":"0"}}} -->
				<figure class="wp-block-image size-wake-portrait" style="aspect-ratio:1"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wake-hero.jpg" alt="<?php esc_attr_e( 'Portrait photograph — replace with a photo of the committee member', 'wake' ); ?>" style="aspect-ratio:1;object-fit:cover;max-width:120px" /></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":4,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"500","fontSize":"var:preset|font-size|lg"},"color":{"text":"var:preset|color|wake-void"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|1"}}}} -->
				<h4 style="font-family:var(--wp--preset--font-family--literata);font-weight:500;color:var(--wp--preset--color--wake-void)">Committee Member Name</h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-steel"},"spacing":{"margin":{"bottom":"var:preset|spacing|3"}}}} -->
				<p style="font-family:var(--wp--preset--font-family--jost);font-size:0.6875rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--wp--preset--color--wake-steel)">Role — Commodore</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontSize":"var:preset|font-size|sm","lineHeight":"1.65"},"color":{"text":"var:preset|color|wake-steel"}}} -->
				<p style="font-family:var(--wp--preset--font-family--literata);color:var(--wp--preset--color--wake-steel);line-height:1.65">Brief biography. The boat name, the water they've sailed, the years of service, and one detail that tells you who they are.</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"wake-crew-card","style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group wake-crew-card">

				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"wake-portrait","style":{"border":{"radius":"0"}}} -->
				<figure class="wp-block-image size-wake-portrait" style="aspect-ratio:1"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wake-hero.jpg" alt="<?php esc_attr_e( 'Portrait photograph — replace with a photo of the committee member', 'wake' ); ?>" style="aspect-ratio:1;object-fit:cover;max-width:120px" /></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":4,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"500","fontSize":"var:preset|font-size|lg"},"color":{"text":"var:preset|color|wake-void"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|1"}}}} -->
				<h4 style="font-family:var(--wp--preset--font-family--literata);font-weight:500;color:var(--wp--preset--color--wake-void)">Committee Member Name</h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-steel"},"spacing":{"margin":{"bottom":"var:preset|spacing|3"}}}} -->
				<p style="font-family:var(--wp--preset--font-family--jost);font-size:0.6875rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--wp--preset--color--wake-steel)">Role — Race Officer</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontSize":"var:preset|font-size|sm","lineHeight":"1.65"},"color":{"text":"var:preset|color|wake-steel"}}} -->
				<p style="font-family:var(--wp--preset--font-family--literata);color:var(--wp--preset--color--wake-steel);line-height:1.65">Brief biography. The boat name, the water they've sailed, the years of service, and one detail that tells you who they are.</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"wake-crew-card","style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group wake-crew-card">

				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"wake-portrait","style":{"border":{"radius":"0"}}} -->
				<figure class="wp-block-image size-wake-portrait" style="aspect-ratio:1"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wake-hero.jpg" alt="<?php esc_attr_e( 'Portrait photograph — replace with a photo of the committee member', 'wake' ); ?>" style="aspect-ratio:1;object-fit:cover;max-width:120px" /></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":4,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"500","fontSize":"var:preset|font-size|lg"},"color":{"text":"var:preset|color|wake-void"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|1"}}}} -->
				<h4 style="font-family:var(--wp--preset--font-family--literata);font-weight:500;color:var(--wp--preset--color--wake-void)">Committee Member Name</h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-steel"},"spacing":{"margin":{"bottom":"var:preset|spacing|3"}}}} -->
				<p style="font-family:var(--wp--preset--font-family--jost);font-size:0.6875rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--wp--preset--color--wake-steel)">Role — Journal Editor</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontSize":"var:preset|font-size|sm","lineHeight":"1.65"},"color":{"text":"var:preset|color|wake-steel"}}} -->
				<p style="font-family:var(--wp--preset--font-family--literata);color:var(--wp--preset--color--wake-steel);line-height:1.65">Brief biography. The boat name, the water they've sailed, the years of service, and one detail that tells you who they are.</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
