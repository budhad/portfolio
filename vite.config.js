import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'http://127.0.0.1/resources/sass/app.scss',
                'http://127.0.0.1/resources/js/app.js',
            ],
            refresh: true,
            public: 'http://127.0.0.1'
        }),
        vue()
    ],
});
