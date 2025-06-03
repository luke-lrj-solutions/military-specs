@php
  $metaItems = [
    ['key' => 'Country', 'value' => 'United States', 'link' => '', 'span' => '2'],
    ['key' => 'Manufacturer', 'value' => 'Lockheed Martin', 'link' => '', 'span' => '2'],
  ];
@endphp

<x-meta-list
  heading=""
  columns="1"
  :items="$metaItems"
/>
