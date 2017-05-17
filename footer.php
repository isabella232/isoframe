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
	<div class="footer__navigation__menu">
		<ul>
			<li><a href="#">News</a></li>
			<li><a href="#">Case studies</a></li>
			<li><a href="#">Privacy, Terms & Disclamiers</a></li>
			<li><a href="#">Warranty</a></li>
			<li><a href="#">Sitemap</a></li>
		</ul>
	</div>
	<div class="footer__navigation__social">
		<ul>
			<li><a href="#" class="twitter">T</a></li>
			<li><a href="#" class="facebook">F</a></li>
			<li><a href="#" class="youtube">Y</a></li>
			<li><a href="#" class="pinterest">P</a></li>
			<li><a href="#" class="google">G</a></li>
		</ul>
	</div>
</div>

<div class="footer__contact">
	<div class="footer__contact__container">
		<div class="footer__contact__container--contact">
		<h2>Contact us</h2>
		<p>Get in touch with our friendly team for enquiries and advice</p>
			<a href="tel:01283 575097" class="telephone">01283 575097</a>
			<a href="mailto:sales@isoframe.co.uk" class="email">sales@isoframe.co.uk</a>
		</div>
		<div class="footer__contact__container--newsletter">
		<h2>Sing up for updates</h2>
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
			<p>10, Lancaster Park, Needwood, Burton upon Trent, DE13 9PD</p>
		</div>
		<div class="footer__copyright__container--copyright">
			<p>© 2017 DISPLAY MAKERS Ltd</p>
			<div>Website by <a href="#"><img src="katapultlogo.png"></a></div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.8'><\/script>".replace("HOST", location.hostname));
//]]></script>


</body>
</html>
