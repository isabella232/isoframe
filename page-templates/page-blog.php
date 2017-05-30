<?php
/*
Template Name: Blog
*/
get_header(); ?>

<div class="blog__featured">
  <div>
    <div class="blog__featured--image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-image.jpg">
    </div>
    <div class="blog__featured--content">
      <h2>Title here</h2>
      <p>Create ground-breaking exhibitions by following our tips and staying on-trend in 2017</p>
      <a href="#" class="button--red">Read More</a>
    </div>
  </div>
</div>

<div class="blog__grid">
<h2>Blog Articles</h2>
  <div class="blog__grid--content">
  <div>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/images/blog-sample.png'>
      <h2>Title</h2>
      <a href='# '>Read more ></a>
    </div>

    <div>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/images/blog-sample.png'>
      <h2>Title</h2>
      <a href='# '>Read more ></a>
    </div>

    <div>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/images/blog-sample.png'>
      <h2>Title</h2>
      <a href='# '>Read more ></a>
    </div>

    <div>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/images/blog-sample.png'>
      <h2>Title</h2>
      <a href='# '>Read more ></a>
    </div>

    <div>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/images/blog-sample.png'>
      <h2>Title</h2>
      <a href='# '>Read more ></a>
    </div>

    <div>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/images/blog-sample.png'>
      <h2>Title</h2>
      <a href='# '>Read more ></a>
    </div>

  </div>
</div>

<div class="blog__news-grid">
<h2>Latest News</h2>
  <div class="blog__news-grid--content">

  <div>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/images/blog-sample.png'>
      <h2>Title</h2>
      <a href='# '>Read more ></a>
    </div>

    <div>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/images/blog-sample.png'>
      <h2>Title</h2>
      <a href='# '>Read more ></a>
    </div>

    <div>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/images/blog-sample.png'>
      <h2>Title</h2>
      <a href='# '>Read more ></a>
    </div>

    <div>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/images/blog-sample.png'>
      <h2>Title</h2>
      <a href='# '>Read more ></a>
    </div>

    <div>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/images/blog-sample.png'>
      <h2>Title</h2>
      <a href='# '>Read more ></a>
    </div>

    <div>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/images/blog-sample.png'>
      <h2>Title</h2>
      <a href='# '>Read more ></a>
    </div>

  </div>
  </div>
</div>
<?php get_template_part( 'template-parts/footer-cta', 'footer-cta' ); ?>

<?php get_footer();
