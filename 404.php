<?php
/**
 * The template for displaying 404 pages (not found).
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

						<section class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'rwpbs' ); ?></h1>
							</header><!-- .page-header -->

							<div class="page-content">
								<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'rwpbs' ); ?></p>

								<?php
									get_search_form();

									the_widget( 'WP_Widget_Recent_Posts' );

									// Only show the widget if site has multiple categories.
									if ( rwpbs_categorized_blog() ) :
								?>

								<div class="widget widget_categories">
									<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'rwpbs' ); ?></h2>
									<ul>
									<?php
										wp_list_categories( array(
											'orderby'    => 'count',
											'order'      => 'DESC',
											'show_count' => 1,
											'title_li'   => '',
											'number'     => 10,
										) );
									?>
									</ul>
								</div><!-- .widget -->

								<?php
									endif;

									/* translators: %1$s: smiley */
									$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'rwpbs' ), convert_smilies( ':)' ) ) . '</p>';
									the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

									the_widget( 'WP_Widget_Tag_Cloud' );
								?>

							</div><!-- .page-content -->
						</section><!-- .error-404 -->

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