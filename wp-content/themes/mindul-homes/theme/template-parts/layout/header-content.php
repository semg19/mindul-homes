<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mindul_Homes
 */

?>

<header x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-white">
	<nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
		<div class="flex lg:flex-1">
			<a href="<?php echo esc_url(home_url('/')); ?>" class="-m-1.5 p-1.5">
				<span class="sr-only">
					<?php bloginfo('name'); ?>
				</span>
				<img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600"
					alt="">
			</a>
		</div>
		<div class="flex lg:hidden">
			<button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
				@click="open = true">
				<span class="sr-only">Open main menu</span>
				<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
					aria-hidden="true">
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
					'items_wrap' => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
				)
			);
			?>
		</div>
	</nav>
	<div x-description="Mobile menu, show/hide based on menu open state." class="lg:hidden" x-ref="dialog" x-show="open"
		aria-modal="true" style="display: none;">
		<div x-description="Background backdrop, show/hide based on slide-over state." class="fixed inset-0 z-10"></div>
		<div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
			@click.away="open = false">
			<div class="flex items-center justify-between">
				<a href="<?php echo esc_url(home_url('/')); ?>" class="-m-1.5 p-1.5">
					<span class="sr-only">
						<?php bloginfo('name'); ?>
					</span>
					<img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600"
						alt="">
				</a>
				<button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="open = false">
					<span class="sr-only">Close menu</span>
					<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
						aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
			<div class="mt-6 flow-root">
				<div class="-my-6 divide-y divide-gray-500/10">
					<div class="space-y-2 py-6">
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
