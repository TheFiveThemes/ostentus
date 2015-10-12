<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ostentus
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<?php if ( is_singular() && has_post_thumbnail( $post->ID ) ) :
    $image_id = get_post_thumbnail_id();
    $url = wp_get_attachment_image_src( $image_id, 'ostentus-large' );
?>
<style type="text/css">
    .site:before {
        background-image: url(<?php echo esc_attr( $url[0] ); ?>);
    }
</style>
<?php endif; ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ostentus' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php // magnus_the_site_logo(); ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php $description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<h2 class="site-description"><?php echo $description; ?></h2>
			<?php endif; ?>
		</div><!-- .site-branding -->

        <?php if ( has_nav_menu( 'primary' ) ) : ?>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ostentus' ); ?></button>

            <h2 class="menu-heading"><?php _e( 'Navigation', 'magnus' ); ?></h2>
            <?php
                // Primary navigation menu.
                wp_nav_menu( array(
                    'menu_class'     => 'nav-menu',
                    'menu_id' => 'primary-menu',
                    'theme_location' => 'primary',
                ) );
            ?>
		</nav><!-- #site-navigation -->
        <?php endif; ?>

        <?php if ( has_nav_menu( 'social' ) ) : ?>
            <nav id="social-navigation widget" class="social-navigation" role="navigation">
            <?php
                // Social links navigation menu.
                wp_nav_menu( array(
                    'theme_location' => 'social',
                    'depth'          => 1,
                    'link_before'    => '<span class="screen-reader-text">',
                    'link_after'     => '</span>',
                ) );
            ?>
            </nav><!-- .social-navigation -->
        <?php endif; ?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
