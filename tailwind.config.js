import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    presets: [
        require('./vendor/tallstackui/tallstackui/tailwind.config.js') 
    ],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        'node_modules/preline/dist/*.js',
        "./resources/components/**/*.blade.php",
        './vendor/tallstackui/tallstackui/src/**/*.php', 
    ],
    theme: {
        extend: {
            container: {
                padding: '1rem',
                center: true,
            },
            colors: {
                accent: {
                    100: "#e6eef9",  // Terang
                    200: "#ccdcec",
                    300: "#b3cae0",
                    400: "#99b7d3",
                    500: "#0D4890",  // Primary
                    600: "#1a4d97",
                    700: "#27529f",
                    800: "#3457a7",
                    900: "#415caf"
                },
                // accent: {
                //     100: "#fdedcc",  // Terang
                //     200: "#fbe1b3",
                //     300: "#f9d599",
                //     400: "#f7c980",
                //     500: "#F29918",  // Primary
                //     600: "#cc8315",
                //     700: "#a66e12",
                //     800: "#7f5a0e",
                //     900: "#59400a"
                // },
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins', 'sans-serif'],
            },
        },
    },
    plugins: [
        require('preline/plugin'),
        require('@tailwindcss/forms'),
    ],
};
