<?php

declare(strict_types=1);

// Register plugin helpers.
require template_path('includes/plugins/plate.php');

// Set theme defaults.
add_action('after_setup_theme', function () {
    // Disable the admin toolbar.
    show_admin_bar(false);

    // Add post thumbnails support.
    add_theme_support('post-thumbnails');

    // Add title tag theme support.
    add_theme_support('title-tag');

    // Add HTML5 theme support.
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'widgets',
    ]);

    // Register navigation menus.
    register_nav_menus([
        'navigation' => __('Navigation', 'wordplate'),
    ]);
});

// Enqueue and register scripts the right way.
add_action('wp_enqueue_scripts', function () {
    wp_deregister_script('jquery');

    // wp_enqueue_style('wordplate', mix('styles/app.css'));

    // wp_register_script('wordplate', mix('scripts/app.js'), '', '', true);
    // wp_enqueue_script('wordplate');
});

// Remove JPEG compression.
add_filter('jpeg_quality', function () {
    return 100;
}, 10, 2);


/**
 * Add fonts to the "Font Family" drop-down.
 */
add_filter( 'tiny_mce_before_init', 'fb_mce_before_init' );

function fb_mce_before_init( $settings ) {
    $font_formats = 'Roboto=Roboto,helvetica,arial, sans-serif;'
                  . 'Encode Sans Semi Expanded=Encode Sans Semi Expanded, sans-serif;';
    $settings[ 'font_formats' ] = $font_formats;
    return $settings;
}


function customize_admin_bar( $wp_admin_bar ) {
    $wp_admin_bar->remove_node( 'my-account' );
    $args = array(
        'id'     => 'logout',           // id of the existing child node (New > Post)
        'title'  => 'Se déconnecter',   // alter the title of existing node
        'parent' => 'top-secondary',    // set parent
    );
    $wp_admin_bar->add_node( $args );
}
if (!current_user_can('administrator')){
    add_action( 'admin_bar_menu', 'customize_admin_bar', 999 );
}




function disable_new_posts($a) {
    if (current_user_can('artiste')){
        global $submenu;
        unset($submenu['edit.php?post_type=artist'][10]);
        // Hide link on listing page
        echo '<style type="text/css">
        .page-title-action { display:none; }
        </style>';
    }
}
add_action('admin_menu', 'disable_new_posts');
