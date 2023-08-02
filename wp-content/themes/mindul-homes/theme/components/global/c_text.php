<section class="c_text">
	<div class="container-sm">
		<?php the_sub_field( 'content' ); ?>
		<?php
		$link = get_sub_field('contentLink');
		if ($link): ?>
			<a class="mt-8 btn" href="<?php echo esc_url($link['url']); ?>"
				target="<?php echo esc_attr($link['target']); ?>"><?php echo esc_html($link['title']); ?></a>
		<?php endif; ?>
	</div>
</section>
