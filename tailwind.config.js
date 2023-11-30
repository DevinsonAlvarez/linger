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
        "primary": {
          DEFAULT: "#3b82f6",  //bg-blue-500
          light: "#93c5fd",    //bg-blue-300
          dark: "#2563eb",     //bg-blue-600
        },
        "secondary": {
          DEFAULT: "#6b7280",  //bg-gray-600
          light: "#d1d5db",    //bg-gray-300
          dark: "#374151",     //bg-gray-700
        },
        "success": {
          DEFAULT: "#16a34a",  //bg-green-600
          light: "#86efac",    //bg-green-300
          dark: "#15803d",     //bg-green-700
        },
        "danger": {
          DEFAULT: "#dc2626",  //bg-red-600
          light: "#fca5a5",    //bg-red-300
          dark: "#b91c1c",     //bg-red-700
        },
        "warning": {
          DEFAULT: "#ea580c",  //bg-orange-600
          light: "#fdba74",    //bg-orange-300
          dark: "#c2410c",     //bg-orange-700
        },
      },
    },
  },
  safelist: [
    "primary", "secondary", "danger", "warning", "success"
  ],
  plugins: [],
}