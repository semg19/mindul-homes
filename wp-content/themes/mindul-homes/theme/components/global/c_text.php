<section class="c_text relative overflow-hidden odd:bg-gray-50">
	<div class="container-sm">
		<div class="relative bg-inherit<?php if (get_sub_field('show_hammer') == 'yes') : ?> before:absolute before:bg-hamer before:w-[250px] before:h-full before:bg-no-repeat before:right-[-300px] before:bottom-0 before:opacity-0 before:bg-contain before:animate-wiggle md:before:opacity-10<?php endif; ?>">
			<?php the_sub_field( 'content' ); ?>
		</div>
		<?php
		$link = get_sub_field('contentLink');
		if ($link): ?>
			<a class="mt-8 btn" href="<?php echo esc_url($link['url']); ?>"
				target="<?php echo esc_attr($link['target']); ?>"><?php echo esc_html($link['title']); ?></a>
		<?php endif; ?>
	</div>
</section>
