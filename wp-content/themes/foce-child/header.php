<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="main-navigation">

            <button id="btn" class="menu-toggle"> 
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>

            <ul>
                <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
            </ul>

		</nav>

		<div id="menu-burger" class="hidden">

				<img id="logo" src="wp-content/themes/foce-child/img/logo.png" alt="logo Fleurs d'oranger & chats errants">

				<!-- fleurs -->
				<img class="flowers orchid" src="wp-content/themes/foce-child/img/orchid.png" alt="Dessin d'orchidée">
				<img class="flowers flower" src="wp-content/themes/foce-child/img/flower.png" alt="Dessin d'une fleur">
				<img class="flowers sunflower" src="wp-content/themes/foce-child/img/sunflower.png" alt="Dessin d'un tournesol">
				<img class="flowers random-flower" src="wp-content/themes/foce-child/img/random_flower.png" alt="Dessin d'une fleur">
				<img class="flowers hibiscus" src="wp-content/themes/foce-child/img/Hibiscus.png" alt="Dessin d'un hibiscus">

				<!-- chats -->
				<img class="cat blue-cat" src="wp-content/themes/foce-child/img/blue-cat.png" alt="Image de Kawaneko">
				<img class="cat yellow-cat" src="wp-content/themes/foce-child/img/yellow-cat.png" alt="Image de Tenshi">
				<img class="cat black-cat" src="wp-content/themes/foce-child/img/black-cat.png" alt="Image de Jaakuna">
				
				<ul>
					<li><a class="fade-titles" href="#story">Histoire</a></li>
					<li><a class="fade-titles" href="#characters">Personnages</a></li>
					<li><a class="fade-titles" href="#place">Lieu</a></li>
					<li><a class="fade-titles" href="#studio">Studio Koukaki</a></li>
				</ul>

				<p>Studio Koukaki</p>

			</div>
	</header>
