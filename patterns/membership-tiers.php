<?php
/**
 * Title: Membership Tiers
 * Slug: wake/membership-tiers
 * Categories: wake-cta
 * Viewport Width: 1280
 * Inserter: true
 *
 * Three-column membership pricing tiers for sailing clubs and maritime
 * organisations: Associate (guest), Full Member, and Patron (Commodore).
 * The centre card carries the featured/dark treatment.
 *
 * Update the prices, tier names, feature lists, and button links to
 * match your membership structure. The dark void centre card is a block
 * style you can override in Global Styles if you prefer a lighter treatment.
 *
 * Heading level: the section title is h2, not h1 — this pattern is inserted
 * into pages that already render the page title as the single h1, so an h1
 * here would create a duplicate (WCAG 2.1 1.3.1). Promote to h1 only on a
 * page-blank/landing layout that has no other title.
 *
 * @package wake
 */
?>
<!-- wp:group {"className":"wake-pattern-membership-header","metadata":{"categories":["wake-cta"],"name":"Membership Tiers"},"style":{"color":{"background":"var:preset|color|wake-void"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|16"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group wake-pattern-membership-header" style="background-color:var(--wp--preset--color--wake-void)">

	<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-fog"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
	<p style="font-family:var(--wp--preset--font-family--jost);font-size:0.6875rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:var(--wp--preset--color--wake-fog)"><?php esc_html_e( '2026 Season', 'wake' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"600","fontSize":"var:preset|font-size|4xl","letterSpacing":"-0.02em","lineHeight":"1.1"},"color":{"text":"var:preset|color|wake-white"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
	<h2 style="font-family:var(--wp--preset--font-family--literata);font-weight:600;letter-spacing:-0.02em;line-height:1.1;color:var(--wp--preset--color--wake-white)"><?php esc_html_e( 'Membership', 'wake' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontStyle":"italic","fontSize":"var:preset|font-size|lg","lineHeight":"1.55"},"color":{"text":"var:preset|color|wake-fog"}}} -->
	<p style="font-family:var(--wp--preset--font-family--literata);font-style:italic;color:var(--wp--preset--color--wake-fog);line-height:1.55"><?php esc_html_e( 'Three categories. One standard. The water does not care which category you hold.', 'wake' ); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"wake-pattern-membership-tiers","metadata":{"categories":["wake-cta"],"name":"Membership Tiers"},"style":{"color":{"background":"var:preset|color|wake-salt"},"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group wake-pattern-membership-tiers" style="background-color:var(--wp--preset--color--wake-salt)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|6"}}}} -->
	<div class="wp-block-columns">

		<!-- ASSOCIATE TIER -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"wake-tier-card","style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group wake-tier-card">

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-steel"}}} -->
				<p style="font-family:var(--wp--preset--font-family--jost);font-size:0.6875rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--wp--preset--color--wake-steel)"><?php esc_html_e( 'Guest', 'wake' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"500","fontSize":"var:preset|font-size|2xl","letterSpacing":"-0.01em"},"color":{"text":"var:preset|color|wake-void"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3"}}}} -->
				<h3 style="font-family:var(--wp--preset--font-family--literata);font-weight:500;letter-spacing:-0.01em;color:var(--wp--preset--color--wake-void)"><?php esc_html_e( 'Associate', 'wake' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"300","fontSize":"var:preset|font-size|3xl","letterSpacing":"-0.02em","lineHeight":"1"},"color":{"text":"var:preset|color|wake-void"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
				<p style="font-family:var(--wp--preset--font-family--literata);font-weight:300;letter-spacing:-0.02em;line-height:1;color:var(--wp--preset--color--wake-void)">$240 <span style="font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--wake-steel)"><?php esc_html_e( '/ season', 'wake' ); ?></span></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontStyle":"italic","fontSize":"var:preset|font-size|sm","lineHeight":"1.6"},"color":{"text":"var:preset|color|wake-steel"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
				<p style="font-family:var(--wp--preset--font-family--literata);font-style:italic;color:var(--wp--preset--color--wake-steel);line-height:1.6"><?php esc_html_e( 'For those who sail occasionally, follow the journal, or are new to the club. Full journal access, racing by invitation, one cruise berth per season.', 'wake' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:html -->
				<ul class="wake-tier-card__features">
					<li><?php esc_html_e( 'Full journal archive access', 'wake' ); ?></li>
					<li><?php esc_html_e( 'Wednesday evening race participation (as crew)', 'wake' ); ?></li>
					<li><?php esc_html_e( 'One North Channel cruise berth', 'wake' ); ?></li>
					<li><?php esc_html_e( 'Club social events', 'wake' ); ?></li>
					<li><?php esc_html_e( 'Digital copy of the annual report', 'wake' ); ?></li>
				</ul>
				<!-- /wp:html -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|6"}}}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"style":{"color":{"background":"var:preset|color|wake-navy","text":"var:preset|color|wake-white"},"typography":{"fontFamily":"var:preset|font-family|jost","fontWeight":"600","letterSpacing":"0.05em"},"border":{"radius":"0"}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/membership" style="background-color:var(--wp--preset--color--wake-navy);color:var(--wp--preset--color--wake-white)"><?php esc_html_e( 'Join as Associate', 'wake' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- FULL MEMBER TIER (featured) -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"wake-tier-card wake-tier-card--featured","style":{"color":{"background":"var:preset|color|wake-void"},"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group wake-tier-card wake-tier-card--featured" style="background-color:var(--wp--preset--color--wake-void)">

				<!-- Brass as small label text falls below AA on the dark card in the
				     inverted editions; white clears 14:1+ everywhere. -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-white"}}} -->
				<p style="font-family:var(--wp--preset--font-family--jost);font-size:0.6875rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--wp--preset--color--wake-white)"><?php esc_html_e( 'Most Popular', 'wake' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"500","fontSize":"var:preset|font-size|2xl","letterSpacing":"-0.01em"},"color":{"text":"var:preset|color|wake-white"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3"}}}} -->
				<h3 style="font-family:var(--wp--preset--font-family--literata);font-weight:500;letter-spacing:-0.01em;color:var(--wp--preset--color--wake-white)"><?php esc_html_e( 'Full Member', 'wake' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"300","fontSize":"var:preset|font-size|3xl","letterSpacing":"-0.02em","lineHeight":"1"},"color":{"text":"var:preset|color|wake-white"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
				<p style="font-family:var(--wp--preset--font-family--literata);font-weight:300;letter-spacing:-0.02em;line-height:1;color:var(--wp--preset--color--wake-white)">$485 <span style="font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--wake-fog)"><?php esc_html_e( '/ season', 'wake' ); ?></span></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontStyle":"italic","fontSize":"var:preset|font-size|sm","lineHeight":"1.6"},"color":{"text":"var:preset|color|wake-fog"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
				<p style="font-family:var(--wp--preset--font-family--literata);font-style:italic;color:var(--wp--preset--color--wake-fog);line-height:1.6"><?php esc_html_e( 'The full experience. Race registration, cruise priority booking, voting rights at the AGM, and your name in the annual race results.', 'wake' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- The featured card sits on wake-void; its feature list inherits a
				     light token (not a hardcoded cream literal, which painted
				     cream-on-cream once wake-void inverted to a light ground in Dusk). -->
				<!-- wp:html -->
				<ul class="wake-tier-card__features" style="color:var(--wp--preset--color--wake-white)">
					<li><?php esc_html_e( 'All Associate benefits', 'wake' ); ?></li>
					<li><?php esc_html_e( 'PHRF race registration (all series)', 'wake' ); ?></li>
					<li><?php esc_html_e( 'Priority cruise berth booking', 'wake' ); ?></li>
					<li><?php esc_html_e( 'AGM voting rights', 'wake' ); ?></li>
					<li><?php esc_html_e( 'Printed journal (mailed quarterly)', 'wake' ); ?></li>
					<li><?php esc_html_e( 'Club burgee and documentation number', 'wake' ); ?></li>
				</ul>
				<!-- /wp:html -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|6"}}}} -->
				<div class="wp-block-buttons">
					<!-- Brass button ink is the edition-aware --wake-cta-ink token, not a
					     literal: dark ink (#14110b) clears AA on the warm-gold brass in five
					     editions (Coastal 5.11 → Dusk 9.65), but Nordic mutes brass to a cool
					     taupe (#686050) where dark ink falls to 3.03:1. Nordic redefines the
					     token to white via styles/nordic.json (white on #686050 = 6.22:1). -->
					<!-- wp:button {"style":{"color":{"background":"var:preset|color|wake-brass","text":"var(--wake-cta-ink)"},"typography":{"fontFamily":"var:preset|font-family|jost","fontWeight":"600","letterSpacing":"0.05em"},"border":{"radius":"0"}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/membership" style="background-color:var(--wp--preset--color--wake-brass);color:var(--wake-cta-ink)"><?php esc_html_e( 'Join as Member', 'wake' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- PATRON TIER -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"wake-tier-card","style":{"border":{"top":{"color":"var:preset|color|wake-brass","width":"3px"}},"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group wake-tier-card" style="border-top:3px solid var(--wp--preset--color--wake-brass)">

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-steel"}}} -->
				<p style="font-family:var(--wp--preset--font-family--jost);font-size:0.6875rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--wp--preset--color--wake-steel)"><?php esc_html_e( 'Patron', 'wake' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"500","fontSize":"var:preset|font-size|2xl","letterSpacing":"-0.01em"},"color":{"text":"var:preset|color|wake-void"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3"}}}} -->
				<h3 style="font-family:var(--wp--preset--font-family--literata);font-weight:500;letter-spacing:-0.01em;color:var(--wp--preset--color--wake-void)"><?php esc_html_e( 'Commodore', 'wake' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"300","fontSize":"var:preset|font-size|3xl","letterSpacing":"-0.02em","lineHeight":"1"},"color":{"text":"var:preset|color|wake-void"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
				<p style="font-family:var(--wp--preset--font-family--literata);font-weight:300;letter-spacing:-0.02em;line-height:1;color:var(--wp--preset--color--wake-void)">$950 <span style="font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--wake-steel)"><?php esc_html_e( '/ season', 'wake' ); ?></span></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontStyle":"italic","fontSize":"var:preset|font-size|sm","lineHeight":"1.6"},"color":{"text":"var:preset|color|wake-steel"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
				<p style="font-family:var(--wp--preset--font-family--literata);font-style:italic;color:var(--wp--preset--color--wake-steel);line-height:1.6"><?php esc_html_e( 'For those who want to support the club beyond membership. All Full Member benefits plus patron recognition in the annual report and journal.', 'wake' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:html -->
				<ul class="wake-tier-card__features">
					<li><?php esc_html_e( 'All Full Member benefits', 'wake' ); ?></li>
					<li><?php esc_html_e( 'Named patron in annual report', 'wake' ); ?></li>
					<li><?php esc_html_e( 'Named patron in journal masthead', 'wake' ); ?></li>
					<li><?php esc_html_e( 'Two guest race entries per season', 'wake' ); ?></li>
					<li><?php esc_html_e( 'Priority mooring at all club events', 'wake' ); ?></li>
					<li><?php esc_html_e( 'Invitation to annual Commodore’s dinner', 'wake' ); ?></li>
				</ul>
				<!-- /wp:html -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|6"}}}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"style":{"color":{"background":"var:preset|color|wake-navy","text":"var:preset|color|wake-white"},"typography":{"fontFamily":"var:preset|font-family|jost","fontWeight":"600","letterSpacing":"0.05em"},"border":{"radius":"0"}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/membership" style="background-color:var(--wp--preset--color--wake-navy);color:var(--wp--preset--color--wake-white)"><?php esc_html_e( 'Become a Patron', 'wake' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
