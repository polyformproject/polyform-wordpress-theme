<?php
function polyform_scripts() {
  wp_enqueue_style('polyform-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'polyform_scripts');

function polyform_setup_theme() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'polyform_setup_theme');

function polyform_menus() {
  register_nav_menus(array('header-menu' => __('Header Menu')));
}

add_action( 'init', 'polyform_menus' );
?>
