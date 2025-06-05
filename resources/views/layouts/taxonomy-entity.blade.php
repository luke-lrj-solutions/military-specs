<div class="container single-entity">
  <div class="entity-grid">
    <div class="entity-sidebar-container">
      <aside class="entity-sidebar">
        @include('partials.content-section-sidebar-thumbnail')

        <div class="entity-sidebar__meta meta-list">
          @include('partials.content-section-sidebar-meta')
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
        @php
          $term = get_queried_object();

          $custom_query = new WP_Query([
            'post_type' => ['vehicle', 'weapon', 'munition'],
            'posts_per_page' => -1,
            'tax_query' => [
              [
                'taxonomy' => $term->taxonomy,
                'field'    => 'term_id',
                'terms'    => $term->term_id,
              ]
            ],
          ]);
        @endphp

        @include('partials.table-loop-entity', ['query' => $custom_query])
      </div>
    </main>
  </div>
</div>
