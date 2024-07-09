/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Albert Sans", "sans-serif"],
            },
            colors: {
                background: "#0C0C0C",
                primary: "#F97300",
            },
        },
    },
    plugins: [],
};
