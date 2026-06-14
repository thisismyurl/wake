<?php
/**
 * Title: Navigation Band
 * Slug: wake/navigation-band
 * Categories: wake-editorial
 * Description: Full-width section-navigation band. Assign the "Section Nav" menu under Appearance → Menus to populate the links.
 * Viewport Width: 1280
 * Inserter: true
 *
 * A full-width navy section-navigation band. Populated from the WordPress
 * navigation menu assigned to the "section-nav" menu location so it works
 * on any real site — no hardcoded category slugs.
 *
 * skin.php registers the "Section Navigation" (section-nav) menu location.
 * Assign your categories there; this pattern renders whatever the editor
 * has configured without any code changes.
 *
 * @package wake
 */
?>
<!-- wp:group {"className":"wake-pattern-nav-band","metadata":{"categories":["wake-editorial"],"name":"Navigation Band"},"style":{"color":{"background":"var:preset|color|wake-navy"},"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group wake-pattern-nav-band" style="background-color:var(--wp--preset--color--wake-navy)">

	<!-- White, not fog: the nav-band ground is wake-navy, which inverts with the
	     edition. wake-white inverts in lockstep with it, so the links clear AA
	     (11:1+) in every style variation; fog floats mid-tone and fails on several. -->
	<!-- wp:navigation {"menuSlug":"section-nav","className":"wake-nav-band","overlayMenu":"never","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"},"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"var:preset|font-size|sm","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-white"},"spacing":{"blockGap":"var:preset|spacing|8"}}} /-->

</div>
<!-- /wp:group -->
