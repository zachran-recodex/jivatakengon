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
                },
                secondary: {
                    DEFAULT: '#eb8f16',
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
