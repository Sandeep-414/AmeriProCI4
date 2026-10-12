<!DOCTYPE html>

<html lang="en">



<head>





    <meta charset="UTF-8">



    <meta name="viewport"

          content="width=device-width, initial-scale=1.0">



    <title>Get Started | AmeriPro Solutions</title>





    <!-- =====================================================

         BOOTSTRAP 5

    ====================================================== -->



    <link

        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"

        rel="stylesheet">





    <!-- =====================================================

         EXISTING DESIGN 3 CSS

    ====================================================== -->



    <link

        rel="stylesheet"

        href="<?= base_url('assets/css/design3.css') ?>?v=<?= time() ?>">





        <link

    rel="stylesheet"

    href="https://cdn.jsdelivr.net/npm/bootstrap-icons\@1.11.3/font/bootstrap-icons.min.css"

>





    <!-- =====================================================

         GET STARTED PAGE BOOTSTRAP OVERRIDES

         No new CSS file

    ====================================================== -->



        <!-- Get Started styles are maintained in design3.css -->




</head>





<body class="d3-get-started-page">











<!-- =====================================================

     NAVBAR

\===================================================== -->

<!-- =====================================================

     DESIGN 3 NAVBAR

\====================================================== -->

 <header class="d3-header">



    <a href="<?= base_url('design3') ?>" class="d3-logo">

        <img

            src="<?= base_url('assets/images/design3/ameripro-logo.png') ?>"

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



        <a href="<?= base_url('design3/services') ?>" class="d3-dropdown">

            Services

            <span>⌄</span>

        </a>



        <a href="<?= base_url('design3/solutions') ?>" class="d3-dropdown">

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

            href="<?= base_url('design3/get-started') ?>"

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



<!-- Hamburger slide-out menu -->
<div class="d3-menu-overlay" id="d3MenuOverlay"></div>

<nav class="d3-mobile-menu" id="d3MobileMenu"
     aria-label="Main navigation">

    <div class="d3-mobile-menu-header">
        <span>Explore AmeriPro</span>
        <button type="button" id="d3MenuClose"
                class="d3-menu-close"
                aria-label="Close menu">&times;</button>
    </div>

    <a href="<?= base_url('design3') ?>">Home <span>↗</span></a>
    <a href="<?= base_url('design3/about') ?>">About Us <span>↗</span></a>
    <a href="<?= base_url('design3/services') ?>">Services <span>↗</span></a>
    <a href="<?= base_url('design3/solutions') ?>">Solutions <span>↗</span></a>
    <a href="<?= base_url('design3/careers') ?>">Careers <span>↗</span></a>
    <a href="<?= base_url('design3/contact') ?>">Contact Us <span>↗</span></a>

    <a href="<?= base_url('design3/get-started') ?>"
       class="d3-mobile-menu-cta">
        Get Started Now <span>↗</span>
    </a>

</nav>




<!-- =====================================================

     GET STARTED

\====================================================== -->



<section class="d3-gs-section">



    <div class="container-fluid">





        <div class="d3-gs-card">



        <?php if (session()->getFlashdata('success')): ?>



    <div class="d3-gs-success-message">



        <div class="d3-success-icon">

            ✓

        </div>



        <div class="d3-success-content">



            <strong>Thank you!</strong>



            <p>

                Your project details have been submitted successfully.

            </p>



        </div>



    </div>



<?php endif; ?>



            <!-- =================================================

                 TITLE

            ================================================== -->



            <div class="d3-gs-top">



                <div class="d3-gs-company">



                    We are AmeriPro Solutions LLC



                </div>





                <h1 class="d3-gs-title">



                    Lets start your

                    <span>project</span>



                </h1>



            </div>







            <!-- =================================================

                 FORM

            ================================================== -->



            <div class="d3-gs-form-wrapper">



                <form

                    action="<?= base_url('design3/get-started-submit') ?>"

                    method="post">



                    <?= csrf_field() ?>





                    <!-- NAME + EMAIL -->



                    <div class="row g-4 mb-3">



                        <div class="col-md-6">



                            <input

                                type="text"

                                name="name"

                                class="form-control d3-gs-input"

                                placeholder="Name"

                                required>



                        </div>





                        <div class="col-md-6">



                            <input

                                type="email"

                                name="email"

                                class="form-control d3-gs-input"

                                placeholder="Email"

                                required>



                        </div>



                    </div>







                    <!-- CONTACT + CITY -->



                    <div class="row g-4 mb-3">



                        <div class="col-md-6">



                            <input

                                type="text"

                                name="contact"

                                class="form-control d3-gs-input"

                                placeholder="Contact #"

                                required>



                        </div>





                        <div class="col-md-6">



                            <input

                                type="text"

                                name="city_country"

                                class="form-control d3-gs-input"

                                placeholder="City / Country">



                        </div>



                    </div>







                    <!-- PROJECT TYPE + BUDGET -->



                    <div class="row g-4 mb-3">



                        <div class="col-md-6">



                            <select

                                name="project_type"

                                class="form-select d3-gs-select"

                                required>



                                <option

                                    value=""

                                    disabled

                                    selected>



                                    Project type



                                </option>



                                <option value="Website Development">

                                    Website Development

                                </option>



                                <option value="Web Application">

                                    Web Application

                                </option>



                                <option value="Mobile Application">

                                    Mobile Application

                                </option>



                                <option value="Software Development">

                                    Software Development

                                </option>



                                <option value="UI UX Design">

                                    UI / UX Design

                                </option>



                                <option value="E-Commerce">

                                    E-Commerce

                                </option>



                                <option value="Other">

                                    Other

                                </option>



                            </select>



                        </div>





                        <div class="col-md-6">



                            <select

                                name="budget"

                                class="form-select d3-gs-select">



                                <option

                                    value=""

                                    disabled

                                    selected>



                                    Budget



                                </option>



                                <option value="Below $1,000">

                                    Below $1,000

                                </option>



                                <option value="$1,000 - $5,000">

                                    $1,000 - $5,000

                                </option>



                                <option value="$5,000 - $10,000">

                                    $5,000 - $10,000

                                </option>



                                <option value="$10,000 - $25,000">

                                    $10,000 - $25,000

                                </option>



                                <option value="$25,000+">

                                    $25,000+

                                </option>



                            </select>



                        </div>



                    </div>







                    <!-- DESCRIPTION -->



                    <div class="mt-4">



                        <textarea

                            name="message"

                            class="form-control d3-gs-textarea"

                            placeholder="Please explain your project in detail."

                            required></textarea>



                    </div>







                    <!-- PHONE PREFERENCE -->



                    <div class="d3-gs-phone">



                        <label

                            class="form-check d-inline-flex align-items-center">



                            <input

                                type="checkbox"

                                name="phone_preferred"

                                value="Yes"

                                class="form-check-input">



                            <span>

                                Contact by phone is preferred

                            </span>



                        </label>



                    </div>

<!-- =====================================================

     CUSTOM CAPTCHA

\===================================================== -->



<div class="d3-gs-captcha">



    <label class="d3-custom-captcha">



        <input

            type="checkbox"

            id="customCaptcha"

            name="captcha"

            value="verified"

        >



        <span class="d3-captcha-left">



            <span class="d3-captcha-checkbox"></span>



            <span class="d3-captcha-text">

                I'm not a robot

            </span>



        </span>



        <span class="d3-captcha-right">



            <span class="d3-captcha-refresh">

                ↻

            </span>



            <span class="d3-captcha-name">

                reCAPTCHA

            </span>



        </span>



    </label>



</div>







                    <!-- =================================================

                         SUBMIT

                    ================================================== -->



                   <button

    type="submit"

    id="submitButton"

    class="btn d3-gs-submit"

    disabled>



    Submit Now



    <span class="ms-2">→</span>



</button>





                </form>



            </div>



        </div>



    </div>



</section>



<!-- =====================================================

     DESIGN 3 FOOTER

\====================================================== -->



<?= view('design3/footer') ?>







<!-- =====================================================

     BOOTSTRAP JS

\====================================================== -->

<!-- =====================================================

     BOOTSTRAP JS

\====================================================== -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>





<!-- =====================================================

     CUSTOM CAPTCHA + SUBMIT

\====================================================== -->



<script>

document.addEventListener("DOMContentLoaded", function () {



    const captcha = document.getElementById("customCaptcha");

    const submitButton = document.getElementById("submitButton");



    if (!captcha || !submitButton) {

        console.log("Captcha or Submit button not found.");

        return;

    }



    // Submit disabled initially

    submitButton.disabled = true;



    submitButton.style.opacity = "0.55";

    submitButton.style.cursor = "not-allowed";





    // When CAPTCHA is clicked

    captcha.addEventListener("change", function () {



        if (this.checked) {



            // Enable submit

            submitButton.disabled = false;



            submitButton.style.opacity = "1";

            submitButton.style.cursor = "pointer";



        } else {



            // Disable submit again

            submitButton.disabled = true;



            submitButton.style.opacity = "0.55";

            submitButton.style.cursor = "not-allowed";



        }



    });



});



document.addEventListener("DOMContentLoaded", function () {
    const button = document.getElementById("d3MenuButton");
    const menu = document.getElementById("d3MobileMenu");
    const overlay = document.getElementById("d3MenuOverlay");
    const closeButton = document.getElementById("d3MenuClose");

    if (!button || !menu || !overlay || !closeButton) {
        console.error("Design 3 menu elements are missing.");
        return;
    }

    function openMenu() {
        menu.classList.add("is-open");
        overlay.classList.add("is-open");
        document.body.classList.add("d3-menu-open");
        button.classList.add("open");
        button.setAttribute("aria-expanded", "true");
    }

    function closeMenu() {
        menu.classList.remove("is-open");
        overlay.classList.remove("is-open");
        document.body.classList.remove("d3-menu-open");
        button.classList.remove("open");
        button.setAttribute("aria-expanded", "false");
    }

    button.addEventListener("click", function () {
        menu.classList.contains("is-open") ? closeMenu() : openMenu();
    });

    closeButton.addEventListener("click", closeMenu);
    overlay.addEventListener("click", closeMenu);

    menu.querySelectorAll("a").forEach(function (link) {
        link.addEventListener("click", closeMenu);
    });

    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape") closeMenu();
    });
});
</script>






</body>

</html>
