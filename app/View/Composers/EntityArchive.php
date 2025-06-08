<?php

namespace App\View\Composers;

use App\Models\EntityFactory;
use Roots\Acorn\View\Composer;

class EntityArchive extends Composer
{
    protected static $views = [
        'layouts.taxonomy-entity',
        'partials.table-loop-entity',

    ];

    public function with(): array
    {
        $term = get_queried_object();

        $query_args = [
            'post_type' => ['vehicle', 'weapon', 'munition'],
            'posts_per_page' => -1,
        ];

        // If it's a taxonomy term page, add tax_query
        if (isset($term->taxonomy)) {
            $query_args['tax_query'] = [[
                'taxonomy' => $term->taxonomy,
                'field' => 'term_id',
                'terms' => $term->term_id,
            ]];
        }

        $query = new \WP_Query($query_args);

        $entities = array_map(fn ($post) => EntityFactory::make($post), $query->posts);

        return [
            'entities' => $entities,
            'term' => $term ?? null,
        ];
    }
}
