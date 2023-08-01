<section class="c_features">
	<div class="container">
		<div x-data="{ shown: false }" x-intersect="shown = true">
			<div x-show="shown" x-transition.duration.750ms>
				<div class="max-w-2xl mx-auto lg:text-center">
					<?php the_sub_field('content'); ?>
				</div>
				<div
					class="max-w-2xl mx-auto mt-16 sm:mt-20 lg:mt-24 lg:max-w-4xl">
					<dl
						class="max-w-xl grid grid-cols-1 gap-y-10 gap-x-8 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
						<?php if (have_rows('items')): ?>
							<?php while (have_rows('items')):
								the_row(); ?>
								<div class="relative pl-16">
									<dt
										class="text-base font-semibold text-gray-900 leading-7">
										<div
											class="absolute top-0 left-0 flex items-center justify-center w-10 h-10 rounded-lg bg-blue">
											<div class="w-6 h-6 invert">
												<?php the_sub_field('icon'); ?>
											</div>
										</div>
										<?php the_sub_field('title'); ?>
									</dt>
									<?php if (get_sub_field('text')): ?>
										<dd class="mt-2 text-base text-gray-600 leading-7">
											<?php the_sub_field('text'); ?>
										</dd>
									<?php endif; ?>
								</div>

							<?php endwhile; ?>
						<?php endif; ?>
					</dl>
				</div>
			</div>
		</div>
	</div>
</section>