<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hellotechnology
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://sibforms.com/forms/end-form/build/sib-styles.css">
	<link rel="stylesheet" href="https://use.typekit.net/pxz1drp.css">
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCLV1rJZyOsUna33Knaml68MDsrvttYTXk" type="text/javascript"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'madeinwhitby' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="restrict">
			<div class="site-branding">
				<a href="/"><img src="<?php bloginfo('stylesheet_directory');?>/images/madeinwhitby.jpg" alt="Made in Whitby" /></a>
			</div><!-- .site-branding -->
	
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="main-menu" aria-expanded="false">Menu <i class="fa fa-bars"></i></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'main-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
			
			<div class="icons">
				<a href="mailto:info@madeinwhitby.om"><i class="fa fa-envelope"></i><span>info@madeinwhitby.com</span></a>
				<a href="https://www.facebook.com/madeinwhitbyuk/"><i class="fa fa-linkedin"></i><span class="alt">Facebook</span></a> 
				<a href="https://www.instagram.com/madeinwhitbyuk/"><i class="fa fa-instagram"></i><span class="alt">Instagram</span></a> 
			</div>
		</div>
	</header><!-- #masthead -->
