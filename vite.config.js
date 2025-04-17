import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss({
            safeList: [
                'grid-cols-1',
                'grid-cols-2',
                'grid-cols-3',
                'grid-cols-4',
                'grid-cols-5',
                'grid-cols-6',
                'grid-cols-7',
                'grid-cols-8',
                'grid-cols-9',
                'grid-cols-10',
                'grid-cols-11',
                'grid-cols-12'
            ]
        }),
    ],
});
