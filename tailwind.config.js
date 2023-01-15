const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['IBM Plex Sans'],
            },
            colors: {
                primary: {
                    25: '#FCFAFF',
                    50: '#F9F5FF',
                    100: '#F4EBFF',
                    200: '#E9D7FE',
                    300: '#B692F6',
                    400: '#B692F6',
                    500: '#9E77ED',
                    600: '#7F56D9',
                    700: '#6941C6',
                    800: '#53389E',
                    900: '#42307D',
                }
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
