@php
  $metaItems = $vehicle->getMetaFromACFPostMap([
    'predecessor' => [
        'label' => 'Predecessor',
        'span' => 1
    ],
    'successor' => [
        'label' => 'Successor',
        'span' => 1
    ]
  ]);
@endphp

<x-meta-list
  heading="Lineage"
  columns="2"
  :items="$metaItems"
/>
