<?php
/**
 * [SKIN] The skin layer — the one PHP file the `colophon` CLI never overwrites.
 *
 * Wake is built for marina operators, charter companies, sailing schools, and
 * marina management services. Everything theme-specific lives here: image
 * crops sized for aerial marina photography and card grids, the block
 * styles this theme's patterns lean on, the pattern categories that group
 * Wake's editorial vocabulary in the inserter, and the block-bindings source
 * that powers the slip-status board — Wake's signature feature (see
 * patterns/slip-status-board.php for the full "why").
 *
 * @package wake
 */

defined( 'ABSPATH' ) || exit;

/**
 * The single post-meta key the slip-status binding source reads.
 *
 * Protected (leading underscore) because it is machine-maintained data, not
 * editorial copy. The theme registers no meta of its own — data belongs to a
 * plugin — so a site that wants this binding registers the key itself and the
 * source reads it read-only.
 */
define( 'WAKE_SLIP_STATUS_META_KEY', '_wake_slip_status' );

/**
 * Register this theme's image crop sizes.
 *
 * Hooked on after_setup_theme (not the core setup() function) so a re-skin
 * changes crops here without touching inc/setup.php.
 *
 * wake-hero and wake-wide are 16:9 — the aerial marina photography this
 * theme is built around reads best wide and shallow. wake-card is 3:2, the
 * conventional card ratio for service and story grids.
 */
function wake_skin_image_sizes(): void {
	add_image_size( 'wake-hero', 2000, 1125, true ); // 16:9 full-bleed hero.
	add_image_size( 'wake-wide', 1440, 810, true );  // 16:9 wide section image.
	add_image_size( 'wake-card', 720, 480, true );   // 3:2 card crop.

	/**
	 * Fires after the theme registers its image crop sizes.
	 *
	 * Companion plugins and re-skins hook here to add their own sizes
	 * without editing this file.
	 *
	 * @since 1.6150
	 */
	do_action( WAKE_SLUG . '/register_image_sizes' );
}
add_action( 'after_setup_theme', 'wake_skin_image_sizes' );

/**
 * Expose Wake's image sizes in the block editor media library.
 *
 * @param array<string, string> $sizes Existing size labels.
 * @return array<string, string>
 */
function wake_skin_image_size_names( array $sizes ): array {
	return array_merge(
		$sizes,
		array(
			'wake-hero' => esc_html__( 'Wake Hero (2000×1125)', 'wake' ),
			'wake-wide' => esc_html__( 'Wake Wide (1440×810)', 'wake' ),
			'wake-card' => esc_html__( 'Wake Card (720×480)', 'wake' ),
		)
	);
}
add_filter( 'image_size_names_choose', 'wake_skin_image_size_names' );

/**
 * Register this theme's block styles (the is-style-{name} options in the editor).
 *
 * cl-card and cl-eyebrow are the Colophon-core defaults, kept because Wake's
 * patterns use both. wk-badge-icon and wk-notice are Wake's own additions:
 * wk-badge-icon is the circular icon-badge treatment behind the feature grid
 * (Pillar 8, Kodawari — a group style, not a one-off inline style, so an
 * editor building a fourth feature column gets the same badge for free).
 * wk-notice is the amber/black hazard-stripe callout: the marine-signage
 * convention ("NO WAKE ZONE", "FUEL DOCK CLOSED") applied to an editorial
 * paragraph, so a marina operator can flag a closure or an advisory the way
 * they already flag one on the dock.
 */
function wake_skin_block_styles(): void {
	register_block_style(
		'core/group',
		array(
			'name'  => 'cl-card',
			'label' => __( 'Card', 'wake' ),
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'cl-eyebrow',
			'label' => __( 'Eyebrow', 'wake' ),
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'  => 'wk-badge-icon',
			'label' => __( 'Icon Badge (Wake)', 'wake' ),
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'wk-notice',
			'label' => __( 'Hazard Notice (Wake)', 'wake' ),
		)
	);

	/**
	 * Fires after the theme registers its block styles.
	 *
	 * Hook here to add is-style-* options to any block without touching
	 * this file. The CSS for each style lives in assets/css/skin.css.
	 *
	 * @since 1.6150
	 */
	do_action( WAKE_SLUG . '/register_block_styles' );
}
add_action( 'init', 'wake_skin_block_styles' );

/**
 * Register this theme's pattern categories.
 *
 * Prefixed with the theme's own slug so a theme installed beside its
 * siblings never collides. Pattern files in /patterns/*.php declare which
 * category they slot into.
 */
function wake_skin_pattern_categories(): void {
	$categories = array(
		'wake-hero'     => array(
			'label'       => __( 'Wake: Hero', 'wake' ),
			'description' => __( 'Full-bleed opening sections for the front page.', 'wake' ),
		),
		'wake-sections' => array(
			'label'       => __( 'Wake: Sections', 'wake' ),
			'description' => __( 'Service, feature, and trust section patterns for building pages.', 'wake' ),
		),
		'wake-cta'      => array(
			'label'       => __( 'Wake: Calls to Action', 'wake' ),
			'description' => __( 'Booking and enquiry call-to-action bands.', 'wake' ),
		),
	);

	foreach ( $categories as $slug => $args ) {
		register_block_pattern_category( $slug, $args );
	}

	/**
	 * Fires after the theme registers its pattern categories.
	 *
	 * Hook here to register additional categories alongside the theme's
	 * own, so all categories appear grouped in the block inserter.
	 *
	 * @since 1.6150
	 */
	do_action( WAKE_SLUG . '/register_pattern_categories' );
}
add_action( 'init', 'wake_skin_pattern_categories' );

/*
 * Preload the LCP font — DM Sans carries the hero headline on the front page,
 * which is the Largest Contentful Paint candidate on Wake's primary landing
 * template. Only the latin-subset file is preloaded (the smaller of the two);
 * the browser fetches the latin-ext file separately and only when the page
 * content actually requires those glyphs.
 */
add_filter( WAKE_SLUG . '/preload_fonts', static function ( array $fonts ): array {
	$fonts[] = 'assets/fonts/dm-sans/dm-sans-variable-latin.woff2';
	return $fonts;
} );

/**
 * Override the "Get started" page copy for Wake.
 *
 * Core's default 'optimize' paragraph names "the breaking-news dismiss
 * control" as Wake's one script — that is Masthead's copy, not this
 * theme's. Wake ships zero front-end JavaScript, full stop, so the default
 * would be a false claim on this theme's own onboarding page. Overridden
 * here rather than edited in inc/admin.php, which `colophon sync` owns.
 *
 * @param array $content The default Get-started content (see wake_get_started_content()).
 * @return array The content with Wake's own lead and optimize copy.
 */
function wake_skin_get_started_content( array $content ): array {
	$content['lead'] = esc_html__( 'Wake is a free, full-site-editing theme built for marinas, charter operators, sailing schools, and marina management companies. Here is how to make it your dock.', 'wake' );

	$content['optimize'] = array(
		esc_html__( 'This theme ships zero front-end JavaScript — the slip-status board, the service grid, and every pattern are plain HTML and CSS. Fonts are self-hosted and do not phone home, and the theme is tuned against the Core Web Vitals search engines actually measure.', 'wake' ),
		esc_html__( 'It is built to WCAG 2.2 AA guidance — real focus outlines, a skip link, sensible heading order, and motion that respects a reduce-motion setting. Keep your own copy and images to that bar and the whole site stays welcoming.', 'wake' ),
	);

	return $content;
}
add_filter( WAKE_SLUG . '/get_started_content', 'wake_skin_get_started_content' );

/**
 * Register a Block Bindings source for a slip's status label.
 *
 * The slip-status-board pattern (Wake's signature feature — see that file's
 * docblock for the full case) hardcodes each row's status as plain text in
 * the pattern markup, which is enough for the pattern to ship real,
 * inspectable demo content out of the box. This binding source exists so a
 * site that wants to drive the board from post meta — a real per-slip
 * "status" custom field, kept current from the dock office — can bind the
 * status paragraph to it instead of hand-editing the pattern, with no
 * companion plugin required. It is opt-in: nothing in this theme calls it
 * unless a user's own binding attribute does.
 *
 * The source reads one fixed key, WAKE_SLIP_STATUS_META_KEY, rather than a
 * key named in the binding args: a source that returns whatever meta key the
 * markup asks for is a read primitive for every private key on the post, and
 * core's own post-meta source refuses protected keys for exactly that reason.
 * The post-visibility guard mirrors core's too (see wp-includes/block-bindings/
 * post-meta.php) so a draft or password-protected post never leaks its status.
 *
 * Returning null — not a fallback label — is what makes it degrade well: core
 * leaves the block's own text in place when a source returns null, so a slip
 * with no meta keeps whatever the editor typed into the pattern instead of
 * being relabelled "Available", which is a claim the site cannot stand behind.
 *
 * @since 1.6150
 */
function wake_skin_register_bindings(): void {
	if ( ! function_exists( 'register_block_bindings_source' ) ) {
		return;
	}

	register_block_bindings_source(
		WAKE_SLUG . '/slip-status',
		array(
			'label'              => esc_html__( 'Slip Status', 'wake' ),
			'uses_context'       => array( 'postId' ),
			'get_value_callback' => 'wake_skin_get_slip_status_value',
		)
	);
}
add_action( 'init', 'wake_skin_register_bindings' );

/**
 * Resolve a slip's status label from post meta.
 *
 * @param array         $source_args    Binding args (unused — the meta key is fixed).
 * @param WP_Block|null $block_instance The block being rendered.
 * @return string|null The stored status, or null to leave the block's own text alone.
 */
function wake_skin_get_slip_status_value( array $source_args, $block_instance = null ): ?string {
	unset( $source_args );

	$context = $block_instance instanceof WP_Block ? $block_instance->context : array();
	$post_id = $context['postId'] ?? get_the_ID();
	$post    = $post_id ? get_post( (int) $post_id ) : null;

	if ( ! $post instanceof WP_Post ) {
		return null;
	}

	if ( post_password_required( $post ) ) {
		return null;
	}

	if ( ! is_post_publicly_viewable( $post ) && ! current_user_can( 'read_post', $post->ID ) ) {
		return null;
	}

	$value = get_post_meta( $post->ID, WAKE_SLIP_STATUS_META_KEY, true );

	return is_string( $value ) && '' !== $value ? $value : null;
}
