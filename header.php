<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>


<div class="header">
	<header id="masthead" class="site-header" role="banner">
		<div class="title-bar" data-responsive-toggle="site-navigation">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg"> </a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg"> </a></li>
				</ul>
			</div>
			<div class="top-bar-right">
			<div class="searchbox--frame">
				<form action="<?php echo site_url(); ?>/products/" method="get" id="searchform">
					<input class="searchBox" name="s" placeholder="Search...">
				</form>
			</div>
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>
	</header>
</div>

<div class="navigationProducts">
		<a href="<?php echo site_url(); ?>/product/"> View all products </a>
	<div>

		<div class="productColumn">
			<a href="<?php echo site_url(); ?>/products/custom-systems/"><h2>Custom Exhibition Stands</h2></a>
			<ul>
				<li><a href="<?php echo site_url(); ?>/product/custom-exhibition-stands/">Custom</a></li>
				<li><a href="<?php echo site_url(); ?>/product/custom-hire-exhibition-stands/">Custom hire</a></li>
			</ul>
		</div>
		<div class="productColumn">
			<a href="<?php echo site_url(); ?>/products/modular-systems/"><h2>Modular Exhibition Stands</h2></a>
			<ul>
				<li><a href="<?php echo site_url(); ?>/product/wave/">Wave</a></li>
				<li><a href="<?php echo site_url(); ?>/product/fabric/">Fabric</a></li>
			</ul>
		</div>
		<div class="productColumn">
			<a href="<?php echo site_url(); ?>/product/portable/"><h2>Portable Displays</h2></a>
			<ul>
				<li><a href="<?php echo site_url(); ?>/product/ripple/">Ripple</a></li>
				<li><a href="<?php echo site_url(); ?>/product/express-pop-up/">Express pop-up</a></li>
			</ul>
		</div>
		<div class="productColumn">
			<h2>Counters and accessories</h2>
			<ul>
				<li><a href="<?php echo site_url(); ?>/product/isobar/">ISObar</a></li>
			</ul>
		</div>
	</div>
</div>
<?php get_template_part( 'template-parts/header-cta', 'headercta' ); ?>
