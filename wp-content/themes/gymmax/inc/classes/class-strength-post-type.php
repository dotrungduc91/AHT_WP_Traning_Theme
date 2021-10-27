<?php
/**
 * 
 *
 * @package Gymmax
 */

namespace GYMMAX_THEME\Inc\Classes;

use GYMMAX_THEME\Inc\Traits\Singleton;

class Strength_Post_Type {
	use Singleton;

    protected function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        add_action( 'init', [ $this, 'register_strength_post_type'  ]);
    }

    /**
	 * Register Posttype
	 *
	 * @return void
	 */
     public function register_strength_post_type() {
        // Set various pieces of text, $labels is used inside the $args array
        $labels = array(
           'name' => _x( 'Strengths', 'post type general name' ),
           'singular_name' => _x( 'Strength', 'post type singular name' ),
        );

        // Set various pieces of information about the post type
        $args = array(
          'labels' => $labels,
          'description' => 'My strength post type',
          // 'public' => true,
          'menu_position' => 5,
          'supports' => [
          'title',
          'custom-fields',
          ],
          'public' => true, //Kích hoạt post type
          'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        );

        // Register the movie post type with all the information contained in the $arguments array
        register_post_type( 'strength', $args );
      }



}
