<?php
/**
 * Single page template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

<div class="productMenu">
<?php
$queried_object = get_queried_object(); 
$term_id = $queried_object->term_id;  
$termID = 'product_Type_' . $term_id;
$terms = get_terms('product_Type');
echo '<ul>';
foreach ($terms as $term) {
    echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
}
echo '</ul>';
?>

</div>

<div class="productType--featuredImage">
	<img src="<?php the_field('image', $termID); ?>">
</div>

<div class="productType--heading">
	<h1><?php the_field('title', $termID); ?></h1>
</div>

<div class="productType--features">
<?php the_field('features', $termID); ?>
</div>

<div class="productType__content">
<h2><?php the_field('title_copy', $termID); ?></h2>
	<div class="productType__content--main">
		<?php the_field('text_area', $termID); ?>
	</div>

	<div class="productType__content--pullout">
		<?php the_field('customer_promise', $termID); ?>
	</div>
</div>

<div class="productType__action">
	<div class="productType__action--box">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/exhibit-small.jpg">
		<h2>Exhibit</h2>
		<a href="#">Find out more ></a>
	</div>
	<div class="productType__action--box">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/wave-small.jpg">
		<h2>Wave</h2>
		<a href="#">Find out more ></a>
	</div>
	<div class="productType__action--box">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/fabric-small.jpg">
		<h2>Fabric</h2>
		<a href="#">Find out more ></a>
	</div>
	<div class="productType__action--box">
		<?php the_field('not_sure_message', $termID, false); ?>
	</div>
</div>
<div class="productType-CTA">
	<h2><?php the_field('call_to_action', $termID); ?></h2>
	<a href="<?php the_field('call_to_action_url', $termID); ?>" class="button"><?php the_field('call_to_action_button_text', $termID); ?></a>
</div>

<?php get_template_part( 'template-parts/news-advice', 'news-advice' ); ?>

 <?php get_footer();
