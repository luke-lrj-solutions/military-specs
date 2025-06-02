@props([
    'startDate',
    'endDate' => null,
    'checkpoints' => [], // Array of dates like ['1975', '1995', '2010']
])

@php
  $currentYear = now()->year;
  $end = $endDate ?? $currentYear;
  $allPoints = collect([$startDate])->merge($checkpoints)->push($end)->sort();
  $currentPercent = ( (intval($currentYear) - intval($startDate)) / (intval($end) - intval($startDate)) ) * 100;

@endphp

<div class="timeline">
  <div class="timeline__track">
    <div class="timeline__progress" style="width: {{ $currentPercent }}%;">
      <div class="timeline__plip timeline__plip--current">
        <span class="timeline__label">{{ $currentYear }}</span>
      </div>
    </div>    @foreach($allPoints as $year)
      @php
        $percent = ( (intval($year) - intval($startDate)) / (intval($end) - intval($startDate)) ) * 100;
      @endphp
      <div class="timeline__plip @if($year == $currentYear) timeline__plip--current @endif" style="left: {{ $percent }}%">
        <span class="timeline__label">{{ $year }}</span>
      </div>
    @endforeach
  </div>
</div>
