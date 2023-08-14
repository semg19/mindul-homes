<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mindul_Homes
 */

?>

<footer class="bg-blue">
	<div class="px-6 py-10 mx-auto overflow-hidden max-w-7xl sm:py-12 lg:px-8">
		<?php if (has_nav_menu('menu-2')): ?>
			<nav class="-mb-6 columns-2 flex justify-center space-x-12" aria-label="Footer">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_class' => 'footer-menu pb-6 flex flex-wrap gap-y-4 gap-x-8',
						'depth' => 1,
					)
				);
				?>
			</nav>
		<?php endif; ?>
		<p class="mt-10 text-xs text-center text-white leading-5">&copy; <?php echo date ('Y'); ?> <?php bloginfo('name'); ?></p>
	</div>
</footer>
