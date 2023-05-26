const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");

const webpackConfig = {
  mode: "development",
  entry: {
    app: path.join(__dirname, "src", "index.js"),
  },
  output: {
    filename: "app.js",
    path: path.resolve(__dirname, "public/js"),
    publicPath: "/",
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
        },
      },
      {
        test: /\.s?a?c?ss$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              publicPath: "../imgs/",
            },
          },
          {
            loader: "css-loader",
            options: {
              url: false,
            },
          },
          "sass-loader",
        ],
      },
      {
        test: /\.(png|svg|jpg|jpeg|gif)$/,
        use: {
          loader: "file-loader",
          options: {
            name: `../../public/imgs/[name].[ext]`,
          },
        },
      },
    ],
  },
  plugins: [
    new BrowserSyncPlugin({
      proxy: {
        target: "http://localhost/fxdata/",
      },
      files: ["**/*.php"],
      cors: true,
      reloadDelay: 0,
      open: false,
    }),
    new MiniCssExtractPlugin({
      filename: "../css/styles.css",
    }),
  ],
};

module.exports = webpackConfig;
