@php
  $metaItems = [
    ['key' => 'Country', 'value' => 'United States'],
    ['key' => 'Manufacturer', 'value' => 'Lockheed Martin'],
    ['key' => 'Manufacturer', 'value' => 'Lockheed Martin'],
    ['key' => 'Manufacturer', 'value' => 'Lockheed Martin'],
  ];
@endphp

<x-meta-list
  heading=""
  subheading="Origin"
  columns="3"
  :items="$metaItems"
/>


