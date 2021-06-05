<?php
/**
 * Template part for displaying posts.
 *
 * @package bootscores
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php bootscores_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
					<p class="card-content"><?php the_excerpt(); ?></p>
<a class="card-footer" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><button class="btn btn-primary head-btn">Read More</button></a>
<hr>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bootscores' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php bootscores_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
