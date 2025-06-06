<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use App\Models\Munition;

class SingleMunition extends Composer
{
    protected static $views = [
        'layouts.single-entity', // or wherever you render vehicles
    ];

    public function with(): array
    {
        return [
            'munition' => new Munition(get_post()),
        ];
    }
}
