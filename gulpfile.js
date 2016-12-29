const elixir = require('laravel-elixir');
require('laravel-elixir-webpack')
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

elixir((mix) => {
    const bootstrapPath = './node_modules/bootstrap-sass/assets/'

    mix.sass('app.scss')
      .webpack('app.js')
      .copy(bootstrapPath + 'fonts/**', 'public/fonts')
})
