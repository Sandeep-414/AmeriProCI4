<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? 'AmeriPro Solutions' ?></title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="<?= base_url('assets/css/style.css') ?>"
    >

</head>

<body>

<header class="site-header">

    <nav class="navbar navbar-expand-lg">

        <div class="container">

            <!-- LOGO -->

            <a
    class="navbar-brand"
    href="<?= base_url('/') ?>"
>
    <img
        src="<?= base_url('assets/images/ameripro-logo.png') ?>"
        alt="AmeriPro Solutions"
        class="ameripro-logo"
    >
</a>


            <!-- MOBILE MENU -->

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar"
                aria-controls="mainNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >

                <span class="navbar-toggler-icon"></span>

            </button>


            <!-- NAVIGATION -->

            <div
                class="collapse navbar-collapse"
                id="mainNavbar"
            >

                <ul class="navbar-nav ms-auto align-items-lg-center">


                    <!-- HOME -->

                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="<?= base_url('/') ?>"
                        >
                            Home
                        </a>

                    </li>


                    <!-- ABOUT -->

                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="<?= base_url('about') ?>"
                        >
                            About
                        </a>

                    </li>


                    <!-- SERVICES -->

                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="<?= base_url('services') ?>"
                        >
                            Services
                        </a>

                    </li>


                    <!-- SOLUTIONS -->

                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="<?= base_url('solutions') ?>"
                        >
                            Solutions
                        </a>

                    </li>


                    <!-- CAREERS -->

                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="<?= base_url('careers') ?>"
                        >
                            Careers
                        </a>

                    </li>


                    <!-- CONTACT -->

                    <li class="nav-item ms-lg-3">

                        <a
                            class="contact-button"
                            href="<?= base_url('contact') ?>"
                        >
                            Contact Us
                        </a>

                    </li>


                    <!-- LOGIN -->

                    <li class="nav-item dropdown login-nav-item">

                        <a
                            class="nav-link login-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            Login
                        </a>


                        <ul class="dropdown-menu login-dropdown">


                            <!-- EMPLOYEE -->

                            <li>

                                <a
    class="dropdown-item"
    href="https://sso.secureserver.net/?realm=pass&app=email"
>
    Employee
</a>

                            </li>


                            <!-- TIMESHEET -->

                            <li>

                                <a
                                    class="dropdown-item"
                                    href="<?= base_url('login/timesheet') ?>"
                                >
                                    Timesheet
                                </a>

                            </li>


                        </ul>

                    </li>

                </ul>

            </div>

        </div>

    </nav>

</header>