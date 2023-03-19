<section class="c_two_columns">
	<div class="container">
		<div class="grid max-w-xl grid-cols-1 items-center gap-8 lg:max-w-none lg:grid-cols-2">
			<?php
			if (have_rows('left')):
				while (have_rows('left')):
					the_row();
					get_template_part(GLOB . '/c_two_columns/content');
				endwhile;
			endif;
			if (have_rows('right')):
				while (have_rows('right')):
					the_row();
					get_template_part(GLOB . '/c_two_columns/content');
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>
