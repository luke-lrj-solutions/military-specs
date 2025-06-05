{{-- resources/views/components/entity-table-detailed.blade.php --}}
<div class="table">
  @if ($heading)
    <h3 class="table__subheading">{{ $heading }}</h3>
  @endif

  <div class="table-wrapper">
    <table>
      <thead>
        <tr>
          @foreach ($columns as $col)
            <th>{{ $col }}</th>
          @endforeach
        </tr>
      </thead>
      <tbody>
      @foreach ($rows as $row)
        <tr class="entity">
          {{-- Thumbnail & Name --}}
          <td class="table__thumb">
            @if (!empty($row['thumbnail']))
              {!! $row['thumbnail'] !!}
            @endif
          </td>
          <td class="table__name link-hover-section entity">
            <a class="" href="{{ $row['link'] }}">{{ $row['name'] ?? '' }}</a>
          </td>

          {{-- Description --}}
          <td class="table__description">{{ $row['description'] ?? '' }}</td>

          {{-- Dynamic fields --}}
          @foreach ($row['fields'] ?? [] as $field)
            <td><a class="taxonomy" href=""></a>{{ $field }}</td>
          @endforeach
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
