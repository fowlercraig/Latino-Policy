let colors = {

  'primary': '#d74200',
  'grey': '#353535',
  'light-grey': '#F0F2F5',
  'dark-grey': '#333030',
  'darker-grey': '#171616',

  'black-25': 'rgba(0,0,0,.25)',
  'black-50': 'rgba(0,0,0,.5)',
  'black-75': 'rgba(0,0,0,.75)',
  'white-25': 'rgba(255,2555,255,.25)',
  'white-50': 'rgba(255,2555,255,.5)',
  'white-75': 'rgba(255,2555,255,.75)',

  'transparent': 'transparent',

  'black': '#22292f',
  'grey-darkest': '#3d4852',
  'grey-darker': '#606f7b',
  'grey-dark': '#8795a1',
  'grey': '#b8c2cc',
  'grey-light': '#dae1e7',
  'grey-lighter': '#f1f5f8',
  'grey-lightest': '#f8fafc',
  'white': '#ffffff',

  'red-darkest': '#3b0d0c',
  'red-darker': '#621b18',
  'red-dark': '#cc1f1a',
  'red': '#e3342f',
  'red-light': '#ef5753',
  'red-lighter': '#f9acaa',
  'red-lightest': '#fcebea',

  'orange-darkest': '#462a16',
  'orange-darker': '#613b1f',
  'orange-dark': '#de751f',
  'orange': '#f6993f',
  'orange-light': '#faad63',
  'orange-lighter': '#fcd9b6',
  'orange-lightest': '#fff5eb',

  'yellow-darkest': '#453411',
  'yellow-darker': '#684f1d',
  'yellow-dark': '#f2d024',
  'yellow': '#ffed4a',
  'yellow-light': '#fff382',
  'yellow-lighter': '#fff9c2',
  'yellow-lightest': '#fcfbeb',

  'green-darkest': '#0f2f21',
  'green-darker': '#1a4731',
  'green-dark': '#1f9d55',
  'green': '#38c172',
  'green-light': '#51d88a',
  'green-lighter': '#a2f5bf',
  'green-lightest': '#e3fcec',

  'teal-darkest': '#0d3331',
  'teal-darker': '#20504f',
  'teal-dark': '#38a89d',
  'teal': '#4dc0b5',
  'teal-light': '#64d5ca',
  'teal-lighter': '#a0f0ed',
  'teal-lightest': '#e8fffe',

  'blue-darkest': '#12283a',
  'blue-darker': '#1c3d5a',
  'blue-dark': '#2779bd',
  'blue': '#3490dc',
  'blue-light': '#6cb2eb',
  'blue-lighter': '#bcdefa',
  'blue-lightest': '#eff8ff',

  'indigo-darkest': '#191e38',
  'indigo-darker': '#2f365f',
  'indigo-dark': '#5661b3',
  'indigo': '#6574cd',
  'indigo-light': '#7886d7',
  'indigo-lighter': '#b2b7ff',
  'indigo-lightest': '#e6e8ff',

  'purple-darkest': '#21183c',
  'purple-darker': '#382b5f',
  'purple-dark': '#794acf',
  'purple': '#9561e2',
  'purple-light': '#a779e9',
  'purple-lighter': '#d6bbfc',
  'purple-lightest': '#f3ebff',

  'pink-darkest': '#451225',
  'pink-darker': '#6f213f',
  'pink-dark': '#eb5286',
  'pink': '#f66d9b',
  'pink-light': '#fa7ea8',
  'pink-lighter': '#ffbbca',
  'pink-lightest': '#ffebef',
}

module.exports = {
  theme: {
    colors: colors,
    container: {
      center: true,
      padding: '1rem',
    },
    fontFamily: {
      sans: ['GT-Walsheim', 'sans-serif'],
      body: ['Tisa', 'Georgia', 'serif'],
      serif: ['Hermann', 'Georgia', 'serif'],
    },
    extend: {
      inset: {
        "100":"100%",
        '1/2': '50%',
        '-4': '-4rem',
        '-10': '-10rem',
        '-6': '-6rem'
      },
      spacing: {
        '2px': '2px',        
        '44': '44px',
        '96': '24rem',
        '112': '28rem',
        '128': '32rem',
        '50vh': '50vh',
        '70vh': '70vh',
        '80vh': '80vh',
        '90vh': '90vh'
      },
      fontSize: {
        '7xl':  '5rem',
        '8xl':  '6rem',
        '9xl':  '7rem',
        '10xl': '8rem',
        '11xl': '9rem',
        '12xl': '10rem',
        '13xl': '11rem',
        '14xl': '12rem',
        '15xl': '13rem',
        '16xl': '14rem',
      }
    }
  },
  variants: {
    textColor: ['responsive', 'hover', 'focus','group-hover'],
    opacity: ['responsive', 'hover', 'focus','group-hover'],
  },
  corePlugins: {
    //container: false
  }
}