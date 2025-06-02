{{-- resources/views/components/entity-table.blade.php --}}
<div class="table">

  @if($heading)
  <h3 class="table__subheading">{{ $heading }}</h3>
  @endif

  <div class="table-wrapper" x-data x-init="$el.classList.toggle('no-overflow', $el.scrollWidth <= $el.clientWidth)">
    <table>
      <thead>
      <tr>
        @foreach ($columns as $col)
          <th>{{ $col }}</th>
        @endforeach
        <th></th> {{-- Action column --}}
      </tr>

      </thead>
      <tbody>
      @foreach ($rows as $row)
        <tr>
          @foreach ($row as $cell)
            <td>{{ $cell }}</td>
          @endforeach


        </tr>

      @endforeach
      </tbody>
    </table>
  </div>
</div>
