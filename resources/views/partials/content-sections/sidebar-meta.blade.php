@php
  $metaItems = $entity->getMetaFromTaxMap([
    'country-of-origin' => [
      'label' => 'Country',
      'span' => 1
      ],
    'manufacturer' => [
      'label' => 'Manufacturer',
      'span' => 1
    ],
  ]);
@endphp

<x-meta-list
  heading=""
  columns="1"
  :items="$metaItems"
/>
