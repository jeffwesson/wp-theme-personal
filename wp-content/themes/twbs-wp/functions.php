<?php
/**
 * Theme Name: twbs-wp
 * Theme URI: http://jeffwesson.com
 * Author: Jeff Wesson
 * Author URI: http://jeffwesson.com/
 * Description: A simple blog theme utilizing Twitter Bootstrap 3.1.0.
 * Version: 1.0
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Tags: orange, white, blue, light, responsive, mobile-first
 * Text Domain: twbs-wp
 * This theme, like WordPress, is licensed under the GPL.
 * Use it to make something cool, have fun, and share what you've learned with others.
 */

// Enqueue jQuery
function twbswp_scripts_with_jquery()
{
    // Register the scripts:
    wp_register_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'));
    wp_register_script( 'main', get_template_directory_uri() . '/js/main.js' , array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script('bootstrap');
//    wp_enqueue_script( 'main' );
}

add_action('wp_enqueue_scripts', 'twbswp_scripts_with_jquery');

// Enable WordPress navigation
function register_my_menu()
{
    register_nav_menu('header_nav', __('Header Nav'));
}

add_action('init', 'register_my_menu');

// Extending the word count shown for the_excerpt()
function custom_excerpt_length( $length ) {
    return 100;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Altering the_excerpt() read more value
function new_excerpt_more( $more ) {
    return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">[&hellip;&hellip;]</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );