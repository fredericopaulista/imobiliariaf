const mix = require('laravel-mix');

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




    mix
    //Site


    //Site JS



    .styles([
        'resources/views/site/css/plugin.css',
        'resources/views/site/css/style.css',
    ], 'public/site/assets/css/app.css')



    // Site JS
    .scripts([
        'resources/views/site/js/plugin.js',
        'resources/views/site/js/main.js',
    ], 'public/site/assets/js/app.js')
    .copyDirectory('resources/views/site/assets/images', 'public/site/assets/images')
    .copyDirectory('resources/views/site/assets/fonts', 'public/site/assets/fonts')

