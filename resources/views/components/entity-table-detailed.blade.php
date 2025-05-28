{{-- resources/views/components/entity-table-detailed.blade.php --}}
<div class="table">
  @if ($heading)
    <h2 class="table__heading">{{ $heading }}</h2>
  @endif
  @if($subheading)
    <h3 class="table__subheading">{{ $subheading }}</h3>
  @endif
  <table>
    <thead>
    <tr>
      <th>Name</th> {{-- Thumbnail column --}}
      <th></th>
      <th>Description</th>
      <th></th> {{-- Action column --}}
    </tr>
    </thead>
    <tbody>
    @foreach ($items as $item)
      <tr>
        <td class="table__name"><a href="#">{{ $item['name'] }}</a></td>
        <td class="table__thumb">
          @if ($item['thumbnail'])
            {!! $item['thumbnail'] !!}
          @endif
        </td>

        <td class="table__description">{{ $item['description'] ?? '' }}</td>
        <td class="table__action">
          <a href="{{ $item['link'] }}" class="table__button">View</a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>


