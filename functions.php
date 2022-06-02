<?php
require get_template_directory() . '/includes/abcd.php';
// creating  menus
function custom_new_menu()
{
    register_nav_menus(
        array(
            'header' => 'Header Menu',
            'footer' => 'Footer Menu',
        )
    );
}
add_action('init', 'custom_new_menu');
function custom_post_type()
{
    register_post_type(
        'books',
        array(
            'labels'  => array(
                'name'    => 'Books',

            ),
            $rewrite = array(
                'slug' => 'books',
                'pages' => true,
                'feeds' => true,

            ),
            'public'      => true,
            'has_archive' => true,
        )
    );
    register_taxonomy(
        'book_category',
        array('books'),
        array(
            'labels' => array(
                'name'    =>  'Categories',
            ),

            'hierarchical' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'bookcategory'),

        ),
       
    );
    register_taxonomy(
        'book_tag',
        array('books'),
        array(
            'labels' => array(
                'name'    =>  'Tags',
            ),
            'hierarchical' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'query_var' => true,
           
        )
    );
}
add_action('init', 'custom_post_type');

function add_custom_post_types($query) {
    if ( is_home() && $query->is_main_query() ) {
        $query->set( 'post_type', array( 'post', 'page', 'books' ) );
    }
    return $query;
}
add_action('pre_get_posts', 'add_custom_post_types');

