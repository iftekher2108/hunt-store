import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'public/back-end/assets/css/style.css',
            ],
            refresh: true,
        }),
    ],
});
