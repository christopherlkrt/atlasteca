var elixir = require('laravel-elixir'),
    gulp = require('gulp'),
    less = require('gulp-less');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir.config.sourcemaps = false;

elixir(function(mix) {

    mix.copy('resources/assets/images','public/images');
    mix.copy('resources/assets/fonts','public/fonts');

    mix.less('global.less', 'resources/assets/css');

    // mescla arquivos descritos que estão em public/css para o arquivo public/css/all.css
    mix.styles([
        "bootstrap.min.css",
        "font-awesome.min.css",
        "global.css"
    ], 'public/css/all.css', 'resources/assets/css');

    // mescla arquivos descritos que estão em resources/assets/js para o arquivo public/js/all.js
    mix.scripts([
        "libs/jquery.min.js",
        "libs/bootstrap.min.js",
        "libs/jquery.capSlide.js",
        "app.js"
    ],'public/js/all.js','resources/assets/js');

    // build de versionamento
    mix.version([
        'css/all.css',
        'js/all.js'
    ]);

});

