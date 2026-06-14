<?php
/**
 * Wake — theme entry point (thin loader, nothing more).
 *
 * @package wake
 */

defined( 'ABSPATH' ) || exit;

require_once __DIR__ . '/inc/bootstrap.php'; // [CORE] namespace + identity constants.
require_once __DIR__ . '/inc/setup.php';     // [CORE] theme supports, i18n, nav menus, skip link.
require_once __DIR__ . '/inc/assets.php';    // [CORE] cascade-ordered stylesheet enqueue + font preload.
require_once __DIR__ . '/inc/bindings.php';  // [CORE] footer copyright-year + removable credit.
require_once __DIR__ . '/inc/skin.php';      // [SKIN] this theme's image sizes, fonts, block styles.

if ( defined( 'WP_CLI' ) && WP_CLI && file_exists( __DIR__ . '/inc/cli.php' ) ) {
	require_once __DIR__ . '/inc/cli.php'; // [CORE] wp wake commands (excluded from the .org zip via .distignore).
}

if ( is_admin() ) {
	require_once __DIR__ . '/inc/admin.php'; // [CORE] WP.org-compliant Get-started page.
}
