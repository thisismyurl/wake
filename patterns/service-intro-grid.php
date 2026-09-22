<?php
/**
 * Title: Service Intro Grid
 * Slug: wake/service-intro-grid
 * Categories: wake-sections
 * Viewport Width: 1200
 * Inserter: true
 *
 * Centred eyebrow and heading over a three-column icon-badge grid — the
 * "what we offer" section every marina site needs, elevated with a bespoke
 * circular badge treatment rather than a stock feature-grid template.
 *
 * @package wake
 */
?>
<!-- wp:group {"tagName":"section","className":"cl-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"1140px"}} -->
<section class="wp-block-group cl-section" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"640px"},"style":{"spacing":{"blockGap":"var:preset|spacing|3","margin":{"bottom":"var:preset|spacing|12"}}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--12)">
		<!-- wp:paragraph {"className":"is-style-cl-eyebrow cl-eyebrow","align":"center"} -->
		<p class="is-style-cl-eyebrow cl-eyebrow has-text-align-center"><?php echo esc_html__( 'What we offer', 'wake' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"fontSize":"xl","textAlign":"center"} -->
		<h2 class="wp-block-heading has-text-align-center has-xl-font-size"><?php echo esc_html__( 'Everything a boat needs on this side of the harbor', 'wake' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|10","left":"var:preset|spacing|8"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:group {"className":"wk-badge","layout":{"type":"default"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
			<div class="wp-block-group wk-badge" style="margin-bottom:var(--wp--preset--spacing--4)">
				<!-- wp:image {"width":"32px","height":"32px","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icons/icon-anchor.svg' ); ?>" alt="" style="width:32px;height:32px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":3,"fontSize":"md"} -->
			<h3 class="wp-block-heading has-md-font-size"><?php echo esc_html__( 'Wet Slips & Dockage', 'wake' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Seasonal and transient berths to 60 ft, power and water at every finger dock.', 'wake' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:group {"className":"wk-badge","layout":{"type":"default"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
			<div class="wp-block-group wk-badge" style="margin-bottom:var(--wp--preset--spacing--4)">
				<!-- wp:image {"width":"32px","height":"32px","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icons/icon-compass.svg' ); ?>" alt="" style="width:32px;height:32px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":3,"fontSize":"md"} -->
			<h3 class="wp-block-heading has-md-font-size"><?php echo esc_html__( 'Haul-Out & Storage', 'wake' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'A 35-ton Travelift and a dry-stack yard, on-site for the winter or a mid-season repair.', 'wake' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:group {"className":"wk-badge","layout":{"type":"default"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
			<div class="wp-block-group wk-badge" style="margin-bottom:var(--wp--preset--spacing--4)">
				<!-- wp:image {"width":"32px","height":"32px","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icons/icon-life-ring.svg' ); ?>" alt="" style="width:32px;height:32px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":3,"fontSize":"md"} -->
			<h3 class="wp-block-heading has-md-font-size"><?php echo esc_html__( 'Fuel Dock & Service', 'wake' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Gas and diesel at the outer dock, plus a certified yard crew for engine and rigging work.', 'wake' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</section>
<!-- /wp:group -->
