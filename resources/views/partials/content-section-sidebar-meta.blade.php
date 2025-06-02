@php
  $metaItems = [
    ['key' => 'Country', 'value' => 'United States'],
    ['key' => 'Manufacturer', 'value' => 'Lockheed Martin'],
  ];
@endphp

<x-meta-list
  heading=""
  subheading=""
  :items="$metaItems"
/>
