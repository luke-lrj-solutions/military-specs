@php
  $metaItems = [
    [
      'key' => 'Status',
      'value' => 'In Service',
      'link' => '',
      'span' => '2'
    ],
     [
      'key' => 'Duration (Current)',
      'value' => '27 Years',
      'link' => '',
      'span' => ''
    ],
    [
      'key' => 'Duration (Planned)',
      'value' => '33 Years',
      'link' => '',
      'span' => ''
    ],
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
  ];
@endphp

<x-meta-list
  heading="Service"
  columns="2"
  :items="$metaItems"
/>


@php
  $timeline = get_field('timeline'); // Assuming this is your ACF repeater or array field
@endphp

<x-timeline
  :startDate="1970"
  :endDate="2055"
  :timeline="$timeline"
/>
