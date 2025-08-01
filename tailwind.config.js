/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')


export default {
  content: [
     "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'black-80': 'rgba(0, 0, 0, 0.8)',
      }
    },
  },
  plugins: [],
}

