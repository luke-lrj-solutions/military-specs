@php
  $metaItems = [
    ['key' => 'Predecessor', 'value' => 'F-11 Starfighter'],
    ['key' => 'Successor', 'value' => 'F-35 Lightening'],
  ];
@endphp

<x-meta-list
  heading=""
  subheading="Lineage"
  columns="2"
  :items="$metaItems"
/>

