'use strict'; // eslint-disable-line

const { default: ImageminPlugin } = require('imagemin-webpack-plugin');
const imageminMozjpeg = require('imagemin-mozjpeg');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const glob = require('glob-all');
const PurgecssPlugin = require('purgecss-webpack-plugin');

const config = require('./config');

class TailwindExtractor {
  static extract(content) {
    return content.match(/[\w-/.:]+(?<!:)/g) || [];
  }
}

const purgecssWordpress = {
  whitelistPatterns: [
      /^(is-|has-|will-|js-|fs-|feather-|word-|aos-|wp-|aspect-)/,
      /^rtl(-.*)?$/,
      /^home(-.*)?$/,
      /^blog(-.*)?$/,
      /^archive(-.*)?$/,
      /^date(-.*)?$/,
      /^error404(-.*)?$/,
      /^logged-in(-.*)?$/,
      /^admin-bar(-.*)?$/,
      /^no-customize-support(-.*)?$/,
      /^wp-custom-logo(-.*)?$/,
      /^search(-.*)?$/,
      /^nav(-.*)?$/,
      /^wp(-.*)?$/,
      /^screen(-.*)?$/,
      /^navigation(-.*)?$/,
      /^(.*)-template(-.*)?$/,
      /^(.*)?-?single(-.*)?$/,
      /^postid-(.*)?$/,
      /^post-(.*)?$/,
      /^attachmentid-(.*)?$/,
      /^attachment(-.*)?$/,
      /^page(-.*)?$/,
      /^(post-type-)?archive(-.*)?$/,
      /^author(-.*)?$/,
      /^gallery(-.*)?$/,
      /^category(-.*)?$/,
      /^tag(-.*)?$/,
      /^card(-.*)?$/,
      /^menu(-.*)?$/,
      /^tags(-.*)?$/,
      /^tax-(.*)?$/,
      /^term-(.*)?$/,
      /^date-(.*)?$/,
      /^(.*)?-?paged(-.*)?$/,
      /^says(-.*)?$/,
      /^depth(-.*)?$/,
      /^comment(-.*)?$/,
      /^comments(-.*)?$/,
      /^children(-.*)?$/,
      /^crnb(-.*)?$/,
      /^custom(-.*)?$/,
      /^custom-background(-.*)?$/,
      /^port-description(-.*)?$/
  ]
};

module.exports = {
  plugins: [
    //new ImageminPlugin({
    //  optipng: { optimizationLevel: 2 },
    //  gifsicle: { optimizationLevel: 3 },
    //  pngquant: { quality: '65-90', speed: 4 },
    //  svgo: {
    //    plugins: [
    //      { removeUnknownsAndDefaults: false },
    //      { cleanupIDs: false },
    //      { removeViewBox: false },
    //    ],
    //  },
    //  plugins: [imageminMozjpeg({ quality: 65 })],
    //  disable: (config.enabled.watcher),
    //}),
    new PurgecssPlugin({
      paths: glob.sync([
        'app/**/*.php',
        'resources/views/**/*.php',
        'resources/assets/scripts/**/*.js',
      ]),
      extractors: [
        {
          extractor: TailwindExtractor,
          extensions: ["js", "php"]
        }
      ],
      whitelistPatterns: purgecssWordpress.whitelistPatterns
    }),
    new UglifyJsPlugin({
      uglifyOptions: {
        ecma: 5,
        compress: {
          warnings: true,
          drop_console: true,
        },
      },
    }),
  ],
};