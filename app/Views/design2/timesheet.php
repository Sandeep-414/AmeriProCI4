<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>AmeriPro | Timsnap</title>

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
     TIMSNAP LOGIN
===================================================== -->

<section class="d2-login-page">

    <div class="d2-login-box">


        <div class="d2-section-title">

            <span>
                EMPLOYEE TIME MANAGEMENT
            </span>

            <h2>
                Timsnap
            </h2>

            <p>
                Employee time and timesheet access
            </p>

        </div>


        <!-- EMPLOYEE ID -->

        <div class="d2-form-group">

            <label for="employee_id">
                Employee ID
            </label>

            <input
                type="text"
                id="employee_id"
                name="employee_id"
                class="d2-form-control"
                placeholder="Enter Employee ID"
            >

        </div>


        <!-- PASSWORD -->

        <div class="d2-form-group">

            <label for="password">
                Password
            </label>

            <input
                type="password"
                id="password"
                name="password"
                class="d2-form-control"
                placeholder="Enter Password"
            >

        </div>


        <!-- LOGIN -->

        <div style="text-align:center;">

            <button
                type="button"
                class="d2-primary-btn"
                onclick="alert('Timsnap login will be connected here.');"
            >
                Login
            </button>

        </div>


        <!-- BACK -->

        <div style="text-align:center; margin-top:25px;">

            <a
                href="<?= base_url('design2/login') ?>"
                style="color:#687386;"
            >
                ← Back to Employee Login
            </a>

        </div>


    </div>

</section>
<?= $this->include('design2/footer') ?>


</body>

</html>