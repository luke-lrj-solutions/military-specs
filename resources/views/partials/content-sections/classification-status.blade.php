@php
  $metaItems = [
    [
      'key' => 'Platform Type',
      'value' => 'Fixed Wing',
      'link' => 'https://www.military-specs.ddev.site/vehicles/f-16a',
      'span' => ''
    ],
    [
      'key' => 'Family',
      'value' => 'F-16 Fighting Falcon',
      'link' => 'https://www.military-specs.ddev.site/vehicles/f-16a',
      'span' => ''
    ],
  ];
@endphp

<x-meta-list
  heading="Status"
  columns="2"
  :items="$metaItems"
/>

