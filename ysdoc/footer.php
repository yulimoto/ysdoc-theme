<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ysdoc
 */
?>

	

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'ysdoc_credits' ); ?>
			<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'ysdoc' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'ysdoc' ), 'ysdoc', '<a href="https://github.com/yulimoto/ysdoc-theme" rel="designer">ysdoc-theme</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #content -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php get_sidebar(); ?>
</body>
</html>
