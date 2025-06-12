@php
  $metaItems = [
    [
      'key' => 'Status',
      'value' => 'In Service',
      'link' => '',
      'span' => '2'
    ],


        [
      'key' => 'Current Service Life',
      'value' => '27 Years',
      'link' => '',
      'span' => '1'
    ],
  ];
@endphp

<x-meta-list
  heading="Status"
  columns="3"
  :items="$metaItems"
/>

