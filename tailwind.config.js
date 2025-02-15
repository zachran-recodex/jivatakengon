import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: '#1e3d35',
                    50: '#f3faf7',
                    100: '#d6f1e6',
                    200: '#ade2cd',
                    300: '#7dcbb0',
                    400: '#52af92',
                    500: '#389478',
                    600: '#2b7662',
                    700: '#265f50',
                    800: '#224d42',
                    900: '#1e3d35',
                    950: '#0d2620',
                },
                secondary: {
                    DEFAULT: '#eb8f16',
                    50: '#fef9ec',
                    100: '#fcefc9',
                    200: '#f8dd8f',
                    300: '#f4c555',
                    400: '#f2af2d',
                    500: '#eb8f16',
                    600: '#d06a0f',
                    700: '#ad4b10',
                    800: '#8c3a14',
                    900: '#733014',
                    950: '#421706',
                },
                background: {
                    light: '#f4f6f7',
                    dark: '#23262b',
                },
                shark: {
                    50: '#f4f6f7',
                    100: '#e3e7ea',
                    200: '#cbd1d6',
                    300: '#a7b1b9',
                    400: '#7b8995',
                    500: '#606d7a',
                    600: '#525c68',
                    700: '#474f57',
                    800: '#3f444b',
                    900: '#373b42',
                    950: '#23262b',
                },
            },
        },
    },

    plugins: [forms, typography],
};
