<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mesopotamia
 */

?>
<div class="post-box col-lg-4 col-md-4 col-sm-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'thumbnail' ); ?>>
		
		<div class="featured-image">
			<?php
			// Check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {
				echo '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">';
				the_post_thumbnail();
				echo '</a>';
			}
			?>
		</div>

		<div class="caption">
			<header class="entry-header">
				<?php
				if ( is_single() ) {
					the_title( '<h1 class="entry-title">', '</h1>' );
				} else {
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				}

				if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php mesopotamia_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php
				endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content caption">
				<?php
				the_content( sprintf(
				/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'mesopotamia' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mesopotamia' ),
					'after'  => '</div>',
				) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php mesopotamia_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div>
	</article><!-- #post-## -->
</div>