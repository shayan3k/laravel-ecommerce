const mix = require("laravel-mix");

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

mix.sass("resources/sass/style.scss", "public/sass")

    // .copy("resources/css", "public/css")
    // .copy("resources/sass/style.css", "public/css/style.css")
    // .copy("resources/fonts", "public/fonts")
    // .copy("resources/images", "public/images")
    // .copy("resources/js", "public/js")
    .js("resources/js/main.js", "public/js")
    .browserSync({
        proxy: "http://127.0.0.1:8000",
        files: ["resources/**/*"]
    });
