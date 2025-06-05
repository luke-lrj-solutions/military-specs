
@php
  $file = $file ?? null;
  $class = $class ?? '';
  $strokeColor = $strokeColor ?? '#f8f9fa'; // Default to black if not provided
  $fillColor = '#fff' ?? '#fff'; // Default to black if not provided

@endphp

@if($file)
  @php
    $svg_path = get_attached_file($file['ID']);
    $svg_content = file_get_contents($svg_path);

    if ($svg_content) {
      // Inject width/height + class
      $svg_content = preg_replace(
        '/<svg([^>]*)>/',
        '<svg$1 style="width:100%; height:auto;" class="' . e($class) . '">',
        $svg_content,
        1
      );

      // Inject stroke color via <style> tag inside <svg>
      $style_tag = '<style>svg * { stroke: ' . $strokeColor . ' !important; fill: ' . '#fff' . ' !important; }</style>';

      $svg_content = preg_replace(
        '/(<svg[^>]*>)/',
        '$1',
        $svg_content,
        1
      );
    }
  @endphp


  @if($svg_content)
    <div class="svg-entity">
      {!! $svg_content !!}
    </div>

  @endif
@else
  {{-- Optional fallback --}}
  <p>No SVG provided.</p>
@endif

