<?php
/*
Template Name: Inspiration
*/

    global $post;
    $post_slug=$post->post_name;

get_header(); ?>


<div class="inspirationImage">
  <img src="<?php the_field('image'); ?>">
</div>

<div class="inspirationFilter">
  <div>
    <a href="<?php echo site_url(); ?>/inspiration" class="button<?php if($post_slug == "inspiration") { echo "-selected"; } ?>">Custom</a>
    <a href="<?php echo site_url(); ?>/inspiration/modular" class="button<?php if($post_slug == "modular") { echo "-selected"; } ?>">Modular</a>
   <a href="<?php echo site_url(); ?>/inspiration/portable" class="button<?php if($post_slug == "portable") { echo "-selected"; } ?>">Portable</a>

  </div>
</div>

<div class="inspirationType">
  <div>
      <h2><?php the_field('inspiration_type_logo'); ?></h2>
  </div>
</div>

<div class="inspirationImages"> 
  <div>
  <?php $inspiration_gallery = get_field('inspiration_gallery');
if( $inspiration_gallery ): ?>
        <?php foreach( $inspiration_gallery  as $image ): ?>
          <div>
       <a href="<?php echo $image['sizes']['large']; ?>" data-lightbox="inspiration"> <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
        </div>
        <?php endforeach; ?>
<?php endif; ?>
 <?php $inspiration_gallery2 = get_field('inspiration_gallery_2');
if( $inspiration_gallery2 ): ?>
        <?php  foreach( $inspiration_gallery2  as $image ): ?>
          <div>
         <a href="<?php echo $image['sizes']['large']; ?>" data-lightbox="inspiration"> <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
        </div>
        <?php endforeach; ?>
<?php endif; ?>
    <div>
       <p><?php the_field('inspiration_gallery_message_2'); ?></p>
      <a href="<?php the_field('show_me_button'); ?>" class="button--white">Show me</a>
    </div>

  </div>
</div>

<?php get_template_part( 'template-parts/news-advice', 'news-advice' ); ?>

<?php get_template_part( 'template-parts/footer-cta', 'footer-cta' ); ?>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/lightbox.min.js"></script>
