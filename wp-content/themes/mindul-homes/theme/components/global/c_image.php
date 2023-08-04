<section class="c_image pb-10">
	<div class="<?php if (get_sub_field( 'container' ) === 'full') : ?>container<?php else : ?>container-sm<?php endif; ?>">
		<?php if (have_rows('images')): ?>
			<div class="main-carousel">
				<?php while (have_rows('images')):
					the_row(); ?>
					<?php $image = get_sub_field('image'); ?>
					<?php if ($image): ?>
						<figure class="w-full">
							<img class="object-cover w-full rounded-lg aspect-video" src="<?php echo esc_url($image['url']); ?>"
								alt="<?php echo esc_attr($image['alt']); ?>">
							<?php if ($text = get_sub_field('text')): ?>
								<figcaption class="flex mt-4 text-sm italic gap-x-4">
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
