<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

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

                $authorId = (int) get_post_field('post_author', $id);

                return [
                    'id'        => $id,
                    'classes'   => implode(' ', get_post_class('rounded-2xl border border-dark-12 bg-dark-06 p-5', $id)),
                    'permalink' => get_permalink($id),
                    'title'     => get_the_title($id),
                    'dateIso'   => get_the_date('c', $id),
                    'dateLabel' => get_the_date('', $id),
                    'author'    => [
                        'name' => get_the_author_meta('display_name', $authorId),
                        'link' => get_author_posts_url($authorId),
                    ],
                    'excerpt'   => get_the_excerpt($id),
                ];
            }, $posts);

            $groups[] = [
                'term'  => $cat,
                'link'  => get_category_link($cat->term_id),
                'cards' => $cards, // <- on passe des cards prêtes
            ];
        }

        return [
            'postsPageContent' => $postsPage ? apply_filters('the_content', $postsPage->post_content) : null,
            'categoryGroups'   => $groups,
        ];
    }
}
