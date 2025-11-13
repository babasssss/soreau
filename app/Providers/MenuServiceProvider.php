<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
  public function register(): void {}

  public function boot(): void
  {
    add_action('after_setup_theme', function () {
      register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'soreau'),
        'secondary_navigation' => __('Secondary Navigation', 'soreau'),
        'footer_navigation'  => __('Footer Navigation', 'soreau'),
        'legal_navigation'  => __('Legal Navigation', 'soreau'),
      ]);
    }, 20);
  }
}
