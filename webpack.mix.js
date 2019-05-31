const mix = require('laravel-mix');
const path = require('path');

var assetPath = './public/themes/Front/assets/';

//Javascript
mix.js(assetPath + 'js/app.js', assetPath + 'Front.js').sourceMaps();

//Css
mix.sass(assetPath + 'css/master.scss', assetPath + 'Front.css');