import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import Path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve:{
        alias:{
            'bootstrap':Path.resolve(__dirname,'node_modules/bootstrap')
        }
    }
});
