const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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

elixir(mix => {
    mix.sass('app.scss')
       .scripts([
          'bootstrap.js',
          'jquery-ui.min.js',
          'jquery1.min.js',
          'jquery.nivo.slider.js',
          'jquery.magnific-popup.js',
          'jquery.jscrollpane.min.js',
          'jquery.flexisel.js',
          'jquery.etalage.min.js',
          'jquery.easydropdown.js',
          'login.js',
          'megamenu.js',
          'slides.min.jquery.js',
          'zoome-e.js',
          'fwslider',
          'css3-mediaqueries.js'
       ])
       .styles([
         'default.css',
         'etalage.css',
         'form.css',
         'fwslider.css',
         'magnific.popup.css',
         'megamenu.css',
         'nivo-slider.css',
         'style.css',
         'zoome-min.css'
       ]);;
});
