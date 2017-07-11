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

<div class="slider" style="margin-bottom:<?php the_field('slider_bottom'); ?>;margin-top: 105px;">

	<?php
	if( have_rows('slider') ):
	    while ( have_rows('slider') ) : the_row();
	?>

		<div style="background-image:url('<?php the_sub_field('background_image'); ?>'); height:<?php the_sub_field('background_height'); ?>">
		<img src="<?php the_sub_field('foreground_image'); ?>" style="left:<?php the_sub_field('image_left'); ?>; top:<?php the_sub_field('image_top'); ?>; z-index:10;">
			<div class="titleText" style="position:relative; top:<?php the_sub_field('box_top'); ?>; max-width:75rem; margin:auto; background-color:<?php the_field('colour'); ?>">
				<div>
					<h2 style="color:<?php the_field('text_colour'); ?>!important;"><?php the_sub_field('title_text', false); ?></h2>
					<?php the_sub_field('sub_text', false); ?>
				</div>
			</div>
		</div>

	<?php  
		endwhile;
	endif;
	?>

</div>

<div class="color--purple productsPage">

	<div class="product__content">
		<div>
			<?php the_field('video', false); ?>
		</div>
		<div>
			<?php the_field('content', false); ?>
		</div>
	</div>

	<div class="product__keyFeatures">
	<?php the_field('key_features'); ?>
	</div>


<?php if(get_field('gallery_on') == 1) { ?>
<?php $images = get_field('gallery'); ?>
	<div class="product__gallery">
		<div class="product__gallery__content">

		<?php foreach( $images as $image ): ?>
			<div>
			<a href="<?php echo $image['sizes']['large']; ?>" data-lightbox="inspiration"> <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
			</div>
		<?php endforeach; ?>										
			<div>
				<?php the_field('gallery_cta_text'); ?>
			</div>
		</div>
	</div>
<?php } ?>

<!--- 
	<div class="product__profile">
		<div>
			<img src="<?php the_field('product_long_image'); ?>">
		</div>
		<div>
			<?php the_field('product_profile_text', false); ?>
		</div>
	</div>
-->

<?php if(get_field('call_to_action_on') == 1) { ?>
	<div class="product__callToAction" style="background:<?php the_field('colour'); ?>!important; color:<?php the_field('text_colour'); ?>!important;">
		<h2><?php the_field('call_to_action_text', false); ?></h2>
	</div>
	<?php } ?>

<?php if(get_field('additional_videos_on') == 1) { ?>
	<div class="product__videos">
	<h2>ISOframe <?php the_title(); ?> Videos</h2>
		<div class="product__videos__contain">

		<?php if( have_rows('additional_videos') ): while ( have_rows('additional_videos') ) : the_row(); ?>
			<div>
				<?php echo the_sub_field('video'); ?>
			</div>
		<?php endwhile; endif; ?>

		</div>
	</div>
<?php }?>

<?php if(get_field('how_it_works_on') == 1) { ?>
	<div class="product__howItWorks">
		<?php if(get_field('how_it_works')) { ?>
		<div class="product__howItWorks__openning">
		<h2>How it works</h2>
			<?php the_field('how_it_works'); ?>
		</div>
		<?php } ?>
		<?php if(get_field('how_it_works_sidebar')) { ?>
		<div class="product__howItWorks__sidebar">
		<?php the_field('how_it_works_sidebar'); ?>
		</div>
		<?php } ?>
		<div class="product__howItWorks__grid">

<?php if( have_rows('how_it_works_grid') ): while ( have_rows('how_it_works_grid') ) : the_row(); ?>
			<div>
				<div class="product__howItWorks--image">
					<img src="<?php echo the_sub_field('image'); ?>">		
				</div>
				<div class="product__howItWorks--text">
					<?php echo the_sub_field('content'); ?>
				</div>
			</div>
<?php endwhile; endif; ?>

		</div>
	</div>
<?php } ?>

<?php if(get_field('product_grid_on') == 1) { ?>
	<div class="product__grid">
	<?php if( have_rows('product_grid') ): while ( have_rows('product_grid') ) : the_row(); ?>
		<div>
			<div class="product__grid--image">
				<img src="<?php echo the_sub_field('image'); ?>">
			</div>

			<div class="product__grid--text">
			<h2><?php echo the_sub_field('title'); ?></h2>
				<p><?php echo the_sub_field('content'); ?></p>
			</div>
		</div>
	<?php endwhile; endif; ?>

	</div>
<?php } ?>

<?php if(get_field('build_process')) { ?>
	<div class="product__buildProcess">
	<h2>Design and build process</h2>
		<div class="product__buildProcess__content">
		<?php if( have_rows('build_process') ): while ( have_rows('build_process') ) : the_row(); ?>
			<div>
				<img src="<?php echo the_sub_field('image'); ?>">
				<h2><?php echo the_sub_field('title'); ?></h2>
				<p><?php echo the_sub_field('text'); ?></p>
			</div>
		<?php endwhile; endif; ?>
		</div>
	</div>
<?php } ?>

	<?php get_template_part( 'template-parts/case_studies', 'case_studies' ); ?>

<?php if(get_field('other_in_range_on') == 1) { ?>
	<div class="product__othersInRange">
		<div class="product__othersInRange__content">
		<h2>Other products in this range</h2>
		<?php if( have_rows('others_in_range') ): while ( have_rows('others_in_range') ) : the_row(); ?>
			<a href="<?php echo the_sub_field('page'); ?>">
				<img src="<?php echo the_sub_field('product_logo'); ?>">
			</a>
		<?php endwhile; endif; ?>
		</div>
	</div>
</div>
<?php } ?>

<div class="color--purple">

	<div class="product__content">
		<div>
			<?php the_field('tandcs'); ?>
		</div>
	</div>

</div>


<?php get_template_part( 'template-parts/footer-cta', 'footer-cta' ); ?>
 <?php get_footer(); ?>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/lightbox.min.js"></script>
