<?php

$name = $args['option'] ?? null;

$components = [
    'c_text',
	'c_two_columns',
	'c_image',
	'c_quote',
	'c_features',
	'c_pricing',
	'c_faq',
	'c_video',
	'c_price_slider',
];


while (have_rows('content_builder', $name)) {
    the_row();
    $component = get_row_layout();
    if (in_array($component, $components)) {
        get_template_part(GLOB . $component, $name);
    };
}






