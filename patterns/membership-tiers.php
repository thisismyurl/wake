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
 * @package wake
 */
?>
<!-- wp:group {"className":"wake-pattern-membership-header","metadata":{"categories":["wake-cta"],"name":"Membership Tiers"},"style":{"color":{"background":"var:preset|color|wake-void"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|16"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group wake-pattern-membership-header" style="background-color:var(--wp--preset--color--wake-void)">

	<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-fog"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
	<p style="font-family:var(--wp--preset--font-family--jost);font-size:0.6875rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:var(--wp--preset--color--wake-fog)">2026 Season</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"600","fontSize":"var:preset|font-size|4xl","letterSpacing":"-0.02em","lineHeight":"1.1"},"color":{"text":"var:preset|color|wake-white"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
	<h1 style="font-family:var(--wp--preset--font-family--literata);font-weight:600;letter-spacing:-0.02em;line-height:1.1;color:var(--wp--preset--color--wake-white)">Membership</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontStyle":"italic","fontSize":"var:preset|font-size|lg","lineHeight":"1.55"},"color":{"text":"var:preset|color|wake-fog"}}} -->
	<p style="font-family:var(--wp--preset--font-family--literata);font-style:italic;color:var(--wp--preset--color--wake-fog);line-height:1.55">Three categories. One standard. The water does not care which category you hold.</p>
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
				<p style="font-family:var(--wp--preset--font-family--jost);font-size:0.6875rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--wp--preset--color--wake-steel)">Guest</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"500","fontSize":"var:preset|font-size|2xl","letterSpacing":"-0.01em"},"color":{"text":"var:preset|color|wake-void"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3"}}}} -->
				<h3 style="font-family:var(--wp--preset--font-family--literata);font-weight:500;letter-spacing:-0.01em;color:var(--wp--preset--color--wake-void)">Associate</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"300","fontSize":"var:preset|font-size|3xl","letterSpacing":"-0.02em","lineHeight":"1"},"color":{"text":"var:preset|color|wake-void"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
				<p style="font-family:var(--wp--preset--font-family--literata);font-weight:300;letter-spacing:-0.02em;line-height:1;color:var(--wp--preset--color--wake-void)">$240 <span style="font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--wake-steel)">/ season</span></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontStyle":"italic","fontSize":"var:preset|font-size|sm","lineHeight":"1.6"},"color":{"text":"var:preset|color|wake-steel"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
				<p style="font-family:var(--wp--preset--font-family--literata);font-style:italic;color:var(--wp--preset--color--wake-steel);line-height:1.6">For those who sail occasionally, follow the journal, or are new to the club. Full journal access, racing by invitation, one cruise berth per season.</p>
				<!-- /wp:paragraph -->

				<!-- wp:html -->
				<ul class="wake-tier-card__features">
					<li>Full journal archive access</li>
					<li>Wednesday evening race participation (as crew)</li>
					<li>One North Channel cruise berth</li>
					<li>Club social events</li>
					<li>Digital copy of the annual report</li>
				</ul>
				<!-- /wp:html -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|6"}}}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"style":{"color":{"background":"var:preset|color|wake-navy","text":"var:preset|color|wake-white"},"typography":{"fontFamily":"var:preset|font-family|jost","fontWeight":"600","letterSpacing":"0.05em"},"border":{"radius":"0"}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/membership" style="background-color:var(--wp--preset--color--wake-navy);color:var(--wp--preset--color--wake-white)">Join as Associate</a></div>
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

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-brass"}}} -->
				<p style="font-family:var(--wp--preset--font-family--jost);font-size:0.6875rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--wp--preset--color--wake-brass)">Most Popular</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"500","fontSize":"var:preset|font-size|2xl","letterSpacing":"-0.01em"},"color":{"text":"var:preset|color|wake-white"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3"}}}} -->
				<h3 style="font-family:var(--wp--preset--font-family--literata);font-weight:500;letter-spacing:-0.01em;color:var(--wp--preset--color--wake-white)">Full Member</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"300","fontSize":"var:preset|font-size|3xl","letterSpacing":"-0.02em","lineHeight":"1"},"color":{"text":"var:preset|color|wake-white"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
				<p style="font-family:var(--wp--preset--font-family--literata);font-weight:300;letter-spacing:-0.02em;line-height:1;color:var(--wp--preset--color--wake-white)">$485 <span style="font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--wake-fog)">/ season</span></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontStyle":"italic","fontSize":"var:preset|font-size|sm","lineHeight":"1.6"},"color":{"text":"var:preset|color|wake-fog"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
				<p style="font-family:var(--wp--preset--font-family--literata);font-style:italic;color:var(--wp--preset--color--wake-fog);line-height:1.6">The full experience. Race registration, cruise priority booking, voting rights at the AGM, and your name in the annual race results.</p>
				<!-- /wp:paragraph -->

				<!-- wp:html -->
				<ul class="wake-tier-card__features" style="color:#f0ece4">
					<li>All Associate benefits</li>
					<li>PHRF race registration (all series)</li>
					<li>Priority cruise berth booking</li>
					<li>AGM voting rights</li>
					<li>Printed journal (mailed quarterly)</li>
					<li>Club burgee and documentation number</li>
				</ul>
				<!-- /wp:html -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|6"}}}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"style":{"color":{"background":"var:preset|color|wake-brass","text":"var:preset|color|wake-void"},"typography":{"fontFamily":"var:preset|font-family|jost","fontWeight":"600","letterSpacing":"0.05em"},"border":{"radius":"0"}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/membership" style="background-color:var(--wp--preset--color--wake-brass);color:var(--wp--preset--color--wake-void)">Join as Member</a></div>
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
				<p style="font-family:var(--wp--preset--font-family--jost);font-size:0.6875rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--wp--preset--color--wake-steel)">Patron</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"500","fontSize":"var:preset|font-size|2xl","letterSpacing":"-0.01em"},"color":{"text":"var:preset|color|wake-void"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3"}}}} -->
				<h3 style="font-family:var(--wp--preset--font-family--literata);font-weight:500;letter-spacing:-0.01em;color:var(--wp--preset--color--wake-void)">Commodore</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"300","fontSize":"var:preset|font-size|3xl","letterSpacing":"-0.02em","lineHeight":"1"},"color":{"text":"var:preset|color|wake-void"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
				<p style="font-family:var(--wp--preset--font-family--literata);font-weight:300;letter-spacing:-0.02em;line-height:1;color:var(--wp--preset--color--wake-void)">$950 <span style="font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--wake-steel)">/ season</span></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontStyle":"italic","fontSize":"var:preset|font-size|sm","lineHeight":"1.6"},"color":{"text":"var:preset|color|wake-steel"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
				<p style="font-family:var(--wp--preset--font-family--literata);font-style:italic;color:var(--wp--preset--color--wake-steel);line-height:1.6">For those who want to support the club beyond membership. All Full Member benefits plus patron recognition in the annual report and journal.</p>
				<!-- /wp:paragraph -->

				<!-- wp:html -->
				<ul class="wake-tier-card__features">
					<li>All Full Member benefits</li>
					<li>Named patron in annual report</li>
					<li>Named patron in journal masthead</li>
					<li>Two guest race entries per season</li>
					<li>Priority mooring at all club events</li>
					<li>Invitation to annual Commodore&#8217;s dinner</li>
				</ul>
				<!-- /wp:html -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|6"}}}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"style":{"color":{"background":"var:preset|color|wake-navy","text":"var:preset|color|wake-white"},"typography":{"fontFamily":"var:preset|font-family|jost","fontWeight":"600","letterSpacing":"0.05em"},"border":{"radius":"0"}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/membership" style="background-color:var(--wp--preset--color--wake-navy);color:var(--wp--preset--color--wake-white)">Become a Patron</a></div>
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
