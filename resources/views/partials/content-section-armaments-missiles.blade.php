@php
  $columns = ['Missile', '', 'Type', 'Munitions Stored', 'Type'];

  $rows = [
    [
      'thumbnail' => '<svg xmlns="http://www.w3.org/2000/svg" width="289" height="62" viewBox="0 0 289 62" fill="#fff">
<path fill="#fff" d="M170.393 22.9939L253.301 23.3497C253.301 23.3497 267.535 23.3497 279.277 27.2638C284.258 28.9243 287.461 30.135 287.461 30.4663C287.461 30.837 284.97 31.9905 279.277 34.0245C267.535 38.2198 253.301 39.0061 253.301 39.0061H170.393L141.571 60H135.166V39.0061H33.0438L4.22168 54.6626H2.79837V39.0061H1.7309V22.9939H2.79837V6.9816H4.22168L33.0438 22.9939H96.737V21.9264H98.872V22.9939H135.166V2H141.571L170.393 22.9939Z" stroke="black" stroke-width="3"/>
</svg>',
      'name' => 'AIM-9 Sidewinder',
      'description' => 'Short Range Anti Air',
      'fields' => [2,  'SRAA'],
    ],
    [
      'thumbnail' => '<svg xmlns="http://www.w3.org/2000/svg" width="459" height="62" viewBox="0 0 459 62" fill="none">
<path d="M457.445 29.7815C457.866 33.2659 451.596 36.605 451.596 36.605L418.453 40.0168V38.5546H416.016V40.0168H399.445L376.537 44.4034L371.664 53.1765H354.117L360.453 40.0168H221.059H154.773H83.6131L57.2938 60H3.68036V40.0168H1.73077V21.0084H3.68036V2H57.2938L83.6131 21.0084H154.773V19.0588H165.008V21.0084H221.059H360.453L354.117 7.36134H371.664L376.537 16.1345L399.445 21.0084H416.016V22.4706H418.453V21.0084L451.596 24.4202C451.596 24.4202 457.073 26.7054 457.445 29.7815Z" stroke="black" stroke-width="3"/>
</svg>',
      'name' => 'AIM-7 Sparrow',
      'description' => 'Anti Air Missile',
      'fields' => [2,  'AAM'],
    ],
  ];
@endphp

<x-entity-table-detailed
  heading="Missiles"
  :columns="$columns"
  :rows="$rows"
/>
