/**
 * External Dependencies
 */
import 'jquery';
import { tns } from "tiny-slider/src/tiny-slider"
const feather = require('feather-icons')
import 'alpinejs'

$(document).ready(() => {

  feather.replace();

  var options = {
    'gallery': {
      container: '.gallery',
      loop: true,
      items: 1,
      speed: 400,
      lazyload: false,
      mouseDrag: true,
      autoplayButtonOutput: false,
      controls: true,
      nav: false,  
      autoplay: false,
      controlsContainer: '#carousel-controls',
    },
    'carousel': {
      container: '.carousel',
      loop: true,
      mode: 'gallery',
      items: 1,
      slideBy: 'page',
      nav: false,    
      controls: true,
      autoplay: false,
      speed: 400,
      autoplayButtonOutput: false,
      mouseDrag: false,
      lazyload: true,
      controlsContainer: "#carousel-controls"
    }
  }

  var doc = document,
      win = window,
      initFns = {},
      sliders = new Object();

  for (var i in options) {
    var item = options[i];
    item.container = '#' + i;
    if (doc.querySelector(item.container)) {
      sliders[i] = tns(options[i]);
    }
  }

});
