<?php
// Enqueue parent theme styles
function child_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'child_enqueue_styles');
function child_register_menus() {
    register_nav_menus([
        'secondary' => __('Secondary Menu', 'astra-child'),
    ]);
}
add_action('after_setup_theme', 'child_register_menus');
