<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package azandmag
 */

get_header();
?>

<a href="<?php echo esc_url(get_permalink()) ?>" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" id="post-<?php the_ID(); ?>" <?php post_class('mainBoxShadow'); ?>>
	<div class="archiveCardImg"><?php the_post_thumbnail() ?></div>
	<div class="latestPostsItemsFooter">
        <div class="titleCardBlogSwiper"><h3 class="entry-title"><?php echo get_the_title() ?></h3></div>
        <div class="latestPostsItemsFooterIcons">
		<div class="homePageBlogCardCmCount"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 16 16" version="1.1" fill="#7d7d87"><path d="M 15 2 L 13 2 L 13 0 L 10 0 L 10 2 L 6 2 L 6 0 L 3 0 L 3 2 L 1 2 C 0.449219 2 0 2.449219 0 3 L 0 15 C 0 15.550781 0.449219 16 1 16 L 15 16 C 15.550781 16 16 15.550781 16 15 L 16 3 C 16 2.449219 15.550781 2 15 2 Z M 14 14 L 2 14 L 2 5 L 14 5 Z M 14 14 "></path></svg><span><?php echo get_the_date('j F') ?></span></div>
		<div class="homePageBlogCardTimeCount"><svg width="12" height="12" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" stroke="#7d7d87" stroke-width="1.7" fill="#9696a0"><path d="M8 .5c2.078 0 3.968.73 5.335 1.926C14.667 3.592 15.5 5.202 15.5 7c0 1.736-.812 3.267-2 4.389v3.853l-4.403-1.887c-.196.121-.481.142-.787.145H8c-2.078 0-3.968-.73-5.335-1.926C1.333 10.408.5 8.798.5 7s.833-3.408 2.165-4.574C4.032 1.23 5.922.5 8 .5z" fill="none" fill-rule="evenodd" fill-opacity="0"></path></svg><?php echo '<span>'. $post->comment_count .'</span>'; ?></div>
        <div class="homePageBlogCardReadMore"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16" fill="#9696a0"><g fill-rule="evenodd"><g><path d="M8 6c1.105 0 2 .895 2 2s-.895 2-2 2-2-.895-2-2 .895-2 2-2zM2 6c1.105 0 2 .895 2 2s-.895 2-2 2-2-.895-2-2 .895-2 2-2zm12 0c1.105 0 2 .895 2 2s-.895 2-2 2-2-.895-2-2 .895-2 2-2z" transform="translate(-1356.000000, -1286.000000) translate(1356.000000, 1286.000000)"></path></g></g></svg></div>
        </div>
	</div>
</a><!-- #post-<?php the_ID(); ?> -->