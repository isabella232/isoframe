<div class="slider">

	<?php
	if( have_rows('slider') ):
	    while ( have_rows('slider') ) : the_row();
	?>

		<div style="background-image:url('<?php the_sub_field('background_image'); ?>');">
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