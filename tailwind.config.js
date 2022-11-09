const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                orange: "#F8590A",
                card: "#0F1A25",
                cardText: "#7398BD",
                defaultTeal: "#2dd4bf",
            },
        },
    },
    variants: {
        extend: {
            visibility: ["group-hover"],
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
