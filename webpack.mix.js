const mix = require('laravel-mix');
const path = require('path');
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
    .js('resources/js/app_defer.js','public/js').extract()
    .js('resources/js/parallax.js','public/js')
    .alias({
        ziggy: path.resolve('vendor/tightenco/ziggy/dist/vue'), // or 'vendor/tightenco/ziggy/dist/vue' if you're using the Vue plugin
    })
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss"),
    ])
    .version();
mix.webpackConfig({
    resolve: {
        alias: {
            ziggy: path.resolve('vendor/tightenco/ziggy/dist/vue'),
        },
    },
});

if (mix.inProduction()) {
    const workboxPlugin = require('workbox-webpack-plugin');

    mix.webpackConfig({
        resolve: {
            alias: {
                ziggy: path.resolve('vendor/tightenco/ziggy/dist/vue'),
            },
        },
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
}
