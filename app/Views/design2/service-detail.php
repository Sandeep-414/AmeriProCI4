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
        href="<?= base_url('assets/css/design2.css') ?>"
    >

</head>

<body>


<!-- ================================
     NAVBAR
================================ -->

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

    <!-- HOME -->

    <a href="<?= base_url('design2') ?>">
        Home
    </a>


    <!-- ABOUT US -->

    <a href="<?= base_url('design2/about') ?>">
        About Us
    </a>


    <!-- SERVICES -->

    <a href="<?= base_url('design2/services') ?>">
        Services
    </a>


    <!-- SOLUTIONS -->

    <a href="<?= base_url('design2/solutions') ?>">
        Solutions
    </a>


    <!-- CAREERS -->

    <a href="<?= base_url('design2/careers') ?>">
        Careers
    </a>


    <!-- CONTACT US -->

    <a href="<?= base_url('design2/contact') ?>">
        Contact Us
    </a>


    <!-- LOGIN -->

    <a
        href="<?= base_url('design2/login') ?>"
        class="d2-login-btn"
    >
        Login
    </a>

</div>

    </div>

</nav>



<!-- ================================
     SERVICE HERO
================================ -->

<section class="d2-page-header d2-detail-header">

    <span class="d2-detail-number">
        <?= esc($service['number']) ?>
    </span>

    <h1>
        <?= esc($service['title']) ?>
    </h1>

    <p>
        <?= esc($service['subtitle']) ?>
    </p>

</section>



<!-- ================================
     OVERVIEW
================================ -->

<section class="d2-detail-overview">

    <div class="d2-container">

        <div class="d2-detail-intro">

            <span class="d2-small-title">
                <?= esc($service['title']) ?>
            </span>

            <h2>
                <?= esc($service['description']) ?>
            </h2>

            <p>
                <?= esc($service['overview']) ?>
            </p>

        </div>

    </div>

</section>



<!-- ================================
     CAPABILITIES
================================ -->

<section class="d2-detail-section">

    <div class="d2-container">


        <div class="d2-detail-section-title">

            <span class="d2-small-title">
                WHAT WE PROVIDE
            </span>

            <h2>
                Our Capabilities
            </h2>

            <p>
                Our capabilities are designed to support
                organizations throughout their technology
                and business requirements.
            </p>

        </div>



        <div class="d2-detail-grid">

            <?php foreach ($service['capabilities'] as $index => $capability): ?>

                <div class="d2-detail-card">

                    <div class="d2-detail-card-number">

                        <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>

                    </div>

                    <h3>
                        <?= esc($capability) ?>
                    </h3>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- ================================
     BUSINESS BENEFITS
================================ -->

<section class="d2-detail-dark">

    <div class="d2-container">


        <div class="d2-detail-section-title">

            <span class="d2-small-title">
                BUSINESS VALUE
            </span>

            <h2>
                Supporting Better Business Outcomes
            </h2>

            <p>
                Our approach focuses on practical outcomes
                that help organizations improve their
                technology environment and business operations.
            </p>

        </div>



        <div class="d2-benefit-grid">

            <?php foreach ($service['benefits'] as $index => $benefit): ?>

                <div class="d2-benefit-card">

                    <div class="d2-benefit-number">

                        <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>

                    </div>

                    <p>
                        <?= esc($benefit) ?>
                    </p>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- ================================
     APPROACH
================================ -->

<section class="d2-detail-approach">

    <div class="d2-container">

        <div class="d2-detail-section-title">

            <span class="d2-small-title">
                OUR APPROACH
            </span>

            <h2>
                From Understanding to Support
            </h2>

            <p>
                We connect business requirements with
                practical technology capabilities.
            </p>

        </div>



        <div class="d2-approach-grid">


            <div class="d2-approach-card">

                <span>
                    01
                </span>

                <h3>
                    Understand
                </h3>

                <p>
                    Understand the organization's business
                    processes, challenges and technology needs.
                </p>

            </div>



            <div class="d2-approach-card">

                <span>
                    02
                </span>

                <h3>
                    Plan
                </h3>

                <p>
                    Define a practical approach aligned with
                    business priorities and technology requirements.
                </p>

            </div>



            <div class="d2-approach-card">

                <span>
                    03
                </span>

                <h3>
                    Deliver
                </h3>

                <p>
                    Implement capabilities with a focus on
                    quality, reliability and business value.
                </p>

            </div>



            <div class="d2-approach-card">

                <span>
                    04
                </span>

                <h3>
                    Support
                </h3>

                <p>
                    Continue supporting technology capabilities
                    after implementation.
                </p>

            </div>


        </div>

    </div>

</section>



<!-- ================================
     CTA
================================ -->

<section class="d2-cta">

    <h2>
        Let's Discuss Your Requirements
    </h2>

    <p>
        Explore how AmeriPro can support your organization
        with <?= esc($service['title']) ?>.
    </p>

    <a
        href="<?= base_url('contact') ?>"
        class="d2-white-btn"
    >
        Contact Us
    </a>

</section>

<?= $this->include('design2/footer') ?>

</body>

</html>