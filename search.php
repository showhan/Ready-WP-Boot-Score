<?php
/**
 * The template for displaying search results pages.
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
						if ( have_posts() ) : ?>

							<header class="page-header">
								<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'rwpbs' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
							</header><!-- .page-header -->

							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'search' );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>

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