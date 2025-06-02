@php
  $metaItems = [
    ['key' => 'Platform Type', 'value' => 'Fixed Wing'],
    ['key' => 'Family', 'value' => 'F-16 Fighting Falcon'],
  ];
@endphp

<x-meta-list
  heading=""
  subheading="Status"
  columns="3"
  :items="$metaItems"
/>

