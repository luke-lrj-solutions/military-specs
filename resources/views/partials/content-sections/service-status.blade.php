@php
  $metaItems = [
    [
      'key' => 'Entered Service',
      'value' => '1998',
      'link' => '',
      'span' => ''
    ],
       [
      'key' => 'Planned Decommission',
      'value' => '2030',
      'link' => '',
      'span' => ''
    ],
     [
      'key' => 'Expected Service Life',
      'value' => '33 Years',
      'link' => '',
      'span' => '1'
    ],
  ];
@endphp

<x-meta-list
  heading="Timeline"
  columns="3"
  :items="$metaItems"
/>


@php
  $timeline = get_field('timeline'); // Assuming this is your ACF repeater or array field
@endphp

@if($timeline)
  <x-timeline
    :timeline="$timeline"
  />
@endif
