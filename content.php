<?php
/**
 * @package Bushwick
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_title( '<header class="entry-header"><h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1></header><!-- .entry-header -->' ); ?>

	<?php if ( is_search() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php
			the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'bushwick' ) );
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'bushwick' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php
			bushwick_posted_on();
			edit_post_link( __( 'Edit', 'bushwick' ), ' <span class="edit-link">', '</span>' );
		?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
