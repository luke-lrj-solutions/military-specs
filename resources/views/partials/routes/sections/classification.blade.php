<h2>Classification</h2>
@include('partials.content-sections.classification-names')
@if($vehicle->domainSlug() == 'naval')
  @include('partials.content-sections.classification-vessels')
@endif
@include('partials.content-sections.classification-service')
@include('partials.content-sections.classification-status')
@include('partials.content-sections.classification-production')



