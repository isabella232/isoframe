<?php
/*
Template Name: Case study Archieve
*/
get_header(); ?>


<?php 
    query_posts(array( 
        'post_type' => 'case_studies',
        'showposts' => 1
    ) );  
?>
<?php while (have_posts()) : the_post(); ?>

<div class="caseFeatured">
  <div>
    <div class="caseFeatured--image">
          <?php 
            if ( has_post_thumbnail() ) {
              the_post_thumbnail();
            }  
          ?>
    </div>
    <div class="caseFeatured--content">
      <h2><?php the_field('openning_title'); ?></h2>
      <p><?php the_field('openning_content'); ?></p>
      <a href="<?php the_permalink(); ?>">Read Case Study > </a>
    </div>
  </div>
</div>
<?php endwhile;?>
<div class="case-grid">

<?php 
    query_posts(array( 
        'post_type' => 'case_studies',
        'showposts' => 6,
        'offset' => 1
    ) );  
?>
<?php while (have_posts()) : the_post(); ?>
    <div>
          <?php 
            if ( has_post_thumbnail() ) {
              the_post_thumbnail();
            }  
          ?>
      <div>
        <h2><?php the_title(); ?></h2>
        <a href='<?php the_permalink(); ?>'>Read more ></a>
      </div>
    </div>
<?php endwhile;?>

</div>

<?php get_template_part( 'template-parts/footer-cta', 'footer-cta' ); ?>

<?php get_footer();
