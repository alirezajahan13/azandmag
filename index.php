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
		<div class="swiper mySwiper azandBlogContainer">
			<div class="swiper-wrapper">
				<?php
				$args = array(
					'post_type'=>'post',
					'posts_per_page' => 6,
					'post_status' => 'publish',
					'order'=>'DESC',
				);
				$the_query = new WP_Query( $args );
					// The Loop
					while ( $the_query->have_posts() ) : $the_query->the_post();
						echo '<div class="latestPostsItems swiper-slide mainBoxShadow">';
						echo '<a href="'.get_permalink().'"><img class="latestPostsThumb" src="'.get_the_post_thumbnail_url().'"></a>';
						echo '<div class="latestPostsItemsFooter">';
						echo'<a href="'.get_permalink().'"><h3>'.get_the_title().'</h3></a>';
						echo '<div class="latestPostsItemsFooterIcons">';
						echo '<div class="homePageBlogCardCmCount">';
						echo '<span><svg width="12" height="12" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" stroke="var(--grey-1)" stroke-width="1.7" fill="#9696a0"><path d="M8 .5c2.078 0 3.968.73 5.335 1.926C14.667 3.592 15.5 5.202 15.5 7c0 1.736-.812 3.267-2 4.389v3.853l-4.403-1.887c-.196.121-.481.142-.787.145H8c-2.078 0-3.968-.73-5.335-1.926C1.333 10.408.5 8.798.5 7s.833-3.408 2.165-4.574C4.032 1.23 5.922.5 8 .5z" fill="none" fill-rule="evenodd" fill-opacity="0"></path></svg></span>';
						echo '<span>'. $post->comment_count .'</span>';
						echo '</div>';
						echo '<div class="homePageBlogCardTimeCount">';
						echo '<span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 16 16" version="1.1" fill="var(--grey-1)"><path d="M 15 2 L 13 2 L 13 0 L 10 0 L 10 2 L 6 2 L 6 0 L 3 0 L 3 2 L 1 2 C 0.449219 2 0 2.449219 0 3 L 0 15 C 0 15.550781 0.449219 16 1 16 L 15 16 C 15.550781 16 16 15.550781 16 15 L 16 3 C 16 2.449219 15.550781 2 15 2 Z M 14 14 L 2 14 L 2 5 L 14 5 Z M 14 14 "></path></svg></span>';
						echo '<span>'. get_the_date() .'</span>';
						echo '</div>';
						echo '<a href="'.get_permalink().'" class="homePageBlogCardReadMore"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16" fill="var(--grey-3)"><g fill-rule="evenodd"><g><path d="M8 6c1.105 0 2 .895 2 2s-.895 2-2 2-2-.895-2-2 .895-2 2-2zM2 6c1.105 0 2 .895 2 2s-.895 2-2 2-2-.895-2-2 .895-2 2-2zm12 0c1.105 0 2 .895 2 2s-.895 2-2 2-2-.895-2-2 .895-2 2-2z" transform="translate(-1356.000000, -1286.000000) translate(1356.000000, 1286.000000)"></path></g></g></svg></a>';
						echo '</div>';
						echo '</div>';
						echo '</div>';
					endwhile;
					// Reset Post Data
					wp_reset_postdata();
				?>
			</div>
			<div class="swiper-button-next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16" fill="#9696a0"><g transform="translate(2 2)"><g transform="translate(2)"><path d="M3.293 6.707l5 5a1 1 0 1 0 1.414-1.414L5.414 6l4.293-4.293A1 1 0 1 0 8.293.293l-5 5a1 1 0 0 0 0 1.414z" transform="translate(-3)"></path></g></g></svg></div>
    		<div class="swiper-button-prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16" fill="#9696a0"><g transform="translate(2 2)"><g transform="translate(2)"><path d="M3.293 6.707l5 5a1 1 0 1 0 1.414-1.414L5.414 6l4.293-4.293A1 1 0 1 0 8.293.293l-5 5a1 1 0 0 0 0 1.414z" transform="translate(-3)"></path></g></g></svg></div>
		</div>

	</div>
</div>
					
				
<?php
// get_sidebar();
get_footer();


