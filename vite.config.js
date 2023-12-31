import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

// add vue
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [

        vue(),

        laravel({
            input: [
                'resources/css/register.css',
                'resources/css/default.css',
                'resources/css/memo.css',
                'resources/css/footer.css',
                'resources/css/header.css',
                'resources/css/listen.css',
                'resources/css/pagination.css',
                'resources/css/main.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
