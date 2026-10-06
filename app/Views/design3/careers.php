<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Current Openings | AmeriPro Solutions
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
            class="d3-dropdown"
        >
            Solutions
            <span>⌄</span>
        </a>

        <a
            href="<?= base_url('design3/careers') ?>"
            class="active"
        >
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
     CAREERS HERO
===================================================== -->

<section class="d3-careers-hero">

    <div class="d3-careers-hero-overlay"></div>


    <div class="d3-careers-hero-content">

        <span class="d3-careers-hero-label">
            CAREERS
        </span>


        <h1>
            Current Openings
        </h1>


        <p>
            Explore career opportunities with
            AmeriPro Solutions.
        </p>

    </div>

</section>


<!-- =====================================================
     BREADCRUMB
===================================================== -->

<section class="d3-careers-breadcrumb">

    <div class="d3-careers-breadcrumb-inner">

        <h2>
            Current Openings
        </h2>


        <div class="d3-careers-breadcrumb-links">

            <a href="<?= base_url('design3') ?>">
                Home
            </a>

            <span>/</span>

            <strong>
                Careers
            </strong>

        </div>

    </div>

</section>


<!-- =====================================================
     CURRENT OPENINGS
===================================================== -->

<section class="d3-careers-openings">

    <div class="d3-careers-openings-container">


        <div class="d3-careers-openings-heading">

            <span>
                CAREERS
            </span>

            <h2>
                Current Openings
            </h2>

            <p>
                Join AmeriPro Solutions and be part of
                our technology services organization.
            </p>

        </div>


        <!-- =================================================
             NO OPENINGS
        ================================================== -->

        <div class="d3-no-openings">

            <div class="d3-no-openings-icon">
                ✓
            </div>


            <span class="d3-no-openings-label">
                CURRENT STATUS
            </span>


            <h3>
                NO OPENINGS RIGHT NOW
            </h3>


            <p>
                There are currently no open positions
                available at AmeriPro Solutions.
            </p>


            <p>
                Please check back later for future
                career opportunities.
            </p>

        </div>


        <!-- =================================================
             CONTACT HR
        ================================================== -->

        <div class="d3-careers-contact-card">

            <div>

                <span>
                    INTERESTED IN JOINING AMERIPRO?
                </span>

                <h3>
                    Contact our team
                </h3>

                <p>
                    For career-related inquiries,
                    please contact AmeriPro Solutions.
                </p>

            </div>


            <div class="d3-careers-contact-details">

                <div>

                    <strong>
                        Email
                    </strong>

                    <a href="mailto:hr@ameripro-solutions.com">
                        hr@ameripro-solutions.com
                    </a>

                </div>


                <div>

                    <strong>
                        Phone
                    </strong>

                    <span>
                        (336) 790-2875
                    </span>

                    <span>
                        (336) 510-9305
                    </span>

                </div>

            </div>

        </div>


    </div>

</section>


<!-- =====================================================
     LOCATION
===================================================== -->

<section class="d3-careers-location">

    <div class="d3-careers-location-inner">

        <span>
            AMERIPRO SOLUTIONS
        </span>

        <h2>
            Our Office
        </h2>

        <p>
            2972 Shady View Dr,<br>
            High Point, NC 27265.
        </p>

    </div>

</section>


<!-- =====================================================
     FOOTER
===================================================== -->

<?= $this->include('design3/footer') ?>


<script src="<?= base_url('assets/js/design3.js') ?>"></script>

</body>

</html>