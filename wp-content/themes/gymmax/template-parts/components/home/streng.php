<div class="strength">
    <div class="container">
        <div class="strength-inner">
        
        <?php 
            // the query
            $args = array(
                'post_type'=> 'strength',
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $the_query_strength = new WP_Query( $args ); 
            
            if ( $the_query_strength->have_posts() ) : ?>
            
                <!-- pagination here -->
            
                <!-- the loop -->
                <?php while ( $the_query_strength->have_posts() ) : $the_query_strength->the_post(); ?>
                    <?php
                        $image_exist = get_field('strength_image');
                        if (empty( $image_exist )) { ?>
                            <!-- Strengh Item 2 -->
                            <div class="strength-item icon-item">
                                <div class="icon"><img src= <?php the_field('strength_icon') ?> alt=""></div>
                                <div class="title"><?php the_field('strength_title') ?></div>
                                <div class="content">
                                    <div class="content-inner">
                                        <?php the_field('strength_description') ?>
                                    </div>
                                </div>
                            </div>
                            <!-- End Strengh Item 2 --> <?php
                        } else { 
                            ?>
                                <!-- Strengh Item 1 -->
                                <div class="strength-item img-item">
                                    <img src=<?php the_field('strength_image') ?> alt="">
                                </div>
                                <!-- End Strengh Item 1 -->
                            <?php
                        }
                    ?> 
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