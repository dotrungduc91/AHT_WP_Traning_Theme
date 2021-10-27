<?php
/**
 * Theme Functions.
 *
 * @package Gymmax
 */

if ( ! defined( 'GYMMAX_DIR_PATH' ) ) {
	define( 'GYMMAX_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'GYMMAX_DIR_URI' ) ) {
	define( 'GYMMAX_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once GYMMAX_DIR_PATH . '/inc/helpers/autoloader.php';
require_once GYMMAX_DIR_PATH . '/inc/helpers/template-tags.php';

function gymmax_get_theme_instance() {
	GYMMAX_THEME\Inc\Classes\GYMMAX_THEME::get_instance();
}

gymmax_get_theme_instance();




