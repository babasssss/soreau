<?php

namespace App\Setup;

function register_menus() {
  register_nav_menus([
    'primary_navigation'   => __('Primary Navigation', 'wpconnect'),
    'footer_navigation'    => __('Footer Navigation', 'wpconnect'),
  ]);
}
add_action('after_setup_theme', __NAMESPACE__ . '\\register_menus');