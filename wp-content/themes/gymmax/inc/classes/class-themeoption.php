<?php
/**
 * Class theme options
 *
 * @package Gymmax
 */

namespace GYMMAX_THEME\Inc\Classes;

use GYMMAX_THEME\Inc\Traits\Singleton;

class ThemeOption {
	use Singleton;

    /**
	 * Construction function
	 *
	 * @return void
	 */

    protected function __construct() {
        $this->setup_hooks();
    }

    /**
	 * Add action hooks
	 *
	 * @return void
	 */
    public function setup_hooks() {
        add_action('init',[ $this, 'add_option_page']);
    }

    /**
	 * Display theme option on Backend.
	 *
	 * @param string $location
	 *
	 * @return void
	 */

    public function add_option_page() {
        acf_add_options_page(array(
            'page_title' 	=> 'Theme General Settings',
            'menu_title'	=> 'Theme Settings',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));
        
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme Banner Settings',
            'menu_title'	=> 'Banner',
            'parent_slug'	=> 'theme-general-settings',
            'menu_slug' 	=> 'theme-banner-settings',
        ));
        
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme Strength Settings',
            'menu_title'	=> 'Strength',
            'parent_slug'	=> 'theme-general-settings',
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'About Us Settings',
            'menu_title'	=> 'About Us',
            'parent_slug'	=> 'theme-general-settings',
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Footer Settings',
            'menu_title'	=> 'Footer',
            'parent_slug'	=> 'theme-general-settings',
            'menu_slug' 	=> 'theme-footer-settings',
        ));

    }

}  