<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package azandmag
 */

?>

<div class="generalSinglePostStyle">
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>
	</header><!-- .entry-header -->
	<div class="singlePostHeaderParent">
			<div class="singlePostHeader">
				<div class="categoryPost">
					<?php
						foreach (get_the_category() as $category) {
							$catname = $category->cat_name;
							$catlink = get_category_link($category->cat_ID);
							echo '<a href="' . esc_url($catlink) . '">' . $catname . '</a>.';
						}
					?>
				</div>
				<div class="dateSinglePost">
					<span><?php echo the_weekday_date() ?> - </span>
					<span><?php echo get_the_date() ?></span>
				</div>
				<div class="timeCountSinglePost">
					<span>مطالعه <?php echo do_shortcode('[reading_time]') ?> دقیقه</span>
				</div>
			</div>
			<div class="authorSinglePost">
				<?php echo get_avatar( get_the_author_meta( 'ID' ) , 32 ); ?>
				<span><?php echo the_author_posts_link() ?></span>
			</div>
		</div>
	<div class="singlePostFlex">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php azandmag_post_thumbnail(); ?>

		<div class="entry-content contentSingleBox">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'azandmag' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'azandmag' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

		<!-- <footer class="entry-footer">
			<?php //azandmag_entry_footer(); ?>
		</footer>.entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
	<div class="stickySidebarSinglePostParent">
		<div class="stickyNewestPostBack">
			<div class="generalHeading">
				<h2>جدیدترین مطالب</h2>
			</div>
			<?php
				$recent_posts_args = array(
					'posts_per_page' => 5,
					'orderby' => 'date',
					'order' => 'DESC',
				);
				$recent_posts_query = new WP_Query($recent_posts_args);
				if ($recent_posts_query->have_posts()) {
					while ($recent_posts_query->have_posts()) {
						$recent_posts_query->the_post();
						?>
						<a href="<?php the_permalink(); ?>" class="recent-post">
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('thumbnail'); ?>
							<?php endif; ?>
							<h3><?php the_title(); ?></h3>
						</a>
						<?php
					}
				}
				wp_reset_postdata();
			?>
		</div>
		<div class="stickyMostViewPostBack">
			<div class="generalHeading">
				<h2>پربازدیدترین مطالب</h2>
			</div>
			<?php
				$popular_posts_args = array(
					'posts_per_page' => 5,
					'meta_key' => 'views',
					'orderby' => 'meta_value_num',
					'order' => 'DESC',
				);

				$popular_posts_query = new WP_Query($popular_posts_args);

				if ($popular_posts_query->have_posts()) {
					while ($popular_posts_query->have_posts()) {
						$popular_posts_query->the_post();
						?>
						<a href="<?php the_permalink(); ?>" class="popular-post">
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('thumbnail'); ?>
							<?php endif; ?>
							<h3><?php the_title(); ?></h3>
						</a>
						<?php
					}
				}

				wp_reset_postdata();
			?>
		</div>
	</div>
	</div>
</div>