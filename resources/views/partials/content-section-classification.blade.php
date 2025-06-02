
<x-information-table
  heading="Classification"
  subheading="Names"
  :columns="['Reference', 'Name']"
  :rows="[
          ['Nickname', 'Fighting Falcon'],
          ['Official', 'Block 17'],
        ]"
/>

{{--  Use Conditional for injecting type specific data. Comment accordingly for clear information. --}}
<x-information-table
  heading=""
  subheading="Vessels"
  :columns="['Name', 'Pennant/Hull No.', 'Commissioned', 'Decommissioned']"
  :rows="[
          ['Daring', 'D45', '2012', 'In Service'],
          ['Defiant', 'D46', '2014', 'In Service'],
          ['Determined', 'D47', '2016', 'In Service'],
        ]"
/>





@php
  $metaItems = [
    ['key' => 'Platform Type', 'value' => 'Fixed Wing'],
    ['key' => 'Family', 'value' => 'F-16 Fighting Falcon'],
  ];
@endphp

<x-meta-list
  heading=""
  subheading="Status"
  columns="3"
  :items="$metaItems"
/>


@php
  $metaItems = [
    ['key' => 'Country', 'value' => 'United States'],
    ['key' => 'Manufacturer', 'value' => 'Lockheed Martin'],
    ['key' => 'Manufacturer', 'value' => 'Lockheed Martin'],
    ['key' => 'Manufacturer', 'value' => 'Lockheed Martin'],
  ];
@endphp

<x-meta-list
  heading=""
  subheading="Origin"
  columns="3"
  :items="$metaItems"
/>


</div>

