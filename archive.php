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

	  <div class="content">
	 <?php while ( have_posts() ) : the_post(); ?>
	 	<div>
		  	<h1><?php the_title(); ?></h1>
		  	<?php echo get_the_date(); ?><br />
		           <?php the_excerpt(); ?>
		           <a href="<?php the_permalink(); ?>" class="button">Read more</a>
		</div>
	 <?php endwhile;?>

	 		<?php
		if ( function_exists( 'foundationpress_pagination' ) ) :
			foundationpress_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php endif; ?>
		
	 </div>
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
