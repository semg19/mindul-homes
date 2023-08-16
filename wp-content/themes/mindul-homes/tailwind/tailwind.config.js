// Set Preflight flag and Tailwind Typography class name based on the build
// target.
let includePreflight, typographyClassName;
if ('editor' === process.env._TW_TARGET) {
	includePreflight = false;
	typographyClassName = 'block-editor-block-list__layout';
} else {
	includePreflight = true;
	typographyClassName = 'prose';
}

const colors = require('tailwindcss/colors');

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
		'./theme/theme.json',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			backgroundImage: {
				hamer: 'url("/wp-content/themes/mindul-homes/theme/src/hamer.png")',
			},
			animation: {
				wiggle: 'wiggle 3s ease-in-out infinite',
			},
			keyframes: {
				wiggle: {
					'0%, 100%': { transform: 'rotate(-1deg)' },
					'50%': { transform: 'rotate(2deg)' },
				},
			},
			scale: {
				'-1': '-1',
			},
		},
		colors: {
			transparent: 'transparent',
			current: 'currentColor',
			blue: {
				lightest: '#8DD2E9',
				light: '#269AC1',
				DEFAULT: '#1f7f9f',
				dark: '#165A70',
			},
			orange: {
				light: '#C6752A',
				DEFAULT: '#a46123',
				dark: '#764619',
			},
			black: colors.black,
			white: colors.white,
			gray: colors.gray,
			emerald: colors.emerald,
			indigo: colors.indigo,
			yellow: colors.yellow,
			indigo: colors.indigo,
			neutral: colors.neutral,
		},
		fontFamily: {
			chivo: ['"Chivo"', 'sans-serif'],
		},
	},
	safelist: ['object-contain', 'object-cover'],
	corePlugins: {
		// Disable Preflight base styles in CSS targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson')(require('../theme/theme.json')),

		// Add Tailwind Typography.
		require('@tailwindcss/typography')({
			className: typographyClassName,
		}),

		// Font Awesome
		require('tailwind-fontawesome')({
			pro: true,
			version: 6,
		}),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require( '@tailwindcss/forms' ),
		// require( '@tailwindcss/aspect-ratio' ),
		// require( '@tailwindcss/line-clamp' ),
		// require( '@tailwindcss/container-queries' ),
	],
};
