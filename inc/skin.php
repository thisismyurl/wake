<?php
/**
 * [SKIN] Wake — menus, image crops, font preloads, block styles, pattern categories.
 *
 * This is the one PHP file the colophon CLI never overwrites. All Wake-specific
 * hooks live here, not in functions.php.
 *
 * @package wake
 */

namespace Wake;

defined( 'ABSPATH' ) || exit;
// Opt this theme into GitHub-release self-updates (see inc/github-updater.php).
add_filter( 'wake/github_updater_repo', static function (): string {{
	return 'thisismyurl/wake';
}} );

// =========================================================================
// SETUP — additional menus and navigation
// =========================================================================

/**
 * Register Wake-specific navigation menus.
 */
function skin_setup(): void {
	register_nav_menus(
		array(
			'primary'     => esc_html__( 'Primary Navigation', 'wake' ),
			'footer'      => esc_html__( 'Footer Navigation', 'wake' ),
			'social'      => esc_html__( 'Social Links', 'wake' ),
			'section-nav' => esc_html__( 'Section Navigation', 'wake' ),
		)
	);
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\skin_setup' );

// =========================================================================
// IMAGE SIZES
// =========================================================================

/**
 * Register Wake image sizes for the block editor and REST API.
 */
function skin_image_sizes(): void {
	add_image_size( 'wake-hero', 1440, 810, true );  // 16:9 full-bleed hero.
	add_image_size( 'wake-feature', 780, 520, true );  // 3:2 story feature image.
	add_image_size( 'wake-card', 600, 400, true );  // 3:2 grid card thumbnail.
	add_image_size( 'wake-portrait', 600, 750, true );  // 4:5 crew/person portrait.
	add_image_size( 'wake-wide', 1280, 540, true );  // 7:3 panoramic crop.
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\skin_image_sizes' );

/**
 * Expose Wake image sizes in the block-editor media library.
 *
 * @param array<string, string> $sizes Existing size labels.
 * @return array<string, string>
 */
function skin_image_size_names( array $sizes ): array {
	return array_merge(
		$sizes,
		array(
			'wake-hero'     => esc_html__( 'Wake Hero (1440×810)', 'wake' ),
			'wake-feature'  => esc_html__( 'Wake Feature (780×520)', 'wake' ),
			'wake-card'     => esc_html__( 'Wake Card (600×400)', 'wake' ),
			'wake-portrait' => esc_html__( 'Wake Portrait (600×750)', 'wake' ),
			'wake-wide'     => esc_html__( 'Wake Wide (1280×540)', 'wake' ),
		)
	);
}
add_filter( 'image_size_names_choose', __NAMESPACE__ . '\\skin_image_size_names' );

// =========================================================================
// FONT PRELOADS
// =========================================================================

add_filter(
	'wake/preload_fonts',
	static function ( array $fonts ): array {
		$fonts[] = 'assets/fonts/literata/literata-variable.woff2';
		return $fonts;
	}
);

// =========================================================================
// BLOCK STYLES
// =========================================================================

/**
 * Register Wake-specific block style variations.
 */
function skin_block_styles(): void {

	// Group: full-bleed hero section with dark navy overlay.
	register_block_style(
		'core/group',
		array(
			'name'  => 'wake-hero-overlay',
			'label' => __( 'Hero Overlay', 'wake' ),
		)
	);

	// Group: tide-break divider — a thin horizontal rule with wave spacing rhythm.
	register_block_style(
		'core/group',
		array(
			'name'  => 'wake-tide-break',
			'label' => __( 'Tide Break', 'wake' ),
		)
	);

	// Group: log-entry card — bordered entry for journal/voyage log posts.
	register_block_style(
		'core/group',
		array(
			'name'  => 'wake-log-entry',
			'label' => __( 'Log Entry', 'wake' ),
		)
	);

	// Image: full-bleed treatment with minimal chrome.
	register_block_style(
		'core/image',
		array(
			'name'  => 'wake-bleed',
			'label' => __( 'Full Bleed', 'wake' ),
		)
	);

	// Paragraph: photo caption — small, muted, Jost italic.
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'wake-caption',
			'label' => __( 'Photo Caption', 'wake' ),
		)
	);

	// Paragraph: pull quote annotation — Literata italic, navy.
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'wake-annotation',
			'label' => __( 'Annotation', 'wake' ),
		)
	);

	// Paragraph: log entry — italic, brass left border, steel text. For ship's-log inline notes.
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'wake-log-entry',
			'label' => __( 'Log Entry', 'wake' ),
		)
	);

	// Paragraph: coordinates — Jost tabular-nums, fog colour. For lat/lon datelines.
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'wake-coordinates',
			'label' => __( 'Coordinates', 'wake' ),
		)
	);

	// Heading: brass-underline treatment for section headers.
	register_block_style(
		'core/heading',
		array(
			'name'  => 'wake-brass-rule',
			'label' => __( 'Brass Rule', 'wake' ),
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\\skin_block_styles' );

// =========================================================================
// PATTERN CATEGORIES
// =========================================================================

/**
 * Register Wake block pattern categories.
 */
function skin_pattern_categories(): void {
	$categories = array(
		'wake-editorial' => array(
			'label'       => __( 'Wake: Editorial', 'wake' ),
			'description' => __( 'Full-page editorial and hero patterns.', 'wake' ),
		),
		'wake-crew'      => array(
			'label'       => __( 'Wake: Crew &amp; Club', 'wake' ),
			'description' => __( 'Member profiles, crew bios, and club information patterns.', 'wake' ),
		),
		'wake-cta'       => array(
			'label'       => __( 'Wake: Calls to Action', 'wake' ),
			'description' => __( 'Membership CTA, newsletter, and subscription patterns.', 'wake' ),
		),
	);
	foreach ( $categories as $cat_slug => $args ) {
		register_block_pattern_category( $cat_slug, $args );
	}
}
add_action( 'init', __NAMESPACE__ . '\\skin_pattern_categories' );
