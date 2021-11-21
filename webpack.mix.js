const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/views/painel/assets/js/script.js', 'public/painel/assets/js/script.js')
    .sass('resources/views/painel/assets/css/style.scss', 'public/painel/assets/css/style.css');
