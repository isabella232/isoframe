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

<div class="inspirationImage">
  <img src="<?php the_field('image'); ?>">


<?php if( have_rows('points') ):  while ( have_rows('points') ) : the_row(); ?>
 <div class="inspirationImage--option" style="margin-left:<?php the_sub_field('left') ?>; top:<?php the_sub_field('top') ?>;">
    <div class="arrow_box"><?php the_sub_field('content', false, false) ?></div>
  </div>
<?php endwhile; endif; ?>
</div>

<div class="color--purple productsPage">

	<div class="product__content">
		<div>
			<?php the_field('video', false,false); ?>
		</div>
		<div>
			<?php the_field('content', false); ?>
		</div>
	</div>

	<div class="product__keyFeatures">
	<?php the_field('key_features'); ?>
	</div>

	<div class="product__profile">
		<div>
			<img src="<?php the_field('product_long_image'); ?>">
		</div>
		<div>
			<?php the_field('product_profile_text', false); ?>
		</div>
	</div>
<?php if(get_field('call_to_action_on') == 1) { ?>
	<div class="product__callToAction">
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
		<div class="product__howItWorks__openning">
			<?php the_field('how_it_works'); ?>
		</div>
		<div class="product__howItWorks__sidebar">
		<?php the_field('how_it_works_sidebar'); ?>
		</div>
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

	<?php get_template_part( 'template-parts/news-advice', 'news-advice' ); ?>

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

<?php if(get_field('gallery_on') == 1) { ?>
<?php $images = get_field('gallery'); ?>
	<div class="product__gallery">
		<div class="product__gallery__content">

		<?php foreach( $images as $image ): ?>
			<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php endforeach; ?>										
			<div>
				<?php the_field('gallery_cta_text'); ?>
			</div>
		</div>
	</div>
<?php } ?>




<?php get_template_part( 'template-parts/footer-cta', 'footer-cta' ); ?>
 <?php get_footer();
