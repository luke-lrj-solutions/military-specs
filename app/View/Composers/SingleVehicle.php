<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use App\Models\Vehicle;

class SingleVehicle extends Composer
{
    protected static $views = [
        'layouts.single-entity', // or wherever you render vehicles
        'partials.routes.*'
    ];

    public function with(): array
    {
        return [
            'vehicle' => new Vehicle(get_post()),
        ];
    }
}
