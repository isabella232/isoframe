<?php
/*

*/
get_header(); ?>

<div class="frameFinder">
  <div class="frameFinder__form">
  <h1>Frame Finder</h1>
  <p>Enter your requirements and we’ll help find the perfect stand for you</p>
  <form>
    <select name="installation-type">
      <option value="test">test</option>
    </select>
    <select name="exhibition-size">
      <option value="test">44x44</option>
    </select>
    <select name="budget">
      <option value="test">100-1000</option>
    </select>
    <button type="submit">Find stand</button>
  </form>
  </div>
</div>


<?php $terms = get_terms( 'product_Type', array(
    'hide_empty' => false,
) );
foreach ($terms as $term) {
  $term_link = get_term_link( $term );
  ?>
<div class="frameFinder__results">
  <div class="frameFinder__results--image">
 <?php echo get_the_post_thumbnail($term->id); ?>
  </div>
  <div class="frameFinder__results--content">
    <h2> <?php echo $term->name; ?></h2>
    <p><?php echo $term->description; ?></p>
    <a href="<?php echo $term_link; ?>" class="button">Find out more</a>
  </div>
</div>
<?php } ?>

<?php get_template_part( 'template-parts/designer-pull-out', 'designer-pull-out' ); ?>

<?php get_template_part( 'template-parts/footer-cta', 'footer-cta' ); ?>

<?php get_footer();
