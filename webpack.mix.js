const mix = require('laravel-mix');
const path = require('path');

var assetPath = './Themes/Front/assets/';
var publicPath = './themes/';

//Javascript
mix.js(assetPath + 'js/app.js', publicPath + 'Front.js').sourceMaps();

//Css
mix.sass(assetPath + 'css/master.scss', publicPath + 'Front.css');