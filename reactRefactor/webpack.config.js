var webpack = require("webpack");
var path = require("path");

var DEV = path.resolve(__dirname, "reactDev");
var OUTPUT = path.resolve(__dirname, "reactOutput");

var config = {
  entry: DEV + "/index.jsx",
  output: {
    path: OUTPUT,
    filename: "minutesApp.js"
  },
  watch: true,
  module: {
    loaders: [{
      include: DEV,
      loader: "babel-loader",
      query: {
        presets: ["babel-preset-env"]
      }
    }]
  }
};
 
module.exports = config;