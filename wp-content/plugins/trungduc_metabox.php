<?php
/*
Plugin Name: Ví dụ Meta Box
Author: Trung Duc
Description: Hướng dẫn tạo meta box
Author URI: https://thachpham.com
*/

/**
 * Khai bao metabox
**/
function trungduc_meta_box()
{
 add_meta_box( 'thong-tin', 'Thông tin ứng dụng', 'trungduc_thongtin_output', 'post' );
}
add_action( 'add_meta_boxes', 'trungduc_meta_box' );

/**
 *Khai báo callback
 * @param $post là đối tượng WP_Post để nhận thông tin của post
**/
function trungduc_thongtin_output( $post )
{   
    // wp_nonce_field('save_thong_tin', 'thongtin_nonce');
    $link_download = get_post_meta( $post->ID, '_link_download', true );
    // Tạo trường Link Download
 echo ( '<label for="link_download">Link Download: </label>' );
 echo ('<input type="text" id="link_download" name="link_download" value="'.esc_attr( $link_download ).'" />');
}

/**
 *Lưu dữ liệu meta box khi nhập vào
 *@param post_id là ID của post hiện tại
**/
function trungduc_thongtin_save( $post_id )
{   
    // $thongtin_nonce = $_POST['thongtin_nonce'];
    // if(!empty($thongtin_nonce)) {
    //     return;
    // }
    // if(!wp_verify_nonce($thongtin_nonce, 'save_thongtin')) {
    //     return;
    // }
    if(empty($_POST['link_download'])){
        $link_download = '';
    }else {
        $link_download = sanitize_text_field( $_POST['link_download'] );
    }
    update_post_meta( $post_id, '_link_download', $link_download );
}
add_action( 'save_post', 'trungduc_thongtin_save' );
