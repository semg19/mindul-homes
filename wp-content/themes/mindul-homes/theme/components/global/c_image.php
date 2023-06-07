<section class="c_image">
	<div class="<?php if (get_sub_field( 'container' ) === 'full') : ?>container<?php else : ?>container-sm<?php endif; ?> py-0">
		<?php if (have_rows('images')): ?>
			<div class="main-carousel">
				<?php while (have_rows('images')):
					the_row(); ?>
					<?php $image = get_sub_field('image'); ?>
					<?php if ($image): ?>
						<figure class="w-full">
							<img class="aspect-video rounded-lg object-cover w-full" src="<?php echo esc_url($image['url']); ?>"
								alt="<?php echo esc_attr($image['alt']); ?>">
							<?php if ($text = get_sub_field('text')): ?>
								<figcaption class="mt-4 flex gap-x-4 italic text-sm">
									<?= $text; ?>
								</figcaption>
							<?php endif; ?>
						</figure>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
