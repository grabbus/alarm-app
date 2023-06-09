import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

const host = 'michaelgrabinger.com';

export default defineConfig({
    server: {
        host,
        hmr: {host},
        headers: {
            'Access-Control-Allow-Origin': '*',
        },
    },
    plugins: [
        laravel({
            input: [
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
