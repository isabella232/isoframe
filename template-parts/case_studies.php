<div class="news-advice">
	
	<h2>Case Studies</h2>

	<div class="news-advice--content">

	<?php
		$args = array(  'post_status' => 'publish', 'post_type' => 'case_studies', 'numberposts' => '5' );
		$recent_posts = wp_get_recent_posts( $args );
		foreach( $recent_posts as $recent ){
 	?>
 	
		<div>
			<a href='<?php echo get_permalink($recent["ID"]); ?> '><?php echo get_the_post_thumbnail($recent["ID"]); ?></a>
			<h2><?php echo $recent["post_title"]; ?></h2>
			<p><?php the_excerpt(); ?></p>
			<a href='<?php echo get_permalink($recent["ID"]); ?> '>Read more ></a>
		</div>

<?php } wp_reset_query(); ?>
	</div>
</div>