<?php
/*
Template Name: Case study Single
*/
get_header(); ?>


<div class="caseStudy-single__Image">
  <img src="<?php the_field('image'); ?>">

<?php if( have_rows('points') ):  while ( have_rows('points') ) : the_row(); ?>
 <div class="caseStudy-single__Image--option" style="margin-left:<?php the_sub_field('left') ?>; top:<?php the_sub_field('top') ?>;">
    <div class="arrow_box"><?php the_sub_field('content', false, false) ?></div>
  </div>
<?php endwhile; endif; ?>
</div>

<div class="caseStudy-single__featuredSection">

<h2><?php the_field('openning_title'); ?></h2>

  <div class="caseStudy-single__featuredSection--content">
    <img src="<?php the_field('main_image'); ?>">
<?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
  </div>

  <div class="caseStudy-single__featuredSection--sidebar">
    <img src="<?php the_field('client_logo'); ?>">

    <div>
      <h3>Sector</h3>
      <span><?php the_field('sector'); ?></span>
    </div>

    <div>
      <h3>Shows</h3>
      <?php the_field('upcoming_shows'); ?>
    </div>

  </div>
</div>

<div class="caseStudy-single__section--first">
  <div>
    <div class="caseStudy-single__section--first__content">
      <h2>The Challenge</h2>
      <?php the_field('challenge'); ?>
    </div>
    <div class="caseStudy-single__section--first__image">
      <img src="<?php the_field('challenge_image'); ?>">
    </div>
  </div>
</div>

<div class="caseStudy-single__section--second">
  <div>

    <div class="caseStudy-single__section--second__image">
      <img src="<?php the_field('solution_image'); ?>">
    </div>

    <div class="caseStudy-single__section--second__content">
    <h2>The Solution</h2>
      <?php the_field('solution_text'); ?>
    </div>
  </div>
</div>

<div class="caseStudy-single__CTA">
  <h2><?php the_field('cta_text'); ?></h2>
  <a href="<?php echo site_url(); ?>/contact"" class="button">contact us</a>
</div>

<div class="caseStudy-single__testimonial">
  <div>
      <img src="<?php the_field('testimonial_image'); ?>">
      <p><?php the_field('testimonial'); ?>
      <span><?php the_field('testimonial_author'); ?></span></p>
  </div>
</div>

<?php get_template_part( 'template-parts/news-advice', 'news-advice' ); ?>

<?php get_template_part( 'template-parts/footer-cta', 'footer-cta' ); ?>

<?php get_footer();
