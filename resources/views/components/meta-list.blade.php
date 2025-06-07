{{-- resources/views/components/meta-list.blade.php --}}
<div class="meta-list-container">
  @if ($heading)
    <h3 class="table__subheading">{{ $heading }}</h3>
  @endif

  <div class="meta-list" style="grid-template-columns: repeat({{ $columns ?? '1' }}, 1fr)">
    @foreach ($items as $item)
      <div class="meta-item link-hover-section @if (!empty($item['span'])) span-{{ $item['span'] }} @endif">
        <p class="key">{{ $item['key'] }}</p>
        <p class="taxonomy">
          @if (!empty($item['links']))
            @foreach ($item['links'] as $term)
              <x-tooltip :text="$term['name']" position="bottom">
                <a class="underline" href="{{ $term['link'] }}">{{ $term['name'] }}</a>
              </x-tooltip>
            @endforeach
          @elseif (!empty($item['link']))
            <x-tooltip :text="$item['value']" position="bottom">
              <a class="underline" href="{{ $item['link'] }}">{{ $item['value'] }}</a>
            </x-tooltip>
          @else
            {{ $item['value'] }}
          @endif
        </p>
      </div>
    @endforeach
  </div>
</div>
