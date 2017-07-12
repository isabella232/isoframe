<?php

get_header(); 

$b = $_GET['budget'];
$i = $_GET['installation-type'];
$e = $_GET['exhibition-size'];
?>

<div class="services__header">
  <div class="services__header--content">
    <h1>The perfect exhibition stand for your needs</h1>
    <h2>View our range or use our handy Frame Finder</h2>
  </div>
</div>

<div class="frameFinder">
  <div class="frameFinder__form">
  <p>Answer the simple questions on budget, installation and exhibition space and we'll direct you to our recommended product</p>
  <form action="<?php echo site_url(); ?>/products/" method="get">
    <select name="budget">
      <option value="1" <?php if($b == 1) { echo "selected"; } ?>>£1k</option>
      <option value="2" <?php if($b == 2) { echo "selected"; } ?>>£1k-£5k</option>
      <option value="3" <?php if($b == 3) { echo "selected"; } ?>>£5k-£10k</option>
      <option value="4" <?php if($b == 4) { echo "selected"; } ?>>£10k+</option>
    </select>
    <select name="installation-type">
      <option value="1" <?php if($i == 1) { echo "selected"; } ?>>A stand I can build myself</option>
      <option value="2" <?php if($i == 2) { echo "selected"; } ?>>I want an installation team</option>
      <option value="3" <?php if($i == 3) { echo "selected"; } ?>>I don't know yet</option>
    </select>
    <select name="exhibition-size">
      <option value="1" <?php if($e == 1) { echo "selected"; } ?>>I have a back wall shell scheme</option>
      <option value="2" <?php if($e == 2) { echo "selected"; } ?>>I have a corner shell scheme</option>
      <option value="3" <?php if($e == 3) { echo "selected"; } ?>>I have an island stand</option>
      <option value="4" <?php if($e == 4) { echo "selected"; } ?>>I haven't booked a stand yet</option>
    </select>
    <button type="submit">Find stand</button>
  </form>
  </div>
</div>
<?php 

// 1K
if($b == 1 && $i == 1 && $e == 1) { $products = array("110","111","113");}
elseif($b == 1 && $i == 1 && $e == 2) { $products = array("110","111","113"); }
elseif($b == 1 && $i == 1 && $e == 3) { $products = array("110","111","113"); }
elseif($b == 1 && $i == 1 && $e == 4) { $products = array("110","111","113"); }

elseif($b == 1 && $i == 2 && $e == 1) { $products = array("110","111","113"); }
elseif($b == 1 && $i == 2 && $e == 2) { $products = array("110","111","113"); }
elseif($b == 1 && $i == 2 && $e == 3) { $products = array("110","111","113"); }
elseif($b == 1 && $i == 2 && $e == 4) { $products = array("110","111","113"); }

elseif($b == 1 && $i == 3 && $e == 1) { $products = array("110","111","113"); }
elseif($b == 1 && $i == 3 && $e == 2) { $products = array("110","111","113"); }
elseif($b == 1 && $i == 3 && $e == 3) { $products = array("110","111","113"); }
elseif($b == 1 && $i == 3 && $e == 4) { $products = array("110","111","113"); }

// 1K-5K
elseif($b == 2 && $i == 1 && $e == 1) { $products = array("113","111","110"); }
elseif($b == 2 && $i == 1 && $e == 2) { $products = array("113","111","110"); }
elseif($b == 2 && $i == 1 && $e == 3) { $products = array("113","111","110"); }
elseif($b == 2 && $i == 1 && $e == 4) { $products = array("113","111","110"); }

elseif($b == 2 && $i == 2 && $e == 1) { $products = array("113","111","110"); }
elseif($b == 2 && $i == 2 && $e == 2) { $products = array("113","111","110"); }
elseif($b == 2 && $i == 2 && $e == 3) { $products = array("116","111","110"); }
elseif($b == 2 && $i == 2 && $e == 4) { $products = array("113","111","110"); }

elseif($b == 2 && $i == 3 && $e == 1) { $products = array("113","111","110"); }
elseif($b == 2 && $i == 3 && $e == 2) { $products = array("113","111","110"); }
elseif($b == 2 && $i == 3 && $e == 3) { $products = array("116","111","110"); }
elseif($b == 2 && $i == 3 && $e == 4) { $products = array("113","111","110"); }

// 5k-10k
elseif($b == 3 && $i == 1 && $e == 1) { $products = array("113","114","115"); }
elseif($b == 3 && $i == 1 && $e == 2) { $products = array("113","114","115"); }
elseif($b == 3 && $i == 1 && $e == 3) { $products = array("113","114","115"); }
elseif($b == 3 && $i == 1 && $e == 4) { $products = array("113","114","115"); }

elseif($b == 3 && $i == 2 && $e == 1) { $products = array("115","116","113"); }
elseif($b == 3 && $i == 2 && $e == 2) { $products = array("115","116","113"); }
elseif($b == 3 && $i == 2 && $e == 3) { $products = array("115","116","113"); }
elseif($b == 3 && $i == 2 && $e == 4) { $products = array("115","116","113"); }

elseif($b == 3 && $i == 3 && $e == 1) { $products = array("116","113","114"); }
elseif($b == 3 && $i == 3 && $e == 2) { $products = array("116","113","114"); }
elseif($b == 3 && $i == 3 && $e == 3) { $products = array("116","113","114"); }
elseif($b == 3 && $i == 3 && $e == 4) { $products = array("116","113","114"); }

// 10k+
elseif($b == 4 && $i == 1 && $e == 1) { $products = array("113","115","116"); }
elseif($b == 4 && $i == 1 && $e == 2) { $products = array("113","115","116"); }
elseif($b == 4 && $i == 1 && $e == 3) { $products = array("113","115","116"); }
elseif($b == 4 && $i == 1 && $e == 4) { $products = array("113","115","116"); }

elseif($b == 4 && $i == 2 && $e == 1) { $products = array("115","116","113"); }
elseif($b == 4 && $i == 2 && $e == 2) { $products = array("115","116","113"); }
elseif($b == 4 && $i == 2 && $e == 3) { $products = array("115","116","113"); }
elseif($b == 4 && $i == 2 && $e == 4) { $products = array("115","116","113"); }

elseif($b == 4 && $i == 3 && $e == 1) { $products = array("115","116","113"); }
elseif($b == 4 && $i == 3 && $e == 2) { $products = array("115","116","113"); }
elseif($b == 4 && $i == 3 && $e == 3) { $products = array("115","116","113"); }
elseif($b == 4 && $i == 3 && $e == 4) { $products = array("115","116","113"); }

if($products) {

$query = new WP_Query(array(
   'post_type' => 'products',
   'post__in'      => $products,
) );

while ($query->have_posts()) : $query->the_post(); ?>


<div class="frameFinder__results">
  <div class="frameFinder__results--image">
      <img src="<?php the_field('product_long_image'); ?>">
  </div>
  <div class="frameFinder__results--content">
    <h2><?php the_title(); ?></h2>
    <p><?php the_field('openning_caption', false, false); ?></p>
    <a href="<?php the_permalink(); ?>" class="button">Find out more</a>
  </div>
</div>
<?php endwhile;?>
<?php } else { ?>

<?php $terms = get_terms( 'product_Type', array(
    'hide_empty' => false, 'exclude' => 11,
) );
foreach ($terms as $term) {
  $term_link = get_term_link( $term );
  $termid = $term->term_id;
  ?>
<div class="category-<?php echo $term->term_id; ?>">
  <div class="frameFinder__results">
    <div class="frameFinder__results--image">
    <img src="<?php the_field('category_image', 'term_' . $term->term_id); ?>"><br />
          <img src="<?php the_field('smaller_image1', 'term_' . $term->term_id); ?>" style="margin-top:10px; height:120px; width:auto!important;"> 
      <img src="<?php the_field('smaller_image2', 'term_' . $term->term_id); ?>" style="margin-top:10px;  height:120px; width:auto!important;">
      <div style="display:inline-block; padding-left:25px; font-size:1.2rem; font-weight:bold;">Price from <?php the_field('price_options', 'term_' . $term->term_id); ?></div>
    </div>
    <div class="frameFinder__results--content">
      <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logodark.png" alt="ISOframe" style="width:300px; display:block;"> <?php echo $term->name; ?></h2>
      <p><?php echo $term->description; ?></p>
    </div>
  </div>
</div>
<?php $query = new WP_Query(array(
   'post_type' => 'products',
  'tax_query' => array(
    array(
      'taxonomy' => 'product_Type',
      'field'    => 'term_id',
      'terms'    => $termid,
      'posts_per_page' => '2',
    ),
  ),
) );

while ($query->have_posts()) : $query->the_post(); ?>
<div class="categoryLight-<?php echo $term->term_id; ?>">
  <div class="frameFinder__results">
    <div class="frameFinder__results--image">
        <img src="<?php the_field('category_page_image'); ?>">
    </div>
    <div class="frameFinder__results--content">
      <h2> <?php the_title(); ?></h2>
      <p><?php the_field('openning_caption', false); ?></p>
      <a href="<?php the_permalink(); ?>" class="button">View product</a>
    </div>
  </div>
</div>
<?php endwhile;?>

<?php } } ?>

<?php get_template_part( 'template-parts/designer-pull-out', 'designer-pull-out' ); ?>

<?php get_template_part( 'template-parts/footer-cta', 'footer-cta' ); ?>

<?php get_footer();
