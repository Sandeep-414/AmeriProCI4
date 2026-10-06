<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        AmeriPro | <?= esc($solution['title']) ?>
    </title>

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



<!-- =====================================================
     DETAIL HERO
===================================================== -->

<section class="d2-page-header d2-detail-header">

    <div class="d2-detail-number">
        <?= esc($solution['number']) ?>
    </div>

    <h1>
        <?= esc($solution['title']) ?>
    </h1>

    <p>
        <?= esc($solution['subtitle']) ?>
    </p>

</section>



<!-- =====================================================
     OVERVIEW
===================================================== -->

<section class="d2-detail-overview">

    <div class="d2-detail-intro">

        <span class="d2-section-label">
            SOLUTION OVERVIEW
        </span>

        <h2>
            <?= esc($solution['description']) ?>
        </h2>

        <p>
            <?= esc($solution['overview']) ?>
        </p>

    </div>

</section>



<!-- =====================================================
     CAPABILITIES
===================================================== -->

<section class="d2-detail-section">

    <div class="d2-detail-section-title">

        <span class="d2-section-label">
            OUR CAPABILITIES
        </span>

        <h2>
            What We Provide
        </h2>

        <p>
            Our capabilities are designed to support
            business requirements and technology needs
            throughout the solution lifecycle.
        </p>

    </div>


    <div class="d2-detail-grid">

        <?php foreach ($solution['capabilities'] as $index => $capability): ?>

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

</section>



<!-- =====================================================
     BUSINESS BENEFITS
===================================================== -->

<section class="d2-detail-dark">

    <div class="d2-detail-section-title">

        <span class="d2-section-label">
            BUSINESS VALUE
        </span>

        <h2>
            Supporting Business Outcomes
        </h2>

        <p>
            Technology solutions should support measurable
            business requirements and long-term objectives.
        </p>

    </div>


    <div class="d2-benefit-grid">

        <?php foreach ($solution['benefits'] as $index => $benefit): ?>

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

</section>



<!-- =====================================================
     OUR APPROACH
===================================================== -->

<section class="d2-detail-approach">

    <div class="d2-detail-section-title">

        <span class="d2-section-label">
            OUR APPROACH
        </span>

        <h2>
            From Strategy to Support
        </h2>

        <p>
            We focus on understanding business requirements,
            planning practical solutions and supporting
            technology throughout its lifecycle.
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
                Understand business objectives,
                processes and technology requirements.
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
                Define a practical solution approach
                aligned with organizational priorities.
            </p>

        </div>



        <div class="d2-approach-card">

            <span>
                03
            </span>

            <h3>
                Implement
            </h3>

            <p>
                Implement technology capabilities
                with focus on quality and reliability.
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
                Provide ongoing support and improvement
                as business requirements evolve.
            </p>

        </div>


    </div>

</section>



<!-- =====================================================
     CTA
===================================================== -->

<section class="d2-cta">

    <h2>
        Let's Discuss Your Requirements
    </h2>

    <p>
        Connect with AmeriPro to discuss your
        business and technology requirements.
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