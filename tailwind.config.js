/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,php,js}"],
  theme: {
    fontFamily: {
      'sans': ["Helvetica Neue", 'ui-sans-serif', 'system-ui',' -apple-system', 'BlinkMacSystemFont', "Segoe UI", 'Roboto, Arial', "Noto Sans", 'sans-serif', "Apple Color Emoji"],
    },
    /*
    screens: {
      
      sm: '640px', // default 640px
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '2xl': '1536px',
    },
    */
    extend: {
      colors: {
        'rot': '#D00025',
      }
    },
  },
  plugins: [],
  safelist: ['form', 'input']
}

