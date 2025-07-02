/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      // Tambahkan bagian ini
      fontFamily: {
        'sans': ['ui-sans-serif', 'system-ui'], // Font default (jika diperlukan)
        'anton': ['Anton', 'sans-serif'],      // Font baru kita
      },

colors: {
        customwhite: '#FCFEFE',
      },




    },
  },
  plugins: [],
}