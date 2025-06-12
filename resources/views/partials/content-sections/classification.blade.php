@php
  $metaItems = $vehicle->getMetaFromTaxMap([
    'platform-type' => [
        'label' => 'Platform',
        'span' => 1
    ],
    'vehicle-type' => [
        'label' => 'Vehicle Type',
        'span' => 1
    ],
    'family' => [
        'label' => 'Family',
        'span' => 1
    ]
  ]);
@endphp

<x-meta-list
  heading="Classification"
  columns="3"
  :items="$metaItems"
/>
