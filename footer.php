<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage rhd
 */
?>

	</main><!-- #main -->
</div><!-- #page -->

<footer id="colophon" role="contentinfo">
   <div id="footer-content">
        <?php get_sidebar( 'footer' ); ?>
        <div class="site-info">
			<p>
				<?php echo '&copy;' . date( 'Y' ); ?> <?php echo bloginfo( 'name' ); ?> <?php echo ( rhd_is_mobile() ) ? '<br>' : '&bull; '; ?>Site by <a href="//roundhouse-designs.com" target="_blank">Roundhouse<img id="rhd-logo-footer" src="//assets.roundhouse-designs.com/images/rhd-black-house.png" alt="Roundhouse Designs">Designs
            </p>
        </div><!-- .site-info -->
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>
