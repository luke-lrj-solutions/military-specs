@php
  $rows = [];

  if (have_rows('names')) {
    while (have_rows('names')) {
      the_row();
      $reference = get_sub_field('reference');
      $value = get_sub_field('value');
      $rows[] = [$reference, $value];
    }
  }
@endphp
@if ($rows)
<x-information-table
  heading="Names"
  :columns="['Reference', 'Name']"
  :rows="$rows"
/>
@endif
