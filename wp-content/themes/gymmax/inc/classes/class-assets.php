<?php
/**
 * Enqueue theme assets
 *
 * @package Gymmax
 */

namespace GYMMAX_THEME\Inc\Classes;

use GYMMAX_THEME\Inc\Traits\Singleton;

class Assets {
	use Singleton;

    protected function __construct() {
        $this->setup_hooks();
       
    }


    public function setup_hooks() {
        add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
    }

    function register_styles() {
        //Register Styles
        wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(GYMMAX_DIR_PATH .'/style.css'), 'all');
        wp_register_style('fonts-awesome-min',GYMMAX_DIR_URI .'/assets/src/library/css/fonts-awesome.min.css', [], false, 'all');
        wp_register_style('jquery-ui-min',GYMMAX_DIR_URI .'/assets/src/library/css/jquery-ui.min.css', [], false, 'all');
        wp_register_style('slick-theme',GYMMAX_DIR_URI .'/assets/src/library/css/slick-theme.css', [], false, 'all');
        wp_register_style('slick',GYMMAX_DIR_URI .'/assets/src/library/css/slick.css', [], false, 'all');
        wp_register_style('main-cs',GYMMAX_DIR_URI .'/assets/main.css', [], false, 'all');

        //Enqueue Styles
        wp_enqueue_style('style-css');
        wp_enqueue_style('fonts-awesome-min');
        wp_enqueue_style('jquery-ui-min');
        wp_enqueue_style('slick-theme');
        wp_enqueue_style('slick');
        wp_enqueue_style('main-cs');
    }

    function register_scripts() {

        //Register Script
        wp_register_script('jquery-3.6.0-min',GYMMAX_DIR_URI .'/assets/src/library/js/jquery-3.6.0.min.js', [], false , true);
        wp_register_script('jquery-ui-min',GYMMAX_DIR_URI .'/assets/src/library/js/jquery-ui.min.js', [], false , true);
        wp_register_script('slick-min',GYMMAX_DIR_URI .'/assets/src/library/js/slick.min.js', [], false , true);
        wp_register_script('main-js',GYMMAX_DIR_URI .'/assets/main.js', ['jquery'], filemtime(get_template_directory().'/assets/main.js'), true);

        //Enqueue Script
        wp_enqueue_script('jquery-3.6.0-min');
        wp_enqueue_script('jquery-ui-min');
        wp_enqueue_script('slick-min');
        wp_enqueue_script('main-js');
    }
}

