<?php
/**
 * Title: Story Grid
 * Slug: wake/story-grid
 * Categories: wake-editorial
 * Viewport Width: 1280
 * Inserter: true
 *
 * Asymmetric two-column editorial grid: one lead story at 58% (featured
 * image, headline at 2xl, excerpt, date) and two secondary shorts at 42%
 * (category, headline, date only — no image). The classic newspaper splash
 * and shorts layout: the editor tells the reader which story matters most.
 *
 * A brass rule separates this section from the hero above. The section
 * header uses Jost at xl — demonstrating the grotesque voice at weight 500
 * alongside Literata story headlines below.
 *
 * @package wake
 */
?>
<!-- wp:group {"className":"wake-pattern-story-grid wake-story-grid-section","metadata":{"categories":["wake-editorial"],"name":"Story Grid"},"style":{"color":{"background":"var:preset|color|wake-salt"},"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|16"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group wake-pattern-story-grid wake-story-grid-section" style="background-color:var(--wp--preset--color--wake-salt)">

	<!-- section header with brass rule and Jost section title -->
	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|8"},"margin":{"bottom":"var:preset|spacing|8"}},"border":{"bottom":{"color":"var:preset|color|wake-brass","width":"2px"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
	<div class="wp-block-group" style="border-bottom:2px solid var(--wp--preset--color--wake-brass);padding-bottom:var(--wp--preset--spacing--8);margin-bottom:var(--wp--preset--spacing--8)">

		<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontWeight":"500","fontSize":"var:preset|font-size|xl","letterSpacing":"-0.01em"},"color":{"text":"var:preset|color|wake-void"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<h2 style="font-family:var(--wp--preset--font-family--jost);font-weight:500;font-size:var(--wp--preset--font-size--xl);letter-spacing:-0.01em;color:var(--wp--preset--color--wake-void);margin-top:0;margin-bottom:0">From the Journal</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-steel"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<p style="font-family:var(--wp--preset--font-family--jost);font-size:0.6875rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--wp--preset--color--wake-steel);margin-top:0;margin-bottom:0"><a href="/voyage-log" style="color:inherit;text-decoration:none">All entries →</a></p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

	<!-- asymmetric columns: 58% lead + 42% shorts -->
	<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|10"}}}} -->
	<div class="wp-block-columns">

		<!-- LEAD STORY (58%) -->
		<!-- wp:column {"width":"58%"} -->
		<div class="wp-block-column" style="flex-basis:58%">

			<!-- wp:query {"queryId":11,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
			<div class="wp-block-query">

				<!-- wp:post-template {"layout":{"type":"default"}} -->

					<!-- wp:group {"className":"wake-story-card wake-story-card--lead","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group wake-story-card wake-story-card--lead">

						<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","sizeSlug":"wake-card","className":"wake-story-card__image"} /-->

						<!-- wp:group {"className":"wake-story-card__body","style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|4","left":"0","right":"0"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"default"}} -->
						<div class="wp-block-group wake-story-card__body" style="padding-top:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--4);padding-left:0;padding-right:0">

							<!-- wp:post-terms {"term":"category","style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-steel"}}} /-->

							<!-- wp:post-title {"isLink":true,"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"500","fontSize":"var:preset|font-size|2xl","lineHeight":"1.18","letterSpacing":"-0.015em"},"color":{"text":"var:preset|color|wake-void"},"spacing":{"margin":{"top":"var:preset|spacing|2","bottom":"var:preset|spacing|4"}}}} /-->

							<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontSize":"var:preset|font-size|base","lineHeight":"1.7"},"color":{"text":"var:preset|color|wake-steel"}}} /-->

							<!-- wp:post-date {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"500","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-brass"},"spacing":{"margin":{"top":"var:preset|spacing|4"}}}} /-->

						</div>
						<!-- /wp:group -->

					</div>
					<!-- /wp:group -->

				<!-- /wp:post-template -->

			</div>
			<!-- /wp:query -->

		</div>
		<!-- /wp:column -->

		<!-- SECONDARY SHORTS (42%) -->
		<!-- wp:column {"width":"42%"} -->
		<div class="wp-block-column" style="flex-basis:42%">

			<!-- wp:query {"queryId":12,"query":{"perPage":2,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
			<div class="wp-block-query">

				<!-- wp:post-template {"layout":{"type":"default"}} -->

					<!-- wp:group {"className":"wake-story-short","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|2"},"border":{"bottom":{"color":"var:preset|color|wake-rule","width":"1px"}}},"layout":{"type":"default"}} -->
					<div class="wp-block-group wake-story-short" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);border-bottom:1px solid var(--wp--preset--color--wake-rule)">

						<!-- wp:post-terms {"term":"category","style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-steel"}}} /-->

						<!-- wp:post-title {"isLink":true,"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|literata","fontWeight":"500","fontSize":"var:preset|font-size|xl","lineHeight":"1.22","letterSpacing":"-0.01em"},"color":{"text":"var:preset|color|wake-void"},"spacing":{"margin":{"top":"var:preset|spacing|2","bottom":"var:preset|spacing|3"}}}} /-->

						<!-- wp:post-date {"style":{"typography":{"fontFamily":"var:preset|font-family|jost","fontSize":"0.6875rem","fontWeight":"500","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"var:preset|color|wake-brass"}}} /-->

					</div>
					<!-- /wp:group -->

				<!-- /wp:post-template -->

			</div>
			<!-- /wp:query -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
