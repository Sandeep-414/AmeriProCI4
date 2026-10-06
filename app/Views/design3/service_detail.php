<?php

/*
=========================================================
DESIGN 3 - SERVICE DETAIL DATA
=========================================================
*/

$serviceDetails = [

    'application-development' => [
        'number' => '01',
        'title' => 'Application Development',
        'eyebrow' => 'APPLICATION ENGINEERING',
        'description' => 'Building scalable, reliable and business-focused applications for modern organizations.',
        'intro_label' => 'APPLICATION DEVELOPMENT',
        'intro_title' => 'Engineering digital solutions for complex business needs.',
        'intro_text' => 'We enhance any business through a specialized web application development process putting across the services and products in the most effectual manner. We have a stand-out track record of consistent architect and building solutions for large, complex, high-touch projects and programs. Web application development expertise in having tools and ideas to make business better online and offline.',
        'highlight_label' => 'APPLICATION DEVELOPMENT',
        'highlight_title' => 'Robust and scalable applications designed around business objectives.',
        'highlight_text' => 'We expertise and adapt the highest quality processes which enables us to deliver robust and scalable applications that help organizations reduce complexity, mitigate risks and achieve business objectives.'
    ],

    'application-maintenance' => [
        'number' => '02',
        'title' => 'Application Maintenance',
        'eyebrow' => 'APPLICATION SUPPORT',
        'description' => 'Keeping critical applications reliable, available, optimized and ready for business.',
        'intro_label' => 'APPLICATION SUPPORT & MAINTENANCE',
        'intro_title' => 'Reliable applications. Continuous support.',
        'intro_text' => 'Application Support and Maintenance are critical for business continuity. AmeriPro specializes in providing support and maintenance services for web applications. Our service model is designed to ensure availability of systems for use, reduce maintenance and support efforts and improve scalability by improving productivity over time. AmeriPro believes that professional maintenance and support enables useful improvements and optimizations.',
        'highlight_label' => 'APPLICATION MAINTENANCE',
        'highlight_title' => 'Minimizing downtime while improving application performance.',
        'highlight_text' => 'AmeriPro application support and maintenance services focus on availability, timely issue resolution, ongoing improvements and application performance.'
    ],

    'business-intelligence' => [
        'number' => '03',
        'title' => 'Business Intelligence',
        'eyebrow' => 'DATA & ANALYTICS',
        'description' => 'Transforming business information into reporting, dashboards and actionable insights.',
        'intro_label' => 'BUSINESS INTELLIGENCE',
        'intro_title' => 'Turn business information into meaningful insight.',
        'intro_text' => 'AmeriPro Business Intelligence services include reporting solutions together with maintenance, operation and production support.',
        'highlight_label' => 'BUSINESS INTELLIGENCE',
        'highlight_title' => 'Reporting that makes business information useful.',
        'highlight_text' => 'Our Business Intelligence capabilities support reporting, dashboards, KPIs, data operations and production support.'
    ],

    'cloud-computing' => [
        'number' => '04',
        'title' => 'Cloud Computing',
        'eyebrow' => 'CLOUD TECHNOLOGY',
        'description' => 'Cloud solutions designed to support flexibility, scalability and business growth.',
        'intro_label' => 'CLOUD COMPUTING',
        'intro_title' => 'Flexible cloud solutions for modern businesses.',
        'intro_text' => 'Cloud solutions that support flexibility, scalability and business growth while helping organizations adapt their technology environments to changing requirements.',
        'highlight_label' => 'CLOUD COMPUTING',
        'highlight_title' => 'Technology infrastructure designed for flexibility and growth.',
        'highlight_text' => 'AmeriPro cloud capabilities help organizations support modern workloads, improve flexibility and build technology environments around business requirements.'
    ],

    'infrastructure-management' => [
        'number' => '05',
        'title' => 'Infrastructure Management',
        'eyebrow' => 'IT INFRASTRUCTURE',
        'description' => 'Technology infrastructure services focused on availability, reliability and performance.',
        'intro_label' => 'INFRASTRUCTURE MANAGEMENT',
        'intro_title' => 'Reliable technology infrastructure for business operations.',
        'intro_text' => 'Technology infrastructure services focused on availability, reliability and performance. AmeriPro supports organizations with technology capabilities designed around operational requirements.',
        'highlight_label' => 'INFRASTRUCTURE MANAGEMENT',
        'highlight_title' => 'Stable infrastructure supporting business continuity.',
        'highlight_text' => 'Our infrastructure capabilities focus on availability, performance and reliable technology operations.'
    ],

    'product-application-testing' => [
        'number' => '06',
        'title' => 'Product & Application Testing',
        'eyebrow' => 'QUALITY ENGINEERING',
        'description' => 'Quality assurance and testing services for dependable and reliable applications.',
        'intro_label' => 'QUALITY ENGINEERING',
        'intro_title' => 'Quality engineering for dependable applications.',
        'intro_text' => 'Quality assurance and testing services designed to support reliable application delivery. AmeriPro focuses on testing capabilities that help organizations improve application quality and reliability.',
        'highlight_label' => 'PRODUCT & APPLICATION TESTING',
        'highlight_title' => 'Quality built into every stage of application delivery.',
        'highlight_text' => 'Testing and quality engineering capabilities support dependable applications and help organizations deliver reliable technology solutions.'
    ],

    'strategic-resourcing' => [
        'number' => '07',
        'title' => 'Strategic Resourcing',
        'eyebrow' => 'TALENT & RESOURCING',
        'description' => 'Technology professionals and resources aligned with business requirements.',
        'intro_label' => 'STRATEGIC RESOURCING',
        'intro_title' => 'Technology resources aligned with business needs.',
        'intro_text' => 'Technology professionals and resources aligned with business requirements. AmeriPro supports organizations by connecting technology capabilities with their operational and project requirements.',
        'highlight_label' => 'STRATEGIC RESOURCING',
        'highlight_title' => 'The right technology resources for changing business requirements.',
        'highlight_text' => 'Our resourcing capabilities help organizations align technology professionals and expertise with their business and project needs.'
    ],

    'website-development' => [
        'number' => '08',
        'title' => 'Website Development',
        'eyebrow' => 'DIGITAL EXPERIENCE',
        'description' => 'Modern websites and digital experiences designed for organizations and businesses.',
        'intro_label' => 'WEBSITE DEVELOPMENT',
        'intro_title' => 'Modern digital experiences for organizations and businesses.',
        'intro_text' => 'Modern websites and digital experiences built for organizations and businesses. AmeriPro develops web experiences designed around usability, business requirements and digital presence.',
        'highlight_label' => 'WEBSITE DEVELOPMENT',
        'highlight_title' => 'Digital experiences designed around your organization.',
        'highlight_text' => 'Our website development capabilities focus on creating modern, responsive and business-focused digital experiences.'
    ]

];


/*
=========================================================
GET CURRENT SERVICE
=========================================================
*/

$service = $serviceDetails[$slug] ?? null;


/*
=========================================================
IF SERVICE DOES NOT EXIST
=========================================================
*/

if ($service === null) {
    ?>
    <script>
        window.location.href = "<?= base_url('design3/services') ?>";
    </script>
    <?php
    exit;
}


/*
=========================================================
APPLICATION DEVELOPMENT DATA
=========================================================
*/

$developmentApproaches = [

    [
        'number' => '01',
        'title' => 'Normal Development',
        'text' => 'In Normal Development we assume complete responsibility for analysis, design, implementation, testing and maintenance of systems.'
    ],

    [
        'number' => '02',
        'title' => 'Cooperative Development',
        'text' => 'In cooperative development, we work with your IT professionals to jointly analyze, design, implement, test and integrate systems.'
    ]

];


$technologies = [

    [
        'number' => '01',
        'title' => 'Microsoft Technologies',
        'items' => [
            'Azure Functions',
            'Azure Web Service',
            '.NET',
            'SharePoint',
            'Visual Basic',
            'VBScript',
            'ASP',
            'Power BI'
        ]
    ],

    [
        'number' => '02',
        'title' => 'Java / Open Source',
        'items' => [
            'Java/J2EE',
            'JavaScript'
        ]
    ],

    [
        'number' => '03',
        'title' => 'Web Development',
        'items' => [
            'PHP',
            'ReactJs',
            'Node Js',
            'Angular'
        ]
    ],

    [
        'number' => '04',
        'title' => 'PHP Frameworks',
        'items' => [
            'CI3',
            'CI4',
            'Laravel',
            'Symfony'
        ]
    ],

    [
        'number' => '05',
        'title' => 'Visualization Tools',
        'items' => [
            'Tableau',
            'Power BI'
        ]
    ],

    [
        'number' => '06',
        'title' => 'Native Mobile Applications',
        'items' => [
            'iOS - Swift',
            'Android - Java',
            'Android - Kotlin'
        ]
    ],

    [
        'number' => '07',
        'title' => 'Mobile Hybrid Technologies',
        'items' => [
            'IONIC framework',
            'Flutter',
            'React Native'
        ]
    ],

    [
        'number' => '08',
        'title' => 'Creative Web Content Design',
        'items' => [
            'Photoshop',
            'Dreamweaver'
        ]
    ],

    [
        'number' => '09',
        'title' => 'Database Technologies',
        'items' => [
            'SQL Server',
            'Oracle',
            'Mongo DB',
            'DB2',
            'MySQL'
        ]
    ],

    [
        'number' => '10',
        'title' => 'ETL Tools',
        'items' => [
            'Informatica',
            'IICS',
            'SSIS'
        ]
    ]

];


/*
=========================================================
APPLICATION MAINTENANCE DATA
=========================================================
*/

$maintenanceServices = [

    'Supporting and maintaining critical core systems',
    'Error tracking and debugging',
    'End user help desk support',
    'Technical troubleshooting',
    'Application upgrades and enhancements',
    'Web content updates',
    'Application Performance Tuning'

];


/*
=========================================================
BUSINESS INTELLIGENCE DATA
=========================================================
*/

$biReportingSolutions = [

    'Design, Development and Testing of Canned and Adhoc Reports',
    'Static and Drill through Reports',
    'Enterprise Reporting and KPIs',
    'Dashboard / Scorecard Applications',
    'Expertise in SSRS, IBM Cognos, SiSense Prism, Oracle APEX and OBIEE suite'

];

$biProductionSupport = [

    '24x7 Support',
    'Operational monitoring such as Data load and Reject-handling',
    'ETL operation and support',
    'Tools administration and support',
    'Reports operation and support'

];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        AmeriPro | <?= esc($service['title']) ?>
    </title>

    <link
        rel="stylesheet"
        href="<?= base_url('assets/css/design3.css') ?>"
    >

</head>

<body>


<!-- =====================================================
     NAVBAR
===================================================== -->

<header class="d3-header">

    <a
        href="<?= base_url('design3') ?>"
        class="d3-logo"
    >

        <img
            src="<?= base_url('assets/images/design3/ameripro-logo-footer.png') ?>"
            alt="AmeriPro Solutions"
        >

    </a>


    <nav class="d3-nav">

        <a href="<?= base_url('design3') ?>">
            Home
        </a>

        <a href="<?= base_url('design3/about') ?>">
            About Us
        </a>

        <a
            href="<?= base_url('design3/services') ?>"
            class="d3-dropdown active"
        >
            Services
            <span>⌄</span>
        </a>

        <a
            href="<?= base_url('design3/solutions') ?>"
            class="d3-dropdown"
        >
            Solutions
            <span>⌄</span>
        </a>

        <a href="<?= base_url('design3/careers') ?>">
            Careers
        </a>

        <a href="<?= base_url('design3/contact') ?>">
            Contact Us
        </a>

    </nav>


    <div class="d3-header-right">

        <a
            href="<?= base_url('design3/contact') ?>"
            class="d3-start-button"
        >
            Get Started Now
        </a>

        <button
            class="d3-menu-button"
            id="d3MenuButton"
            type="button"
            aria-label="Menu"
        >
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>

</header>


<!-- =====================================================
     SERVICE HERO
===================================================== -->

<section class="d3-service-detail-hero">

    <div class="d3-service-detail-overlay"></div>

    <div class="d3-service-detail-content">

        <span class="d3-service-detail-label">
            <?= esc($service['eyebrow']) ?>
        </span>

        <span class="d3-service-detail-number">
            <?= esc($service['number']) ?>
        </span>

        <h1>
            <?= esc($service['title']) ?>
        </h1>

        <p>
            <?= esc($service['description']) ?>
        </p>

    </div>

</section>


<!-- =====================================================
     BREADCRUMB
===================================================== -->

<section class="d3-service-detail-breadcrumb">

    <div class="d3-service-detail-breadcrumb-inner">

        <h2>
            <?= esc($service['title']) ?>
        </h2>

        <div>

            <a href="<?= base_url('design3') ?>">
                Home
            </a>

            <span>/</span>

            <a href="<?= base_url('design3/services') ?>">
                Services
            </a>

            <span>/</span>

            <span>
                <?= esc($service['title']) ?>
            </span>

        </div>

    </div>

</section>


<!-- =====================================================
     INTRO
===================================================== -->

<section class="d3-service-detail-section">

    <div class="d3-container">

        <div class="d3-service-detail-intro">

            <span class="d3-service-detail-small-label">
                <?= esc($service['intro_label']) ?>
            </span>

            <h2>
                <?= esc($service['intro_title']) ?>
            </h2>

            <p>
                <?= esc($service['intro_text']) ?>
            </p>

        </div>

    </div>

</section>

<?php if ($slug === 'application-development'): ?>

<section class="d3-service-detail-section d3-service-light">
    <div class="d3-container">

        <div class="d3-service-section-heading">
            <span>APPLICATION DEVELOPMENT</span>

            <h2>
                Building robust and scalable applications.
            </h2>

            <p>
                We enhance any business through a specialized web
                application development process putting across the
                services and products in the most effectual manner.
                We have a stand-out track record of consistent
                architect and building solutions for large, complex,
                high-touch projects and programs.
            </p>

            <p>
                Web application development expertise in having tools
                and ideas to make business better online and offline.
            </p>
        </div>


        <div class="d3-development-approach-grid">

            <div class="d3-development-card">
                <div class="d3-development-number">01</div>

                <h3>Normal Development</h3>

                <p>
                    In Normal Development we assume complete
                    responsibility for analysis, design, implementation,
                    testing and maintenance of systems.
                </p>
            </div>


            <div class="d3-development-card">
                <div class="d3-development-number">02</div>

                <h3>Cooperative Development</h3>

                <p>
                    In cooperative development, we work with your IT
                    professionals to jointly analyze, design, implement,
                    test and integrate systems.
                </p>
            </div>

        </div>

    </div>
</section>


<section class="d3-service-detail-section">

    <div class="d3-container">

        <div class="d3-service-section-heading">

            <span>TECHNOLOGY EXPERTISE</span>

            <h2>
                Technologies, tools and platforms.
            </h2>

        </div>


        <div class="d3-technology-grid">

            <?php foreach ($technologies as $technology): ?>

                <div class="d3-technology-card">

                    <div class="d3-technology-number">
                        <?= esc($technology['number']) ?>
                    </div>

                    <h3>
                        <?= esc($technology['title']) ?>
                    </h3>

                    <ul>

                        <?php foreach ($technology['items'] as $item): ?>

                            <li>
                                <?= esc($item) ?>
                            </li>

                        <?php endforeach; ?>

                    </ul>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<?php elseif ($slug === 'application-maintenance'): ?>


<section class="d3-service-detail-section d3-service-light">

    <div class="d3-container">

        <div class="d3-service-section-heading">

            <span>APPLICATION SUPPORT & MAINTENANCE</span>

            <h2>
                Keeping critical applications
                reliable and available.
            </h2>

            <p>
                Application Support and Maintenance are critical
                for business continuity. AmeriPro specializes in
                providing support and maintenance services for
                web applications.
            </p>

            <p>
                Our service model is designed to ensure availability
                of systems for use, reduce maintenance and support
                efforts and improve scalability by improving
                productivity over time.
            </p>

            <p>
                AmeriPro believes that professional maintenance
                and support enables useful improvements and
                optimizations. Having the right support for the
                applications can ensure that issues are resolved
                in a timely and efficient manner with minimum
                downtime.
            </p>

        </div>


        <div class="d3-development-approach-grid">

            <?php foreach ($maintenanceServices as $index => $item): ?>

                <div class="d3-development-card">

                    <div class="d3-development-number">
                        <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>
                    </div>

                    <h3>
                        <?= esc($item) ?>
                    </h3>

                    <p>
                        AmeriPro application support and maintenance
                        services help organizations maintain reliable
                        application operations.
                    </p>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<?php elseif ($slug === 'business-intelligence'): ?>


<section class="d3-service-detail-section d3-service-light">

    <div class="d3-container">

        <div class="d3-service-section-heading">

            <span>BUSINESS INTELLIGENCE</span>

            <h2>
                Reporting and production support.
            </h2>

            <p>
                AmeriPro Business Intelligence services include
                reporting solutions together with maintenance,
                operation and production support.
            </p>

        </div>


        <div class="d3-development-approach-grid">

            <?php foreach ($biReportingSolutions as $index => $item): ?>

                <div class="d3-development-card">

                    <div class="d3-development-number">
                        <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>
                    </div>

                    <h3>
                        BI Reporting
                    </h3>

                    <p>
                        <?= esc($item) ?>
                    </p>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<section class="d3-service-detail-section">

    <div class="d3-container">

        <div class="d3-service-section-heading">

            <span>PRODUCTION SUPPORT</span>

            <h2>
                Business intelligence operations.
            </h2>

        </div>


        <div class="d3-development-approach-grid">

            <?php foreach ($biProductionSupport as $index => $item): ?>

                <div class="d3-development-card">

                    <div class="d3-development-number">
                        <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>
                    </div>

                    <h3>
                        Production Support
                    </h3>

                    <p>
                        <?= esc($item) ?>
                    </p>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<?php elseif ($slug === 'cloud-computing'): ?>


<section class="d3-service-detail-section d3-service-light">

    <div class="d3-container">

        <div class="d3-service-section-heading">

            <span>CLOUD COMPUTING</span>

            <h2>
                Scalable and highly elastic
                cloud solutions.
            </h2>

            <p>
                Cloud Computing is the way business is operating
                in most parts of the world today. It is a transformation
                that businesses are looking for, and the demand for
                cloud computing continues to increase.
            </p>

            <p>
                Instant scalability and the elastic nature of cloud
                make it an important choice for enterprises.
            </p>

            <p>
                AmeriPro has evolved cloud maturity since early 2009
                and has delivered cloud solutions to complex business
                applications worldwide. Solutions range from simple
                data management portals to large-scale enterprise
                applications and eCommerce.
            </p>

        </div>


        <div class="d3-technology-grid">

            <div class="d3-technology-card">
                <div class="d3-technology-number">01</div>
                <h3>Instantaneous Scalability</h3>
                <p>
                    Cloud environments designed to scale according
                    to changing business requirements.
                </p>
            </div>

            <div class="d3-technology-card">
                <div class="d3-technology-number">02</div>
                <h3>Highly Elastic Cloud</h3>
                <p>
                    Flexible cloud platforms capable of supporting
                    changing application workloads.
                </p>
            </div>

            <div class="d3-technology-card">
                <div class="d3-technology-number">03</div>
                <h3>Global Cloud Nodes</h3>
                <p>
                    Global cloud nodes and auto replication
                    capabilities.
                </p>
            </div>

            <div class="d3-technology-card">
                <div class="d3-technology-number">04</div>
                <h3>High Availability</h3>
                <p>
                    High availability and dynamic cloud management.
                </p>
            </div>

            <div class="d3-technology-card">
                <div class="d3-technology-number">05</div>
                <h3>24 X 7 Support</h3>
                <p>
                    Cloud essential support team available
                    around the clock.
                </p>
            </div>

            <div class="d3-technology-card">
                <div class="d3-technology-number">06</div>
                <h3>Platform Optimization</h3>
                <p>
                    Infrastructure management, platform optimization
                    and service-oriented architecture.
                </p>
            </div>

        </div>

    </div>

</section>


<?php elseif ($slug === 'infrastructure-management'): ?>


<section class="d3-service-detail-section d3-service-light">

    <div class="d3-container">

        <div class="d3-service-section-heading">

            <span>INFRASTRUCTURE MANAGEMENT</span>

            <h2>
                Infrastructure supporting
                reliable business operations.
            </h2>

            <p>
                AmeriPro's infrastructure capabilities are connected
                with its cloud computing and platform services,
                supporting availability, platform optimization,
                dynamic management and service-oriented architecture.
            </p>

        </div>


        <div class="d3-development-approach-grid">

            <div class="d3-development-card">

                <div class="d3-development-number">
                    01
                </div>

                <h3>
                    Infrastructure Management
                </h3>

                <p>
                    Infrastructure management supporting cloud
                    environments and business applications.
                </p>

            </div>


            <div class="d3-development-card">

                <div class="d3-development-number">
                    02
                </div>

                <h3>
                    Platform Optimization
                </h3>

                <p>
                    Optimization of technology platforms to support
                    application performance and business requirements.
                </p>

            </div>


            <div class="d3-development-card">

                <div class="d3-development-number">
                    03
                </div>

                <h3>
                    High Availability
                </h3>

                <p>
                    Technology environments designed around
                    availability and dynamic management.
                </p>

            </div>


            <div class="d3-development-card">

                <div class="d3-development-number">
                    04
                </div>

                <h3>
                    Service Oriented Architecture
                </h3>

                <p>
                    Infrastructure capabilities supporting
                    service-oriented application environments.
                </p>

            </div>

        </div>

    </div>

</section>


<?php elseif ($slug === 'product-application-testing'): ?>


<section class="d3-service-detail-section d3-service-light">

    <div class="d3-container">

        <div class="d3-service-section-heading">

            <span>PRODUCT & APPLICATION TESTING</span>

            <h2>
                Quality-oriented testing
                throughout the SDLC.
            </h2>

            <p>
                At AmeriPro, we believe that it is essential to have
                dedicated teams of testers. Testing helps save time
                and effort and can ultimately reduce expenditure
                for projects.
            </p>

            <p>
                Our Project Manager ensures that procedures and
                standards are met at all stages of the Software
                Development Life Cycle, starting from Systems
                Requirement through Design and Development.
            </p>

        </div>


        <div class="d3-technology-grid">

            <div class="d3-technology-card">

                <div class="d3-technology-number">01</div>

                <h3>Client Server Application Testing</h3>

                <p>
                    Testing services for client-server applications.
                </p>

            </div>


            <div class="d3-technology-card">

                <div class="d3-technology-number">02</div>

                <h3>Web Application Testing</h3>

                <p>
                    Testing web applications for quality and reliability.
                </p>

            </div>


            <div class="d3-technology-card">

                <div class="d3-technology-number">03</div>

                <h3>Desktop Application Testing</h3>

                <p>
                    Testing desktop applications against
                    defined requirements.
                </p>

            </div>


            <div class="d3-technology-card">

                <div class="d3-technology-number">04</div>

                <h3>Test Case Preparation</h3>

                <p>
                    Test cases using techniques such as
                    Equivalence Partition and Boundary Value Analysis.
                </p>

            </div>


            <div class="d3-technology-card">

                <div class="d3-technology-number">05</div>

                <h3>Test Strategy & Test Plan</h3>

                <p>
                    Preparation of test strategies and test plans.
                </p>

            </div>


            <div class="d3-technology-card">

                <div class="d3-technology-number">06</div>

                <h3>Manual Functional Testing</h3>

                <p>
                    Manual functional test execution across
                    application workflows.
                </p>

            </div>


            <div class="d3-technology-card">

                <div class="d3-technology-number">07</div>

                <h3>Defect Tracking</h3>

                <p>
                    Defect tracking throughout the testing lifecycle.
                </p>

            </div>


            <div class="d3-technology-card">

                <div class="d3-technology-number">08</div>

                <h3>Regression Testing</h3>

                <p>
                    Regression testing to ensure existing
                    functionality remains reliable.
                </p>

            </div>

        </div>

    </div>

</section>


<section class="d3-service-detail-section">

    <div class="d3-container">

        <div class="d3-service-section-heading">

            <span>AUTOMATION TOOLS</span>

            <h2>
                Testing tools used by AmeriPro.
            </h2>

        </div>


        <div class="d3-development-approach-grid">

            <div class="d3-development-card">

                <div class="d3-development-number">
                    01
                </div>

                <h3>
                    Functionality Tools
                </h3>

                <p>
                    Selenium<br>
                    Ranorex
                </p>

            </div>


            <div class="d3-development-card">

                <div class="d3-development-number">
                    02
                </div>

                <h3>
                    Performance Tools
                </h3>

                <p>
                    Visual Studio
                </p>

            </div>


            <div class="d3-development-card">

                <div class="d3-development-number">
                    03
                </div>

                <h3>
                    Defect Tracking
                </h3>

                <p>
                    Bug Tracker
                </p>

            </div>

        </div>

    </div>

</section>


<?php elseif ($slug === 'strategic-resourcing'): ?>


<section class="d3-service-detail-section d3-service-light">

    <div class="d3-container">

        <div class="d3-service-section-heading">

            <span>STRATEGIC RESOURCING</span>

            <h2>
                Flexible technology resources
                for your organization.
            </h2>

            <p>
                We provide a unique solution for local IT Consulting
                Organizations to have a level playing field with
                offshore consulting companies.
            </p>

            <p>
                We provide quick and easy off-the-shelf or customized
                offshore teams exclusively working for your organization.
                We also provide offshore capability for local clients
                to have 24-hour support teams.
            </p>

        </div>


        <div class="d3-development-approach-grid">

            <div class="d3-development-card">

                <div class="d3-development-number">
                    01
                </div>

                <h3>
                    Right Resources
                </h3>

                <p>
                    AmeriPro believes in sourcing and selecting
                    candidates suitable for the job with the
                    right skill and attitude.
                </p>

            </div>


            <div class="d3-development-card">

                <div class="d3-development-number">
                    02
                </div>

                <h3>
                    One-Team Integration
                </h3>

                <p>
                    Selected offshore consultants report to the
                    onshore client's manager and work as part
                    of the existing local team.
                </p>

            </div>


            <div class="d3-development-card">

                <div class="d3-development-number">
                    03
                </div>

                <h3>
                    Flexible Resourcing
                </h3>

                <p>
                    Hand-in-hand, project, leave, backup and
                    24/7 support requirements can be supported.
                </p>

            </div>


            <div class="d3-development-card">

                <div class="d3-development-number">
                    04
                </div>

                <h3>
                    Transparent Remote Staff
                </h3>

                <p>
                    Remote personnel can be monitored through
                    audio, video and system monitoring.
                </p>

            </div>

        </div>

    </div>

</section>


<?php elseif ($slug === 'website-development'): ?>


<section class="d3-service-detail-section d3-service-light">

    <div class="d3-container">

        <div class="d3-service-section-heading">

            <span>WEBSITE DEVELOPMENT</span>

            <h2>
                High-quality web applications
                and websites.
            </h2>

            <p>
                AmeriPro takes pride in its vision and expertise
                for developing extremely high-quality web
                applications and websites.
            </p>

            <p>
                Web applications need to consider many
                multidisciplinary aspects, which can be
                conceptually proven through prototype development.
            </p>

            <p>
                Interface prototypes are usually developed using
                XHTML 1.0 Strict, CSS 2.0, JavaScript and combinations
                of XSLT, XML 1.0, AJAX and other technologies
                required by the application.
            </p>

        </div>


        <div class="d3-development-approach-grid">

            <div class="d3-development-card">

                <div class="d3-development-number">
                    01
                </div>

                <h3>
                    Clickable Prototypes
                </h3>

                <p>
                    Entirely clickable prototypes provide insight
                    into the user journeys that need to be fulfilled
                    by the application.
                </p>

            </div>


            <div class="d3-development-card">

                <div class="d3-development-number">
                    02
                </div>

                <h3>
                    Well Structured
                </h3>

                <p>
                    Structured prototypes provide insight into the
                    candidate information architecture of the
                    end solution.
                </p>

            </div>


            <div class="d3-development-card">

                <div class="d3-development-number">
                    03
                </div>

                <h3>
                    Consistent Design
                </h3>

                <p>
                    Shared components and objects can be kept
                    consistent in look and feel across pages.
                </p>

            </div>


            <div class="d3-development-card">

                <div class="d3-development-number">
                    04
                </div>

                <h3>
                    Clean Code
                </h3>

                <p>
                    Clean, standards-compliant code is prepared
                    to the required quality and development guidelines.
                </p>

            </div>

        </div>

    </div>

</section>


<section class="d3-service-detail-section">

    <div class="d3-container">

        <div class="d3-service-section-heading">

            <span>BENEFITS</span>

            <h2>
                Benefits of prototype-driven
                website development.
            </h2>

        </div>


        <div class="d3-technology-grid">

            <div class="d3-technology-card">
                <div class="d3-technology-number">01</div>
                <h3>Requirements</h3>
                <p>
                    Quickly gather requirements based on
                    live wireframes.
                </p>
            </div>

            <div class="d3-technology-card">
                <div class="d3-technology-number">02</div>
                <h3>Usability</h3>
                <p>
                    Troubleshoot usability and accessibility
                    issues early.
                </p>
            </div>

            <div class="d3-technology-card">
                <div class="d3-technology-number">03</div>
                <h3>Stakeholder Visibility</h3>
                <p>
                    Give stakeholders an opportunity to see
                    the real solution early.
                </p>
            </div>

            <div class="d3-technology-card">
                <div class="d3-technology-number">04</div>
                <h3>User Involvement</h3>
                <p>
                    Involve users from the beginning of
                    the development process.
                </p>
            </div>

            <div class="d3-technology-card">
                <div class="d3-technology-number">05</div>
                <h3>Better Estimates</h3>
                <p>
                    Estimate development time and resources
                    more accurately.
                </p>
            </div>

            <div class="d3-technology-card">
                <div class="d3-technology-number">06</div>
                <h3>Communication</h3>
                <p>
                    Communicate practically with stakeholders
                    throughout development.
                </p>
            </div>

        </div>

    </div>

</section>


<?php endif; ?>

<!-- =====================================================
     FOOTER
===================================================== -->

<?= $this->include('design3/footer') ?>


<script src="<?= base_url('assets/js/design3.js') ?>"></script>

</body>

</html>