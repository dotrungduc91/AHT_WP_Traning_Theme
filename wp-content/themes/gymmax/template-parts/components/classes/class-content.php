<?php
/**
 * Template for entry content.
 *
 * To be used inside WordPress The Loop.
 *
 * @package Gymmax
 */

?>

<div class="entry-content">
    <?php
        if ( is_single() ) {
            the_content (
                sprintf(
                    wp_kses(
                        __( 'Continue reading %s <span class = "meta-nav">&rarr;</span>', 'gymmax' ),
                        [
                            'span' => [
                            'class' => []
                            ]
                        ]
                    ),
                    the_title( '<span class = "screen-reader-text">', '</span>', false)
                )
            );
            //Create Pagination
            wp_link_pages(
                [
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gymmax' ),
                    'after'  => '</div>',
                ]
            );

        } else {
            echo "<div>". gymmax_the_excerpt( 100 ) ."</div>";
            echo gymmax_excerpt_more ();
        }

    ?>
</div>