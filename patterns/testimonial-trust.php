<?php
/**
 * Title: Testimonial & Trust
 * Slug: wake/testimonial-trust
 * Categories: wake-sections
 * Viewport Width: 1100
 * Inserter: true
 *
 * A boater's testimonial as a pull quote, paired with a row of the trust
 * markers a marina actually earns (Clean Marina certification, years in
 * operation, a service rating) — not generic five-star iconography.
 *
 * @package wake
 */
?>
<!-- wp:group {"tagName":"section","className":"cl-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"1140px"}} -->
<section class="wp-block-group cl-section" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|10","left":"var:preset|spacing|12"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:pullquote -->
			<figure class="wp-block-pullquote"><blockquote><p><?php echo esc_html__( '&#8220;We moved our Beneteau here three seasons ago for the deep water at the fuel dock. The board out front telling you what\'s open before you even call is the kind of thing that makes a marina feel run, not just rented.&#8221;', 'wake' ); ?></p><cite><?php echo esc_html__( 'S. Okafor, seasonal slip holder', 'wake' ); ?></cite></blockquote></figure>
			<!-- /wp:pullquote -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
			<div class="wp-block-group">

				<!-- wp:group {"layout":{"type":"flex","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"fontFamily":"dm-sans","fontSize":"lg"} -->
					<p class="has-dm-sans-font-family has-lg-font-size">46</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"wk-trust-mark"} -->
					<p class="wk-trust-mark"><?php echo esc_html__( 'Years on the harbor', 'wake' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"fontFamily":"dm-sans","fontSize":"lg"} -->
					<p class="has-dm-sans-font-family has-lg-font-size">210</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"wk-trust-mark"} -->
					<p class="wk-trust-mark"><?php echo esc_html__( 'Wet slips in service', 'wake' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"wk-trust-mark"} -->
					<p class="wk-trust-mark"><?php echo esc_html__( 'Clean Marina Certified · Coast Guard Auxiliary Partner', 'wake' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</section>
<!-- /wp:group -->
