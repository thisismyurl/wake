<?php
/**
 * Pattern: Story Grid
 *
 * Four-column live-posts query on a salt-white background section.
 * Each card: featured image (3:2), category label, headline, date.
 * Used below the editorial hero to showcase recent stories.
 *
 * @package wake
 */
?>
<!-- wp:group {"className":"wake-pattern-story-grid wake-story-grid-section","metadata":{"categories":["wake-layouts"],"name":"Story Grid"},"style":{"color":{"background":"var:preset|color|wake-salt"},"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group wake-pattern-story-grid wake-story-grid-section" style="background-color:var(--wp--preset--color--wake-salt)">

	<!-- wp:heading {"level":5,"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-steel"},"spacing":{"margin":{"bottom":"var:preset|spacing|8"}}}} -->
	<h5 class="" style="color:var(--wp--preset--color--wake-steel)">Latest Stories</h5>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":3,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->

			<!-- wp:group {"className":"wake-story-card","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group wake-story-card">

				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","sizeSlug":"wake-card","className":"wake-story-card__image"} /-->

				<!-- wp:group {"className":"wake-story-card__body","style":{"spacing":{"padding":{"top":"var:preset|spacing|4","left":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group wake-story-card__body">

					<!-- wp:post-terms {"term":"category","style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-steel"}}} /-->

					<!-- wp:post-title {"isLink":true,"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"500","lineHeight":"1.22"}}} /-->

					<!-- wp:post-date {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"500","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-brass"}}} /-->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
