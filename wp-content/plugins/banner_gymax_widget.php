<?php
/*
Plugin Name: Banner Widget
Description: Banner Widget.
Author: Trung Duc
*/

/*
 * Khởi tạo widget item
 */
add_action( 'widgets_init', 'create_banner_widget' );
function create_banner_widget() {
	register_widget('Banner_Widget');
}

/**
 * Tạo class Banner_Widget
 */
class Banner_Widget extends WP_Widget {
	/**
	 * Thiết lập widget: đặt tên, base ID
	 */
	function __construct() {
        parent::__construct(
            'banner_widget', //Id dai dien cho widget
            'Banner Widget', //Ten Widget
            array (
                'description' => "Widget used to create Banner"
            )
        );
	}


	/**
	 * Tạo form option cho widget
	 */
	function form( $instance ) {
        $default = array(
            'banner-img-link' => 'Input Banner link here',
            'title-top' => 'Input title top here',
            'title-bottom' => 'Input title bottom here',
            'description' => 'Input description here',
            'button-text' => 'Input text here',
            'button-url' => 'Input url here',
        );
    
        $instance = wp_parse_args($instance, $default); //Dua key va gia tri cua $defaut vao $instance, bien instance se quan ly toan bo gia tri nhap  vao form
    
        $banner_img_link = esc_attr($instance['banner-img-link']);
        $title_top = esc_attr($instance['title-top']);
        $title_bottom = esc_attr($instance['title-bottom']);
        $description = esc_attr($instance['description']);
        $button_text = esc_attr($instance['button-text']);
        $button_url = esc_attr($instance['button-url']);

    
        echo "Banner Image Link: <input type = 'text' class = 'widefat' name ='" . $this->get_field_name('banner-img-link') ."' value ='". $banner_img_link . "'/>";
        echo "Title Top: <input type = 'text' class = 'widefat' name ='" . $this->get_field_name('title-top') ."' value ='". $title_top . "'/>";
        echo "Title Bottom: <input type = 'text' class = 'widefat' name ='" . $this->get_field_name('title-bottom') ."' value ='". $title_bottom . "'/>";
        echo "Description: <input type = 'text' class = 'widefat' name ='" . $this->get_field_name('description') ."' value ='". $description . "'/>";
        echo "Button text: <input type = 'text' class = 'widefat' name ='" . $this->get_field_name('button-text') ."' value ='". $button_text . "'/>";
        echo "Button URL: <input type = 'text' class = 'widefat' name ='" . $this->get_field_name('button-url') ."' value ='". $button_url . "'/>";
	}

	/**
	 * save widget form
	 */

	function update( $new_instance, $old_instance ) {
        parent::update( $new_instance, $old_instance );
		$instance = $old_instance;
		$instance['banner-img-link'] = strip_tags($new_instance['banner-img-link']);
		$instance['title-top'] = strip_tags($new_instance['title-top']);
		$instance['title-bottom'] = strip_tags($new_instance['title-bottom']);
		$instance['description'] = strip_tags($new_instance['description']);
		$instance['button-text'] = strip_tags($new_instance['button-text']);
		$instance['button-url'] = strip_tags($new_instance['button-url']);
		return $instance;
	}

	/**
	 * Show widget
	 */

	function widget( $args, $instance ) {
        extract($args);
        $banner_img_link = apply_filters('banner-img-link', $instance['banner-img-link']);
        $title_top = apply_filters('title-top', $instance['title-top']);
        $title_bottom = apply_filters('title-bottom', $instance['title-bottom']);
        $description = apply_filters('description', $instance['description']);
        $button_text = apply_filters('button-text', $instance['button-text']);
        $button_url = apply_filters('button-url', $instance['button-url']);

        // echo $before_widget; 
        echo '
        <div class="slider"  style="background-image: url(' .$banner_img_link. ')">
        <div class="slider-content">
            <div class="container">
                <div class="slider-content-inner">
            <div class="title-top">' .$title_top. '</div>
            <div class="title-bottom">' .$title_bottom. '</div>
            <div class="description">
                <div class="description-inner">
                     '.$description.'
                </div>
            </div>
            <a class="slider-btn" href=' .$button_url. '>'. $button_text.'</a>
            </div>
            </div>
        </div>
    </div>
        ';
	}
}