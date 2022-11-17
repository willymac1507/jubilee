/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.{html,js,vue,php}"],
  theme: {
    extend: {
        fontFamily: {
            sans: ['Inter var']
        }
    },
  },
  plugins: [],
}
