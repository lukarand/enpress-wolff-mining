@extends('layouts.app')
@section ('content')
  @include('blocks.other-hero', [
    'data' => (object)[
      'menu_image' => asset('dist/media/menus/menu1.png'),
      'menu_title' => 'Our Services',
      'menu_subtitle' => 'Automative and Innovative Solutions',
      'section_id' => 'services',
      'down_title' => 'see more services'
    ]
  ])
  {{-- @include('blocks.two-column-carousel', [
    'data' => (object)[
      'down_link' => 'services',
      'down_link_title' => 'See more services',
      'galleries' => [
        (object)[
          'featured_image' => asset('dist/media/services/bulk/bulk-01.jpg'),
          'before_type' => 'warning',
          'title' => '<h4 class="text-white">Semi-autonomous large-scale <span class="text-warning">Satellite bulk dozer push</span></h4>',
          'content' => '<p>Wolff Mining is recognised as the leading satellite bulk dozer push operator, with operations currently being expanded throughout Australia and internationally.</p>
                        '
        ],
        (object)[
          'featured_image' => asset('dist/media/services/bulk/bulk-02.jpg'),
          'before_type' => 'warning',
          'title' => '<h4 class="text-white">Semi-autonomous large-scale <span class="text-warning">Satellite bulk dozer push</span></h4>',
          'content' => '<p>Wolff Mining is recognised as the leading satellite bulk dozer push operator, with operations currently being expanded throughout Australia and internationally.</p>
                        '
        ],
        (object)[
          'featured_image' => asset('dist/media/services/bulk/bulk-03.jpg'),
          'before_type' => 'warning',
          'title' => '<h4 class="text-white">Semi-autonomous large-scale <span class="text-warning">Satellite bulk dozer push</span></h4>',
          'content' => '<p>Wolff Mining is recognised as the leading satellite bulk dozer push operator, with operations currently being expanded throughout Australia and internationally.</p>
                        '
        ]
      ]
    ],
    'options' => (object)[
      'reverse' => true,
      'background_gray' => true
    ]
  ]) --}}
  {{-- @include('blocks.two-column-content', [
    'data' => (object)[
      'left_content' => '
                          <p>Wolff Mining is recognised as the leading satellite bulk dozer push operator in the Bowen Basin, Central Queensland (CQ) area. As part of the National Group, we are currently expanding our operations throughout Australia and internationally.</p>
                          <p>Past and current bulk dozer push contracts have resulted in volumes up to 4,800,000 LCM’s a month and 36,000,000 LCM a year in the CQ area alone.</p>
                          <p>Over the past ten years, we have been operating major dozer push projects and have consistently exceeded our clients’ safety and production targets.</p>
                          <p>Wolff Mining has continued to lead the industry in large scale satellite bulk dozer push and continues to further refine and develop methodology. </p>
                          <p>The new methods have included trialling new technology and the ongoing analysis of input factors to achieve maximum productivity and cost effectiveness for clients.</p>
                        ',
      'right_content' => '
                          <h6>Current and Past Dozer Push Contracts</h6>
                          <ul>
                            <li>
                              <strong>BMA Blackwater Mine:</strong><br />
                              Completed (2007 - 2014) bulk dozer push contract of approx. 50M LCM.
                            </li>
                            <li>
                              <strong>Wesfarmers Curragh Mine:</strong><br />
                              Commenced 2008, approx. 65M LCM of bulk push and coal uncovering works utilising a fleet of CAT D11T Bulldozers and an Excavator. In 2013 Wolff Mining was awarded an additional contract for dozer push operations.
                            </li>
                            <li>
                              <strong>Yancoal Yarrabee Mine:</strong><br />
                              Completed (2011 - 2013) bulk dozer push contract of approx. 10M LCM.
                            </li>
                            <li>
                              <strong>Peabody Moorvale Mine:</strong><br />
                              Completed a bulk dozer push contract during 2016.
                            </li>
                            <li>
                              <strong>Peabody Coppabella Mine:</strong><br />
                              Wolff Mining commenced a three-year bulk dozer push contract during 2015.
                            </li>
                          </ul>
                         ',
      'down_link' => 'services',
      'down_link_title' => 'See more services'
    ],
    'options' => (object)[
      'before_image' => true
    ]
  ]) --}}
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
          'featured_image' => asset('dist/media/services/civil/Cat_24M_0I2A6022 copy.jpg'),
          'image_link' => url('/services/civil-earthworks'),
          'title' => 'Civil earthworks',
          'content' => '<p>Wolff Mining has extensive experience in mine site civil earthworks and provides a range of services in the sector.</p>',
          'target' => '_self'
        ],
        
      ]
    ]
  ])
@endsection
