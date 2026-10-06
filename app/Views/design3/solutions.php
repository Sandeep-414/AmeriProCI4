<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Solutions | AmeriPro Solutions
    </title>

    <!-- Design 3 CSS -->
    <link
        rel="stylesheet"
        href="<?= base_url('assets/css/design3.css') ?>?v=<?= time() ?>"
    >

</head>


<body class="d3-page">


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

            <span>
                ⌄
            </span>

        </a>


       <div class="d3-nav-dropdown">

    <a
        href="<?= base_url('design3/solutions') ?>"
        class="d3-dropdown active"
    >
        Solutions
        <span>⌄</span>
    </a>

    <div class="d3-dropdown-menu">

        <a href="<?= base_url('design3/solutions/automated-messaging') ?>">
            Automated Messaging
        </a>

        <a href="<?= base_url('design3/solutions/data-warehousing') ?>">
            Data Warehousing
        </a>

        <a href="<?= base_url('design3/solutions/sap-solutions') ?>">
            SAP Solutions
        </a>

        <a href="<?= base_url('design3/solutions/gis-solutions') ?>">
            GIS Solutions
        </a>

        <a href="<?= base_url('design3/solutions/crm') ?>">
            CRM
        </a>

        <a href="<?= base_url('design3/solutions/document-management') ?>">
            Document Management
        </a>

    </div>

</div>


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
     SOLUTIONS HERO
===================================================== -->

<section class="d3-solutions-hero">

    <div class="d3-solutions-hero-overlay"></div>

    <div class="d3-solutions-hero-content">

        <span class="d3-solutions-hero-label">
            OUR SOLUTIONS
        </span>

        <h1>
            Innovative Solutions
            <br>
            for Better Business
        </h1>

        <p>
            Technology solutions designed to help organizations
            improve operations, manage information and achieve
            better business outcomes.
        </p>

    </div>

</section>


<!-- =====================================================
     SOLUTIONS BREADCRUMB
===================================================== -->

<section class="d3-solutions-breadcrumb">

    <div class="d3-solutions-breadcrumb-inner">

        <h2>
            Our Solutions
        </h2>

        <div class="d3-solutions-breadcrumb-links">

            <a href="<?= base_url('design3') ?>">
                Home
            </a>

            <span>/</span>

            <strong>
                Solutions
            </strong>

        </div>

    </div>

</section>



<!-- =====================================================
     INTRO
===================================================== -->

<section class="d3-solutions-intro">

    <div class="d3-container">


        <div class="d3-solutions-intro-grid">


            <div>

                <span class="d3-solutions-label">
                    OUR SOLUTIONS
                </span>


                <h2>

                    Technology solutions
                    <br>

                    built for business.

                </h2>

            </div>


            <div>

                <p>

                    AmeriPro Solutions provides technology
                    solutions that help organizations improve
                    operations, manage information and make
                    better business decisions.

                </p>


                <p>

                    Our solutions cover automated messaging,
                    data warehousing, SAP, geographic information
                    systems, customer relationship management
                    and document management.

                </p>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     SOLUTIONS GRID
===================================================== -->

<section class="d3-solutions-grid-section">

    <div class="d3-container">


        <div class="d3-solutions-grid">


            <!-- =================================================
                 01 AUTOMATED MESSAGING
            ================================================== -->

            <a
                href="<?= base_url('design3/solutions/automated-messaging') ?>"
                class="d3-solution-card"
            >

                <span class="d3-solution-number">
                    01
                </span>


                <div class="d3-solution-icon">
                    ✉
                </div>


                <h3>
                    Automated Messaging
                </h3>


                <p>

                    Reliable communication solutions using
                    phone, text and email messaging to help
                    organizations connect with customers,
                    parishioners and patients.

                </p>


                <span class="d3-solution-arrow">
                    ↗
                </span>

            </a>



            <!-- =================================================
                 02 DATA WAREHOUSING
            ================================================== -->

            <a
                href="<?= base_url('design3/solutions/data-warehousing') ?>"
                class="d3-solution-card"
            >

                <span class="d3-solution-number">
                    02
                </span>


                <div class="d3-solution-icon">
                    ▥
                </div>


                <h3>
                    Data Warehousing
                </h3>


                <p>

                    Centralized data solutions that provide
                    easier access to information, business
                    analysis, forecasting and better
                    decision making.

                </p>


                <span class="d3-solution-arrow">
                    ↗
                </span>

            </a>



            <!-- =================================================
                 03 SAP
            ================================================== -->

            <a
                href="<?= base_url('design3/solutions/sap-solutions') ?>"
                class="d3-solution-card"
            >

                <span class="d3-solution-number">
                    03
                </span>


                <div class="d3-solution-icon">
                    SAP
                </div>


                <h3>
                    SAP Solutions
                </h3>


                <p>

                    SAP services supporting implementations,
                    upgrades, global rollouts, testing
                    automation and application management
                    services.

                </p>


                <span class="d3-solution-arrow">
                    ↗
                </span>

            </a>



            <!-- =================================================
                 04 GIS
            ================================================== -->

            <a
                href="<?= base_url('design3/solutions/gis-solutions') ?>"
                class="d3-solution-card"
            >

                <span class="d3-solution-number">
                    04
                </span>


                <div class="d3-solution-icon">
                    ◉
                </div>


                <h3>
                    GIS Solutions
                </h3>


                <p>

                    Geographic information solutions that help
                    organizations gather, manage and use
                    spatial information to support informed
                    decisions.

                </p>


                <span class="d3-solution-arrow">
                    ↗
                </span>

            </a>



            <!-- =================================================
                 05 CRM
            ================================================== -->

            <a
                href="<?= base_url('design3/solutions/crm') ?>"
                class="d3-solution-card"
            >

                <span class="d3-solution-number">
                    05
                </span>


                <div class="d3-solution-icon">
                    ◎
                </div>


                <h3>
                    Customer Relationship
                    Management
                </h3>


                <p>

                    CRM solutions designed to improve customer
                    relationships, increase efficiency and
                    support customer-centric business processes.

                </p>


                <span class="d3-solution-arrow">
                    ↗
                </span>

            </a>



            <!-- =================================================
                 06 DOCUMENT MANAGEMENT
            ================================================== -->

            <a
                href="<?= base_url('design3/solutions/document-management') ?>"
                class="d3-solution-card"
            >

                <span class="d3-solution-number">
                    06
                </span>


                <div class="d3-solution-icon">
                    ▤
                </div>


                <h3>
                    Document Management
                </h3>


                <p>

                    End-to-end document management solutions
                    for scanning, extracting, storing,
                    indexing and analyzing business
                    information.

                </p>


                <span class="d3-solution-arrow">
                    ↗
                </span>

            </a>


        </div>

    </div>

</section>



<!-- =====================================================
     SOLUTIONS STATEMENT
===================================================== -->

<section class="d3-solutions-statement">

    <div class="d3-container">

        <div class="d3-solutions-statement-inner">

            <span>
                AMERIPRO SOLUTIONS
            </span>


            <h2>

                Technology that helps
                businesses move forward.

            </h2>


            <p>

                Our solutions combine technology,
                business knowledge and practical
                implementation to support organizations
                throughout their technology journey.

            </p>


            <a
                href="<?= base_url('design3/contact') ?>"
                class="d3-solutions-button"
            >

                Talk To Us

                <span>
                    ↗
                </span>

            </a>

        </div>

    </div>

</section>



<!-- =====================================================
     FOOTER
===================================================== -->

<?= $this->include('design3/footer') ?>



<script
    src="<?= base_url('assets/js/design3.js') ?>"
></script>


</body>

</html>