<section class="c_faq">
	<div class="container-sm">
		<div class="mx-auto max-w-4xl divide-y divide-gray-900/10">
			<h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">
				<?php the_sub_field('title'); ?>
			</h2>
			<dl class="mt-10 space-y-6 divide-y divide-gray-900/10">
				<?php if (have_rows('item')): ?>
					<?php while (have_rows('item')):
						the_row(); ?>
						<div x-data="{ open: false }" class="pt-6 bg-white">
							<dt>
								<button type="button" x-description="Expand/collapse question button"
									class="flex w-full items-start justify-between text-left text-gray-900"
									aria-controls="faq-0" @click="open = !open" aria-expanded="true"
									x-bind:aria-expanded="open.toString()">
									<span class="text-base font-semibold leading-7">
										<?php the_sub_field('question'); ?>
									</span>
									<span class="ml-6 flex h-7 items-center">
										<svg x-description="Icon when question is collapsed." x-state:on="Item expanded"
											x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': open }"
											fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
											aria-hidden="true">
											<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
										</svg>
										<svg x-description="Icon when question is expanded." x-state:on="Item expanded"
											x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': !(open) }"
											fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
											aria-hidden="true">
											<path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
										</svg>
									</span>
								</button>
							</dt>
							<dd class="mt-2 pr-12 overflow-hidden" id="faq-0" x-show="open"
								x-transition:enter="transition ease-out duration-300"
								x-transition:enter-start="opacity-0 transform -translate-y-6"
								x-transition:enter-end="opacity-100 transform translate-y-0"
								x-transition:leave="transition ease-in duration-300"
								x-transition:leave-start="opacity-100 transform translate-y-0"
								x-transition:leave-end="opacity-0 transform -translate-y-6">
								<p class="text-base leading-7 text-gray-600">
									<?php the_sub_field('answer'); ?>
								</p>
							</dd>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</dl>
		</div>
	</div>
</section>
