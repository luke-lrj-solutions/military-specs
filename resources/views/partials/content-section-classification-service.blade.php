@php
  $metaItems = [
    ['key' => 'Status', 'value' => 'In Service', 'link' => ''],
  ];
@endphp

<x-meta-list
  heading="Service"
  columns="1"
  :items="$metaItems"
/>

@php
  $metaItems = [
    ['key' => 'Duration (Current)', 'value' => '27 Years', 'link' => ''],
    ['key' => 'Duration (Planned)', 'value' => '33 Years', 'link' => ''],

  ];
@endphp

<x-meta-list
  heading=""
  columns="2"
  :items="$metaItems"
/>


@php
  $metaItems = [
    ['key' => 'Entered Service', 'value' => '1998', 'link' => ''],
    ['key' => 'Planned Decommission', 'value' => '2030', 'link' => ''],
  ];
@endphp

<x-meta-list
  heading=""
  columns="2"
  :items="$metaItems"
/>

<x-timeline
  :startDate="1975"
  :endDate="2060"
  :checkpoints="['1980', '2000', '2010']"
/>
