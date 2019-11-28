@extends('layouts.app')
@section ('content')
  @include('blocks.other-hero', [
    'data' => (object)[
      'menu_image' => asset('/dist/media/menus/menu3.png'),
      'menu_title' => 'Our People',
      'menu_subtitle' => 'Talented and diverse workforce'
    ]
  ])
  @include('blocks.two-column-carousel', [
    'data' => (object)[
      'background_type' => 'white',
      'down_link' => 'values',
      'down_link_title' => 'See our values',
      'galleries' => [
        (object)[
          'featured_image' => asset('/dist/media/galleries/gallery-05.png'),
          'video_url' => url('https://www.youtube.com/embed/3DhHwXNOwCw'),
          'before_type' => 'warning',
          'title' => '<h5 class="text-primary">Wolff employees treat each other and our stakeholders with <span class="text-warning">honesty and respect.</span></h5>',
          'content' => '<p>Wolff is proud of its professional team. Staff are recruited based on their work ethic, skills and experience, and their understanding and appreciation of Wolff’s values.</p>
                        <p>An ethical approach to hard work and loyalty underpins Wolff’s culture and is apparent in its performance.</p>
                        <h5 class="text-primary">HSE Commitment</h5>
                        <p>Wolff is committed to maintaining its focus on Health, Safety and the Environment. With this approach Wolff has remained LTI free since 2012.</p>
                        ',
          'action_link' => url('https://nationalgroup.recruitmenthub.com.au/Vacancies/'),
          'action_type' => 'info',
          'action_title' => 'VIEW CAREER OPPORTUNITIES',
          'action_target' => '_blank'
        ]
      ]
    ],
    'options' => (object)[
      'reverse' => true
    ]
  ])
  @include('blocks.column-values', [
    'data' => (object)[
      'title' => 'our values',
      'content' => '<p>Wolff’s Values are a key component of its Culture.  They underpin the way we interact with internal and external Stakeholders.</p>
                    <p>Wolff asks its employees to be mindful of these core Values in everything they do.</p>',
      'values' => [
        (object)[
          'icon_name' => 'icon-safety',
          'title' => 'Safety',
          'animation' => true,
          'content' => "Follow procedures, don't take shortcuts.Safety saves lives."
        ],
        (object)[
          'icon_name' => 'icon-relationships',
          'title' => 'Relationships',
          'animation' => true,
          'content' => 'Value them & keep working at them.'
        ],
        (object)[
          'icon_name' => 'icon-resilience',
          'title' => 'Resilience',
          'animation' => true,
          'content' => 'Remain positive, be innovative, work closely together with our peers.'
        ],
        (object)[
          'icon_name' => 'icon-transparency',
          'title' => 'Transparency',
          'animation' => true,
          'content' => 'Take pride in your work. <br />Be professional.'
        ],
        (object)[
          'icon_name' => 'icon-peoplefamily',
          'title' => 'People and family',
          'animation' => true,
          'content' => 'Go home safely. Exercise work life balance. Go the extra mile with people.'
        ],
        (object)[
          'icon_name' => 'icon-accountability',
          'title' => 'Accountability',
          'animation' => true,
          'content' => "Take ownership - whether you're right or wrong."
        ],
        (object)[
          'icon_name' => 'icon-quality',
          'title' => 'Quality Service',
          'animation' => true,
          'content' => 'Integrity, do the job well.  Personal customer service is what our reputation is based on.'
        ],
        (object)[
          'icon_name' => 'icon-integrity',
          'title' => 'Integrity',
          'animation' => true,
          'content' => "Do what we say we're going to do. Be Open & honest."
        ],
        (object)[
          'icon_name' => 'icon-fiscal',
          'animation' => true,
          'title' => 'Fiscal Responsibility',
          'content' => 'Attention to detail. <br /> Planning & preparation.'
        ]
      ]
    ]
  ])
  @include('blocks.two-column-carousel', [
    'data' => (object)[
      'background_type' => 'white',
      'galleries' => [
        (object)[
          'featured_image' => asset('/dist/media/galleries/gallery-01.png'),
          'before_type' => 'warning',
          'title' => '<h4 class="text-primary">Quality Management</h4>',
          'content' => "<p>Wolff operates under a Quality Management System compliant to ISO 9001:2015 standard.</p>
                        <p>Wolff is committed to quality control and continuous improvement in order to ensure the delivery of a quality service to its clients. Wolff aims to maximise its clients returns by providing services that conform to specifications, legal and contractual obligations and applicable industry standards.</p>
                        <p>Wolff's operations incorporate analysis of customer satisfaction, control of quality during project delivery and monitoring client satisfaction levels during and post project completion. Wolff aims to ensure that both immediate stakeholders and end users are satisfied with all works performed.</p>
                        <p>The full support of our employees, suppliers and subcontractors is expected in actively pursuing quality assurance for our clients.</p>
                        <p>Wolff Mining's Quality Management System is certified by SciQual </p>
                        "
        ],
        (object)[
          'featured_image' => asset('/dist/media/galleries/gallery-02.png'),
          'before_type' => 'warning',
          'title' => '<h4 class="text-primary">Quality Management</h4>',
          'content' => "<p>Wolff operates under a Quality Management System compliant to ISO 9001:2015 standard.</p>
                        <p>Wolff is committed to quality control and continuous improvement in order to ensure the delivery of a quality service to its clients. Wolff aims to maximise its clients returns by providing services that conform to specifications, legal and contractual obligations and applicable industry standards.</p>
                        <p>Wolff's operations incorporate analysis of customer satisfaction, control of quality during project delivery and monitoring client satisfaction levels during and post project completion. Wolff aims to ensure that both immediate stakeholders and end users are satisfied with all works performed.</p>
                        <p>The full support of our employees, suppliers and subcontractors is expected in actively pursuing quality assurance for our clients.</p>
                        <p>Wolff Mining's Quality Management System is certified by SciQual </p>
                        "
        ]
      ]
    ]
  ])
  {{-- @include('blocks.two-column-carousel', [
    'data' => (object)[
      'background_type' => 'secondary',
      'sub_image' => asset('/dist/media/galleries/gallery-sub-03.png'),
      'galleries' => [
        (object)[
          'featured_image' => asset('/dist/media/galleries/gallery-05.png'),
          'video_url' => url('https://www.youtube.com/embed/3DhHwXNOwCw'),
          'before_type' => 'gray',
          'title' => '<h4 class="text-white">CAREERS</h4>',
          'content' => '
                        <p>Wolff promotes equal employment opportunities and expects its employees to adhere to its employee code of conduct and all other policies within its quality management system.</p>
                        <p>Wolff welcomes expressions of interest from all applicants and appreciates experience in the following areas –</p>
                        <ul class="text-warning">
                          <li>
                            <strong>Heavy equipment operations</strong>
                          </li>
                          <li>
                            <strong>Maintenance and diesel fitting</strong>
                          </li>
                          <li>
                            <strong>Project management and Administration</strong>
                          </li>
                          <li>
                            <strong>Safety and Training</strong>
                          </li>
                        </ul>
                        <p>Employees demonstrating alignment with Wolff’s culture and adherence to Wolff’s values are, when appropriate, recognised and rewarded.</p>
                        ',
          'action_link' => url('https://nationalgroup.recruitmenthub.com.au/Vacancies/'),
          'action_type' => 'info',
          'action_title' => 'VIEW CAREER OPPORTUNITIES',
          'action_target' => '_blank'
        ]
      ]
    ],
    'options' => (object)[
      'reverse' => true
    ]
  ]) --}}
@endsection