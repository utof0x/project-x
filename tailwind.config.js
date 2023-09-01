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
                'lightest-grey': '#f0f0f0',
                'light-grey': '#8c8c8c',
                'blue': '#1677ff',
                'black06': 'rgba(0, 0, 0, 0.06)',
                'black15': '#d9d9d9',
                'black88': '#1f1f1f',
            },
            screens: {
                'tablet': '680px'
            },
            borderWidth: {
                '1': '1px',
            }
        },
    },
    plugins: [],
}
