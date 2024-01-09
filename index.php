<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package azandmag
 */

get_header();
?>

<div class="azandBlogPageIntroContainer">
	<a href="#" class="blogPageIntroCard">
		<img src="<?php bloginfo('template_directory') ?>/img/2.jpeg" alt="">
		<h2>لورم ایپسوم متن ساختگی با تولید سادگی</h2>
	</a>
	<a href="#" class="blogPageIntroCard">
		<img src="<?php bloginfo('template_directory') ?>/img/2.jpeg" alt="">
		<h2>لورم ایپسوم متن ساختگی با تولید سادگی</h2>
	</a>
	<a href="#" class="blogPageIntroCard">
		<img src="<?php bloginfo('template_directory') ?>/img/2.jpeg" alt="">
		<h2>لورم ایپسوم متن ساختگی با تولید سادگی</h2>
	</a>
</div>
<div class="azandBlogFeaturedContentContainer">
	<div class="azandBlogFeaturedContent mainView">
		<div class="generalHeading">
			<h2>مطالب برگزیده</h2>
		</div>
		<div class="swiper mySwiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">Slide 1</div>
				<div class="swiper-slide">Slide 2</div>
				<div class="swiper-slide">Slide 3</div>
				<div class="swiper-slide">Slide 4</div>
				<div class="swiper-slide">Slide 5</div>
				<div class="swiper-slide">Slide 6</div>
				<div class="swiper-slide">Slide 7</div>
				<div class="swiper-slide">Slide 8</div>
				<div class="swiper-slide">Slide 9</div>
			</div>
			<div class="swiper-button-next"></div>
    		<div class="swiper-button-prev"></div>
		</div>

	</div>
</div>

<?php
// get_sidebar();
get_footer();
