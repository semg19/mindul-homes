<section x-data="{ m2: 0 }" class="c_price_slider">
	<div class="container">
		<div
			class="mx-auto max-w-2xl rounded-3xl bg-blue lg:mx-0 lg:flex lg:max-w-none">
			<div class="-mt-2 p-2 lg:mt-0 lg:w-full">
				<div class="lg:flex lg:justify-center">
					<div
						class="w-full flex items-center justify-center pt-10 lg:pt-0 lg:w-1/2">
						<div>
							<h3 for="m2"
								class="block text-white mb-4"><?php the_sub_field('text_slider'); ?></h3>
							<input x-model="m2" type="range" id="m2" name="m2"
								min="0" max="200"
								class="w-full h-2 bg-white rounded-full appearance-none outline-none transition-opacity duration-200">
							<span x-text="m2 + ' m²'"
								class="block mt-2 text-md text-white"></span>
						</div>
					</div>
					<div class="w-full mt-8 lg:mt-0 lg:w-1/2">
						<div
							class="rounded-b-2xl rounded-t-md bg-white py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16 lg:rounded-r-2xl lg:rounded-l-md">
							<div class="mx-auto max-w-xs px-8">
								<p
									class="text-base font-semibold text-gray-600">
									<?php the_sub_field('text_price'); ?></p>
								<p
									class="mt-6 flex items-baseline justify-center gap-x-2">
									<span
										x-text="'€' + (m2 * <?php the_sub_field('price_per_m2'); ?>).toFixed(2)"
										class="text-5xl font-bold tracking-tight text-gray-900"></span>
								</p>
								<?php
								$link = get_sub_field('button');
								if ($link): ?>
									<a class="mt-8 btn mx-auto"
										href="<?php echo esc_url($link['url']); ?>"
										target="<?php echo esc_attr($link['target']); ?>"><?php echo esc_html($link['title']); ?></a>
								<?php endif; ?>
								<p class="mt-6 text-xs leading-5 text-gray-600">
									<?php the_sub_field('text_under_button'); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.7.3/dist/alpine.js"
	defer></script>
