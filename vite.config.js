import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

// Ignore the protocol on the host, ie do not put "http"
const host = 'rectify-v2.test';
const path = require('path')
const serverConfig = () => {
    return {
        https: true,
        host: '0.0.0.0',
        hmr: {
            host: 'localhost'
        },
    }
}

export default defineConfig({
    resolve: {
        alias: {
            '@ast': path.resolve(__dirname, './resources/assets/img')
        },
    },
    plugins: [
        laravel({
            input: [
                'node_modules/@fortawesome/fontawesome-free/js/all.js',
                'resources/js/app.js',
                'resources/css/app.css',
                'resources/css/tailwind.css',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    // The Vue plugin will re-write asset URLs, when referenced
                    // in Single File Components, to point to the Laravel web
                    // server. Setting this to `null` allows the Laravel plugin
                    // to instead re-write asset URLs to point to the Vite
                    // server instead.
                    base: null,

                    // The Vue plugin will parse absolute URLs and treat them
                    // as absolute paths to files on disk. Setting this to
                    // `false` will leave absolute URLs un-touched so they can
                    // reference assets in the public directory as expected.
                    includeAbsolute: false,
                },
            },
        }),
    ],
});
