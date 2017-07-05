<div class="news-advice">
	
	<h2>News & Advice</h2>

	<div class="news-advice--content">

	<?php
		$args = array( 'numberposts' => '5' );
		$recent_posts = wp_get_recent_posts( $args );
		foreach( $recent_posts as $recent ){
 	?>
 	
		<div>
			<a href='<?php echo get_permalink($recent["ID"]); ?> '><?php echo get_the_post_thumbnail($recent["ID"]); ?></a>
			<h2><?php echo $recent["post_title"]; ?></h2>
			<?php echo date( 'F, Y', strtotime( $recent['post_date'] ) ); ?>
			<br />
			<a href='<?php echo get_permalink($recent["ID"]); ?> '>Read more ></a>
			<?php echo date( 'M', strtotime( $recent['post_date'] ) ); ?>
		</div>

<?php } wp_reset_query(); ?>
	</div>
</div>