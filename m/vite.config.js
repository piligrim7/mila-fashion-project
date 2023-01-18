import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
	server: {
		hmr: {
			host: 'localhost'
		}
	},
    plugins: [
        laravel({
            input: [
				'resources/js/app.js',
				'resources/js/flowbite.js',
				'resources/js/color_theme.js'
            ],
            refresh: true,
        }),
	],
	// resolve: {
	// 	alias: {
	// 		'@': path.resolve(__dirname, 'src'),
	// 	}
	// }
});
