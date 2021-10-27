<div class="about-us">
    <div class="container">
        <div class="about-us-slider">
            <?php 
            // the query
            $args = array(
                'post_type'=> 'about_us',
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $the_query_strength = new WP_Query( $args ); 
            
            if ( $the_query_strength->have_posts() ) : ?>
            
                <!-- pagination here -->
            
                <!-- the loop -->
                <?php while ( $the_query_strength->have_posts() ) : $the_query_strength->the_post(); ?>

                    <!-- Slick Item  -->
                    <div class="slider-item">
                            <div class="title"><?php the_field('about_us_title') ?></div>
                            <div class="customer-avatar">
                                <div class="customer-avarta-inner">
                                    <img src=<?php the_field('about_us_customer_avartar') ?> alt="">
                                </div>
                            </div>
                            <div class="customer-content">
                                <div class="customer-content-inner">
                                <?php the_field('about_us_customer_comment') ?>
                                 </div>
                            </div>
                            <div class="customer-name"> <?php the_field('about_us_customer_name') ?> </div>
                            <div class="customer-description"> <?php the_field('about_us_customer_description') ?></div>
                    </div>
                    <!-- End Slick Item --> 
                <?php endwhile; ?>
                <!-- end of the loop -->
            
                <!-- pagination here -->
            
                <?php wp_reset_postdata(); ?>
            
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>   
                
                        </div>
                    </div>
                </div>