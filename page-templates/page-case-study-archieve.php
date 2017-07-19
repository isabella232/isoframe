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
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <p><?php echo get_the_excerpt(); ?></p>



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
      <img src="<?php the_field('type_logo', the_ID()); ?>">
      <h2><?php the_title(); ?></h2>
      <p><?php echo get_the_excerpt(); ?></p>
      <a href="<?php the_permalink(); ?>">Read Case Study > </a>
    </div>
  </div>
</div>
<?php endwhile;?>
<div class="case-grid">


    <div>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/images/casestudySample.jpg'>
      <div>
        <h2>Why SPAL moved away from a traditional shell scheme</h2>
        <a href='# '>Read more ></a>
      </div>
    </div>

    <div>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/images/casestudySample.jpg'>
      <div>
        <h2>Why SPAL moved away from a traditional shell scheme</h2>
        <a href='# '>Read more ></a>
      </div>
    </div>

    <div>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/images/casestudySample.jpg'>
      <div>
        <h2>Why SPAL moved away from a traditional shell scheme</h2>
        <a href='# '>Read more ></a>
      </div>
    </div>

    <div>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/images/casestudySample.jpg'>
      <div>
        <h2>Why SPAL moved away from a traditional shell scheme</h2>
        <a href='# '>Read more ></a>
      </div>
    </div>

    <div>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/images/casestudySample.jpg'>
      <div>
        <h2>Why SPAL moved away from a traditional shell scheme</h2>
        <a href='# '>Read more ></a>
      </div>
    </div>

    <div>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/images/casestudySample.jpg'>
      <div>
        <h2>Why SPAL moved away from a traditional shell scheme</h2>
        <a href='# '>Read more ></a>
      </div>
    </div>

</div>

<?php get_template_part( 'template-parts/footer-cta', 'footer-cta' ); ?>

<?php get_footer();
