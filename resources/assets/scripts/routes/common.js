import Swup from 'swup';
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
    }
    build();
    const swup = new Swup();
    swup.on('contentReplaced', build);
  },
}; 

