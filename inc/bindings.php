<?php
/**
 * [CORE] Block-bindings sources — the footer's living copyright year and a
 * credit line that's genuinely easy to remove.
 *
 * A static template part can't compute the current year, and hardcoding one is
 * a quiet way to look abandoned every January. So parts/footer.html binds its
 * copyright paragraph to the `wake/copyright` source registered here (WP
 * 6.5+ block bindings) — one small, removable callback instead of a render
 * filter reinventing what the bindings API already does.
 *
 * The "Built with …" credit binds to a second source so an integrator can
 * rewrite or drop it through a filter without editing a template. Both source
 * names derive from SLUG, so a theme installed beside its siblings never
 * collides. The credit text reads the theme's own Name and Theme URI from the
 * style.css header, so this file carries no theme-specific string and stays
 * pure core.
 *
 * @package wake
 */

namespace Wake;

defined( 'ABSPATH' ) || exit;

/**
 * Register the copyright and footer-credit binding sources.
 *
 * Guarded on register_block_bindings_source() so the theme degrades cleanly on
 * any pre-6.5 install that slips past the "Requires at least" header.
 */
function register_bindings(): void {
	if ( ! function_exists( 'register_block_bindings_source' ) ) {
		return;
	}

	register_block_bindings_source(
		SLUG . '/copyright',
		array(
			'label'              => __( 'Copyright line', 'wake' ),
			'get_value_callback' => __NAMESPACE__ . '\\get_copyright_value',
			'uses_context'       => array(),
		)
	);

	register_block_bindings_source(
		SLUG . '/footer-credit',
		array(
			'label'              => __( 'Footer credit line', 'wake' ),
			'get_value_callback' => __NAMESPACE__ . '\\get_footer_credit_value',
			'uses_context'       => array(),
		)
	);

	register_block_bindings_source(
		SLUG . '/ui-label',
		array(
			'label'              => __( 'Theme chrome label', 'wake' ),
			'get_value_callback' => __NAMESPACE__ . '\\get_ui_label_value',
			'uses_context'       => array(),
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\\register_bindings' );

/**
 * Resolve a translatable chrome label by key.
 *
 * Static block-theme templates and parts cannot wrap visitor-facing prose in
 * gettext, so the fixed UI strings that are NOT editable post content — the 404
 * "page not found" line, the "more to read" related-posts heading, the footer
 * column labels — bind their text to this source instead of hardcoding English.
 * The template passes its intended label as the binding's own `key` argument
 * (metadata.bindings.content.args.key); that key is the msgid, so `wp i18n
 * make-pot` still finds every string in the __() calls below, and a non-English
 * site renders the chrome in its own locale.
 *
 * Unknown keys fall back to the key itself, so a future template can add a label
 * here, register its __() call, and never render an empty node in the meantime.
 *
 * @param array $source_args The binding arguments; 'key' selects the label.
 * @return string The translated label, or the key when no translation is registered.
 */
function get_ui_label_value( array $source_args ): string {
	$key = isset( $source_args['key'] ) ? (string) $source_args['key'] : '';

	// Each case wraps the literal English in __() so make-pot extracts it and a
	// translator can override it; the key passed from the template is the msgid.
	switch ( $key ) {
		case 'page-not-found':
			return __( 'Page not found.', 'wake' );
		case 'more-to-read':
			return __( 'More to Read', 'wake' );
		case 'navigate':
			return __( 'Navigate', 'wake' );
		case 'follow':
			return __( 'Follow', 'wake' );
		default:
			return $key;
	}
}

/**
 * Resolve the copyright line: © {current year} {Site Title}. All rights reserved.
 *
 * Year comes from current_time() so it follows the site's timezone, not UTC.
 *
 * @return string The composed copyright sentence.
 */
function get_copyright_value(): string {
	/**
	 * Filters the date format used for the copyright year.
	 *
	 * Default 'Y' produces a four-digit year. Return a PHP date-format string
	 * — e.g. 'Y' for a single year, or supply a static string like '2022–2026'
	 * for a year range. The value is passed to current_time() so the result
	 * follows the site's timezone setting.
	 *
	 * @since 1.6148
	 *
	 * @param string $format PHP date format string, or a literal string.
	 */
	$format = (string) apply_filters( SLUG . '/copyright_date_format', 'Y' );
	$year   = (string) current_time( $format );

	$copyright = sprintf(
		/* translators: 1: four-digit year, 2: site title. */
		__( '© %1$s %2$s. All rights reserved.', 'wake' ),
		$year,
		esc_html( get_bloginfo( 'name' ) )
	);

	/**
	 * Filters the footer copyright sentence.
	 *
	 * Lets a child theme or companion plugin replace the copyright line without
	 * editing the footer template part.
	 *
	 * @since 1.0.0
	 *
	 * @param string $copyright The composed "© {year} {site}. All rights reserved." line.
	 */
	return (string) apply_filters( SLUG . '/copyright_text', $copyright );
}

/**
 * Resolve the "Built with the {Theme} theme." footer credit.
 *
 * The theme name and home link come from the style.css header (Name + Theme
 * URI), so this stays generic across the line — no theme types its own name
 * here. Bound by parts/footer.html so the credit is filterable without a
 * template edit; return an empty string from the filter to drop it entirely.
 * Output is run through wp_kses to a minimal anchor allow-list so a filtered
 * value can't inject arbitrary tags.
 *
 * @return string The credit line markup (possibly empty).
 */
function get_footer_credit_value(): string {
	$theme = wp_get_theme();
	$name  = $theme->get( 'Name' );
	$home  = $theme->get( 'ThemeURI' );

	$linked = $home
		? '<a href="' . esc_url( $home ) . '" rel="nofollow">' . esc_html( $name ) . '</a>'
		: esc_html( $name );

	$credit = sprintf(
		/* translators: %s: linked theme name. */
		__( 'Built with the %s theme.', 'wake' ),
		$linked
	);

	/**
	 * Filters the footer credit line.
	 *
	 * Return an empty string to remove the credit, or any string to replace it.
	 * Output is sanitized with wp_kses to a minimal anchor allow-list.
	 *
	 * @since 1.0.0
	 *
	 * @param string $credit The default "Built with the {Theme} theme." markup.
	 */
	$credit = (string) apply_filters( SLUG . '/footer_credit', $credit );

	return wp_kses(
		$credit,
		array(
			'a' => array(
				'href'   => array(),
				'rel'    => array(),
				'target' => array(),
			),
		)
	);
}
