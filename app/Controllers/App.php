<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function mediumTitle()
    {
        $mediumTitle = 'text-3xl leading-9 font-extrabold tracking-tight text-brand-darker sm:text-4xl sm:leading-10 mb-0';
        return $mediumTitle;
    }

    public function learnmore()
    {
        $learnmore = 'inline-block font-bold border-t-2 border-b-0 border-brand pt-1 text-brand';
        return $learnmore;
    }

    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }
}
