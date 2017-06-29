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
				<li><a href="<?php the_field('twitter', 'option'); ?>"  target="_blank" class="twitter">T</a></li>
				<li><a href="<?php the_field('facebook', 'option'); ?>"  target="_blank" class="facebook">F</a></li>
				<li><a href="<?php the_field('youtube', 'option'); ?>"  target="_blank" class="youtube">Y</a></li>
				<li><a href="<?php the_field('pinterest', 'option'); ?>"  target="_blank" class="pinterest">P</a></li>
				<li><a href="<?php the_field('google', 'option'); ?>" target="_blank" class="google">G</a></li>
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


			<form name="form_subscribe" method="get" action="http://s5.newzapp.co.uk/t/ThankyouSubscribe.aspx">
			<input type="hidden" name="RedirectURL" id="RedirectURL" value="<?php echo site_url(); ?>/thank-you" />
 <input type="hidden" name="CID" id="CID" value="14736" />

  <input type="hidden" name="Group" id="Group" value="website 2017" />

				<input type="text" name="Address" placeholder="Your email address">
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


<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
				

<?php do_action( 'foundationpress_before_closing_body' ); ?>

<script>


$('.slider').slick({
  slidesToShow: 3,
  arrows: false,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2000,
  centerMode: true,
});



$('.searchIcon').click(function() {
  var clicks = $(this).data('clicks');
   $( ".searchbox--frame" ).fadeIn();

  if (clicks) {
     	$( "#searchform" ).submit();
  } else {

       
  }
  $(this).data("clicks", !clicks);
});


</script>

<script>

$("#menu-item-148, .navigationProducts").hover(function() {  
    $(".navigationProducts").stop().slideDown(); 
}, function() {  
    $(".navigationProducts").stop().slideUp(); 
});

</script>
</body>
</html>
