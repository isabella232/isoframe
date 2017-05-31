<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
get_header(); ?>

<div class="blog__featured">
<?php 
    query_posts(array( 
        'showposts' => 1,
        'cat' => 9
    ) );  
?>
<?php while (have_posts()) : the_post(); ?>
  <div>
    <div class="blog__featured--image">
     <?php 
            if ( has_post_thumbnail() ) {
              the_post_thumbnail();
            }  
          ?>
    </div>
    <div class="blog__featured--content">
      <h2><?php the_title(); ?></h2>
      <p><?php echo get_the_excerpt(); ?></p>
      <a href="<?php the_permalink(); ?>" class="button--red">Read More</a>
    </div>
  </div>
  <?php endwhile;?>
</div>

<div class="blog__grid">
<h2>Blog Articles</h2>
  <div class="blog__grid--content">
<?php 
    query_posts(array( 
        'showposts' => 9,
        'cat' => 9,
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
        <h2><?php the_title(); ?></h2>
      <a href='<?php the_permalink(); ?>'>Read more ></a>
    </div>
 <?php endwhile;?>
  </div>
</div>

<div class="blog__news-grid">
<h2>Latest News</h2>
  <div class="blog__news-grid--content">
<?php 
    query_posts(array( 
        'showposts' => 9,
        'cat' => 10
    ) );  
?>
<?php while (have_posts()) : the_post(); ?>
  <div>
           <?php 
            if ( has_post_thumbnail() ) {
              the_post_thumbnail();
            }  
          ?>
        <h2><?php the_title(); ?></h2>
      <a href='<?php the_permalink(); ?>'>Read more ></a>
    </div>
 <?php endwhile;?>

  </div>
  </div>
</div>
<?php get_template_part( 'template-parts/footer-cta', 'footer-cta' ); ?>

<?php get_footer(); ?>
