<?php
/**
 * Enqueue theme assets
 *
 * @package Gymmax
 */

namespace GYMMAX_THEME\Inc\Classes;

use GYMMAX_THEME\Inc\Traits\Singleton;

class About_Us_Slick_Post_Type {
	use Singleton;

    protected function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        add_action( 'init', [ $this, 'register_about_us_post_type'  ]);
    }

    /**
	 * Register Posttype
	 *
	 * @return void
	 */
     public function register_about_us_post_type() {
        // Set various pieces of text, $labels is used inside the $args array
        $labels = array(
           'name' => _x( 'About Us', 'post type general name' ),
           'singular_name' => _x( 'About Us', 'post type singular name' ),
        );

        // Set various pieces of information about the post type
        $args = array(
          'labels' => $labels,
          'description' => 'My About us post type',
          'public' => true,
          'menu_position' => 5,
          'supports' => [
          'title',
          'custom-fields',
          ],
          'taxonomies' => array( 'category', 'post_tag' ), //Các taxonomy được phép sử dụng để phân loại nội dung
          'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
          'public' => true, //Kích hoạt post type
          'show_ui' => true, //Hiển thị khung quản trị như Post/Page
          'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
          'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
          'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
          'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
          'menu_icon' => 'dashicons-cart', //Đường dẫn tới icon sẽ hiển thị
          'can_export' => true, //Có thể export nội dung bằng Tools -> Export
          'has_archive' => true, //Cho phép lưu trữ (month, date, year)
          'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
          'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
          'capability_type' => 'post' //
        );

        // Register the movie post type with all the information contained in the $arguments array
        register_post_type( 'about_us', $args );
      }



}
