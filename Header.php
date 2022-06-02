<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sample
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site" >
	<div class="background"style="background-color:rgb(255, 153, 51)">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sample' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"style="text-align: center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" style=" text-decoration:none;color:darkorchid;" ><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"  style="text-decoration:none;color:darkorchid"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			endif;
			$sample_description = get_bloginfo( 'description', 'display' );
			if ( $sample_description || is_customize_preview() ) :
				?>
				<h3 class="site-description"style="color:darkorchid;text-align: center"><?php echo $sample_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h3>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" >
			
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header'
					
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	</div>