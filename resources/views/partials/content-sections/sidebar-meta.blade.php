@php
  $metaItems = $vehicle->getMetaFromACFTaxFieldMap([
    'country_of_origin_primary' => [
        'label' => 'Origin',
        'span' => 1
    ],
    'manufacturers' => [
        'label' => 'Manufacturer',
        'span' => 1
    ],
  ]);
@endphp

<x-meta-list heading="" columns="1" :items="$metaItems" />

