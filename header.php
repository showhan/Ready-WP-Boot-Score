<?php
/**
 * The header for our theme.
 *
 * @package Ready_WP_Boot_Score
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">

		<header id="masthead" class="site-header" role="banner">
<!-- 			<div class="site-branding">
				<div class="container">
					<?php
					if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
					endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
					<?php
					endif; ?>
				</div>
			</div> -->

			<nav id="site-navigation" class="main-navigation navbar navbar-default navbar-static-top" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<a class="navbar-brand site-title" href="<?php echo home_url(); ?>">
							<?php bloginfo('name'); ?>&nbsp;<span style="font-size: 10px"><?php bloginfo('description'); ?></span>
						</a>

					</div>
					<form action="<?php echo home_url( '/' ); ?>" method="get" class="navbar-form navbar-right">
						<fieldset>
							<div class="input-group">
								<input type="text" name="s" id="search" placeholder="<?php _e("Search","wpbootstrap"); ?>" value="<?php the_search_query(); ?>" class="form-control" />
								<span class="input-group-btn">
									<button type="submit" class="btn btn-default"><?php _e("Search","wpbootstrap"); ?></button>
								</span>
							</div>
						</fieldset>
					</form>


					<?php
					wp_nav_menu( array(
						'menu'              => 'primary',
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-example-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav navbar-right',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
					);
					?>

				</div>
			</nav>
			<?php if(!is_front_page() or !is_home()) : ?>
		    <div class="block breadcumbs">
                <ol class="breadcrumb container">
                    <li>
                        <?php if (function_exists('wordpress_breadcrumbs')) wordpress_breadcrumbs(); ?>
                    </li>
                </ol>
            </div>
    		<?php endif; ?>

		</header><!-- #masthead -->
