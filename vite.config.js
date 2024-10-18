import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/nucleo-icons.css',
                'resources/css/nucleo-svg.css',
                'resources/css/material-dashboard.css',
                'resources/js/core/popper.min.js',
                'resources/js/core/bootstrap.min.js',
                'resources/js/plugins/perfect-scrollbar.min.js',
                'resources/js/plugins/smooth-scrollbar.min.js',
            ],
            refresh: true,
        }),
    ],
});
