/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            listStyleImage: {
                cert: 'url("/public/images/cert50.png")',
            },
        },
    },
    plugins: [],
};
