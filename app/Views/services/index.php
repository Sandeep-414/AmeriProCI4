<?= $this->include('layouts/header') ?>

<?php

$services = [

    [
        'number' => '01',
        'title' => 'Application Development',
        'category' => 'APPLICATION ENGINEERING',
        'description' => 'Building scalable and reliable software applications for modern business needs.',
        'slug' => 'application-development'
    ],

    [
        'number' => '02',
        'title' => 'Application Maintenance',
        'category' => 'APPLICATION SUPPORT',
        'description' => 'Maintaining and enhancing applications to improve performance and reliability.',
        'slug' => 'application-maintenance'
    ],

    [
        'number' => '03',
        'title' => 'Business Intelligence',
        'category' => 'DATA & ANALYTICS',
        'description' => 'Turning business data into useful insights for better decision making.',
        'slug' => 'business-intelligence'
    ],

    [
        'number' => '04',
        'title' => 'Cloud Computing',
        'category' => 'CLOUD TECHNOLOGY',
        'description' => 'Cloud solutions that support flexibility, scalability and business growth.',
        'slug' => 'cloud-computing'
    ],

    [
        'number' => '05',
        'title' => 'Infrastructure Management',
        'category' => 'IT INFRASTRUCTURE',
        'description' => 'Technology infrastructure services focused on availability and performance.',
        'slug' => 'infrastructure-management'
    ],

    [
        'number' => '06',
        'title' => 'Product & Application Testing',
        'category' => 'QUALITY ENGINEERING',
        'description' => 'Quality assurance and testing services for dependable applications.',
        'slug' => 'product-application-testing'
    ],

    [
        'number' => '07',
        'title' => 'Strategic Resourcing',
        'category' => 'TALENT & RESOURCING',
        'description' => 'Technology professionals and resources aligned with business requirements.',
        'slug' => 'strategic-resourcing'
    ],

    [
        'number' => '08',
        'title' => 'Website Development',
        'category' => 'DIGITAL EXPERIENCE',
        'description' => 'Modern websites and digital experiences built for organizations and businesses.',
        'slug' => 'website-development'
    ]

];

?>

<style>

/* =========================================================
   SERVICES PAGE
========================================================= */

.services-page {
    background: #f6f9fb;
    color: #14283d;
}


/* =========================================================
   COMMON CONTAINER
========================================================= */

.services-page .container {
    width: 100%;
    max-width: 1180px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 25px;
    padding-right: 25px;
}


/* =========================================================
   HERO
========================================================= */

.services-hero {
    position: relative;
    overflow: hidden;

    min-height: 540px;

    display: flex;
    align-items: center;

    background:
        radial-gradient(
            circle at 82% 28%,
            rgba(62, 211, 228, 0.18),
            transparent 30%
        ),
        radial-gradient(
            circle at 72% 100%,
            rgba(45, 100, 210, 0.18),
            transparent 35%
        ),
        #071827;
}


.services-hero-grid {
    position: absolute;
    inset: 0;

    opacity: .12;

    background-image:
        linear-gradient(
            rgba(255,255,255,.08) 1px,
            transparent 1px
        ),
        linear-gradient(
            90deg,
            rgba(255,255,255,.08) 1px,
            transparent 1px
        );

    background-size: 55px 55px;
}


.services-hero-content {
    position: relative;
    z-index: 2;

    padding: 100px 0;
}


.services-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 12px;

    margin-bottom: 22px;

    color: #5ed8e8;

    font-size: 12px;
    font-weight: 800;

    letter-spacing: 3px;
}


.services-eyebrow::before {
    content: "";

    width: 35px;
    height: 2px;

    background: #5ed8e8;
}


.services-hero h1 {
    max-width: 780px;

    margin: 0 0 25px;

    color: #ffffff;

    font-size: clamp(50px, 7vw, 78px);

    line-height: 1.02;

    font-weight: 750;

    letter-spacing: -3px;
}


.services-hero-text {
    max-width: 690px;

    margin: 0;

    color: #b2c1ce;

    font-size: 18px;

    line-height: 1.8;
}


/* =========================================================
   HERO VISUAL
========================================================= */

.services-visual {
    position: absolute;

    right: 8%;
    top: 50%;

    width: 400px;
    height: 400px;

    transform: translateY(-50%);
}


.services-visual-circle {
    position: absolute;

    border-radius: 50%;

    border: 1px solid rgba(94,216,232,.22);
}


.services-visual-circle.one {
    inset: 0;
}


.services-visual-circle.two {
    inset: 55px;
}


.services-visual-circle.three {
    inset: 110px;

    background:
        radial-gradient(
            circle,
            rgba(94,216,232,.15),
            transparent
        );
}


.services-visual-core {
    position: absolute;

    top: 50%;
    left: 50%;

    width: 125px;
    height: 125px;

    transform: translate(-50%, -50%);

    border-radius: 30px;

    background:
        linear-gradient(
            145deg,
            #ffffff,
            #dceff3
        );

    display: flex;
    align-items: center;
    justify-content: center;

    color: #08788e;

    font-size: 32px;
    font-weight: 800;

    box-shadow:
        0 30px 80px rgba(0,0,0,.35);
}


.services-dot {
    position: absolute;

    width: 12px;
    height: 12px;

    border-radius: 50%;

    background: #5ed8e8;

    box-shadow:
        0 0 0 8px rgba(94,216,232,.10),
        0 0 25px rgba(94,216,232,.7);
}


.services-dot.one {
    top: 50px;
    right: 80px;
}


.services-dot.two {
    bottom: 60px;
    left: 50px;
}


.services-dot.three {
    right: -2px;
    top: 190px;
}


/* =========================================================
   CAPABILITIES
========================================================= */

.services-intro {
    padding: 100px 0 55px;

    background: #f6f9fb;
}



.services-intro-inner {
    max-width: 850px;
}


.services-label {
    display: block;

    margin-bottom: 16px;

    color: #08788e;

    font-size: 12px;
    font-weight: 800;

    letter-spacing: 3px;
}


.services-intro h2 {
    max-width: 760px;

    margin: 0 0 22px;

    color: #10243a;

    font-size: clamp(38px, 5vw, 58px);

    line-height: 1.08;

    font-weight: 750;

    letter-spacing: -2px;
}


.services-intro p {
    max-width: 780px;

    margin: 0;

    color: #66798c;

    font-size: 17px;

    line-height: 1.8;
}


/* =========================================================
   SERVICES GRID
========================================================= */

.services-list {
    padding: 25px 0 110px;

    background: #f6f9fb;
}


.services-list .row {
    --bs-gutter-x: 28px;
    --bs-gutter-y: 28px;
}


/* =========================================================
   SERVICE CARD
========================================================= */

.service-card {
    position: relative;

    height: 100%;

    min-height: 390px;

    overflow: hidden;

    padding: 34px;

    border: 1px solid #dfe8ee;

    border-radius: 20px;

    background: #ffffff;

    box-shadow:
        0 10px 40px rgba(20,43,65,.045);

    transition:
        transform .3s ease,
        box-shadow .3s ease,
        border-color .3s ease;
}


.service-card::before {
    content: "";

    position: absolute;

    left: 0;
    top: 0;

    width: 100%;
    height: 4px;

    background:
        linear-gradient(
            90deg,
            #08788e,
            #5ed8e8
        );

    transform: scaleX(0);

    transform-origin: left;

    transition: transform .3s ease;
}


.service-card:hover {
    transform: translateY(-8px);

    border-color: #b8e1e7;

    box-shadow:
        0 25px 60px rgba(20,43,65,.12);
}


.service-card:hover::before {
    transform: scaleX(1);
}


/* =========================================================
   CARD TOP
========================================================= */

.service-card-top {
    display: flex;

    align-items: center;

    justify-content: space-between;

    margin-bottom: 35px;
}


.service-number {
    color: #08788e;

    font-size: 12px;

    font-weight: 800;

    letter-spacing: 2px;
}


.service-symbol {
    width: 48px;
    height: 48px;

    border-radius: 14px;

    background: #e9f8fa;

    color: #08788e;

    display: flex;

    align-items: center;
    justify-content: center;

    font-size: 13px;

    font-weight: 800;
}


/* =========================================================
   CARD CONTENT
========================================================= */

.service-category {
    display: block;

    margin-bottom: 13px;

    color: #8493a1;

    font-size: 10px;

    font-weight: 800;

    letter-spacing: 2px;
}


.service-card h3 {
    min-height: 62px;

    margin: 0 0 18px;

    color: #10243a;

    font-size: 25px;

    line-height: 1.2;

    font-weight: 700;

    letter-spacing: -.5px;
}


.service-card p {
    min-height: 78px;

    margin: 0 0 30px;

    color: #687b8e;

    font-size: 15px;

    line-height: 1.75;
}


/* =========================================================
   SERVICE LINK
========================================================= */

.service-link {
    display: inline-flex;

    align-items: center;

    gap: 9px;

    color: #08788e;

    text-decoration: none;

    font-size: 14px;

    font-weight: 800;

    transition: gap .25s ease;
}


.service-link span {
    font-size: 18px;

    transition: transform .25s ease;
}


.service-card:hover .service-link {
    gap: 14px;
}


.service-card:hover .service-link span {
    transform: translateX(3px);
}


/* =========================================================
   CTA
========================================================= */

.services-cta {
    padding: 85px 0;

    background:
        linear-gradient(
            135deg,
            #eaf8fa,
            #f5f8fb
        );
}


.services-cta-box {
    position: relative;

    overflow: hidden;

    padding: 55px;

    border-radius: 24px;

    background: #071827;

    box-shadow:
        0 25px 70px rgba(20,43,65,.15);
}


.services-cta-box::after {
    content: "";

    position: absolute;

    width: 350px;
    height: 350px;

    right: -150px;
    top: -180px;

    border-radius: 50%;

    border: 1px solid rgba(94,216,232,.18);
}


.services-cta-content {
    position: relative;

    z-index: 2;
}


.services-cta-label {
    margin-bottom: 12px;

    color: #5ed8e8;

    font-size: 11px;

    font-weight: 800;

    letter-spacing: 3px;
}


.services-cta h2 {
    max-width: 700px;

    margin: 0 0 15px;

    color: #ffffff;

    font-size: clamp(30px, 4vw, 45px);

    line-height: 1.15;

    font-weight: 700;
}


.services-cta p {
    max-width: 650px;

    margin: 0;

    color: #9eb0bf;

    font-size: 16px;

    line-height: 1.8;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1200px) {

    .services-page .container {
        max-width: 1080px;
    }

    .services-visual {
        right: -80px;
        opacity: .45;
    }

}


@media (max-width: 991px) {

    .services-page .container {
        max-width: 760px;
    }

    .services-hero {
        min-height: auto;
    }

    .services-hero-content {
        padding: 85px 0;
    }

    .services-visual {
        display: none;
    }

    .services-intro {
        padding-top: 75px;
    }

    .services-list {
        padding-bottom: 80px;
    }

}


@media (max-width: 767px) {

    .services-page .container {
        max-width: 100%;

        padding-left: 20px;
        padding-right: 20px;
    }

    .service-card {
        min-height: auto;
    }

    .service-card h3 {
        min-height: auto;
    }

    .service-card p {
        min-height: auto;
    }

    .services-cta-box {
        padding: 35px;
    }

}


@media (max-width: 575px) {

    .services-hero-content {
        padding: 70px 0;
    }

    .services-hero h1 {
        font-size: 46px;

        letter-spacing: -2px;
    }

    .services-hero-text {
        font-size: 16px;
    }

    .services-intro {
        padding: 65px 0 35px;
    }

    .services-intro h2 {
        font-size: 40px;

        letter-spacing: -1.5px;
    }

    .services-list {
        padding-bottom: 60px;
    }

    .service-card {
        padding: 28px;
    }

    .services-cta {
        padding: 55px 0;
    }

    

}
.services-intro {
    padding: 100px 0 65px;
    background: #f6f9fb;
}

.services-intro > .container {
    width: 100% !important;
    max-width: 1180px !important;
    margin-left: auto !important;
    margin-right: auto !important;
    padding-left: 25px !important;
    padding-right: 25px !important;
    box-sizing: border-box;
}

.services-intro h2 {
    max-width: 720px;

    margin: 0;

    color: #10243a;

    font-size: clamp(42px, 5vw, 62px);

    line-height: 1.08;

    font-weight: 750;

    letter-spacing: -2px;
}


/* =========================================================
   AMERIPRO CAPABILITIES - NEW UI
========================================================= */

.ameripro-capabilities {
    width: 100% !important;
    display: block !important;
    background: #f6f9fb;
    padding: 110px 0 80px;
    margin: 0;
    box-sizing: border-box;
}

.ameripro-capabilities-wrap {
    width: calc(100% - 50px) !important;
    max-width: 1180px !important;
    margin: 0 auto !important;
    padding: 0 !important;
    box-sizing: border-box;
}

.ameripro-capabilities-grid {
    width: 100% !important;

    display: grid !important;

    grid-template-columns: minmax(0, 1.35fr) minmax(300px, 0.65fr);

    column-gap: 100px;

    align-items: center;

    box-sizing: border-box;
}

.ameripro-capabilities-left {
    width: 100% !important;
    min-width: 0;
}

.ameripro-capabilities-right {
    width: 100% !important;
    min-width: 0;
}

.ameripro-capabilities-label {
    display: block;

    margin: 0 0 20px;

    color: #08788e;

    font-size: 12px;

    font-weight: 800;

    line-height: 1.4;

    letter-spacing: 3px;
}

.ameripro-capabilities-title {
    display: block;

    width: 100% !important;

    max-width: 700px !important;

    margin: 0 !important;

    padding: 0 !important;

    color: #10243a;

    font-size: 62px;

    line-height: 1.04;

    font-weight: 750;

    letter-spacing: -2.5px;

    word-break: normal;

    overflow-wrap: normal;
}

.ameripro-capabilities-description {
    display: block;

    width: 100% !important;

    max-width: 450px !important;

    margin: 0 !important;

    padding: 0 !important;

    color: #66798c;

    font-size: 17px;

    line-height: 1.85;
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1000px) {

    .ameripro-capabilities {
        padding: 85px 0 65px;
    }

    .ameripro-capabilities-wrap {
        width: calc(100% - 50px) !important;
        max-width: none !important;
    }

    .ameripro-capabilities-grid {
        grid-template-columns: 1fr 1fr;

        column-gap: 50px;
    }

    .ameripro-capabilities-title {
        font-size: 50px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 700px) {

    .ameripro-capabilities {
        padding: 70px 0 55px;
    }

    .ameripro-capabilities-wrap {
        width: calc(100% - 40px) !important;
    }

    .ameripro-capabilities-grid {
        display: block !important;
    }

    .ameripro-capabilities-right {
        margin-top: 30px !important;
    }

    .ameripro-capabilities-title {
        font-size: 44px;
        line-height: 1.08;
        letter-spacing: -1.5px;
    }

    .ameripro-capabilities-description {
        max-width: 650px !important;
        font-size: 16px;
    }

}

</style>


<main class="services-page">


    <!-- =====================================================
         HERO
    ====================================================== -->

    <section class="services-hero">

        <div class="services-hero-grid"></div>


        <div class="container">

            <div class="services-hero-content">

                <div class="services-eyebrow">
                    WHAT WE DO
                </div>


                <h1>
                    Technology services
                    built around your business.
                </h1>


                <p class="services-hero-text">
                    From application development and business
                    intelligence to cloud, infrastructure and
                    digital experiences, AmeriPro Solutions
                    provides technology services aligned with
                    modern business needs.
                </p>

            </div>

        </div>


        <div class="services-visual">

            <div class="services-visual-circle one"></div>

            <div class="services-visual-circle two"></div>

            <div class="services-visual-circle three"></div>

            <div class="services-visual-core">
                AP
            </div>

            <div class="services-dot one"></div>

            <div class="services-dot two"></div>

            <div class="services-dot three"></div>

        </div>

    </section>


    <!-- =====================================================
         OUR CAPABILITIES
    ====================================================== -->


<section class="ameripro-capabilities">

    <div class="ameripro-capabilities-wrap">

        <div class="ameripro-capabilities-grid">


            <!-- LEFT -->

            <div class="ameripro-capabilities-left">

                <span class="ameripro-capabilities-label">
                    OUR CAPABILITIES
                </span>

                <h2 class="ameripro-capabilities-title">
                    Services that connect
                    technology with business.
                </h2>

            </div>


            <!-- RIGHT -->

            <div class="ameripro-capabilities-right">

                <p class="ameripro-capabilities-description">
                    Explore our range of technology services
                    designed to support application development,
                    maintenance, analytics, infrastructure,
                    testing, resourcing and digital experiences.
                </p>

            </div>


        </div>

    </div>

</section>

    <!-- =====================================================
         SERVICE CARDS
    ====================================================== -->

    <section class="services-list">

        <div class="container">

            <div class="row">

                <?php foreach ($services as $service): ?>

                    <div class="col-md-6 col-lg-4">

                        <article class="service-card">


                            <div class="service-card-top">

                                <span class="service-number">
                                    <?= esc($service['number']) ?>
                                </span>


                                <span class="service-symbol">
                                    <?= esc($service['number']) ?>
                                </span>

                            </div>


                            <span class="service-category">
                                <?= esc($service['category']) ?>
                            </span>


                            <h3>
                                <?= esc($service['title']) ?>
                            </h3>


                            <p>
                                <?= esc($service['description']) ?>
                            </p>


                            <a
                                href="<?= base_url('services/' . $service['slug']) ?>"
                                class="service-link"
                            >
                                Explore Service

                                <span>
                                    →
                                </span>

                            </a>


                        </article>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </section>


    <!-- =====================================================
         CTA
    ====================================================== -->

    <section class="services-cta">

        <div class="container">

            <div class="services-cta-box">

                <div class="services-cta-content">

                    <div class="services-cta-label">
                        AMERIPRO SOLUTIONS
                    </div>


                    <h2>
                        Technology solutions
                        designed for what's next.
                    </h2>


                    <p>
                        Explore our services and discover
                        technology solutions designed to support
                        modern business requirements.
                    </p>

                </div>

            </div>

        </div>

    </section>


</main>


<?= $this->include('layouts/footer') ?>