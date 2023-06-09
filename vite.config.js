import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    server: {
        host: 'localhost',
        https: true,
        cors: true,
        server: {
            hmr: {
                host: 'localhost',
                https: true,
                cors: true,
            },
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
});
