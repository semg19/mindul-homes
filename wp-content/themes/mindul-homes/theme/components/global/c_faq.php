<section class="c_faq">
	<div class="container-sm">
		<div class="max-w-4xl mx-auto divide-y divide-gray-900/10" x-data="{ shown: false }" x-intersect="shown = true">
			<div x-show="shown" x-transition.duration.750ms>
				<h2 class="text-2xl font-bold tracking-tight text-gray-900 leading-10">
					<?php the_sub_field('title'); ?>
				</h2>
				<dl class="mt-10 space-y-6 divide-y divide-gray-900/10">
					<?php if (have_rows('item')): ?>
						<?php while (have_rows('item')):
							the_row(); ?>
							<div x-data="{ open: false }" class="pt-6 bg-white">
								<dt>
									<button type="button" x-description="Expand/collapse question button"
										class="flex items-start justify-between w-full text-left text-gray-900"
										aria-controls="faq-0" @click="open = !open" aria-expanded="true"
										x-bind:aria-expanded="open.toString()">
										<span class="text-base font-semibold leading-7">
											<?php the_sub_field('question'); ?>
										</span>
										<span class="flex items-center ml-6 h-7">
											<svg x-description="Icon when question is collapsed." x-state:on="Item expanded"
												x-state:off="Item collapsed" class="hidden w-6 h-6" :class="{ 'hidden': open }"
												fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
												aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
											</svg>
											<svg x-description="Icon when question is expanded." x-state:on="Item expanded"
												x-state:off="Item collapsed" class="w-6 h-6" :class="{ 'hidden': !(open) }"
												fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
												aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
											</svg>
										</span>
									</button>
								</dt>
								<dd class="pr-12 mt-2 overflow-hidden" id="faq-0" x-show="open"
									x-transition:enter="transition ease-out duration-300"
									x-transition:enter-start="opacity-0 transform -translate-y-6"
									x-transition:enter-end="opacity-100 transform translate-y-0"
									x-transition:leave="transition ease-in duration-300"
									x-transition:leave-start="opacity-100 transform translate-y-0"
									x-transition:leave-end="opacity-0 transform -translate-y-6">
									<p class="text-base text-gray-600 leading-7">
										<?php the_sub_field('answer'); ?>
									</p>
								</dd>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</dl>
			</div>
		</div>
	</div>
</section>
