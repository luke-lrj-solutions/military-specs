<div class="container single-entity">
  <div class="entity-grid">
    <div class="entity-sidebar-container">

      <aside class="entity-sidebar">

        @include('partials.content-sections.sidebar-thumbnail')

        <div class="entity-sidebar__meta meta-list">

          @include('partials.content-sections.sidebar-meta')

        </div>
      </aside>
    </div>

    <main class="entity-content">

      <div class="title"><h1>Munitions</h1></div>

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
    </main>

  </div>
</div>
