<?php
/*
Template Name: Case study Archieve
*/
get_header(); ?>


<?php include('template-parts/header-cta.php'); ?>

<div class="caseFeatured">
  <div>
    <div class="caseFeatured--image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/casestudy-custom.png">
    </div>
    <div class="caseFeatured--content">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/custom-logo.png">
      <h2>Why SPAL moved away from a traditional shell scheme</h2>
      <p>SPAL UK is one of the world’s leading designers and manufacturers of high-performance fans to the automotive, construction, agricultural & transport industries.</p>
      <a href="#">Read Case Study > </a>
    </div>
  </div>
</div>

<div class="case-grid">

  <div class="case-grid--content">

    <div>
      <img src='#'>
      <h2>Title</h2>
      <a href='# '>Read more ></a>
    </div>

    <div>
      <img src='#'>
      <h2>Title</h2>
      <a href='# '>Read more ></a>
    </div>

    <div>
      <img src='#'>
      <h2>Title</h2>
      <a href='# '>Read more ></a>
    </div>

    <div>
      <img src='#'>
      <h2>Title</h2>
      <a href='# '>Read more ></a>
    </div>

    <div>
      <img src='#'>
      <h2>Title</h2>
      <a href='# '>Read more ></a>
    </div>

    <div>
      <img src='#'>
      <h2>Title</h2>
      <a href='# '>Read more ></a>
    </div>

  </div>
</div>

<?php get_template_part( 'template-parts/footer-cta', 'footer-cta' ); ?>

<?php get_footer();
