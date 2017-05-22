<div class="news-advice">
	
	<h2>News & Advice</h2>

	<div class="news-advice--content">

	<?php
		$args = array( 'numberposts' => '5' );
		$recent_posts = wp_get_recent_posts( $args );
		foreach( $recent_posts as $recent ){
 	?>
 	
		<div>
			<?php echo get_the_post_thumbnail($recent["ID"]); ?>
			<h2><?php echo $recent["post_title"]; ?></h2>
			<a href='<?php echo get_permalink($recent["ID"]); ?> '>Read more ></a>
		</div>

<?php } wp_reset_query(); ?>
	</div>
</div>