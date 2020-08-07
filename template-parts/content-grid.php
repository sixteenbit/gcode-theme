<?php
/**
 * Template part for displaying posts as a grid
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'hentry cell flex-container flex-dir-column' ); ?>>
	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php
		the_post_thumbnail(
			'gcode-theme-grid-image',
			array(
				'alt' => the_title_attribute( 'echo=0' ),
			)
		);
		?>
	</a>

	<header class="entry-header flex-child-shrink">
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content flex-child-grow">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer flex-child-shrink">
	<div class="entry-meta">
	  <?php GT_Tags::post_date(); ?>
	  <span class="byline author vcard">| <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a>
	</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
