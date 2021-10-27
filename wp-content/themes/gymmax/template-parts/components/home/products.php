 <!-- Product -->
<div class="product">
    <div class="container">
        <div class="product-tab" id="product-tab">
            <ul>
                <li><a href="#top-seller">TOP SELLERS</a></li>
                <li><a href="#featured">FEATURED</a></li>
                <li><a href="#most-reviews">MOST REVIEWS</a></li>
                </ul>
                <!-- TAB BEST SELLER -->
                <div id="top-seller">
                <div class="row">
                    <?php
                        $args = array(
                            'post_type'=> 'product',
                            'orderby' => 'title',
                            'order' => 'ASC'
                        );
                        $product_query = new WP_Query ($args);

                    if ($product_query->have_posts()) :
                        while ( $product_query->have_posts() ) :
                            $product_query->the_post(); //bat buoc phai co
                            global $product;
                            $price = number_format($product->price, 2, ".", " ") ?>
                            
                            <div class="product-item">
                                <div class="product-item-inner">
                                    <div class="product-image">
                                        <img src = <?php echo get_the_post_thumbnail_url() ?>>
                                    </div>
                                    <div class="product-title">
                                        <?php echo $product->name ?>
                                    </div>
                                    <div class="product-price">
                                        $ <?php echo $price ?>
                                    </div>
                                    <div class="product-icon">
                                        <ul>
                                            <li class="icon"><a href= '<?php bloginfo('url')?>/cart'><i class="fas fa-shopping-basket"></i></a></li>
                                            <li class="icon"><a href= <?php the_permalink() ?>><i class="fas fa-eye"></i></a></li>
                                            <li class="icon"><a href=""><i class="fas fa-heart"></i></a></li>
                                            <li class="icon"><a href=""><i class="fas fa-exchange-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                    ?>
                </div>
                </div>
                <!-- TAB BEST SELLER END -->

                <div id="featured">
                <p>2</p>
                </div>
                <div id="most-reviews">
                <p>3</p>
                </div>
        </div>
    </div>
</div>
<!-- End Product -->