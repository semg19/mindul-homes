<?php if (have_rows('items')): ?>
	<?php while (have_rows('items')):
		the_row(); ?>
		<?php if (get_row_layout() == 'item'): ?>
			<?php $icon = get_sub_field('icon'); ?>
			<?php if ($icon): ?>
				<img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
			<?php endif; ?>
			<?php the_sub_field('title'); ?>
			<?php the_sub_field('text'); ?>
			<?php $link = get_sub_field('link'); ?>
			<?php if ($link): ?>
				<a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>"><?php echo esc_html($link['title']); ?></a>
			<?php endif; ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>
