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

    public function getTaxTerms(string $taxonomy): ?array // Return all term for the provided taxonomy
    {
        $terms = get_the_terms($this->post->id, $taxonomy);

        if (is_wp_error($terms) || empty($terms)) {
            return null;
        }

        return array_map(function ($term) {
            return [
                'name' => $term->name,
                'link' => get_term_link($term),
            ];
        }, $terms);
    }

    public function getTaxFormatted(string $taxonomy): ?array // Return comma separated list of terms
    {
        $terms = $this->getTaxTerms($taxonomy);

        if (!$terms) {
            return null;
        }

        return [
            'value' => implode(', ', array_column($terms, 'name')),
            'links' => $terms,
        ];
    }

    public function buildMetaItem(string $key, string $taxonomy, int $span = 2): ?array // Return list for meta-list component
    {
        $data = $this->getTaxFormatted($taxonomy);

        if (!$data) {
            return null;
        }

        return [
            'key' => $key,
            'value' => $data['value'],
            'links' => $data['links'],
            'span' => $span,
        ];
    }

    public function getMetaFromTaxMap(array $map): array // Create array map for returning multiple taxonomies
    {
        return array_filter(array_map(function ($taxonomy, $label) {
            return $this->buildMetaItem($label, $taxonomy);
        }, array_keys($map), $map));
    }
}
