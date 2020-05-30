//import Swup from 'swup';
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
    function build() {
      AOS.init({
        duration: 1200,
        offset: 120,
        once: true,
      });
      feather.replace();
      new Rellax('.rellax');
      $('.carousel').carousel();  
      $('.sticky').sticky(); 
    }
    build();
    //const swup = new Swup();
    //swup.on('contentReplaced', build); 
  },
};
