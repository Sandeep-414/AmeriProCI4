<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>AmeriPro | Services</title>

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

        <div class="d3-nav-dropdown">

    <a
        href="<?= base_url('design3/services') ?>"
        class="d3-dropdown active"
    >
        Services
        <span>⌄</span>
    </a>

    <div class="d3-dropdown-menu">

        <a href="<?= base_url('design3/services/application-development') ?>">
            Application Development
        </a>

        <a href="<?= base_url('design3/services/application-maintenance') ?>">
            Application Maintenance
        </a>

        <a href="<?= base_url('design3/services/business-intelligence') ?>">
            Business Intelligence
        </a>

        <a href="<?= base_url('design3/services/cloud-computing') ?>">
            Cloud Computing
        </a>

        <a href="<?= base_url('design3/services/infrastructure-management') ?>">
            Infrastructure Management
        </a>

        <a href="<?= base_url('design3/services/product-application-testing') ?>">
            Product &amp; Application Testing
        </a>

        <a href="<?= base_url('design3/services/strategic-resourcing') ?>">
            Strategic Resourcing
        </a>

        <a href="<?= base_url('design3/services/website-development') ?>">
            Website Development
        </a>

    </div>

</div>

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
     SERVICES HERO
===================================================== -->

<section class="d3-services-hero">

    <div class="d3-services-hero-overlay"></div>


    <div class="d3-services-hero-content">

        <span class="d3-services-label">
            OUR SERVICES
        </span>

        <h1>
            Technology Services
            <br>
            Built Around Your Business
        </h1>

        <p>
            Technology capabilities designed to help
            organizations modernize, improve and grow.
        </p>

    </div>

</section>



<!-- =====================================================
     SERVICES BREADCRUMB
===================================================== -->

<section class="d3-services-breadcrumb">

    <div class="d3-services-breadcrumb-inner">

        <h2>
            Our Technology Services
        </h2>


        <div class="d3-services-breadcrumb-links">

            <a href="<?= base_url('design3') ?>">
                Home
            </a>

            <span>/</span>

            <span>
                Services
            </span>

        </div>

    </div>

</section>



<!-- =====================================================
     SERVICES INTRO
===================================================== -->

<section class="d3-section d3-services-section">

    <div class="d3-container">


        <div class="d3-services-heading">

            <div>

                <span class="d3-services-small-label">
                    WHAT WE DO
                </span>

                <h2>
                    Technology Services
                    <br>
                    Designed for Business
                </h2>

            </div>


            <p>

                AmeriPro provides technology services
                supporting application development,
                maintenance, business intelligence,
                cloud computing, infrastructure,
                testing, resourcing and website
                development.

            </p>

        </div>



        <!-- =================================================
             SERVICES GRID
        ================================================== -->

        <div class="d3-services-grid">


            <!-- 01 -->

            <a
                href="<?= base_url('design3/services/application-development') ?>"
                class="d3-service-card"
            >

                <span class="d3-service-number">
                    01
                </span>

                <div class="d3-service-icon">
                    &lt;/&gt;
                </div>

                <h3>
                    Application Development
                </h3>

                <p>
                    Building scalable and reliable
                    software applications for modern
                    business needs.
                </p>

                <span class="d3-service-arrow">
                    ↗
                </span>

            </a>



            <!-- 02 -->

            <a
                href="<?= base_url('design3/services/application-maintenance') ?>"
                class="d3-service-card"
            >

                <span class="d3-service-number">
                    02
                </span>

                <div class="d3-service-icon">
                    ⚙
                </div>

                <h3>
                    Application Maintenance
                </h3>

                <p>
                    Maintaining and enhancing applications
                    to improve performance and reliability.
                </p>

                <span class="d3-service-arrow">
                    ↗
                </span>

            </a>



            <!-- 03 -->

            <a
                href="<?= base_url('design3/services/business-intelligence') ?>"
                class="d3-service-card"
            >

                <span class="d3-service-number">
                    03
                </span>

                <div class="d3-service-icon">
                    ▥
                </div>

                <h3>
                    Business Intelligence
                </h3>

                <p>
                    Turning business data into useful
                    insights for better decision making.
                </p>

                <span class="d3-service-arrow">
                    ↗
                </span>

            </a>



            <!-- 04 -->

            <a
                href="<?= base_url('design3/services/cloud-computing') ?>"
                class="d3-service-card"
            >

                <span class="d3-service-number">
                    04
                </span>

                <div class="d3-service-icon">
                    ☁
                </div>

                <h3>
                    Cloud Computing
                </h3>

                <p>
                    Cloud solutions that support flexibility,
                    scalability and business growth.
                </p>

                <span class="d3-service-arrow">
                    ↗
                </span>

            </a>



            <!-- 05 -->

            <a
                href="<?= base_url('design3/services/infrastructure-management') ?>"
                class="d3-service-card"
            >

                <span class="d3-service-number">
                    05
                </span>

                <div class="d3-service-icon">
                    ▤
                </div>

                <h3>
                    Infrastructure Management
                </h3>

                <p>
                    Technology infrastructure services
                    focused on availability and performance.
                </p>

                <span class="d3-service-arrow">
                    ↗
                </span>

            </a>



            <!-- 06 -->

            <a
                href="<?= base_url('design3/services/product-application-testing') ?>"
                class="d3-service-card"
            >

                <span class="d3-service-number">
                    06
                </span>

                <div class="d3-service-icon">
                    ✓
                </div>

                <h3>
                    Product & Application Testing
                </h3>

                <p>
                    Quality assurance and testing services
                    for dependable applications.
                </p>

                <span class="d3-service-arrow">
                    ↗
                </span>

            </a>



            <!-- 07 -->

            <a
                href="<?= base_url('design3/services/strategic-resourcing') ?>"
                class="d3-service-card"
            >

                <span class="d3-service-number">
                    07
                </span>

                <div class="d3-service-icon">
                    ◉
                </div>

                <h3>
                    Strategic Resourcing
                </h3>

                <p>
                    Technology professionals and resources
                    aligned with business requirements.
                </p>

                <span class="d3-service-arrow">
                    ↗
                </span>

            </a>



            <!-- 08 -->

            <a
                href="<?= base_url('design3/services/website-development') ?>"
                class="d3-service-card"
            >

                <span class="d3-service-number">
                    08
                </span>

                <div class="d3-service-icon">
                    ◎
                </div>

                <h3>
                    Website Development
                </h3>

                <p>
                    Modern websites and digital experiences
                    built for organizations and businesses.
                </p>

                <span class="d3-service-arrow">
                    ↗
                </span>

            </a>

        </div>

    </div>

</section>



<!-- =====================================================
     COMMON FOOTER
===================================================== -->

<?= $this->include('design3/footer') ?>



<script src="<?= base_url('assets/js/design3.js') ?>"></script>


</body>

</html>