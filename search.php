<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>


<?php include('template-parts/header-cta.php'); ?>

 <div class="page--default">
<div class="content">
		<h2><?php _e( 'Search Results for', 'foundationpress' ); ?> "<?php echo get_search_query(); ?>"</h2>
</div>

 <?php while ( have_posts() ) : the_post(); ?>
  <div class="content" style="width:100%;">
  	<h1><?php the_title(); ?></h1>
           <?php the_excerpt(); ?>
	</div>
 <?php endwhile;?>


 </div>

 <?php get_footer();
