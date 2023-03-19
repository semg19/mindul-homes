<div>
	<?php
	switch (get_sub_field('type')) {
		case 'content':
			the_sub_field('content');
			$link = get_sub_field('contentLink');
			if ($link): ?>
				<a class="btn mt-8" href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>"><?php echo esc_html($link['title']); ?></a>
			<?php endif;
			break;

		case 'image':
			$image = get_sub_field('image');
			if ($image): ?>
				<img class="aspect-video rounded-lg object-cover w-full" src="<?php echo esc_url($image['url']); ?>"
					alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif;
			break;
	}
	?>
</div>
