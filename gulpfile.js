var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

//elixir(function(mix) {
//    mix.less('app.less');
//});

elixir(function(mix) {
    mix.sass("main.scss")
        .styles([
            'bootstrap.min.css',
            'main.css'
        ], 'public/css/all.css', 'public/css')
        .scripts([
            "jquery.js",
            "jquery-ui.js",
            "bootstrap.js",
            "main.js"
        ], 'public/js/main.js', 'resources/js')

});

