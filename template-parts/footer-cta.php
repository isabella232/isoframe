<div class="footerCTAbg">
	<div class="footerCTA">
		<div class="footerCTA--content">
		<?php the_field('call-to-action-footer', 'option', false); ?>
		</div>
		<div class="footerCTA--link">
			<a href="<?php the_field('footer_cta', 'option'); ?>" class="button"><?php the_field('footer_link_text', 'option'); ?></a>
		</div>
	</div>
</div>