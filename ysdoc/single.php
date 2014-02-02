<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ysdoc
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php //ysdoc_post_nav(); ?>
			<?php if (is_single()): ?>
		<nav id="nav-below" class="pagination">
			<div class="nav-previous"><a href="<?php echo esc_url( home_url( ) ); ?>">&larr; Back to blog</a></div>
		</nav><!-- #nav-below -->
		<?php endif ?>
			
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>
		
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>