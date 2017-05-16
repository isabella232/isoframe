<?php
/*
Template Name: Front
*/
get_header(); ?>

<div class="slider">
	<div style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/slider/stand-background.jpg');">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/stand-foreground.png">
		<div class="titleText">
			<div>
				<h2>NEXT GENERATION <span>EXHIBITION STANDS</span></h2>
				EXPERTISE / VALUE / PEACE OF MIND
			</div>
		</div>
	</div>
</div>

<div class="actionBoxes">

	<div>
		<img src="#">
		<h2>Title</h2>
		<p>Text here</p>
		<a href="#">Button</a>
	</div>

	<div>
		<img src="#">
		<h2>Title</h2>
		<p>Text here</p>
		<a href="#">Button</a>
	</div>

	<div>
		<img src="#">
		<h2>Title</h2>
		<p>Text here</p>
		<a href="#">Button</a>
	</div>

</div>

<div class="why-choose-us">
	<div>
		<h2>Title text</h2>
		<p>Text text</p>
		<p>text text</p>
	</div>
</div>

<div class="values">

	<div>
		<h2>Title</h2>
		<p>Text here</p>
	</div>

	<div>
		<h2>Title</h2>
		<p>Text here</p>
	</div>

	<div>
		<h2>Title</h2>
		<p>Text here</p>
	</div>

</div>

<div class="designerPullOut">
	<div class="content">
		<div class="content--image">
		</div>
		<div class="content--text">
			<h2>Title text</h2>
			<p>first paragraph</p>
			<p>Second paragraph</p>
			<a href="#" class="button">Find out more</a>
		</div>
	</div>
</div>


<div class="news-advice">
	
	<h2>News & Advice</h2>

	<div clas="new-advice--content">
		<div>
			<img src="#">
			<h2>Title</h2>
			<p>Text here</p>
			<a href='#'>Read more ></a>
		</div>

		<div>
			<img src="#">
			<h2>Title</h2>
			<p>Text here</p>
			<a href='#'>Read more ></a>
		</div>

		<div>
			<img src="#">
			<h2>Title</h2>
			<p>Text here</p>
			<a href='#'>Read more ></a>
		</div>
	</div>
</div>

<div class="footerCTA">
	<div class="footerCTA--content">
	Have an upcoming exhibition but need help to maximise impact and make the most of your investment?
	</div>
	<div class="footerCTA--link">
		<a href="#">We can help</a>
	</div>
</div>

<?php get_footer();
