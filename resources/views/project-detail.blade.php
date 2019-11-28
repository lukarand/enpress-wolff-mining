@extends('layouts.app')
@section ('content')
  @include('blocks.other-hero', [
    'data' => (object)[
      'menu_image' => asset('/dist/media/menus/menu2.png'),
      'menu_title' => 'Projects',
      'menu_subtitle' => 'ALWAYS EXCEEDING EXPECTATIONS',
      'section_id' => 'projects',
      'down_title' => 'see more projects'
    ]
  ])
  @include('blocks.two-column-carousel', [
    'data' => (object)[
      'galleries' => $galleries
    ],
    'options' => (object)[
      'fancybox_modal' => true
    ]
  ])

  @include('blocks.column-projects', [
    'data' => (object)[
      'projects' => [
        (object)[
          'featured_image' => asset('/dist/media/projects/saraji/project-saraji-01.jpg'),
          'featured_logo' => asset('/dist/media/logos/project-logos/logo-01.jpg'),
          'title' => 'Saraji mine',
          'sub_title' => 'BMA',
          'content' => '<p>On site since July 2014 with a project team of 11 removing top soil and undertaking ancillary earthworks.</p>',
          'action_link' => url('/projects/saraji-mine'),
          'target' => '_self',
          'selected' => $galleries
        ],
        (object)[
          'featured_image' => asset('/dist/media/projects/yarrabee/project-yarrabee-01.jpg'),
          'featured_logo' => asset('/dist/media/logos/project-logos/logo-02.jpg'),
          'title' => 'Yarrabee Mine',
          'sub_title' => 'Yancoal Australia',
          'content' => '<p>Wolff originally commenced on site at Yarrabee in 2010 to undertake Dozer push and rehabilitation works.</p>',
          'action_link' => url('/projects/yarrabee-mine'),
          'target' => '_self',
          'selected' => $galleries
        ],
        (object)[
          'featured_image' => asset('/dist/media/projects/acland/project-acland-01.jpg'),
          'featured_logo' => asset('/dist/media/logos/project-logos/logo-03.jpg'),
          'title' => 'Acland Mine',
          'sub_title' => 'New Hope',
          'content' => '<p>Late 2009 Wolff commenced a three year term performing general Dozer works at New Hope’s Acland mine.</p>',
          'action_link' => url('/projects/acland-mine'),
          'target' => '_self',
          'selected' => $galleries
        ],
        (object)[
          'featured_image' => asset('/dist/media/projects/blackwater/project-bma-01.jpg'),
          'featured_logo' => asset('/dist/media/logos/project-logos/logo-01.jpg'),
          'title' => 'Blackwater Mine',
          'sub_title' => 'BMA',
          'content' => '<p>On site since 2008 undertaking dozer push and back access road construction and maintenance.</p>',
          'action_link' => url('/projects/blackwater-mine'),
          'target' => '_self',
          'selected' => $galleries || null
        ],
        (object)[
          'featured_image' => asset('/dist/media/projects/bulga/project-bulga-01.jpg'),
          'featured_logo' => asset('/dist/media/logos/project-logos/logo-05.png'),
          'title' => 'Bulga Mine',
          'sub_title' => 'Glencore',
          'content' => '<p>August 2015 Wolff completed a 12 month blast hole drilling contract operating at Glencore’s Bulga mine.</p>',
          'action_link' => url('/projects/bulga-mine'),
          'target' => '_self',
          'selected' => $galleries
        ],
        (object)[
          'featured_image' => asset('/dist/media/projects/coppabella/project-coppabella-01.jpg'),
          'featured_logo' => asset('/dist/media/logos/project-logos/logo-06.png'),
          'title' => 'Coppabella Mine',
          'sub_title' => 'Peabody Energy',
          'content' => '<p>Originally on site 2012-13 with a workforce of 56 delivering pre strip services and the construction of haul roads.</p>',
          'action_link' => url('/projects/coppabella-mine'),
          'target' => '_self',
          'selected' => $galleries
        ],
        (object)[
          'featured_image' => asset('/dist/media/projects/curragh/project-curragh-01.jpg'),
          'featured_logo' => asset('/dist/media/logos/project-logos/logo-07.jpg'),
          'title' => 'Curragh Mine',
          'sub_title' => 'Coronado',
          'content' => '<p>2008 Wolff commenced Dozer push and coal uncovery works operating D11 Dozers, with a workforce ranging from 45 to 83.</p>',
          'action_link' => url('/projects/curragh-mine'),
          'target' => '_self',
          'selected' => $galleries
        ],
        (object)[
          'featured_image' => asset('/dist/media/projects/ensham/project-ensham01.jpg'),
          'featured_logo' => asset('/dist/media/logos/project-logos/logo-06.png'),
          'title' => 'Ensham Mine',
          'sub_title' => 'Ensham Resources',
          'content' => '<p>Wolff deployed 12 personnel to site in August 2014 to undertake Rehabilitation earthworks over a 12 month period.</p>',
          'action_link' => url('/projects/ensham-mine'),
          'target' => '_self',
          'selected' => $galleries
        ],
        (object)[
          'featured_image' => asset('/dist/media/projects/moorvale/project-moorvale-01.jpg'),
          'featured_logo' => asset('/dist/media/logos/project-logos/logo-06.png'),
          'title' => 'Moorvale Mine',
          'sub_title' => 'Peabody Energy',
          'content' => '<p>July 2015 Wolff commenced on site drilling services for three months operating a Sandvik DR460.</p>',
          'action_link' => url('/projects/moorvale-mine'),
          'target' => '_self',
          'selected' => $galleries
        ]
      ]
    ]
  ])
@endsection
