const mix = require('laravel-mix');



mix.styles([
    'resources/front/css/bootstrap.css',
    'resources/front/css/main.css'
], 'public/css/styles.css');

mix.scripts([
    'resources/front/js/jquery-3.5.1.js',
    'resources/front/js/bootstrap.js'
], 'public/js/scripts.js');

mix.copyDirectory('resources/front/img', 'public/img');

    