<?php

/**
 * Plugin Name: Carousel
 * Description: Carousel plugin for WordPress
 * Version: 1.0
 * Author: WinterR
 */

// Enqueue styles and scripts
function custom_slider_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');
    wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'], '1.8.1', true);
    wp_enqueue_style('simple-carousel-init', plugin_dir_url(__FILE__) . '/css/style.css');
    wp_enqueue_script('simple-carousel-init', plugins_url('/js/carousel-init.js', __FILE__), array('slick-js'), '', true);
}

add_action('wp_enqueue_scripts', 'custom_slider_scripts');

// Shortcode function to display the slider
function simple_carousel_shortcode($atts)
{
    $images = explode(',', $atts['images']);
    $output = '<div class="simple-carousel">';
    foreach ($images as $image) {
        $output .= '<div><img src="' . esc_url($image) . '"/></div>';
    }
    $output .= '</div>';
    return $output;
}

add_shortcode('simple_carousel', 'simple_carousel_shortcode');
