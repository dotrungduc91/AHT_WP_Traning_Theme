<?php
/*
Plugin Name: Slick Custom PostType
Author: Trung Duc
Description: Tạo Custom PostType cho Slick
Author URI: https://thachpham.com
*/

function tao_custom_post_type_slick()
{
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Slicks', //Tên post type dạng số nhiều
        'singular_name' => 'Slick', //Tên post type dạng số ít
        'add_new'            =>  'Add New Slick' ,
        'add_new_item'       =>  'Add New Slick' ,
        'edit_item'          =>  'Edit Slick' ,
        'new_item'           =>  'New Slick' ,
        'all_items'          =>  'All Slicks' ,
        'view_item'          =>  'View Slick' ,
        'search_items'       =>  'Search Slicks' ,
        'featured_image'     => 'Customer Image',
        'set_featured_image' => 'Add Customer Image'
    );


    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Post type tạo Slick', //Mô tả của post type
        'supports' => array(
            'title',
            'thumbnail',
            'custom-fields'
        ), //Các tính năng được hỗ trợ trong post type
        'taxonomies' => array( 'category', 'post_tag' ), //Các taxonomy được phép sử dụng để phân loại nội dung
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type   
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => '', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post', //
        'query_var'         => 'slick'
    );


    register_post_type('slick', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên


}
/* Kích hoạt hàm tạo custom post type */
add_action('init', 'tao_custom_post_type_slick');


