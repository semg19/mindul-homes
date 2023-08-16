<?php if (have_rows('quotes')): ?>
	<?php while (have_rows('quotes')):
		the_row(); ?>
		<section class="c_quote py-12">
			<div class="bg-blue-dark">
				<div class="container py-4">
					<?php if (have_rows('quote_items')): ?>
						<div class="c_quotes">
							<?php while (have_rows('quote_items')):
								the_row(); ?>
								<div
									class="grid flex-col w-full items-center px-6 m-auto gap-y-10 gap-x-8 sm:gap-y-8 md:px-8 md:grid-cols-3 md:items-stretch">
									<?php $image = get_sub_field('image'); ?>
									<?php if ($image): ?>
										<img class="relative inset-0 object-cover w-full h-full my-auto bg-gray-800 shadow-2xl rounded-2xl max-h-[200px] sm:max-h-[300px] md:max-h-[500px] md:min-h-[400px] md:col-span-1"
											src="<?php echo esc_url($image['url']); ?>"
											alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
									<?php if (have_rows('content')): ?>
										<?php while (have_rows('content')):
											the_row(); ?>
											<div
												class="w-full max-w-2xl md:max-w-none md:flex-auto md:py-8 md:col-span-2 md:pl-4 md:pr-0 lg:px-16">
												<figure class="relative pt-6 isolate sm:pt-12">
													<svg viewBox="0 0 162 128" fill="none"
														aria-hidden="true"
														class="absolute top-0 left-0 h-24 -z-10 stroke-white/20">
														<path id="b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb"
															d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
														<use href="#b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb"
															x="86" />
													</svg>
													<blockquote
														class="text-lg font-semibold text-white leading-8 lg:text-xl lg:leading-9">
														<p>
															<?php the_sub_field('content'); ?>
														</p>
													</blockquote>
													<figcaption class="mt-8 text-base">
														<?php if (get_sub_field('name')): ?>
															<div class="font-semibold text-white">
																<?php the_sub_field('name'); ?>
															</div>
														<?php endif; ?>
														<?php if (get_sub_field('info')): ?>
															<div class="mt-1 text-gray-300">
																<?php the_sub_field('info'); ?>
															</div>
														<?php endif; ?>
													</figcaption>
												</figure>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>
