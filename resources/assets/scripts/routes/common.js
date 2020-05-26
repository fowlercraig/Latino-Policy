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
import 'formstone/dist/js/swap';
import 'formstone/dist/js/carousel';
import 'formstone/dist/js/background';
import 'formstone/dist/js/sticky';
import 'formstone/dist/js/checkpoint';

export default {
  init() {
    
  },
  finalize() {
    function build() {
      $('.carousel').carousel();  
      $('.sticky').sticky();  
      feather.replace();
      AOS.init({
        duration: 1200,
      });
      new Rellax('.rellax');
    }
    build();
    //const swup = new Swup();
    //swup.on('contentReplaced', build);
  },
}; 

