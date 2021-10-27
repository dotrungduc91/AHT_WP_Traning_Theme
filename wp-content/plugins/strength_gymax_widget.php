<?php
/*
Plugin Name: Strength Widget
Description: Strength Widget.
Author: Trung Duc
*/

/*
 * Khởi tạo widget item
 */
add_action( 'widgets_init', 'create_strength_widget' );
function create_strength_widget() {
	register_widget('Strength_Widget');
}

/**
 * Tạo class Banner_Widget
 */
class Strength_Widget extends WP_Widget {
	/**
	 * Thiết lập widget: đặt tên, base ID
	 */
	function __construct() {
        parent::__construct(
            'strength_widget', //Id dai dien cho widget
            'Strength Widget', //Ten Widget
            array (
                'description' => "Widget used to create strength"
            )
        );


	}


	/**
	 * Tạo form option cho widget
	 */
	function form( $instance ) {
        $default = array(
            'icon' => '',
            'title' => '',
            'content' => '',
            'background' => '',
        );
    
        $instance = wp_parse_args($instance, $default); //Dua key va gia tri cua $defaut vao $instance, bien instance se quan ly toan bo gia tri nhap  vao form
    
        $icon = esc_attr($instance['icon']);
        $title = esc_attr($instance['title']);
        $content = esc_attr($instance['content']);
        $background = esc_attr($instance['background']);
    
        echo "Icon Link: <input type = 'text' class = 'widefat' name ='" . $this->get_field_name('icon') ."' value ='". $icon . "'/>";
        echo "Title: <input type = 'text' class = 'widefat' name ='" . $this->get_field_name('title') ."' value ='". $title . "'/>";
        echo "Nhap noi dung: <textarea class = 'widefat' name ='". $this->get_field_name('content') ."'>". $content . "</textarea>";
        echo "Background: <input type = 'text' class = 'widefat' name ='" . $this->get_field_name('background') ."' value ='". $background . "'/>";
	}


	/**
	 * save widget form
	 */


	function update( $new_instance, $old_instance ) {
        parent::update( $new_instance, $old_instance );
		$instance = $old_instance;
		$instance['icon'] = strip_tags($new_instance['icon']);
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['content'] = strip_tags($new_instance['content']);
		$instance['background'] = strip_tags($new_instance['background']);
		return $instance;
	}


	/**
	 * Show widget
	 */


	function widget( $args, $instance ) {
        extract($args);

        $icon = apply_filters('icon', $instance['icon']);
        $title = apply_filters('title', $instance['title']);
        $content = apply_filters('content', $instance['content']);
        $background = apply_filters('background', $instance['background']);

        if(!empty($background)) {
            echo '
                <div class="strength-item img-item">
                    <img src='.$background.' alt="">
                </div>
            ';
        } else {
            echo '
                <div class="strength-item icon-item">
                    <div class="icon"><img src=' .$icon. ' alt=""></div>
                    <div class="title">' .$title. '</div>
                    <div class="content">
                        <div class="content-inner">
                            ' .$content. '
                        </div>
                    </div>
                </div>
            ';
        }

	}


}