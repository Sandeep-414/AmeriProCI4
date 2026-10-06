<?php
namespace App\Controllers;
class Design2 extends BaseController
{
    public function index()
    {
        return view('design2/home');
    }
    public function services()
    {
        return view('design2/services');
    }
    public function solutions()
    {
        return view('design2/solutions');
    }
    public function about()
    {
        return view('design2/about');
    }
    public function login()
    {
        return view('design2/login');
    }
    public function timesheet()
    {
        return view('design2/timesheet');
    }
    // ==========================================
    // SERVICE DETAIL
    // ==========================================
    public function serviceDetail($service)
    {
        $services = [
            'technology' => [
                'number' => '01',
                'title' => 'Technology Services',
                'subtitle' => 'Technology That Supports Business Growth',
                'description' => 'Technology services designed to help organizations build, modernize and manage technology environments that support business objectives.',
                'overview' => 'Organizations need technology environments that are reliable, scalable and aligned with changing business requirements. Our technology services help businesses evaluate their current technology landscape, identify opportunities for improvement and implement capabilities that support long-term growth.',
                'capabilities' => [
                    'Technology strategy and planning',
                    'Infrastructure and platform support',
                    'Cloud and technology modernization',
                    'System integration',
                    'Technology optimization',
                    'Ongoing technical support'
                ],
                'benefits' => [
                    'Improve technology reliability',
                    'Support business scalability',
                    'Modernize technology environments',
                    'Reduce operational complexity'
                ]
            ],
            'application' => [
                'number' => '02',
                'title' => 'Application Services',
                'subtitle' => 'Applications Built Around Business Needs',
                'description' => 'Application development, modernization and support services designed to help organizations deliver reliable and scalable business applications.',
                'overview' => 'Business applications are central to day-to-day operations. Our application services support organizations throughout the application lifecycle, from development and modernization to maintenance and ongoing support.',
                'capabilities' => [
                    'Application development',
                    'Application modernization',
                    'Application integration',
                    'Application maintenance',
                    'Production support',
                    'Performance optimization'
                ],
                'benefits' => [
                    'Improve application performance',
                    'Modernize legacy applications',
                    'Support business continuity',
                    'Create scalable application environments'
                ]
            ],
            'consulting' => [
                'number' => '03',
                'title' => 'Consulting Services',
                'subtitle' => 'Business and Technology Expertise',
                'description' => 'Consulting services that connect business objectives with practical technology strategies and solutions.',
                'overview' => 'Successful technology initiatives require a clear understanding of business objectives. Our consulting approach focuses on understanding organizational priorities, identifying opportunities and developing practical technology strategies.',
                'capabilities' => [
                    'Business and technology assessment',
                    'Technology strategy',
                    'Process analysis',
                    'Solution planning',
                    'Technology advisory',
                    'Implementation guidance'
                ],
                'benefits' => [
                    'Align technology with business goals',
                    'Improve decision making',
                    'Identify opportunities for improvement',
                    'Create practical technology roadmaps'
                ]
            ],
            'testing' => [
                'number' => '04',
                'title' => 'Testing Services',
                'subtitle' => 'Quality Engineering for Reliable Applications',
                'description' => 'Quality engineering and testing services designed to improve application reliability, performance and user experience.',
                'overview' => 'Quality is an important part of successful application delivery. Our testing services help organizations identify defects early, validate application functionality and improve confidence throughout the software delivery lifecycle.',
                'capabilities' => [
                    'Functional testing',
                    'Regression testing',
                    'Automation testing',
                    'Integration testing',
                    'Performance testing',
                    'Quality engineering'
                ],
                'benefits' => [
                    'Improve application quality',
                    'Identify issues earlier',
                    'Reduce production defects',
                    'Increase release confidence'
                ]
            ],
            'managed' => [
                'number' => '05',
                'title' => 'Managed Services',
                'subtitle' => 'Continuous Technology and Application Support',
                'description' => 'Ongoing technology and application management services designed to support reliable business operations.',
                'overview' => 'Technology environments require continuous attention after implementation. Our managed services provide ongoing support, monitoring and maintenance to help organizations maintain stable and reliable technology operations.',
                'capabilities' => [
                    'Application support',
                    'Technology monitoring',
                    'Incident management',
                    'Maintenance and support',
                    'Performance monitoring',
                    'Operational assistance'
                ],
                'benefits' => [
                    'Improve operational stability',
                    'Reduce technology downtime',
                    'Support business continuity',
                    'Provide ongoing technical assistance'
                ]
            ],
            'digital-transformation' => [
                'number' => '06',
                'title' => 'Digital Transformation',
                'subtitle' => 'Technology for the Modern Enterprise',
                'description' => 'Digital transformation capabilities that help organizations modernize processes, applications and technology environments.',
                'overview' => 'Digital transformation is more than implementing new technology. It involves improving processes, modernizing applications and creating technology capabilities that help organizations operate more effectively.',
                'capabilities' => [
                    'Digital strategy',
                    'Process modernization',
                    'Application modernization',
                    'Cloud transformation',
                    'Data and technology integration',
                    'Digital experience improvement'
                ],
                'benefits' => [
                    'Modernize business processes',
                    'Improve operational efficiency',
                    'Enable digital capabilities',
                    'Support long-term transformation'
                ]
            ]
        ];
        if (!isset($services[$service])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        return view(
            'design2/service-detail',
            [
                'service' => $services[$service]
            ]
        );
    }
    // ==========================================
    // SOLUTION DETAIL
    // ==========================================
    public function solutionDetail($solution)
    {
        $solutions = [
            'sap' => [
                'number' => '01',
                'title' => 'SAP Solutions',
                'subtitle' => 'Enterprise SAP Capabilities for Business Transformation',
                'description' => 'SAP capabilities supporting implementations, upgrades, global rollouts, testing automation and application management.',
                'overview' => 'SAP platforms support critical business processes across organizations. Our SAP capabilities help businesses manage implementation initiatives, modernization programs, testing requirements and ongoing application management.',
                'capabilities' => [
                    'SAP implementations',
                    'SAP upgrades and modernization',
                    'Global SAP rollouts',
                    'SAP testing automation',
                    'SAP application management',
                    'SAP support and maintenance'
                ],
                'benefits' => [
                    'Support enterprise business processes',
                    'Improve SAP application reliability',
                    'Support modernization initiatives',
                    'Enable consistent application management'
                ]
            ],
            'digital' => [
                'number' => '02',
                'title' => 'Digital Solutions',
                'subtitle' => 'Modern Digital Capabilities for the Enterprise',
                'description' => 'Digital capabilities designed to help organizations modernize processes, applications and customer experiences.',
                'overview' => 'Organizations are continuously adapting to changing customer expectations and business requirements. Our digital solutions help businesses modernize their technology environment, improve processes and create better digital experiences.',
                'capabilities' => [
                    'Digital transformation',
                    'Application modernization',
                    'Process improvement',
                    'Digital experience solutions',
                    'Technology enablement',
                    'Digital strategy and planning'
                ],
                'benefits' => [
                    'Modernize business operations',
                    'Improve digital experiences',
                    'Support changing business requirements',
                    'Enable new digital capabilities'
                ]
            ],
            'enterprise' => [
                'number' => '03',
                'title' => 'Enterprise Solutions',
                'subtitle' => 'Technology Solutions for Complex Business Environments',
                'description' => 'Enterprise technology capabilities supporting business operations, applications, integration and organizational requirements.',
                'overview' => 'Enterprise organizations require technology environments that connect applications, processes and teams. Our enterprise solutions support organizations in improving technology capabilities and maintaining reliable business operations.',
                'capabilities' => [
                    'Enterprise applications',
                    'Application integration',
                    'Business process solutions',
                    'Enterprise application support',
                    'Technology modernization',
                    'Operational technology support'
                ],
                'benefits' => [
                    'Improve enterprise operations',
                    'Connect business applications',
                    'Support scalable technology environments',
                    'Improve operational continuity'
                ]
            ],
            'application' => [
                'number' => '04',
                'title' => 'Application Solutions',
                'subtitle' => 'Applications Designed Around Business Requirements',
                'description' => 'Application development and modernization capabilities supporting business requirements throughout the application lifecycle.',
                'overview' => 'Applications are essential to modern business operations. Our application solutions help organizations develop, modernize, maintain and support applications that align with business requirements.',
                'capabilities' => [
                    'Application development',
                    'Application modernization',
                    'Application maintenance',
                    'Application support',
                    'Application integration',
                    'Performance optimization'
                ],
                'benefits' => [
                    'Improve application performance',
                    'Modernize existing applications',
                    'Support business continuity',
                    'Create scalable application environments'
                ]
            ],
            'data' => [
                'number' => '05',
                'title' => 'Data Solutions',
                'subtitle' => 'Data Capabilities for Better Business Decisions',
                'description' => 'Data capabilities supporting organizational reporting, analytics, integration and informed decision making.',
                'overview' => 'Organizations depend on reliable data to understand business performance and support decision making. Our data solutions help organizations manage, integrate and use information effectively across business environments.',
                'capabilities' => [
                    'Data management',
                    'Business reporting',
                    'Data analytics',
                    'Data integration',
                    'Data quality support',
                    'Information management'
                ],
                'benefits' => [
                    'Improve access to business information',
                    'Support data-driven decisions',
                    'Improve reporting capabilities',
                    'Connect information across systems'
                ]
            ],
            'business-technology' => [
                'number' => '06',
                'title' => 'Business Technology',
                'subtitle' => 'Technology Aligned With Business Objectives',
                'description' => 'Technology capabilities aligned with business processes, objectives and operational requirements.',
                'overview' => 'Technology delivers greater value when it is closely aligned with business objectives. Our business technology capabilities help organizations connect technology strategy with operational processes and business requirements.',
                'capabilities' => [
                    'Process optimization',
                    'Technology strategy',
                    'Business applications',
                    'Operational support',
                    'Technology planning',
                    'Business process improvement'
                ],
                'benefits' => [
                    'Align technology with business objectives',
                    'Improve operational processes',
                    'Support technology planning',
                    'Create practical technology solutions'
                ]
            ]
        ];
        if (!isset($solutions[$solution])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        return view(
            'design2/solution-detail',
            [
                'solution' => $solutions[$solution]
            ]
        );
    }
    public function careers()
{
    return view('design2/careers');
}
public function contact()
{
    return view('design2/contact');
}
}
