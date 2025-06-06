@php
  $columns = ['Vehicle', '', 'Type', 'Origin', 'Status'];
  $rows = [];

  foreach ($entities as $entity) {
    $svg_thumb = get_field('svg_file', $entity->id());

    $svg_component = $svg_thumb
      ? view('components.svg-entity', [
          'file' => $svg_thumb,
          'attributes' => ['class' => 'svg-vehicle']
        ])->render()
      : '<div class="placeholder-svg">No SVG</div>';

    $rows[] = [
      'thumbnail' => $svg_component,
      'name' => $entity->title(),
      'link' => $entity->permalink(),
      'description' => get_field('type', $entity->id()) ?: 'Unknown Type',
      'fields' => [
        get_field('origin', $entity->id()) ?: 'Unknown Origin',
        get_field('status', $entity->id()) ?: 'Unknown Status',
      ],
    ];
  }
@endphp

<x-entity-table-detailed
  heading=""
  :columns="$columns"
  :rows="$rows"
/>
