<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,700;0,900;1,400;1,700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_template_part( 'template-parts/off-canvas' ); ?>

<div id="page" class="site off-canvas-content" data-off-canvas-content>

	<?php do_action( 'gcode_theme_before_header' ); ?>

	<header id="masthead" class="site-header sticky" data-sticky data-margin-top="0">
		<div class="grid-container fluid">
			<div class="grid-x">
        <div class="cell small-6 medium-auto hide-for-small-only">
          <?php if ( has_nav_menu( 'primary' ) ) : ?>
          <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu(
              array(
                'container'      => false,
                'menu_id'        => 'primary',
                'menu_class'     => 'dropdown horizontal menu',
                'theme_location' => 'primary',
                'items_wrap'     => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
                'walker'         => new GT_Dropdown_Walker(),
                'fallback_cb'    => false,
              )
            );
            ?>
          </nav><!-- #site-navigation -->
          <?php endif; ?>
        </div><!-- .cell -->

				<div class="cell small-6 medium-shrink">
					<div class="site-branding text-center">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$gcode_theme_description = get_bloginfo( 'description', 'display' );
						if ( $gcode_theme_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $gcode_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div><!-- .cell -->

        <div class="cell small-6 hide-for-medium">
          <button class="off-canvas-toggle clear button float-right margin-bottom-0" data-toggle="off-canvas">
            <i class="fa fa-bars fa-2x"></i><span class="screen-reader-text"><?php esc_html_e( 'Main navigation toggle', 'gcode-theme' ); ?></span>
          </button>
        </div>

				<?php if ( has_nav_menu( 'social' ) ) : ?>
					<div class="cell medium-auto show-for-medium">
						<nav class="social-navigation show-for-medium" aria-label="<?php esc_html_e( 'Social Links Menu', 'gcode-theme' ); ?>">
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
	</header><!-- #masthead -->

	<?php do_action( 'gcode_theme_after_header' ); ?>

	<div id="content" class="site-content">

		<?php do_action( 'gcode_theme_before_content' ); ?>
