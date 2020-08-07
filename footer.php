<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
	</div><!-- #content -->

	<?php
	do_action( 'gcode_theme_after_content' );
	do_action( 'gcode_theme_before_footer' );
	?>

  <?php get_template_part( 'template-parts/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer">
		<div class="grid-container">
			<div class="grid-x align-stretch">
		<div class="cell medium-auto align-self-middle">
		  <h6 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h6>
		</div>
				<div class="cell medium-shrink align-self-middle">
					<div class="site-info">
						<p class="copyright">
							<?php echo sprintf( __( 'Copyright &copy; %s. All rights reserved.', 'gcode-theme' ), date( 'Y' ) . '. ' . esc_html( get_bloginfo( 'name' ) ) ); ?>
						</p>
					</div><!-- .site-info -->
				</div><!-- .cell -->

		<?php if ( has_nav_menu( 'social' ) ) : ?>
		  <div class="cell medium-auto">
			<nav class="social-navigation" aria-label="<?php esc_html_e( 'Social Links Menu', 'gcode-theme' ); ?>">
			  <?php
				wp_nav_menu(
					array(
						'container'      => false,
						'theme_location' => 'social',
						'menu_class'     => 'social-links-menu menu align-right',
						'depth'          => 1,
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>',
					)
				);
				?>
			</nav><!-- .social-navigation -->
		  </div><!-- .cell -->
		<?php endif; ?>
			</div><!-- .grid-x -->
		</div><!-- .grid-container -->
	</footer><!-- #colophon -->

	<?php do_action( 'gcode_theme_after_footer' ); ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
