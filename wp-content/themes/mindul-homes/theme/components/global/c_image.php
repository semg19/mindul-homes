<section class="c_image">
	<div class="container-sm py-0">
		<?php $image = get_sub_field('image'); ?>
		<?php if ($image): ?>
			<figure>
				<img class="aspect-video rounded-lg object-cover w-full" src="<?php echo esc_url($image['url']); ?>"
					alt="<?php echo esc_attr($image['alt']); ?>">
				<?php if ($text = get_sub_field('text')): ?>
					<figcaption class="mt-4 flex gap-x-4 italic text-sm">
						<?= $text; ?>
					</figcaption>
				<?php endif; ?>
			</figure>
		<?php endif; ?>
	</div>
</section>
