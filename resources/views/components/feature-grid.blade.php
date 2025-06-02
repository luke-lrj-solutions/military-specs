<div class="feature-grid">
  @if ($heading)
    <h3 class="feature-grid__subheading">{{ $heading }}</h3>
  @endif

  <div class="feature-grid__grid" style="--grid-cols: {{ $columns ?? 'auto-fit' }}">
    @foreach ($items as $item)
      @php
        $icon = $item['icon'] ?? null;
        $label = $item['label'] ?? '';
      @endphp

      <div class="feature-grid__card">
        @if ($icon)
          <div class="feature-grid__icon">
            {!! $icon !!}
          </div>
        @endif
        <div class="feature-grid__label">
          <p>{{ $label }}</p>
        </div>
      </div>
    @endforeach
  </div>
</div>
