@php
  $columns = ['Vehicle', '', 'Type', 'Origin', 'Status'];
  $rows = [];

  // Loop through query var
  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();

        $svg_thumb = get_field('svg_file');
        $svg_component = $svg_thumb ? view('components.svg-entity', ['file' => $svg_thumb, 'attributes' => ['class' => 'svg-vehicle']])->render() : '<div class="placeholder-svg">No SVG</div>';

        $rows[] = [
          'thumbnail' => $svg_component,
          'name' => get_the_title(),
          'link' => get_the_permalink(),
          'description' => get_field('type') ?: 'Unknown Type',
          'fields' => [
            get_field('origin') ?: 'Unknown Origin',
            get_field('status') ?: 'Unknown Status',
          ],
        ];
    }
    wp_reset_postdata();
  }
@endphp

<x-entity-table-detailed
  heading=""
  :columns="$columns"
  :rows="$rows"
/>
