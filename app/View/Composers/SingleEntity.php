<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use App\Models\Vehicle;

class SingleEntity extends Composer
{
    protected static $views = [
        'single-entity',
    ];

    public function with(): array
    {
        return [
            'vehicle' => new Vehicle(get_post()),
        ];
    }
}
