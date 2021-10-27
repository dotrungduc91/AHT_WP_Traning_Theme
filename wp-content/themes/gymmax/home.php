<?php
/**
* Classes template file
*
* @package Gymmax
*/
get_header();
?>

<?php
	get_template_part('template-parts/components/home/banner');
?>

<div class="classes-content">
    <div class="container">
        <div class="row">
            <?php
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post(); ?>
                        <div class="class-item" >
                            <?php get_template_part( 'template-parts/components/classes/content' ); ?>
                        </div>
                        <?php
                    endwhile; 
                else: 
                    _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
                endif; 
            ?>
        </div>
    </div>
</div>
    
<?php
get_footer();