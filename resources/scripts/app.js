/**
 * External Dependencies
 */
import 'alpinejs'
const feather = require('feather-icons')
import AOS from 'aos';
import Isotope from 'isotope-layout';
import { tns } from 'tiny-slider/src/tiny-slider'
import './fellows';

import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faNewspaper } from '@fortawesome/free-regular-svg-icons';
import { faArrowAltCircleRight, faChevronCircleRight, faEnvelope } from '@fortawesome/free-solid-svg-icons';
import { faFacebook, faTwitter, faInstagram, faYoutube, faLinkedin } from '@fortawesome/free-brands-svg-icons';

$(document).ready(() => {
  feather.replace()
  // Font Awesome Initiation
  library.add(faFacebook, faTwitter, faInstagram, faYoutube, faLinkedin, faNewspaper, faArrowAltCircleRight, faEnvelope, faChevronCircleRight);
  dom.watch()
  // Animate on Scroll
  setTimeout(function(){
    AOS.init({
      duration:   1200,
      offset:     120,
      once:       false,
    })
  },200);
  if ( document.getElementById("carousel") ) {
    var slider = tns({
      container: '#carousel',
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
    });
  }

});

const productCatsCarouselInit = () => {
  const productCatsSlider = document.querySelectorAll('.immersive-carousel'); // container above slider
  productCatsSlider.forEach(sliderWrapper => {
    const slider = sliderWrapper.querySelector('.immersive-carousel__slider'); // container with slider
    //const navContainer = sliderWrapper.querySelector('.immersive-carousel__thumbs');
    const controlsContainer = sliderWrapper.querySelector('.immersive-carousel__controls');
    const catSlider = tns({
      container: slider,
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
      //navContainer: navContainer,
      navAsThumbnails: true,
      controlsContainer: controlsContainer
    });
  });
};
if (document.querySelectorAll('.immersive-carousel')) {
  console.log('hello');
  productCatsCarouselInit();
}