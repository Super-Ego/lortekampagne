/** @type {import('tailwindcss').Config} */
module.exports = {
  important: true,
  content: ["./superego/**/*.php", "./superego/theme.json"],
  theme: {
    extend: {
      fontSize: {
        '10xl': '10rem',
      }
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem',
      },
    },
  },
  plugins: [
    require("prettier-plugin-tailwindcss"),
    require("@_tw/themejson")(require("./superego/theme.json")),
    //require('@tailwindcss/typography'),
    //require('@tailwindcss/forms'),
    //require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio'),
  ],
};
