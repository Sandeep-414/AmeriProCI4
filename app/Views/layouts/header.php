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

    <style>

        /* =========================
           MAIN NAVBAR
        ========================= */

        .site-header {
            background: #081a2a;
            border-bottom: 1px solid #123b52;
        }

        .navbar {
            padding: 20px 0;
        }


        /* =========================
           LOGO
        ========================= */

        .d2-logo {
            width: 170px;
            height: auto;
            max-width: 100%;
            display: block;
            object-fit: contain;
        }


        /* =========================
           NAVIGATION LINKS
        ========================= */

        .nav-link {
            color: #ffffff !important;
            font-size: 15px;
            font-weight: 600;
            margin-left: 22px;
        }

        .nav-link:hover {
            color: #55d6e8 !important;
        }


        /* =========================
           CONTACT BUTTON
        ========================= */

        .contact-button {
            display: inline-block;
            padding: 11px 23px;
            background: #55d6e8;
            color: #081a2a;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
        }

        .contact-button:hover {
            background: #3fc2d5;
            color: #081a2a;
        }


        /* =========================
           LOGIN DROPDOWN
        ========================= */

        .login-dropdown {
            background: #081a2a;
            border: 1px solid #123b52;
        }

        .login-dropdown .dropdown-item {
            color: #ffffff;
        }

        .login-dropdown .dropdown-item:hover {
            background: #123b52;
            color: #55d6e8;
        }


        /* =========================
           MOBILE MENU BUTTON
        ========================= */

        .navbar-toggler {
            border-color: #55d6e8;
        }

        .navbar-toggler-icon {
            filter: brightness(0) invert(1);
        }

    </style>

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
                    src="<?= base_url('assets/images/design3/ameripro-logo-footer.png') ?>"
                    class="d2-logo"
                    alt="AmeriPro"
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