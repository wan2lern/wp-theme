const webpack = require('webpack');
const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin');


const BUILD_DIR = path.resolve(__dirname, './dist');
const APP_DIR = path.resolve(__dirname, './js');


module.exports = {
    entry: APP_DIR + '/app.js',
    
    module: {
        loaders: [
            { test: /\.js$/, loaders: ['react-hot', 'jsx', 'babel'], exclude: /node_modules/ },
            { test: /\.scss$/, loaders: ['style', 'css', 'sass'] }
        ]
    },
    output: {
        publicPath: 'http://localhost:8080/',
        filename: './dist/bundle.js'
    }
};