<?php

namespace App\Models;

use WP_Post;
use App\Models\Vehicle;
use App\Models\Weapon;
use App\Models\Munition;

class EntityFactory
{
    public static function make(WP_Post $post): Entity
    {
        return match ($post->post_type) {
            'vehicle' => new Vehicle($post),
            'weapon' => new Weapon($post),
            'munition' => new Munition($post),
            default => throw new \Exception("Unknown post type: {$post->post_type}"),
        };
    }
}
