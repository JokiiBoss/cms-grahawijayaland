import defaultTheme from "tailwindcss/defaultTheme";
// import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            colors: {
                main: "#1B4367",
                "primary-color": "#255145",
                "icon-color": "#438B77",
                "bg-icon": "#D3F4EB",
                "green-temp": "#055935",
                customGreen: "#03482b",
                biru: "#1b4367",
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                montserrat: ["Montserrat", "sans-serif"],
                poppins: ["Poppins", "sans-serif"],
            },
            textColor: {
                customBlue: "#1b4367",
                customGreen: "#03482b",
            },
            backgroundSize: {
                auto: "auto",
                cover: "cover",
                contain: "contain",
                "50%": "50%",
                16: "4rem",
            },
        },
    },

    plugins: [require("@tailwindcss/forms"), require("flowbite/plugin")],
};
