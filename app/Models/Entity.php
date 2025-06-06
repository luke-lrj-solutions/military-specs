<?php

namespace App\Models;

use WP_Post;

abstract class Entity
{
    protected WP_Post $post;

    public function __construct(WP_Post $post)
    {
        $this->post = $post;
    }

    public function id(): int
    {
        return $this->post->ID;
    }

    public function title(): string
    {
        return get_the_title($this->post);
    }

    public function slug(): string
    {
        return $this->post->post_name;
    }

    public function permalink(): string
    {
        return get_permalink($this->post);
    }

    public function postType(): string
    {
        return $this->post->post_type;
    }

    public function raw(): WP_Post
    {
        return $this->post;
    }
}
