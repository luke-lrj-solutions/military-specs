@php
  $metaItems = $vehicle->getMetaFromACFTaxFieldMap([
    'manufacturers' => [
        'label' => 'Manufacturers',
        'span' => 1
    ],
    'designers' => [
        'label' => 'Designers',
        'span' => 1
    ],
    'country_of_origin' => [
        'label' => 'Countries of Origin',
        'span' => 2
    ],
  ]);
@endphp

<x-meta-list heading="Production" columns="3" :items="$metaItems" />

@php
  $timeline = get_field('production_timeline'); // Assuming this is your ACF repeater or array field
@endphp

<x-timeline
  :startDate="1970"
  :endDate="2050"
  :timeline="$timeline"
/>
