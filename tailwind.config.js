import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                abezee: ["ABeeZee", "sans-serif"],
                arimo: ["Arimo", "sans-serif"],
                afacad: ["Afacad", "serif"],
            },
            colors: {
                "DDE4DC-bg": "#DDE4DC",
                "1C4816-text": "#1C4816",
                "475C16-bg": "#475C16",
                "FAFAE8-bg": "#FAFAE8",
                "616060-text": "#616060",
                "FBFBFB-bg": "#FBFBFB",
                "4C4C4C-text": "4C4C4C",
            },
            fontWeight: {
                "weight-750": "750",
            },
            borderRadius: {
                "radius-77": "77px",
            },
            boxShadow: {
                "inset-register": "inset 0px 4px 4px 0px rgba(0, 0, 0, 0.25)",
            },
        },
    },
    plugins: [],
};