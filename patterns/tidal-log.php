<?php
/**
 * Title: Tidal Log Entry
 * Slug: wake/tidal-log
 * Categories: wake-editorial
 * Viewport Width: 1280
 *
 * Pattern: Tidal Log Entry
 *
 * The ship's log meta block — Wake's signature feature. A double-rule separator
 * (the tide-rule style) frames a single line of log metadata: date, location,
 * conditions. Used at the top of a feature article to set the scene.
 *
 * Editors type their own log line into the paragraph. The format convention
 * is: Date — Location — Conditions. Example: "28 May 2026 — Lake Ontario — Wind SSW 12 kt"
 *
 * @package wake
 */
?>
<!-- wp:group {"className":"wake-pattern-tidal-log","metadata":{"categories":["wake-editorial"],"name":"Tidal Log Entry"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group wake-pattern-tidal-log">

	<!-- wp:separator {"className":"is-style-wake-tide-rule","style":{"color":{"background":"var:preset|color|wake-brass"}}} -->
	<hr class="wp-block-separator is-style-wake-tide-rule" style="background-color:var(--wp--preset--color--wake-brass)" />
	<!-- /wp:separator -->

	<!-- wp:paragraph {"className":"is-style-wake-log-entry","style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontStyle":"italic","fontSize":"var:preset|font-size|sm"},"color":{"text":"var:preset|color|wake-steel"},"spacing":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4"}}}} -->
	<p class="is-style-wake-log-entry" style="color:var(--wp--preset--color--wake-steel)">28 May 2026 &nbsp;—&nbsp; Lake Ontario &nbsp;—&nbsp; Wind SSW 12 kt, visibility 8 nm, sea state slight</p>
	<!-- /wp:paragraph -->

	<!-- wp:separator {"className":"is-style-wake-tide-rule","style":{"color":{"background":"var:preset|color|wake-brass"}}} -->
	<hr class="wp-block-separator is-style-wake-tide-rule" style="background-color:var(--wp--preset--color--wake-brass)" />
	<!-- /wp:separator -->

</div>
<!-- /wp:group -->
