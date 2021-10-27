<?php
/*
Plugin Name: Brand Custom PostType
Author: Trung Duc
Description: Tạo Custom PostType cho Brand
*/

function tao_custom_post_type_brand()
{
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Brands', //Tên post type dạng số nhiều
        'singular_name' => 'brand', //Tên post type dạng số ít
        'add_new'            =>  'Add New Brand' ,
        'add_new_item'       =>  'Add New Brand' ,
        'edit_item'          =>  'Edit Brand' ,
        'new_item'           =>  'New Brand' ,
        'all_items'          =>  'All Brands' ,
        'view_item'          =>  'View Brand' ,
        'search_items'       =>  'Search Brands' ,
        'featured_image'     => 'Brand Image',
        'set_featured_image' => 'Add Brand Image'
    );

    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Post type to make brands', //Mô tả của post type
        'supports' => array(
            'title',
            'thumbnail',
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
        'query_var' => true,
    );
    register_post_type('brand', $args); //Tạo post type với slug tên là brand và các tham số trong biến $args ở trên
}
/* Kích hoạt hàm tạo custom post type */
add_action('init', 'tao_custom_post_type_brand');


