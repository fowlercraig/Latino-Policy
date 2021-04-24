<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Post Types
    |--------------------------------------------------------------------------
    |
    | Here you may specify the post types to be registered by Poet using the
    | Extended CPTs library. <https://github.com/johnbillion/extended-cpts>
    |
    */

    'post' => [
        'research' => [
            'enter_title_here' => 'Enter Research name',
            'menu_icon' => 'dashicons-media-text',
            'supports' => ['title', 'editor', 'author', 'revisions', 'thumbnail'],
            'show_in_rest' => true,
            'has_archive' => true,
            'labels' => [
                'singular' => 'Research',
                'plural' => 'Research',
            ],
            'admin_cols' => array(
                'title',
                'resource' => array(
                    'title'             => 'Resource',
                    'taxonomy'          => 'resource'
                ),
                'issue' => array(
                    'title'             => 'Issue',
                    'taxonomy'          => 'issue'
                ),
                'author',
                'date' => array(
                    'default'  => 'DESC',
                )
            )
        ],
        'press' => [
            'enter_title_here' => 'Enter Press name',
            'menu_icon' => 'dashicons-megaphone',
            'supports' => ['title', 'editor', 'author', 'revisions', 'thumbnail'],
            'show_in_rest' => true,
            'has_archive' => true,
            'labels' => [
                'singular' => 'Press',
                'plural' => 'Press',
            ],
            'admin_cols' => array(
                'title',
                'resource' => array(
                    'title'             => 'Resource',
                    'taxonomy'          => 'resource'
                ),
                'issue' => array(
                    'title'             => 'Issue',
                    'taxonomy'          => 'issue'
                ),
                'author',
                'date' => array(
                    'default'  => 'DESC',
                )
            )

        ],
        'event' => [
            'enter_title_here' => 'Enter Event title',
            'menu_icon' => 'dashicons-calendar',
            'supports' => ['title', 'editor', 'author', 'revisions', 'thumbnail'],
            'show_in_rest' => true,
            'has_archive' => true,
            'labels' => [
                'singular' => 'Event',
                'plural' => 'Events',
            ],
            'admin_cols' => array(
                'title',
                'section' => array(
                    'title'             => 'Section',
                    'taxonomy'          => 'section'
                ),
                'resource' => array(
                    'title'             => 'Resource',
                    'taxonomy'          => 'resource'
                ),
                'issue' => array(
                    'title'             => 'Issue',
                    'taxonomy'          => 'issue'
                ),
                'author',
                'date' => array(
                    'default'  => 'DESC',
                )
            )
        ],
        'people' => [
            'enter_title_here' => 'Enter Name',
            'menu_icon' => 'dashicons-admin-users',
            'supports' => ['title', 'editor', 'author', 'revisions', 'thumbnail'],
            'show_in_rest' => true,
            'has_archive' => true,
            'labels' => [
                'singular' => 'Person',
                'plural' => 'People',
                'slug' => 'person'
            ],
            'admin_cols' => array(
                'title',
                'issue' => array(
                    'title'             => 'Issue',
                    'taxonomy'          => 'issue'
                ),
                'role' => array(
                    'title'             => 'Role',
                    'taxonomy'          => 'role'
                ),
                'author',
            )
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Taxonomies
    |--------------------------------------------------------------------------
    |
    | Here you may specify the taxonomies to be registered by Poet using the
    | Extended CPTs library. <https://github.com/johnbillion/extended-cpts>
    |
    */

    'taxonomy' => [
        'section' => [
            'links' => ['event'],
            'meta_box' => 'simple',
            'dashboard_glance' => true,
            'labels' => [
                'singular' => 'Section',
                'plural' => 'Section',
            ],
        ],
        'resource' => [
            'links' => ['event','press','research'],
            'meta_box' => 'simple',
            'dashboard_glance' => true,
            'slug' => 'resource',
            'labels' => [
                'singular' => 'Resource',
                'plural' => 'Resource',
            ],
        ],
        'issue' => [
            'links' => ['event','press','research','people'],
            'meta_box' => 'simple',
            'public' => true,
            'dashboard_glance' => true,
            'labels' => [
                'singular' => 'Issue',
                'plural' => 'Issue',
            ],
        ],
        'role' => [
            'links' => ['people'],
            'meta_box' => 'simple',
            'dashboard_glance' => true,
            'labels' => [
                'singular' => 'Role',
                'plural' => 'Role',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Blocks
    |--------------------------------------------------------------------------
    |
    | Here you may specify the block types to be registered by Poet and
    | rendered using Blade.
    |
    | Blocks are registered using the `namespace/label` defined when
    | registering the block with the editor. If no namespace is provided,
    | the current theme text domain will be used instead.
    |
    | Given the block `sage/accordion`, your block view would be located at:
    |   ↪ `views/blocks/accordion.blade.php`
    |
    | Block views have the following variables available:
    |   ↪ $data    – An object containing the block data.
    |   ↪ $content – A string containing the InnerBlocks content.
    |                Returns `null` when empty.
    |
    */

    'block' => [
        // 'sage/accordion',
    ],

    /*
    |--------------------------------------------------------------------------
    | Block Categories
    |--------------------------------------------------------------------------
    |
    | Here you may specify block categories to be registered by Poet for use
    | in the editor.
    |
    */

    'categories' => [
        // 'cta' => [
        //     'title' => 'Call to Action',
        //     'icon' => 'star-filled',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Editor Palette
    |--------------------------------------------------------------------------
    |
    | Here you may specify the color palette registered in the Gutenberg
    | editor.
    |
    | A color palette can be passed as an array or by passing the filename of
    | a JSON file containing the palette.
    |
    | If a color is passed a value directly, the slug will automatically be
    | converted to Title Case and used as the color name.
    |
    | If the palette is explicitly set to `true` – Poet will attempt to
    | register the palette using the default `palette.json` filename generated
    | by <https://github.com/roots/palette-webpack-plugin>
    |
    */

    'palette' => [
        // 'red' => '#ff0000',
        // 'blue' => '#0000ff',
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Menu
    |--------------------------------------------------------------------------
    |
    | Here you may specify admin menu item page slugs you would like moved to
    | the Tools menu in an attempt to clean up unwanted core/plugin bloat.
    |
    | Alternatively, you may also explicitly pass `false` to any menu item to
    | remove it entirely.
    |
    */

    'menu' => [
        // 'gutenberg',
    ],

];
