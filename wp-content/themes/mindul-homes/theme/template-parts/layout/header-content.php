<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mindul_Homes
 */

?>

<header x-data="{ open: false }" @keydown.window.escape="open = false"
	class="bg-white">
	<nav class="container flex items-center justify-between px-6 py-4 lg:px-8"
		aria-label="Global">
		<div class="flex lg:flex-1">
			<a href="<?php echo esc_url(home_url('/')); ?>"
				class="-m-1.5 p-1.5">
				<span class="sr-only">
					<?php bloginfo('name'); ?>
				</span>
				<?php if (have_rows('site_logo', 'option')): ?>
					<?php while (have_rows('site_logo', 'option')):
						the_row(); ?>
						<?php $image = get_sub_field('image'); ?>
						<?php if ($image): ?>
							<img class="w-16 sm:w-32" src="<?php echo esc_url($image['url']); ?>"
								alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</a>
		</div>
		<div class="flex lg:hidden">
			<button type="button"
				class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
				@click="open = true">
				<span class="sr-only">Open main menu</span>
				<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24"
					stroke-width="1.5" stroke="currentColor" aria-hidden="true">
					<path stroke-linecap="round" stroke-linejoin="round"
						d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
				</svg>
			</button>
		</div>
		<div class="hidden lg:flex lg:gap-x-12">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id' => 'primary-menu',
					'items_wrap' => '<ul id="%1$s" class="%2$s font-semibold" aria-label="submenu">%3$s</ul>',
				)
			);
			?>
		</div>
	</nav>
	<div x-show="open" x-transition:enter="ease-in-out duration-500"
		x-transition:enter-start="opacity-0"
		x-transition:enter-end="opacity-100"
		x-transition:leave="ease-in-out duration-500"
		x-transition:leave-start="opacity-100"
		x-transition:leave-end="opacity-0"
		x-description="Background backdrop, show/hide based on slide-over state."
		class="fixed inset-0 z-10 bg-gray-900/70 bg-opacity-75 transition-opacity"
		style="display: none;"></div>
	<div class="w-screen max-w-md pointer-events-auto">
		<div class="fixed inset-y-0 right-0 z-10 w-full px-6 py-6 overflow-y-auto bg-white sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
			@click.away="open = false" x-show="open"
			x-transition:enter="z-50 transform transition ease-in-out duration-500 sm:duration-700"
			x-transition:enter-start="translate-x-full"
			x-transition:enter-end="translate-x-0"
			x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
			x-transition:leave-start="translate-x-0"
			x-transition:leave-end="translate-x-full"
			x-description="Slide-over panel, show/hide based on slide-over state."
			style="display: none;">
			<div class="flex items-center justify-between">
				<a href="<?php echo esc_url(home_url('/')); ?>"
					class="-m-1.5 p-1.5">
					<span class="sr-only">
						<?php bloginfo('name'); ?>
					</span>
					<?php if (have_rows('site_logo', 'option')): ?>
						<?php while (have_rows('site_logo', 'option')):
							the_row(); ?>
							<?php $image = get_sub_field('image'); ?>
							<?php if ($image): ?>
								<img class="w-16"
									src="<?php echo esc_url($image['url']); ?>"
									alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</a>
				<button type="button"
					class="-m-2.5 rounded-md p-2.5 text-gray-700"
					@click="open = false">
					<span class="sr-only">Close menu</span>
					<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24"
						stroke-width="1.5" stroke="currentColor"
						aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
			<div class="mt-6 flow-root">
				<div class="-my-6 divide-y divide-gray-500/10">
					<div class="py-6 space-y-2">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id' => 'primary-menu',
								'items_wrap' => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
							)
						);
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
