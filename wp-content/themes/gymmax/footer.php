<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
$url_custom_logo = $image[0];
?>

</div>
        <!-- Main Content -->
        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <!-- Social-media -->
                <div class="social-media">
                    <div class="logo">
                        <a href= <?php GYMMAX_DIR_URI ?> ><img src=<?php echo $url_custom_logo ?>></a>
                    </div>
                    <div class="content">
                        <div class="content-inner">
                            <?php echo get_field('footer_slogan', 'option') ?>       
                        </div>
                    </div>
                    <div class="media-icon">
                        <ul>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href=""><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--End  Social-media -->
                <!-- Information -->
                <div class="information">
                    <div class="row">
                        <div class="information-item">
                            <div class="information-title">CONTACT US</div>
                            <div class="information-content">
                                <ul>
                                    <li><a href=""><i class="fas fa-map-marker-alt"></i><?php echo get_field('footer_address', 'option') ?></a></li>
                                    <li><a href=""><i class="fas fa-phone"></i><?php echo get_field('footer_phone', 'option') ?></a></li>
                                    <li><a href=""><i class="far fa-envelope"></i><?php echo get_field('footer_email', 'option') ?></a></li>
                                    <li><a href=""><i class="fas fa-clock"></i><?php echo get_field('footer_open_time', 'option') ?></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="information-item">
                            <div class="information-title">MY ACCOUNT</div>
                            <div class="information-content">
                                <ul>
                                    <li><a href="">My account</a></li>
                                    <li><a href="">Check out</a></li>
                                    <li><a href="">Register</a></li>
                                    <li><a href="">Login</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="information-item">
                            <div class="information-title">INFORMATION</div>
                            <div class="information-content">
                                <ul>
                                    <li><a href="">About us</a></li>
                                    <li><a href="">Contact us</a></li>
                                    <li><a href="">Terms of user</a></li>
                                    <li><a href="">Pricacy policy</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="information-item">
                            <div class="information-title">QUICK LINK</div>
                            <div class="information-content">
                                <ul>
                                    <li><a href="">New user</a></li>
                                    <li><a href="">Heol center</a></li>
                                    <li><a href="">Report spam</a></li>
                                    <li><a href="">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Information -->
            </div>
            <div class="copy-right">Copy right @2019 Gymax - Design by ArrowHitech - All Rights Reserved</div>
        </div>
        <!-- End Footer -->
    </div>
    <?php wp_footer(); ?>
</body>
</html>