<?php
/**
 * Title: Editorial Hero
 * Slug: wake/editorial-hero
 * Categories: wake-editorial
 * Description: Photography-forward editorial hero — headline left against wake-void, featured photograph filling the right column. A print-precedented two-column split suited to feature stories and voyage reports.
 * Viewport Width: 1280
 * Inserter: true
 *
 * Photography-forward editorial split: headline and standfirst in the
 * left column against wake-void; featured photograph filling the right
 * column with no overlay. A print-precedented layout — the *Latitude 38*
 * front-page format — where the image is evidence, not wallpaper.
 *
 * Heading level: the section headline is h2, not h1 — this pattern is
 * inserted into pages that already render the post/page title as the single
 * h1, so an h1 here would create a duplicate (WCAG 2.1 1.3.1). Promote to h1
 * only on a page-blank/landing layout that has no other title.
 *
 * Image: replace the src below with your editorial photograph. Portrait
 * and square crops read well; the image fills the column to any height.
 * Alt text: describe the scene and what is happening — the image is
 * editorial content, not decoration. Never leave alt empty.
 *
 * @package wake
 */
?>
<!-- wp:group {"className":"wake-pattern-editorial-split","metadata":{"categories":["wake-editorial"],"name":"Editorial Hero"},"style":{"color":{"background":"var:preset|color|wake-void"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group wake-pattern-editorial-split" style="background-color:var(--wp--preset--color--wake-void)">

	<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}},"verticalAlignment":"stretch"} -->
	<div class="wp-block-columns are-vertically-aligned-stretch">

		<!-- wp:column {"width":"42%","style":{"color":{"background":"var:preset|color|wake-void"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}}} -->
		<div class="wp-block-column" style="flex-basis:42%;background-color:var(--wp--preset--color--wake-void);padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10)">

			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-fog"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
			<p style="font-family:var(--wp--preset--font-family--jost);font-size:0.6875rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:var(--wp--preset--color--wake-fog)"><?php echo esc_html( __( 'Offshore', 'wake' ) ); ?>&nbsp;·&nbsp;<?php echo esc_html( __( 'Cruising', 'wake' ) ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"600","lineHeight":"1.06","letterSpacing":"-0.03em","textWrap":"balance"},"color":{"text":"var:preset|color|wake-white"},"spacing":{"margin":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|6"}}}} -->
			<h2 style="font-family:var(--wp--preset--font-family--literata);font-weight:600;line-height:1.06;letter-spacing:-0.03em;text-wrap:balance;color:var(--wp--preset--color--wake-white)"><?php esc_html_e( 'The headline that pulls a sailor out of the harbour and keeps them reading.', 'wake' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontStyle":"italic","fontSize":"var:preset|font-size|lg","lineHeight":"1.5"},"color":{"text":"var:preset|color|wake-fog"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
			<p style="font-family:var(--wp--preset--font-family--literata);font-style:italic;font-size:var(--wp--preset--font-size--lg);line-height:1.5;color:var(--wp--preset--color--wake-fog)"><?php esc_html_e( 'The standfirst earns its place here — one sentence, no more, drawing the reader toward the story the headline promises.', 'wake' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"var:preset|color|wake-white","background":"transparent"},"border":{"color":"var:preset|color|wake-white","style":"solid","width":"1px","radius":"0"},"typography":{"fontFamily":"var:preset|font-family|jost","fontWeight":"600","letterSpacing":"0.05em"}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" style="color:var(--wp--preset--color--wake-white);background-color:transparent;border:1px solid var(--wp--preset--color--wake-white)"><?php esc_html_e( 'Read the story', 'wake' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"wake-editorial-split__img-col","width":"58%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
		<div class="wp-block-column wake-editorial-split__img-col" style="flex-basis:58%;padding:0">

			<!-- wp:image {"sizeSlug":"wake-hero","style":{"border":{"radius":"0"}}} -->
			<figure class="wp-block-image size-wake-hero"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wake-hero.jpg" alt="<?php esc_attr_e( 'Replace this with a description of your editorial photograph — describe the scene and what is happening', 'wake' ); ?>" /></figure>
			<!-- /wp:image -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
