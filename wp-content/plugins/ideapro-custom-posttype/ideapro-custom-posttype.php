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
    add_meta_box('example_metabox_customfileds', 'Example Custom Fields', 'example_metabox_display', 'example', 'normal', 'high');
 }

 add_action('add_meta_box', 'example_metabox');

 function example_metabox_display () {
        global $post;
        $sub_title = get_post_meta($post->ID, 'sub_title', true);   
        $author_name = get_post_meta($post->ID, 'author_name', true);


     ?> 
        <label for="sub_title">Sub Title</label>
        <input type="text" name="sub_title" class="widefat" placeholder="Sub Title " value="<?php print $sub_title  ?>"/>
        <br></br>
        <label for="sub_title">Author Name</label>
        <input type="text" name="author_name" class="widefat" placeholder="Authors Name" value="<?php print $author_name ?>"/>

    <?php
 }

 function example_metabox_save ( $post_id ) {
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    
    if ($is_autosave || $is_revision) {
        return;
    }

    $post = get_post($post_id);

    if($post->post_type == "example") {
        /*save the custom fields data */
        if(array_key_exists('sub_title', $_POST)) {
            update_post_meta($post_id, 'sub_title', $_POST['sub_title'] );
        }

        if(array_key_exists('author_name', $_POST)) {
            update_post_meta($post_id, 'author_name', $_POST['author_name'] );
        }
    }
 }
 add_action('save_post', 'example_metabox_save');

 function get_example_post_types() {
    $args = [
        'posts_per_page' => -1,
        'post_type' => 'example',
    ];

    $ourPosts = get_posts($args);

    /*String to return*/

    $content = '';

    foreach($ourPosts as $key => $val) {
        $sub_title = get_post_meta($val->ID, 'sub_title', true);   
        $author_name = get_post_meta($val->ID, 'author_name', true);

        $content .= '<a href = '. get_permalink($val->ID) .'><strong>'. $val->post_title . '</strong></a>'.'<br/>';
        if($sub_title != ''){$content .= $sub_title . '<br/>';}
        $content .= $val->post_content . '<br/>';
        if($sub_title != ''){$content .= '<em>Author:' . $author_name . '</em><br/>';} 
    }

    return $content;
 }

 add_shortcode('get_example_posts', 'get_example_post_types');


