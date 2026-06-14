<?php
/**
 * Title: Race Schedule
 * Slug: wake/race-schedule
 * Categories: wake-editorial
 * Viewport Width: 1280
 * Inserter: true
 *
 * Race programme page: dark-void header, race schedule table, and a
 * Notice of Race CTA for document downloads. Suitable for a club's
 * racing section or a dedicated Race Programme page.
 *
 * The race table uses semantic HTML (<table>) for accessibility — screen
 * readers can navigate the schedule by column header. Update the race
 * dates, names, courses, and status labels (Results / Open / Not Yet Open)
 * to reflect your actual race programme.
 *
 * Heading level: the section title is h2, not h1 — this pattern is inserted
 * into pages that already render the page title as the single h1, so an h1
 * here would create a duplicate (WCAG 2.1 1.3.1). Promote to h1 only on a
 * page-blank/landing layout that has no other title.
 *
 * Status label classes: wake-status--results, wake-status--open,
 * wake-status--pending.
 *
 * @package wake
 */
?>
<!-- wp:group {"className":"wake-pattern-race-header","metadata":{"categories":["wake-editorial"],"name":"Race Schedule"},"style":{"color":{"background":"var:preset|color|wake-void"},"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group wake-pattern-race-header" style="background-color:var(--wp--preset--color--wake-void)">

	<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-fog"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
	<p style="font-family:var(--wp--preset--font-family--jost);font-size:0.6875rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:var(--wp--preset--color--wake-fog)"><?php esc_html_e( '2026 Race Programme', 'wake' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"600","fontSize":"var:preset|font-size|4xl","letterSpacing":"-0.02em","lineHeight":"1.1"},"color":{"text":"var:preset|color|wake-white"}}} -->
	<h2 style="font-family:var(--wp--preset--font-family--literata);font-weight:600;letter-spacing:-0.02em;line-height:1.1;color:var(--wp--preset--color--wake-white)"><?php esc_html_e( 'Race Calendar', 'wake' ); ?></h2>
	<!-- /wp:heading -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"wake-pattern-race-table","metadata":{"categories":["wake-editorial"],"name":"Race Schedule"},"style":{"color":{"background":"var:preset|color|wake-white"},"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|16"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group wake-pattern-race-table" style="background-color:var(--wp--preset--color--wake-white)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2","margin":{"bottom":"var:preset|spacing|8"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-steel"}}} -->
		<p style="font-family:var(--wp--preset--font-family--jost);font-size:0.6875rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:var(--wp--preset--color--wake-steel)"><?php esc_html_e( 'Lake Erie Series', 'wake' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"var:preset|font-size|xs"},"color":{"text":"var:preset|color|wake-fog"}}} -->
		<p style="font-family:var(--wp--preset--font-family--jost);color:var(--wp--preset--color--wake-fog)"><?php esc_html_e( 'Scoring: PHRF Portsmouth · 6 races, discard 1', 'wake' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:html -->
	<table class="wake-race-table">
		<thead>
			<tr>
				<th scope="col"><?php esc_html_e( 'Date', 'wake' ); ?></th>
				<th scope="col"><?php esc_html_e( 'Race', 'wake' ); ?></th>
				<th scope="col"><?php esc_html_e( 'Course', 'wake' ); ?></th>
				<th scope="col"><?php esc_html_e( 'Status', 'wake' ); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="wake-race-date"><?php esc_html_e( 'Sat 7 Jun', 'wake' ); ?></td>
				<td class="wake-race-name"><?php esc_html_e( 'Opening Day Race', 'wake' ); ?></td>
				<td class="wake-race-course"><?php esc_html_e( 'Port Colborne Harbour — windward/leeward, 12 nm', 'wake' ); ?></td>
				<td><span class="wake-status wake-status--results"><?php esc_html_e( 'Results', 'wake' ); ?></span></td>
			</tr>
			<tr>
				<td class="wake-race-date"><?php esc_html_e( 'Sat 21 Jun', 'wake' ); ?></td>
				<td class="wake-race-name"><?php esc_html_e( 'Erie Shoal Sprint', 'wake' ); ?></td>
				<td class="wake-race-course"><?php esc_html_e( 'Port Colborne to Erie Shoal buoy and return, 17 nm', 'wake' ); ?></td>
				<td><span class="wake-status wake-status--results"><?php esc_html_e( 'Results', 'wake' ); ?></span></td>
			</tr>
			<tr>
				<td class="wake-race-date"><?php esc_html_e( '4–6 Jul', 'wake' ); ?></td>
				<td class="wake-race-name"><?php esc_html_e( 'Race Week', 'wake' ); ?></td>
				<td class="wake-race-course"><?php esc_html_e( 'Erie Shore Circuit — three races over three days', 'wake' ); ?></td>
				<td><span class="wake-status wake-status--results"><?php esc_html_e( 'Results', 'wake' ); ?></span></td>
			</tr>
			<tr>
				<td class="wake-race-date"><?php esc_html_e( 'Sat 2 Aug', 'wake' ); ?></td>
				<td class="wake-race-name"><?php esc_html_e( 'Midsummer Cup', 'wake' ); ?></td>
				<td class="wake-race-course"><?php esc_html_e( 'Offshore — Port Colborne to Dunkirk NY and return, 48 nm', 'wake' ); ?></td>
				<td><span class="wake-status wake-status--open"><?php esc_html_e( 'Open', 'wake' ); ?></span></td>
			</tr>
			<tr>
				<td class="wake-race-date"><?php esc_html_e( 'Sat 6 Sep', 'wake' ); ?></td>
				<td class="wake-race-name"><?php esc_html_e( 'Autumn Trophy Race', 'wake' ); ?></td>
				<td class="wake-race-course"><?php esc_html_e( 'Harbour course — short-handed, single or double-handed allowed', 'wake' ); ?></td>
				<td><span class="wake-status wake-status--open"><?php esc_html_e( 'Open', 'wake' ); ?></span></td>
			</tr>
			<tr>
				<td class="wake-race-date"><?php esc_html_e( 'Sat 20 Sep', 'wake' ); ?></td>
				<td class="wake-race-name"><?php esc_html_e( 'Season Final', 'wake' ); ?></td>
				<td class="wake-race-course"><?php esc_html_e( 'Port Colborne Harbour — pursuit format, all classes together', 'wake' ); ?></td>
				<td><span class="wake-status wake-status--pending"><?php esc_html_e( 'Not Yet Open', 'wake' ); ?></span></td>
			</tr>
		</tbody>
	</table>
	<!-- /wp:html -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"wake-pattern-race-nor","metadata":{"categories":["wake-editorial"],"name":"Race Schedule"},"style":{"color":{"background":"var:preset|color|wake-brass-tint"},"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group wake-pattern-race-nor" style="background-color:var(--wp--preset--color--wake-brass-tint)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|12"}}},"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">

			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-steel"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
			<p style="font-family:var(--wp--preset--font-family--jost);font-size:0.6875rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:var(--wp--preset--color--wake-steel)"><?php esc_html_e( 'Notice of Race', 'wake' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"500","fontSize":"var:preset|font-size|2xl","letterSpacing":"-0.01em"},"color":{"text":"var:preset|color|wake-void"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|4"}}}} -->
			<h2 style="font-family:var(--wp--preset--font-family--literata);font-weight:500;letter-spacing:-0.01em;color:var(--wp--preset--color--wake-void)"><?php esc_html_e( 'Race documents and NORs', 'wake' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontSize":"var:preset|font-size|base","lineHeight":"1.7"},"color":{"text":"var:preset|color|wake-steel"}}} -->
			<p style="font-family:var(--wp--preset--font-family--literata);color:var(--wp--preset--color--wake-steel);line-height:1.7"><?php esc_html_e( 'Sailing Instructions, Notice of Race documents, and PHRF ratings are posted in the members’ section. Log in to download.', 'wake' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%">

			<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"var:preset|color|wake-navy","text":"var:preset|color|wake-white"},"typography":{"fontFamily":"var:preset|font-family|jost","fontWeight":"600","letterSpacing":"0.05em"},"border":{"radius":"0"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/members" style="background-color:var(--wp--preset--color--wake-navy);color:var(--wp--preset--color--wake-white)"><?php esc_html_e( 'Member Login', 'wake' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"var:preset|color|wake-navy","background":"transparent"},"border":{"color":"var:preset|color|wake-navy","style":"solid","width":"1px","radius":"0"},"typography":{"fontFamily":"var:preset|font-family|jost","fontWeight":"500"}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contact" style="color:var(--wp--preset--color--wake-navy);background-color:transparent;border:1px solid var(--wp--preset--color--wake-navy)"><?php esc_html_e( 'Enquire about Racing', 'wake' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
