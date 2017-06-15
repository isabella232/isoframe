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
    <a href="#">Custom</a>
    <?php 
    $childArgs = array(
        'sort_order' => 'ASC',
        'sort_column' => 'menu_order',
        'child_of' => 151
    );
    $childList = get_pages($childArgs);

    foreach ($childList as $child) { ?>
        <a href="#" class="button">
        <?php echo $child->post_title; ?>
        </a> 
    <?php }?>
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
        <?php $i; foreach( $inspiration_gallery  as $image ): $i++; ?>
          <?php if($i == 3) {?>
                     <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
              </div>
        <div> 
        <?php } else { ?>
        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php } ?>
        <?php endforeach; ?>
<?php endif; ?>
    <div class="inspirationImages__text">
      <p><?php the_field('inspiration_gallery_text'); ?></p>
    </div>
  </div>
</div>

<?php get_template_part( 'template-parts/footer-cta', 'footer-cta' ); ?>

<div class="inspirationGallery">
<h2>Inspiration gallery</h2>
  <div class="inspirationGallery__content">
 <?php $inspiration_gallery2 = get_field('inspiration_gallery_2');
if( $inspiration_gallery2 ): ?>
        <?php  foreach( $inspiration_gallery2  as $image ): ?>
        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
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

<?php get_footer();
