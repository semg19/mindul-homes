<section class="c_features">
	<div class="container">
		<div x-data="{ shown: false }" x-intersect="shown = true">
			<div x-show="shown" x-transition.duration.750ms>
				<div class="mx-auto max-w-2xl lg:text-center">
					<?php the_sub_field('content'); ?>
				</div>
				<div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
					<dl class="grid max-w-xl grid-cols-1 gap-y-10 gap-x-8 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
						<?php if (have_rows('items')): ?>
							<?php while (have_rows('items')):
								the_row(); ?>
								<div class="relative pl-16">
									<dt class="text-base font-semibold leading-7 text-gray-900">
										<div
											class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
											<div class="h-6 w-6 invert">
												<?php the_sub_field('icon'); ?>
											</div>
										</div>
										<?php the_sub_field('title'); ?>
									</dt>
									<?php if (get_sub_field('text')): ?>
										<dd class="mt-2 text-base leading-7 text-gray-600">
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
