<?php
/*
Plugin Name: Slick Meta Box
Author: Trung Duc
Description: Tạo MetaBox cho Slick Slider
*/

/**
 * Khai bao metabox
**/
function slick_meta_box()
{
    add_meta_box( 'slick-slider', 'MetaBox Slick Slider', 'slick_output', 'slick' );
}
add_action( 'add_meta_boxes', 'slick_meta_box' );

/**
 *Khai báo callback
 * @param $post là đối tượng WP_Post để nhận thông tin của post
**/
function slick_output( $post )
{   
    // wp_nonce_field('save_thong_tin', 'thongtin_nonce');
    $title = get_post_meta( $post->ID, '_title', true );
    $content = get_post_meta( $post->ID, '_content', true );
    $name = get_post_meta( $post->ID, '_name', true );
    $description = get_post_meta( $post->ID, '_description', true );

    echo $title;

 ?>

 <ul class = 'item'>
    <li>
        <label for="title">Title :</label>
        <input class = 'widefat' type = 'text' name = 'title' value = <?php echo $title ?>>       
     </li>
    
     <li>
        <label for="content">Content :</label>
        <textarea class = 'widefat' type = 'text' name = 'content'> <?php echo $content ?> </textarea>       
     </li>

     <li>
        <label for="name">Name :</label>
        <input class = 'widefat' type = 'text' name = 'name' value = <?php echo $name ?>>       
     </li>

     <li>
        <label for="description">Description :</label>
        <textarea class = 'widefat' type = 'text' name = 'description'> <?php echo $description ?> </textarea>       
     </li>
</ul>
<?php }

/**
 *Lưu dữ liệu meta box khi nhập vào
 *@param post_id là ID của post hiện tại
**/
function slick_save( $post_id )
{   
    // $thongtin_nonce = $_POST['thongtin_nonce'];
    // if(!empty($thongtin_nonce)) {
    //     return;
    // }
    // if(!wp_verify_nonce($thongtin_nonce, 'save_thongtin')) {
    //     return;
    // }


    if(empty($_POST['title'])){
        $title = '';
    }else {
        $title = sanitize_text_field( $_POST['title'] );
    }
    update_post_meta( $post_id, '_title', $title );

    if(empty($_POST['content'])){
        $content = '';
    }else {
        $content = sanitize_text_field( $_POST['content'] );
    }
    update_post_meta( $post_id, '_content', $content );

    if(empty($_POST['name'])){
        $name = '';
    }else {
        $name = sanitize_text_field( $_POST['name'] );
    }
    update_post_meta( $post_id, '_name', $name );

    if(empty($_POST['description'])){
        $description = '';
    }else {
        $description = sanitize_text_field( $_POST['description'] );
    }
    update_post_meta( $post_id, '_description', $description );

}
add_action( 'save_post', 'slick_save' );
