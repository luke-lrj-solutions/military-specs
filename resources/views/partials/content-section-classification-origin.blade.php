@php
  $metaItems = [
    ['key' => 'Country', 'value' => 'United States', 'link' => ''],
    ['key' => 'Manufacturer', 'value' => 'Lockheed Martin', 'link' => ''],
    ['key' => 'Manufacturer', 'value' => 'Lockheed Martin', 'link' => ''],
    ['key' => 'Manufacturer', 'value' => 'Lockheed Martin', 'link' => ''],
  ];
@endphp

<x-meta-list
  heading="Origin"
  columns="3"
  :items="$metaItems"
/>


