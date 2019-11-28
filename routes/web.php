<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', [
        'title' => 'Wolff Mining'
    ]);
});

Route::get('/services', function () {
    return view('services', [
        'title' => 'Wolff Services'
    ]);
});

Route::get('/projects', function () {
    return view('projects', [
        'title' => 'Wolff Projects',
        'galleries' => null
    ]);
});

Route::get('/our-people', function () {
    return view('our-people', [
        'title' => 'Wolff Our People'
    ]);
});

Route::get('/contact', function() {
    return view('contact', [
        'title' => 'Wolff Contact'
    ]);
});

Route::get('/projects/{slug}', function($slug) {
    $projects = [
        (object)[
            'slug' => 'saraji-mine',
            'title' => 'Saraji Mine',
            'sub_title' => 'BMA',
            'content' => 'On site since July 2014 with a project team of 11 removing top soil and undertaking ancillary earthworks.',
            'featured_image' => asset('/dist/media/projects/saraji/project-saraji-01.jpg'),
            'galleries' => [
                (object)[
                    'featured_image' => asset('/dist/media/projects/saraji/project-saraji-01.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-01.jpg'),
                    'title' => '<h4 class="text-primary">Saraji mine</h4>',
                    'content' => '<p>On site since July 2014 with a project team of 11 removing top soil and undertaking ancillary earthworks.</p><p>Contract term extended for 12 months from July 2015.</p>'
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/saraji/project-saraji-02.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-01.jpg'),
                    'title' => '<h4 class="text-primary">Saraji mine</h4>',
                    'content' => '<p>On site since July 2014 with a project team of 11 removing top soil and undertaking ancillary earthworks.</p><p>Contract term extended for 12 months from July 2015.</p>'
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/saraji/project-saraji-03.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-01.jpg'),
                    'title' => '<h4 class="text-primary">Saraji mine</h4>',
                    'content' => '<p>On site since July 2014 with a project team of 11 removing top soil and undertaking ancillary earthworks.</p><p>Contract term extended for 12 months from July 2015.</p>'
                ],
            ]
        ],
        (object)[
            'slug' => 'yarrabee-mine',
            'title' => 'Yarrabee Mine',
            'sub_title' => 'Yancoal Australia',
            'content' => 'Wolff originally commenced on site at Yarrabee in 2010 to undertake Dozer push and rehabilitation works.',
            'featured_image' => asset('/dist/media/projects/yarrabee/project-yarrabee-01.jpg'),
            'galleries' => [
                (object)[
                    'featured_image' => asset('/dist/media/projects/yarrabee/project-yarrabee-01.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-02.jpg'),
                    'title' => '<h4 class="text-primary">Yarrabee Mine</h4>',
                    'content' => '<p>Wolff originally commenced on site at Yarrabee in 2010 to undertake Dozer push and rehabilitation works.</p><p>July 2014 Wolff was back on site operating 4 D11 Dozers completing bulk Dozer push, drill prep, and day works as requested.</p>'
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/yarrabee/project-yarrabee-02.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-02.jpg'),
                    'title' => '<h4 class="text-primary">Yarrabee Mine</h4>',
                    'content' => '<p>Wolff originally commenced on site at Yarrabee in 2010 to undertake Dozer push and rehabilitation works.</p><p>July 2014 Wolff was back on site operating 4 D11 Dozers completing bulk Dozer push, drill prep, and day works as requested.</p>'
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/yarrabee/project-yarrabee-03.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-02.jpg'),
                    'title' => '<h4 class="text-primary">Yarrabee Mine</h4>',
                    'content' => '<p>Wolff originally commenced on site at Yarrabee in 2010 to undertake Dozer push and rehabilitation works.</p><p>July 2014 Wolff was back on site operating 4 D11 Dozers completing bulk Dozer push, drill prep, and day works as requested.</p>'
                ],
            ]
        ],
        (object)[
            'slug' => 'acland-mine',
            'title' => 'Acland Mine',
            'sub_title' => 'New hope',
            'content' => 'Late 2009 Wolff commenced a three year term performing general Dozer works at New Hope’s Acland mine.',
            'featured_image' => asset('/dist/media/projects/acland/project-acland-01.jpg'),
            'galleries' => [
                (object)[
                    'featured_image' => asset('/dist/media/projects/acland/project-acland-01.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-03.jpg'),
                    'title' => '<h4 class="text-primary">Acland Mine</h4>',
                    'content' => '<p>Late 2009 Wolff commenced a three year term performing general Dozer works at New Hope’s Acland mine.</p>'
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/acland/project-acland-02.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-03.jpg'),
                    'title' => '<h4 class="text-primary">Acland Mine</h4>',
                    'content' => '<p>Late 2009 Wolff commenced a three year term performing general Dozer works at New Hope’s Acland mine.</p>'
                ]
            ]
        ],
        (object)[
            'slug' => 'blackwater-mine',
            'title' => 'BlackWater Mine',
            'sub_title' => 'BMA',
            'content' => 'Wolff mining was on site from 2008 undertaking dozer push and back access road construction and maintenance.',
            'featured_image' => asset('/dist/media/projects/blackwater/project-bma-01.jpg'),
            'galleries' => [
                (object)[
                    'featured_image' => asset('/dist/media/projects/blackwater/project-bma-01.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-01.jpg'),
                    'title' => '<h4 class="text-primary">BlackWater Mine</h4>',
                    'content' => "
                                <p>On site since 2008 undertaking dozer push and back access road construction and maintenance. Approximately 10 million BCM per year was moved with a workforce ramping up and down from 41 to 90. The current Back Access road project team comprises 19 including off site administrative support.</p>
                                <p>During this period, at BMA's request, Wolff has completed a series of smaller projects under different arrangements.</p>
                                "
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/blackwater/project-bma-02.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-01.jpg'),
                    'title' => '<h4 class="text-primary">BlackWater Mine</h4>',
                    'content' => "
                                <p>On site since 2008 undertaking dozer push and back access road construction and maintenance. Approximately 10 million BCM per year was moved with a workforce ramping up and down from 41 to 90. The current Back Access road project team comprises 19 including off site administrative support.</p>
                                <p>During this period, at BMA's request, Wolff has completed a series of smaller projects under different arrangements.</p>
                                "
                ],
                (object)[
                    'before_type' => 'warning',
                    'featured_image' => asset('/dist/media/projects/blackwater/project-bma-03.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-01.jpg'),
                    'title' => '<h4 class="text-primary">BlackWater Mine</h4>',
                    'content' => "
                                <p>On site since 2008 undertaking dozer push and back access road construction and maintenance. Approximately 10 million BCM per year was moved with a workforce ramping up and down from 41 to 90. The current Back Access road project team comprises 19 including off site administrative support.</p>
                                <p>During this period, at BMA's request, Wolff has completed a series of smaller projects under different arrangements.</p>
                                "
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/blackwater/project-bma-04.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-01.jpg'),
                    'title' => '<h4 class="text-primary">BlackWater Mine</h4>',
                    'content' => "
                                <p>On site since 2008 undertaking dozer push and back access road construction and maintenance. Approximately 10 million BCM per year was moved with a workforce ramping up and down from 41 to 90. The current Back Access road project team comprises 19 including off site administrative support.</p>
                                <p>During this period, at BMA's request, Wolff has completed a series of smaller projects under different arrangements.</p>
                                "
                ],
            ]
        ],
        (object)[
            'slug' => 'bulga-mine',
            'title' => 'Bulga Mine',
            'sub_title' => 'Glencore',
            'content' => 'August 2015 Wolff completed a 12 month blast hole drilling services contract operating 4 Terex drills at Glencore’s Bulga mine.',
            'featured_image' => asset('/dist/media/projects/bulga/project-bulga-01.jpg'),
            'galleries' => [
                (object)[
                    'featured_image' => asset('/dist/media/projects/bulga/project-bulga-01.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-05.png'),
                    'title' => '<h4 class="text-primary">Bulga Mine</h4>',
                    'content' => '<p>August 2015 Wolff completed a 12 month blast hole drilling services contract operating 4 Terex drills at Glencore’s Bulga mine.</p>'
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/bulga/project-bulga-02.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-05.png'),
                    'title' => '<h4 class="text-primary">Bulga Mine</h4>',
                    'content' => '<p>August 2015 Wolff completed a 12 month blast hole drilling services contract operating 4 Terex drills at Glencore’s Bulga mine.</p>'
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/bulga/project-bulga-03.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-05.png'),
                    'title' => '<h4 class="text-primary">Bulga Mine</h4>',
                    'content' => '<p>August 2015 Wolff completed a 12 month blast hole drilling services contract operating 4 Terex drills at Glencore’s Bulga mine.</p>'
                ]
            ]
        ],
        (object)[
            'slug' => 'coppabella-mine',
            'title' => 'Coppabella Mine',
            'sub_title' => 'Peabody energey',
            'content' => 'Originally on site 2012-13 with a workforce of 56 delivering pre strip services and the construction of haul roads.',
            'featured_image' => asset('/dist/media/projects/coppabella/project-coppabella-01.jpg'),
            'galleries' => [
                (object)[
                    'featured_image' => asset('/dist/media/projects/coppabella/project-coppabella-01.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-06.png'),
                    'title' => '<h4 class="text-primary">Coppabella Mine</h4>',
                    'content' => '<p>Originally on site 2012-13 with a workforce of 56 delivering Pre strip services and the construction of haul roads utilising a Hitachi 3600-6 excavator, D11 Dozers, dump trucks and graders. Over 8 million BCM was moved in less than 12 months.</p>
                                <p>From April 2015 Wolff has been delivering Dozer push services with 4 crews of 3 Operators supported by management and administration based in Toowoomba.</p>
                                <p>Wolff recently acquired a 3 year Blast Hole Drilling contract starting February 2016 with Peabody. For the project we chose a semi-autonomous CAT MD6420B Drill Rig 13m mast with a hole diameter of 229mm to 311mm capable of drilling up to 75m in depth.</p>'
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/coppabella/project-coppabella-02.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-06.png'),
                    'title' => '<h4 class="text-primary">Coppabella Mine</h4>',
                    'content' => '<p>Originally on site 2012-13 with a workforce of 56 delivering Pre strip services and the construction of haul roads utilising a Hitachi 3600-6 excavator, D11 Dozers, dump trucks and graders. Over 8 million BCM was moved in less than 12 months.</p>
                                <p>From April 2015 Wolff has been delivering Dozer push services with 4 crews of 3 Operators supported by management and administration based in Toowoomba.</p>
                                <p>Wolff recently acquired a 3 year Blast Hole Drilling contract starting February 2016 with Peabody. For the project we chose a semi-autonomous CAT MD6420B Drill Rig 13m mast with a hole diameter of 229mm to 311mm capable of drilling up to 75m in depth.</p>'
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/coppabella/project-coppabella-03.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-06.png'),
                    'title' => '<h4 class="text-primary">Coppabella Mine</h4>',
                    'content' => '<p>Originally on site 2012-13 with a workforce of 56 delivering Pre strip services and the construction of haul roads utilising a Hitachi 3600-6 excavator, D11 Dozers, dump trucks and graders. Over 8 million BCM was moved in less than 12 months.</p>
                                <p>From April 2015 Wolff has been delivering Dozer push services with 4 crews of 3 Operators supported by management and administration based in Toowoomba.</p>
                                <p>Wolff recently acquired a 3 year Blast Hole Drilling contract starting February 2016 with Peabody. For the project we chose a semi-autonomous CAT MD6420B Drill Rig 13m mast with a hole diameter of 229mm to 311mm capable of drilling up to 75m in depth.</p>'
                ],
            ]
        ],
        (object)[
            'slug' => 'curragh-mine',
            'title' => 'Curragh Mine',
            'sub_title' => 'coronado',
            'content' => '2008 Wolff commenced Dozer push and coal uncovery works operating D11 Dozers with a workforce ranging from 45 to 83.',
            'featured_image' => asset('/dist/media/projects/curragh/project-curragh-01.jpg'),
            'galleries' => [
                (object)[
                    'featured_image' => asset('/dist/media/projects/curragh/project-curragh-01.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-07.jpg'),
                    'title' => '<h4 class="text-primary">Curragh Mine</h4>',
                    'content' => '<p>2008 Wolff commenced Dozer push and coal uncovery works operating D11 Dozers. Throughout the life of the Project the workforce has ranged from 68 to 83 to 45 to meet requirements.</p>
                                <p>Wolff has also undertaken rehabilitation work during its tenure at Curragh and more recently commenced a new contract to perform bulk push Dozer operations to expose coal, prepare dragline benches, strip waste, establish high wall ramps, drill bench preparation, ancillary tasks and bush clearing.</p>
                                '
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/curragh/project-curragh-02.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-07.jpg'),
                    'title' => '<h4 class="text-primary">Curragh Mine</h4>',
                    'content' => '<p>2008 Wolff commenced Dozer push and coal uncovery works operating D11 Dozers. Throughout the life of the Project the workforce has ranged from 68 to 83 to 45 to meet requirements.</p>
                                <p>Wolff has also undertaken rehabilitation work during its tenure at Curragh and more recently commenced a new contract to perform bulk push Dozer operations to expose coal, prepare dragline benches, strip waste, establish high wall ramps, drill bench preparation, ancillary tasks and bush clearing.</p>
                    '
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/curragh/project-curragh-03.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-07.jpg'),
                    'title' => '<h4 class="text-primary">Curragh Mine</h4>',
                    'content' => '<p>2008 Wolff commenced Dozer push and coal uncovery works operating D11 Dozers. Throughout the life of the Project the workforce has ranged from 68 to 83 to 45 to meet requirements.</p>
                    <p>Wolff has also undertaken rehabilitation work during its tenure at Curragh and more recently commenced a new contract to perform bulk push Dozer operations to expose coal, prepare dragline benches, strip waste, establish high wall ramps, drill bench preparation, ancillary tasks and bush clearing.</p>
                    '
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/curragh/project-curragh-04.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-07.jpg'),
                    'title' => '<h4 class="text-primary">Curragh Mine</h4>',
                    'content' => '<p>2008 Wolff commenced Dozer push and coal uncovery works operating D11 Dozers. Throughout the life of the Project the workforce has ranged from 68 to 83 to 45 to meet requirements.</p>
                    <p>Wolff has also undertaken rehabilitation work during its tenure at Curragh and more recently commenced a new contract to perform bulk push Dozer operations to expose coal, prepare dragline benches, strip waste, establish high wall ramps, drill bench preparation, ancillary tasks and bush clearing.</p>
                    '
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/curragh/project-curragh-05.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-07.jpg'),
                    'title' => '<h4 class="text-primary">Curragh Mine</h4>',
                    'content' => '<p>2008 Wolff commenced Dozer push and coal uncovery works operating D11 Dozers. Throughout the life of the Project the workforce has ranged from 68 to 83 to 45 to meet requirements.</p>
                    <p>Wolff has also undertaken rehabilitation work during its tenure at Curragh and more recently commenced a new contract to perform bulk push Dozer operations to expose coal, prepare dragline benches, strip waste, establish high wall ramps, drill bench preparation, ancillary tasks and bush clearing.</p>
                    '
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/curragh/project-curragh-06.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-07.jpg'),
                    'title' => '<h4 class="text-primary">Curragh Mine</h4>',
                    'content' => '<p>2008 Wolff commenced Dozer push and coal uncovery works operating D11 Dozers. Throughout the life of the Project the workforce has ranged from 68 to 83 to 45 to meet requirements.</p>
                    <p>Wolff has also undertaken rehabilitation work during its tenure at Curragh and more recently commenced a new contract to perform bulk push Dozer operations to expose coal, prepare dragline benches, strip waste, establish high wall ramps, drill bench preparation, ancillary tasks and bush clearing.</p>
                    '
                ],
            ]
        ],
        (object)[
            'slug' => 'ensham-mine',
            'title' => 'Ensham Mine',
            'sub_title' => 'Ensham Resources',
            'content' => '<p>Wolff deployed 12 personnel to site in August 2014 to undertake Rehabilitation earthworks over a 12 month period.</p>',
            'featured_image' => asset('/dist/media/projects/ensham/project-ensham01.jpg'),
            'galleries' => [
                (object)[
                    'featured_image' => asset('/dist/media/projects/ensham/project-ensham01.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-06.png'),
                    'title' => '<h4 class="text-primary">Ensham Mine</h4>',
                    'content' => '<p>Wolff deployed 12 personnel to site in August 2014 to undertake Rehabilitation earthworks over a 12 month period.</p>'
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/ensham/project-ensham02.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-06.png'),
                    'title' => '<h4 class="text-primary">Ensham Mine</h4>',
                    'content' => '<p>Wolff deployed 12 personnel to site in August 2014 to undertake Rehabilitation earthworks over a 12 month period.</p>'
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/ensham/project-ensham03.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-06.png'),
                    'title' => '<h4 class="text-primary">Ensham Mine</h4>',
                    'content' => '<p>Wolff deployed 12 personnel to site in August 2014 to undertake Rehabilitation earthworks over a 12 month period.</p>'
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/ensham/project-ensham04.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-06.png'),
                    'title' => '<h4 class="text-primary">Ensham Mine</h4>',
                    'content' => '<p>Wolff deployed 12 personnel to site in August 2014 to undertake Rehabilitation earthworks over a 12 month period.</p>'
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/ensham/project-ensham05.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-06.png'),
                    'title' => '<h4 class="text-primary">Ensham Mine</h4>',
                    'content' => '<p>Wolff deployed 12 personnel to site in August 2014 to undertake Rehabilitation earthworks over a 12 month period.</p>'
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/ensham/project-ensham06.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-06.png'),
                    'title' => '<h4 class="text-primary">Ensham Mine</h4>',
                    'content' => '<p>Wolff deployed 12 personnel to site in August 2014 to undertake Rehabilitation earthworks over a 12 month period.</p>'
                ],
                (object)[
                    'featured_image' => asset('/dist/media/projects/ensham/project-ensham07.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-06.png'),
                    'title' => '<h4 class="text-primary">Ensham Mine</h4>',
                    'content' => '<p>Wolff deployed 12 personnel to site in August 2014 to undertake Rehabilitation earthworks over a 12 month period.</p>'
                ],
            ]
        ],
        (object)[
            'slug' => 'moorvale-mine',
            'title' => 'Moorvale Mine',
            'sub_title' => 'Peabody Energy',
            'content' => '<p>July 2015 Wolff commenced on site drilling services for three months operating a Sandvik DR460.</p>',
            'featured_image' => asset('/dist/media/projects/moorvale/project-moorvale-01.jpg'),
            'galleries' => [
                (object)[
                    'featured_image' => asset('/dist/media/projects/moorvale/project-moorvale-01.jpg'),
                    'featured_logo' => asset('/dist/media/logos/project-logos/logo-06.png'),
                    'title' => '<h4 class="text-primary">Moorvale Mine</h4>',
                    'content' => '<p>July 2015 Wolff commenced on site drilling services for three months operating a Sandvik DR460.</p>'
                ]
            ]
        ],
    ];
    foreach($projects as $project) {
        if($slug === $project->slug ) {
            return view('project-detail', [
                'galleries' => $project->galleries,
                'title' => 'Wolff Project Detail'
            ]);
        }
    }
});

Route::get('/services/{slug}', function($slug) {
    $services = [
        (object)[
            'slug' => 'blast-hole-drilling',
            'galleries' => [
                (object)[
                    'before_type' => 'warning',
                    'featured_image' => asset('/dist/media/services/blast/blast-01.jpg'),
                    'title' => '<h4 class="text-primary">Blast Hole Drilling</h4>',
                    'content' => '<p>Wolff Mining can provide semi-autonomous CAT MD6420B Blast Hole Drilling Rigs and facilitate drilling services. </p>
                                <p>Wolff Mining recently acquired 2 x CAT MD6420B Blast Hole Drilling Rigs. The MD6420B comes as standard with automation features including auto-level, single pass auto-drill and auto raise/lower mast.</p>
                                <p>Designed for heavy open pit and surface mining, the drills produce greater operating fuel efficiency, safer and more precise electro-hydraulic controls, computer controlled drilling and real-time machine health monitoring with built-in diagnostic tools. We are continuing to further extend the automated features on our expansive range of drills.</p>
                                '
                ],
                (object)[
                    'featured_image' => asset('/dist/media/services/blast/blast-02.jpg'),
                    'title' => '<h6 class="text-primary">Current and Past Blast Hole Drilling Contracts</h6>',
                    'content' => '<ul class="before-warning">
                                    <li>
                                        <strong>Peabody Moorvale Mine:</strong><br />
                                        On site since February 2016 undertaking blast hole drilling services at a rate of 35,000m/month.
                                    </li>
                                    <li>
                                        <strong>Peabody Coppabella Mine:</strong><br />
                                        On site since February 2016 undertaking blast hole drilling services at a rate of 35,000m/month
                                    </li>
                                </ul>'
                ],
            ]
        ],
        (object)[
            'slug' => 'automated-equipment',
            'galleries' => [
                (object)[
                    'before_type' => 'warning',
                    'featured_image' => asset('/dist/media/services/automated/automated-01.jpg'),
                    'title' => '<h4 class="text-primary"><span class="text-warning">Semi-autonomous tractor system </span>(SATS) technology</h4>',
                    'content' => '<p>Wolff Mining has an established partnership with Caterpillar and Hastings Deering to implement and optimise SATS technology, in a world’s-first application into a mining production environment.</p>
                                <p>Our implementation of SATS into a mining production environment is a ‘ground breaking’ technological advancement and the world’s first application. Wolff Mining has established an ongoing partnership with Caterpillar and Hastings Deering to implement and optimise SATS technology.</p>
                                <p>We are leaders in the field of mining automation. We have the necessary experience, expertise and a proven track record. We have the products, technology and capability to consistently meet and exceed expectations.</p>
                                <p>Wolff Mining can help up-scale mining operations, increase production efficiencies whilst minimising costs and the risk to employee or contractor safety.</p>
                                <p>As the technology is further developed, the system is anticipated to deliver productivity outcomes that rival or even overtake manned dozer operations.</p>
                                '
                ],
                (object)[
                    'featured_image' => asset('/dist/media/services/automated/automated-06.png'),
                    'title' => '',
                    'content' => '
                                <img src="/dist/media/services/automated/automated-04.png" />
                                '
                ],
                (object)[
                    'featured_image' => asset('/dist/media/services/automated/automated-05.png'),
                    'title' => '',
                    'content' => '
                                <img src="/dist/media/services/automated/automated-07.png" />
                                '
                ],
            ]
        ],
        (object)[
            'slug' => 'satellite-bulk-dozer-push',
            'galleries' => [
                (object)[
                    'before_type' => 'warning',
                    'featured_image' => asset('/dist/media/services/bulk/bulk-01.jpg'),
                    'title' => '<h4 class="text-primary">Semi-autonomous large-scale <span class="text-warning">satellite bulk dozer push</span></h4>',
                    'content' => '<p>Wolff Mining is recognised as the leading satellite bulk dozer push operator, with operations currently being expanded throughout Australia and internationally.</p>
                                <p>Wolff Mining is recognised as the leading satellite bulk dozer push operator in the Bowen Basin, Central Queensland (CQ) area. As part of the National Group, we are currently expanding our operations throughout Australia and internationally.</p>
                                <p>Past and current bulk dozer push contracts have resulted in volumes up to 4,800,000 LCM’s a month and 36,000,000 LCM a year in the CQ area alone.</p>
                                '
                ],
                (object)[
                    'featured_image' => asset('/dist/media/services/bulk/bulk-02.jpg'),
                    'title' => '',
                    'content' => '<p>Over the past ten years, we have been operating major dozer push projects and have consistently exceeded our clients’ safety and production targets.</p>
                                    <p>Wolff Mining has continued to lead the industry in large scale satellite bulk dozer push and continues to further refine and develop methodology.</p>
                                    <p>The new methods have included trialling new technology and the ongoing analysis of input factors to achieve maximum productivity and cost effectiveness for clients.</p>
                                '
                ],
                (object)[
                    'featured_image' => asset('/dist/media/services/bulk/bulk-03.jpg'),
                    'title' => '<h6 class="text-primary">Current and Past Dozer Push Contracts</h6>',
                    'content' => '<ul class="before-warning">
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
                                    '
                ],
            ]
        ],
        (object)[
            'slug' => 'pre-strip-fleets',
            'galleries' => [
                (object)[
                    'before_type' => 'warning',
                    'featured_image' => asset('/dist/media/services/fleets/fleets-01.jpg'),
                    'title' => '<h4 class="text-primary">Pre-Strip Topsoil Removal</h4>',
                    'content' => '<p>Wolff Mining’s extensive experience in the Black Coal industry enables the company to provide innovative and cost-effective contract mining solutions.</p>
                                <p>These have included the provision of pre-strip fleets and the management and operation of principle supplied fleets.</p>
                                <p>Our expansive pre-strip fleet and experienced workforce facilitates quick mobilisation times and extends to a strong understanding of pre-strip and Topsoil Removal processes and quality service.</p>'
                ],
                (object)[
                    'featured_image' => asset('/dist/media/services/fleets/fleets-02.jpg'),
                    'title' => '<h6 class="text-primary">Current and Past Pre-Strip Topsoil Contracts</h6>',
                    'content' => '<ul class="before-warning">
                                    <li>
                                        <strong>BMA Saraji Mine:</strong><br />
                                        On site since July 2014 - 2016 with a project team of 12 removing topsoil and undertaking ancillary earthworks.
                                    </li>
                                    <li>
                                        <strong>Peabody Coppabella Mine:</strong><br />
                                        Completed during 2012 full box-cut and east pit re-alingment of 6M BCM over 11 months.
                                    </li>
                                </ul>'
                ],
            ]
        ],
        
        (object)[
            'slug' => 'civil-earthworks',
            'galleries' => [
                (object)[
                    'before_type' => 'warning',
                    'featured_image' => asset('dist/media/services/civil/Cat_24M_0I2A6022 copy.jpg'),
                    'title' => '<h4 class="text-primary">Civil earthworks</h4>',
                    'content' => '
                                <p>Wolff Mining has extensive experience in mine site civil earthworks and provides a range of services including, but not limited to:</p>
                                <ul>
                                    <li>Exploration and drill pads</li>
                                    <li>Seismic lines</li>
                                    <li>Road construction and maintenance</li>
                                    <li>Haul road construction and maintenance</li>
                                    <li>Pit and spoil drainage design</li>
                                    <li>Top soil removal and placement</li>
                                    <li>Dragline pad construction</li>
                                </ul>
                                <h6 class="text-primary">Current and Past Civil Construction Contracts</h6>
                                <ul class="before-warning">
                                    <li>
                                        <strong>BMA Blackwater Mine:</strong><br />
                                        Long term contract from 2007 for back access road maintenance and geo works. Additional 2016 civil contract work for road construction and CHPP maintenance.
                                    </li>
                                    <li>
                                        <strong>Minyango:</strong><br />
                                        Seismic lines and drill pad construction, including pad rehabilitation.
                                    </li>
                                    <li>
                                        <strong>Wesfarmers Curragh:</strong><br />
                                        S-Pit Sediment Control - Construction Project Management.
                                    </li>
                                </ul>
                                '
                ],
            ]
        ],
        (object)[
            'slug' => 'rehabilitation-works',
            'galleries' => [
                (object)[
                    'before_type' => 'warning',
                    'featured_image' => asset('dist/media/services/clearing/r0_185_3620_2413_w1200_h678_fmax.jpg'),
                    'title' => '<h4 class="text-primary">Mine Site Clearing and Rehabilitation</h4>',
                    'content' => '
                                <p>Wolff Mining’s site clearing and rehabilitation capabilities include, but are not limited to:</p>
                                <ul>
                                    <li>Clear and grub of greenfield sites</li>
                                    <li>General mine maintenance</li>
                                    <li>Site rehabilitation, including re-shaping and topsoil spreading</li>
                                    <li>Seeding</li>
                                </ul>
                                <p>Wolff Mining use dozer push optimisation techniques to produce rehabilitation designs, which incorporate water catchment and contour banks built into the final surface as opposed to building on top of final land formations.</p>
                                <p>This methodology results in a more stable landform, incorporating drainage works as constructed and therefore minimising erosion. Wolff Mining also works to ensure that a generous amount of vegetation is left along the cut and fill intersections, this can be raked into parking areas while bulk earthworks are undertaken and later placed on top of the final surface to create sanctuary for wildlife and plants.</p>
                                <h6 class="text-priamry">Current and Past Mine Site Rehabilitation</h6>
                                <ul class="before-warning">
                                    <li>
                                        <strong>New Hope Coal Acland Mine:</strong><br />
                                        Commenced 2008 with additional repeat work within Dozer Push.
                                    </li>
                                    <li>
                                        <strong>Ensham Resources Mine:</strong><br />
                                        Wolff Mining commenced 2014 undertaking full mine rehabilitation earthworks over a 12-month period. Mine rehabilitation and re-shaping 2017.
                                    </li>
                                    <li>
                                        <strong>Wesfarmers Curragh Mine:</strong><br />
                                        On-going mine rehabilitation through 2017.
                                    </li>
                                </ul>
                                '
                ],
            ]
        ],
    ];
    foreach($services as $service) {
        if($slug === $service->slug ) {
            return view('service-detail', [
                'galleries' => $service->galleries,
                'title' => 'Wolff Service Detail'
            ]);
        } 
    }
});


