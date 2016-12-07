var elixir = require('laravel-elixir');
require('laravel-elixir-rollup-official');
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

elixir(function(mix) {
    // mix.less('app.less');
    // mix.copy('bower_components/bootstrap/dist/fonts', 'public/assets/fonts');
    // mix.copy('bower_components/font-awesome/fonts', 'public/assets/fonts');
    // mix.styles([
    //     'bower_components/bootstrap/dist/css/bootstrap.css',
    //     'bower_components/fontawesome/css/font-awesome.css',
    //     'resources/css/sb-admin-2.css',
    //     'resources/css/timeline.css'
    // ], 'public/assets/stylesheets/styles.css', './');
    // mix.scripts([
    //     'bower_components/jquery/dist/jquery.js',
    //     'bower_components/bootstrap/dist/js/bootstrap.js',
    //     'bower_components/Chart.js/Chart.js',
    //     'bower_components/metisMenu/dist/metisMenu.js',
    //     'resources/js/sb-admin-2.js',
    //     'resources/js/frontend.js'
    // ], 'public/assets/scripts/frontend.js', './');
    // mix.scripts([
    //     ''
    // ])
    // mix.rollup('resources/react/*.jsx', 'public/js/react/all.js', './' , {
    //     plugins: ["es2015", "react"]
    // });
});

var gulp = require("gulp");
var sourcemaps = require("gulp-sourcemaps");
var babel = require("gulp-babel");
var concat = require("gulp-concat");

gulp.task("react", function () {
    return gulp.src("resources/react/*.jsx")
        .pipe(sourcemaps.init())
        .pipe(babel())
        .pipe(concat("react-app.js"))
        .pipe(sourcemaps.write("."))
        .pipe(gulp.dest("public/js/react"));
});

gulp.task("watch", function () {
    gulp.watch('resources/react/*.jsx', ['react']);
});

gulp.task("default", ['react', 'watch']);