<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="footer__navigation">
	<div class="footer__navigation__container">
		<div class="footer__navigation__menu">
			<?php foundationpress_footer_nav(); ?>
		</div>
		<div class="footer__navigation__social">
			<ul>
				<li><a href="<?php the_field('twitter', 'option'); ?>" class="twitter">T</a></li>
				<li><a href="<?php the_field('facebook', 'option'); ?>" class="facebook">F</a></li>
				<li><a href="<?php the_field('youtube', 'option'); ?>" class="youtube">Y</a></li>
				<li><a href="<?php the_field('pinterest', 'option'); ?>" class="pinterest">P</a></li>
				<li><a href="<?php the_field('google', 'option'); ?>" class="google">G</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="footer__contact">
	<div class="footer__contact__container">
		<div class="footer__contact__container--contact">
		<h2>Contact us</h2>
<?php the_field('contact_us_text', 'option'); ?>
		</div>
		<div class="footer__contact__container--newsletter">
		<h2>Sign up for updates</h2>
		<p>Stay up-to-date with the latest product & exhibition stand news</p>


			<form method="get" action="#">
				<input type="text" placeholder="Your email address">
				<button type="submit" value="submit">Send me updates</button>
			</form>

		</div>
	</div>
</div>

<div class="footer__copyright">
	<div class="footer__copyright__container">
		<div class="footer__copyright__container--address">
			<p><?php the_field('address', 'option'); ?></p>
		</div>
		<div class="footer__copyright__container--copyright">
			<p>© <?php echo date('Y'); ?> DISPLAY MAKERS Ltd</p>
		</div>
	</div>
	<div class="footer__copyright__container--katapult">
		<div>Website by <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/katapult.svg"></a></div>
	</div>
</div>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.8'><\/script>".replace("HOST", location.hostname));
//]]></script>

<script>

$('.searchIcon').click(function() {
  var clicks = $(this).data('clicks');
   $( ".searchbox--frame" ).fadeIn();

  if (clicks) {
     	$( "#searchform" ).submit();
  } else {

       
  }
  $(this).data("clicks", !clicks);
});


    $(function(){
      // bind change event to select
      $('#inspiriationFilter').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = '<?php echo site_url(); ?>/inspiration/' + url; // redirect
          }
          return false;
      });
    });


</script>
</body>
</html>
