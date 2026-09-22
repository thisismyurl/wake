<?php
/**
 * Title: Harbor Hero
 * Slug: wake/harbor-hero
 * Categories: wake-hero
 * Viewport Width: 1400
 * Inserter: true
 *
 * Full-bleed opening section: an aerial marina photograph under a harbor-dusk
 * gradient, a tracked eyebrow, a short bold headline, a deck line, and a
 * primary CTA. Use as the first block on the front page.
 *
 * The pattern ships without a photograph so nothing needs a separate license
 * — the same convention every other theme in this line uses (see Masthead's
 * breaking-story.php). Click the empty image block below to add your own
 * aerial or dockside photo; describe it in the alt text once it's a real,
 * specific photograph (an empty alt is only correct for a truly decorative
 * image, which a real marina photo is not — see WCAG 1.1.1).
 *
 * @package wake
 */
?>
<!-- wp:group {"tagName":"section","className":"wk-hero","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|16","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"default"}} -->
<section class="wp-block-group alignfull wk-hero" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:group {"className":"wk-hero__media","layout":{"type":"default"}} -->
	<div class="wp-block-group wk-hero__media">
		<!-- wp:image {"sizeSlug":"full"} -->
		<figure class="wp-block-image size-full"><img alt="" /></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"wk-hero__overlay","layout":{"type":"default"}} -->
	<div class="wp-block-group wk-hero__overlay"></div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"wk-hero__content","layout":{"type":"constrained","contentSize":"760px","justifyContent":"left"}} -->
	<div class="wp-block-group wk-hero__content">

		<!-- wp:paragraph {"className":"wk-hero__eyebrow"} -->
		<p class="wk-hero__eyebrow"><?php echo esc_html__( 'Beacon Point Marina · Est. 1978', 'wake' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- This pattern supplies the page's single h1. Pair it only with a
		     template that does not already render an h1 (front-page.html does
		     not), or demote it to level:2 in the toolbar — see story-hero.php
		     in the Masthead skin for the same convention documented in full. -->
		<!-- wp:heading {"level":1,"className":"wk-hero__headline","fontSize":"2xl","style":{"spacing":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|5"}}}} -->
		<h1 class="wp-block-heading wk-hero__headline has-2-xl-font-size" style="margin-top:var(--wp--preset--spacing--4);margin-bottom:var(--wp--preset--spacing--5)"><?php echo esc_html__( 'Your slip. Your season. Handled.', 'wake' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"wk-hero__deck","fontSize":"md","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|8"}}}} -->
		<p class="wk-hero__deck has-md-font-size" style="margin-bottom:var(--wp--preset--spacing--8)"><?php echo esc_html__( 'Wet slips, dry storage, and a dock crew that picks up the radio — deep water on the harbor\'s protected east shore, twenty minutes from open water.', 'wake' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"gradient":"tide-flow"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-tide-flow-gradient-background has-background wp-element-button" href="#"><?php echo esc_html__( 'Check slip availability →', 'wake' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
