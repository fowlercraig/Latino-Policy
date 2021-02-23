/**
 * External Dependencies
 */
import 'alpinejs'
const feather = require('feather-icons')
import AOS from 'aos';
import Isotope from 'isotope-layout';
import './fellows';

import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faNewspaper } from '@fortawesome/free-regular-svg-icons';
import { faArrowAltCircleRight, faChevronCircleRight } from '@fortawesome/free-solid-svg-icons';
import { faFacebook, faTwitter, faInstagram, faYoutube, faLinkedin } from '@fortawesome/free-brands-svg-icons';

$(document).ready(() => {
  feather.replace()
  // Font Awesome Initiation
  library.add(faFacebook, faTwitter, faInstagram, faYoutube, faLinkedin, faNewspaper, faArrowAltCircleRight, faChevronCircleRight);
  dom.watch()
  // Animate on Scroll
  AOS.init({
    duration:   1200,
    offset:     120,
    once:       false,
  })
});
