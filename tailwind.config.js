/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                primary: "SF Pro Text",
            },
            fontSize: {
                sm: ['12px', '20px'],
                base: ['14px', '22px']
            },
            colors: {
                'light-grey': '#8c8c8c',
            },
            screens: {
                'tablet': '680px'
            },
        },
    },
    plugins: [],
}
