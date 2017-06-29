<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php get_template_part( 'template-parts/slider-head', 'slider' ); ?>

<div class="actionBoxes">
	<?php
	if( have_rows('action_boxes') ):
	    while ( have_rows('action_boxes') ) : the_row();
	?>
	<div>
		<img src="<?php the_sub_field('image'); ?>">
		<h2><?php the_sub_field('title', false); ?></h2>
		<p><?php the_sub_field('text', false); ?></p>
		<a href="<?php the_sub_field('button_url', false); ?>" class="button"><?php the_sub_field('button_text', false); ?></a>
	</div>

	<?php  
		endwhile;
	endif;
	?>

</div>

<div class="why-choose-us">
	<div>
		<h2><?php the_field('title', false); ?></h2>
		<?php the_field('content', false); ?>
	</div>
</div>

<div class="values">
	<?php
	if( have_rows('values') ):
	    while ( have_rows('values') ) : the_row();
	?>
		<div>
			<h2><?php the_sub_field('title', false); ?></h2>
			<p><?php the_sub_field('content', false); ?></p>
		</div>
	<?php  
		endwhile;
	endif;
	?>
</div>

<?php get_template_part( 'template-parts/designer-pull-out', 'designer-pull-out' ); ?>

<?php get_template_part( 'template-parts/news-advice', 'news-advice' ); ?>

</div>

<?php get_template_part( 'template-parts/footer-cta', 'footer-cta' ); ?>

<?php get_footer();
