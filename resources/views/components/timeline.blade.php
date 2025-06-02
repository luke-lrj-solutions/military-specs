@props([
    'startDate',
    'endDate' => null,
    'checkpoints' => [], // Array of dates like ['1975', '1995', '2010']
])

@php
  $currentYear = now()->year;
  $end = $endDate ?? $currentYear;

  // Build the timeline points: start, checkpoints, end, currentYear (if in range)
  $allPoints = collect([$startDate, $end])
      ->merge($checkpoints)
      ->when($currentYear >= $startDate && $currentYear <= $end, fn($points) => $points->push($currentYear))
      ->unique()
      ->sort()
      ->values(); // ensure reindexing

  // Progress % for horizontal layout
  $currentPercent = ( (intval($currentYear) - intval($startDate)) / (intval($end) - intval($startDate)) ) * 100;
@endphp

<div class="timeline">
  <div class="timeline__track">
    <div class="timeline__progress" style="width: {{ $currentPercent }}%;"></div>

    @foreach($allPoints as $index => $year)
      @php
        $percent = ( (intval($year) - intval($startDate)) / (intval($end) - intval($startDate)) ) * 100;
      @endphp
      <div class="timeline__plip @if($year == $currentYear) timeline__plip--current @endif"
           style="left: {{ $percent }}%"
           data-index="{{ $index }}">
        <span class="timeline__label">{{ $year }}</span>
        <span class="timeline__tooltip">Entered service in {{ $year }}</span> <!-- Example tooltip text -->

      </div>
    @endforeach
  </div>
</div>
