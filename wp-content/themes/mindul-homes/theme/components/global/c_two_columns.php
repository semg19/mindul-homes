<section class="c_two_columns">
	<div class="container">
		<div class="max-w-xl lg:max-w-none" x-data="{ shown: false }" x-intersect="shown = true">
			<div class="grid grid-cols-1 items-center gap-8 lg:grid-cols-2" x-show="shown" x-transition.duration.750ms>
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
	</div>
</section>
