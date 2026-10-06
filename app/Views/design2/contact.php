<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>AmeriPro | Contact Us</title>

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
     CONTACT HERO
===================================================== -->

<!-- =====================================================
     PAGE HEADER
===================================================== -->

<section class="d2-page-header">

    <h1>
        Contact Us
    </h1>

    <p>
        Get in touch with AmeriPro to discuss your
        business and technology requirements.
    </p>

</section>


<!-- =====================================================
     CONTACT INFORMATION
===================================================== -->

<section class="d2-section">

    <div class="d2-container">

        <div class="d2-grid">


            <!-- ADDRESS -->

            <div class="d2-card">

                <div class="d2-card-number">
                    01
                </div>

                <h3>
                    Address
                </h3>

                <p>
                    2972 Shady View Dr,<br>
                    High Point, NC 27265.
                </p>

            </div>


            <!-- PHONE -->

            <div class="d2-card">

                <div class="d2-card-number">
                    02
                </div>

                <h3>
                    Phone
                </h3>

                <p>
                    (336) 790-2875<br>
                    (336) 510-9305
                </p>

            </div>


            <!-- EMAIL -->

            <div class="d2-card">

                <div class="d2-card-number">
                    03
                </div>

                <h3>
                    Email
                </h3>

                <p>

                    <a href="mailto:hr@ameripro-solutions.com">
                        hr@ameripro-solutions.com
                    </a>

                </p>

            </div>


        </div>

    </div>

</section>

<!-- =====================================================
     LOCATION / GOOGLE MAP
===================================================== -->

<section class="d2-location-section">

    <div class="d2-container">

        <div class="d2-section-title">

            <span>
                OUR LOCATION
            </span>

            <h2>
                Find Us
            </h2>

            <p>
                Visit us at our AmeriPro Solutions office in
                High Point, North Carolina.
            </p>

        </div>


        <div class="d2-map-wrapper">

            <iframe
                src="https://www.google.com/maps?q=2972+Shady+View+Dr,+High+Point,+NC+27265,+USA&output=embed"
                width="100%"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>

    </div>

</section>


<!-- =====================================================
     EMAIL CTA
===================================================== -->

<section class="d2-cta">

    <h2>
        Have a Question?
    </h2>

    <p>
        Send us an email and our team can get in touch
        with you.
    </p>

    <a
        href="mailto:hr@ameripro-solutions.com"
        class="d2-white-btn"
    >
        Email AmeriPro
    </a>

</section>


<!-- =====================================================
     COMMON FOOTER
===================================================== -->

<?= $this->include('design2/footer') ?>


</body>

</html>