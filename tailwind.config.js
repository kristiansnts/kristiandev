/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    container: {
      center: true,
      padding: '15px'
    },
    fontFamily: {
      jost: ['Jost', 'sans-serif'],
    },
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '968px',
      'xl': '1024px',
      '2xl': '1280x',
    }
  },
  plugins: [],
}

