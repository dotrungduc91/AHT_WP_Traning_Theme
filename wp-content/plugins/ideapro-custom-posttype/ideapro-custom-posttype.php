<?php
/**
 * Plugin Name: Idea Pro Custom Post Type
 */

 function ideapro_custom_posttype() {

    $args = [
        'labels' => [
            'name' => __('Examples'),
            'singular_name' => __('Example'),
            'add_new' => __('Add New Example'),
            'add_new_item' => __('Add New Example'),
            'edit_item' => __('Edit Example'),
            'search_items' => __('Search Examples'),
        ],
        'menu_position' => 5,
        'public' => true,
        'exclude_form_search'=>true,
        'has_archive' => false,
        'register_meta_box_cb' => 'example_metabox',
        'supports' => [
            'title',
            'editor',
            'thumbnail',
        ]
    ];

    register_post_type('Example', $args);

 }

 add_action('init', 'ideapro_custom_posttype');

 function example_metabox() {
    add_meta_box('example_metabox_customfileds', 'Example Custom Fields', 'example_metabox_display', 'example', 'normal', 'hight');
 }

 add_action('add_meta_box', 'example_metabox');

 function example_metabox_display () {
     echo "Here is it...";
 }

 function get_example_post_types() {
    $args = [
        'posts_per_page' => -1,
        'post_type' => 'example',
    ];

    $ourPosts = get_posts($args);

    /*String to return*/

    $content = '';

    foreach($ourPosts as $key => $val) {
        $content .= '<a href = '. get_permalink($val->ID) .'><strong>'. $val->post_title . '</strong></a>'.'<br/>';
        $content .= $val->post_content . '<hr/>';
    }

    return $content;
 }

 add_shortcode('get_example_posts', 'get_example_post_types');


