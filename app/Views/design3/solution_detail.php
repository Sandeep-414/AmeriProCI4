<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        <?= esc($slug) ?> | AmeriPro Solutions
    </title>

    <link
        rel="stylesheet"
        href="<?= base_url('assets/css/design3.css') ?>?v=<?= time() ?>"
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
            class="d3-dropdown"
        >
            Services
            <span>⌄</span>
        </a>

        <a
            href="<?= base_url('design3/solutions') ?>"
            class="d3-dropdown active"
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


<?php

/* =====================================================
   SOLUTION DATA
===================================================== */

$solutions = [

    'automated-messaging' => [

        'number' => '01',

        'title' => 'Automated Messaging',

        'eyebrow' => 'COMMUNICATION SOLUTIONS',

        'description' =>
            'Reliable communication solutions using phone, text and email messaging to help organizations connect with customers, parishioners and patients.',

        'icon' => 'MSG',

        'content' => [

            'Reliable communication solutions using phone, text and email messaging to help organizations connect with customers, parishioners and patients.'

        ]

    ],


    'data-warehousing' => [

        'number' => '02',

        'title' => 'Data Warehousing',

        'eyebrow' => 'DATA & ANALYTICS',

        'description' =>
            'Centralized data solutions that provide easier access to information, business analysis, forecasting and better decision making.',

        'icon' => 'DW',

        'content' => [

    [
        'title' => 'Architecture Design and Modeling',
        'description' => 'Architecture design and modeling services for creating structured and scalable data warehouse environments.'
    ],

    [
        'title' => 'Data Warehouse Migration',
        'description' => 'Data warehouse migration services to help organizations move and modernize existing data environments.'
    ],

    [
        'title' => 'Enterprise Data Management',
        'description' => 'Enterprise data management solutions for organizing, managing and maintaining business data.'
    ],

    [
        'title' => 'Analytical Services',
        'description' => 'Analytical services that help organizations use business data for reporting, analysis and informed decision making.'
    ],

    [
        'title' => 'Performance Services',
        'description' => 'Performance-focused services designed to improve the efficiency and usability of data warehouse environments.'
    ]

]

    ],


    'sap-solutions' => [

        'number' => '03',

        'title' => 'SAP Solutions',

        'eyebrow' => 'ENTERPRISE SAP',

        'description' =>
            'SAP services supporting implementations, upgrades, global rollouts, testing automation and application management services.',

        'icon' => 'SAP',

        'content' => [

            'Implementations',

            'Upgrades',

            'Global Rollouts',

            'Testing Automation',

            'Application Management Services'

        ],

        'paragraphs' => [

            'We provide services to companies globally ranging in size from mid-sized businesses to the Fortune 50. Our vast experience, high skilled consultants, and proprietary tools allow us to help companies make informed decisions about their business strategies, whether it is planning an upgrade, global rollout, or taking advantage of the new SAP service bundles included in the Enhancement Packages.',

            'Our expertise and capabilities in implementing and maintaining complex ERP environments translates into unmatched efficiency for our customers, while reducing overall costs and timelines.'

        ]

    ],


    'gis-solutions' => [

        'number' => '04',

        'title' => 'GIS Solutions',

        'eyebrow' => 'GEOGRAPHIC INFORMATION',

        'description' =>
            'Geographic information solutions that help organizations gather, manage and use spatial information to support informed decisions.',

        'icon' => 'GIS',

        'content' => [

            'Gather geographic information',

            'Manage spatial information',

            'Use location-based information',

            'Support informed decisions'

        ]

    ],


    'crm' => [

        'number' => '05',

        'title' => 'Customer Relationship Management',

        'eyebrow' => 'CRM SOLUTIONS',

        'description' =>
            'CRM solutions designed to improve customer relationships, increase efficiency and support customer-centric business processes.',

        'icon' => 'CRM',

        'content' => [

            'Customer information',

            'Customer relationships',

            'Business processes',

            'Improved efficiency'

        ]

    ],


    'document-management' => [

        'number' => '06',

        'title' => 'Document Management',

        'eyebrow' => 'DOCUMENT & INFORMATION',

        'description' =>
            'End-to-end document management solutions for scanning, extracting, storing, indexing and analyzing business information.',

        'icon' => 'DOC',

        'content' => [

            'Batch Scan and Upload Service',

            'Document Template Builder',

            'Document OCR Service',

            'Document Indexing & Data Analysis Tool'

        ]

    ]

];


/* =====================================================
   FIND CURRENT SOLUTION
===================================================== */

$solution = $solutions[$slug] ?? null;


/* =====================================================
   404 STYLE MESSAGE IF INVALID SLUG
===================================================== */

if (!$solution):

?>

<section class="d3-solution-detail-not-found">

    <div>

        <span>
            SOLUTION NOT FOUND
        </span>

        <h1>
            Solution not available
        </h1>

        <p>
            The requested solution could not be found.
        </p>

        <a
            href="<?= base_url('design3/solutions') ?>"
            class="d3-solutions-button"
        >
            Back to Solutions
            <span>→</span>
        </a>

    </div>

</section>


<?php else: ?>


<!-- =====================================================
     SOLUTION HERO
===================================================== -->

<section class="d3-solution-detail-hero">

    <div class="d3-solution-detail-overlay"></div>


    <div class="d3-solution-detail-content">

        <div class="d3-solution-detail-top">

            <span class="d3-solution-detail-eyebrow">
                <?= esc($solution['eyebrow']) ?>
            </span>

            <span class="d3-solution-detail-number">
                <?= esc($solution['number']) ?>
            </span>

        </div>


        <div class="d3-solution-detail-icon">

            <?= esc($solution['icon']) ?>

        </div>


        <h1>
            <?= esc($solution['title']) ?>
        </h1>


        <p>
            <?= esc($solution['description']) ?>
        </p>

    </div>

</section>



<!-- =====================================================
     BREADCRUMB
===================================================== -->

<section class="d3-solution-detail-breadcrumb">

    <div class="d3-solution-detail-breadcrumb-inner">

        <h2>
            <?= esc($solution['title']) ?>
        </h2>


        <div>

            <a href="<?= base_url('design3') ?>">
                Home
            </a>

            <span>
                /
            </span>

            <a href="<?= base_url('design3/solutions') ?>">
                Solutions
            </a>

            <span>
                /
            </span>

            <strong>
                <?= esc($solution['title']) ?>
            </strong>

        </div>

    </div>

</section>



<!-- =====================================================
     MAIN CONTENT
===================================================== -->

<section class="d3-solution-detail-content-section">

    <div class="d3-solution-detail-container">


        <div class="d3-solution-detail-intro">

            <span class="d3-solution-detail-label">
                <?= esc($solution['eyebrow']) ?>
            </span>


            <h2>
                <?= esc($solution['title']) ?>
            </h2>


            <p>
                <?= esc($solution['description']) ?>
            </p>

        </div>



        <?php if (!empty($solution['paragraphs'])): ?>

            <div class="d3-solution-detail-paragraphs">

                <?php foreach ($solution['paragraphs'] as $paragraph): ?>

                    <p>
                        <?= esc($paragraph) ?>
                    </p>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>



        <!-- =================================================
             SERVICES / CAPABILITIES
        ================================================== -->

        <div class="d3-solution-detail-capabilities">

            <div class="d3-solution-detail-capabilities-heading">

                <span>
                    WHAT WE PROVIDE
                </span>

                <h2>
                    Our capabilities
                </h2>

            </div>


            <div class="d3-solution-detail-list">

               <?php foreach ($solution['content'] as $index => $item): ?>

    <?php

    /*
     * Some solutions use simple strings:
     * 'Implementations'
     *
     * Data Warehousing uses:
     * [
     *     'title' => '...',
     *     'description' => '...'
     * ]
     */

    if (is_array($item)) {

        $itemTitle = $item['title'] ?? '';

        $itemDescription =
            $item['description'] ?? '';

    } else {

        $itemTitle = $item;

        $itemDescription =
            $solution['description'] ?? '';

    }

    ?>

    <div class="d3-solution-detail-item">

        <button
            type="button"
            class="d3-solution-detail-item-button"
        >

            <span class="d3-solution-detail-item-number">
                <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>
            </span>


            <span class="d3-solution-detail-item-title">

                <?= esc($itemTitle) ?>

            </span>


            <span class="d3-solution-detail-item-arrow">
                →
            </span>

        </button>


        <div class="d3-solution-detail-item-description">

            <?= esc($itemDescription) ?>

        </div>

    </div>

<?php endforeach; ?>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     CTA
===================================================== -->

<section class="d3-solution-detail-cta">

    <div class="d3-solution-detail-cta-inner">

        <div>

            <span>
                AMERIPRO SOLUTIONS
            </span>

            <h2>
                Technology solutions
                designed around your business.
            </h2>

            <p>
                Discover how AmeriPro Solutions can support
                your organization's technology requirements.
            </p>

        </div>


        <a
            href="<?= base_url('design3/contact') ?>"
            class="d3-solutions-button"
        >

            Contact Us

            <span>
                →
            </span>

        </a>

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