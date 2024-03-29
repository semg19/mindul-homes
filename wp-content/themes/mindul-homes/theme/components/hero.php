<section class="relative flex justify-center overflow-hidden isolate py-14 md:min-h-[800px]">
	<?php $hero_img = get_field('hero_img'); ?>
	<?php if ($hero_img): ?>
		<div class="absolute left-0 top-0 w-full h-full bg-black opacity-30">
		</div>
		<img src="<?php echo esc_url($hero_img['url']); ?>"
			alt="<?php echo esc_attr($hero_img['alt']); ?>"
			class="absolute inset-0 object-cover w-full h-full -z-10" />
	<?php endif; ?>
	<div class="relative container-sm m-auto sm:py-48 lg:py-56">
		<div class="text-center text-white">
			<?php if (have_rows('hero_content')): ?>
				<?php while (have_rows('hero_content')):
					the_row(); ?>
					<h1>
						<?php the_sub_field('hero_title'); ?>
					</h1>
					<p>
						<?php the_sub_field('hero_text'); ?>
					</p>
					<div class="flex items-center justify-center mt-10 gap-x-6">
						<?php if (have_rows('hero_links')): ?>
							<?php $i = 0; ?>
							<?php while (have_rows('hero_links')):
								the_row(); ?>
								<?php $i++; ?>
								<?php $button = get_sub_field('button'); ?>
								<?php if ($button): ?>
									<a class="<?php if ($i === 1): ?>btn<?php else: ?>text-sm font-semibold leading-6<?php endif; ?>"
										href="<?php echo esc_url($button['url']); ?>"
										target="<?php echo esc_attr($button['target']); ?>">
										<?php echo esc_html($button['title']); ?>
										<?php if ($i === 2): ?>
											<span aria-hidden="true">→</span>
										<?php endif; ?>
									</a>
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
