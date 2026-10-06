<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>AmeriPro - Design 3</title>

    <link rel="stylesheet"
          href="<?= base_url('assets/css/design3.css') ?>">

</head>

<body>

<section class="d3-home" id="d3Home">

    <!-- =====================================================
         FLOATING NAVIGATION
    ====================================================== -->

   <header class="d3-header">

    <!-- LOGO -->
    <a href="<?= base_url('design3') ?>" class="d3-logo">
        <img
           src="<?= base_url('assets/images/design3/ameripro-logo-footer.png') ?>"
            alt="AmeriPro Solutions">
    </a>


    <!-- NAVIGATION -->
    <nav class="d3-nav">

        <a href="<?= base_url('design3') ?>" class="active">
            Home 
        </a>

        <a href="<?= base_url('design3/about') ?>">
            About Us
        </a>

        <div class="d3-nav-dropdown">

    <a href="<?= base_url('design3/services') ?>" class="d3-dropdown">
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

       <div class="d3-nav-dropdown">

    <a href="<?= base_url('design3/solutions') ?>" class="d3-dropdown">
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


    <!-- RIGHT SIDE -->
   <div class="d3-header-right">

    <a
        href="<?= base_url('design3/login') ?>"
        class="d3-start-button">
        Get Started Now
    </a>

        <button
            class="d3-menu-button"
            id="d3MenuButton"
            type="button"
            aria-label="Menu">

            <span></span>
            <span></span>
            <span></span>

        </button>

    </div>

</header>


    <!-- =====================================================
         HERO
    ====================================================== -->

    <main class="d3-hero">


        <!-- ================= SLIDE 1 ================= -->

        <div class="d3-slide active"
             data-slide="0">


            <div class="d3-home-content">

                <span class="d3-home-eyebrow">
                    WELCOME TO AMERIPRO
                </span>


                <h1>
                    Technology solutions
                    <br>
                    <span>built around</span>
                    <br>
                    your business.
                </h1>


                <p>
                    We provide innovative technology solutions
                    designed to help businesses grow, improve
                    and succeed.
                </p>


                <a href="<?= base_url('design3/services') ?>" class="d3-home-button">

                    <span class="d3-button-text">
                        OUR SERVICES
                    </span>

                    <span class="d3-button-arrow">
                        ↗
                    </span>

                </a>

            </div>


           <div class="d3-home-image d3-software-image">

    <img
        src="<?= base_url('assets/images/design3/software-maintenance.png') ?>"
        alt="AmeriPro Software Development and Maintenance">

</div>

        </div>
        <!-- =====================================================
             COUNTER
        ====================================================== -->

        <div class="d3-slide-counter">

            <span id="d3CurrentSlide">
                01
            </span>

            <span class="d3-counter-line"></span>

            <span>
                03
            </span>

        </div>


        <!-- =====================================================
             SCROLL
        ====================================================== -->

        <div class="d3-scroll">

            <span class="d3-scroll-arrow">
                ↓
            </span>

            <span>
                SCROLL TO EXPLORE
            </span>

        </div>

    </main>


    <!-- =====================================================
         INTRODUCTION
    ====================================================== -->

    <section class="d3-intro-section">

        <div class="d3-intro-inner">

            <span class="d3-section-label">
                AMERIPRO SOLUTIONS
            </span>

            <h2>
                We Bring A Personal And Effective Approach
                To Every Project We Work On
            </h2>

            <p>
                Our goal is to deliver practical technology solutions,
                innovative strategies and reliable services that help
                businesses improve performance and grow.
            </p>

        </div>

    </section>


    <!-- =====================================================
         SERVICES
    ====================================================== -->

    <section class="d3-services-section">

        <div class="d3-section-heading">

            <span>
                OUR SERVICES
            </span>

            <h2>
                Solutions That Move Your Business Forward
            </h2>

        </div>


        <div class="d3-services-grid">


            <article class="d3-service-card">

                <div class="d3-service-icon">

                    <svg viewBox="0 0 64 64">

                        <path d="M16 45V28l16-12 16 12v17"/>

                        <path d="M24 45V34h16v11"/>

                        <path d="M12 45h40"/>

                        <circle
                            cx="32"
                            cy="24"
                            r="4"/>

                    </svg>

                </div>


                <h3>
                    Product Development
                </h3>


                <span class="d3-service-line"></span>


                <p>
                    Process of designing, creating and delivering
                    modern digital products for growing businesses.
                </p>


                <a href="<?= base_url('design3/services/product-development') ?>">
                    Learn More <strong>↗</strong>
                </a>

            </article>



            <article class="d3-service-card">

                <div class="d3-service-icon">

                    <svg viewBox="0 0 64 64">

                        <path d="M12 48h40"/>

                        <path d="M18 48V25h28v23"/>

                        <path d="M18 25l8-9h20"/>

                        <path d="M27 25v23"/>

                        <path d="M38 25v23"/>

                        <path d="M46 16v32"/>

                    </svg>

                </div>


                <h3>
                    Strategy Solutions
                </h3>


                <span class="d3-service-line"></span>


                <p>
                    Innovative strategies and technology solutions
                    designed to improve performance and efficiency.
                </p>


                <a href="<?= base_url('design3/services/strategy-solutions') ?>">
                    Learn More <strong>↗</strong>
                </a>

            </article>



            <article class="d3-service-card">

                <div class="d3-service-icon">

                    <svg viewBox="0 0 64 64">

                        <path d="M12 30L32 13l20 17"/>

                        <path d="M17 27v23h30V27"/>

                        <path d="M27 50V37h10v13"/>

                        <path d="M24 30h16"/>

                    </svg>

                </div>


                <h3>
                    Quality Assurance
                </h3>


                <span class="d3-service-line"></span>


                <p>
                    Reliable testing and quality assurance that helps
                    prevent defects and improve solution delivery.
                </p>


                <a href="<?= base_url('design3/services/quality-assurance') ?>">
                    Learn More <strong>↗</strong>
                </a>

            </article>

        </div>

    </section>


    <!-- =====================================================
         TESTIMONIALS
    ====================================================== -->

    <section class="d3-testimonials-section">

        <div class="d3-testimonial-heading">

            <span>
                TESTIMONIALS AND FEEDBACK
            </span>

            <h2>
                What People Say
            </h2>

        </div>


        <div class="d3-testimonial-content">

            <div class="d3-quote">
                “
            </div>


            <div class="d3-testimonial-main">

                <div class="d3-testimonial-avatar">
                    SW
                </div>

                <h3>
                    Sara Williams
                </h3>

                <span>
                    New York, USA
                </span>

                <p>
                    AmeriPro delivered a reliable solution with a
                    professional approach. The team understood our
                    requirements and helped us achieve our goals.
                </p>

            </div>


            <div class="d3-quote">
                ”
            </div>

        </div>


        <div class="d3-testimonial-dots">

            <span class="active"></span>
            <span></span>
            <span></span>
            <span></span>

        </div>

    </section>


    <!-- =====================================================
         OUR CLIENTS
    ====================================================== -->

    <section class="d3-clients-section">

        <div class="d3-clients-header">

            <div class="d3-clients-title">

                <span>
                    OUR CLIENTS
                </span>

                <h2>
                    Trusted by businesses.
                </h2>

            </div>


            <p>
                Our clients represent organizations across different
                industries and business requirements.
            </p>

        </div>


        <div class="d3-clients-grid">


            <div class="d3-client-card">

                <div class="d3-client-name healthwave">
                    HEALTHWAVE
                    <small>CONNECT</small>
                </div>

            </div>


            <div class="d3-client-card">

                <div class="d3-client-name phonetree">
                    PhoneTree
                    <small>Proven. Professional. Trusted.</small>
                </div>

            </div>


            <div class="d3-client-card">

                <div class="d3-client-name nextgen">
                    NEXT<br>
                    GEN
                    <small>HEALTHCARE</small>
                </div>

            </div>


            <div class="d3-client-card">

                <div class="d3-client-name voicewave">
                    VoiceWave
                    <span>ONLINE</span>
                </div>

            </div>


            <div class="d3-client-card">

                <div class="d3-client-name addox">
                    addox
                    <small>INFRASTRUCTURE PVT. LTD.</small>
                </div>

            </div>


            <div class="d3-client-card">

                <div class="d3-client-name church">
                    ◯◯◯
                    <small>
                        CHURCH<br>
                        COMMUNITY<br>
                        BUILDER
                    </small>
                </div>

            </div>


            <div class="d3-client-card">

                <div class="d3-client-name pegram">
                    PEGRAM
                    <small>INSURANCE</small>
                </div>

            </div>


            <div class="d3-client-card">

                <div class="d3-client-name nicks">
                    Nick's
                    <small>BUILDING SUPPLY, INC.</small>
                </div>

            </div>


        </div>

    </section>


    <?= view('design3/footer') ?>
</section>


<script src="<?= base_url('assets/js/design3.js') ?>"></script>

</body>

</html>