<div class="outer-container slider purple">

	<div class="variable-width">

		<?php
			if( have_rows('hero_slideshow') ):
			while ( have_rows('hero_slideshow') ) : the_row();
		?>

			<?php
				if( have_rows('slide') ):
				while ( have_rows('slide') ) : the_row();

				$image = get_sub_field('hero_image');
			?>

				<div class="slider-item">

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

					<div class="slider-text">

						<?php the_sub_field('hero_text'); ?>

					</div>

				</div>

			<?php
				endwhile;
				endif;
			?>

		<?php
			endwhile;
			endif;
		?>

	</div>

	<div class="sliderprevious">

		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/previous.svg" />

	</div>

	<div class="slidernext">

		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.svg" />

	</div>

</div>
