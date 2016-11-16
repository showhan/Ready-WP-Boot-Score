<?php
/**
 * The template for displaying all pages.
 *
 * @package Ready_WP_Boot_Score
 */

get_header(); ?>

<div id="content" class="site-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .col-sm-9 -->

			<div class="col-sm-3">
				<div class="sidebar">
					<?php get_sidebar(); ?>
				</div><!-- .col-sm-3 -->
			</div><!-- .sidebar -->
		</div>
	</div>
</div><!-- #content -->

<?php get_footer();

