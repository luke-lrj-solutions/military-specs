{{-- resources/views/components/meta-list.blade.php --}}
<div class="meta-list-container">
  @if ($heading)
    <h2 class="table__heading">{{ $heading }}</h2>
  @endif

  @if ($subheading)
    <h3 class="table__subheading">{{ $subheading }}</h3>
  @endif

    <div class="meta-list" style="grid-template-columns: repeat({{ $columns ?? '1' }}, 1fr)">
      @foreach ($items as $item)
        <div class="meta-item link-hover-section">
          <p class="key">{{ $item['key'] }}</p>
          <p class="taxonomy"><a class="underline" href="">{{ $item['value'] }}</a></p>
        </div>
      @endforeach
    </div>
</div>
