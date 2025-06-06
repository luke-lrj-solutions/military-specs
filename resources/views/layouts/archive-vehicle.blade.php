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

      <div class="title"><h1>Vehicles</h1></div>

      <div class="entity-section">

        @php
          $custom_query = new WP_Query([
            'post_type' => 'vehicle',
            'posts_per_page' => -1,
          ]);
        @endphp

        @include('partials.table-loop-entity', ['query' => $custom_query])

      </div>
    </main>

  </div>
</div>
