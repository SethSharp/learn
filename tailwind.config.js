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
                sans: [ "Nunito", ...defaultTheme.fontFamily.sans,],
                        "title": ['Megrim']
            },
        },
        animation: {
            lockedLvl: "spin 0.5s",
            pulse: "pulse 4s infinite",
            opacity: "opac 1s ease-in-out",
        },
        keyframes: (theme) => ({
            spin: {
                "0%": { transform: "rotate(0deg)" },
                "25%": { transform: "rotate(15deg)" },
                "50%": { transform: "rotate(-15deg)" },
                "75%": { transform: "rotate(0deg)" },
            },
            pulse: {
                "0%": {
                    opacity: "1",
                },
                "50%": {
                    opacity: ".7",
                },
                "100%": {
                    opacity: "1",
                },
            },
            opac: {
                "0%": { opacity: "1" },
                "100%": { opacity: ".5" },
            },
        }),
    },

    plugins: [require("@tailwindcss/forms")],
};
