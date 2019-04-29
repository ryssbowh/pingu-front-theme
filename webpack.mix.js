const mix = require('laravel-mix');
const path = require('path');

var assetPath = './public/themes/Default/assets/';

//Javascript
mix.js(assetPath + 'js/app.js', assetPath + 'Default.js').sourceMaps();

//Css
mix.sass(assetPath + 'css/master.scss', assetPath + 'Default.css');