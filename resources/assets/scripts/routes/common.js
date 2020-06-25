//import Swup from 'swup';
import 'alpinejs'
import AOS from 'aos';
const feather = require('feather-icons')
import Rellax from 'rellax';
//import { tns } from 'tiny-slider/src/tiny-slider';

// Formstone Core
import 'formstone/dist/js/core';
import 'formstone/dist/js/mediaquery';
import 'formstone/dist/js/touch';

// Formstone Plugins
import 'formstone/dist/js/cookie';
import 'formstone/dist/js/carousel';
import 'formstone/dist/js/sticky';
import 'formstone/dist/js/lightbox';

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    function build() {

      //const accordionItems = document.querySelectorAll('.alm-filter');
      //const accordionContentPanes = document.querySelectorAll('.alm-filter ul');

      /*eslint-disable */
      (function($) {
      var allPanels = $('.alm-filter ul').hide();
        
      $('.alm-filter .alm-filter--title').click(function() {
          var $this = $(this);
          var $target =  $this.next();

          console.log($this);

          if(!$target.hasClass('active')){
             allPanels.removeClass('active').hide();
             $target.addClass('active').show();
          }
          
        return false;
      });
      })(jQuery);
      /*eslint-enable */

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
    //const swup = new Swup();
    //swup.on('contentReplaced', build); 
  },
};
