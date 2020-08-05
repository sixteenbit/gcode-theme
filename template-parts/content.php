<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php get_template_part( 'template-parts/entry-header' ); ?>

	<?php gcode_theme_post_thumbnail(); ?>

	<div class="entry-content">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell small-12 medium-auto">
					<?php
					if ( is_search() || ! is_singular() ) {
						the_excerpt();
					} else {
						the_content( __( 'Continue reading', 'gcode-theme' ) );
					}

					?>

					<div class="entry-categories">
						<span class="screen-reader-text"><?php _e( 'Categories', 'gcode-theme' ); ?></span>
						<div class="entry-categories-inner">
							<?php the_category( ', ' ); ?>
						</div><!-- .entry-categories-inner -->
					</div><!-- .entry-categories -->

					<?php
					wp_link_pages(
						array(
							'before'      => '<nav class="post-nav-links" aria-label="' . esc_attr__( 'Page', 'gcode-theme' ) . '"><span class="label secondary">' . __( 'Pages:', 'gcode-theme' ) . '</span>',
							'after'       => '</nav>',
							'link_before' => '<span class="page-number">',
							'link_after'  => '</span>',
						)
					);

					if ( is_single() ) {
						get_template_part( 'template-parts/navigation' );
					}

					edit_post_link(
						sprintf(
							wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Edit <span class="screen-reader-text">%s</span>', 'gcode-theme' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						),
						'<span class="edit-link">',
						'</span>'
					);

					?>
				</div><!-- .cell -->

        <?php get_sidebar(); ?>
			</div><!-- .grid-x -->
		</div><!-- .grid-container -->
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
