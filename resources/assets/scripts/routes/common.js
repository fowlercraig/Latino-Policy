import 'alpinejs'
import AOS from 'aos';
const feather = require('feather-icons')
import Rellax from 'rellax';

// Formstone Core
import 'formstone/dist/js/core';
import 'formstone/dist/js/mediaquery';
import 'formstone/dist/js/touch';

// Formstone Plugins
import 'formstone/dist/js/carousel';
import 'formstone/dist/js/sticky';

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    AOS.init({
      duration: 1200,
    });
    feather.replace();
    new Rellax('.rellax');
    $('.carousel').carousel();  
    $('.sticky').sticky();  
  },
};
