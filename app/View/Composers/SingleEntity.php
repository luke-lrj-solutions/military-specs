<?php

namespace App\View\Composers;

use App\Models\EntityFactory;
use Roots\Acorn\View\Composer;

class SingleEntity extends Composer
{
    protected static $views = [
        'layouts.single-entity',
        'components.*',
        'partials.content-sections.*',
        'template-systems'

    ];

    public function with(): array
    {
        global $post;

        if ($post instanceof \WP_Post && in_array($post->post_type, ['vehicle', 'weapon', 'munition'])) {
            return [
                'entity' => \App\Models\EntityFactory::make($post),
            ];
        }

        return [
            'entity' => null,
        ];
    }
}
