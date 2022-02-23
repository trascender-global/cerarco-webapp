const mix = require('laravel-mix');
const lodash = require("lodash");
const folder = {
    src: "resources/", // source files
    dist: "public/", // build files
    dist_assets: "public/assets/" //build assets files
};

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

    mix.copyDirectory("./node_modules/tinymce", folder.dist_assets + "/libs/tinymce");
    mix.copyDirectory("./node_modules/leaflet/dist/images", folder.dist_assets + "/libs/leaflet/images");
    mix.copyDirectory("./node_modules/bootstrap-editable/img", folder.dist_assets + "/libs/img");
    mix.copyDirectory("./node_modules/summernote/dist/font", folder.dist_assets + "/libs/summernote/font");

    // copy all fonts
    var out = folder.dist_assets + "fonts";
    mix.copyDirectory(folder.src + "fonts", out);

    // copy all images 
    var out = folder.dist_assets + "images";
    mix.copyDirectory(folder.src + "images", out);

    //mix.sass('resources/scss/bootstrap.scss', folder.dist_assets + "css").minify(folder.dist_assets + "css/bootstrap.css");
    mix.sass('resources/scss/bootstrap-dark.scss', folder.dist_assets + "css").minify(folder.dist_assets + "css/bootstrap-dark.css");
    mix.sass('resources/scss/icons.scss', folder.dist_assets + "css").minify(folder.dist_assets + "css/icons.css");
    mix.sass('resources/scss/app-rtl.scss', folder.dist_assets + "css").minify(folder.dist_assets + "css/app-rtl.css");
    mix.sass('resources/scss/app.scss', folder.dist_assets + "css").minify(folder.dist_assets + "css/app.css");
    mix.sass('resources/scss/app-dark.scss', folder.dist_assets + "css").minify(folder.dist_assets + "css/app-dark.css");

    mix.combine('resources/js/app.js', folder.dist_assets + "js/app.min.js");
    mix.combine('resources/js/glosario_admin.js', folder.dist_assets + "js/glosario_admin.min.js");
    mix.combine('resources/js/custom.js', folder.dist_assets + "js/custom.min.js");


mix.sass('resources/scss/buscador_front.scss', folder.dist_assets + "css").minify(folder.dist_assets + "css/buscador_front.css");