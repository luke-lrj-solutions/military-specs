{{-- resources/views/components/entity-table-detailed.blade.php --}}
<div class="table">
  @if ($heading)
    <h2 class="table__heading">{{ $heading }}</h2>
  @endif

  @if ($subheading)
    <h3 class="table__subheading">{{ $subheading }}</h3>
  @endif

  <div class="table-wrapper">
    <table>
      <thead>
      <tr>
        <th>Vehicle</th>
        <th></th>
        <th>Description</th>
        @foreach ($columns as $col)
          <th>{{ $col }}</th>
        @endforeach
      </tr>
      </thead>
      <tbody>
      @foreach ($rows as $row)
        <tr>
          {{-- Thumbnail & Name --}}
          <td class="table__thumb">        @if (!empty($row['thumbnail']))
              {!! $row['thumbnail'] !!}
            @endif</td>
          <td class="table__name">

            <a href="">{{ $row['name'] ?? '' }}</a>
          </td>

          {{-- Description --}}
          <td class="table__description">{{ $row['description'] ?? '' }}</td>

          {{-- Dynamic fields --}}
          @foreach ($row['fields'] ?? [] as $field)
            <td>{{ $field }}</td>
          @endforeach
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
