<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>AmeriPro | About Us</title>

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

        <a
            href="<?= base_url('design3/about') ?>"
            class="active"
        >
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
     ABOUT HERO
===================================================== -->

<section class="d3-about-hero">

    <!-- Dark image overlay -->
    <div class="d3-about-overlay"></div>


    <!-- Hero content -->

    <div class="d3-about-hero-content">

        <h1>

            <span class="d3-about-light">
                New Ideas
            </span>

            <strong>
                Inspires Us To Make
            </strong>

            <span class="d3-about-light">
                Great Works
            </span>

        </h1>

    </div>

</section>



<!-- =====================================================
     ABOUT BREADCRUMB
===================================================== -->

<section class="d3-about-breadcrumb">

    <div class="d3-about-breadcrumb-inner">


        <!-- LEFT -->

        <h2>
            The AmeriPro Solutions Story
        </h2>


        <!-- RIGHT -->

        <div class="d3-about-breadcrumb-links">

            <a href="<?= base_url('design3') ?>">
                Home
            </a>

            <span>/</span>

            <span>
                About Us
            </span>

        </div>

    </div>

</section>



<!-- =====================================================
     ABOUT INTRO
===================================================== -->

<section class="d3-section">

    <div class="d3-container">


        <div class="d3-section-heading">

            <span>
                WHO WE ARE
            </span>

            <h2>
                Business and Technology Working Together
            </h2>

            <p>
                AmeriPro brings together business understanding
                and technology capabilities to support organizations
                through their technology journey.
            </p>

        </div>



        <!-- ABOUT CARDS -->

        <div class="d3-about-grid">


            <!-- CARD 01 -->

            <div class="d3-about-card">

                <div class="d3-about-number">
                    01
                </div>

                <h3>
                    Experience
                </h3>

                <p>
                    Technology capabilities across business,
                    application and technology environments.
                </p>

            </div>



            <!-- CARD 02 -->

            <div class="d3-about-card">

                <div class="d3-about-number">
                    02
                </div>

                <h3>
                    Innovation
                </h3>

                <p>
                    Modern approaches to technology and
                    business transformation.
                </p>

            </div>



            <!-- CARD 03 -->

            <div class="d3-about-card">

                <div class="d3-about-number">
                    03
                </div>

                <h3>
                    Partnership
                </h3>

                <p>
                    Working with organizations to understand
                    their technology requirements.
                </p>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     OUR APPROACH
===================================================== -->

<section class="d3-about-highlight">

    <div class="d3-container">


        <div class="d3-about-highlight-grid">


            <!-- LEFT -->

            <div>

                <span>
                    OUR APPROACH
                </span>

                <h2>
                    Solutions Designed Around Business Needs
                </h2>

            </div>



            <!-- RIGHT -->

            <div>

                <p>
                    We combine business understanding with
                    technology capabilities to help organizations
                    improve processes, modernize applications and
                    support changing technology requirements.
                </p>


                <a
                    href="<?= base_url('design3/services') ?>"
                    class="d3-home-button"
                >

                    <span class="d3-button-text">
                        EXPLORE SERVICES
                    </span>

                    <span class="d3-button-arrow">
                        ↗
                    </span>

                </a>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     COMMON DESIGN 3 FOOTER
===================================================== -->

<?= $this->include('design3/footer') ?>



<!-- =====================================================
     DESIGN 3 JAVASCRIPT
===================================================== -->

<script src="<?= base_url('assets/js/design3.js') ?>"></script>


</body>

</html>