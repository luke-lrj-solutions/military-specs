{{--
  Template Name: Systems Overview
--}}

@extends('layouts.app')

@section('content')
  <div class="container single-entity">
    <div class="entity-grid">
      <div class="entity-sidebar-container">
        <aside class="entity-sidebar">
          @include('partials.content-sections.sidebar-thumbnail')

          <div class="entity-sidebar__meta meta-list">
            @if (isset($entity))
              @include('partials.content-sections.sidebar-meta')
            @endif
          </div>
        </aside>
      </div>

      <main class="entity-content">
        <div class="title"><h1>All Systems</h1></div>

        <div class="entity-section">
          @php
              $query = new WP_Query([
              'post_type' => ['vehicle', 'weapon', 'munition'],
              'posts_per_page' => -1,
            ]);

            $entities = array_map(
              [\App\Models\EntityFactory::class, 'make'],
              $query->posts
            );
          @endphp

          @include('partials.table-loop-entity', ['entities' => $entities])
        </div>
      </main>
    </div>
  </div>
@endsection
