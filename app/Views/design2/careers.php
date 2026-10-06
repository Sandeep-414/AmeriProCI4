<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>AmeriPro | Careers</title>

    <link
        rel="stylesheet"
        href="<?= base_url('assets/css/design2.css') ?>"
    >

</head>

<body>


<!-- =====================================================
     NAVBAR
===================================================== -->

<nav class="d2-navbar">

    <div class="d2-nav-container">

        <a href="<?= base_url('design2') ?>">

            <img
                src="<?= base_url('assets/images/ameripro-logo.png') ?>"
                class="d2-logo"
                alt="AmeriPro"
            >

        </a>


        <div class="d2-nav-links">

            <a href="<?= base_url('design2') ?>">
                Home
            </a>

            <a href="<?= base_url('design2/about') ?>">
                About Us
            </a>

            <a href="<?= base_url('design2/services') ?>">
                Services
            </a>

            <a href="<?= base_url('design2/solutions') ?>">
                Solutions
            </a>

            <a href="<?= base_url('design2/careers') ?>">
                Careers
            </a>

            <a href="<?= base_url('design2/contact') ?>">
                Contact Us
            </a>

            <a
                href="<?= base_url('design2/login') ?>"
                class="d2-login-btn"
            >
                Login
            </a>

        </div>

    </div>

</nav>


<!-- =====================================================
     CAREERS
===================================================== -->

<section class="d2-page-header">

    <h1>
        Build Your Career With AmeriPro
    </h1>

    <p>
        Explore opportunities to work with a team
        focused on business and technology solutions.
    </p>

</section>


<section class="d2-section">

    <div class="d2-container">

        <div class="d2-section-title">

            <span>
                JOIN OUR TEAM
            </span>

            <h2>
                Opportunities at AmeriPro
            </h2>

            <p>
                We are always interested in connecting with
                professionals who are passionate about
                technology, business and innovation.
            </p>

        </div>


        <div class="d2-grid">

            <div class="d2-card">

                <div class="d2-card-number">
                    01
                </div>

                <h3>
                    Technology
                </h3>

                <p>
                    Opportunities across technology,
                    application development and modern
                    technology environments.
                </p>

            </div>


            <div class="d2-card">

                <div class="d2-card-number">
                    02
                </div>

                <h3>
                    Consulting
                </h3>

                <p>
                    Work with organizations to understand
                    business requirements and technology needs.
                </p>

            </div>


            <div class="d2-card">

                <div class="d2-card-number">
                    03
                </div>

                <h3>
                    Quality Engineering
                </h3>

                <p>
                    Opportunities in testing, automation
                    and quality engineering services.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     CTA
===================================================== -->

<section class="d2-cta">

    <h2>
        Interested in Joining AmeriPro?
    </h2>

    <p>
        Contact our team to learn more about available
        opportunities.
    </p>

    <a
        href="<?= base_url('design2/contact') ?>"
        class="d2-white-btn"
    >
        Contact Us
    </a>

</section>


<!-- =====================================================
     COMMON FOOTER
===================================================== -->

<?= $this->include('design2/footer') ?>


</body>

</html>