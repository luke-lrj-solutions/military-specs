@php
  $metaItems = [
    [
      'key' => 'Country',
      'value' => 'United States',
      'link' => '',
      'span' => '3'
    ],
    [
      'key' => 'Manufacturer',
      'value' => 'Lockheed Martin',
      'link' => '',
      'span' => ''
    ],
    [
      'key' => 'Manufacturer',
      'value' => 'Lockheed Martin',
      'link' => '',
      'span' => ''
    ],
    [
      'key' => 'Manufacturer',
      'value' => 'Lockheed Martin',
      'link' => '',
      'span' => ''
    ],
  ];
@endphp

<x-meta-list
  heading="Origin"
  columns="3"
  :items="$metaItems"
/>


