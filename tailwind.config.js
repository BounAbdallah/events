import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ['Montserrat', ...defaultTheme.fontFamily.sans], // Use Montserrat as primary sans-serif font
      },
      colors: {
        // ... existing colors (if any)
        'text': '#212529', // Light text color
        'background-color': '#F8F9FA', // Light background color
        // ... other light theme colors (optional)
      },
    },
  },

  plugins: [forms],
};
