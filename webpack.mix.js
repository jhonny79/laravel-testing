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

mix.js([
	
    'resources/js/materialize.min.js',
	'resources/js/app.js',
	'resources/js/jquery.js',
	], 'public/js/app.js')
   .styles([
   	'resources/css/materialize.min.css',
   	'resources/css/app.css',
	], 'public/css/app.css');


	mix.copy('resources/fonts', 'public/fonts');