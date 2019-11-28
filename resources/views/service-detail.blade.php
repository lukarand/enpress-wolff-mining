@extends('layouts.app')
@section ('content')
  @include('blocks.other-hero', [
    'data' => (object)[
      'menu_image' => asset('/dist/media/menus/menu1.png'),
      'menu_title' => 'Our Services',
      'menu_subtitle' => 'Automative and Innovative Solutions'
    ]
  ])
  @foreach($galleries as $key => $gallery)
    @include('blocks.two-column-carousel', [
      'data' => (object)[
        'background_type' => 'white',
        'galleries' => [
          $gallery
        ],
        'down_link' => ($loop->last) ? 'services' : null,
        'down_link_title' => ($loop->last) ? 'see more services' : ''
      ],
      'options' => (object)[
        'reverse' => ($key % 2 == 1)
      ]
    ])
  @endforeach
  @include('blocks.column-services', [
    'data' => (object)[
      'services' => [
        (object)[
          'featured_image' => asset('dist/media/services/blast/blast-01.jpg'),
          'image_link' => url('/services/blast-hole-drilling'),
          'title' => 'Blast hole drilling',
          'content' => '<p>Wolff Mining can provide semi-autonomous CAT MD6420B Blast Hole Drilling Rigs and facilitate high quality blast hole drilling services.</p>',
          'target' => '_self'
        ],
        (object)[
          'featured_image' => asset('dist/media/services/automated/automated-01.jpg'),
          'image_link' => url('/services/automated-equipment'),
          'title' => 'Automated equipment',
          'content' => '<p>Wolff Mining works with Caterpillar and Hastings Deering to implement and optimise Semi-Autonomous Tractor System (SATS) technology.</p>',
          'target' => '_self'
        ],
        (object)[
          'featured_image' => asset('dist/media/services/bulk/bulk-01.jpg'),
          'image_link' => url('/services/satellite-bulk-dozer-push'),
          'title' => 'Satellite bulk dozer push',
          'content' => '<p>Wolff Mining is recognised as the leading satellite bulk dozer push operator,  with operations throughout Australia and internationally.</p>',
          'target' => '_self'
        ],
        (object)[
          'featured_image' => asset('dist/media/services/clearing/r0_185_3620_2413_w1200_h678_fmax.jpg'),
          'image_link' => url('/services/rehabilitation-works'),
          'title' => 'Rehabilitation works',
          'content' => '<p>Wolff Mining has extensive site clearing and rehabilitation services, designed to create a sanctuary for wildlife and plants.</p>',
          'target' => '_self'
        ],
        (object)[
          'featured_image' => asset('dist/media/services/fleets/fleets-01.jpg'),
          'image_link' => url('/services/pre-strip-fleets'),
          'title' => 'Pre strip fleets',
          'content' => '<p>Wolff Mining’s experience in the Black Coal industry enables the company to provide innovative and cost-effective solutions.</p>',
          'target' => '_self'
        ],
        (object)[
          'featured_image' => asset('dist/media/services/civil/Cat_24M_0I2A6022%20copy.jpg'),
          'image_link' => url('/services/civil-earthworks'),
          'title' => 'Civil earthworks',
          'content' => '<p>Wolff Mining has extensive experience in mine site civil earthworks and provides a range of services in the sector.</p>',
          'target' => '_self'
        ],
        
      ]
    ]
  ])
@endsection
