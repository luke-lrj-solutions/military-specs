@php
  $svg_thumb = get_field('svg_file');
  $svg_side = get_field('side_profile');
  $svg_top = get_field('top_profile');
  $svg_front = get_field('front_profile');

@endphp

<x-svg-entity :file="$svg_thumb" class="svg-vehicle" />
{{--<x-svg-entity :file="$svg_side" class="svg-vehicle" />--}}
{{--<x-svg-entity :file="$svg_top" class="svg-vehicle" />--}}
{{--<x-svg-entity :file="$svg_front" class="svg-vehicle" />--}}
