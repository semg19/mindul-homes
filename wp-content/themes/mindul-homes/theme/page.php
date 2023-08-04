<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mindul_Homes
 */

get_header();
?>

<section class="bg-gray-50">
	<div class="container py-20">
		<h1 class="text-center"><?= get_the_title(); ?></h1>
	</div>
</section>

<?php
if (have_posts()):
	while (have_posts()):
		the_post();
		get_template_part('components/content-builder');
	endwhile;
endif;

get_footer();
