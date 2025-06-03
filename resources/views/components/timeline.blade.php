@props([
    'startDate',
    'endDate' => null,
    'checkpoints' => [], // Optional array of extra dates
    'timeline' => [], // Your array of [year, label, tooltip]
])

@php
  $currentYear = now()->year;
  $end = $endDate ?? $currentYear;

  // Convert $timeline array into a keyed collection: [year => [label, tooltip]]
  $timelineData = collect($timeline)->keyBy('year');

  // Build combined years array: start, checkpoints, end, currentYear
  $allYears = collect([$startDate, $end])
      ->merge($checkpoints)
      ->when($currentYear >= $startDate && $currentYear <= $end, fn($points) => $points->push($currentYear))
      ->merge($timelineData->keys())
      ->unique()
      ->sort()
      ->values();

  // Progress % for horizontal layout
  $currentPercent = ( (intval($currentYear) - intval($startDate)) / (intval($end) - intval($startDate)) ) * 100;
@endphp

<div class="timeline">
  <div class="timeline__track">
    <div class="timeline__progress" style="width: {{ $currentPercent }}%;"></div>

    @foreach($allYears as $index => $year)
      @php
        $percent = ( (intval($year) - intval($startDate)) / (intval($end) - intval($startDate)) ) * 100;
        $data = $timelineData->get($year, ['label' => $year, 'tooltip' => null]);
        $label = $data['label'] ?? $year;
        $tooltip = $data['tooltip'] ?? null;

        // Determine position class
        if ($percent > 65) {
            $positionClass = 'timeline__plip--right';
        } elseif ($percent < 35) {
            $positionClass = 'timeline__plip--left';
        } else {
            $positionClass = 'timeline__plip--center';
        }
      @endphp

      <div class="timeline__plip {{ $positionClass }} @if($year == $currentYear) timeline__plip--current @endif"
           style="left: {{ $percent }}%; --plip-left: {{ $percent }}%;"
           data-index="{{ $index }}">
        <span class="timeline__label">{{$year}}<br>{{ $label }}</span>
        @if($tooltip)
          <span class="timeline__tooltip">{{ $tooltip }}</span>
        @endif
      </div>
    @endforeach
  </div>
</div>
