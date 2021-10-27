<div class="brand">
                        <div class="container">
                            <div class="row">
                            <?php 
                                $args = array(
                                    'post_type'=> 'brand',
                                    'orderby' => 'title',
                                    'order' => 'ASC'
                                );
                                // the query
                                $brand_query = new WP_Query( $args ); ?>
                                
                                <?php if ( $brand_query->have_posts() ) : ?>
                                
                                    <!-- pagination here -->
                                
                                    <!-- the loop -->
                                    <?php while ( $brand_query->have_posts() ) : $brand_query->the_post(); ?>
                                        <div class="brand-item">
                                          <img src=<?php echo get_the_post_thumbnail_url() ?>>
                                        </div>                                       
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