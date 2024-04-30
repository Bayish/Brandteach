/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');


export default {
    content: [
      './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
      './storage/framework/views/*.php',
      './resources/views/**/*.blade.php',
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        fontFamily: {
          sans: ['Nunito Sans', ...defaultTheme.fontFamily.sans],
          roboto: ['Roboto ', 'sans-serif'],
        },
      },
    },
    plugins: [
        require("daisyui"),
    ],
    daisyui: {
      themes: [
        "light",
        "dark",
        "cupcake",
        {
          lightTheme: {
            "primary": "#3F8CFF",
            "primary-content": "#C418E6",
            "secondary": "#7D8592",
            "accent": "#ffffff",
            "neutral": "#D8E0F0",
            "base-100": "#F4F9FD",
            "base-300": "#91929E",
            "base-content": "#979797",
            "info": "#0A1629",
            "info-content": "#E6EBF5",
            "success": "#00D097",
            "warning": "#FFBD21",
            "error": "#ff0000",
          },
        },
      ],

    },
}

