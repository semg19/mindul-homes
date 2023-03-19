<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mindul_Homes
 */

get_header();

if (have_posts()):
	while (have_posts()):
		the_post();
		get_template_part('components/content-builder');
	endwhile;
endif;

get_footer();
