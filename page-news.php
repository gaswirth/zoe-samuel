<?php
/**
 * The "News" page template file.
 *
 * @package WordPress
 * @subpackage rhd
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">
			<header class="entry-header">
				<h1 class="page-title">News</h1>
			</header><!-- .entry-header -->

			<?php
				// Sticky loop first
				if ( !is_paged() ) {
					$stickies = get_option( 'sticky_posts' );
					// Sticky
					$args = array(
						'category__in' => 4,
						'ignore_sticky_posts' => 1,
						'post__in' => $stickies
					);
					$sticky_news_query = new WP_Query( $args );

					if ( $sticky_news_query->have_posts() ) {
						while ( $sticky_news_query->have_posts() ) {
							$sticky_news_query->the_post();
							get_template_part( 'content' );
						}
					}

					if ( is_single() && comments_open() ) comments_template();
				} // end is_paged check

				// Continue 'normal' loop
				$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
				$args = array(
					'paged' => $paged,
					'category__in' => 4,
					'post__not_in' => $stickies
				);
				$news_query = new WP_Query( $args );

				if ( $news_query->have_posts() ) {
					while ( $news_query->have_posts() ) {
						$news_query->the_post();
						get_template_part( 'content' );
					}

					if ( is_single() && comments_open() ) comments_template();
				} ?>

		</div><!-- #content -->

		<?php rhd_archive_pagination(); ?>

	</section><!-- #primary -->

<?php if ( !rhd_is_mobile() ) get_sidebar(); ?>
<?php get_footer(); ?>