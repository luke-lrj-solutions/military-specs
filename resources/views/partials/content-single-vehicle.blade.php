<article @php(post_class())>
  <header>


{{--    @include('partials.entry-meta')--}}
  </header>

  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>

