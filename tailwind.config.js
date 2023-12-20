/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [require("daisyui")],
    daisyui: {
      themes: [
        "light",
        "dark",
        "cupcake",
        {
          lightTheme: {
            "primary": "#3F8CFF",
            "secondary": "#ffffff",
            "accent": "#ffffff",
            "neutral": "#ffffff",
            "base-100": "#F4F9FD",
            "info": "#ffffff",
            "success": "#00ffff",
            "warning": "#ffffff",
            "error": "#ffffff",
          },
        },
      ],

    },
}

