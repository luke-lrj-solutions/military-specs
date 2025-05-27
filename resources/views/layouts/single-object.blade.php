<div class="container single-entity">
  <div class="entity-grid">
    <div class="entity-sidebar-container">

      <aside class="entity-sidebar">

        @php
          $svg_file = get_field('svg_file');
        @endphp

        @if($svg_file)
          @php
            $svg_path = get_attached_file($svg_file['ID']);
            $svg_content = file_get_contents($svg_path);
               if ($svg_content) {
                // Add inline style width: 100% to <svg> tag
                $svg_content = preg_replace(
                  '/<svg([^>]*)>/',
                  '<svg$1 style="width:100%; height:auto">',
                  $svg_content,
                  1
                );
              }
          @endphp

          @if($svg_content)
            <div class="svg-entity">
              {!! $svg_content !!}
            </div>
          @endif
        @else
          <p>No SVG available for this vehicle.</p>
        @endif

        <div class="entity-sidebar__meta meta-list">
          <div class="meta-item">
            <p class="key">Country</p>
            <p>United States</p>
          </div>
          <div class="meta-item">
            <p class="key">Role</p>
            <p>Multirole Fighter</p>
          </div>


        </div>
      </aside>
    </div>

    <main class="entity-content">
      <h1>{{ get_the_title() }}</h1>
      <h2>{{ get_the_title() }}</h2>
      <h3>{{ get_the_title() }}</h3>
      <h4>{{ get_the_title() }}</h4>
      <h5>{{ get_the_title() }}</h5>
      <h6>{{ get_the_title() }}</h6>
      <p class="key">{{ get_the_title() }}</p>
      <p>{{ get_the_title() }}</p>



      @include('partials.content-single-vehicle')
    </main>

  </div>
</div>
