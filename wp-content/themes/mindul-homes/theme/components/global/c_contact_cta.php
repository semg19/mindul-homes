<?php $relationship = get_sub_field('relationship'); ?>
<?php if ($relationship): ?>
	<?php foreach ($relationship as $post): ?>
		<?php setup_postdata($post); ?>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	<?php endforeach; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>
<?php the_sub_field('text'); ?>
