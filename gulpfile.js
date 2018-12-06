var gulp = require('gulp');
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');
var del = require('del');
var fs = require('fs');
var themeInfo = require('./theme.json');


process.env.DISABLE_NOTIFIER = true;

elixir.config.publicPath = 'assets';

var publicPath = '../../public';
var themePath = publicPath + '/themes/saygilid';
var cssPath = themePath + '/css';
var jsPath = themePath + '/js';

var Task = elixir.Task;

elixir.extend('del', function (path) {
    new Task('del', function () {
        return del(path, {force: true});
    });
});

elixir.extend('stylistPublish', function () {
    new Task('stylistPublish', function () {
        return gulp.src("").pipe(shell("php ../../artisan stylist:publish " + themeInfo.name));
    });
});

elixir(function (mix) {

    // mix.sass('bootstrap.scss', cssPath+'/bootstrap.css')
    //     .sass('style.scss', cssPath+'/style.min.css')
    //     .sass('custom.scss', cssPath+'/custom.css');

    mix.del(['assets/css', 'assets/js', 'assets/fonts', 'assets/images']);
    mix.del(themePath + '/**');

    mix.sass('_bootstrap.scss', 'resources/assets/css/bootstrap.css', 'assets/vendor/bootstrap-sass/assets/stylesheets/')
        .sass('semantic-ui.scss', 'resources/assets/css/plugins/semantic-ui.css', 'assets/vendor/semantic-ui-sass/app/assets/stylesheets/')
        .sass('style.scss', 'resources/assets/css/style.min.css')
        .sass('custom.scss', 'resources/assets/css/custom.css');

    mix.styles([
        "bootstrap.min.css",
        "flaticon/css/flaticon.css",
        "owl.carousel.css",
        "owl.theme.css",
        "easy-sidebar.css",
        "pp/css/prettyPhoto.css",
        "spinkit/spinkit.css",
        "custom.css",
        "flag-icon-css/css/flag-icon.min.css",
    ],"resources/assets/css/all.min.css");

    mix.scripts([
        "jquery.themepunch.tools.min.js",
        "jquery.themepunch.revolution.min.js",
        "extensions/revolution.extension.actions.min.js",
        "extensions/revolution.extension.carousel.min.js",
        "extensions/revolution.extension.kenburn.min.js",
        "extensions/revolution.extension.layeranimation.min.js",
        "extensions/revolution.extension.migration.min.js",
        "extensions/revolution.extension.navigation.min.js",
        "extensions/revolution.extension.parallax.min.js",
        "extensions/revolution.extension.slideanims.min.js",
        "extensions/revolution.extension.video.min.js"
    ],"assets/vendor/revolution/js/revolution.all.min.js", "assets/vendor/revolution/js/");

    mix.copy('assets/vendor/semantic-ui-sass/app/assets/javascripts/semantic-ui.js', 'resources/assets/js/plugins')
        .copy('resources/assets', 'assets');

    mix.version([
        'css/all.min.css',
        'css/style.min.css'
    ], 'assets');

    mix.stylistPublish();

});