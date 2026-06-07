<?php
/**
 * Title: Editorial Hero
 * Slug: wake/editorial-hero
 * Categories: wake-editorial
 * Description: Full-bleed photography hero with content anchored to the bottom-left. Replace the placeholder image with a featured photograph.
 * Viewport Width: 1280
 * Inserter: true
 *
 * Full-bleed photography hero with content anchored to the bottom-left.
 * Features a gradient overlay that clears the top third of the photograph.
 * The headline reads against the overlay; the photograph dominates above it.
 *
 * Image: replace the src below with your editorial photograph. The
 * wake-hero image size (1440×810, 16:9) is the target crop.
 * Alt text: describe the photograph for screen readers — the image is
 * editorial content, not decoration. "alt" must not remain empty.
 *
 * Hardcoded colours have been replaced with theme.json token references
 * so Global Styles customisation is respected throughout.
 *
 * @package wake
 */
?>
<!-- wp:group {"className":"wake-pattern-hero","metadata":{"categories":["wake-editorial"],"name":"Editorial Hero"},"style":{"dimensions":{"minHeight":"88dvh"},"color":{"background":"var:preset|color|wake-void"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group wake-pattern-hero" style="background-color:var(--wp--preset--color--wake-void);min-height:88dvh">

	<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"wake-hero","className":"wake-hero-bg"} -->
	<figure class="wp-block-image size-wake-hero wake-hero-bg" style="aspect-ratio:16/9"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wake-hero.jpg" alt="<?php esc_attr_e( 'Replace this with a description of your editorial photograph', 'wake' ); ?>" style="aspect-ratio:16/9;object-fit:cover" /></figure>
	<!-- /wp:image -->

	<!-- wp:group {"className":"wake-hero__overlay","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|16","left":"var:preset|spacing|8","right":"var:preset|spacing|8"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
	<div class="wp-block-group wake-hero__overlay">

		<!-- wp:paragraph {"className":"is-style-wake-standfirst","style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-fog"}}} -->
		<p class="is-style-wake-standfirst" style="color:var(--wp--preset--color--wake-fog)">Offshore &nbsp;·&nbsp; Cruising</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"className":"wake-hero__title","style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"600","lineHeight":"1.06","letterSpacing":"-0.025em","textWrap":"balance"},"color":{"text":"var:preset|color|wake-white"},"spacing":{"margin":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|5"}}}} -->
		<h1 class="wake-hero__title" style="color:var(--wp--preset--color--wake-white)">The headline that pulls a sailor out of the harbour and keeps them reading.</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"wake-hero__deck","style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontStyle":"italic","fontSize":"var:preset|font-size|lg"},"color":{"text":"var:preset|color|wake-salt"},"spacing":{"margin":{"bottom":"var:preset|spacing|8"}}}} -->
		<p class="wake-hero__deck" style="color:var(--wp--preset--color--wake-salt)">The standfirst earns its place here — one sentence, no more, drawing the reader toward the story the headline promises.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"var:preset|color|wake-white","background":"transparent"},"border":{"color":"var:preset|color|wake-white","style":"solid","width":"1px"},"typography":{"fontFamily":"var:preset|font-family|jost","fontWeight":"600","letterSpacing":"0.05em"}}} -->
			<div class="wp-block-button is-style-outline">
				<a class="wp-block-button__link wp-element-button" href="#" style="color:var(--wp--preset--color--wake-white);border:1px solid var(--wp--preset--color--wake-white)">Read the story</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
