const { colors } = require('laravel-mix/src/Log');
const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'media', // Opción 1: Utiliza la configuración basada en preferencias del sistema operativo

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                primary:'#BC799D', //color principal
                secundary: '#E4C9D7', //color secundario
                tertiary: '#061C57', //color terciario
                quaternary: '#ED0EBD', //color cuarteario
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
