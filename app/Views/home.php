<?= $this->include('layouts/header') ?>


<style>

/* =========================================================
   AMERIPRO HOME PAGE
========================================================= */

.ameripro-home {
    background: #f6f9fb;
    color: #10243a;
}


/* =========================================================
   HERO
========================================================= */

.ap-home-hero {
    position: relative;
    min-height: 650px;

    display: flex;
    align-items: center;

    overflow: hidden;

    background:
        radial-gradient(
            circle at 80% 25%,
            rgba(65, 210, 230, .20),
            transparent 30%
        ),
        radial-gradient(
            circle at 70% 90%,
            rgba(30, 90, 180, .18),
            transparent 35%
        ),
        #071827;
}


.ap-home-hero-grid {
    position: absolute;
    inset: 0;

    opacity: .13;

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


.ap-home-hero-container {
    position: relative;
    z-index: 2;

    width: calc(100% - 50px);
    max-width: 1180px;

    margin: 0 auto;
}


.ap-home-hero-content {
    max-width: 720px;

    padding: 105px 0;
}


.ap-home-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 12px;

    margin-bottom: 25px;

    color: #5ed8e8;

    font-size: 12px;
    font-weight: 800;

    letter-spacing: 3px;
}


.ap-home-eyebrow::before {
    content: "";

    width: 35px;
    height: 2px;

    background: #5ed8e8;
}


.ap-home-hero h1 {
    margin: 0 0 28px;

    color: #ffffff;

    font-size: clamp(48px, 6vw, 76px);

    line-height: 1.03;

    font-weight: 750;

    letter-spacing: -3px;
}


.ap-home-hero-text {
    max-width: 650px;

    margin: 0 0 35px;

    color: #b9c8d4;

    font-size: 18px;

    line-height: 1.8;
}


.ap-home-button {
    display: inline-flex;

    align-items: center;

    gap: 12px;

    padding: 15px 25px;

    border: 1px solid #5ed8e8;

    border-radius: 5px;

    color: #071827;

    background: #5ed8e8;

    text-decoration: none;

    font-size: 14px;

    font-weight: 800;

    transition: .25s ease;
}


.ap-home-button:hover {
    color: #ffffff;

    background: transparent;
}


/* =========================================================
   HERO VISUAL
========================================================= */

.ap-home-visual {
    position: absolute;

    right: 5%;
    top: 50%;

    width: 470px;
    height: 470px;

    transform: translateY(-50%);
}


.ap-home-orbit {
    position: absolute;

    border: 1px solid rgba(94,216,232,.20);

    border-radius: 50%;
}


.ap-home-orbit.one {
    inset: 0;
}


.ap-home-orbit.two {
    inset: 65px;
}


.ap-home-orbit.three {
    inset: 130px;
}


.ap-home-core {
    position: absolute;

    top: 50%;
    left: 50%;

    width: 150px;
    height: 150px;

    transform: translate(-50%, -50%);

    border-radius: 35px;

    display: flex;
    align-items: center;
    justify-content: center;

    background:
        linear-gradient(
            145deg,
            #ffffff,
            #dff4f6
        );

    color: #08788e;

    font-size: 36px;
    font-weight: 800;

    box-shadow:
        0 30px 80px rgba(0,0,0,.4);
}


.ap-home-node {
    position: absolute;

    width: 70px;
    height: 70px;

    border-radius: 20px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: rgba(255,255,255,.08);

    border: 1px solid rgba(94,216,232,.30);

    color: #5ed8e8;

    font-size: 12px;

    font-weight: 800;

    backdrop-filter: blur(8px);
}


.ap-home-node.one {
    top: 25px;
    left: 200px;
}


.ap-home-node.two {
    right: 20px;
    top: 200px;
}


.ap-home-node.three {
    bottom: 25px;
    left: 200px;
}


.ap-home-node.four {
    left: 20px;
    top: 200px;
}


/* =========================================================
   STATEMENT
========================================================= */

.ap-home-statement {
    position: relative;

    padding: 75px 0;

    background:
        linear-gradient(
            135deg,
            #08788e,
            #07526d
        );

    overflow: hidden;
}


.ap-home-statement::after {
    content: "";

    position: absolute;

    width: 280px;
    height: 280px;

    right: -100px;
    top: -140px;

    border-radius: 50%;

    border: 1px solid rgba(255,255,255,.15);
}


.ap-home-statement-container {
    position: relative;

    z-index: 2;

    width: calc(100% - 50px);

    max-width: 1050px;

    margin: 0 auto;

    text-align: center;
}


.ap-home-statement p {
    margin: 0;

    color: #ffffff;

    font-size: clamp(25px, 3vw, 40px);

    line-height: 1.45;

    font-weight: 500;

    letter-spacing: -.5px;
}


/* =========================================================
   CORE CAPABILITIES
========================================================= */

.ap-home-capabilities {
    padding: 105px 0 80px;

    background: #ffffff;
}


.ap-home-container {
    width: calc(100% - 50px);

    max-width: 1180px;

    margin: 0 auto;
}


.ap-home-section-heading {
    max-width: 760px;

    margin-bottom: 65px;
}


.ap-home-label {
    display: block;

    margin-bottom: 16px;

    color: #08788e;

    font-size: 12px;

    font-weight: 800;

    letter-spacing: 3px;
}


.ap-home-section-heading h2 {
    margin: 0 0 20px;

    color: #10243a;

    font-size: clamp(38px, 5vw, 58px);

    line-height: 1.08;

    font-weight: 750;

    letter-spacing: -2px;
}


.ap-home-section-heading p {
    max-width: 700px;

    margin: 0;

    color: #687b8e;

    font-size: 17px;

    line-height: 1.8;
}


/* =========================================================
   CAPABILITY CARDS
========================================================= */

.ap-capability-grid {
    display: grid;

    grid-template-columns:
        repeat(3, minmax(0, 1fr));

    gap: 25px;
}


.ap-capability-card {
    position: relative;

    min-height: 330px;

    padding: 35px;

    border: 1px solid #e0e8ed;

    border-radius: 20px;

    background: #ffffff;

    box-shadow:
        0 12px 45px rgba(15,40,60,.05);

    transition:
        transform .3s ease,
        box-shadow .3s ease,
        border-color .3s ease;
}


.ap-capability-card:hover {
    transform: translateY(-8px);

    border-color: #b6e0e6;

    box-shadow:
        0 25px 60px rgba(15,40,60,.12);
}


.ap-capability-number {
    display: flex;

    align-items: center;
    justify-content: center;

    width: 58px;
    height: 58px;

    margin-bottom: 45px;

    border-radius: 16px;

    background: #eaf8fa;

    color: #08788e;

    font-size: 14px;

    font-weight: 800;
}


.ap-capability-card h3 {
    margin: 0 0 18px;

    color: #10243a;

    font-size: 25px;

    line-height: 1.2;

    font-weight: 700;
}


.ap-capability-card p {
    margin: 0;

    color: #6d7f90;

    font-size: 15px;

    line-height: 1.8;
}


.ap-capability-arrow {
    position: absolute;

    right: 30px;
    bottom: 30px;

    color: #08788e;

    font-size: 22px;
}


/* =========================================================
   CLIENTS
========================================================= */

.ap-home-clients {
    padding: 100px 0;

    background: #f6f9fb;
}


.ap-home-clients-heading {
    display: flex;

    align-items: end;

    justify-content: space-between;

    gap: 30px;

    margin-bottom: 55px;
}


.ap-home-clients-heading h2 {
    margin: 0;

    color: #10243a;

    font-size: clamp(38px, 5vw, 55px);

    line-height: 1.1;

    font-weight: 750;

    letter-spacing: -2px;
}


.ap-home-clients-heading p {
    max-width: 420px;

    margin: 0;

    color: #687b8e;

    font-size: 16px;

    line-height: 1.8;
}


/* =========================================================
   CLIENT LOGOS
========================================================= */

.ap-client-grid {
    display: grid;

    grid-template-columns:
        repeat(4, minmax(0, 1fr));

    gap: 18px;
}


.ap-client-card {
    min-height: 145px;

    padding: 25px;

    border: 1px solid #e0e8ed;

    border-radius: 16px;

    display: flex;

    align-items: center;
    justify-content: center;

    text-align: center;

    background: #ffffff;

    color: #53697b;

    font-size: 18px;

    font-weight: 700;

    letter-spacing: -.2px;

    transition:
        transform .25s ease,
        box-shadow .25s ease,
        color .25s ease;
}


.ap-client-card:hover {
    transform: translateY(-5px);

    color: #08788e;

    box-shadow:
        0 18px 45px rgba(15,40,60,.08);
}


/* =========================================================
   CTA
========================================================= */

.ap-home-cta {
    padding: 90px 0;

    background: #ffffff;
}


.ap-home-cta-box {
    position: relative;

    overflow: hidden;

    padding: 65px;

    border-radius: 25px;

    background:
        linear-gradient(
            135deg,
            #071827,
            #0b344d
        );
}


.ap-home-cta-box::after {
    content: "";

    position: absolute;

    width: 420px;
    height: 420px;

    right: -170px;
    top: -200px;

    border-radius: 50%;

    border: 1px solid rgba(94,216,232,.18);
}


.ap-home-cta-content {
    position: relative;

    z-index: 2;

    max-width: 750px;
}


.ap-home-cta-label {
    margin-bottom: 15px;

    color: #5ed8e8;

    font-size: 11px;

    font-weight: 800;

    letter-spacing: 3px;
}


.ap-home-cta h2 {
    margin: 0 0 18px;

    color: #ffffff;

    font-size: clamp(34px, 5vw, 55px);

    line-height: 1.1;

    font-weight: 750;

    letter-spacing: -2px;
}


.ap-home-cta p {
    margin: 0;

    color: #b2c1ce;

    font-size: 17px;

    line-height: 1.8;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1050px) {

    .ap-home-visual {
        right: -100px;

        opacity: .35;
    }

    .ap-capability-grid {
        grid-template-columns:
            repeat(3, minmax(0, 1fr));
    }

}


@media (max-width: 900px) {

    .ap-home-hero {
        min-height: auto;
    }

    .ap-home-hero-container {
        width: calc(100% - 40px);
    }

    .ap-home-hero-content {
        padding: 85px 0;
    }

    .ap-home-visual {
        display: none;
    }

    .ap-home-container {
        width: calc(100% - 40px);
    }

    .ap-capability-grid {
        grid-template-columns:
            repeat(2, minmax(0, 1fr));
    }

    .ap-client-grid {
        grid-template-columns:
            repeat(2, minmax(0, 1fr));
    }

    .ap-home-clients-heading {
        display: block;
    }

    .ap-home-clients-heading p {
        margin-top: 20px;
    }

}


@media (max-width: 650px) {

    .ap-home-hero h1 {
        font-size: 48px;

        letter-spacing: -2px;
    }

    .ap-home-hero-text {
        font-size: 16px;
    }

    .ap-home-statement {
        padding: 55px 0;
    }

    .ap-home-statement-container {
        width: calc(100% - 40px);
    }

    .ap-home-statement p {
        font-size: 25px;
    }

    .ap-capability-grid {
        grid-template-columns: 1fr;
    }

    .ap-client-grid {
        grid-template-columns: 1fr;
    }

    .ap-home-cta-box {
        padding: 40px 30px;
    }

}


@media (max-width: 450px) {

    .ap-home-hero-container,
    .ap-home-container {
        width: calc(100% - 30px);
    }

    .ap-home-hero h1 {
        font-size: 42px;
    }

    .ap-home-section-heading h2 {
        font-size: 40px;
    }

    .ap-capability-card {
        padding: 28px;
    }

}


/* =========================================================
   FOOTER CONTENT COMPATIBILITY
========================================================= */

.ameripro-home + .site-footer {
    margin-top: 0;
}

/* =========================================================
   MODERN CLIENT SECTION
========================================================= */

.ap-home-clients {
    padding: 105px 0 110px;
    background: #f6f9fb;
}


.ap-home-clients-heading {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;

    gap: 50px;

    margin-bottom: 55px;
}


.ap-home-clients-heading h2 {
    margin: 0;

    color: #10243a;

    font-size: clamp(40px, 5vw, 58px);

    line-height: 1.05;

    font-weight: 750;

    letter-spacing: -2px;
}


.ap-home-clients-heading p {
    max-width: 430px;

    margin: 0;

    color: #66798c;

    font-size: 16px;

    line-height: 1.8;
}


/* =========================================================
   CLIENT GRID
========================================================= */

.ap-client-grid {
    display: grid;

    grid-template-columns:
        repeat(4, minmax(0, 1fr));

    gap: 20px;
}


/* =========================================================
   CLIENT CARD
========================================================= */

.ap-client-card {
    min-height: 175px;

    padding: 30px;

    border: 1px solid #e1e9ee;

    border-radius: 18px;

    display: flex;

    align-items: center;

    justify-content: center;

    background: #ffffff;

    box-shadow:
        0 8px 30px rgba(16,36,58,.04);

    transition:
        transform .3s ease,
        box-shadow .3s ease,
        border-color .3s ease;
}


.ap-client-card:hover {

    transform: translateY(-7px);

    border-color: #9bd9e2;

    box-shadow:
        0 20px 50px rgba(16,36,58,.10);
}


/* =========================================================
   LOGO TEXT
========================================================= */

.client-logo-placeholder {
    text-align: center;

    line-height: 1.1;

    transition: .3s ease;
}


.client-logo-placeholder span {
    display: block;
}


/* HealthWave */

.client-logo-placeholder.healthwave {
    color: #36a9d0;

    font-size: 22px;

    font-weight: 700;

    letter-spacing: 1px;
}


.client-logo-placeholder.healthwave small {
    display: block;

    margin-top: 8px;

    color: #70b7ce;

    font-size: 12px;

    letter-spacing: 4px;
}


/* PhoneTree */

.client-logo-placeholder.phonetree {
    color: #168bb7;

    font-size: 30px;

    font-weight: 700;
}


.client-logo-placeholder.phonetree small {
    display: block;

    margin-top: 8px;

    color: #8294a0;

    font-size: 10px;

    font-weight: 500;
}


/* NextGen */

.client-logo-placeholder.nextgen {
    color: #17202a;

    font-size: 26px;

    letter-spacing: 3px;

    font-weight: 400;
}


.client-logo-placeholder.nextgen span span {
    color: #009ccf;
}


.client-logo-placeholder.nextgen small {
    display: block;

    margin-top: 9px;

    color: #687785;

    font-size: 10px;

    letter-spacing: 5px;
}


/* VoiceWave */

.client-logo-placeholder.voicewave {
    color: #1688b8;

    font-size: 20px;

    font-weight: 500;
}


.client-logo-placeholder.voicewave span {
    display: inline;

    font-weight: 700;
}


/* Addox */

.client-logo-placeholder.addox strong {
    display: block;

    color: #e87722;

    font-size: 34px;

    font-weight: 500;

    letter-spacing: 6px;
}


.client-logo-placeholder.addox small {
    display: block;

    margin-top: 8px;

    color: #89939b;

    font-size: 9px;

    letter-spacing: 2px;
}


/* Church Community Builder */

.client-logo-placeholder.ccb {
    display: flex;

    align-items: center;

    gap: 15px;

    color: #505b64;
}


.client-logo-placeholder.ccb strong {
    font-size: 40px;

    font-weight: 300;

    letter-spacing: -8px;
}


.client-logo-placeholder.ccb span {
    text-align: left;

    font-size: 15px;

    line-height: 1.05;

    letter-spacing: 1px;
}


/* Pegram */

.client-logo-placeholder.pegram strong {
    display: block;

    color: #283f76;

    font-family: Georgia, serif;

    font-size: 30px;

    letter-spacing: 2px;
}


.client-logo-placeholder.pegram small {
    display: block;

    margin-top: 7px;

    color: #d44d61;

    font-size: 11px;

    letter-spacing: 5px;
}


/* Nick's */

.client-logo-placeholder.nicks {
    padding: 15px 25px;

    border-radius: 8px;

    background: #171717;
}


.client-logo-placeholder.nicks strong {
    display: block;

    color: #f7d33d;

    font-family: Georgia, serif;

    font-size: 30px;

    font-style: italic;
}


.client-logo-placeholder.nicks small {
    display: block;

    margin-top: 6px;

    color: #f1d33a;

    font-size: 8px;

    letter-spacing: 1px;
}


/* =========================================================
   CLIENT RESPONSIVE
========================================================= */

@media (max-width: 1000px) {

    .ap-client-grid {
        grid-template-columns:
            repeat(2, minmax(0, 1fr));
    }

}


@media (max-width: 700px) {

    .ap-home-clients {
        padding: 75px 0;
    }


    .ap-home-clients-heading {
        display: block;
    }


    .ap-home-clients-heading p {
        margin-top: 20px;
    }


    .ap-client-grid {
        grid-template-columns: 1fr;
    }


    .ap-client-card {
        min-height: 150px;
    }

}

</style>


<main class="ameripro-home">


    <!-- =====================================================
         HERO
    ====================================================== -->

    <section class="ap-home-hero">

        <div class="ap-home-hero-grid"></div>


        <div class="ap-home-hero-container">

            <div class="ap-home-hero-content">

                <div class="ap-home-eyebrow">
                    AMERIPRO SOLUTIONS
                </div>


                <h1>
                    Technology that
                    moves business
                    forward.
                </h1>


                <p class="ap-home-hero-text">
                    AmeriPro Solutions brings a personal and
                    effective approach to every project,
                    delivering technology solutions designed
                    around real business needs.
                </p>


                <a
                    href="<?= base_url('services') ?>"
                    class="ap-home-button"
                >
                    Explore Our Services

                    <span>
                        →
                    </span>
                </a>

            </div>

        </div>


        <!-- MODERN TECHNOLOGY VISUAL -->

        <div class="ap-home-visual">

            <div class="ap-home-orbit one"></div>

            <div class="ap-home-orbit two"></div>

            <div class="ap-home-orbit three"></div>


            <div class="ap-home-core">
                AP
            </div>


            <div class="ap-home-node one">
                CLOUD
            </div>


            <div class="ap-home-node two">
                DATA
            </div>


            <div class="ap-home-node three">
                WEB
            </div>


            <div class="ap-home-node four">
                QA
            </div>

        </div>

    </section>


    <!-- =====================================================
         ORIGINAL HOME PAGE MESSAGE
    ====================================================== -->

    <section class="ap-home-statement">

        <div class="ap-home-statement-container">

            <p>
                We bring a personal and effective approach
                to every project we work on, which is why our
                clients love us and why they keep coming back.
            </p>

        </div>

    </section>


    <!-- =====================================================
         CORE CAPABILITIES
    ====================================================== -->

    <section class="ap-home-capabilities">

        <div class="ap-home-container">


            <div class="ap-home-section-heading">

                <span class="ap-home-label">
                    WHAT WE DO
                </span>


                <h2>
                    Turning ideas into
                    practical solutions.
                </h2>


                <p>
                    AmeriPro Solutions provides technology
                    services focused on product development,
                    strategy solutions and quality assurance.
                </p>

            </div>


            <div class="ap-capability-grid">


                <!-- PRODUCT DEVELOPMENT -->

                <article class="ap-capability-card">

                    <div class="ap-capability-number">
                        01
                    </div>


                    <h3>
                        Product Development
                    </h3>


                    <p>
                        Process of designing, creating and
                        marketing new products.
                    </p>


                    <span class="ap-capability-arrow">
                        →
                    </span>

                </article>


                <!-- STRATEGY SOLUTIONS -->

                <article class="ap-capability-card">

                    <div class="ap-capability-number">
                        02
                    </div>


                    <h3>
                        Strategy Solutions
                    </h3>


                    <p>
                        To develop innovative strategies and
                        solutions to improve performance.
                    </p>


                    <span class="ap-capability-arrow">
                        →
                    </span>

                </article>


                <!-- QUALITY ASSURANCE -->

                <article class="ap-capability-card">

                    <div class="ap-capability-number">
                        03
                    </div>


                    <h3>
                        Quality Assurance
                    </h3>


                    <p>
                        Prevent defects in products and avoid
                        problems when delivering solutions.
                    </p>


                    <span class="ap-capability-arrow">
                        →
                    </span>

                </article>


            </div>

        </div>

    </section>


  <!-- =====================================================
     OUR CLIENTS
====================================================== -->

<section class="ap-home-clients">

    <div class="ap-home-container">

        <div class="ap-home-clients-heading">

            <div>

                <span class="ap-home-label">
                    OUR CLIENTS
                </span>

                <h2>
                    Trusted by businesses.
                </h2>

            </div>

            <p>
                Our clients represent organizations
                across different industries and business
                requirements.
            </p>

        </div>


        <div class="ap-client-grid">


            <!-- HEALTHWAVE -->

            <div class="ap-client-card">

                <div class="client-logo-placeholder healthwave">
                    <span>HEALTHWAVE</span>
                    <small>CONNECT</small>
                </div>

            </div>


            <!-- PHONETREE -->

            <div class="ap-client-card">

                <div class="client-logo-placeholder phonetree">
                    <span>PhoneTree</span>
                    <small>Proven. Professional. Trusted.</small>
                </div>

            </div>


            <!-- NEXTGEN -->

            <div class="ap-client-card">

                <div class="client-logo-placeholder nextgen">
                    <span>NEXT<span>GEN</span></span>
                    <small>HEALTHCARE</small>
                </div>

            </div>


            <!-- VOICEWAVE -->

            <div class="ap-client-card">

                <div class="client-logo-placeholder voicewave">
                    VoiceWave<span>ONLINE</span>
                </div>

            </div>


            <!-- ADDOX -->

            <div class="ap-client-card">

                <div class="client-logo-placeholder addox">
                    <strong>addox</strong>
                    <small>
                        INFRASTRUCTURE PVT. LTD.
                    </small>
                </div>

            </div>


            <!-- CHURCH COMMUNITY BUILDER -->

            <div class="ap-client-card">

                <div class="client-logo-placeholder ccb">

                    <strong>
                        ○○○
                    </strong>

                    <span>
                        CHURCH<br>
                        COMMUNITY<br>
                        BUILDER
                    </span>

                </div>

            </div>


            <!-- PEGRAM -->

            <div class="ap-client-card">

                <div class="client-logo-placeholder pegram">

                    <strong>
                        PEGRAM
                    </strong>

                    <small>
                        INSURANCE
                    </small>

                </div>

            </div>


            <!-- NICK'S -->

            <div class="ap-client-card">

                <div class="client-logo-placeholder nicks">

                    <strong>
                        Nick's
                    </strong>

                    <small>
                        BUILDING SUPPLY, INC.
                    </small>

                </div>

            </div>


        </div>

    </div>

</section>


    <!-- =====================================================
         CLOSING CTA
    ====================================================== -->

    <section class="ap-home-cta">

        <div class="ap-home-container">

            <div class="ap-home-cta-box">

                <div class="ap-home-cta-content">

                    <div class="ap-home-cta-label">
                        AMERIPRO SOLUTIONS
                    </div>


                    <h2>
                        Let's build something
                        meaningful together.
                    </h2>


                    <p>
                        Explore our services and discover
                        technology solutions designed to
                        support your business.
                    </p>

                </div>

            </div>

        </div>

    </section>


</main>


<?= $this->include('layouts/footer') ?>