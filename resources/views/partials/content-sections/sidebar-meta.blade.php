@php
  $metaItems = $vehicle->getMetaFromACFTaxFieldMap([
    'vehicle_type' => [
        'label' => 'Role',
        'span' => 1
    ],
    'country_of_origin_primary' => [
        'label' => 'Origin',
        'span' => 1
    ],
  ]);
@endphp

<x-meta-list heading="" columns="1" :items="$metaItems" />

