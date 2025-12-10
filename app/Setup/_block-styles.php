<?php

namespace App\Setup;

add_action('init', function () {
    // Style Primary Button Soreau
    register_block_style('core/button', [
        'name'  => 'soreau-primary',
        'label' => __('BTN SOREAU', 'soreau'),
    ]);
});
