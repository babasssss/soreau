<?php

namespace App\Setup;

add_action('init', function () {
    // Style Primary
    register_block_style('core/button', [
        'name'  => 'soreau-primary',
        'label' => __('SOREAU Primary', 'soreau'),
    ]);
});
