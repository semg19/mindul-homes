<div class="relative isolate overflow-hidden pt-14">
	<?php $hero_img = get_field('hero_img'); ?>
	<?php if ($hero_img): ?>
		<div class="c-hero_img">
			<img src="<?php echo esc_url($hero_img['url']); ?>" alt="<?php echo esc_attr($hero_img['alt']); ?>"
				class="absolute inset-0 -z-10 h-full w-full object-cover" />
		</div>
	<?php endif; ?>
	<div class="relative mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
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
					<div class="mt-10 flex items-center justify-center gap-x-6">
						<?php if (have_rows('hero_links')): ?>
							<?php $i = 0; ?>
							<?php while (have_rows('hero_links')):
								the_row(); ?>
								<?php $i++; ?>
								<?php $button = get_sub_field('button'); ?>
								<?php if ($button): ?>
									<a class="<?php if ($i === 1): ?>btn<?php else: ?>text-sm font-semibold leading-6<?php endif; ?>"
										href="<?php echo esc_url($button['url']); ?>" target="<?php echo esc_attr($button['target']); ?>">
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
</div>
