import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
 
export default defineConfig({
    plugins: [
        laravel([
            'node_modules/normalize.css/normalize.css',
            'resources/assets/sass/app.scss',
            'resources/assets/js/app.js',
        ]),
    ],
});