<?php
/*
Template Name: Case study Single
*/
get_header(); ?>


<div class="caseStudy-single__Image">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inspiriation-custom.png">

  <div class="caseStudy-single__Image--option" style="margin-left:-50px; top:520px;">
    <div class="arrow_box">Text Here</div>
  </div>

  <div class="caseStudy-single__Image--option" style="margin-left:-420px; top:300px;">
    <div class="arrow_box">Text Here</div>
  </div>

  <div class="caseStudy-single__Image--option" style="margin-left:350px; top:100px;">
    <div class="arrow_box">Text Here</div>
  </div>

  <div class="caseStudy-single__Image--option" style="margin-left:-60px; top:20px;">
    <div class="arrow_box">Text Here</div>
  </div>
</div>

<div class="caseStudy-single__featuredSection">

<h2>Why Best Western reduced their exhibition costs by 50% using ISOframe custom</h2>

  <div class="caseStudy-single__featuredSection--content">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/best-western.jpg">

    <h2>About best western</h2>
    <p>Best Western is one of the largest independent hotel chains in the UK, forming part of a group that owns and manages 4,000 hotels in over 80 countries worldwide.</p>
  </div>

  <div class="caseStudy-single__featuredSection--sidebar">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bestwesternlogo.png">

    <div>
      <h3>Sector</h3>
      <span>Leisure</span>
    </div>

    <div>
      <h3>Shows</h3>
      <ol>
        <li>Show 1</li>
        <li>Show 2</li>
        <li>Show 3</li>
        <li>Show 4</li>
      </ol>
    </div>

  </div>
</div>

<div class="caseStudy-single__section--first">
  <div>
    <div class="caseStudy-single__section--first__content">
      <h2>The Challenge</h2>
      <p>Best Western had been exhibiting for years. They understood that making an impact involved significant investment but it didn’t seem right to have to throw away their stand each time they exhibited, especially after they had spent valuable time and money getting their design just right.</p>
      
      <p>They had 3 distinctive brands, aimed at different markets and a minimum of 6 exhibitions a year. The design needed to be distinctive and welcoming but practical at the same time. </p>
      <p>The team wanted sophisticated curves, high quality bespoke accessories and individuality.</p>
    </div>
    <div class="caseStudy-single__section--first__image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bestwestern1.jpg">
    </div>
  </div>
</div>

<div class="caseStudy-single__section--second">
  <div>

    <div class="caseStudy-single__section--second__image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bestwestern2.jpg">
    </div>

    <div class="caseStudy-single__section--second__content">
      <h2>The Isoframe Solution</h2>
      <p>Best Western’s requirements for multiple configurations were complex. Fortunately, the patented ISOframe Custom system, is strong, immensely durable and innately flexible.</p>
      <p>This meant that we designed 3 distinctive frameworks for each of the 3 brands using one ISOframe Custom system, modifying each structure to the exact dimensions stipulated by individual brand and venue requirements.</p>
      <p>Our design team created a lifelike exhibition space, a real home-away-from-home. Visitors could chat with the sales team in comfort whilst charging their devices or connecting to WiFi to check urgent emails. </p>
      <p>True to the brief, they incorporated practical features such as secure walk-in storage and integrated the stand’s electrics and multiple media screens without compromising the look and feel of an authentic Best Western lobby. </p><br />
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/custom-logo.png">
    </div>
  </div>
</div>

<div class="caseStudy-single__CTA">
  <h2>They used a ISOframe Custom exhibition stand. This is intelligent exhibiting. Are you planning an exhibition?</h2>
  <a href="#"" class="button">contact us</a>
</div>

<div class="caseStudy-single__testimonial">
  <div>
      <img src="#">
      <p>“We had thought using a shell scheme made life simple, until we discovered ISOframe’s Custom system. Changing to ISOframe Custom means our exhibition programme is now pain-free and importantly, delivering great return on our investment.”
      <span>Author Here</span></p>
  </div>
</div>

<?php get_template_part( 'template-parts/news-advice', 'news-advice' ); ?>

<?php get_template_part( 'template-parts/footer-cta', 'footer-cta' ); ?>

<?php get_footer();
