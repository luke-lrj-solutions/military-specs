<?php

namespace App\Models;

class Vehicle extends Entity
{
    public function getDomain(): ?array
    {
        $terms = $this->getTerms('domain');

        if (empty($terms)) {
            return null;
        }

        $term = $terms[0]; // assuming single term assigned

        return [
            'name' => $term->name,
            'slug' => $term->slug,
            'id' => $term->term_id,
        ];
    }

    public function domainSlug(): ?string
    {
        $domain = $this->getDomain();
        return $domain['slug'] ?? null;
    }

    public function getPlatformType(): ?array
    {
        $terms = $this->getTerms('platform-type');

        if (empty($terms)) {
            return null;
        }

        $term = $terms[0]; // assuming single term assigned

        return [
            'name' => $term->name,
            'slug' => $term->slug,
            'id' => $term->term_id,
        ];
    }


    // Get the 'Variants' related posts (ACF post_object / relationship field)
    public function getVariants(): array
    {
        return get_field('variants', $this->id()) ?: [];
    }

//     Return as collection of Entities (optional)
    public function getVariantEntities(): array
    {
        return array_map(fn ($id) => new Vehicle($id), $this->getVariants());
    }
}
