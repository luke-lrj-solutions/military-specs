@php
  $metaItems = $vehicle->getMetaFromTaxMap([
    'platform-type' => [
        'label' => 'Platform',
        'span' => 1
    ],
    'family' => [
        'label' => 'Family',
        'span' => 1
    ]
  ]);
@endphp

<x-meta-list
  heading="Status"
  columns="2"
  :items="$metaItems"
/>
