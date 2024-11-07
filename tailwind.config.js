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
        title: ['Young Serif', ...defaultTheme.fontFamily.sans],
        kurale: ['Kurale', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        background: '#f8f4ed',
        foreground: '#ffc643',
      }
    },
  },

  plugins: [forms],
};


