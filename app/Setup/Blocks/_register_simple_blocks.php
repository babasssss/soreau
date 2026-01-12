<?php

namespace App\Setup\Blocks;

use function Roots\view;

add_action('init', __NAMESPACE__ . '\\register_simple_blocks');

function register_simple_blocks(): void
{
    $blocks = [
        'title',
        'introduction',
        'social-links',
        'separator',
        'hero',
        'hero/home-page',
        'hero/about-me',
        'cards',
        'cards/timeline',
    ];

    foreach ($blocks as $blockName) {
        register_block_type_from_metadata(
            get_theme_file_path("resources/js/blocks/{$blockName}"),
            [
                'render_callback' => function ($attributes, $content, $block) use ($blockName) {
                    $viewPath = str_replace('/', '.', $blockName);

                    return view("blocks.{$viewPath}", [
                        'attributes' => $attributes,
                        'content'    => $content,
                        'block'      => $block,
                    ])->render();
                },
            ]
        );
    }
}
