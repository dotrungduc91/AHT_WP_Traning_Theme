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
							if ( is_home() && ! is_front_page() ) {
								?>
								<header class="mb-5">
									<h1 class="page-title screen-reader-text">
										<?php single_post_title(); ?>
									</h1>
								</header>
								<?php
							}

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
					// Next and previous link for page navigation.
					?>
					<div class="prev-link"><?php previous_post_link(); ?></div>
					<div class="next-link"><?php next_post_link(); ?></div>
				
			</div>
		</main>
	</div>

<?php
get_footer();

