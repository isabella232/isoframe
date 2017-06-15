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
<?php
$queried_object = get_queried_object(); 
$term_id = $queried_object->term_id;  
$termID = 'product_Type_' . $term_id;
?>
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

<?php
$args = array(
	'post_type' => 'products',
	'posts_per_page' => 3,
	'tax_query' => array(
		array(
			'taxonomy' => 'product_Type',
			'field'    => 'id',
			'terms'    => $term_id,
		),
	),
);
$the_query = new WP_Query( $args );

// The Loop
while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

 		<div class="productType__action--box">
		<?php the_post_thumbnail(); ?>
		<h2><?php the_title(); ?></h2>
		<a href="<?php the_permalink(); ?>">Find out more ></a>
	</div>

<?php endwhile; ?>


	<div class="productType__action--box">
		<?php the_field('not_sure_message', $termID, false); ?>
	</div>
</div>
<div class="productType-CTA">
	<h2><?php the_field('call_to_action', $termID); ?></h2>
	<a href="<?php the_field('call_to_action_url', $termID); ?>" class="button"><?php the_field('call_to_action_button_text', $termID); ?></a>
</div>

<?php get_template_part( 'template-parts/case_studies', 'case_studies' ); ?>

 <?php get_footer();
