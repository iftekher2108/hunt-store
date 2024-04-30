import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // 'resources/sass/app.scss',
                'public/back-end/assets/css/style.css',
                'public/back-end/assets/scss/custom.min.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
