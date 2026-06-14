<?php
/**
 * [CORE] Bootstrap — the single re-prefixing point for the whole theme line.
 *
 * @package wake
 */

namespace Wake;

defined( 'ABSPATH' ) || exit;

const SLUG    = 'wake';
const VERSION = '1.6165.1329';

define( __NAMESPACE__ . '\\DIR', get_template_directory() );
define( __NAMESPACE__ . '\\URI', get_template_directory_uri() );
