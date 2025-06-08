@php
  $columns = ['Vehicle', '', 'Type', 'Origin', 'Status'];

  $rows = array_map(function ($entity) {
    return [
      'thumbnail' => $entity->getSvgThumb(),
      'name' => $entity->title(),
      'link' => $entity->permalink(),
      'description' => $entity->getTypeLabel(),
      'fields' => [
        $entity->getOrigin(),
        $entity->getStatus(),
      ],
    ];
  }, $entities);
@endphp

<x-entity-table-detailed
  heading=""
  :columns="$columns"
  :rows="$rows"
/>
