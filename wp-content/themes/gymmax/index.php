<?php
/**
* Main template file
*
* @package Gymmax
*/

get_header();
?>
            <!-- Banner -->
            <?php get_template_part('template-parts/components/home/banner'); ?>
            <!-- End Banner -->

            <!-- Collumn -->
            <div class="collumn">
                <!-- Page Main -->
                <div class="page-main">
                    <!-- Strength -->
                    <?php get_template_part('template-parts/components/home/streng'); ?>
                    <!-- End Strength -->

                    <!-- Product -->
                    <?php get_template_part('template-parts/components/home/products'); ?>
                    <!-- End Product -->

                    <!-- Say About Us -->
                    <?php get_template_part('template-parts/components/home/about-us'); ?>
                    <!-- End Say About Us -->

                    <!-- Brand -->
                    <?php get_template_part('template-parts/components/home/brands'); ?>
                    <!-- End Brand -->
                </div>
                 <!-- End Page Main -->
            </div>
            <!--End Collumn -->           
<?php
get_footer();