<?php
/**
 * Single page template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

<!-- <div class="single--featured">
	<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		} 
	?>
</div> -->
 <div class="page--default">

<a href="<?php echo site_url(); ?>/blog/">< Back to latest posts</a>
 <?php while ( have_posts() ) : the_post(); ?>
  <div class="content">
  	<h1><?php the_title(); ?></h1><br />
  	<?php the_date(); ?><br />
           <?php the_content(); ?>
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
