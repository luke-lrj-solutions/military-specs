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

@php
  $metaItems = $vehicle->getMetaFromTaxMap([
    'platform-type' => [
        'label' => 'Platform',
        'span' => 1
    ],
    'vehicle-type' => [
        'label' => 'Vehicle Type',
        'span' => 1
    ],
    'family' => [
        'label' => 'Family',
        'span' => 1
    ]
  ]);
@endphp

<x-meta-list
  heading="Roles"
  columns="3"
  :items="$metaItems"
/>
