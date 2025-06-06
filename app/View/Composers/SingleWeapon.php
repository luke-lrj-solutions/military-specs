<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use App\Models\Weapon;

class SingleWeapon extends Composer
{
    protected static $views = [
        'layouts.single-entity', // or wherever you render vehicles
    ];

    public function with(): array
    {
        return [
            'weapon' => new Weapon(get_post()),
        ];
    }
}
