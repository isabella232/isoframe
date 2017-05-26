<?php
/*
Template Name: Inspiration
*/
get_header(); ?>

<div class="inspirationFilter">
  <div>
    <h2>Select a product category to see insipiration and ideas</h2>
    <select name="filter">
        <option name="Custom">Custom</option>
        <option name="Modular">Modular</option>
        <option name="other">Other</option>
    </select>
  </div>
</div>

<div class="inspirationImage">
  <img src="#">

  <div class="inspirationImage--option" style="position:absolute; top:0px; left:0px;">
    <p>Text Here</p>
  </div>

  <div class="inspirationImage--option" style="position:absolute; top:0px; left:0px;">
    <p>Text Here</p>
  </div>

  <div class="inspirationImage--option" style="position:absolute; top:0px; left:0px;">
    <p>Text Here</p>
  </div>

  <div class="inspirationImage--option" style="position:absolute; top:0px; left:0px;">
    <p>Text Here</p>
  </div>
</div>

<div class="inspirationType">
  <div>
      <img src="#" alt="isoFrame Type">
  </div>
</div>

<div class="inspirationImages"> 
  <div>
    <img src="#">
    <img src="#">
    <img src="#">
  </div>
  <div>
    <img src="#">
    <img src="#">
    <div class="inspirationImages__text">
      <p>ISOframe is a unique, patented system. Built-to-last, many of our stands can be reused and reconfigured for use at multiple exhibitions so you can get more out of your budget this year, next and beyond.</p>
    </div>
  </div>
</div>

<?php get_template_part( 'template-parts/footer-cta', 'footer-cta' ); ?>

<div class="inspirationGallery">
  <div class="inspirationGallery__content">

    <img src="#" alt="#" /> 
    <img src="#" alt="#" />
    <img src="#" alt="#" /> 
    <img src="#" alt="#" />
    <img src="#" alt="#" /> 
    <img src="#" alt="#" />
    <img src="#" alt="#" /> 
    <img src="#" alt="#" />
            
    <div>
      <p>Text Here</p>
    </div>

  </div>
</div>

<?php get_template_part( 'template-parts/news-advice', 'news-advice' ); ?>

<?php get_template_part( 'template-parts/footer-cta', 'footer-cta' ); ?>

<?php get_footer();
