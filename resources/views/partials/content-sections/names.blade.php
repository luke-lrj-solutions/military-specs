@php
  $rows = $entity->getNames();
@endphp

@if ($rows)
  <x-information-table
    heading="Names"
    :columns="['Reference', 'Name']"
    :rows="$rows"
  />
@endif
