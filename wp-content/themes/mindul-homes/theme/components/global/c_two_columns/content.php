<div>
	<?php
	switch (get_sub_field('type')) {
		case 'content':
			the_sub_field('content');
			$link = get_sub_field('contentLink');
			if ($link): ?>
				<a class="mt-8 btn" href="<?php echo esc_url($link['url']); ?>"
					target="<?php echo esc_attr($link['target']); ?>"><?php echo esc_html($link['title']); ?></a>
			<?php endif;
			break;

		case 'image':
			$image = get_sub_field('image');
			if ($image): ?>
				<img class="object-cover w-full rounded-lg aspect-video"
					src="<?php echo esc_url($image['url']); ?>"
					alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif;
			break;

		case 'iframe':
			$iframe = get_sub_field('iframe');
			if ($iframe): ?>
				<div class="[&>*]:h-[350px] [&>*]:w-full">
					<?php the_sub_field('iframe'); ?>
				</div>
				<?php
			endif;
			break;
	}
	?>
</div>
