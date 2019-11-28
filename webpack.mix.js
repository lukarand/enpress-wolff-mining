const mix = require('laravel-mix');
// const CleanWebpackPlugin = require('clean-webpack-plugin');

mix.setPublicPath('public/dist');
mix.setResourceRoot('../');
// mix.webpackConfig({
//    plugins: [
//       new CleanWebpackPlugin({}, { verbose: false })
//    ],
// });
mix.autoload({
   jquery: ['$', 'jQuery', 'window.jQuery']
});
mix.copyDirectory('resources/assets/media', 'public/dist/media');
mix.js('resources/assets/js/app.js', 'js')
   .sass('resources/assets/scss/app.scss', 'css')
   .extract()
   .version();
