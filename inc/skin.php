<?php
/**
 * [SKIN] The skin layer — the one PHP file the `colophon` CLI never overwrites.
 *
 * Everything theme-specific that needs PHP lives here: which image crops to
 * register, which font to preload for the largest paint, the block styles and
 * pattern categories that make up this theme's editor vocabulary, and any
 * Get-started copy you want to override. The core inc/ files stay portable
 * because none of this leaks into them — that's the whole point of the split.
 *
 * @package wake
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register this theme's image crop sizes.
 *
 * Hooked on after_setup_theme (not the core setup() function) so a re-skin
 * changes crops here without touching inc/setup.php.
 */
function wake_skin_image_sizes(): void {
	add_image_size( 'cl-wide', 1600, 900, true ); // 16:9 wide/hero crop.
	add_image_size( 'cl-card', 720, 480, true );  // 3:2 card crop.

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
 * Register this theme's block styles (the is-style-{name} options in the editor).
 *
 * The defaults are deliberately few — a generic card group and an eyebrow
 * paragraph. A real skin adds the styles its patterns lean on. The CSS for
 * each lives in assets/css/skin.css @layer components.
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
	register_block_pattern_category(
		WAKE_SLUG . '-sections',
		array(
			'label'       => __( 'Wake: Sections', 'wake' ),
			'description' => __( 'Section patterns for building pages.', 'wake' ),
		)
	);

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
 * Preload the LCP font — EB Garamond is the display serif used for headings,
 * so it is the Largest Contentful Paint candidate on single posts and landing
 * pages. Only the latin-subset file is preloaded (the smaller of the two);
 * the browser fetches the latin-ext file separately and only when the page
 * content actually requires those glyphs.
 */
add_filter( WAKE_SLUG . '/preload_fonts', static function ( array $fonts ): array {
	$fonts[] = 'assets/fonts/eb-garamond/eb-garamond-normal.woff2';
	return $fonts;
} );
