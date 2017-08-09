<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php get_template_part( 'template-parts/slider-home', 'slider' ); ?>

<div class="actionBoxes">
	<?php
	if( have_rows('action_boxes') ):
	    while ( have_rows('action_boxes') ) : the_row();
	?>
	<div><a href="<?php the_sub_field('button_url', false); ?>">
		<img src="<?php the_sub_field('image'); ?>">
		<h2><?php the_sub_field('title', false); ?></h2>
		<p><?php the_sub_field('text', false); ?></p></a>
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
<div style="display:none;">

<div class="our-custom-stands">
	<h2>Our Isoframe custom stands</h2>

	<div>
	<?php $images = get_field('custom_images'); ?>
	<?php foreach( $images as $image ): ?>
		<div>
		<a href="<?php echo $image['sizes']['medium']; ?>" data-lightbox="inspiration"> <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
		</div>
	<?php endforeach; ?>	

	</div>
</div>									

<div class="our-services--homepage">
	<h2>Our Service</h2>

	<div>
		<div class="our-services--homepage__video">
			<?php the_field('homepageservice_video'); ?>
		</div>

		<div class="our-services--homepage__content">
			<?php the_field('homepageservice_text'); ?>
		</div>
	</div>
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


<?php get_template_part( 'template-parts/news-advice', 'news-advice' ); ?>

</div>

<?php get_template_part( 'template-parts/footer-cta', 'footer-cta' ); ?>

<?php get_footer();
?>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/lightbox.min.js"></script>