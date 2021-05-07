<?php
    function register_my_menus() {
        register_nav_menus(
            array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
            )
        );
    }
    add_action( 'init', 'register_my_menus' );
    
    function my_sidebars() {
        register_sidebar(
            array(
                'name' => 'Sidebar',
                'id' => 'page-sidebar',
                'before_title' => '<p class="teenytinyheader widget-title">',
                'after_title' => '</p>'
            )
        );
    }
    add_action('widgets_init', 'my_sidebars');

	/* Inline script printed out in the header */

function tutsplus_add_script_wp_head() {
    echo '<script> alert("I\'m an inline script tag added to the header."); </script>';
}

add_action('wp_head', 'tutsplus_add_script_wp_head');

?>
