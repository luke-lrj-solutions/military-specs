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
      <div class="title"><h1>{{ $entity->title() }}{!! ' ' . get_field('nickname') !!}</h1></div>

      <div class="entity-section">

        @includeIf("partials.routes.post-types.{$entity->postType()}", ['entity' => $entity])

      </div>
    </main>

  </div>
</div>
