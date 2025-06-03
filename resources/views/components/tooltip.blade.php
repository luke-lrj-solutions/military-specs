@props([
  'text',
  'position' => 'top',
])

<span class="tooltip-container tooltip--{{ $position }}">
  {{ $slot }}
  <span class="tooltip-text">{{ $text }}</span>
</span>
