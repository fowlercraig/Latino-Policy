//import Swup from 'swup';
import 'alpinejs'
import AOS from 'aos';
const feather = require('feather-icons')
import Rellax from 'rellax';
import { tns } from 'tiny-slider/src/tiny-slider'

//import PhotoSwipe from 'photoswipe';
//import PhotoSwipeUI_Default from 'photoswipe/dist/photoswipe-ui-default'

// Formstone Core
import 'formstone/dist/js/core';
import 'formstone/dist/js/mediaquery';
import 'formstone/dist/js/touch';

// Formstone Plugins
import 'formstone/dist/js/cookie';
import 'formstone/dist/js/carousel';
import 'formstone/dist/js/sticky';
import 'formstone/dist/js/lightbox';

//import accordion from './accordion';
//import photoswipe from './photoswipe';

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {

    //photoswipe,

    function build() {

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
          mouseDrag: true,
          lazyload: true,
          controlsContainer: '#carousel-controls',
        },
      }

      var doc = document,
          //win = window,
          ///initFns = {},
          sliders = new Object();

      for (var i in options) {
        var item = options[i];
        item.container = '#' + i;
        if (doc.querySelector(item.container)) {
          sliders[i] = tns(options[i]);
        }
      }

      feather.replace();
      new Rellax('.rellax');
      $('.carousel').carousel();  
      $('.lightbox').lightbox({
        
      });  
      $('.sticky').sticky(); 
      setTimeout(function(){
        AOS.init({
          duration: 1200,
          offset: 120,
          once: true,
        });  
      },500);
    }
    build();
  },
};
