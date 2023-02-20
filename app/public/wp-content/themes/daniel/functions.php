<?php

function daniel_styles() {
  wp_enqueue_style('w3c', 'https://www.w3schools.com/w3css/4/w3.css');
  wp_enqueue_style('style.css', get_stylesheet_directory_uri());
}
add_action('wp_enqueue_scripts', 'daniel_styles');


add_theme_support('align-wide');
?>