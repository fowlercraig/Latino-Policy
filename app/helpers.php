<?php

/**
 * Theme helpers.
 */

namespace App;

function cookie_redirect() {
  $cookie_name = "thecookiemonster";
  global $cookie;
    if (!isset($_COOKIE[$cookie_name])) {
      setcookie( $cookie_name, 1, time()+1209600, SITECOOKIEPATH, COOKIE_DOMAIN, false, true);
      $cookie = false;
    } else {
      $cookie = true;
  }
}
add_action( 'init', __NAMESPACE__ . '\\cookie_redirect');
