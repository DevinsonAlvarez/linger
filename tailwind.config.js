/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        "primary": "#60a5fa",
        "secondary": "#818181",
        "success": "#16a34a",
        "danger": "#ef4444",
        "warning": "#b1ae26"
      },
    },
  },
  plugins: [],
}