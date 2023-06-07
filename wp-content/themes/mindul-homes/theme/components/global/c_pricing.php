<section class="c_pricing">
	<div class="container">
		<div x-data="{ shown: false }" x-intersect="shown = true">
			<div x-show="shown" x-transition.duration.750ms>
				<div class="mx-auto max-w-4xl text-center">
					<?php the_sub_field('content'); ?>
				</div>
				<div
					class="isolate mx-auto mt-16 grid max-w-md grid-cols-1 gap-y-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
					<?php if (have_rows('items')): ?>
						<?php $i = 0; ?>
						<?php while (have_rows('items')):
							the_row(); ?>
							<?php $i++; ?>
							<div
								class="flex flex-col justify-between rounded-3xl bg-white p-8 ring-1 ring-gray-200 xl:p-10 <?php if ($i === 2): ?>lg:z-10 lg:rounded-b-none<?php elseif($i === 3): ?>lg:mt-8 lg:rounded-l-none<?php else: ?>lg:mt-8 lg:rounded-r-none<?php endif; ?>">
								<div>
									<div class="flex items-center justify-between gap-x-4">
										<h3 class="text-lg font-semibold leading-8 text-gray-900 mb-0">
											<?php the_sub_field('title'); ?>
										</h3>
										<?php if ($i === 2): ?>
											<p
												class="rounded-full bg-brown-light py-1 px-2.5 text-xs font-semibold leading-5 text-white">
												Populair</p>
										<?php endif; ?>
									</div>
									<p class="mt-4 text-sm leading-6 text-gray-600">
										<?php the_sub_field('text'); ?>
									</p>
									<p class="mt-6 flex items-baseline gap-x-1">
										<span class="text-4xl font-bold tracking-tight text-gray-900">&euro;
											<?php the_sub_field('price'); ?>
										</span>
										<span class="text-sm font-semibold leading-6 text-gray-600">/maand</span>
									</p>
									<ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600">
										<?php if (have_rows('usps')): ?>
											<?php while (have_rows('usps')):
												the_row(); ?>
												<li class="flex gap-x-3">
													<svg class="h-6 w-5 flex-none text-brown" viewBox="0 0 20 20"
														fill="currentColor" aria-hidden="true">
														<path fill-rule="evenodd"
															d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
															clip-rule="evenodd" />
													</svg>
													<?php the_sub_field('usp'); ?>
												</li>
											<?php endwhile; ?>
										<?php endif; ?>
									</ul>
								</div>
								<?php $link = get_sub_field('link'); ?>
								<?php if ($link): ?>
									<a class="btn mt-8" href="<?php echo esc_url($link['url']); ?>"
										target="<?php echo esc_attr($link['target']); ?>"><?php echo esc_html($link['title']); ?></a>
								<?php endif; ?>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
