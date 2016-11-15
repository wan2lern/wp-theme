const webpack = require('webpack');
const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin');


const BUILD_DIR = path.resolve(__dirname, './dist');
const APP_DIR = path.resolve(__dirname, './js');

module.exports = {
    entry: APP_DIR + '/app.js',
    module: {
        loaders: [
            {
                test: /\.jsx?/,
                include: APP_DIR,
                exclude: /node_modules/,
                loader: 'babel',
                query: {
                    presets: ['react', 'es2015', 'stage-0']
                }
            },
            {
                test: /\.scss$/,
                loaders: ['style', 'css', 'sass']
            }
        ]
    },
    output: {
        path: BUILD_DIR,
        filename: 'bundle.js'
    },
    plugins: [
        new ExtractTextPlugin('./dist/css/main.css', {
            allChunks: true
        })
    ]
};