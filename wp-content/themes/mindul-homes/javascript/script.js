/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';
import Flickity from 'flickity';

window.Alpine = Alpine;
Alpine.plugin(intersect);
Alpine.start();

require('flickity');
require('flickity-fullscreen');

var elem = document.querySelector('.main-carousel');
if (elem) {
	new Flickity(elem, {
		cellAlign: 'left',
		wrapAround: true,
		autoPlay: 5000,
		fullscreen: true,
		pauseAutoPlayOnHover: false,
	});
}

var elem = document.querySelector('.c_quotes');
if (elem) {
	new Flickity(elem, {
		cellAlign: 'left',
		wrapAround: true,
		autoPlay: 10000,
		prevNextButtons: false,
		pageDots: false,
	});
}
