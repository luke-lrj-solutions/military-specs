@props([
    'checkpoints' => [],
    'timeline' => [],
])

@php
  $currentYear = now()->year;
  $end = $endDate ?? $currentYear;

  // Convert $timeline array into a keyed collection: [year => [label, tooltip]]
  $timelineData = collect($timeline)->keyBy('year');

  // Build combined years array: start, checkpoints, end, timeline years
   $allYears = collect()
      ->merge($checkpoints)
      ->merge(collect($timeline)->pluck('year'))
      ->unique()
      ->sort()
      ->values();

  $firstYear = $allYears->first();
  $lastYear = $allYears->last();

  // Progress bar calculation
// Set current progress only if current year is within range
if ($currentYear >= $firstYear && $currentYear <= $lastYear) {
    $currentPercent = ((intval($currentYear) - intval($firstYear)) / max(1, (intval($lastYear) - intval($firstYear)))) * 100;
} else {
    $currentPercent = 100;
}

$progressClamp = "clamp({$currentPercent}%, 0px , 100%)";

  // Minimum pixel gap between plips
  $minPixelGap = 75;
@endphp

<div class="timeline animate-on-visible">
  <div class="timeline__track">
    <div class="timeline__track--path"></div>

    <div class="timeline__progress" style="--progress-end: {{ $progressClamp }};"></div>

    @foreach($allYears as $index => $year)
      @php
        // Position percentage relative to data-driven start and end
        $percent = ((intval($year) - intval($firstYear)) / max(1, (intval($lastYear) - intval($firstYear)))) * 100;

        // Lookup year data if provided
        $data = $timelineData->get($year, ['label' => $year, 'tooltip' => null]);
        $label = $data['label'] ?? $year;
        $tooltip = $data['tooltip'] ?? null;

        // Determine plip label positioning class
        if ($percent > 65) {
            $positionClass = 'timeline__plip--right';
        } elseif ($percent < 35) {
            $positionClass = 'timeline__plip--left';
        } else {
            $positionClass = 'timeline__plip--center';
        }

        // Apply minimum pixel spacing
        $leftClamp = "clamp({$percent}%, " . ($minPixelGap * $index) . "px, 100%)";
      @endphp

      <div class="timeline__plip {{ $positionClass }} @if($year == $currentYear) timeline__plip--current @endif @if($tooltip) has-tooltip @endif"
           style="left: @if($year == $currentYear) {{ $percent }}% @else {{ $leftClamp }} @endif;; --plip-left: {{ $percent }}%;"
           data-index="{{ $index }}">
        @if($tooltip)
          <x-tooltip :text="$tooltip" position="top">
            <div class="plip-circle">
              <span class="pulse-ring"></span>
            </div>
            <span class="timeline__label">@if($year == $currentYear) <b>[{{$year}}]</b> @else <b>{{ $year }}</b>{{ $label }}@endif</span>
          </x-tooltip>
        @else
          <div class="plip-circle"></div>
          <span class="timeline__label">{{ $year }}<br>{{ $label }}</span>
        @endif
      </div>
    @endforeach

  </div>
</div>
