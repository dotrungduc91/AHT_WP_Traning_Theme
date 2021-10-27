<?php
/**
 * Gymmax the Theme.
 *
 * @package Gymmax
 */

namespace GYMMAX_THEME\Inc\Classes;

use GYMMAX_THEME\Inc\Traits\Singleton;

class GYMMAX_THEME {
	use Singleton;

    protected function __construct() {

		// Load class.
		$this->setup_hooks();
        Assets::get_instance();
        ThemeOption::get_instance();
        About_Us_Slick_Post_Type::get_instance();
        Brand_Post_Type::get_instance();
        Strength_Post_Type::get_instance();
        Menu::get_instance();
	}

    protected function setup_hooks() {
        /**
         * Actions
         */
        add_action('after_setup_theme', [ $this, 'setup_theme' ]);
    }

    public function setup_theme() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo', array(
            'header-text' => [ 'site-title', 'site-description' ],
            'height' => 100,
            'width'  => 400,
            'flex-height' => true,
            'flex-width' => true,
        ) );

        add_theme_support( 'custom-background', [
            'default-color' => '#fff',
	        'default-image' => '',
            'default-repeat' => 'no-repeat',
        ] );



        add_theme_support( 'post-thumbnails');

        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support( 'automatic-feed-links');

        add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			]
		);

        add_editor_style();

        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'align-wide' );		
        
        /**
        * Register image sizes.
        */
        add_image_size( 'thumbnail1', 350, 233, true );


        global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 1240;
		}

    }   
}