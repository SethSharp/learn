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
            screens: {
                custom1: "888px",
            },
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
        },
        animation: {
            lockedLvl: "spin 1s",
        },
        keyframes: (theme) => ({
            spin: {
                "0%": { transform: "rotate(0deg)" },
                "25%": { transform: "rotate(45deg)" },
                "50%": { transform: "rotate(-45deg)" },
                "75%": { transform: "rotate(0deg)" },
            },
        }),
    },

    plugins: [require("@tailwindcss/forms")],
};
