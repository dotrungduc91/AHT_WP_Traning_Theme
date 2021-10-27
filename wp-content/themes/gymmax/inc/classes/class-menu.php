<?php

/**
 * Register Menu
 * 
 *  @package Gymmax
 */

namespace GYMMAX_THEME\Inc\Classes;

use GYMMAX_THEME\Inc\Traits\Singleton;

class Menu {
    use Singleton;

    protected function __construct() {
        // load class
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        /**
         * Actions
         */
        add_action('init', [ $this, 'register_menus']);
    }

    public function register_menus() {
        register_nav_menus([
			'gymmax-header-menu' => esc_html__( 'Header Menu', 'gymmax' ),
			// 'gymmax-footer-menu' => esc_html__( 'Footer Menu', 'gymmax' ),
		]);
    }
}   