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

      function addClass(el, klass) {
        el.classList.add(klass);
      }

      function removeClass(el, klass) {
        el.classList.remove(klass);
      }

      const accordionItems = document.querySelectorAll('.alm-filter');
      const accordionContentPanes = document.querySelectorAll('.alm-filter ul');

      // Hide each besides the targeted accordion on click
      accordionItems.forEach(function(accordion) {
        // Clicked accordeions clickable target
        const accordionTitleRow = accordion.querySelector('.alm-filter--title');
        accordion.querySelector('ul').classList.add('hidden');
        accordionTitleRow.addEventListener('click', toggleAccordion);
        // console.log(accordion.firstElementChild);  
      });

      // Show first by default
      accordionItems[0].querySelector('.alm-filter ul').classList.remove('hidden');

      function toggleAccordion(e) {
        accordionContentPanes.forEach(function(content) {
          // Check if clicked row matches the content's previous element sibling
          console.log(content); 
          if (content.previousElementSibling === e.target) {
            removeClass(content, 'hidden'); 
            addClass(content.parentElement, 'active');
          } else {
            removeClass(content.parentElement, 'active');
            addClass(content, 'hidden');
          }
        });
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
    //const swup = new Swup();
    //swup.on('contentReplaced', build); 
  },
};
