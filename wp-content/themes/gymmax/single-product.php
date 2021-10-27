<?php
/**
 * Single post template file.
 *
 * @package Gymmax
 */

get_header();

?>

	<div id="primary">
		<main id="main" class="site-main mt-5" role="main">
			<div class="container">
					<div >
						<?php
						if ( have_posts() ) :
							?>
							<div class="post-wrap">
							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/components/classes/content' );

							endwhile;
							?>
							</div>
						<?php
						endif;
						?>
					</div>
					<?php
					?>
			</div>
		</main>
	</div>

<?php
get_footer();

