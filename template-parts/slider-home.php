<div class="slider">

	<?php
	if( have_rows('slider') ):
	    while ( have_rows('slider') ) : the_row();
	?>
		<div class="slider-items" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/HEADER1.png');">
		<img src="<?php the_sub_field('foreground_image'); ?>">
			<div class="titleText">
				<div>
					<h2><?php the_sub_field('title_text', false); ?></h2>
					<?php the_sub_field('sub_text', false); ?>
				</div>
			</div>
		</div>

		<div class="slider-items" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/HEADER2.png');">
		<img src="<?php the_sub_field('foreground_image'); ?>">
			<div class="titleText">
				<div>
					<h2><?php the_sub_field('title_text', false); ?></h2>
					<?php the_sub_field('sub_text', false); ?>
				</div>
			</div>
		</div>

		<div class="slider-items"style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/HEADER3.png');">
		<img src="<?php the_sub_field('foreground_image'); ?>">
			<div class="titleText">
				<div>
					<h2><?php the_sub_field('title_text', false); ?></h2>
					<?php the_sub_field('sub_text', false); ?>
				</div>
			</div>
		</div>
		
		<div class="slider-items" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/HEADER1.png');">
		<img src="<?php the_sub_field('foreground_image'); ?>">
			<div class="titleText">
				<div>
					<h2><?php the_sub_field('title_text', false); ?></h2>
					<?php the_sub_field('sub_text', false); ?>
				</div>
			</div>
		</div>

		<div class="slider-items" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/HEADER2.png');">
		<img src="<?php the_sub_field('foreground_image'); ?>">
			<div class="titleText">
				<div>
					<h2><?php the_sub_field('title_text', false); ?></h2>
					<?php the_sub_field('sub_text', false); ?>
				</div>
			</div>
		</div>

		<div class="slider-items"style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/HEADER3.png');">
		<img src="<?php the_sub_field('foreground_image'); ?>">
			<div class="titleText">
				<div>
					<h2><?php the_sub_field('title_text', false); ?></h2>
					<?php the_sub_field('sub_text', false); ?>
				</div>
			</div>
		</div>

	<?php  
		endwhile;
	endif;
	?>

</div>