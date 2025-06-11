@php
  $metaItems = $vehicle->getMetaFromTaxMap([
    'platform-type' => 'Platform',
    'family' => 'Family'
  ]);
@endphp

<x-meta-list
  heading=""
  columns="1"
  :items="$metaItems"
/>
