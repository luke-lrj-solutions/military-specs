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
      @php
        $term = get_queried_object();
        $taxonomy = get_taxonomy($term->taxonomy);
        $heading = $taxonomy->labels->singular_name . ' – ' . $term->name;
      @endphp

      <div class="title">
        <h1>{{ $heading }}</h1>
      </div>

      <div class="entity-section">
        @include('partials.table-loop-entity', ['query' => $entities])
      </div>
    </main>
  </div>
</div>
