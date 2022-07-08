/** @type {import('tailwindcss').Config} */
module.exports = {
  important: true,
  content: ["./superego/**/*.php", "./superego/theme.json"],
  theme: {
    extend: {
      fontSize: {
        "10xl": "10rem",
        h1: "160px",
        h2: "70px",
        h3: "50px",
        h4: "36px",
        "h1-mobile": "70px",
        "h2-mobile": "50px",
        "h3-mobile": "40px",
        "h4-mobile": "30px",
        "90px": "90px",
        "100px": "100px",
        "120px": "120px",
      },
      fontFamily: {
        overskrift: ["Khand", "ui-sans-serif"],
        brodtekst: ["Roboto", "ui-sans-serif"],
      },
      screens: {
        qhd: "2000px",
      },
    },
    container: {
      center: true,
      padding: {
        DEFAULT: "1rem",
        sm: "2rem",
        lg: "4rem",
        xl: "5rem",
        "2xl": "6rem",
      },
    },
  },
  plugins: [
    require("prettier-plugin-tailwindcss"),
    require("@_tw/themejson")(require("./superego/theme.json")),
    //require('@tailwindcss/typography'),
    //require('@tailwindcss/forms'),
    //require('@tailwindcss/line-clamp'),
    require("@tailwindcss/aspect-ratio"),
  ],
};
