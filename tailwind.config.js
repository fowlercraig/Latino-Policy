const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [],
  theme: {
    container: {
      center: true,
      padding: {
        default: '1rem',
        sm: '2rem',
        lg: '3rem',
        xl: '3rem',
      },
    },
    aspectRatio: {
      none: 0,
      square: [1, 1],
      "16/9": [16, 9],
      "4/3": [4, 3],
      "21/9": [21, 9]
    },
    typography: (theme) => ({
      default: {
        css: {
          color: theme('colors.gray.500'),
          lineHeight: "155%",
          h1: {
            fontWeight: theme('fontWeight.bold'),
          },
          h2: {
            fontWeight: theme('fontWeight.bold'),
          },
          h3: {
            fontWeight: theme('fontWeight.bold'),
          },
          h4: {
            fontWeight: theme('fontWeight.bold'),
          },
          h5: {
            fontWeight: theme('fontWeight.bold'),
          },
          li: {
            marginTop:    '1px',
            marginBottom: '1px',
          },
        },
      },
      'lg': {
        css: {
          lineHeight: "155%",
          h1: {
            fontWeight: theme('fontWeight.bold'),
          },
          h2: {
            fontWeight: theme('fontWeight.bold'),
          },
          h3: {
            fontWeight: theme('fontWeight.bold'),
          },
          h4: {
            fontWeight: theme('fontWeight.bold'),
          },
          h5: {
            fontWeight: theme('fontWeight.bold'),
          },
          li: {
            marginTop:    '1px',
            marginBottom: '1px',
          },
        },
      },
    }),
    extend: {
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
        'display': ['alternate-gothic-atf','Inter var','Helvetica'],
        'brand': ['komet','Inter var','Helvetica'],
      },
      fontSize: {
        'display-xxs':  ['2.0rem', '90%'],
        'display-xs':   ['3.0rem', '90%'],
        'display':      ['4.0rem', '80%'],
        'display-sm':   ['3.5rem', '90%'],
        'display-lg':   ['4.5rem', '80%'],
        'display-xl':   ['5.0rem', '80%'],
      },
      colors: {
        'brand' : {
          default: '#2774AE',
          'darker':'#003B5C',
          'dark':'#003B5C',
          'light':'#8BB8E8',
          'lighter':'#C3D7EE',
          'lightest':'#dce3e9',
        },
        'white' : {
          default: '#fff',
          '05' : 'rgba(255,255,255,.05)',
          '25' : 'rgba(255,255,255,.25)',
          '50' : 'rgba(255,255,255,.50)',
          '75' : 'rgba(255,255,255,.75)',
        },
        'black' :  {
          default: '#000',
          '05' : 'rgba(0,0,0,.05)',
          '25' : 'rgba(0,0,0,.25)',
          '50' : 'rgba(0,0,0,.50)',
          '75' : 'rgba(0,0,0,.75)',
        }
      }
    },
  },
  variants: {
    backgroundColor: ['responsive', 'even', 'hover', 'focus'],
    flexDirection: ['responsive', 'hover', 'focus', 'even'],
    padding: ['responsive', 'hover', 'focus', 'even', 'odd'],
    aspectRatio: ['responsive']
  },
  plugins: [
    require('@tailwindcss/ui'),
    require("tailwindcss-responsive-embed"),
  ],
}
