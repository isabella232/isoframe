<div class="designerPullOut">
	<div class="content">
		<div class="content--image">
		<img src="<?php the_field('pull-out-image', 'option'); ?>">
		</div>
		<div class="content--text">
			<h2><?php the_field('title', 'option'); ?></h2>
			<?php the_field('content', 'option'); ?>
			<a href="<?php the_field('link_url', 'option'); ?>" class="button"><?php the_field('link_text', 'option'); ?></a>
			<span>Available on 
			<a href="<?php the_field('android_link', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/android.svg"></a>
			<a href="<?php the_field('apple_link', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/apple.svg"></a>
			<a href="<?php the_field('windows_link', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/windows.svg"></a>
			</span> 
		</div>
	</div>
</div>
