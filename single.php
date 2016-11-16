<?php
/**
 * The template for displaying all single posts.
 *
 * @package Ready_WP_Boot_Score
 */

get_header(); ?>

<div id="content" class="site-content">
	<div class="container">
		<div class="row">
			<div id="primary" class="content-area">
				<div class="col-sm-9">
					<main id="main" class="site-main" role="main">

						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', get_post_format() );

							the_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

					</main><!-- #main -->
				</div><!-- .col-sm-8 -->
			</div><!-- #primary -->

			<div class="col-sm-3">
				<div class="sidebar">
					<?php get_sidebar(); ?>
				</div><!-- .col-sm-3 -->
			</div><!-- .sidebar -->
		</div>
	</div>
</div><!-- #content -->

<?php get_footer();
