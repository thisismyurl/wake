<?php
/**
 * Title: Slip Status Board
 * Slug: wake/slip-status-board
 * Categories: wake-sections
 * Viewport Width: 1200
 * Inserter: true
 *
 * WAKE'S SIGNATURE FEATURE.
 *
 * Every Colophon theme ships one feature a practitioner in its niche
 * recognises on sight — a functional or editorial convention that exists
 * nowhere else in the WP.org theme directory (see PILLARS.md, Pillar 2 —
 * Innovation over Compliance, and the collection-level doctrine that names
 * Masthead's dateline style and Margin's market-watch pattern as the
 * standard this has to meet).
 *
 * For a marina, that convention is the board behind the dock office window:
 * a plain list of slip numbers, who's in them, and whether there's room for
 * a transient boat tonight. No theme built for "small business" or
 * "hospitality" in the directory ships this, because it isn't a hospitality
 * concept — it's a working-waterfront one, built from a vocabulary (slip
 * number, LOA, Available / Reserved / Waitlist) a marina manager already
 * uses on paper. A charter operator, sailing school, or marina management
 * company recognises it as their own the moment they see it, the way a
 * journalist recognises Masthead's dateline paragraph style.
 *
 * The status pill's colour comes from the two FUNCTIONAL palette tokens —
 * status-open / status-hold — not the brand accent (tide), because green
 * and amber here are carrying real information (go / hold), not decoration.
 * See theme.json's color._comment for the WCAG contrast work behind both.
 *
 * Ships with real demo content: five slips, mixed status, real-looking
 * dimensions — not four rows of "Lorem ipsum" pretending to be a table.
 *
 * @package wake
 */
?>
<!-- wp:group {"tagName":"section","className":"cl-section cl-section--soft","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"1140px"}} -->
<section class="wp-block-group cl-section cl-section--soft" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|4"}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--8)">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"520px","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"is-style-cl-eyebrow cl-eyebrow"} -->
			<p class="is-style-cl-eyebrow cl-eyebrow"><?php echo esc_html__( 'Today at the dock', 'wake' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"fontSize":"xl"} -->
			<h2 class="wp-block-heading has-xl-font-size"><?php echo esc_html__( 'Slip status board', 'wake' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"sm"} -->
		<p class="has-ink-muted-color has-text-color has-sm-font-size"><?php echo esc_html__( 'Updated from the dock office each morning.', 'wake' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Every cell is a real wp:paragraph, not raw HTML in a wrapper — an
	     editor can click into any slip, spec, or status and edit it directly,
	     same as every other pattern in this theme (Pillar 7, High Agency). -->
	<!-- wp:group {"className":"wk-board","layout":{"type":"default"}} -->
	<div class="wp-block-group wk-board">

		<!-- wp:group {"className":"wk-board__row wk-board__row--head","layout":{"type":"default"}} -->
		<div class="wp-block-group wk-board__row wk-board__row--head">
			<!-- wp:paragraph --><p><?php echo esc_html__( 'Slip', 'wake' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph --><p><?php echo esc_html__( 'Vessel class', 'wake' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph --><p><?php echo esc_html__( 'LOA', 'wake' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph --><p><?php echo esc_html__( 'Status', 'wake' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"wk-board__row","layout":{"type":"default"}} -->
		<div class="wp-block-group wk-board__row">
			<!-- wp:paragraph {"className":"wk-board__slip"} --><p class="wk-board__slip">A-04</p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"wk-board__spec"} --><p class="wk-board__spec"><?php echo esc_html__( 'Sailboat, fin keel', 'wake' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"wk-board__spec"} --><p class="wk-board__spec"><?php echo esc_html__( 'to 32 ft', 'wake' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"wk-status wk-status--open"} --><p class="wk-status wk-status--open"><?php echo esc_html__( 'Available', 'wake' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"wk-board__row","layout":{"type":"default"}} -->
		<div class="wp-block-group wk-board__row">
			<!-- wp:paragraph {"className":"wk-board__slip"} --><p class="wk-board__slip">A-11</p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"wk-board__spec"} --><p class="wk-board__spec"><?php echo esc_html__( 'Sport cruiser', 'wake' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"wk-board__spec"} --><p class="wk-board__spec"><?php echo esc_html__( 'to 28 ft', 'wake' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"wk-status wk-status--hold"} --><p class="wk-status wk-status--hold"><?php echo esc_html__( 'Reserved', 'wake' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"wk-board__row","layout":{"type":"default"}} -->
		<div class="wp-block-group wk-board__row">
			<!-- wp:paragraph {"className":"wk-board__slip"} --><p class="wk-board__slip">B-02</p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"wk-board__spec"} --><p class="wk-board__spec"><?php echo esc_html__( 'Trawler', 'wake' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"wk-board__spec"} --><p class="wk-board__spec"><?php echo esc_html__( 'to 42 ft', 'wake' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"wk-status wk-status--open"} --><p class="wk-status wk-status--open"><?php echo esc_html__( 'Available', 'wake' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"wk-board__row","layout":{"type":"default"}} -->
		<div class="wp-block-group wk-board__row">
			<!-- wp:paragraph {"className":"wk-board__slip"} --><p class="wk-board__slip">B-07</p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"wk-board__spec"} --><p class="wk-board__spec"><?php echo esc_html__( 'Catamaran', 'wake' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"wk-board__spec"} --><p class="wk-board__spec"><?php echo esc_html__( 'to 38 ft beam', 'wake' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"wk-status wk-status--hold"} --><p class="wk-status wk-status--hold"><?php echo esc_html__( 'Waitlist', 'wake' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"wk-board__row","layout":{"type":"default"}} -->
		<div class="wp-block-group wk-board__row">
			<!-- wp:paragraph {"className":"wk-board__slip"} --><p class="wk-board__slip">C-15</p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"wk-board__spec"} --><p class="wk-board__spec"><?php echo esc_html__( 'Sailboat, wing keel', 'wake' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"wk-board__spec"} --><p class="wk-board__spec"><?php echo esc_html__( 'to 36 ft', 'wake' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"wk-status wk-status--open"} --><p class="wk-status wk-status--open"><?php echo esc_html__( 'Available', 'wake' ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"textColor":"ink-muted","fontSize":"sm","style":{"spacing":{"margin":{"top":"var:preset|spacing|5"}}}} -->
	<p class="has-ink-muted-color has-text-color has-sm-font-size" style="margin-top:var(--wp--preset--spacing--5)"><?php echo esc_html__( 'Don\'t see your length or draft? Call the dock office — the board only shows what\'s open this week.', 'wake' ); ?></p>
	<!-- /wp:paragraph -->

</section>
<!-- /wp:group -->
