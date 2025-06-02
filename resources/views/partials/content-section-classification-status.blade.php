@php
  $metaItems = [
    ['key' => 'Platform Type', 'value' => 'Fixed Wing', 'link' => 'https://www.military-specs.ddev.site/vehicles/f-16a'],
    ['key' => 'Family', 'value' => 'F-16 Fighting Falcon', 'link' => 'https://www.military-specs.ddev.site/vehicles/f-16a'],
  ];
@endphp

<x-meta-list
  heading="Status"
  columns="3"
  :items="$metaItems"
/>

