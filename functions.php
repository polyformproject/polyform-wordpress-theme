<?php
function polyform_scripts() {
  wp_enqueue_style('polyform-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'polyform_scripts');
?>
