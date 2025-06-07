@php
  $metaItems = $entity->getMetaFromTaxMap([
    'country-of-origin' => 'Country',
    'manufacturer' => 'Manufacturer',
  ]);
@endphp

<x-meta-list
  heading=""
  columns="1"
  :items="$metaItems"
/>
