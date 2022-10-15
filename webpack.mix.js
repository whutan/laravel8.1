const mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');
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

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/sass')
    .postCss('resources/css/app.css', 'public/css', [
        //
        tailwindcss('./tailwind.config.js')//加入这一行命令
    ])
    .copy('resources/plugin','public/plugin')