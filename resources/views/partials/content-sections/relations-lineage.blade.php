@php
  $metaItems = [
    [
      'key' => 'Predecessor',
      'value' => 'F-11 Starfighter',
      'link' => '',
      'span' => ''
    ],
    [
      'key' => 'Successor',
      'value' => 'F-35 Lightening',
      'link' => '',
      'span' => ''
    ],
  ];
@endphp

<x-meta-list
  heading="Lineage"
  columns="2"
  :items="$metaItems"
/>

