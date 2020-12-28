module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [],
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [],
  theme: {
    extend: {
      backgroundImage: theme => ({
        'header-line': "url('https://www.google.com/imgres?imgurl=https%3A%2F%2Fimage.shutterstock.com%2Fimage-photo%2Felearning-concept-man-holding-tablet-260nw-348916574.jpg&imgrefurl=https%3A%2F%2Fwww.shutterstock.com%2Fsearch%2Fe%2Blearning&tbnid=qjsSnZ97CI0uUM&vet=12ahUKEwifo8S3oazsAhVhKHIKHX2FCzEQMygBegUIARC0AQ..i&docid=0E4sm_mYwv3GsM&w=592&h=280&q=e%20learning%20hd%20wallpaper&ved=2ahUKEwifo8S3oazsAhVhKHIKHX2FCzEQMygBegUIARC0AQ')",
         'footer': "url('/images/robot-girl.jpg')",
      })
    }
  }
}
