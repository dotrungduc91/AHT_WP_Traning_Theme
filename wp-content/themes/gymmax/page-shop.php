<?php
/**
* Main template file
*
* @package Gymmax
*/
get_header();
?>
            <!-- Collumn -->
            <div class="collumn">
                <!-- Page Main -->
                <div class="page-main">
              

                    <!-- Product -->
                    <?php get_template_part('template-parts/components/home/products'); ?>
                    <!-- End Product -->

                </div>
                 <!-- End Page Main -->
            </div>
            <!--End Collumn -->           
<?php
get_footer();