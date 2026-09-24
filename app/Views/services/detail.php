<?= $this->include('layouts/header') ?>

<?php

/* =========================================================
   SERVICE DATA
========================================================= */

$serviceDetails = [

    'application-development' => [
        'title' => 'Application Development',
        'eyebrow' => 'APPLICATION ENGINEERING',
        'description' => 'Building scalable, reliable and business-focused applications for modern organizations.',
        'hero_tag' => '01'
    ],

    'application-maintenance' => [
        'title' => 'Application Maintenance',
        'eyebrow' => 'APPLICATION SUPPORT',
        'description' => 'Keeping critical applications reliable, available, optimized and ready for business.',
        'hero_tag' => '02'
    ],

    'business-intelligence' => [
        'title' => 'Business Intelligence',
        'eyebrow' => 'DATA & ANALYTICS',
        'description' => 'Transforming business information into reporting, dashboards and actionable insights.',
        'hero_tag' => '03'
    ],

    'cloud-computing' => [
        'title' => 'Cloud Computing',
        'eyebrow' => 'CLOUD TECHNOLOGY',
        'description' => 'Cloud solutions designed to support flexibility, scalability and business growth.',
        'hero_tag' => '04'
    ],

    'infrastructure-management' => [
        'title' => 'Infrastructure Management',
        'eyebrow' => 'IT INFRASTRUCTURE',
        'description' => 'Technology infrastructure services focused on availability, reliability and performance.',
        'hero_tag' => '05'
    ],

    'product-application-testing' => [
        'title' => 'Product & Application Testing',
        'eyebrow' => 'QUALITY ENGINEERING',
        'description' => 'Quality assurance and testing services for dependable and reliable applications.',
        'hero_tag' => '06'
    ],

    'strategic-resourcing' => [
        'title' => 'Strategic Resourcing',
        'eyebrow' => 'TALENT & RESOURCING',
        'description' => 'Technology professionals and resources aligned with business requirements.',
        'hero_tag' => '07'
    ],

    'website-development' => [
        'title' => 'Website Development',
        'eyebrow' => 'DIGITAL EXPERIENCE',
        'description' => 'Modern websites and digital experiences designed for organizations and businesses.',
        'hero_tag' => '08'
    ]

];

$service = $serviceDetails[$slug] ?? null;


/* =========================================================
   APPLICATION DEVELOPMENT CONTENT
========================================================= */

$developmentIntro = "We enhance any business through a specialized web application development process putting across the services and products in the most effectual manner. We have a stand-out track record of consistent architect and building solutions for large, complex, high-touch projects and programs. Web application development expertise in having tools and ideas to make business better online and offline.";

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


/* =========================================================
   APPLICATION MAINTENANCE CONTENT
========================================================= */

$maintenanceIntro = "Application Support and Maintenance are critical for business continuity. AmeriPro specializes in providing support and maintenance services for web applications. Our service model is designed to ensure availability of systems for use, reduce maintenance & support efforts and improve scalability by improving productivity over time. AmeriPro believes that professional maintenance and supports useful improvements and optimizations. Having the right support for the applications can ensure that issues are resolved in a timely and efficient manner with minimum downtime.";

$maintenanceServices = [

    'Supporting and maintaining critical core systems',
    'Error tracking and debugging',
    'End user help desk support',
    'Technical troubleshooting',
    'Application upgrades and enhancements',
    'Web content updates',
    'Application Performance Tuning'

];


/* =========================================================
   BUSINESS INTELLIGENCE CONTENT
========================================================= */

$biReportingSolutions = [

    'Design, Development and Testing of Canned and Adhoc Reports',
    'Static and Drill through Reports',
    'Enterprise Reporting, KPIs',
    'Dashboard/Scorecard Applications',
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

<style>

/* =========================================================
   MODERN SERVICE PAGE
========================================================= */

.service-page {
    background: #f7f9fc;
    color: #17263a;
}


/* =========================================================
   HERO
========================================================= */

.service-hero {
    position: relative;

    min-height: 560px;

    overflow: hidden;

    background:
        radial-gradient(
            circle at 80% 25%,
            rgba(49, 199, 218, 0.18),
            transparent 30%
        ),
        radial-gradient(
            circle at 70% 80%,
            rgba(42, 110, 220, 0.16),
            transparent 35%
        ),
        #071827;

    display: flex;

    align-items: center;
}


.service-hero-grid {
    position: absolute;

    inset: 0;

    opacity: 0.12;

    background-image:
        linear-gradient(
            rgba(255,255,255,0.08) 1px,
            transparent 1px
        ),
        linear-gradient(
            90deg,
            rgba(255,255,255,0.08) 1px,
            transparent 1px
        );

    background-size: 55px 55px;
}


.service-hero-content {
    position: relative;

    z-index: 5;

    padding: 100px 0;
}


.service-eyebrow {
    display: inline-flex;

    align-items: center;

    gap: 12px;

    margin-bottom: 25px;

    color: #5ed8e8;

    font-size: 12px;

    font-weight: 800;

    letter-spacing: 3px;
}


.service-eyebrow::before {
    content: "";

    width: 34px;

    height: 2px;

    background: #5ed8e8;
}


.service-hero h1 {
    max-width: 760px;

    margin: 0 0 25px;

    color: #ffffff;

    font-size: clamp(48px, 7vw, 82px);

    font-weight: 750;

    line-height: 1.02;

    letter-spacing: -3px;
}


.service-hero-description {
    max-width: 650px;

    margin-bottom: 35px;

    color: #aebdca;

    font-size: 19px;

    line-height: 1.8;
}


.service-hero-link {
    display: inline-flex;

    align-items: center;

    gap: 12px;

    padding: 15px 23px;

    border: 1px solid rgba(255,255,255,0.2);

    border-radius: 5px;

    color: #ffffff;

    text-decoration: none;

    font-size: 14px;

    font-weight: 700;

    background: rgba(255,255,255,0.05);

    transition: all .25s ease;
}


.service-hero-link:hover {
    color: #071827;

    background: #ffffff;

    transform: translateY(-2px);
}


/* =========================================================
   HERO VISUAL
========================================================= */

.service-orbit {
    position: absolute;

    right: 8%;

    top: 50%;

    width: 440px;

    height: 440px;

    transform: translateY(-50%);
}


.orbit-circle {
    position: absolute;

    border: 1px solid rgba(94,216,232,0.22);

    border-radius: 50%;
}


.orbit-circle.one {
    inset: 0;
}


.orbit-circle.two {
    inset: 55px;
}


.orbit-circle.three {
    inset: 115px;

    background:
        radial-gradient(
            circle,
            rgba(94,216,232,0.16),
            rgba(40,105,205,0.04)
        );
}


.orbit-core {
    position: absolute;

    left: 50%;
    top: 50%;

    transform: translate(-50%, -50%);

    width: 125px;
    height: 125px;

    border-radius: 30px;

    background:
        linear-gradient(
            145deg,
            #ffffff,
            #dceef3
        );

    display: flex;

    align-items: center;
    justify-content: center;

    color: #08788e;

    font-size: 38px;

    font-weight: 800;

    box-shadow:
        0 30px 80px rgba(0,0,0,0.35);
}


.orbit-dot {
    position: absolute;

    width: 13px;
    height: 13px;

    border-radius: 50%;

    background: #5ed8e8;

    box-shadow:
        0 0 0 8px rgba(94,216,232,0.10),
        0 0 30px rgba(94,216,232,0.8);
}


.orbit-dot.one {
    top: 60px;
    right: 85px;
}


.orbit-dot.two {
    bottom: 75px;
    left: 50px;
}


.orbit-dot.three {
    top: 205px;
    right: 0;
}


/* =========================================================
   SERVICE NUMBER
========================================================= */

.service-number-box {
    position: absolute;

    right: 55px;

    top: 55px;

    z-index: 4;

    color: rgba(255,255,255,0.12);

    font-size: 100px;

    font-weight: 800;

    line-height: 1;
}


/* =========================================================
   INTRO
========================================================= */

.service-intro-section {
    padding: 100px 0;
}


.service-intro-label {
    margin-bottom: 14px;

    color: #08788e;

    font-size: 12px;

    font-weight: 800;

    letter-spacing: 2.5px;
}


.service-intro-heading {
    max-width: 780px;

    margin-bottom: 25px;

    color: #10243a;

    font-size: clamp(35px, 4.5vw, 56px);

    line-height: 1.1;

    font-weight: 750;

    letter-spacing: -2px;
}


.service-intro-text {
    max-width: 950px;

    margin: 0;

    color: #647588;

    font-size: 18px;

    line-height: 1.9;
}


/* =========================================================
   APPROACH CARDS
========================================================= */

.modern-card {
    height: 100%;

    padding: 35px;

    background: #ffffff;

    border: 1px solid #e4eaf0;

    border-radius: 18px;

    box-shadow:
        0 12px 45px rgba(23,45,70,0.06);

    transition: all .3s ease;
}


.modern-card:hover {
    transform: translateY(-7px);

    box-shadow:
        0 25px 60px rgba(23,45,70,0.12);
}


.card-number {
    display: flex;

    align-items: center;
    justify-content: center;

    width: 48px;
    height: 48px;

    margin-bottom: 25px;

    border-radius: 14px;

    background: #e9f8fa;

    color: #08788e;

    font-size: 13px;

    font-weight: 800;
}


.modern-card h3 {
    margin-bottom: 15px;

    color: #10243a;

    font-size: 22px;

    font-weight: 700;
}


.modern-card p {
    margin: 0;

    color: #66798c;

    font-size: 16px;

    line-height: 1.8;
}


/* =========================================================
   SECTION
========================================================= */

.service-section {
    padding: 100px 0;
}


.service-section-light {
    background: #ffffff;
}


.section-top {
    max-width: 750px;

    margin-bottom: 55px;
}


.section-label {
    display: block;

    margin-bottom: 14px;

    color: #08788e;

    font-size: 12px;

    font-weight: 800;

    letter-spacing: 2.5px;
}


.section-heading {
    margin: 0 0 18px;

    color: #10243a;

    font-size: clamp(34px, 4.5vw, 52px);

    line-height: 1.1;

    font-weight: 750;

    letter-spacing: -2px;
}


.section-description {
    margin: 0;

    color: #697b8e;

    font-size: 17px;

    line-height: 1.8;
}


/* =========================================================
   TECHNOLOGY CARDS
========================================================= */

.tech-card {
    position: relative;

    height: 100%;

    padding: 30px;

    overflow: hidden;

    border-radius: 18px;

    border: 1px solid #e3e9ef;

    background: #ffffff;

    transition: all .3s ease;
}


.tech-card::after {
    content: "";

    position: absolute;

    right: -45px;

    bottom: -45px;

    width: 120px;
    height: 120px;

    border-radius: 50%;

    background: #eaf8fa;

    transition: all .3s ease;
}


.tech-card:hover {
    transform: translateY(-6px);

    border-color: #b7e6eb;

    box-shadow:
        0 22px 55px rgba(23,45,70,0.10);
}


.tech-card:hover::after {
    transform: scale(1.5);
}


.tech-number {
    position: relative;

    z-index: 2;

    color: #08788e;

    font-size: 12px;

    font-weight: 800;

    letter-spacing: 2px;
}


.tech-card h3 {
    position: relative;

    z-index: 2;

    margin: 12px 0 20px;

    color: #10243a;

    font-size: 20px;

    font-weight: 700;
}


.tech-list {
    position: relative;

    z-index: 2;

    margin: 0;

    padding: 0;

    list-style: none;
}


.tech-list li {
    position: relative;

    margin-bottom: 10px;

    padding-left: 20px;

    color: #66798c;

    font-size: 15px;
}


.tech-list li::before {
    content: "";

    position: absolute;

    left: 0;

    top: 9px;

    width: 6px;
    height: 6px;

    border-radius: 50%;

    background: #08788e;
}


/* =========================================================
   BI / MAINTENANCE LIST CARDS
========================================================= */

.feature-card {
    display: flex;

    align-items: flex-start;

    gap: 20px;

    height: 100%;

    padding: 25px;

    border: 1px solid #e4eaf0;

    border-radius: 15px;

    background: #ffffff;

    transition: all .25s ease;
}


.feature-card:hover {
    transform: translateY(-4px);

    box-shadow:
        0 18px 45px rgba(23,45,70,0.09);
}


.feature-icon {
    flex: 0 0 auto;

    width: 38px;
    height: 38px;

    border-radius: 11px;

    background: #e8f7fa;

    color: #08788e;

    display: flex;

    align-items: center;
    justify-content: center;

    font-size: 14px;

    font-weight: 800;
}


.feature-card p {
    margin: 0;

    color: #5f7184;

    font-size: 16px;

    line-height: 1.6;
}


/* =========================================================
   DARK STATEMENT
========================================================= */

.service-highlight {
    position: relative;

    overflow: hidden;

    padding: 75px 0;

    background: #071827;
}


.service-highlight::before {
    content: "";

    position: absolute;

    width: 500px;
    height: 500px;

    right: -200px;
    top: -250px;

    border-radius: 50%;

    border: 1px solid rgba(94,216,232,0.15);
}


.service-highlight-content {
    position: relative;

    z-index: 2;
}


.service-highlight h2 {
    max-width: 850px;

    margin: 0;

    color: #ffffff;

    font-size: clamp(30px, 4vw, 46px);

    line-height: 1.2;

    font-weight: 700;

    letter-spacing: -1px;
}


.service-highlight p {
    max-width: 800px;

    margin: 20px 0 0;

    color: #9eb0bf;

    font-size: 17px;

    line-height: 1.8;
}


/* =========================================================
   CTA
========================================================= */

.service-cta {
    padding: 80px 0;

    background:
        linear-gradient(
            135deg,
            #eaf8fa,
            #f5f8fb
        );
}


.service-cta-box {
    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 30px;

    padding: 45px;

    border-radius: 22px;

    background: #ffffff;

    box-shadow:
        0 20px 60px rgba(23,45,70,0.08);
}


.service-cta-box h2 {
    margin: 0 0 10px;

    color: #10243a;

    font-size: 30px;

    font-weight: 750;
}


.service-cta-box p {
    margin: 0;

    color: #687b8e;
}


.service-cta-button {
    display: inline-flex;

    align-items: center;

    gap: 10px;

    flex-shrink: 0;

    padding: 15px 24px;

    border-radius: 6px;

    background: #08788e;

    color: #ffffff;

    text-decoration: none;

    font-size: 14px;

    font-weight: 700;

    transition: all .25s ease;
}


.service-cta-button:hover {
    background: #071827;

    color: #ffffff;

    transform: translateY(-2px);
}


/* =========================================================
   NOT FOUND
========================================================= */

.service-not-found {
    padding: 120px 0;

    text-align: center;
}


.service-not-found h1 {
    color: #10243a;

    font-size: 48px;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1100px) {

    .service-orbit {
        right: -80px;

        opacity: .45;
    }

}


@media (max-width: 991px) {

    .service-hero {
        min-height: auto;
    }

    .service-hero-content {
        padding: 80px 0;
    }

    .service-orbit {
        display: none;
    }

    .service-number-box {
        right: 25px;
        top: 30px;

        font-size: 70px;
    }

    .service-intro-section,
    .service-section {
        padding: 75px 0;
    }

    .service-cta-box {
        flex-direction: column;

        align-items: flex-start;
    }

}


@media (max-width: 575px) {

    .service-hero-content {
        padding: 70px 0;
    }

    .service-hero h1 {
        font-size: 46px;

        letter-spacing: -2px;
    }

    .service-hero-description {
        font-size: 16px;
    }

    .service-number-box {
        font-size: 55px;
    }

    .service-intro-section,
    .service-section {
        padding: 60px 0;
    }

    .modern-card {
        padding: 27px;
    }

    .tech-card {
        padding: 25px;
    }

    .service-cta {
        padding: 55px 0;
    }

    .service-cta-box {
        padding: 30px;
    }

}

</style>


<main class="service-page">


<?php if ($service): ?>


    <!-- =====================================================
         MODERN HERO
    ====================================================== -->

    <section class="service-hero">

        <div class="service-hero-grid"></div>

        <div class="service-number-box">
            <?= esc($service['hero_tag']) ?>
        </div>


        <div class="container">

            <div class="service-hero-content">

                <div class="service-eyebrow">

                    <?= esc($service['eyebrow']) ?>

                </div>


                <h1>
                    <?= esc($service['title']) ?>
                </h1>


                <p class="service-hero-description">
                    <?= esc($service['description']) ?>
                </p>


                <a
                    href="#service-content"
                    class="service-hero-link"
                >
                    Explore Service
                    <span>↓</span>
                </a>

            </div>

        </div>


        <!-- HERO VISUAL -->

        <div class="service-orbit">

            <div class="orbit-circle one"></div>

            <div class="orbit-circle two"></div>

            <div class="orbit-circle three"></div>

            <div class="orbit-core">
                AP
            </div>

            <div class="orbit-dot one"></div>

            <div class="orbit-dot two"></div>

            <div class="orbit-dot three"></div>

        </div>

    </section>


    <!-- =====================================================
         CONTENT
    ====================================================== -->

    <div id="service-content">


    <?php if ($slug === 'application-development'): ?>


        <!-- APPLICATION DEVELOPMENT INTRO -->

        <section class="service-intro-section">

            <div class="container">

                <div class="service-intro-label">
                    APPLICATION DEVELOPMENT
                </div>

                <h2 class="service-intro-heading">
                    Engineering digital solutions
                    for complex business needs.
                </h2>

                <p class="service-intro-text">
                    <?= esc($developmentIntro) ?>
                </p>

            </div>

        </section>


        <!-- APPROACHES -->

        <section class="service-section service-section-light">

            <div class="container">

                <div class="section-top">

                    <span class="section-label">
                        OUR APPROACH
                    </span>

                    <h2 class="section-heading">
                        Two approaches.
                        One quality standard.
                    </h2>

                    <p class="section-description">
                        AmeriPro follows the following two approaches
                        for development.
                    </p>

                </div>


                <div class="row g-4">

                    <?php foreach ($developmentApproaches as $approach): ?>

                        <div class="col-lg-6">

                            <div class="modern-card">

                                <div class="card-number">
                                    <?= esc($approach['number']) ?>
                                </div>

                                <h3>
                                    <?= esc($approach['title']) ?>
                                </h3>

                                <p>
                                    <?= esc($approach['text']) ?>
                                </p>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </section>


        <!-- TECHNOLOGY -->

        <section class="service-section">

            <div class="container">

                <div class="section-top">

                    <span class="section-label">
                        TECHNOLOGY EXPERTISE
                    </span>

                    <h2 class="section-heading">
                        Technologies,
                        tools & platforms.
                    </h2>

                    <p class="section-description">
                        Our application development team has
                        extensive experience with a wide variety
                        of application software technologies,
                        tools, and platforms including:
                    </p>

                </div>


                <div class="row g-4">

                    <?php foreach ($technologies as $technology): ?>

                        <div class="col-md-6 col-lg-4">

                            <div class="tech-card">

                                <div class="tech-number">
                                    <?= esc($technology['number']) ?>
                                </div>

                                <h3>
                                    <?= esc($technology['title']) ?>
                                </h3>

                                <ul class="tech-list">

                                    <?php foreach ($technology['items'] as $item): ?>

                                        <li>
                                            <?= esc($item) ?>
                                        </li>

                                    <?php endforeach; ?>

                                </ul>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </section>


        <!-- DEVELOPMENT HIGHLIGHT -->

        <section class="service-highlight">

            <div class="container">

                <div class="service-highlight-content">

                    <h2>
                        Robust and scalable applications
                        designed around business objectives.
                    </h2>

                    <p>
                        We expertise and adapt the highest
                        quality processes which enables us to
                        deliver robust and scalable applications
                        that help organizations reduce complexity,
                        mitigate risks and achieve business objectives.
                    </p>

                </div>

            </div>

        </section>


    <?php elseif ($slug === 'application-maintenance'): ?>


        <!-- APPLICATION MAINTENANCE -->

        <section class="service-intro-section">

            <div class="container">

                <div class="service-intro-label">
                    APPLICATION SUPPORT & MAINTENANCE
                </div>

                <h2 class="service-intro-heading">
                    Reliable applications.
                    Continuous support.
                </h2>

                <p class="service-intro-text">
                    <?= esc($maintenanceIntro) ?>
                </p>

            </div>

        </section>


        <section class="service-section service-section-light">

            <div class="container">

                <div class="section-top">

                    <span class="section-label">
                        SUPPORT SERVICES
                    </span>

                    <h2 class="section-heading">
                        Keeping applications
                        running efficiently.
                    </h2>

                </div>


                <div class="row g-4">

                    <?php foreach ($maintenanceServices as $index => $item): ?>

                        <div class="col-md-6">

                            <div class="feature-card">

                                <div class="feature-icon">
                                    <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>
                                </div>

                                <p>
                                    <?= esc($item) ?>
                                </p>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </section>


        <section class="service-highlight">

            <div class="container">

                <div class="service-highlight-content">

                    <h2>
                        Minimizing downtime while
                        improving application performance.
                    </h2>

                    <p>
                        AmeriPro's application support and
                        maintenance services focus on availability,
                        timely issue resolution, ongoing improvements
                        and application performance.
                    </p>

                </div>

            </div>

        </section>


    <?php elseif ($slug === 'business-intelligence'): ?>


        <!-- =================================================
             BUSINESS INTELLIGENCE
        ================================================== -->

        <section class="service-intro-section">

            <div class="container">

                <div class="service-intro-label">
                    BUSINESS INTELLIGENCE
                </div>

                <h2 class="service-intro-heading">
                    Turn business information
                    into meaningful insight.
                </h2>

                <p class="service-intro-text">
                    AmeriPro's Business Intelligence services
                    include reporting solutions together with
                    maintenance, operation and production support.
                </p>

            </div>

        </section>


        <!-- BI REPORTING -->

        <section class="service-section service-section-light">

            <div class="container">

                <div class="section-top">

                    <span class="section-label">
                        BI REPORTING SOLUTIONS
                    </span>

                    <h2 class="section-heading">
                        Reporting that makes
                        business information useful.
                    </h2>

                    <p class="section-description">
                        Our BI reporting solutions cover reporting,
                        dashboards, KPIs and supporting technologies.
                    </p>

                </div>


                <div class="row g-4">

                    <?php foreach ($biReportingSolutions as $index => $item): ?>

                        <div class="col-md-6">

                            <div class="feature-card">

                                <div class="feature-icon">
                                    <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>
                                </div>

                                <p>
                                    <?= esc($item) ?>
                                </p>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </section>


        <!-- SUPPORT -->

        <section class="service-section">

            <div class="container">

                <div class="section-top">

                    <span class="section-label">
                        OPERATIONS & SUPPORT
                    </span>

                    <h2 class="section-heading">
                        Maintenance, operation
                        and production support.
                    </h2>

                    <p class="section-description">
                        Supporting BI environments and reporting
                        operations for ongoing business use.
                    </p>

                </div>


                <div class="row g-4">

                    <?php foreach ($biProductionSupport as $index => $item): ?>

                        <div class="col-md-6">

                            <div class="feature-card">

                                <div class="feature-icon">
                                    <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>
                                </div>

                                <p>
                                    <?= esc($item) ?>
                                </p>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </section>


        <!-- BI HIGHLIGHT -->

        <section class="service-highlight">

            <div class="container">

                <div class="service-highlight-content">

                    <h2>
                        From reporting and KPIs
                        to operational support.
                    </h2>

                    <p>
                        Business Intelligence services cover
                        reporting solutions, dashboards, operational
                        monitoring, ETL support and report operations.
                    </p>

                </div>

            </div>

        </section>


    <?php else: ?>


        <!-- =================================================
             OTHER SERVICES
        ================================================== -->

        <section class="service-intro-section">

            <div class="container">

                <div class="service-intro-label">
                    AMERIPRO SOLUTIONS
                </div>

                <h2 class="service-intro-heading">
                    <?= esc($service['title']) ?>
                </h2>

                <p class="service-intro-text">
                    <?= esc($service['description']) ?>
                </p>

            </div>

        </section>


        <section class="service-highlight">

            <div class="container">

                <div class="service-highlight-content">

                    <h2>
                        Technology designed
                        around business needs.
                    </h2>

                    <p>
                        Explore AmeriPro Solutions for technology
                        services designed to support modern business
                        requirements.
                    </p>

                </div>

            </div>

        </section>


    <?php endif; ?>


    </div>


    <!-- =====================================================
         CTA
    ====================================================== -->

    <section class="service-cta">

        <div class="container">

            <div class="service-cta-box">

                <div>

                    <h2>
                        Explore more AmeriPro services.
                    </h2>

                    <p>
                        Discover technology solutions designed
                        around your business requirements.
                    </p>

                </div>


                <a
                    href="<?= base_url('services') ?>"
                    class="service-cta-button"
                >
                    View All Services →
                </a>

            </div>

        </div>

    </section>


<?php else: ?>


    <section class="service-not-found">

        <div class="container">

            <h1>
                Service Not Found
            </h1>

            <p>
                The requested service could not be found.
            </p>

            <br>

            <a
                href="<?= base_url('services') ?>"
                class="service-cta-button"
            >
                ← Back to Services
            </a>

        </div>

    </section>


<?php endif; ?>


</main>


<?= $this->include('layouts/footer') ?>