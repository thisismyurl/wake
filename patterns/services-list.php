<?php
/**
 * Title: Services List
 * Slug: wake/services-list
 * Categories: wake-sections
 * Viewport Width: 1000
 * Inserter: true
 *
 * A priced dockage-and-services list — the section a services page needs
 * that a homepage feature grid can't carry: real line items with a
 * from-price, in the register a marina's own rate sheet uses.
 *
 * @package wake
 */
?>
<!-- wp:group {"tagName":"section","className":"cl-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<section class="wp-block-group cl-section" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:paragraph {"className":"is-style-cl-eyebrow cl-eyebrow"} -->
	<p class="is-style-cl-eyebrow cl-eyebrow"><?php echo esc_html__( 'Dockage & services', 'wake' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"level":2,"fontSize":"xl","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|8"}}}} -->
	<h2 class="wp-block-heading has-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--8)"><?php echo esc_html__( 'Rates, plain and current', 'wake' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"className":"wk-service-row","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"top"}} -->
	<div class="wp-block-group wk-service-row">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"460px","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":3,"fontSize":"md"} -->
			<h3 class="wp-block-heading has-md-font-size"><?php echo esc_html__( 'Seasonal wet slip', 'wake' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-soft","fontSize":"sm"} -->
			<p class="has-ink-soft-color has-text-color has-sm-font-size"><?php echo esc_html__( 'May through October, power and water included, up to 40 ft.', 'wake' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph {"fontFamily":"dm-sans","fontSize":"md"} -->
		<p class="has-dm-sans-font-family has-md-font-size"><?php echo esc_html__( 'From $2,450 / season', 'wake' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"wk-service-row","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"top"}} -->
	<div class="wp-block-group wk-service-row">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"460px","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":3,"fontSize":"md"} -->
			<h3 class="wp-block-heading has-md-font-size"><?php echo esc_html__( 'Transient dockage', 'wake' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-soft","fontSize":"sm"} -->
			<p class="has-ink-soft-color has-text-color has-sm-font-size"><?php echo esc_html__( 'Overnight or by the week, radio ahead on channel 71.', 'wake' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph {"fontFamily":"dm-sans","fontSize":"md"} -->
		<p class="has-dm-sans-font-family has-md-font-size"><?php echo esc_html__( 'From $2.25 / ft / night', 'wake' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"wk-service-row","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"top"}} -->
	<div class="wp-block-group wk-service-row">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"460px","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":3,"fontSize":"md"} -->
			<h3 class="wp-block-heading has-md-font-size"><?php echo esc_html__( 'Winter storage & shrink-wrap', 'wake' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-soft","fontSize":"sm"} -->
			<p class="has-ink-soft-color has-text-color has-sm-font-size"><?php echo esc_html__( 'Haul-out, blocking, and cover — November through April.', 'wake' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph {"fontFamily":"dm-sans","fontSize":"md"} -->
		<p class="has-dm-sans-font-family has-md-font-size"><?php echo esc_html__( 'From $38 / ft', 'wake' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"wk-service-row","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"top"}} -->
	<div class="wp-block-group wk-service-row">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"460px","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":3,"fontSize":"md"} -->
			<h3 class="wp-block-heading has-md-font-size"><?php echo esc_html__( 'Engine & rigging service', 'wake' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"ink-soft","fontSize":"sm"} -->
			<p class="has-ink-soft-color has-text-color has-sm-font-size"><?php echo esc_html__( 'Certified yard crew, parts ordered through our chandlery.', 'wake' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph {"fontFamily":"dm-sans","fontSize":"md"} -->
		<p class="has-dm-sans-font-family has-md-font-size"><?php echo esc_html__( 'From $95 / hour', 'wake' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
