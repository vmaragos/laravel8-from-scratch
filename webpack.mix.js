require("dotenv").config(); // Add this in order to access the app_name env variable in order to use it in browsersync. You must also change the APP_NAME variable in the .env file to match the name of your laravel project (default is "Laravel")
const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

mix.js("resources/js/app.js", "public/js").browserSync({
    // proxy: "127.0.0.1/project_manager/public",
    proxy: "127.0.0.1/" + process.env.APP_NAME + "/public",
});

mix.sass("public/sass/app.scss", "public/css");
