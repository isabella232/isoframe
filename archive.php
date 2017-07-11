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

 <div class="page--default">


	 <?php while ( have_posts() ) : the_post(); ?>
	  <div class="content">
	  	<h1><?php the_title(); ?></h1>
	  	<?php the_date(); ?><br /><br />
	           <?php the_excerpt(); ?>
		</div>
	 <?php endwhile;?>

	<div class="sidebar">
		<h1>Category</h1>
		<ul>
		    <?php wp_list_categories( array(
		        'orderby'    => 'name',
		        'show_count' => false,
		        'title_li' => false,
		    ) ); ?> 
		</ul>
	</div>


 </div>


 <?php get_footer();
