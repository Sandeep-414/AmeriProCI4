<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Contact Us | AmeriPro Solutions
    </title>

    <link
        rel="stylesheet"
        href="<?= base_url('assets/css/design3.css') ?>?v=<?= time() ?>"
    >

</head>


<body>


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
     CONTACT HERO
===================================================== -->

<section class="d3-contact-hero">

    <div class="d3-contact-hero-overlay"></div>


    <div class="d3-contact-hero-content">

        <span class="d3-contact-hero-label">
            CONTACT US
        </span>


        <h1>
            Let's Start
            <br>
            A Conversation
        </h1>


        <p>
            Get in touch with AmeriPro Solutions
            for your business and technology needs.
        </p>

    </div>

</section>


<!-- =====================================================
     BREADCRUMB
===================================================== -->

<section class="d3-contact-breadcrumb">

    <div class="d3-contact-breadcrumb-inner">

        <h2>
            Contact Us
        </h2>


        <div class="d3-contact-breadcrumb-links">

            <a href="<?= base_url('design3') ?>">
                Home
            </a>

            <span>/</span>

            <strong>
                Contact Us
            </strong>

        </div>

    </div>

</section>


<!-- =====================================================
     CONTACT SECTION
===================================================== -->

<section class="d3-contact-section">

    <div class="d3-contact-container">


        <!-- LEFT SIDE -->

        <div class="d3-contact-info">

            <span class="d3-contact-label">
                GET IN TOUCH
            </span>


            <h2>
                We would love
                to hear from you.
            </h2>


            <p>
                Have a question or want to discuss
                your technology requirements?
                Contact AmeriPro Solutions using
                the information below.
            </p>


            <!-- ADDRESS -->

            <div class="d3-contact-item">

                <div class="d3-contact-icon">
                    <span>⌖</span>
                </div>


                <div>

                    <h3>
                        Our Address
                    </h3>

                    <p>
                        2972 Shady View Dr,<br>
                        High Point, NC 27265.
                    </p>

                </div>

            </div>


            <!-- PHONE -->

            <div class="d3-contact-item">

                <div class="d3-contact-icon">
                    <span>☎</span>
                </div>


                <div>

                    <h3>
                        Phone
                    </h3>

                    <a href="tel:+13367902875">
                        (336) 790-2875
                    </a>

                    <a href="tel:+13365109305">
                        (336) 510-9305
                    </a>

                </div>

            </div>


            <!-- EMAIL -->

            <div class="d3-contact-item">

                <div class="d3-contact-icon">
                    <span>✉</span>
                </div>


                <div>

                    <h3>
                        Email
                    </h3>

                    <a
                        href="mailto:hr@ameripro-solutions.com"
                    >
                        hr@ameripro-solutions.com
                    </a>

                </div>

            </div>

        </div>


        <!-- RIGHT SIDE -->

        <div class="d3-contact-form-wrapper">

            <div class="d3-contact-form-header">

                <span>
                    SEND US A MESSAGE
                </span>

                <h2>
                    Tell us about your
                    requirements.
                </h2>

                <p>
                    Fill out the form below and
                    our team will get back to you.
                </p>

            </div>


            <?php if (session()->getFlashdata('success')): ?>

                <div class="d3-contact-success">

                    <?= esc(
                        session()->getFlashdata('success')
                    ) ?>

                </div>

            <?php endif; ?>


            <form
                action="<?= base_url('design3/contact/submit') ?>"
                method="post"
                class="d3-contact-form"
            >

                <?= csrf_field() ?>


                <div class="d3-contact-form-row">

                    <div class="d3-contact-field">

                        <label for="name">
                            Your Name
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Enter your name"
                            required
                        >

                    </div>


                    <div class="d3-contact-field">

                        <label for="email">
                            Email Address
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Enter your email"
                            required
                        >

                    </div>

                </div>


                <div class="d3-contact-field">

                    <label for="phone">
                        Phone Number
                    </label>

                    <input
                        type="text"
                        id="phone"
                        name="phone"
                        placeholder="Enter your phone number"
                    >
                </div>  
               <div class="d3-contact-field">
                    <label for="message">
                        Message
                    </label>
                    <textarea
                        id="message"
                        name="message"
                        rows="6"
                        placeholder="Tell us about your requirements..."
                        required
                    ></textarea>

                </div>


                <button
                    type="submit"
                    class="d3-contact-submit"
                >

                    Send Message

                    <span>
                        →
                    </span>

                </button>

            </form>

        </div>

    </div>

</section>


<!-- =====================================================
     FOOTER
===================================================== -->

<?= $this->include('design3/footer') ?>


<script src="<?= base_url('assets/js/design3.js') ?>"></script>

</body>

</html>