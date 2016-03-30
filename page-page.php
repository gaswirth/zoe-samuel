<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage rhd
 */

get_header(); ?>

	<section id="primary" class="site-content fullwidth">
		<div id="content" role="main">
			<h1 class="page-title">Page</h1>
			<?php $page_q = new WP_Query( 'category_name=page' ); ?>

			<?php if ( $page_q->have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( $page_q->have_posts() ) : $page_q->the_post(); ?>

					<?php get_template_part( 'content' ); ?>

					<?php echo rhd_list_child_pages(); ?>

				<?php endwhile; ?>

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_footer(); ?>