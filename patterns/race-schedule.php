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
 * Status label classes: wake-status--results, wake-status--open,
 * wake-status--pending.
 *
 * @package wake
 */
?>
<!-- wp:group {"className":"wake-pattern-race-header","metadata":{"categories":["wake-editorial"],"name":"Race Schedule"},"style":{"color":{"background":"var:preset|color|wake-void"},"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group wake-pattern-race-header" style="background-color:var(--wp--preset--color--wake-void)">

	<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-fog"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
	<p style="font-family:var(--wp--preset--font-family--jost);font-size:0.6875rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:var(--wp--preset--color--wake-fog)">2026 Race Programme</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"600","fontSize":"var:preset|font-size|4xl","letterSpacing":"-0.02em","lineHeight":"1.1"},"color":{"text":"var:preset|color|wake-white"}}} -->
	<h1 style="font-family:var(--wp--preset--font-family--literata);font-weight:600;letter-spacing:-0.02em;line-height:1.1;color:var(--wp--preset--color--wake-white)">Race Calendar</h1>
	<!-- /wp:heading -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"wake-pattern-race-table","metadata":{"categories":["wake-editorial"],"name":"Race Schedule"},"style":{"color":{"background":"var:preset|color|wake-white"},"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|16"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group wake-pattern-race-table" style="background-color:var(--wp--preset--color--wake-white)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2","margin":{"bottom":"var:preset|spacing|8"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-steel"}}} -->
		<p style="font-family:var(--wp--preset--font-family--jost);font-size:0.6875rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:var(--wp--preset--color--wake-steel)">Lake Erie Series</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"var:preset|font-size|xs"},"color":{"text":"var:preset|color|wake-fog"}}} -->
		<p style="font-family:var(--wp--preset--font-family--jost);color:var(--wp--preset--color--wake-fog)">Scoring: PHRF Portsmouth &middot; 6 races, discard 1</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:html -->
	<table class="wake-race-table">
		<thead>
			<tr>
				<th scope="col">Date</th>
				<th scope="col">Race</th>
				<th scope="col">Course</th>
				<th scope="col">Status</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="wake-race-date">Sat 7 Jun</td>
				<td class="wake-race-name">Opening Day Race</td>
				<td class="wake-race-course">Port Colborne Harbour &#8212; windward/leeward, 12 nm</td>
				<td><span class="wake-status wake-status--results">Results</span></td>
			</tr>
			<tr>
				<td class="wake-race-date">Sat 21 Jun</td>
				<td class="wake-race-name">Erie Shoal Sprint</td>
				<td class="wake-race-course">Port Colborne to Erie Shoal buoy and return, 17 nm</td>
				<td><span class="wake-status wake-status--results">Results</span></td>
			</tr>
			<tr>
				<td class="wake-race-date">4&#8211;6 Jul</td>
				<td class="wake-race-name">Race Week</td>
				<td class="wake-race-course">Erie Shore Circuit &#8212; three races over three days</td>
				<td><span class="wake-status wake-status--results">Results</span></td>
			</tr>
			<tr>
				<td class="wake-race-date">Sat 2 Aug</td>
				<td class="wake-race-name">Midsummer Cup</td>
				<td class="wake-race-course">Offshore &#8212; Port Colborne to Dunkirk NY and return, 48 nm</td>
				<td><span class="wake-status wake-status--open">Open</span></td>
			</tr>
			<tr>
				<td class="wake-race-date">Sat 6 Sep</td>
				<td class="wake-race-name">Autumn Trophy Race</td>
				<td class="wake-race-course">Harbour course &#8212; short-handed, single or double-handed allowed</td>
				<td><span class="wake-status wake-status--open">Open</span></td>
			</tr>
			<tr>
				<td class="wake-race-date">Sat 20 Sep</td>
				<td class="wake-race-name">Season Final</td>
				<td class="wake-race-course">Port Colborne Harbour &#8212; pursuit format, all classes together</td>
				<td><span class="wake-status wake-status--pending">Not Yet Open</span></td>
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
			<p style="font-family:var(--wp--preset--font-family--jost);font-size:0.6875rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:var(--wp--preset--color--wake-steel)">Notice of Race</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"500","fontSize":"var:preset|font-size|2xl","letterSpacing":"-0.01em"},"color":{"text":"var:preset|color|wake-void"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|4"}}}} -->
			<h2 style="font-family:var(--wp--preset--font-family--literata);font-weight:500;letter-spacing:-0.01em;color:var(--wp--preset--color--wake-void)">Race documents and NORs</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontSize":"var:preset|font-size|base","lineHeight":"1.7"},"color":{"text":"var:preset|color|wake-steel"}}} -->
			<p style="font-family:var(--wp--preset--font-family--literata);color:var(--wp--preset--color--wake-steel);line-height:1.7">Sailing Instructions, Notice of Race documents, and PHRF ratings are posted in the members&#8217; section. Log in to download.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%">

			<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"var:preset|color|wake-navy","text":"var:preset|color|wake-white"},"typography":{"fontFamily":"var:preset|font-family|jost","fontWeight":"600","letterSpacing":"0.05em"},"border":{"radius":"0"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/members" style="background-color:var(--wp--preset--color--wake-navy);color:var(--wp--preset--color--wake-white)">Member Login</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"var:preset|color|wake-navy","background":"transparent"},"border":{"color":"var:preset|color|wake-navy","style":"solid","width":"1px","radius":"0"},"typography":{"fontFamily":"var:preset|font-family|jost","fontWeight":"500"}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contact" style="color:var(--wp--preset--color--wake-navy);background-color:transparent;border:1px solid var(--wp--preset--color--wake-navy)">Enquire about Racing</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
