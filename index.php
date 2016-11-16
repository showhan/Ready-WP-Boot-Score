<?php
/**
 * The main template file.
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
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) : ?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>

							<?php
							endif;

							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', get_post_format() );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>

					</main><!-- #main -->
				</div><!-- .col-sm-9 -->
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
