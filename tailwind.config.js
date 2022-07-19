/** @type {import('tailwindcss').Config}
 *
 *360 to 630 Phone -> write without sm , md , lg
 1280 McBook -> xl
 1250 Duo , Min-Screen -> lg
 800 Tablet -> md
 * */
const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors')
module.exports = {
  content: [
    './src/**/*.html',
    './src/**/*.js',
    './public/**/*.html',
    './public/**/*.js',
    './pages/**/*.{html,js}',
    './components/**/*.{html,js}'
  ],
  theme: {
    extend: {
      fontFamily: {
        syne: ['syne', defaultTheme.fontFamily.sans],
      },
      colors: {

        dark: {
          '0': 'var(--dark-0-color)',
          '50': 'var(--dark-50-color)',
          '100': 'var(--dark-100-color)',
          '150': 'var(--dark-150-color)',
          '200': 'var(--dark-200-color)',
          '250': 'var(--dark-250-color)',
          '300': 'var(--dark-300-color)',
          '400': 'var(--dark-400-color)',
          '500': 'var(--dark-500-color)',
          '600': 'var(--dark-600-color)',
          '700': 'var(--dark-700-color)',
          '800': 'var(--dark-800-color)',
        },
        shaddy: {
          '400': 'var(--shaddy-400-color)',
          '450': 'var(--shaddy-450-color)',
          '500': 'var(--shaddy-500-color)',
          '600': 'var(--shaddy-600-color)',
          '700': 'var(--shaddy-700-color)',
        }

      },

      screens: {
        'sm': '640px',         // tablet  (min-width: 640px)
        'md': '768px',         //         (min-width: 768px)
        'lg': '1024px',        // laptop  (min-width: 1024px)
        'xl': '1280px',        // desktop (min-width: 1280px)
        '2xl': '1536px',       //         (min-width: 1536px)
      },
    },

  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
