const mix = require('laravel-mix');
const workboxPlugin = require('workbox-webpack-plugin');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/app_defer.js','public/js')
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss"),
    ]);
mix.webpackConfig({
    plugins: [
        // new workboxPlugin.GenerateSW({
        //     maximumFileSizeToCacheInBytes: '10000000'
        // })
        new workboxPlugin.InjectManifest({
            swSrc: './resources/js/sw.js', // more control over the caching
            swDest: 'service-worker.js',
            maximumFileSizeToCacheInBytes: 10000000,
            // importsDirectory: 'service-worker' // have a dedicated folder for sw files
        })
    ],
    output: {
        publicPath: ''
    }
})
