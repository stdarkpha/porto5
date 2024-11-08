/** @type {import('tailwindcss').Config} */
module.exports = {
   content: [
      "./**/*.{html,js,php}",
      "!./node_modules/**", // Exclude node_modules
   ],
   theme: {
      extend: {},
   },
};
