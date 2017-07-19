<?php
/*
Template Name: Services
*/
get_header(); ?>

<div class="services__header">
  <div class="services__header--content">
    <h1><?php the_field('heading'); ?></h1>
    <h2><?php the_field('sub_heading'); ?></h2>
    <p><?php the_field('content'); ?></p>
  </div>
</div>

  <?php
  $i;
  if( have_rows('sections') ):
      while ( have_rows('sections') ) : the_row();
    $i++;

    if($i % 2 != 0) {?>
<div class="services__row--normal">
  <div class="services__row--normal__image">
   <img src="<?php the_sub_field('image'); ?>">
  </div>

  <div class="services__row--normal__text">
    <h2><?php the_sub_field('title', false); ?></h2>
    <p><?php the_sub_field('content', false); ?></p>
  </div>
</div>
    <?php } else { ?>
<div class="services__row--coloured">
  <div class="services__row--coloured--spacer">
    <div class="services__row--coloured__image">
     <img src="<?php the_sub_field('image'); ?>">
    </div>
    
    <div class="services__row--coloured__text">
      <h2><?php the_sub_field('title', false); ?></h2>
      <p><?php the_sub_field('content', false); ?></p>
    </div>
  </div>
</div>
  <?php } ?>

  <?php  
    endwhile;
  endif;
  ?>
<?php get_template_part( 'template-parts/designer-pull-out', 'designer-pull-out' ); ?>

<?php get_template_part( 'template-parts/footer-cta', 'footer-cta' ); ?>

<?php get_footer();
