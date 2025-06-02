
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
  heading="Armaments"
  subheading="Missiles"
  :columns="$columns"
  :rows="$rows"
/>


@php
  $columns = ['Bomb', '', 'Type', 'Munitions Stored', 'Type'];

  $rows = [
    [
      'thumbnail' => '<svg xmlns="http://www.w3.org/2000/svg" width="197" height="59" viewBox="0 0 197 59" fill="none">
<path d="M21.9759 4.89474L1.71271 4.89474V54.1053L21.9759 54.1053L26.318 57H43.6864L48.0285 54.1053L146.45 54.1053C154.651 54.1053 175.686 49.4737 194.213 30.9474C194.695 30.4649 195.371 29.2105 194.213 28.0526C175.686 9.52632 154.651 4.89474 146.45 4.89474L48.0285 4.89474L43.6864 2L26.318 2L21.9759 4.89474Z" stroke="black" stroke-width="3"/>
</svg>',
      'name' => 'Paveway 12',
      'description' => 'Unguided Bomb',
      'fields' => [2,  '250lb'],
    ],
    [
      'thumbnail' => '<svg xmlns="http://www.w3.org/2000/svg" width="331" height="62" viewBox="0 0 331 62" fill="none">
<path d="M4.19936 60H1.85254V2H4.19936L5.5404 4.01156H26.997L29.3439 6.02312L33.0317 4.68208H168.812L181.217 13.0636H186.246V10.3815L192.616 11.052H199.656V10.0462H200.997V11.052H203.009V10.3815H203.679V11.052H251.286V10.0462H260.673V11.052H265.702V18.763C266.261 20.5511 268.653 24.1942 273.748 24.4624H318.003V23.1214C318.45 22.7861 319.545 22.3168 320.35 23.1214V25.1329H328.731V36.8671H320.35V38.8786C319.545 39.6832 318.45 39.2139 318.003 38.8786V37.5376H273.748C268.653 37.8058 266.261 41.4489 265.702 43.237V50.948H260.673V51.9538H251.286V50.948H203.679V51.6185H203.009V50.948H200.997V51.9538H199.656V50.948H192.616L186.246 51.6185V48.9364H181.217L168.812 57.3179H33.0317L29.3439 55.9769L26.997 57.9884H5.5404L4.19936 60Z" stroke="black" stroke-width="3"/>
</svg>',
      'name' => 'Paveway 14',
      'description' => 'Unguided Bomb',
      'fields' => [2,  '500lb'],
    ],
  ];
@endphp

<x-entity-table-detailed
  heading=""
  subheading="Bombs"
  :columns="$columns"
  :rows="$rows"
/>
