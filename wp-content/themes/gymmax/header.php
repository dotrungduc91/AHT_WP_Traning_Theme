<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>    
</head>

<body <?php body_class(); ?>>
<?php 
if (file_exists( 'wp_body_open()' ) ) {
    wp_body_open();
}?>

<?php

$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
$url_custom_logo = $image[0];
?>

    <div class="wrapper">
        <!-- Header -->
         <div class="header">
            <div class="container">
                <section class="logo-mobile">
                        <a href= <?php echo GYMMAX_DIR_URI ?> ><img src=<?php echo $url_custom_logo ?>></a> 
                </section>
                <div class="header-inner">
                    <div class="logo">
                        <a href= <?php echo GYMMAX_DIR_URI ?> ><img src=<?php echo $url_custom_logo ?>></a>
                    </div>
                    <nav class="nav-bar">
                        <div class="nav-icon"><i class="fas fa-bars"></i></div>
                        <div class="menu-total">
                        <?php wp_nav_menu( 
                            array( 
                                'theme_location' => 'gymmax-header-menu', 
                                'container' => 'false', 
                                'menu_id' => 'header-menu', 
                                'menu_class' => 'menu'
                            )    
                        ); ?>
                            <div class="cover"></div>
                        </div>
                    </nav>

                </div>
            </div>
        </div>    
        <!-- End Header -->

        <!-- Main Content -->
        <div class="main-content">