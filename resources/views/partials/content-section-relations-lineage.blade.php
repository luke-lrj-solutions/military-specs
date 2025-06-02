@php
  $metaItems = [
    ['key' => 'Predecessor', 'value' => 'F-11 Starfighter', 'link' => ''],
    ['key' => 'Successor', 'value' => 'F-35 Lightening', 'link' => ''],
  ];
@endphp

<x-meta-list
  heading="Lineage"
  columns="2"
  :items="$metaItems"
/>

