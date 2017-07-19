<div class="homeslider">

	<?php
	if( have_rows('slider') ):
	    while ( have_rows('slider') ) : the_row();
	?>
		<div class="slider-items" style="width:<?php the_sub_field('slider_1_width', false); ?>;">
		<img src="<?php the_sub_field('slider_1', false); ?>">
			<div class="titleText">
				<div>
					<h2><?php the_sub_field('title_text', false); ?></h2>
					<?php the_sub_field('sub_text', false); ?>
				</div>
			</div>
		</div>

		<div class="slider-items" style="width:<?php the_sub_field('slider_2_width', false); ?>;">
		<img src="<?php the_sub_field('slider_2', false); ?>">
			<div class="titleText">
				<div>
					<h2><?php the_sub_field('title_text', false); ?></h2>
					<?php the_sub_field('sub_text', false); ?>
				</div>
			</div>
		</div>

		<div class="slider-items" style="width:<?php the_sub_field('slider_3_width', false); ?>;">
		<img src="<?php the_sub_field('slider_3', false); ?>">
			<div class="titleText">
				<div>
					<h2><?php the_sub_field('title_text', false); ?></h2>
					<?php the_sub_field('sub_text', false); ?>
				</div>
			</div>
		</div>

		<div class="slider-items" style="width:<?php the_sub_field('slider_1_width', false); ?>;">
		<img src="<?php the_sub_field('slider_1', false); ?>">
			<div class="titleText">
				<div>
					<h2><?php the_sub_field('title_text', false); ?></h2>
					<?php the_sub_field('sub_text', false); ?>
				</div>
			</div>
		</div>

		<div class="slider-items" style="width:<?php the_sub_field('slider_2_width', false); ?>;">
		<img src="<?php the_sub_field('slider_2', false); ?>">
			<div class="titleText">
				<div>
					<h2><?php the_sub_field('title_text', false); ?></h2>
					<?php the_sub_field('sub_text', false); ?>
				</div>
			</div>
		</div>

		<div class="slider-items" style="width:<?php the_sub_field('slider_3_width', false); ?>;">
		<img src="<?php the_sub_field('slider_3', false); ?>">
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

<div class="sliderprevious"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/previous.svg"></div>
<div class="slidernext"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg"></div>