<?php
/**
 * Title: About Split
 * Slug: wake/about-split
 * Categories: wake-sections
 * Viewport Width: 1200
 * Inserter: true
 *
 * A dock photograph beside the marina's story, with a dock-signage advisory
 * (the wk-notice paragraph style) demonstrated in place — the everyday
 * "fuel dock closed for maintenance" note a marina actually posts.
 *
 * The pattern ships without a photograph so nothing needs a separate license
 * — the same convention every other theme in this line uses (see Masthead's
 * breaking-story.php). Click the empty image block to add a real dock photo,
 * then write real alt text describing it.
 *
 * @package wake
 */
?>
<!-- wp:group {"tagName":"section","className":"cl-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"1140px"}} -->
<section class="wp-block-group cl-section" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|10"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%">
			<!-- wp:image {"sizeSlug":"wake-wide","className":"cl-card","style":{"border":{"radius":"14px"}}} -->
			<figure class="wp-block-image size-wake-wide has-custom-border cl-card"><img alt="" style="border-radius:14px" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"52%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%">
			<!-- wp:paragraph {"className":"is-style-cl-eyebrow cl-eyebrow"} -->
			<p class="is-style-cl-eyebrow cl-eyebrow"><?php echo esc_html__( 'Since 1978', 'wake' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"fontSize":"xl"} -->
			<h2 class="wp-block-heading has-xl-font-size"><?php echo esc_html__( 'Run by people who are also out on the water', 'wake' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Beacon Point started as a single T-dock and a bait shed. Three generations later, we still answer the office phone ourselves, and the harbormaster still does the rounds by dinghy every evening at six.', 'wake' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- The wk-notice style: dock-signage advisory, applied to a plain
			     paragraph via the block toolbar. Real marina vocabulary, not a
			     generic "alert box" component borrowed from a SaaS kit. -->
			<!-- wp:paragraph {"className":"is-style-wk-notice"} -->
			<p class="is-style-wk-notice"><?php echo esc_html__( 'Fuel dock closed for scheduled maintenance, Tuesday 7–11am. Slips unaffected.', 'wake' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</section>
<!-- /wp:group -->
