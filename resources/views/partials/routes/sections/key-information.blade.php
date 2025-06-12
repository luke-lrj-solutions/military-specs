<h2>Key Information</h2>
@include('partials.content-sections.classification')
@include('partials.content-sections.names')
@include('partials.content-sections.lineage')

@if($vehicle->domainSlug() == 'naval')
  @include('partials.content-sections.vessels')
@endif




