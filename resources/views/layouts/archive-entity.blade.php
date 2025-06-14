@extends('layouts.app')

@section('content')
  <div class="container single-entity">
    <div class="entity-grid">
      <div class="entity-sidebar-container">

        <aside class="entity-sidebar">
          {{-- Optional sidebar filters, nav, or featured system --}}
          <div class="entity-sidebar__meta meta-list">
            {{-- You could pull in taxonomy filters or stats here --}}
            <p>Browse vehicles, weapons, and munitions.</p>
          </div>
        </aside>

      </div>

      <main class="entity-content">
        <div class="title"><h1>All Systems</h1></div>

        <div class="entity-section">
          @php
            global $wp_query;
            $entities = array_map(
              [\App\Models\EntityFactory::class, 'make'],
              $wp_query->posts
            );
          @endphp

          @include('partials.table-loop-entity', ['entities' => $entities])
        </div>

        {!! get_the_posts_pagination(['screen_reader_text' => '']) !!}
      </main>
    </div>
  </div>
@endsection
