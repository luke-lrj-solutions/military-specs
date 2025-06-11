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

    public function getTerms($taxonomy)
    {
        return get_the_terms($this->id(), $taxonomy) ?: [];
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

    public function buildMetaItem(string $key, string $taxonomy, int $span = 2): ?array
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

    public function getMetaFromTaxMap(array $map): array
    {
        return array_filter(array_map(function ($taxonomy, $settings) {

            $label = is_array($settings) ? ($settings['label'] ?? ucfirst($taxonomy)) : $settings;
            $span = is_array($settings) ? ($settings['span'] ?? '') : '';

            return $this->buildMetaItem($label, $taxonomy, $span);

        }, array_keys($map), $map));
    }
    public function getNames(): array // Return acf name list
    {
        $names = [];

        if (have_rows('names', $this->post->id)) {
            while (have_rows('names', $this->post->id)) {
                the_row();
                $reference = get_sub_field('reference');
                $value = get_sub_field('value');

                if ($reference || $value) {
                    $names[] = [$reference, $value];
                }
            }
        }

        return $names;
    }

    public function getServiceDates(): array
    {
        $entered = get_field('entered_group', $this->post->id);
        $left = get_field('left_group', $this->post->id);
        $now = (int) date('Y');

        $data = [
            'entered_actual' => null,
            'entered_planned' => null,
            'left_actual' => null,
            'left_planned' => null,
            'duration_actual' => null,
            'duration_planned' => null,
        ];

        if ($entered && isset($entered['year'], $entered['type'])) {
            $year = (int) $entered['year'];
            if ($entered['type'] === 'actual') {
                $data['entered_actual'] = $year;
            } else {
                $data['entered_planned'] = $year;
            }
        }

        if ($left && isset($left['year'], $left['type'])) {
            $year = (int) $left['year'];
            if ($left['type'] === 'actual') {
                $data['left_actual'] = $year;
            } else {
                $data['left_planned'] = $year;
            }
        }

        // Calculate durations
        if ($data['entered_actual']) {
            $end = $data['left_actual'] ?: $now;
            $data['duration_actual'] = $end - $data['entered_actual'];
        }

        if ($data['entered_planned'] && $data['left_planned']) {
            $data['duration_planned'] = $data['left_planned'] - $data['entered_planned'];
        }

        return $data;
    }



    public function getSvgThumb(): string
    {
        $svg = get_field('svg_file', $this->id());

        if ($svg) {
            return view('components.svg-entity', [
                'file' => $svg,
                'attributes' => ['class' => 'svg-vehicle'],
            ])->render();
        }

        return '<div class="placeholder-svg">No SVG</div>';
    }

    public function getOrigin(): string
    {
        return get_field('origin', $this->post->id) ?: 'Unknown Origin';
    }

    public function getStatus(): string
    {
        return get_field('status', $this->post->id) ?: 'Unknown Status';
    }

    public function getTypeLabel(): string
    {
        return get_field('type', $this->post->id) ?: 'Unknown Type';
    }
}



