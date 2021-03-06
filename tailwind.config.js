// JIT Mode does not work well with the watch functionality, it just keeps going and going and going.
module.exports = {
  mode: 'jit',
  purge: ['./**/*.php', "./src/assets/js/**/*.js"],
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px'
    },
    fontFamily: {
      'headline': ['DIN Engschrift Std', 'sans-serif'],
      'subhead': ['Montserrat', 'sans-serif'],
      'general': ['Karla', 'sans-serif']
    },
    extend: {
      backgroundImage: theme => {
        const baseURL = '/wp-content/themes/whitneyjohnson/src/assets/images';
        return {
          'header-waves': `url('${baseURL}/backgrounds/homeHeader.png')`,
          'weathered-blue': `url('${baseURL}/backgrounds/weatheredBlue.png')`,
          'paper-curves': `url('${baseURL}/backgrounds/xsell.png')`,
          'quote': `url('${baseURL}/icons/quote.png')`,
          'quote-yellow': `url('${baseURL}/icons/quoteYellow.png')`,
          'scurve-start': `url('${baseURL}/backgrounds/sCurve_part1.png')`,
          'scurve-mid': `url('${baseURL}/backgrounds/sCurve_part2.png')`,
          'scurve-end': `url('${baseURL}/backgrounds/sCurve_part3.png')`,
          'scurve-lg-start': `url('${baseURL}/backgrounds/sCurve_lg_part1.png')`,
          'scurve-lg-mid': `url('${baseURL}/backgrounds/sCurve_lg_part2.png')`,
          'scurve-lg-end': `url('${baseURL}/backgrounds/sCurve_lg_part3.png')`,
          'disrupt-yourself': `url('${baseURL}/backgrounds/disruptYourself.png')`,
          'smart-growth': `url('${baseURL}/books/smartGrowth.png')`,
          'speaking': `url('${baseURL}/backgrounds/speaking.png')`,
          'jumbotron': `url('${baseURL}/backgrounds/jumbotronBg.jpg')`,
          'check-red': `url('${baseURL}/icons/checkRed.png')`,
          'check-green': `url('${baseURL}/icons/checkGreen.png')`,
          'check-blue': `url('${baseURL}/icons/checkBlue.png')`,
          'plus-blue': `url('${baseURL}/icons/plusBlue.png')`,
          'plus-yellow': `url('${baseURL}/icons/plusYellow.png')`,
          'x-red': `url('${baseURL}/icons/xRed.svg')`,
          'whitney-different': `url('${baseURL}/backgrounds/whitney-different.png')`,
          'whitney-inspire': `url('${baseURL}/backgrounds/whitney-inspire.png')`,
        }
      },
      backgroundSize: {
        "60%": "60%",
        'standard-check': '20px',
      },
      backgroundPosition: {
        'speaking-fix': 'bottom right -220px',
        'workshop-plus-fix': 'left top 3px'
      },
      boxShadow: {
        'behind': '0px 0px 31px rgba(0, 0, 0, 0.1)',
        'card': '0px 0px 15px rgba(0, 0, 0, 0.1)',
        'card-sm': '0px 1px 8px rgba(0, 0, 0, 0.1)',
        'right': '15px -7px 21px -16px rgba(0, 0, 0, 0.25), 15px 7px 21px -16px rgba(0, 0, 0, 0.25)'
      }
    },
  },
  variants: {
    extend: {},
  }
}
