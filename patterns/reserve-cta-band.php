<?php
/**
 * Title: Reserve CTA Band
 * Slug: wake/reserve-cta-band
 * Categories: wake-cta
 * Viewport Width: 1200
 * Inserter: true
 *
 * A dark harbor-toned band closing the page with a single, direct booking
 * call to action — the "reserve your slip" moment every marina page needs
 * before the footer.
 *
 * @package wake
 */
?>
<!-- wp:group {"tagName":"section","className":"cl-section cl-section--harbor","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<section class="wp-block-group alignfull cl-section cl-section--harbor" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:paragraph {"className":"is-style-cl-eyebrow cl-eyebrow","align":"center","textColor":"fog"} -->
	<p class="is-style-cl-eyebrow cl-eyebrow has-text-align-center has-fog-color has-text-color"><?php echo esc_html__( 'Slips are going for next season', 'wake' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":2,"textColor":"paper","fontSize":"2xl","textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|6"}}}} -->
	<h2 class="wp-block-heading has-text-align-center has-paper-color has-text-color has-2-xl-font-size" style="margin-top:var(--wp--preset--spacing--3);margin-bottom:var(--wp--preset--spacing--6)"><?php echo esc_html__( 'Reserve your slip', 'wake' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"fog","fontSize":"md","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|8"}}}} -->
	<p class="has-text-align-center has-fog-color has-text-color has-md-font-size" style="margin-bottom:var(--wp--preset--spacing--8)"><?php echo esc_html__( 'Tell us the boat and the dates. The dock office confirms by phone, usually the same day.', 'wake' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"gradient":"tide-flow"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-tide-flow-gradient-background has-background wp-element-button" href="#"><?php echo esc_html__( 'Start a reservation →', 'wake' ); ?></a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline","textColor":"paper","style":{"border":{"color":"var:preset|color|paper","width":"1px"}}} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-paper-color has-text-color has-border-color wp-element-button" href="tel:+15550194420" style="border-color:var(--wp--preset--color--paper);border-width:1px"><?php echo esc_html__( 'Call the dock office', 'wake' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</section>
<!-- /wp:group -->
