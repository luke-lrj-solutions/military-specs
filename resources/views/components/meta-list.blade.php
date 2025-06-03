{{-- resources/views/components/meta-list.blade.php --}}
<div class="meta-list-container">
  @if ($heading)
    <h3 class="table__subheading">{{ $heading }}</h3>
  @endif

    <div class="meta-list" style="grid-template-columns: repeat({{ $columns ?? '1' }}, 1fr)">
      @foreach ($items as $item)
        <div class="meta-item link-hover-section @if($item['span']) span-{{ $item['span'] }}" @endif" >
          <p class="key">{{ $item['key'] }}</p>
          <p class="taxonomy">
            @if ($item['link'])
            <a class="underline" href="{{ $item['link'] }}">{{ $item['value'] }}</a>
            @else
            {{ $item['value'] }}
            @endif
          </p>
        </div>
      @endforeach
    </div>
</div>
