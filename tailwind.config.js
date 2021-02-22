const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: {
    content: [
      './app/**/*.php',
      './resources/**/*.php',
      './resources/**/*.vue',
      './resources/**/*.js',
    ],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    aspectRatio: {
      1: '1',
      2: '2',
      3: '3',
      4: '4',
      5: '5',
      6: '6',
      7: '7',
      9: '9',
      16: '16',
      21: '21',
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem',
      },
    },
    extend: {
      typography: (theme) => ({
        DEFAULT: {
          css: {
            color: '',
            a: {
              textDecoration: 'none',
            },
            p: {
              color: '',
            },
            h1: {
              color: '',
              lineHeight: theme('lineHeight.snug'),
              letterSpacing: theme('letterSpacing.tight'),
            },
            h2: {
              color: '',
              lineHeight: theme('lineHeight.snug'),
              letterSpacing: theme('letterSpacing.tight'),
            },
            h3: {
              color: '',
              lineHeight: theme('lineHeight.snug'),
              letterSpacing: theme('letterSpacing.tight'),
            },
            h4: {
              color: '',
              lineHeight: theme('lineHeight.snug'),
              letterSpacing: theme('letterSpacing.tight'),
            },
          },
        },
      }),
      colors: {
        'brand': {
          DEFAULT: '#2774AE',
          'darker': '#003B5C',
          'dark': '#003B5C',
          'light': '#8BB8E8',
          'lighter': '#C3D7EE',
          'lightest': '#dce3e9',
        }
      },
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
        'primary-a': ['Primary-A','Inter var', ...defaultTheme.fontFamily.sans],
        'primary-b': ['Primary-B','Inter var', ...defaultTheme.fontFamily.sans],
        'primary-c': ['Primary-C','Inter var', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  variants: {
    extend: {
      rotate: ['active', 'group-hover'],
      scale: ['responsive', 'hover', 'focus', 'group-hover'],
      opacity: ['responsive', 'hover', 'focus', 'group-hover'],
      translate: ['responsive', 'hover', 'focus', 'group-hover'],
      display: ['responsive', 'hover', 'focus', 'group-hover'],
      width: ['responsive', 'hover', 'focus', 'group-hover'],
      borderWidth: ['responsive', 'hover', 'focus', 'group-hover','last'],
      space: ['hover', 'focus'],
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio'),
  ],
}
