module.exports = {
  purge: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        fontFamily: {
            poppins: ['Poppins']
        },
        padding: {
            '1/6' : '8%', 
        },
        height: {
          rd150 : '40rem',
          rd140 : '35rem',
          rd120 : '30rem',
          rd100 : '29rem',
        },
        width: {
          rd150 : '40rem',
          rd140 : '35rem',
          rd120 : '30rem',
          rd100 : '29rem',
        },
        margin: {
          '1/4' : '25%'
        }
    },
  },
  variants: {
    extend: {
      grayscale: ['hover'],
      opacity: ['hover'],
      width: ['hover']
    },
  },
  plugins: [],
}
