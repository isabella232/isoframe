<?php
/*
Template Name: Inspiration
*/
get_header(); ?>

<div class="inspirationFilter">
  <div>
    <h2>Select a product category to see insipiration and ideas</h2>
    <select name="filter">
        <option name="">Choose an installation type</option>
        <option name="Custom">Custom</option>
        <option name="Modular">Modular</option>
        <option name="other">Other</option>
    </select>
  </div>
</div>

<div class="inspirationImage">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inspiriation-custom.png">

  <div class="inspirationImage--option" style="margin-left:-50px; top:520px;">
    <div class="arrow_box">Text Here</div>
  </div>

  <div class="inspirationImage--option" style="margin-left:-420px; top:300px;">
    <div class="arrow_box">Text Here</div>
  </div>

  <div class="inspirationImage--option" style="margin-left:350px; top:100px;">
    <div class="arrow_box">Text Here</div>
  </div>

  <div class="inspirationImage--option" style="margin-left:-60px; top:20px;">
    <div class="arrow_box">Text Here</div>
  </div>
</div>

<div class="inspirationType">
  <div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/custom-logo.png" alt="isoFrame Type">
  </div>
</div>

<div class="inspirationImages"> 
  <div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/custom-images-1.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/custom-images-1.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/custom-images-2.jpg">
  </div>
  <div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/custom-images-3.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/custom-images-4.jpg">
    <div class="inspirationImages__text">
      <p>ISOframe is a unique, patented system. Built-to-last, many of our stands can be reused and reconfigured for use at multiple exhibitions so you can get more out of your budget this year, next and beyond.</p>
    </div>
  </div>
</div>

<?php get_template_part( 'template-parts/footer-cta', 'footer-cta' ); ?>

<div class="inspirationGallery">
<h2>Inspiration gallery</h2>
  <div class="inspirationGallery__content">

    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/custom-inspiration.jpg" alt="#" /> 
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/custom-inspiration.jpg" alt="#" />
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/custom-inspiration.jpg" alt="#" />
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/custom-inspiration.jpg" alt="#" />
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/custom-inspiration.jpg" alt="#" />
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/custom-inspiration.jpg" alt="#" />
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/custom-inspiration.jpg" alt="#" />
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/custom-inspiration.jpg" alt="#" />
            
    <div>
      <p>See how other have used modular stands and get inspiration for your next exhibition</p>
      <a href="#" class="button--white">Show me</a>
    </div>

  </div>
</div>

<?php get_template_part( 'template-parts/news-advice', 'news-advice' ); ?>

<?php get_template_part( 'template-parts/footer-cta', 'footer-cta' ); ?>

<?php get_footer();
