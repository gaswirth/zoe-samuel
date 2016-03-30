<?php
/**
 * Template Name: Projects Top-Level
 *
 * @package WordPress
 * @subpackage rhd
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; ?>
			<?php endif; ?>

			<?php
			$slug = basename( get_permalink( get_the_ID() ) );
			$args = array(
				'post_type' => 'post',
				'category_name' => $slug
			);
			$feed = new WP_Query( $args );
			?>

			<?php if ( $feed->have_posts() ) : ?>
				<?php while ( $feed->have_posts() ) : $feed->the_post(); ?>

					<?php get_template_part( 'content' ); ?>

				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>

			<?php rhd_archive_pagination( $feed ); ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>