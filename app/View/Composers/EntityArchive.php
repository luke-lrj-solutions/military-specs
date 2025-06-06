<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use App\Models\EntityFactory;

class SingleEntity extends Composer
{
    protected static $views = [
        'layouts.single-entity', // or whatever view name you're using
    ];

    public function with(): array
    {
        $post = get_post();

        return [
            'entity' => EntityFactory::make($post),
        ];
    }
}
