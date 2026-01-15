<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use DateTimeZone;

class Home extends Composer
{
    protected static $views = [
        'home',
    ];

    public function with(): array
    {
        $postsPageId = (int) get_option('page_for_posts');
        $postsPage   = $postsPageId ? get_post($postsPageId) : null;

        $categories = get_categories([
            'hide_empty' => true,
            'orderby'    => 'name',
            'order'      => 'ASC',
        ]);

        $groups = [];

        foreach ($categories as $cat) {
            $posts = get_posts([
                'post_type'           => 'post',
                'post_status'         => 'publish',
                'posts_per_page'      => 21,
                'cat'                 => $cat->term_id,
                'orderby'             => 'date',
                'order'               => 'DESC',
                'ignore_sticky_posts' => true,
                'suppress_filters'    => true,
                'no_found_rows'       => true,
            ]);

            if (empty($posts)) {
                continue;
            }

            $cards = array_map(function ($p) {
                $id = $p->ID;

                $thumbId  = get_post_thumbnail_id($id);
                $thumbAlt = $thumbId ? get_post_meta($thumbId, '_wp_attachment_image_alt', true) : '';

                return [
                    'id'        => $id,
                    'permalink' => get_permalink($id),
                    'title'     => get_the_title($id),
                     // dates (propre pour <time>)
                    'dateLabel' => ucfirst(wp_date('F Y', get_post_timestamp($id), new \DateTimeZone('Europe/Paris'))),
                    'dateIso'   => get_post_time('c', true, $id),

                    // featured image
                    'thumb' => $thumbId ? [
                        'id'  => $thumbId,
                        'url' => wp_get_attachment_image_url($thumbId, 'large'),
                        'alt' => $thumbAlt ?: get_the_title($id),
                    ] : null,
                ];
            }, $posts);

            $groups[] = [
                'term'  => $cat,
                'link'  => get_category_link($cat->term_id),
                'cards' => $cards,
            ];
        }

        return [
            'postsPageContent' => $postsPage ? apply_filters('the_content', $postsPage->post_content) : null,
            'categoryGroups'   => $groups,
        ];
    }
}
