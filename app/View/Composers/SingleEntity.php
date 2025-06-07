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

    ];

    public function with(): array
    {
        $post = get_post();

        return [
            'entity' => EntityFactory::make($post),
        ];
    }
}
