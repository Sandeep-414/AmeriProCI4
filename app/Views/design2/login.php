<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>AmeriPro | Employee Login</title>

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
     LOGIN PAGE
===================================================== -->

<section class="d2-login-page">

    <div class="d2-login-box">


        <div class="d2-section-title">

            <span>
                EMPLOYEE PORTAL
            </span>

            <h2>
                Employee Login
            </h2>

            <p>
                Select an employee service to continue.
            </p>

        </div>



        <!-- =================================================
             TIMSNAP
        ================================================== -->

        <a
            href="<?= base_url('design2/timesheet') ?>"
            class="d2-login-option"
        >

            <strong>
                Timsnap
            </strong>

            <br>

            <span>
                Access your timesheet and employee
                time management services.
            </span>

        </a>



        <!-- =================================================
             EMPLOYEE PORTAL
        ================================================== -->

        <a
            href="<?= base_url('design2/employee-portal') ?>"
            class="d2-login-option"
        >

            <strong>
                Employee Portal
            </strong>

            <br>

            <span>
                Access employee information and services.
            </span>

        </a>



        <!-- =================================================
             BACK
        ================================================= -->

        <div style="text-align:center; margin-top:30px;">

            <a
                href="<?= base_url('design2') ?>"
                class="d2-primary-btn"
            >

                Back to Home

            </a>

        </div>


    </div>

</section>

<?= $this->include('design2/footer') ?>


</body>

</html>