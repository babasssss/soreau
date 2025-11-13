<?php
/**
 * Theme setup.
 */
namespace App\Setup;

add_action('customize_register', function ($wp_customize) {
    // Add the "Social Links" panel
    $wp_customize->add_section('social_links_section', [
        'title'       => __('Social Links', 'wpconnect'),
        'priority'    => 30,
        'description' => __('Add your social media links', 'wpconnect'),
    ]);

    // Network table
    $social_networks = [
        'linkedin' => 'LinkedIn',
        'youtube'  => 'YouTube',
        'instagram'        => 'Instagram',
    ];

    foreach ($social_networks as $slug => $label) {
        // Add the setting
        $wp_customize->add_setting("social_links_{$slug}", [
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        ]);

        // Add the control
        $wp_customize->add_control("social_links_{$slug}", [
            'label'   => $label,
            'section' => 'social_links_section',
            'type'    => 'url',
        ]);
    }
});
