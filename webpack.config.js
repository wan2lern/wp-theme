module.exports = {
  // read main JS file
  entry: './js/index.js',

  // generate output JS file with options:
  output: {
    // this is used to generate URLs
    publicPath: 'http://localhost:8080/',
    filename: './dist/app.min.js'
  },

  /* generate source map */
  /* devtool: 'source-map', */

  module: {
    /* List of loaders: https://webpack.github.io/docs/list-of-loaders.html */
    loaders: [

      /* Transforms JSX and ES6+ into normal js files
       * use babel-loader for all *.js and *.jsx files
       * with three presets: react, es2015, stage-0
       * https://babeljs.io/docs/plugins/   */
      {
        test: /\.jsx?$/,
        exclude: /node_modules/,
        loaders: [
          'babel?presets[]=stage-0,presets[]=react,presets[]=es2015'
        ]
      },
      /* Load CSS - The order of loaders is important here */
      {
        test: /\.scss$/,
        include: /src/,
        loaders: [
           /* style-loader takes CSS and actually inserts it into the page */
           'style',
           /* css-loader takes a CSS file and returns the CSS with
            * imports and url(...) resolved via webpack's require functionality
            * it doesn't actually do anything with the returned CSS */
           'css',
           /* sass-loader converst sass to css files
            * so that the styles are active on the page */
           'sass'
        ]
      }
    ]
  }
};