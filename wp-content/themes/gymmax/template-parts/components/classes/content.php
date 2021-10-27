<?php
/**
 * Content template
 *
 * @package aquila
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-5' ); ?>>
	<?php		
	get_template_part( 'template-parts/components/classes/class-header' );
	get_template_part( 'template-parts/components/classes/class-meta' );
	get_template_part( 'template-parts/components/classes/class-content' );
	get_template_part( 'template-parts/components/classes/class-footer' );
	?>
</article>
