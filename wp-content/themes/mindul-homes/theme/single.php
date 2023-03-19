<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
