<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
});

function wpb_cookies_tutorial1() { 
 
$visit_time = date('F j, Y  g:i a');
 
if(!isset($_COOKIE[$wpb_visit_time])) {
 
// set a cookie for 1 year
setcookie('wpb_visit_time', $current_time, time()+31556926);
 
}
 
} 
