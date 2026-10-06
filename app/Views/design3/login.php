<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Employee Login | AmeriPro Solutions
    </title>

    <link
        rel="stylesheet"
        href="<?= base_url('assets/css/design3.css') ?>?v=<?= time() ?>"
    >

</head>


<body class="d3-login-page d3-login-navbar">


<!-- =====================================================
     NAVBAR
===================================================== -->

<header class="d3-header">

    <a
        href="<?= base_url('design3') ?>"
        class="d3-logo"
    >

        <img
            src="<?= base_url('assets/images/design3/ameripro-logo-footer.png') ?>"
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

        <a
            href="<?= base_url('design3/services') ?>"
            class="d3-dropdown"
        >
            Services
            <span>⌄</span>
        </a>

        <a
            href="<?= base_url('design3/solutions') ?>"
            class="d3-dropdown"
        >
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
    href="<?= base_url('design3/login') ?>"
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


<!-- =====================================================
     LOGIN
===================================================== -->

<main class="d3-login-main">

    <div class="d3-login-container">


        <!-- LEFT -->

        <div class="d3-login-intro">

            <span>
                AMERIPRO SOLUTIONS
            </span>


            <h1>
                Employee
                <br>
                Login
            </h1>


            <p>
                Access your AmeriPro employee services
                through the secure employee portal.
            </p>


            <div class="d3-login-line"></div>


            <p class="d3-login-help">

                Need assistance?

                <a href="<?= base_url('design3/contact') ?>">
                    Contact Us
                </a>

            </p>

        </div>


        <!-- RIGHT -->

        <div class="d3-login-card">

            <div class="d3-login-card-header">

                <div class="d3-login-icon">
                    👤
                </div>


                <div>

                    <span>
                        EMPLOYEE ACCESS
                    </span>

                    <h2>
                        Sign In
                    </h2>

                </div>

            </div>


            <form
                action="<?= base_url('design3/login') ?>"
                method="post"
                class="d3-login-form"
            >

                <div class="d3-login-field">

                    <label for="username">
                        Username
                    </label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Enter your username"
                        required
                    >

                </div>


                <div class="d3-login-field">

                    <label for="password">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                        required
                    >

                </div>


                <div class="d3-login-options">

                    <label>

                        <input
                            type="checkbox"
                            name="remember"
                        >

                        <span>
                            Remember me
                        </span>

                    </label>


                    <a href="#">
                        Forgot Password?
                    </a>

                </div>


                <button
                    type="submit"
                    class="d3-login-submit"
                >

                    Login

                    <span>
                        →
                    </span>

                </button>

            </form>

        </div>

    </div>

</main>


<!-- =====================================================
     FOOTER
===================================================== -->

<?= $this->include('design3/footer') ?>


<script src="<?= base_url('assets/js/design3.js') ?>"></script>

</body>

</html>