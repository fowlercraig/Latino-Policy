// tailwind.config.js
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    container: {
      center: true,
      padding: '2rem',
    },
    extend: {
      colors: {
        'brand': '#2774AE',
        'brand-darker': '#003B5C',
        'brand-dark': '#005587',
        'brand-light': '#8BB8E8',
        'brand-lighter': '#C3D7EE',
        'brand-lightest': '#eeeff2',
        'white-25': 'rgba(255,255,255,.25)',
        'white-50': 'rgba(255,255,255,.50)',
        'white-75': 'rgba(255,255,255,.75)',
        'black-5' : 'rgba(0,0,0,.05)',
        'black-10': 'rgba(0,0,0,.10)',
        'black-25': 'rgba(0,0,0,.25)',
        'black-50': 'rgba(0,0,0,.50)',
        'black-75': 'rgba(0,0,0,.75)',
      },
      inset: {
        '1/2': '50%',
      },
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
        'display': ['alternate-gothic-atf','Inter var','Helvetica'],
        'brand': ['komet','Inter var','Helvetica'],
      },
      height: {
        'header': '350px',
      },
      lineHeight: {
        '11': '2.75rem',
        '12': '3rem',
        '13': '3.25rem',
        '14': '3.5rem',
        '15': '3.75rem',
        '16': '4rem',
      },
      spacing: {
        sm: '8px',
        md: '16px',
        lg: '24px',
        xl: '48px',
        '72': '18rem',
        '80': '20rem',
      },
      fontSize: {
        '7xl':  '5rem',
        '8xl':  '6rem',
        '9xl':  '7rem',
        '10xl': '8rem',
      },
      boxShadow: {
        default: '0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .02)',
        md: '0 4px 6px -1px rgba(0, 0, 0, .1), 0 2px 4px -1px rgba(0, 0, 0, .015)',
        lg: '0 10px 15px -3px rgba(0, 0, 0, .1), 0 4px 6px -2px rgba(0, 0, 0, .03)',
        xl: '0 20px 25px -5px rgba(0, 0, 0, .1), 0 10px 10px -5px rgba(0, 0, 0, .02)',
      }
    }
  },
  variants: {
    padding: ['responsive', 'hover', 'focus', 'group-hover'],
    opacity: ['responsive', 'hover', 'focus', 'group-hover'],
    scale: ['responsive', 'hover', 'focus', 'group-hover'],
    shadow: ['responsive', 'hover', 'focus', 'group-hover'],
    translate: ['responsive', 'hover', 'focus', 'group-hover'],
  },
  plugins: [
    require('@tailwindcss/ui'),
  ]
}