<?php
/*
Template Name: contact page
*/
get_header(); ?>

<div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2411.1313252416408!2d-1.769082783694628!3d52.81999672170489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487a0509b57dbe5b%3A0xb3191e90a0a4a40a!2sISOframe%2C+by+Display+Makers!5e0!3m2!1sen!2suk!4v1495025882125" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="contact--page">
  <div class="contact--page__details">
    <h1>Contact us</h1>
    <a href="tel:01283 575097" class="telephone">01283 575097</a>
    <a href="mailto:sales@isoframe.co.uk" class="email">sales@isoframe.co.uk</a>
    <p>Display Makers UK Limited, Sovereign House, 10 Lancaster Park<br />Needwood, Burton on Trent, Staffordshire DE13 9PD</p>
  </div>
  <div class="contact--page__form">
  <p>Contact us for help & advice, information on options and prices or to book a demonstration</p>
  <?php echo do_shortcode( '[contact-form-7 id="292" title="Contact form 1"]' ); ?>
  </div>
</div>

<?php get_footer();
