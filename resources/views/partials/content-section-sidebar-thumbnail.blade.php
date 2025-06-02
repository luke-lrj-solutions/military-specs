@php
  $svg_file = get_field('svg_file');
@endphp

<x-svg-entity :file="$svg_file" class="svg-vehicle" />
