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

      <div class="title"><h1>{{ get_the_title() }}{!! ' ' . get_field('nickname') !!}</h1></div>

      <div class="entity-section">

        @include('partials.content-section-classification')
        @include('partials.content-section-relations')
        @include('partials.content-section-armaments')
        @include('partials.content-section-systems')

      </div>
    </main>

  </div>
</div>
