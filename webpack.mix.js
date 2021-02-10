const mix = require('laravel-mix');

mix.autoload('jquery', [
        'window.$', 
        'window.jQuery'
    ])
    .scripts([
        './node_modules/jquery/dist/jquery.min.js',
        './resources/src/js/flickity.pkgd.min.js',
        './resources/src/js/libs.min.js',
        './resources/src/js/wow.min.js',
        './resources/src/js/jquery.nice-select.min.js',
        './resources/src/js/remodal.min.js',
        './resources/src/js/main.js'
    ], './public/js/app.js')
    .styles([
        './resources/src/css/animate.min.css',
        './resources/src/css/nice-select.css',
        './resources/src/css/flickity.css',
        './resources/src/css/remodal.css',
        './resources/src/css/remodal-default-theme.css',
        './resources/src/css/style.min.css',
        './resources/src/css/dashboard.scss'
    ], './public/css/app.css')
    .copyDirectory('./resources/src/fonts', './public/fonts')
    .copyDirectory('./resources/src/img', './public/img')
    .sourceMaps()
    .version();
