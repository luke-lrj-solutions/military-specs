@php
  $metaItems = array_filter([
    $entity->buildMetaItem('Country', 'country-of-origin'),
    $entity->buildMetaItem('Manufacturer', 'manufacturer'),
  ]);
@endphp

<x-meta-list
  heading=""
  columns="1"
  :items="$metaItems"
/>
