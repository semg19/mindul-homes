<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mindul_Homes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Google tag (gtag.js) -->
	<script async
		src="https://www.googletagmanager.com/gtag/js?id=G-GQRDRZSTEP"></script>
	<script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-GQRDRZSTEP'); </script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Chivo:ital,wght@0,400;0,500;0,600;0,800;1,700&display=swap"
		rel="stylesheet">
	<?php wp_head(); ?>
	<link rel="apple-touch-icon" sizes="180x180"
		href="<?= get_template_directory_uri() ?>/src/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32"
		href="<?= get_template_directory_uri() ?>/src/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16"
		href="<?= get_template_directory_uri() ?>/src/favicon/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/7dbac88f78.js" crossorigin="anonymous"></script>
	<!-- Cookiebot -->
	<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="3e8bda1a-554d-44bb-aa4a-db8edeedde1a" type="text/javascript" async></script>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<div id="page">
		<a href="#content" class="sr-only">
			<?php esc_html_e('Skip to content', 'mindul-homes'); ?>
		</a>

		<?php get_template_part('template-parts/layout/header', 'content'); ?>

		<div id="content">
