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

			<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">
			<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-32x32.png">
			<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-16x16.png">
			<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/manifest.json">
			<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/safari-pinned-tab.svg" color="#5bbad5">
			<meta name="theme-color" content="#ffffff">
			  <!-- Start of HubSpot Embed Code -->
			  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/2969598.js"></script>
			<!-- End of HubSpot Embed Code -->

			<script type="text/javascript" src="http://www.cnej4912jks.com/js/110201.js" ></script>
			<noscript><img src=" " style="display:none;" /></noscript>

			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			  ga('create', 'UA-41704037-1', 'auto');
			  ga('send', 'pageview');
			</script>

			<script type="text/javascript">
			/* <![CDATA[ */
			var google_conversion_id = 1000925128;
			var google_custom_params = window.google_tag_params;
			var google_remarketing_only = true;
			/* ]]> */
			</script>
			
			<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
			</script>

			<noscript>
			<div style="display:inline;">
			<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1000925128/?guid=ON&amp;script=0"/>
			</div>
			</noscript>

			<link href="<?php bloginfo('template_url');?>/slider.css" rel="stylesheet" type="text/css" />

	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

<div class="headerBG">
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
					<form action="<?php echo site_url(); ?>" method="get" id="searchform">
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
			<a href="<?php echo site_url(); ?>/products/"> View all products </a>
		<div>

			<div class="productColumn">
				<a href="<?php echo site_url(); ?>/types/custom-stands/"><h2>Custom Exhibition Stands</h2></a>
				<ul>
					<li><a href="<?php echo site_url(); ?>/product/custom-exhibition-stands/">Custom</a></li>
					<li><a href="<?php echo site_url(); ?>/product/custom-hire-exhibition-stands/">Custom hire</a></li>
				</ul>
			</div>
			<div class="productColumn">
				<a href="<?php echo site_url(); ?>/types/modular-systems/"><h2>Modular Exhibition Stands</h2></a>
				<ul>
					<li><a href="<?php echo site_url(); ?>/product/wave/">Wave</a></li>
					<li><a href="<?php echo site_url(); ?>/product/fabric/">Fabric</a></li>
				</ul>
			</div>
			<div class="productColumn">
				<a href="<?php echo site_url(); ?>/types/portable/"><h2>Portable Displays</h2></a>
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
</div>
<?php get_template_part( 'template-parts/header-cta', 'headercta' ); ?>
